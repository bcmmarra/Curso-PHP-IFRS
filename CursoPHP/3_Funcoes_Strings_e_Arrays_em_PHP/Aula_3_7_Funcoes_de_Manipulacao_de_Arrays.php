<!-- 
3.7 Funções de Manipulação de Arrays
3.7.1 Introdução
O PHP oferece um conjunto robusto de funções nativas para manipular arrays. Essas funções facilitam tarefas como adicionar elementos, remover itens, reorganizar dados, mesclar arrays e muito mais.

Neste tópico, abordaremos algumas das funções mais utilizadas no cotidiano de desenvolvedores, com foco nos iniciantes: array_push(), array_pop(), array_shift(), array_unshift() e count().

Essas funções ajudam a realizar operações comuns com arrays de forma simples, segura e eficiente (PHP Manual, 2025).

3.7.2 array_push(): Adicionando elementos ao final
A função array_push() adiciona um ou mais elementos ao final de um array.

Sintaxe: 
array_push(array &$array, mixed $valor1, mixed $valor2, ...)

Sua sintaxe é array_push(array &$array, mixed $valor1, mixed $valor2, ...), onde o primeiro parâmetro é o array que será modificado (passado por referência com &), e os demais parâmetros são os valores que você deseja adicionar.

Veja abaixo um exemplo:
-->
<?php
$frutas = ["maçã", "banana"];
array_push($frutas, "laranja", "uva");
print_r($frutas);
echo "<br> <br>";
?>

<!-- 
Este código PHP utiliza a função array_push() para adicionar novos elementos a um array. Inicialmente, o array $frutas contém dois itens: "maçã" e "banana". Em seguida, array_push($frutas, "laranja", "uva"); insere "laranja" e "uva" no final do array. A função print_r($frutas); é usada para exibir a estrutura completa do array, incluindo os índices e valores. 
    
Observação: O array original é modificado e os novos elementos são adicionados ao final.
-->
<?php
$despesas = ["Aluguel", "Internet"];

// Adicionando um único valor
array_push($despesas, "Luz");

// Adicionando múltiplos valores de uma vez
array_push($despesas, "Academia", "Mercado");

print_r($despesas);

echo "<br><br>";
/* Resultado:
[
  0 => "Aluguel",
  1 => "Internet",
  2 => "Luz",
  3 => "Academia",
  4 => "Mercado"
]
*/
?>

<!--
3.7.3 array_pop(): Removendo o último elemento
A função array_pop() remove o último elemento de um array e o retorna.
    
Veja um exemplo:
-->
<?php
$nomes = ["Ana", "Bruno", "Carlos"];
print_r($nomes);
echo "<br>";
$removido = array_pop($nomes);
echo "Removido: $removido<br>";
print_r($nomes);
?>
<!-- 
Este código PHP utiliza a função array_pop() para remover o último elemento de um array. O array $nomes começa com três elementos: "Ana", "Bruno" e "Carlos". Ao chamar array_pop($nomes);, o último item do array — "Carlos" — é removido e armazenado na variável $removido. Em seguida, o comando echo exibe a mensagem "Removido: Carlos", e print_r($nomes); mostra o conteúdo atual do array, que agora é:
Array(
    [0] => Ana
    [1] => Bruno
) 

3.7.4 array_shift(): Removendo o primeiro elemento
A função array_shift() remove o primeiro elemento de um array e reorganiza os índices.

Veja um exemplo:
-->
<?php
echo "<br><br>";
$filmes = ["Matrix", "Avatar", "Titanic"];
print_r($filmes);
echo "<br>";
$primeiro = array_shift($filmes);
echo "Removido: $primeiro<br>";
print_r($filmes);
?>

<!-- 
Este código PHP usa a função array_shift() para remover o primeiro elemento de um array. O array $filmes começa com os valores "Matrix", "Avatar" e "Titanic". Ao executar array_shift($filmes);, o primeiro item — "Matrix" — é removido e armazenado na variável $primeiro. O comando echo exibe a mensagem "Removido: Matrix", e a função print_r($filmes); mostra o novo conteúdo do array, agora com os elementos restantes:
Array(
    [0] => Avatar
    [1] => Titanic
)

3.7.5 array_unshift(): Adicionando elementos no início
A função array_unshift() adiciona um ou mais elementos no início de um array, deslocando os demais para frente.

Veja um exemplo:
-->
<?php
echo "<br><br>";
$animais = ["gato", "cachorro"];
print_r($animais);
echo "<br>";
array_unshift($animais, "pássaro", "peixe");
print_r($animais);
?>

<!-- 
Este código PHP utiliza a função array_unshift() para adicionar elementos no início de um array. O array $animais começa com dois valores: "gato" e "cachorro". Em seguida, array_unshift($animais, "pássaro", "peixe"); insere os elementos "pássaro" e "peixe" antes dos que já existiam no array. Assim, os novos itens ocupam as primeiras posições. O comando print_r($animais); exibe o conteúdo atualizado do array, que será:

Array(
    [0] => pássaro
    [1] => peixe
    [2] => gato
    [3] => cachorro
)

3.7.6 count(): Contando os elementos de um array
A função count() retorna a quantidade de elementos de um array.

Veja um exemplo:
-->
<?php
echo "<br><br>";
$linguagens = ["PHP", "Python", "JavaScript"];
print_r($linguagens);
echo "<br>";
$total = count($linguagens);
echo "Total de linguagens: $total";
?>

<!-- 
Este código PHP utiliza a função count() para contar quantos elementos existem em um array. O array $linguagens contém três linguagens de programação: "PHP", "Python" e "JavaScript". Ao chamar count($linguagens), o PHP retorna o número 3, que é armazenado na variável $total. Em seguida, o comando echo exibe a mensagem "Total de linguagens: 3".
-->