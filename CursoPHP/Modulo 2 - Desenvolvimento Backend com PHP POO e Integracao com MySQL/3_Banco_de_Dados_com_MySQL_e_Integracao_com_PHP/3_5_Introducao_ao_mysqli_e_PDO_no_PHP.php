<!-- 
3.5 Introdução ao mysqli e PDO no PHP
Até aqui aprendemos a manipular dados diretamente no MySQL utilizando comandos SQL. Porém, em uma aplicação web, precisamos que o PHP consiga se conectar ao banco de dados e executar essas operações.

Para isso, o PHP oferece duas formas principais:

MySQLi (MySQL Improved Extension) → uma extensão específica para trabalhar com bancos de dados MySQL.

PDO (PHP Data Objects) → uma interface mais genérica, que permite conectar o PHP a diferentes tipos de bancos de dados (não apenas MySQL).

De acordo com o Manual Oficial do PHP (2025), ambas as abordagens são modernas e seguras, mas cada uma tem características próprias que devem ser compreendidas antes da escolha.

3.5.1 — O que é MySQLi?
O MySQLi (MySQL Improved Extension) é a extensão moderna do PHP desenvolvida para permitir a comunicação direta entre aplicações PHP e bancos de dados MySQL. Ela substituiu a antiga API mysql_ (descontinuada desde o PHP 7.0) e traz melhorias importantes, como suporte à programação orientada a objetos, consultas preparadas, controle de transações e maior segurança contra ataques como SQL Injection (PHP MANUAL, 2025).

Diferentemente do PDO, que funciona como uma interface genérica para vários bancos de dados (PostgreSQL, SQLite, Oracle, entre outros), o MySQLi foi projetado exclusivamente para o MySQL. Isso significa que ele aproveita ao máximo os recursos específicos desse SGBD, tornando-o uma escolha eficiente em projetos que não exigem portabilidade para outros bancos (ULLMAN, 2018).

Em resumo:
Prefira MySQLi quando o sistema for “MySQL-only” e se deseja simplicidade com forte integração.
Prefira PDO quando houver a possibilidade de mudar o SGBD no futuro, garantindo maior flexibilidade.

Estabelecendo uma conexão com MySQLi

A primeira etapa para manipular dados com PHP é abrir uma conexão com o banco de dados. Essa conexão funciona como uma “ponte” pela qual o PHP envia comandos SQL e recebe os resultados. O MySQLi permite dois estilos de uso: Orientado a Objetos (OO) e Procedural.

Primeiro, veja como estabelecer uma conexão com o banco de dados no estilo orientado a objetos: 
-->
<?php
// 1) Criar a conexão
$mysqli = new mysqli('localhost', 'usuario', 'senha', 'escola', 3306);

// 2) Verificar erros de conexão
if ($mysqli->connect_error) {
    die('Erro de conexão: ' . $mysqli->connect_error);
}

// 3) Encerrar a conexão ao final
$mysqli->close();
?>

<!-- 
Nesse exemplo:
A classe mysqli é instanciada com servidor, usuário, senha, banco e porta.
Se houver falha na conexão, o programa encerra exibindo a mensagem de erro.
Por fim, a conexão é fechada com close(), liberando os recursos utilizados.

Agora, vejamos a mesma funcionalidade, mas no estilo procedural:
-->
<?php
$conn = mysqli_connect('localhost', 'usuario', 'senha', 'escola', 3306);

if (!$conn) {
    die('Erro de conexão: ' . mysqli_connect_error());
}

mysqli_close($conn);
?>

<!-- 
Aqui, utiliza-se a função mysqli_connect() para abrir a conexão, mysqli_connect_error() para tratar falhas e mysqli_close() para encerrá-la.

Observação: Neste curso utilizaremos o estilo orientado a objetos, por ser mais moderno e organizado.

Tratamento de erros e definição do charset

Quando trabalhamos com conexões entre PHP e MySQL, dois pontos fundamentais precisam ser garantidos:

Tratar erros de conexão e execução de forma organizada, para evitar que mensagens confusas ou inseguras cheguem ao usuário.

Definir corretamente o conjunto de caracteres (charset), para impedir problemas de acentuação e garantir compatibilidade com Unicode, incluindo símbolos e emojis.

A seguir, veremos como aplicar esses conceitos na prática em um projeto PHP:
-->
<?php
// Ativa o modo de exceções
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    // Criar a conexão
    $con = new mysqli("localhost", "usuario", "senha", "escola");

    // Definir charset
    $con->set_charset("utf8mb4");

    echo "Conexão realizada com sucesso!";
} catch (mysqli_sql_exception $e) {
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
}
?>

