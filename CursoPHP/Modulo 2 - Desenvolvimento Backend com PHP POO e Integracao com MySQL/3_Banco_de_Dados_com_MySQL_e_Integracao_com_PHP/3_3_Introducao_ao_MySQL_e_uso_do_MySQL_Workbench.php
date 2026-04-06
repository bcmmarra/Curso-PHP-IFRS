<!-- 
3.3 Introdução ao MySQL e uso do MySQL Workbench
Depois de entender a estrutura de tabelas e tipos de dados, precisamos aprender a trabalhar diretamente com o banco MySQL. Isso pode ser feito de duas formas:

Pela linha de comando (CLI), que oferece controle total via terminal.

Pelo MySQL Workbench, uma interface gráfica que facilita bastante a vida de iniciantes e até de desenvolvedores experientes.

De acordo com Beighley (2021), conhecer ambos os ambientes é essencial: o terminal garante maior precisão e flexibilidade, enquanto o MySQL Workbench é mais visual e intuitivo para explorar e manipular dados.

3.3.1 O que é MySQL
Antes de começarmos a criar bancos e tabelas, precisamos entender o que é o MySQL e por que ele é tão importante no desenvolvimento de sistemas. O MySQL é um SGBD (Sistema de Gerenciamento de Banco de Dados Relacional). Isso significa que ele organiza as informações em tabelas que se relacionam entre si, permitindo consultas rápidas, seguras e estruturadas.

Segundo Beighley (2021), os bancos de dados relacionais surgiram para resolver o problema de organizar grandes quantidades de informações, permitindo que diferentes usuários possam acessá-las ao mesmo tempo sem perder consistência.

Mas, o que significa “relacional”?

Um banco de dados relacional trabalha com o conceito de tabelas que podem se relacionar entre si por meio de chaves.

Por exemplo:
Uma tabela alunos guarda informações sobre cada aluno (nome, idade, matrícula).
Uma tabela cursos guarda informações dos cursos (nome do curso, duração).
Para saber quais cursos cada aluno está matriculado, criamos uma relação entre as tabelas por meio de chaves.
Essa organização evita duplicação de dados e facilita a manutenção do sistema.

Estrutura básica do MySQL

O MySQL organiza os dados de forma hierárquica:

Servidor MySQL → é o software que gerencia tudo.
Banco de dados → um conjunto de tabelas (ex.: banco escola).
Tabelas → organizam dados em linhas e colunas (ex.: tabela alunos).
Colunas → representam os tipos de dados (nome, idade, nota).
Linhas (ou registros) → cada entrada de dado (um aluno específico).

Exemplo ilustrativo

Se tivermos uma tabela alunos, poderíamos representá-la assim:

Quadro 1 - Exemplificação da tabela alunos no SGBD

id      |nome       |idade      |curso      |
1       |Maria      |20         |Matemática |
2       |João       |22         |História   |
3       |Ana        |19         |Biologia   |

Cada linha é um aluno, cada coluna é uma informação sobre ele, e o conjunto todo forma a tabela.

Características principais do MySQL

De acordo com Ullman (2018) e o PHP Manual (2025), o MySQL se tornou popular por apresentar as seguintes características:

Gratuito e Open Source → disponível para qualquer pessoa utilizar e modificar.
Velocidade → é otimizado para consultas rápidas, mesmo com grandes volumes de dados.
Escalabilidade → pode ser usado em pequenos sites ou grandes sistemas empresariais.
Integração → funciona muito bem em conjunto com linguagens como PHP, formando a base do desenvolvimento web dinâmico.
Segurança → possui sistema de permissões, senhas e usuários diferentes, garantindo acesso controlado.

3.3.2 Usando o MySQL via linha de comando
Até agora entendemos o que é o MySQL e como ele organiza os dados. Agora vamos aprender a utilizar o MySQL diretamente no terminal (linha de comando). Esse é um dos jeitos mais diretos de interagir com o banco, muito usado por administradores de sistemas e desenvolvedores que precisam criar ou consultar dados rapidamente.

