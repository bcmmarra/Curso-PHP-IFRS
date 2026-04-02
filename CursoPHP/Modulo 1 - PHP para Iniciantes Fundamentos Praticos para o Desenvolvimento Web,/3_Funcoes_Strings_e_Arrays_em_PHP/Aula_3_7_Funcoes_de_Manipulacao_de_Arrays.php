<!-- 3.7 Funções de Manipulação de Arrays em PHP
3.7.1 Introdução
O PHP oferece um conjunto robusto de funções nativas para manipular arrays. Essas funções facilitam tarefas essenciais como adicionar, remover, reorganizar, mesclar e filtrar dados de forma simples, segura e eficiente. Dominar essas ferramentas é fundamental para tornar o código mais legível e fácil de manter.

3.7.2 Adicionando Elementos
Existem duas funções principais para inserir novos dados, dependendo de onde você deseja posicioná-los:

array_push(): Adicionando ao Final
Adiciona um ou mais elementos ao final do array.

Sintaxe: array_push(array &$array, mixed $valor1, mixed $valor2, ...) -->

<?php
$despesas = ["Aluguel", "Internet"];

// Adicionando um único valor
array_push($despesas, "Luz");

// Adicionando múltiplos valores de uma vez
array_push($despesas, "Academia", "Mercado");

print_r($despesas);
/* Resultado: 
   [0] => Aluguel, [1] => Internet, [2] => Luz, [3] => Academia, [4] => Mercado 
*/
?>

<!-- array_unshift(): Adicionando no Início
Adiciona elementos no começo do array, deslocando os índices existentes para frente. -->

<?php
$animais = ["gato", "cachorro"];
array_unshift($animais, "pássaro", "peixe");

print_r($animais);
/* Resultado:
   [0] => pássaro, [1] => peixe, [2] => gato, [3] => cachorro
*/
?>

<!-- 3.7.3 Removendo Elementos
Estas funções extraem um item do array e o retornam para uma variável, se necessário.

array_pop(): Removendo do Final
Remove o último elemento do array. -->

<?php
$nomes = ["Ana", "Bruno", "Carlos"];
$removido = array_pop($nomes); 

echo "Removido: $removido"; // Saída: Carlos
print_r($nomes);            // Saída: [Ana, Bruno]
?>

<!-- array_shift(): Removendo do Início
Remove o primeiro elemento e reorganiza os índices numéricos. -->
<?php
$filmes = ["Matrix", "Avatar", "Titanic"];
$primeiro = array_shift($filmes);

echo "Removido: $primeiro"; // Saída: Matrix
print_r($filmes);           // Saída: [0 => Avatar, 1 => Titanic]
?>

<!-- 3.7.4 Utilidades e Transformações
Funções para análise e processamento de dados contidos nos arrays.

count(): Contagem de Elementos
Retorna a quantidade total de itens. -->

<?php
$linguagens = ["PHP", "Python", "JavaScript"];
echo "Total: " . count($linguagens); // Saída: Total: 3
?>

<!-- array_filter(): Filtragem com Callback
Cria um novo array apenas com os elementos que atendem a uma condição. -->
<?php
$numeros = [1, 2, 3, 4, 5];
$numerosPares = array_filter($numeros, function($num) {
    return $num % 2 === 0;
}); 
// Resultado: [1 => 2, 3 => 4]
print_r($numerosPares);
?>

<!-- array_merge(): Mesclagem de Dados
Combina dois ou mais arrays em um só. -->
<?php
$array1 = [1, 2];
$array2 = [3, 4];
$mesclado = array_merge($array1, $array2); // [1, 2, 3, 4]
print_r($mesclado);
?>

<!-- 
3.7.5 Guia Rápido de Referência
Função          Ação                Posição
array_push()    Adiciona            Final
array_pop()     Remove              Final
array_unshift() Adiciona            Início
array_shift()   Remove              Início
count()         Conta itens         N/A
array_keys()    Retorna as chaves   N/A
array_values()  Retorna os valores  N/A

Nota: Funções como array_push e array_shift modificam o array original (passagem por referência), enquanto funções como array_merge e array_filter costumam retornar um novo array, preservando o original.
-->