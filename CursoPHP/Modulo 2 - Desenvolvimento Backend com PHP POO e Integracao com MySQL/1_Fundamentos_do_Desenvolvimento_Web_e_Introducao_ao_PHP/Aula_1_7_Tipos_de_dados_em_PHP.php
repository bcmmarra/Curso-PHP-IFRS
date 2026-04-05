<!-- 
1.7 Tipos de dados em PHP
A linguagem PHP permite a manipulação de diversos tipos de dados. Compreender cada tipo é essencial para desenvolver scripts mais robustos e com menor propensão a erros. Como uma linguagem de tipagem dinâmica, o PHP define automaticamente o tipo da variável de acordo com o valor atribuído a ela, sem a necessidade de declarações explícitas.

1.7.1 Classificação dos tipos primitivos
Os tipos de dados primitivos em PHP incluem:
- **String**: Representa uma sequência de caracteres, como palavras ou frases. Exemplo: $nome = "Bruno";
- **Integer**: Representa números inteiros, sem casas decimais. Exemplo: $idade = 35;
- **Float**: Representa números de ponto flutuante, ou seja, números com casas decimais. Exemplo: $preco = 19.99;
- **Boolean**: Representa valores verdadeiros ou falsos. Exemplo: $isAtivo = true;
- **Null**: Representa a ausência de valor. Exemplo: $variavel = null;
- **Array**: Representa uma coleção de valores, que podem ser de tipos diferentes. Exemplo: $frutas = array("maçã", "banana", "laranja");
- **Object**: Representa uma instância de uma classe, permitindo a criação de estruturas mais complexas. Exemplo: $pessoa = new Pessoa();
- **Resource**: Representa uma referência a um recurso externo, como uma conexão de banco de dados ou um arquivo aberto.

Segundo Powers (2017), a flexibilidade dos tipos no PHP permite criar protótipos rapidamente, porém, exige atenção do programador quanto à coerência dos dados.

1.7.2 Tipos numéricos: integer e float
Os tipos numéricos em PHP são fundamentais para realizar operações matemáticas e manipular valores numéricos. O tipo integer é utilizado para representar números inteiros, enquanto o tipo float é utilizado para representar números com casas decimais.

a) Inteiros (integer)
São valores como 10, -42 ou 2025. Podem ser escritos em:

- Decimal (base 10): $numero = 42;
- Octal (base 8): $numero = 0123;
- Hexadecimal (base 16): $numero = 0x2A;
- Binário (base 2, desde o PHP 5.4): $numero = 0b1010;

Veja um exemplo de uso de integer:
-->
<?php
$ano = 2025;
echo $ano;
?>

<!-- 
b) Ponto flutuante (float)
São números com casas decimais, como 3.14, -2.718, 0.333 ou 2.5e3 (que representa 2500). Por padrão, o PHP utiliza ponto (.) como separador decimal e permite a notação científica para representar números muito grandes ou muito pequenos. Por exemplo, 2.5e3 representa 2.5 multiplicado por 10 elevado a 3, o que resulta em 2500.

Veja um exemplo de uso de float:
-->
<?php
$pi = 3.14159;
echo "Valor de PI: $pi";
?>

<!--
1.7.3 Cadeias de caracteres: string
Strings são sequências de caracteres, como palavras ou frases. Elas podem ser definidas usando aspas simples (' ') ou aspas duplas (" "). A diferença entre elas é que as aspas duplas permitem a interpolação de variáveis e a interpretação de caracteres de escape, enquanto as aspas simples tratam o conteúdo literalmente.

Veja um exemplo de uso de strings:
-->
<?php
$mensagem = "Olá, mundo!";
echo $mensagem;
?>

<!--
Segundo Ullman (2018), aspas duplas interpretam variáveis dentro da string, enquanto aspas simples imprimem exatamente o que está entre elas.

Veja um exemplo de interpolação de variáveis com aspas duplas:
-->
<?php
$nome = "Carlos";
echo "Olá, $nome";   // Exibe: Olá, Carlos
echo 'Olá, $nome';   // Exibe: Olá, $nome
?>

<!--
1.7.4 Lógicos: boolean
O tipo boolean representa valores verdadeiros (true) ou falsos (false). Ele é amplamente utilizado em estruturas de controle, como condicionais e loops, para determinar o fluxo de execução do programa.

Veja um exemplo de uso de boolean:
-->
<?php
$maiorDeIdade = true;
if ($maiorDeIdade) {
    echo "Pode acessar o sistema.";
}
?>

