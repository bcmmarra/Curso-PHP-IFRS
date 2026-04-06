<!-- 
3.1 O que é banco de dados relacional?
3.1.1 Introdução
Um banco de dados relacional é um sistema utilizado para armazenar informações de maneira organizada, em estruturas chamadas tabelas. Cada tabela pode ser vista como uma planilha, com linhas (registros) e colunas (campos). Esse modelo foi proposto por Edgar F. Codd na década de 1970 e se tornou o padrão mais utilizado no desenvolvimento de sistemas (BEIGHLEY, 2021).

O diferencial dos bancos relacionais está na possibilidade de criar relações entre tabelas. Isso significa que dados podem ser distribuídos em diferentes tabelas, mas conectados por meio de chaves (primárias e estrangeiras). Esse modelo garante organização, consistência e eficiência na manipulação das informações.

Um exemplo simples: em um sistema escolar, podemos ter uma tabela Alunos e outra tabela Turmas. Um aluno pertence a uma turma, e essa relação pode ser registrada sem duplicar informações, apenas utilizando identificadores. 

No contexto do PHP, os bancos relacionais — em especial o MySQL — são fundamentais para armazenar dados de forma persistente e integrados às aplicações web.

3.1.2 Exemplo prático: Criando um banco de dados e uma tabela
Vamos imaginar que queremos armazenar informações de alunos em um sistema escolar. Para isso, criaremos um banco de dados chamado escola e uma tabela chamada alunos. 

-- Criando o banco de dados chamado 'escola'
CREATE DATABASE escola;

-- Selecionando o banco para uso
USE escola;

-- Criando a tabela 'alunos'
CREATE TABLE alunos (
    id INT AUTO_INCREMENT PRIMARY KEY, -- Identificador único de cada aluno
    nome VARCHAR(100) NOT NULL,        -- Nome do aluno (até 100 caracteres, obrigatório)
    idade INT,                         -- Idade do aluno
    turma VARCHAR(50)                  -- Nome ou código da turma
);

-- Inserindo registros na tabela 'alunos'
INSERT INTO alunos (nome, idade, turma) VALUES ("João Silva", 16, "1A");
INSERT INTO alunos (nome, idade, turma) VALUES ("Maria Souza", 17, "2B");
INSERT INTO alunos (nome, idade, turma) VALUES ("Ana Costa", 15, "1A");

-- Consultando todos os registros da tabela
SELECT * FROM alunos;

Vejamos o que foi realizado:

Primeiro, criamos um banco de dados chamado escola e selecionamos ele com o comando USE escola.
Em seguida, definimos a tabela alunos. Ela contém:

id: chave primária (PRIMARY KEY), que identifica de forma única cada aluno.
nome: campo de texto obrigatório (NOT NULL), limitado a 100 caracteres.
idade: campo numérico para armazenar a idade.
turma: campo de texto para identificar a turma do aluno.

Inserimos três registros na tabela usando o comando INSERT INTO.

Por fim, utilizamos o comando SELECT * FROM alunos; para visualizar os dados inseridos.

Esse exemplo mostra como o modelo relacional organiza as informações: cada aluno ocupa uma linha (registro) e suas características ficam nas colunas (campos). A chave primária id garante que não existam duplicações e que seja fácil localizar ou relacionar registros.

3.1.3 Importância para o desenvolvimento web
Ao usar bancos de dados relacionais, como o MySQL, conseguimos criar sistemas que armazenam informações de forma consistente e segura. Em conjunto com o PHP, é possível manipular esses dados dinamicamente: cadastrar usuários, exibir listas, atualizar informações e até excluir registros.

De acordo com Beighley (2021), aprender a trabalhar com bancos relacionais é o primeiro passo para construir aplicações que vão além do simples processamento em memória. Já o Manual Oficial do PHP (2025) mostra como integrar facilmente PHP com bancos de dados MySQL, permitindo que desenvolvedores criem soluções completas para a web.
-->