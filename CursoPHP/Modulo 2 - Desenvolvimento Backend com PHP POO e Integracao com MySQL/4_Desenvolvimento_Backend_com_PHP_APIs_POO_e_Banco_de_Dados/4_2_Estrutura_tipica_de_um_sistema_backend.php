<!-- 
4.2 Estrutura típica de um sistema backend
Antes de nos aprofundarmos no uso prático da Programação Orientada a Objetos (POO) e na integração com o MySQL, é essencial entender como se organiza um sistema backend moderno.

Um backend é composto por várias partes que trabalham juntas: ele recebe requisições, processa dados (geralmente com regras de negócio) e retorna respostas — seja para um site, aplicativo ou outra API.

De modo geral, a estrutura de um sistema backend simples segue uma arquitetura em camadas, onde cada camada tem uma função clara:

Camada de roteamento (ou de entrada) – recebe as requisições e decide o que fazer.
Camada de controle (controladores) – coordena a execução das ações.
Camada de modelo (modelos) – lida com os dados e o banco de dados.
Camada de resposta (saída) – envia o resultado da operação, geralmente em JSON.

4.2.1 Visão geral da arquitetura
O backend é o conjunto de componentes que funciona “por trás” de uma aplicação, sendo responsável por processar as requisições, armazenar dados e enviar respostas ao cliente. Enquanto o frontend representa a interface visual com a qual o usuário interage, o backend cuida da lógica de negócio, do tratamento das informações e da comunicação com o banco de dados (BEIGHLEY, 2021).

De forma simplificada, pode-se dizer que o backend é o cérebro do sistema: ele recebe uma solicitação, executa instruções internas e devolve o resultado de forma estruturada, geralmente em formato JSON (JavaScript Object Notation), adequado para trocas de dados na web (NIXON, 2021).

Uma das formas mais comuns de estruturar um backend é por meio de uma arquitetura em camadas (layered architecture), também conhecida como MVC (Model-View-Controller). Esse tipo de arquitetura separa as responsabilidades em blocos lógicos bem definidos, o que facilita a manutenção, o reuso e o entendimento do código (SOMMERVILLE, 2019).

Mesmo em projetos pequenos ou educacionais, compreender essa separação é fundamental, pois ela é utilizada em praticamente todos os frameworks modernos de desenvolvimento PHP, como Laravel, Slim e Symfony.

O fluxo básico de uma aplicação backend pode ser visualizado assim: 

O navegador ou app envia uma requisição HTTP para a API PHP (index.php), que aciona o controlador (UserController.php). 
O controlador chama o modelo (User.php), que acessa o banco de dados MySQL. 
Em seguida, a resposta JSON é enviada de volta ao cliente.

"Imagine o fluxo: o Cliente bate na porta (index.php), a Recepcionista (routes.php) checa o crachá e o destino, o Gerente (UserController) decide qual tarefa deve ser feita e pede os documentos ao Arquivista (User.php), que busca na gaveta (MySQL). No fim, o Gerente entrega a resposta pronta em uma pasta padronizada (JSON)."

4.2.2 Organização de pastas e arquivos
A organização de pastas e arquivos é um dos primeiros aspectos que diferenciam um código amador de um código profissional. Uma boa estrutura não apenas facilita o entendimento do projeto, mas também promove a reutilização de componentes, a manutenção futura e a colaboração entre desenvolvedores (SOMMERVILLE, 2019).

Em um sistema backend com PHP, mesmo sem o uso de frameworks, é importante adotar um padrão de organização que espelhe a arquitetura em camadas apresentada anteriormente. Essa estrutura modular permite ao aluno visualizar a hierarquia lógica do sistema e compreender como cada parte se relaciona com o todo (BEIGHLEY, 2021).

4.2.2.1 Estrutura básica de um projeto backend
A seguir, apresenta-se um exemplo de organização simples e funcional para um sistema backend desenvolvido em PHP:

projeto-backend/
├── public/
│   └── index.php                        # Ponto de entrada principal do sistema
├── src/
│   ├── controllers/
│   │   └── UserController.php           # Controladores (lógica da aplicação)
│   ├── models/
│   │   └── User.php                     # Modelos (acesso e manipulação de dados)
│   ├── config/
│   │   └── Database.php                 # Classe de conexão ao banco de dados
│   └── routes/
│       └── routes.php                   # Definição de rotas e mapeamento de endpoints
└── tests                
       └── requests.rest                 # Testes das rotas

Essa estrutura é simples, mas reflete princípios fundamentais de engenharia de software, como coesão, modularidade e baixo acoplamento (SOMMERVILLE, 2019). Cada diretório tem um papel definido dentro do ciclo de execução da aplicação, o que facilita tanto o estudo quanto a implementação prática.

4.2.3 O ponto de entrada: index.php
Todo sistema backend precisa de um ponto de entrada principal — o local onde o servidor inicia o processamento de cada requisição. No PHP, esse papel é tradicionalmente exercido pelo arquivo index.php, que atua como a “porta de entrada” da aplicação (BEIGHLEY, 2021).

Sempre que um usuário acessa o endereço do site ou realiza uma requisição para a API (por exemplo, http://localhost/users), é o index.php que recebe a solicitação. A partir daí, ele carrega os componentes necessários, interpreta a rota e encaminha a requisição ao controlador apropriado.

Segundo Nixon (2021), esse mecanismo garante que o backend mantenha uma estrutura centralizada e previsível, pois todas as requisições passam por um único arquivo antes de seguir para o restante do sistema — conceito conhecido como Front Controller Pattern.

Dessa forma, o arquivo index.php desempenha três funções principais:

Inicializar o ambiente do servidor: Carrega configurações básicas, define cabeçalhos HTTP e configura o tipo de resposta (geralmente JSON em APIs).

Carregar o roteamento: Inclui o arquivo responsável por identificar o caminho (rota) e o método HTTP da requisição.
Gerenciar o fluxo de execução: Encaminha a requisição para o controlador e retorna uma resposta ao cliente.

Essas etapas garantem que o backend mantenha um ponto de controle único, facilitando o tratamento de erros e o gerenciamento das dependências (SOMMERVILLE, 2019).

O código a seguir mostra uma estrutura didática e funcional do arquivo /public/index.php em nosso projeto:
-->

<?php
// ===============================================
// Arquivo principal de entrada da aplicação PHP
// ===============================================

// Define que o retorno será em formato JSON
header('Content-Type: application/json; charset=utf-8');

// Ativa a exibição de erros (apenas em ambiente de testes)
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Carrega o roteamento da aplicação
require_once __DIR__ . '/../src/routes/routes.php';
?>
<!--
Veja abaixo como funciona:

O cabeçalho Content-Type informa ao navegador ou cliente HTTP que a resposta será em formato JSON, padrão em APIs RESTful.

As diretivas ini_set() e error_reporting() ativam a exibição de erros para fins de aprendizado — uma boa prática em ambiente de desenvolvimento, mas não em produção (NIXON, 2021).

O comando require_once importa o arquivo responsável por gerenciar as rotas e encaminhar a execução ao controlador correto.

4.2.4 O roteador: definindo os caminhos da aplicação
O roteador é o componente do backend responsável por interpretar as requisições HTTP e direcioná-las para o controlador correto, com base no caminho da URL (rota) e no método HTTP utilizado (GET, POST, PUT ou DELETE). Em outras palavras, o roteador funciona como um “mapa de caminhos” da aplicação: ele determina qual funcionalidade será executada quando uma requisição chega ao servidor.

De acordo com Beighley (2021), compreender o roteamento é fundamental para o desenvolvimento backend, pois ele representa o elo entre o cliente (frontend ou API externa) e as camadas internas do sistema.

Nas APIs RESTful, o roteamento é o mecanismo que permite ao sistema associar URLs a recursos e ações específicas, mantendo um padrão de comunicação previsível e organizado (NIXON, 2021).

O código a seguir mostra um roteador básico implementado em PHP, responsável por tratar requisições REST (GET, POST, PUT e DELETE) para o recurso “usuários”. Assim, altere o arquivo src/routes/routes.php com o seguinte código:
-->

<?php
// ===============================================
// Roteador baseado em método HTTP
// ===============================================

// Importa o controlador responsável pelas ações de usuário
require_once __DIR__ . '/../controllers/UserController.php';

// Define que todas as respostas serão retornadas em formato JSON
header('Content-Type: application/json; charset=utf-8');

// Captura o caminho solicitado (ex.: /users ou /users/1)
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Captura o método HTTP da requisição (GET, POST, PUT, DELETE, etc.)
$method = $_SERVER['REQUEST_METHOD'];

// Cria uma instância do controlador para manipular as rotas
$controller = new UserController();

// Estrutura de decisão com base no método HTTP
switch ($method) {
    // -----------------------------------------------------------
    // Método GET → utilizado para listar ou buscar informações
    // -----------------------------------------------------------
    case 'GET':
        if ($path === '/users') {
            // Exemplo: GET /users → lista todos os usuários
            $controller->listarUsuarios();
        } else {
            // Rota não encontrada para o método GET
            http_response_code(404);
            echo json_encode(['erro' => 'Rota GET não encontrada']);
        }
        break;
    // -----------------------------------------------------------
    // Método POST → utilizado para criar novos registros
    // -----------------------------------------------------------
    case 'POST':
        if ($path === '/users') {
            // Exemplo: POST /users → cria um novo usuário
            $controller->criarUsuario();
        } else {
            http_response_code(404);
            echo json_encode(['erro' => 'Rota POST não encontrada']);
        }
        break;

    // -----------------------------------------------------------
    // Método PUT → utilizado para atualizar registros existentes
    // -----------------------------------------------------------
    case 'PUT':
        // Verifica se a rota segue o padrão /users/{id}
        if (preg_match('#^/users/(\d+)$#', $path, $matches)) {
            // $matches[1] captura o valor numérico do ID
            $controller->atualizarUsuario($matches[1]);
        } else {
            http_response_code(404);
            echo json_encode(['erro' => 'Rota PUT não encontrada']);
        }
        break;

    // -----------------------------------------------------------
    // Método DELETE → utilizado para excluir registros
    // -----------------------------------------------------------
    case 'DELETE':
        // Verifica se a rota segue o padrão /users/{id}
        if (preg_match('#^/users/(\d+)$#', $path, $matches)) {
            // Chama o método de exclusão passando o ID encontrado
            $controller->excluirUsuario($matches[1]);
        } else {
            http_response_code(404);
            echo json_encode(['erro' => 'Rota DELETE não encontrada']);
        }
        break;

    // -----------------------------------------------------------
    // Outros métodos HTTP não suportados (ex.: PATCH, OPTIONS)
    // -----------------------------------------------------------
    default:
        http_response_code(405); // Código 405 → Método não permitido
        echo json_encode(['erro' => 'Método HTTP não suportado']);
}
?>

<!--
Esse código implementa um roteador básico de API em PHP, responsável por identificar o tipo de requisição HTTP (GET, POST, PUT ou DELETE) e encaminhar para a ação correta dentro do controlador UserController.

Primeiro, ele define o cabeçalho JSON, garantindo que todas as respostas sigam o formato usado em APIs modernas. Depois, captura o caminho da URL (por exemplo, /users ou /users/3) e o método HTTP usado pelo cliente. Em seguida, cria uma instância de UserController, que contém as funções que realmente executam as ações.

O switch analisa o método HTTP e decide o que fazer:

GET → lista ou busca usuários.
POST → cria um novo usuário.
PUT → atualiza um usuário existente (com ID capturado na URL).
DELETE → exclui um usuário específico.

Se o método ou a rota não existirem, o código responde com mensagens de erro e códigos HTTP adequados (como 404 ou 405).

4.2.5 O controlador: intermediário entre rotas e modelos
O controlador (Controller) é o componente responsável por intermediar a comunicação entre as rotas e os modelos de dados. Ele atua como uma espécie de “ponte” que recebe as requisições enviadas pelo roteador, processa as informações e aciona os métodos adequados dos modelos (classes que representam os dados e as regras de negócio).

De acordo com Beighley (2021), o controlador é a camada que traduz o pedido do usuário em ações concretas dentro do sistema — como criar, atualizar, buscar ou excluir informações no banco de dados. A responsabilidade do controlador é, portanto, gerenciar o fluxo da requisição e garantir que o backend retorne uma resposta coerente e estruturada, sem que a lógica de negócio fique espalhada em diferentes partes do código.

Em sistemas modernos, essa arquitetura segue o padrão MVC (Model–View–Controller), no qual o Controller coordena as interações entre o Model (dados e lógica) e a View (interface com o usuário). No caso de APIs RESTful, a View é substituída pela resposta JSON retornada ao cliente (NIXON, 2021).

O controlador é geralmente implementado como uma classe PHP, onde cada método representa uma funcionalidade do sistema. No exemplo a seguir, temos o nosso arquivo UserController.php, responsável por manipular as operações do recurso “usuários”.
-->
<?php
// ===============================================
// Classe responsável por gerenciar as ações de usuários
// Faz a ponte entre as requisições vindas do roteador
// e as operações realizadas pelo modelo (User.php)
// ===============================================

// Importa o arquivo que contém a classe User (modelo)
require_once __DIR__ . '/../models/User.php';

class UserController
{
    // ==================================================
    // Retorna todos os usuários cadastrados
    // ==================================================
    public function listarUsuarios(): void
    {
        $userModel = new User();              // Cria uma instância do modelo
        $usuarios = $userModel->buscarTodos(); // Chama o método que busca todos os registros
        $this->respostaJson($usuarios);   // Retorna os dados no formato JSON
    }

    // ==================================================
    // Cadastra um novo usuário
    // ==================================================
    public function criarUsuario(): void
    {
        // Lê o corpo da requisição e converte o JSON em array PHP
        $dados = json_decode(file_get_contents('php://input'), true);

        // Verifica se o JSON foi enviado malformado (faltando uma vírgula, por exemplo)
        if (json_last_error() !== JSON_ERROR_NONE) {
            $this->respostaJson(['erro' => 'JSON inválido'], 400);
            return;
        }

        // Verifica se os campos obrigatórios foram enviados
        if (empty($dados['nome']) || empty($dados['email'])) {
            $this->respostaJson(['erro' => 'Campos obrigatórios: nome e email'], 400);
            return; // Encerra o método se os dados estiverem incompletos
        }

        // Chama o modelo para inserir os dados no banco
        $userModel = new User();
        $novo = $userModel->criar($dados['nome'], $dados['email']);

        // Retorna o usuário criado com código 201 (Created)
        $this->respostaJson($novo, 201);
    }

    // ==================================================
    // Atualiza os dados de um usuário existente
    // ==================================================
    public function atualizarUsuario(int $id): void
    {
        // Lê o corpo da requisição e converte o JSON em array
        $dados = json_decode(file_get_contents('php://input'), true);

        // Se nenhum dado foi enviado, retorna erro
        if (empty($dados)) {
            $this->respostaJson(['erro' => 'Nenhum dado recebido'], 400);
            return;
        }

        $userModel = new User();
        $atualizado = $userModel->atualizar($id, $dados);

        if ($atualizado) {
            // Retorna mensagem de sucesso
            $this->respostaJson(['mensagem' => 'Usuário atualizado com sucesso']);
        } else {
            // Se o ID não existir, retorna erro 404
            $this->respostaJson(['erro' => 'Usuário não encontrado'], 404);
        }
    }

    // ==================================================
    // Exclui um usuário do banco de dados
    // ==================================================
    public function excluirUsuario(int $id): void
    {
        $userModel = new User();
        $excluido = $userModel->excluir($id);

        if ($excluido) {
            $this->respostaJson(['mensagem' => 'Usuário excluído com sucesso']);
        } else {
            $this->respostaJson(['erro' => 'Usuário não encontrado'], 404);
        }
    }
    // ==================================================
    // Padroniza todas as respostas da API
    // ==================================================
    private function respostaJson($dados, int $status = 200): void
    {
        http_response_code($status);       // Define o código HTTP da resposta
        header('Content-Type: application/json; charset=utf-8'); // Define o tipo de conteúdo
        echo json_encode($dados, JSON_UNESCAPED_UNICODE); // Converte o array em JSON
        exit; // Encerra o script após enviar a resposta
    }
}
?>
<!--
Vamos compreender o código acima:

listarUsuarios() → obtém todos os registros chamando o modelo User e retorna o resultado em formato JSON.
criarUsuario() → lê o corpo JSON da requisição (php://input), valida os dados obrigatórios e aciona o método de criação no modelo.
atualizarUsuario() → recebe um ID e um conjunto de dados para atualizar, verificando se o corpo da requisição não está vazio.
excluirUsuario() → chama o modelo para excluir o registro e envia mensagens diferentes conforme o sucesso da operação.
respostaJson() → padroniza o formato das respostas e o código HTTP, mantendo consistência em toda a API.

Observem que há necessidade de observar o uso dos códigos de status HTTP corretos:

200 OK → requisição bem-sucedida
201 Created → recurso criado
400 Bad Request → erro de validação
404 Not Found → recurso inexistente
500 Internal Server Error → erro inesperado no servidor

4.2.6 O modelo: lógica de dados e integração com o banco MySQL
O modelo (Model) é a camada responsável por manipular os dados da aplicação e realizar a comunicação com o banco de dados. Enquanto o controlador decide o que deve ser feito, o modelo define como isso será feito — ou seja, como os dados serão consultados, inseridos, atualizados ou excluídos (BEIGHLEY, 2021).

Em uma arquitetura backend, o modelo representa a lógica de negócio e a estrutura das entidades da aplicação. Por exemplo, um modelo User define como o sistema manipula informações de usuários: quais campos existem, como eles são validados e como são persistidos no banco MySQL.

O modelo é responsável por:
Estabelecer a conexão com o banco MySQL;
Executar consultas SQL (SELECT, INSERT, UPDATE, DELETE);
Retornar os resultados ao controlador, prontos para serem enviados ao cliente;
Tratar erros e exceções relacionados ao banco.

Dessa forma, o modelo abstrai os detalhes técnicos da comunicação com o banco de dados, permitindo que o controlador trabalhe de forma mais simples e expressiva (NIXON, 2021).

Cabe ressaltar que o PHP oferece diversas formas de se conectar ao banco de dados, sendo o PDO (PHP Data Objects) uma das mais modernas e seguras. Ela suporta múltiplos bancos (MySQL, PostgreSQL, SQLite, etc.) e facilita o uso de prepared statements, que protegem contra ataques de injeção de SQL.

4.2.6.1 Criando a classe de conexão (Database.php)
A classe de conexão centraliza as informações de acesso ao banco e garante que apenas uma instância seja utilizada durante toda a execução. 

Observe o arquivo src/config/Database.php.
?>
-->

<?php
// ===============================================
// Classe de conexão com o banco de dados MySQL
// Essa classe centraliza a criação da conexão PDO,
// facilitando o acesso ao banco em todo o sistema.
// ===============================================

class Database
{
    // -----------------------------------------------
    // Propriedades privadas de configuração
    // -----------------------------------------------
    private $host = "localhost";     // Endereço do servidor de banco de dados
    private $db_name = "sistema_php"; // Nome do banco de dados
    private $username = "root";       // Usuário do banco (padrão local do XAMPP)
    private $password = "";           // Senha do banco (geralmente vazia no ambiente local)
    private $conn;                    // Armazena a conexão ativa (objeto PDO)

    // Dica de mestre: Explique que em projetos reais, essas informações (host, usuário, senha) nunca ficam "hardcoded" no arquivo, mas sim em um arquivo .env, para evitar que senhas vazem no GitHub.

    // -----------------------------------------------
    // Método responsável por criar e retornar a conexão
    // -----------------------------------------------
    public function getConnection(): PDO
    {
        $this->conn = null; // Garante que a variável começa vazia

        try {
            // Cria uma nova conexão PDO com os parâmetros definidos acima
            $this->conn = new PDO(
                "mysql:host={$this->host};dbname={$this->db_name};charset=utf8",
                $this->username,
                $this->password
            );

            // Define o modo de erro do PDO para lançar exceções
            // Isso facilita o tratamento de erros no código
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // Caso ocorra algum erro de conexão (ex.: banco inexistente, senha errada),
            // o sistema retorna uma mensagem JSON com o erro.
            echo json_encode(["erro" => "Erro ao conectar ao banco: " . $e->getMessage()]);
            exit; // Interrompe a execução do script
        }

        // Retorna o objeto de conexão PDO para ser usado em outras classes (ex.: modelo)
        return $this->conn;
    }
}
?>

<!--
Essa classe cria a conexão com o banco de dados MySQL usando a biblioteca PDO (PHP Data Objects), que é segura e moderna.

O método getConnection() é chamado quando outro arquivo precisa acessar o banco.
Ele tenta se conectar com as credenciais configuradas e, em caso de erro, interrompe o programa e mostra uma mensagem clara.

O PDO::ATTR_ERRMODE com PDO::ERRMODE_EXCEPTION faz o PHP lançar exceções quando algo dá errado, ajudando na depuração.

4.2.6.2 Criando o modelo User.php
O modelo User representa a tabela usuarios no banco MySQL. Cada método executa uma operação CRUD (Create, Read, Update, Delete), comunicando-se com o banco por meio da classe Database. 

Observe o arquivo src/models/User.php.
-->

<?php
// ===============================================
// Modelo que representa a tabela 'usuarios'
// Essa classe faz a comunicação direta com o banco de dados,
// executando consultas SQL (SELECT, INSERT, UPDATE e DELETE).
// ===============================================

// Importa a classe de conexão com o banco de dados
require_once __DIR__ . '/../config/Database.php';

class User
{
    // Propriedades privadas
    private $conn;              // Armazena a conexão PDO ativa
    private $table = "usuarios"; // Nome da tabela no banco de dados

    // -----------------------------------------------
    // Construtor: é chamado automaticamente ao criar o objeto
    // -----------------------------------------------
    public function __construct()
    {
        // Cria uma instância da classe Database
        $database = new Database();

        // Obtém a conexão com o banco e armazena em $this->conn
        $this->conn = $database->getConnection();
    }
    // ===========================================================
    // Retorna todos os registros da tabela 'usuarios'
    // ===========================================================
    public function buscarTodos(): array
    {
        // Monta o comando SQL
        $sql = "SELECT id, nome, email FROM {$this->table}";

        // Prepara o comando para execução segura
        $stmt = $this->conn->prepare($sql);

        // Executa o comando
        $stmt->execute();

        // Retorna todos os resultados em formato de array associativo
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // ===========================================================
    // Insere um novo usuário na tabela
    // ===========================================================
    public function criar(string $nome, string $email): array
    {
        // SQL para inserir um novo registro
        $sql = "INSERT INTO {$this->table} (nome, email) VALUES (:nome, :email)";

        // Prepara o comando
        $stmt = $this->conn->prepare($sql);

        // Associa os parâmetros aos valores recebidos
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);

        // Executa o comando INSERT
        $stmt->execute();

        // Recupera o ID gerado automaticamente pelo banco
        $id = $this->conn->lastInsertId();

        // Retorna os dados do novo usuário criado
        return ['id' => $id, 'nome' => $nome, 'email' => $email];
    }

    // ===========================================================
    // Altera nome e e-mail de um usuário existente
    // ===========================================================
    public function atualizar(int $id, array $dados): bool
    {
        // SQL de atualização com parâmetros nomeados
        $sql = "UPDATE {$this->table} SET nome = :nome, email = :email WHERE id = :id";

        // Prepara o comando SQL
        $stmt = $this->conn->prepare($sql);

        // Substitui os parâmetros pelos dados recebidos
        $stmt->bindParam(':nome', $dados['nome']);
        $stmt->bindParam(':email', $dados['email']);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        // Retorna true se a execução foi bem-sucedida
        $stmt->execute();
        return $stmt->rowCount() > 0; // Retorna true apenas se alguma linha foi realmente alterada/excluída
    }
    // ===========================================================
    // Remove um usuário do banco de dados
    // ===========================================================
    public function excluir(int $id): bool
    {
        // SQL de exclusão
        $sql = "DELETE FROM {$this->table} WHERE id = :id";

        // Prepara o comando SQL
        $stmt = $this->conn->prepare($sql);

        // Substitui o parâmetro :id pelo valor informado
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        // Executa o comando e retorna true/false
        $stmt->execute();
        return $stmt->rowCount() > 0; // Retorna true apenas se alguma linha foi realmente alterada/excluída
    }
}
?>

<!--
Vejamos como funciona este código:

Conexão com o banco: Ao criar um novo objeto User, o construtor (__construct) abre automaticamente a conexão MySQL usando a classe Database.

> Método buscarTodos():  Executa uma consulta SELECT que retorna todos os usuários como um array associativo (PDO::FETCH_ASSOC).
> Método criar():  Insere um novo registro e retorna o ID gerado automaticamente (lastInsertId()).  Usa prepared statements para evitar injeção de SQL. O uso de bindParam garante que o valor do ID seja tratado de forma segura.
> Método atualizar(): Atualiza os dados de um usuário específico. Retorna true em caso de sucesso ou false se falhar.
> Método excluir(): Remove um registro com base no ID recebido. Em caso de sucesso, o PDO retorna true. 


4.2.7 Testando a API com o arquivo requests.rest
Para utilizar este arquivo, você deve instalar a extensão REST Client no seu VS Code. Após instalar, um pequeno botão chamado Send Request aparecerá acima de cada método.

HTTP
### Variáveis Globais (Facilitam a manutenção)
@baseUrl = http://localhost:8000

### 1. Listar todos os usuários
GET {{baseUrl}}/users
Accept: application/json

###

### 2. Criar um novo usuário
# Nota: Deixe uma linha em branco entre o cabeçalho e o corpo (body)
POST {{baseUrl}}/users
Content-Type: application/json

{
    "nome": "Bruno Cássio",
    "email": "bruno@casa.com"
}

###

### 3. Atualizar um usuário existente
# Substitua o número 1 pelo ID que deseja alterar
PUT {{baseUrl}}/users/1
Content-Type: application/json

{
    "nome": "Bruno Cássio Marra",
    "email": "bruno.marra@descomplica.com"
}

###

### 4. Excluir um usuário
# Substitua o número 1 pelo ID que deseja remover
DELETE {{baseUrl}}/users/1
Accept: application/json

###

### 5. Teste de Rota Inexistente (Deve retornar 404)
GET {{baseUrl}}/rota-que-nao-existe
Por que usar este método de teste?
Documentação Viva: O arquivo já serve como uma documentação de como a API deve ser consumida.

Agilidade: Você não precisa preencher formulários HTML toda vez que alterar uma linha de código no backend.

Histórico: Os testes ficam salvos dentro do próprio repositório do projeto no GitHub.

Dica para os alunos:
Certifique-se de que o servidor local do PHP está rodando antes de clicar em Send Request. Se você estiver usando o XAMPP na pasta padrão, o comando no terminal seria:
php -S localhost:8000 -t public
Controller 