<!--
1.7.5 Estruturas de dados: array e object
Arrays são coleções de valores, que podem ser indexados por números (arrays numéricos) ou por chaves (arrays associativos).
Objetos são instâncias de classes, que permitem a criação de estruturas mais complexas e a implementação de conceitos de programação orientada a objetos.

a) Arrays
Um array é uma estrutura de dados que permite guardar múltiplos valores dentro de uma única variável. Isso é útil, por exemplo, quando você quer armazenar uma lista de itens (como nomes de frutas ou notas de um aluno) sem criar várias variáveis diferentes.

Existem dois tipos principais de arrays em PHP:

1. Arrays indexados (ou numéricos)
São arrays em que os elementos são armazenados com índices numéricos automáticos, começando do zero. Cada valor ocupa uma posição numerada.

Veja um exemplo abaixo:
-->
<?php
$frutas = array("maçã", "banana", "laranja");
echo $frutas[0]; // Exibe: maçã
echo $frutas[1]; // Exibe: banana
echo $frutas[2]; // Exibe: laranja
?>
<!--
2. Arrays associativos
Em vez de usar números como índice, os arrays associativos usam chaves nomeadas. Isso os torna mais descritivos, como se fossem "mini-bancos de dados".

Veja um exemplo abaixo:
-->
<?php
// Criando um array associativo com informações de um aluno
$aluno = [
    "nome" => "João",
    "idade" => 17,
    "curso" => "Informática"
];

// Acessando os valores pelas chaves
echo $aluno["nome"];   // Saída: João
echo $aluno["idade"];  // Saída: 17
?>
<!--
Esse código cria um array associativo chamado $aluno, onde cada chave ("nome", "idade", "curso") está ligada a um valor específico.

"nome" → "João"
"idade" → 17
"curso" → "Informática"

Em seguida, o echo é usado para exibir valores do array:

$aluno["nome"] imprime João
$aluno["idade"] imprime 17

Assim, ele demonstra como armazenar informações identificadas por chaves e acessá-las individualmente no PHP.

Observe as seguintes vantagens:
Mais fácil de entender o conteúdo do array.
Ideal para representar entidades com características (ex.: um aluno com nome, idade, curso).

3. Arrays multidimensionais
São arrays que contêm outros arrays dentro deles. São úteis para representar tabelas, matrizes ou estruturas mais complexas.

Veja um exemplo abaixo:
-->
<?php
$turma = [
    ["nome" => "Ana", "nota" => 8.5],
    ["nome" => "Bruno", "nota" => 7.0],
    ["nome" => "Clara", "nota" => 9.2]
];

echo $turma[0]["nome"]; // Ana
echo $turma[2]["nota"]; // 9.2
?>
<!--
Esse código PHP cria um array multidimensional chamado $turma, onde cada elemento é um array associativo com duas chaves: "nome" e "nota".

$turma[0]["nome"] acessa o nome da primeira pessoa do array ("Ana")
$turma[2]["nota"] acessa a nota da terceira pessoa do array (9.2)

Ou seja, ele serve para armazenar e acessar dados organizados em forma de tabela (lista de alunos e suas notas).

Neste exemplo, $turma é um array multidimensional que contém três arrays associativos, cada um representando um aluno com seu nome e nota. Para acessar os dados, usamos dois índices: o primeiro para selecionar o aluno (0 para Ana, 1 para Bruno, 2 para Clara) e o segundo para acessar a chave dentro do array associativo ("nome" ou "nota").

b) Objetos
Um objeto é uma estrutura mais avançada do que o array. Ele é criado a partir de uma classe (um molde) e pode conter tanto dados (propriedades) quanto ações (métodos).

Mas afinal, o que é uma classe?
Pense em uma classe como um molde para construir objetos. Por exemplo, a classe "Pessoa" pode definir que toda pessoa tem um nome e uma idade.

Veja um exemplo abaixo:
-->
<?php
class Pessoa
{
    public $nome; // Propriedade da pessoa
}

// Criando um novo objeto do tipo Pessoa
$p = new Pessoa();
$p->nome = "Maria";

echo $p->nome; // Saída: Maria
?>
<!--
Neste exemplo, definimos uma classe chamada Pessoa com uma propriedade pública $nome. Em seguida, criamos um objeto $p da classe Pessoa e atribuímos o valor "Maria" à propriedade $nome. Por fim, usamos echo para exibir o nome da pessoa, que resulta em "Maria".

Explicação:

Criamos uma classe Pessoa com uma propriedade pública $nome.
Usamos new Pessoa() para criar um novo objeto.
Atribuímos um valor à propriedade com $p->nome = "Maria";.
Exibimos o nome com echo $p->nome;.

