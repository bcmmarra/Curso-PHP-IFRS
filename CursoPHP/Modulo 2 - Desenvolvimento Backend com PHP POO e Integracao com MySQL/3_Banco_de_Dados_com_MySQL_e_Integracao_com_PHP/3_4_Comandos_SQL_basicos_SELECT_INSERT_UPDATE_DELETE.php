<!-- 
3.4 – Comandos SQL básicos: SELECT, INSERT, UPDATE, DELETE
3.4.1 Introdução
Nesta seção você aprenderá os quatro comandos fundamentais da linguagem SQL para manipular dados em bancos relacionais: INSERT (inserir), SELECT (consultar), UPDATE (atualizar) e DELETE (excluir). Eles formam o núcleo do trabalho diário com um SGBD como o MySQL. Vamos utilizá-los sobre a tabela professores, criada anteriormente no MySQL Workbench. A proposta é: (1) anunciar o objetivo do exemplo; (2) executar o código com comentários; (3) explicar, em seguida, o que cada parte fez.

Como reforçam Beighley (2021) e Ullman (2018), dominar esses comandos é essencial para construir aplicações web que gravam, leem, alteram e removem informações de forma segura e previsível.

Contexto do exemplo

Banco: escola
Tabela: professores(id, nome, disciplina, salario, contratado, ativo)

3.4.2 – INSERT: Inserindo dados no MySQL
O comando INSERT é utilizado em SQL para incluir novas informações em uma tabela do banco de dados. Ele é fundamental porque permite alimentar o sistema com dados reais, que depois serão consultados, atualizados ou eventualmente removidos.

Segundo Beighley (2021), o INSERT é a porta de entrada para dar vida a um banco: sem dados, as tabelas são apenas estruturas vazias, sem utilidade prática. Ullman (2018) reforça que, em aplicações web, quase todo sistema começa sua jornada de interação gravando informações (por exemplo, quando um usuário se cadastra).

Estrutura geral do comando

A sintaxe básica é:
INSERT INTO nome_da_tabela (coluna1, coluna2, coluna3, ...)
VALUES (valor1, valor2, valor3, ...);

Onde:
INSERT INTO: indica a tabela onde o dado será inserido.
Colunas: lista de campos que receberão os valores.
VALUES: conjunto de dados que será armazenado nessas colunas.

Essa estrutura garante que cada valor corresponda exatamente a uma coluna, mantendo a consistência.

Exemplo prático
Suponha que já tenhamos criado a tabela professores com as colunas id, nome, disciplina, salario, contratado e ativo. Vamos inserir alguns registros:

-- Garantir que estamos no banco correto
USE escola;

-- Inserindo um único registro
INSERT INTO professores (nome, disciplina, salario, contratado, ativo)
VALUES ('Luciana Freitas', 'Geografia', 4300.00, '2021-03-10', 1);

-- Inserindo múltiplos registros em uma mesma instrução
INSERT INTO professores (nome, disciplina, salario, contratado, ativo) VALUES
('Paulo Andrade',     'Biologia',    4100.00, '2022-02-01', 1),
('Renata Moreira',    'Física',      4650.50, '2019-05-20', 1),
('Marcos Albuquerque','Matemática',  5200.00, '2018-09-12', 0);

Vejamos o que foi realizado:

Informar o banco correto:
O comando USE escola; assegura que estamos manipulando o banco de dados certo.
Isso é essencial em ambientes com vários bancos criados.

Inserindo um professor
O primeiro INSERT adiciona apenas um professor: Luciana Freitas.
O valor 1 em ativo indica que ela está atualmente em exercício.

Inserindo múltiplos professores
A segunda instrução insere três registros de uma vez, separados por vírgulas.
Isso melhora a performance em comparação a vários INSERT individuais (Beighley, 2021).

Auto incremento do id
Não é necessário informar o campo id porque ele é AUTO_INCREMENT.

O próprio MySQL gera o identificador automaticamente, garantindo unicidade.

Boas práticas
> Sempre nomeie as colunas no INSERT. Isso evita erros caso a ordem física da tabela mude futuramente.
> Atenção ao tipo de dado: números em colunas numéricas, datas no formato YYYY-MM-DD, strings entre aspas simples.
> Insira em lote: quando possível, agrupe vários registros em um mesmo INSERT para otimizar desempenho (Ullman, 2018).

3.4.3 – SELECT: Consultando dados no MySQL
O comando SELECT é provavelmente o mais usado em SQL, pois é responsável por consultar e exibir informações armazenadas no banco de dados.

Segundo Beighley (2021), sem o SELECT o banco seria apenas uma “caixa-preta”: poderíamos inserir e atualizar dados, mas nunca teríamos como utilizá-los.

Estrutura básica

SELECT colunas
FROM nome_da_tabela
WHERE condição
ORDER BY coluna ASC|DESC;

Onde:
SELECT colunas → indica quais campos queremos exibir.
FROM → indica a tabela.
WHERE → filtra registros de acordo com uma condição.
ORDER BY → ordena os resultados.

Exemplo prático
Vejamos um exemplo abaixo:

-- Selecionando todos os registros
SELECT * FROM professores;

-- Selecionando apenas nome e disciplina
SELECT nome, disciplina FROM professores;

-- Selecionando professores ativos
SELECT nome, salario FROM professores
WHERE ativo = 1
ORDER BY salario DESC;

Onde: 
O * retorna todos os campos da tabela.
O segundo comando traz apenas duas colunas, deixando o resultado mais limpo.
O terceiro exemplo mostra professores ativos, ordenados pelo salário em ordem decrescente.

Ullman (2018) lembra que boas consultas evitam trazer dados desnecessários, poupando recursos.

3.4.4 – UPDATE: Atualizando dados no MySQL
O comando UPDATE permite alterar informações já existentes no banco de dados. Ele é essencial para corrigir erros ou atualizar dados que mudaram com o tempo.

De acordo com Beighley (2021), o ponto mais importante do UPDATE é sempre usar WHERE, caso contrário, todos os registros da tabela serão modificados.

Estrutura básica
UPDATE nome_da_tabela
SET coluna1 = valor1, coluna2 = valor2
WHERE condição;

Exemplo prático

Vejamos um exemplo:

-- Atualizando o salário de um professor específico
UPDATE professores
SET salario = 4800.00
WHERE nome = 'Paulo Andrade';

-- Tornando todos os professores inativos
UPDATE professores
SET ativo = 0;

Onde:
O primeiro comando altera apenas o salário de Paulo Andrade.
O segundo exemplo (sem WHERE) afeta todos os professores, tornando-os inativos.
Esse segundo caso mostra o perigo de esquecer o WHERE: pode comprometer todos os dados de uma tabela.

3.4.5 – DELETE: Removendo dados no MySQL
O comando DELETE é utilizado para remover registros de uma tabela.

Holzner (2006) destaca que, como a exclusão é permanente, deve-se sempre confirmar bem as condições da exclusão.

Estrutura básica
DELETE FROM nome_da_tabela
WHERE condição;

Exemplo prático
Vejamos um exemplo:

-- Remover um professor específico
DELETE FROM professores
WHERE nome = 'Renata Moreira';

-- Remover todos os professores inativos
DELETE FROM professores
WHERE ativo = 0;

-- Remover todos os registros (cuidado!)
DELETE FROM professores;

Vejamos sua explicação:
No primeiro exemplo, apenas Renata Moreira é removida.
No segundo, todos os professores inativos saem da tabela.
O último comando apaga todos os registros, deixando a tabela vazia (mas a estrutura continua existindo) 
-->