Segundo Beighley (2021), trabalhar na linha de comando é útil porque oferece mais controle e permite entender melhor o funcionamento interno do MySQL. Mesmo que você utilize o MySQL Workbench (uma interface gráfica), dominar os comandos básicos no terminal ajuda muito em situações reais de desenvolvimento.

Acessando o MySQL

Após instalar o MySQL, você pode acessar o sistema no terminal com o comando:

mysql -u root -p

Onde:
-u root → define o usuário que será utilizado. Por padrão, o administrador é o root. (Se for sem senha digite sem o -p)
-p → indica que o sistema pedirá a senha.

Ao digitar a senha correta, você entrará no ambiente do MySQL. O terminal mudará para algo como:

Isso significa que agora você está dentro do servidor MySQL e pode começar a executar comandos SQL.

Criando e usando um banco de dados

Vejamos um exemplo básico para praticar:

-- Criando um banco de dados chamado 'escola'
CREATE DATABASE escola;

-- Listando os bancos existentes
SHOW DATABASES;

-- Selecionando o banco para uso
USE escola;

-- Conferindo em qual banco estamos
SELECT DATABASE();

Vamos compreender estes comandos:

CREATE DATABASE cria um novo banco de dados.

SHOW DATABASES mostra todos os bancos disponíveis.

USE escola define que todos os próximos comandos serão executados dentro do banco escola.

SELECT DATABASE() retorna o nome do banco atualmente em uso.

Criando uma tabela na linha de comando

Vamos seguir nosso exemplo e criar uma tabela usando a linha de comando:

-- Criando a tabela alunos
CREATE TABLE alunos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    idade INT,
    curso VARCHAR(50)
);

-- Conferindo se a tabela foi criada
SHOW TABLES;

Aqui, criamos a tabela alunos dentro do banco escola, e depois verificamos se ela foi criada com sucesso.

Inserindo e consultando dados

Agora, vamos inserir dados nesta tabela e consultar se foram devidamente registrados no banco de dados:

-- Inserindo registros
INSERT INTO alunos (nome, idade, curso) VALUES
('Maria', 20, 'Matemática'),
('João', 22, 'História'),
('Ana', 19, 'Biologia');

-- Consultando todos os alunos cadastrados
SELECT * FROM alunos;

Explicando:

INSERT INTO adiciona novos registros à tabela.
SELECT * FROM alunos lista todos os registros da tabela alunos.

Neste caso, a saída esperada é:

id      |nome       |idade      |curso      |
1       |Maria      |20         |Matemática |
2       |João       |22         |História   |
3       |Ana        |19         |Biologia   |

3.3.3 O que é MySQL Workbench
Embora seja possível trabalhar com o MySQL apenas pelo terminal, muitos desenvolvedores preferem usar ferramentas gráficas para tornar o processo mais intuitivo e produtivo. O MySQL Workbench é a ferramenta oficial disponibilizada pela Oracle para gerenciamento de bancos de dados MySQL.

Segundo Beighley (2021), o MySQL Workbench ajuda tanto iniciantes quanto profissionais ao fornecer uma interface visual para administrar bancos de dados, escrever consultas SQL, modelar esquemas e até gerar diagramas ER (Entidade-Relacionamento).

O que é o MySQL Workbench?

O MySQL Workbench é uma aplicação desktop multiplataforma (Windows, Linux e macOS) que reúne em uma só interface vários recursos para trabalhar com MySQL. Ele oferece:

Gerenciamento de conexões: salvar dados de acesso para diferentes servidores locais ou remotos.
Execução de comandos SQL: interface para escrever, executar e salvar scripts SQL.
Criação e alteração de bancos e tabelas: tudo feito de forma visual.
Modelagem de dados: permite criar diagramas ER, que ajudam a planejar e documentar bancos de dados.
Administração de servidores: acompanhar usuários, permissões, backups e desempenho do banco.

