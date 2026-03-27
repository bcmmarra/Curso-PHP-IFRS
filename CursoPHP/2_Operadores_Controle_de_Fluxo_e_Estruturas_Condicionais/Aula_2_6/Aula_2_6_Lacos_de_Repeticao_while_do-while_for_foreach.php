<!-- 
2.6 Laços de Repetição: while, do...while, for, foreach
Essas estruturas são utilizadas em situações como: percorrer listas, realizar cálculos repetitivos, validar dados, entre outras aplicações onde a execução repetitiva e controlada é necessária (ULLMAN, 2018).

2.6.1 Laço while
O laço while avalia uma condição antes de executar o bloco de código. Enquanto a condição for verdadeira, o bloco continuará sendo executado.

Sintaxe:
while (condição) {
    Bloco de código executado repetidamente
}
-->

<?php

$contador = 10;

while ($contador = 0){
    echo "Contador: $contador";
    $contador =- $contador - 1;
}

?>