<!-- 
Esse código em PHP utiliza a extensão MySQLi para conectar-se a um banco de dados MySQL de forma mais segura, usando exceções para tratar erros.

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); – Ativa o modo de exceções, fazendo com que qualquer erro na conexão ou consulta lance uma exceção em vez de apenas retornar false.

try { ... } catch (mysqli_sql_exception $e) { ... } – Usa um bloco try/catch para capturar e tratar erros de conexão.

new mysqli("localhost", "usuario", "senha", "escola"); – Cria a conexão com o servidor MySQL, informando host, usuário, senha e banco de dados.

$con->set_charset("utf8mb4"); – Define o conjunto de caracteres da conexão como UTF-8 completo, garantindo suporte a acentos e emojis.

Se a conexão for bem-sucedida, exibe "Conexão realizada com sucesso!"; caso contrário, o catch captura o erro e mostra a mensagem "Erro ao conectar ao banco de dados: ...".

Execução de consultas básicas com MySQLi

Após estabelecer a conexão, podemos enviar comandos SQL ao banco e recuperar resultados. Isso é feito pelos métodos da classe mysqli no estilo orientado a objetos.

Vejamos um exemplo sobre como inserir dados no banco com INSERT:
-->
<?php
// Ativar modo de exceções
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    // Conectar ao banco
    $con = new mysqli("localhost", "usuario", "senha", "escola");
    $con->set_charset("utf8mb4");

    // Inserir um novo aluno
    $sql = "INSERT INTO alunos (nome, idade, curso) VALUES ('Carlos Pereira', 17, 'Matemática')"; // Aqui digita o comando SQL do Banco de Dados.
    $con->query($sql); // Aqui executa o camando.

    echo "Aluno inserido com sucesso!";
} catch (mysqli_sql_exception $e) {
    echo "Erro: " . $e->getMessage();
} finally {
    $con->close();
}
?>

<!-- 
Vejamos a explicação deste código:

query() executa o comando SQL diretamente.
Caso não haja erros, o aluno é adicionado à tabela.
O bloco finally garante que a conexão seja encerrada mesmo em caso de falha.

Agora, veremos como executar consulta aos dados com SELECT:
-->
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $con = new mysqli("localhost", "usuario", "senha", "escola");
    $con->set_charset("utf8mb4");

    // 1) Consultar todos os alunos cadastrados
    $sql = "SELECT id, nome, idade, curso FROM alunos";
    $resultado = $con->query($sql);

    // 2) Exibir os registros retornados
    while ($aluno = $resultado->fetch_assoc()) {
        echo "ID: " . $aluno['id'] .
             " - Nome: " . $aluno['nome'] .
             " - Idade: " . $aluno['idade'] .
             " - Curso: " . $aluno['curso'] . "<br>";
    }
} catch (mysqli_sql_exception $e) {
    echo "Erro: " . $e->getMessage();
} finally {
    $con->close();
}
?>

<!-- 
Vejamos o que acontece aqui:

O comando SELECT id, nome, idade, curso FROM alunos recupera todos os registros.
O método fetch_assoc() lê cada linha do resultado e retorna um array associativo com as colunas da tabela.
Os dados são exibidos no navegador em formato de lista.

Agora, vejamos como podemos atualizar os dados com UPDATE:
-->
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $con = new mysqli("localhost", "usuario", "senha", "escola");
    $con->set_charset("utf8mb4");

    // Atualizar a idade e o curso do aluno chamado "Carlos Pereira"
    // Atualize a tabela alunos, idade para 18 e curso para Física, onde o nome for Carlos Pereira.
    // Este método é inseguro, pois permite ataque de SQL Injection, veja abaixo o método seguro e indicado.
    $sql = "UPDATE alunos
            SET idade = 18, curso = 'Física'
            WHERE nome = 'Carlos Pereira'";
    $con->query($sql);

    echo "Dados do aluno atualizados com sucesso!";
} catch (mysqli_sql_exception $e) {
    echo "Erro: " . $e->getMessage();
} finally {
    $con->close();
}
?>

