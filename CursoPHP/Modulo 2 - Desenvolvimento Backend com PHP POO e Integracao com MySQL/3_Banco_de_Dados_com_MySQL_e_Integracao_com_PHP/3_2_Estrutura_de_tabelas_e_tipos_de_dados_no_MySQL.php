<!-- 
3.2 Estrutura de tabelas e tipos de dados no MySQL
No MySQL, os dados são organizados dentro de tabelas, e cada tabela é composta por colunas (campos) e linhas (registros). Para que o banco de dados saiba como armazenar e manipular cada informação, precisamos definir o tipo de dado de cada coluna.

A escolha correta do tipo de dado é essencial: ela garante consistência, desempenho e economia de espaço. Por exemplo, se você precisa guardar a idade de um aluno, não faz sentido usar um campo de texto, pois a idade é sempre um número.

De acordo com Beighley (2021), entender a estrutura de tabelas e os tipos de dados é a base para qualquer desenvolvedor que deseje criar sistemas confiáveis e otimizados.

3.2.1 Estrutura de uma tabela
Uma tabela no MySQL é definida por meio do comando CREATE TABLE. Ao criá-la, especificamos:

Nome da tabela.
Colunas (campos).
Tipo de dado de cada coluna.
Restrições (constraints), como NOT NULL, PRIMARY KEY, AUTO_INCREMENT, entre outras.

3.2.2 Tipos de dados mais comuns no MySQL
a) Tipos numéricos
INT: números inteiros (ex.: idades, códigos).
FLOAT/DOUBLE: números decimais de ponto flutuante (ex.: notas escolares).
DECIMAL: números decimais exatos, útil para valores monetários.

b) Tipos de texto
CHAR(n): texto fixo de tamanho definido.
VARCHAR(n): texto variável até um limite (muito usado).
TEXT: textos longos, como descrições.

c) Tipos de data e hora
DATE: apenas a data (AAAA-MM-DD).
DATETIME: data e hora juntas.
TIME: apenas a hora.

d) Outros tipos
BOOLEAN (ou TINYINT): verdadeiro (1) ou falso (0).
ENUM: lista de valores predefinidos.

3.2.3 Exemplo prático: Criando uma tabela com diferentes tipos de dados
Suponha que queremos registrar informações de alunos com mais detalhes, incluindo nome, idade, data de nascimento e se estão ativos no sistema.

-- Criando a tabela 'alunos' com vários tipos de dados
CREATE TABLE alunos (
    id INT AUTO_INCREMENT PRIMARY KEY,  -- Identificador único (inteiro e automático)
    nome VARCHAR(100) NOT NULL,         -- Nome do aluno (texto variável até 100 caracteres)
    idade INT,                          -- Idade do aluno (número inteiro)
    data_nascimento DATE,               -- Data de nascimento
    nota_final DECIMAL(5,2),            -- Nota final com duas casas decimais (ex.: 9.75)
    ativo BOOLEAN                       -- Status: ativo (1) ou inativo (0)
);

-- Inserindo dados na tabela
INSERT INTO alunos (nome, idade, data_nascimento, nota_final, ativo)
VALUES ("João Silva", 16, "2009-05-12", 8.75, 1);

INSERT INTO alunos (nome, idade, data_nascimento, nota_final, ativo)
VALUES ("Maria Souza", 17, "2008-02-20", 9.20, 1);

INSERT INTO alunos (nome, idade, data_nascimento, nota_final, ativo)
VALUES ("Pedro Costa", 18, "2007-11-03", 6.50, 0);

-- Consultando os registros
SELECT * FROM alunos;

Vejamos a explicação do código abaixo:

A tabela alunos foi criada com seis colunas, cada uma com um tipo específico.

id: inteiro, chave primária, incrementado automaticamente.
nome: texto variável de até 100 caracteres.
idade: inteiro.
data_nascimento: campo de data no formato AAAA-MM-DD.
nota_final: número decimal com duas casas, ideal para notas.
ativo: valor booleano para indicar se o aluno ainda está ativo no sistema.

Foram inseridos três registros, cada um representando um aluno diferente.

O comando SELECT * FROM alunos; lista todos os registros da tabela.

Esse exemplo mostra como os tipos de dados permitem modelar corretamente a informação, garantindo consistência e facilitando operações futuras (como cálculos com notas ou filtros por alunos ativos).

Neste contexto, cabe ressaltar que definir corretamente os tipos de dados em tabelas MySQL é essencial para construir bases de dados eficientes, seguras e organizadas. O PHP, quando integrado a esse banco, poderá manipular essas informações de forma estruturada, sem ambiguidades. Segundo Beighley (2021), dominar os tipos de dados é um passo fundamental para qualquer desenvolvedor que deseja criar sistemas robustos. Já o Manual do PHP (2025) reforça que entender a estrutura de tabelas é indispensável para realizar consultas e integrações mais avançadas. 
-->