Para Zandstra (2014), o uso de objetos é fundamental na construção de aplicações modernas e reutilizáveis.

Objetos são fundamentais para a programação orientada a objetos (POO), permitindo a criação de estruturas mais complexas e organizadas, onde dados e comportamentos estão encapsulados em uma única entidade. Eles facilitam a reutilização de código e a modelagem de situações do mundo real de forma mais intuitiva.

1.7.6 Conversão de tipos
No PHP, os tipos podem ser convertidos automaticamente. Isso é chamado de type juggling.

Veja um exemplo abaixo:
-->
<?php
$numero = "10"; // String
$soma = $numero + 5; // O PHP converte a string para integer automaticamente
echo $soma; // Saída: 15
?>
<!--
Neste exemplo, a variável $numero é uma string que contém o valor "10". Quando realizamos a operação de soma ($numero + 5), o PHP converte automaticamente a string para um número inteiro, permitindo que a operação seja realizada corretamente. O resultado é 15, que é exibido com echo.

Essa flexibilidade do PHP em lidar com tipos de dados diferentes é uma característica importante da linguagem, mas também requer atenção do programador para evitar comportamentos inesperados.

Para conversões explícitas, usa-se o type casting:
-->
<?php
$numero = "10"; // String
$soma = (int)$numero + 5; // Convertendo explicitamente para integer
echo $soma; // Saída: 15
?>
<!--
Neste exemplo, usamos (int) para converter explicitamente a string $numero em um inteiro antes de realizar a soma. O resultado é o mesmo (15), mas agora a conversão é feita de forma explícita, o que pode ajudar a tornar o código mais claro e evitar confusões.
Segundo Powers (2017), a conversão de tipos é uma característica poderosa, mas deve ser usada com cuidado para evitar erros de lógica ou resultados inesperados.
-->

<?php
$valor = "15.5";
$inteiro = (int) $valor;
echo "$inteiro<br><br>"; // 15

?>

<!--
Neste exemplo, a variável $valor é uma string que contém um número decimal ("15.5"). Ao usar (int) para converter essa string em um inteiro, o PHP descarta a parte decimal e converte o valor para 15. O resultado é exibido com echo, mostrando 15.

A documentação oficial do PHP alerta que o comportamento de conversão automática deve ser usado com cautela para evitar bugs difíceis de rastrear (PHP MANUAL, 2025).

1.7.7 Exercício prático
Vejamos um exemplo sobre os conteúdos abordados. Vamos criar um script que:

Declare uma variável com seu nome (string)
Declare sua idade (integer)
Declare sua altura (float)
Declare se você é estudante (boolean)
Crie um array com 3 cores favoritas
Exiba todas as informações usando echo

A solução sugerida está abaixo:
-->
<?php
$nome = "Bruno";
$idade = 35;
$altura = 1.82;
$eh_estudante = "True";

$cor = array("verde", "azul", "laranja");
$cor_favorita = ["verde", "azul", "lalranja"];

echo "Minha Solução inicial foi <br>
Meu nome: $nome.<br> 
Tenho: $idade anos.<br> 
Minha altura é: $altura.<br>
Sou estudante: $eh_estudante. <br>
Cores: $cor[0], $cor[1], $cor[2]. <br>
Minha cor favorita é: $cor_favorita[0]
<br><br>"
?>
<!--
Neste exemplo, declaramos variáveis para armazenar o nome, idade, altura e status de estudante. Também criamos um array para armazenar as cores favoritas. Em seguida, usamos echo para exibir todas as informações de forma organizada. A solução proposta é apenas um exemplo, e você pode personalizá-la de acordo com suas preferências e informações pessoais.
-->

<?php
$nome = "Mariana";
$idade = 16;
$altura = 1.65;
$estudante = true;
$cores = ["azul", "verde", "roxo"];
echo "Solução proposta foi <br>";
echo "Nome: $nome<br>";
echo "Idade: $idade<br>";
echo "Altura: $altura<br>";
echo "Estudante: " . ($estudante ? "Sim" : "Não") . "<br>";
echo "Cores favoritas: $cores[0], $cores[1], $cores[2]";
?>
<!--
Neste exemplo, declaramos as variáveis $nome, $idade, $altura e $estudante para armazenar informações pessoais. O array $cores armazena as cores favoritas. Usamos echo para exibir as informações, e para a variável booleana $estudante, utilizamos uma expressão ternária para exibir "Sim" ou "Não" de acordo com o valor booleano. As cores favoritas são exibidas acessando os índices do array.
-->