<?php
// 1) Configurações de erro
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $con = new mysqli("localhost", "usuario", "senha", "escola");
    $con->set_charset("utf8mb4");

    // 2) Preparar o SQL com "placeholders" (?)
    // O banco recebe o comando sem os dados reais primeiro
    $stmt = $con->prepare("INSERT INTO alunos (nome, idade, curso) VALUES (?, ?, ?)");

    // 3) Definir as variáveis (Simulando dados de um formulário)
    $nome  = "Bruno Cássio";
    $idade = 25;
    $curso = "Desenvolvimento Full Stack";

    /* 4) Vincular os parâmetros (bind_param)
       O primeiro argumento "sis" indica os tipos de dados:
       s = string (texto)
       i = integer (número inteiro)
       d = double (número decimal)
       b = blob (binário)
    */
    $stmt->bind_param("sis", $nome, $idade, $curso);

    // 5) Executar
    $stmt->execute();

    echo "Registro inserido com total segurança!";

    // 6) Fechar o statement e a conexão
    $stmt->close();

} catch (mysqli_sql_exception $e) {
    echo "Erro técnico: " . $e->getMessage();
} finally {
    $con->close();
}
?>

<!-- 
Observe que:

O comando UPDATE altera registros já existentes.
O uso de WHERE é fundamental: sem ele, todos os alunos da tabela seriam atualizados.
Neste caso, apenas o aluno com nome = 'Carlos Pereira' terá idade e curso modificados.

Por fim, Veremos como remover dados com DELETE: 
-->

<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $con = new mysqli("localhost", "usuario", "senha", "escola");
    $con->set_charset("utf8mb4");

    // Remover o aluno com id = 1
    $sql = "DELETE FROM alunos WHERE id = 1";
    $con->query($sql);

    echo "Aluno removido com sucesso!";
} catch (mysqli_sql_exception $e) {
    echo "Erro: " . $e->getMessage();
} finally {
    $con->close();
}
?>

<!-- 
Neste caso, observe que:

O comando DELETE remove registros da tabela.
O WHERE id = 1 garante que apenas o aluno com ID 1 seja excluído.
Caso o WHERE fosse omitido, todos os alunos seriam apagados da tabela — algo perigoso em ambientes reais.

3.5.2 — O que é PDO?
O PDO (PHP Data Objects) é uma extensão do PHP que fornece uma interface genérica para acessar diferentes sistemas de gerenciamento de banco de dados (SGBDs), como MySQL, PostgreSQL, SQLite, Oracle, SQL Server, entre outros.

Enquanto o MySQLi funciona apenas com o MySQL, o PDO foi projetado para permitir que aplicações PHP troquem de banco de dados sem grandes mudanças no código (PHP MANUAL, 2025). Isso torna o PDO mais flexível para projetos que podem evoluir ou migrar para outro SGBD no futuro.

Principais vantagens do PDO:
Portabilidade: funciona com vários bancos de dados.
Segurança: oferece suporte nativo a consultas preparadas, protegendo contra SQL Injection.
Orientado a objetos: toda a API é baseada em classes e métodos.
Flexibilidade: facilita a configuração de atributos como tratamento de erros e charset.

Estabelecendo uma conexão com PDO

A conexão é feita criando uma instância da classe PDO. Diferente do MySQLi, você precisa informar o DSN (Data Source Name), que define o tipo de banco, o host e o nome do banco de dados.

Vejamos um exemplo de conexão com PDO:
-->
<?php
try {
    // DSN: tipo de banco, host e nome do banco
    $dsn = "mysql:host=localhost;dbname=escola;charset=utf8mb4";
    $usuario = "usuario";
    $senha   = "senha";

    // Criando a conexão com PDO
    $pdo = new PDO($dsn, $usuario, $senha);

    // Definir modo de erros como exceções
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexão realizada com sucesso!";
} catch (PDOException $e) {
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
}
?>
<!--
Vamos para a explicação deste código:

O DSN indica: mysql:host=localhost;dbname=escola;charset=utf8mb4.
PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION ativa o tratamento de erros por exceções.
Caso algo dê errado, o catch captura o erro sem expor detalhes técnicos ao usuário final.

Execução de consultas básicas com PDO

Após estabelecer a conexão, podemos enviar comandos SQL ao banco e recuperar resultados. Vejamos um exemplo sobre como inserir dados no banco com INSERT:
 -->
<?php
try {
    $dsn = "mysql:host=localhost;dbname=escola;charset=utf8mb4";
    $pdo = new PDO($dsn, "usuario", "senha", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    // Inserção de dados usando consulta preparada
    $sql = "INSERT INTO alunos (nome, idade, curso) VALUES (:nome, :idade, :curso)";
    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ':nome'  => 'Maria Oliveira',
        ':idade' => 19,
        ':curso' => 'História'
    ]);

    echo "Aluno inserido com sucesso!";
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>

<!-- 
Observe que:

prepare() cria uma consulta preparada.
Os :parametros (placeholders) são substituídos pelos valores em execute().
Esse método evita SQL Injection.

