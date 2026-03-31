<!-- 
Durante a execução de laços de repetição, pode haver situações em que seja necessário interromper ou pular a iteração atual. Para isso, o PHP oferece duas instruções específicas de controle de fluxo:

break: encerra completamente a execução de um laço ou estrutura switch.
continue: pula a iteração atual e continua com a próxima repetição do laço.

Essas instruções ajudam a personalizar o comportamento de laços, melhorando a eficiência e o controle da lógica dos algoritmos (ULLMAN, 2018). 

2.7.1 Instrução break
A instrução break termina imediatamente a execução do laço (for, while, do...while ou foreach) ou da estrutura switch em que estiver inserida. Após o break, o programa continua a execução a partir da linha seguinte ao laço ou switch.

Exemplo:
-->
<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        break; // Sai do laço quando $i for 5
    }
    echo "Valor: $i <br>";
}
?>

<!-- 
Este código PHP usa um laço for para contar de 1 até 10, mas com uma condição especial. A variável $i começa em 1 e é incrementada de 1 em 1 até chegar a 10. Dentro do laço, há uma verificação com if: quando $i for igual a 5, o comando break é executado, o que interrompe imediatamente o laço, ou seja, o código para de repetir. Enquanto $i for menor que 5, o echo imprime o valor atual na tela. 

Portanto, o resultado será:

Valor: 1  
Valor: 2  
Valor: 3  
Valor: 4  

Assim que $i chega a 5, o break faz o laço parar, e os valores seguintes (de 5 a 10) não são exibidos.

2.7.2 Instrução continue
A instrução continue interrompe apenas a iteração atual de um laço e passa para a próxima. O restante do código dentro do laço não é executado na iteração em que o continue ocorre.

Exemplo:
-->

<?php
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        continue; // Pula o número 3
    }
    echo "Número: $i <br>";
}
?>

<!-- 
Este código PHP utiliza um laço for para contar de 1 a 5, mas com uma exceção. A variável $i começa em 1 e é incrementada de 1 em 1 até chegar a 5. Dentro do laço, há uma verificação com if: quando $i for igual a 3, o comando continue é executado. Esse comando faz o laço pular diretamente para a próxima repetição, ou seja, ele ignora o restante do bloco (neste caso, o echo) somente quando $i for 3. 

O resultado na tela será:

Número: 1  
Número: 2  
Número: 4  
Número: 5  

O número 3 não aparece, pois o continue pulou essa etapa. Esse exemplo mostra como usar o continue para ignorar certas repetições dentro de um laço, sem interrompê-lo completamente.

Veja abaixo um comparativo entre break e continue:

break: Encerra o laço completamente.
continue: Pula a iteração atual e passa para a próxima.

-->