Exemplo prático: Criando um banco no MySQL Workbench

Até aqui falamos sobre os conceitos de banco de dados relacionais e entendemos o papel do MySQL como sistema gerenciador. Agora é o momento de colocar a teoria em prática.

O MySQL Workbench será a ferramenta que utilizaremos para interagir de forma gráfica com o servidor MySQL. Em vez de escrever todos os comandos apenas no terminal, o Workbench nos permite visualizar os bancos de dados, executar consultas SQL, criar tabelas e inserir registros em uma interface amigável.

Vamos criar um exemplo prático para mostrar o uso desta ferramenta. A ideia aqui é criar um banco de dados chamado escola (se ainda não existir), adicionar a tabela professores e trabalhar com inserção e consulta de dados. Esse exemplo vai simular um cadastro simples de professores, com informações básicas como nome, disciplina e salário.

Passo 1 — Abrir o Workbench e conectar ao servidor

Inicie o MySQL Workbench.
Clique na conexão Local Instance MySQL (ou configure uma nova conexão informando host, usuário e senha).

Ao abrir, selecione a aba SQL Editor (ícone de “raio” para executar scripts).

Passo 2 — Criar o banco de dados escola

No editor, cole e execute:

-- Cria o banco 'escola' se ainda não existir
CREATE DATABASE IF NOT EXISTS escola;

-- Define 'escola' como o banco ativo
USE escola;

Explicação: usamos IF NOT EXISTS para evitar erro caso o banco já exista. O comando USE garante que os próximos comandos sejam executados dentro do banco correto.

Passo 3 — Criar a tabela professores

Agora, vamos criar a tabela professores:

-- Criação da tabela 'professores'
CREATE TABLE professores (
    id INT AUTO_INCREMENT PRIMARY KEY,     -- Identificador único
    nome VARCHAR(100) NOT NULL,            -- Nome do professor
    disciplina VARCHAR(50) NOT NULL,       -- Disciplina lecionada
    salario DECIMAL(8,2),                  -- Salário (com 2 casas decimais)
    contratado DATE,                       -- Data de contratação
    ativo BOOLEAN DEFAULT 1                -- Status: 1 = ativo, 0 = inativo
);

-- Confirmar a criação da tabela
SHOW TABLES;

Observe a explicação destes comandos:

id é a chave primária e cresce automaticamente.
nome e disciplina são campos obrigatórios.
salario usa DECIMAL porque envolve valores monetários.
contratado registra a data de contratação.
ativo indica se o professor ainda faz parte do quadro escolar.

Passo 4 — Inserir alguns professores

Agora, vamos inserir alguns professores nesta tabela:

-- Inserindo registros de exemplo
INSERT INTO professores (nome, disciplina, salario, contratado, ativo) VALUES
('Carlos Silva', 'Matemática', 4500.00, '2020-02-15', 1),
('Fernanda Lima', 'Português', 4200.50, '2019-08-10', 1),
('João Pereira', 'História', 4000.00, '2018-01-20', 0);

Onde:
Cada linha inserida representa um professor com seus dados.
O campo ativo diferencia quem está atualmente no quadro da escola (1) e quem já saiu (0).

Passo 4 — Consultando informações

Finalmente, vamos consultar as informações desta tabela:

-- Conferindo os dados inseridos
SELECT * FROM professores;

Observe que o comando SELECT * retorna todas as colunas para conferência.

A tabela possui seis colunas: id, nome, disciplina, salario, contratado e ativo. Há três registros preenchidos.
O primeiro é Carlos Silva, professor de Matemática, com salário de 4500, contratado em 15/02/2020 e ativo (valor 1).
O segundo é Fernanda Lima, professora de Português, com salário de 4200,50, contratada em 10/08/2019 e também ativa.
O terceiro é João Pereira, professor de História, com salário de 4000, contratado em 20/01/2018, porém inativo (valor 0).
-->