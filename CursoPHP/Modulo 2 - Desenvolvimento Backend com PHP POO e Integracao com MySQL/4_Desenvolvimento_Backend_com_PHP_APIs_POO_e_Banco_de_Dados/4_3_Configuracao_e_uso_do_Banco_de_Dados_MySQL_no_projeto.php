<!-- 
4.3 Configuração e uso do Banco de Dados MySQL no projeto
Para que as operações CRUD do sistema realmente armazenem e recuperem informações, é necessário configurar um banco de dados MySQL. Essa configuração é a base da integração entre o modelo PHP orientado a objetos e a persistência de dados, permitindo que as informações sejam gravadas de forma permanente.

O banco de dados é responsável por:

Armazenar os registros de forma estruturada e persistente;
Responder às consultas realizadas pelo modelo (SELECT, INSERT, UPDATE, DELETE);
Garantir integridade e consistência das informações;
Suportar múltiplos usuários e conexões simultâneas.

Em aplicações orientadas a objetos, o modelo atua como intermediário entre o PHP (camada lógica) e o MySQL (camada de dados), utilizando a interface PDO (PHP Data Objects) para executar comandos SQL de maneira segura e reutilizável (NIXON, 2021).

Com o servidor MySQL rodando, execute o script SQL abaixo no phpMyAdmin, MySQL Workbench ou no terminal:

-- Cria o banco de dados
CREATE DATABASE sistema_php CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

-- Seleciona o banco
USE sistema_php;

-- Cria a tabela de usuários
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(120) NOT NULL UNIQUE,
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
-- Insere registros iniciais para testes
INSERT INTO usuarios (nome, email) VALUES
('Ana Souza', 'ana.souza@ifrs.edu.br'),
('Bruno Carvalho', 'bruno.carvalho@ifrs.edu.br'),
('Carla Menezes', 'carla.menezes@ifrs.edu.br');

Observe que o comando CREATE DATABASE sistema_php cria um novo banco de dados chamado sistema_php, configurado com o conjunto de caracteres utf8mb4, que suporta acentuação e emojis, e a collation utf8mb4_general_ci, que define como os textos serão comparados, ignorando diferenças entre maiúsculas e minúsculas. Em seguida, o comando USE sistema_php indica que todos os comandos seguintes serão executados dentro desse banco de dados. Depois, o CREATE TABLE usuarios cria uma tabela chamada usuarios com quatro colunas:

id: número inteiro que identifica cada usuário de forma única e é gerado automaticamente;
nome: texto de até 100 caracteres, obrigatório;
email: texto de até 120 caracteres, obrigatório e sem duplicações;
criado_em: data e hora em que o registro foi criado, preenchida automaticamente pelo banco.

Por fim, adicionamos 3 usuários iniciais. Em resumo, esse conjunto de comandos define a estrutura básica do banco de dados que será usada pela aplicação PHP que estamos desenvolvendo. 
-->