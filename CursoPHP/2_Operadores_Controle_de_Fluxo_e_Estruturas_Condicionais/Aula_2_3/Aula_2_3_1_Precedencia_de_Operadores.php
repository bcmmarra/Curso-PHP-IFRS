<!--
A precedência estabelece quais operações são realizadas antes em uma expressão sem parênteses.

Operador                    ---|--- Descrição                       ---|--- Exemplo
()                          ---|--- Parênteses                      ---|--- ($a + $b) * $c
**                          ---|--- Exponenciação (potência)        ---|--- $a ** $b
* / %                       ---|--- Multiplicação, Divisão, Módulo  ---|--- $a * $b, $a / $b, $a % $b
+ -                         ---|--- Adição e Subtração              ---|--- $a + $b, $a - $b
== != === !== > < >= <=     ---|--- Operadores de Comparação        ---|--- $a == $b, $a != $b, $a === $b, $a !== $b, $a > $b, $a < $b, $a >= $b, $a <= $b
&&                          ---|--- E lógico (AND)                  ---|--- $a > 0 && $b > 0
||                          ---|--- Ou lógico (OR)                  ---|--- $a > 0 || $b > 0
?:                          ---|--- Operador Ternário               ---|--- $resultado = ($a > $b) ? 'maior' : 'menor';
!                           ---|--- Negação lógica (NOT)            ---|--- !$a > 0


Parênteses têm a maior precedência, seguidos pela exponenciação, depois multiplicação/divisão/módulo, adição/subtração, comparação e por último os operadores lógicos.
Em casos de operadores com a mesma precedência, a avaliação é feita da esquerda para a direita, exceto para a exponenciação que é avaliada da direita para a esquerda.
-->

<?php
$resultado = 3 + 4 * 2; // Multiplicação tem precedência
echo "Resultado de 3 + 4 * 2 = " . $resultado; // Resultado é 11, não 14
echo "<br><br>";

// Uso de Parênteses para Clareza
$resultado = (3 + 4) * 2; // Parênteses alteram a precedência
echo "Resultado de (3 + 4) * 2 = " . $resultado; // Resultado é 14, não 11
echo "<br><br>";

// Exponenciação é avaliada da direita para a esquerda
$resultado = 2 ** 3 ** 2;
echo "Resultado de 2 ** 3 ** 2 = " . $resultado; // Resultado é 512, pois é avaliado como 2 ** (3 ** 2) = 2 ** 9 = 512

echo "<br><br>";

// 2.3.3 Associatividade de Operadores
// Alguns operadores são right-to-left. Veja um exemplo com atribuição:
$a = $b = 5; // Atribuição é avaliada da direita para a esquerda
// Primeiro $b = 5, depois $a = 5

echo "Valor de a: " . $a; // Valor de a: 5
echo "<br><br>";

echo "Associatividade de Operadores:<br>";
echo "Operadores com a mesma precedência são avaliados da esquerda para a direita, exceto a exponenciação que é avaliada da direita para a esquerda.<br><br>";
$resultado = 10 - 5 - 2; // Avaliado como (10 - 5) - 2
echo "Resultado de 10 - 5 - 2 = " . $resultado; // Resultado é 3, não 7
echo "<br><br>";
?>