OBS: SQL Injection é uma falha de segurança que ocorre quando comandos SQL maliciosos são inseridos em campos de entrada de dados (como formulários ou URLs), permitindo que um atacante acesse, modifique ou exclua informações de um banco de dados de forma indevida.

Agora, veremos como consultar dados com SELECT:
-->
<?php
try {
    $dsn = "mysql:host=localhost;dbname=escola;charset=utf8mb4";
    $pdo = new PDO($dsn, "usuario", "senha", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    // Selecionar todos os alunos
    $sql = "SELECT id, nome, idade, curso FROM alunos";
    $stmt = $pdo->query($sql);

    // Exibir registros
    while ($aluno = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "ID: " . $aluno['id'] .
             " - Nome: " . $aluno['nome'] .
             " - Idade: " . $aluno['idade'] .
             " - Curso: " . $aluno['curso'] . "<br>";
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>

<!-- 
Observe que:
query() executa o SELECT.
fetch(PDO::FETCH_ASSOC) retorna um array associativo com as colunas da tabela.
Os dados são percorridos em um while e exibidos no navegador.

Em seguida, veremos como atualizar os dados com UPDATE:
-->
<?php
try {
    $dsn = "mysql:host=localhost;dbname=escola;charset=utf8mb4";
    $pdo = new PDO($dsn, "usuario", "senha", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    $sql = "UPDATE alunos SET idade = :idade, curso = :curso WHERE nome = :nome";
    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ':idade' => 20,
        ':curso' => 'Matemática',
        ':nome'  => 'Maria Oliveira'
    ]);

    echo "Dados do aluno atualizados!";
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
<!-- 
Onde:
O WHERE limita a atualização a um aluno específico.
Sem WHERE, todos os registros seriam alterados.

Finalmente, veremos como remover dados com DELETE: 
-->
<?php
try {
    $dsn = "mysql:host=localhost;dbname=escola;charset=utf8mb4";
    $pdo = new PDO($dsn, "usuario", "senha", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    $sql = "DELETE FROM alunos WHERE id = :id";
    $stmt = $pdo->prepare($sql);

    $stmt->execute([':id' => 2]);

    echo "Aluno removido com sucesso!";
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>

<!-- 
Onde:
DELETE FROM alunos WHERE id = :id remove apenas o aluno com id = 2.
Sem WHERE, todos os alunos seriam apagados.

3.5.3 Comparação entre MySQLi e PDO
Ao aprender a integrar PHP com bancos de dados, é comum surgir a dúvida: devo usar MySQLi ou PDO? Ambas são soluções modernas, seguras e recomendadas, substituindo a antiga extensão mysql_ (descontinuada). Porém, cada uma delas apresenta características próprias que podem influenciar diretamente na escolha da tecnologia para um projeto.

Enquanto o MySQLi é uma extensão feita sob medida para o MySQL, aproveitando ao máximo os recursos específicos desse banco de dados, o PDO foi criado como uma camada de abstração mais genérica, permitindo que o mesmo código PHP funcione em diversos SGBDs diferentes, como PostgreSQL, SQLite, Oracle e SQL Server.

Essa distinção é fundamental: em projetos que ficarão apenas no MySQL, o MySQLi pode ser a opção mais direta e simples. Já em aplicações que podem precisar de portabilidade ou flexibilidade, o PDO se mostra a escolha mais estratégica.

Para facilitar essa análise, o quadro a seguir resume as principais diferenças entre MySQLi e PDO em termos de compatibilidade, estilo de uso, segurança e flexibilidade.

Quadro 1 - Comparativo entre MySQLi e PDO
Critério                |MySQLi (MySQL Improved Extension)                              |PDO (PHP Data Objects)  |
Compatibilidade         |Funciona apenas com MySQL                                      |Suporta diversos SGBDs (MySQL, PostgreSQL, SQLite, Oracle, SQL Server etc.)

Estilo de uso           | Procedural e Orientado a Objetos                              |Apenas Orientado a Objetos
Consultas preparadas    |Suporta                                                        |Suporta (com sintaxe padronizada)
Flexibilidade           |Limitado ao MySQL                                              |Portável entre diferentes bancos sem alterar muito o código
Segurança               |Oferece consultas preparadas (protege contra SQL Injection)    |Oferece consultas preparadas (protege contra SQL Injection)
Recursos específicos    |Aproveita funções exclusivas do MySQL                          |Mais genérico, não acessa funções exclusivas de cada banco
Indicação de uso        |Projetos que usarão apenas MySQL                               |Projetos que podem trocar de banco ou que buscam maior portabilidade
Parâmetros Nomeados     |Não suporta parâmetros nomeados (usa apenas ?).                |Suporta parâmetros nomeados (ex: :nome)

-->