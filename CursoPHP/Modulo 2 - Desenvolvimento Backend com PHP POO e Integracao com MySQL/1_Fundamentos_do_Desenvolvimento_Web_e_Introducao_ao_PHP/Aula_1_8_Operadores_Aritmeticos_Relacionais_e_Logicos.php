<!-- 
1.8 Operadores Aritméticos, Relacionais e Lógicos
Durante o desenvolvimento de sistemas, frequentemente precisamos realizar operações matemáticas, comparações entre valores e testes de condições. Para isso, utilizamos os operadores em PHP, que podem ser classificados em três grupos principais: aritméticos, relacionais (ou de comparação) e lógicos.

1.8.1 Operadores Aritméticos
São utilizados para realizar operações matemáticas básicas. Holzner (2006) destaca que os operadores aritméticos em PHP funcionam de forma semelhante às linguagens C e Java, sendo diretos e eficientes.

Veja no quadro a seguir os operadores aritméticos: 
| Operador | Descrição           | Exemplo          |
|----------|---------------------|------------------|
| +        | Adição              | $a + $b          |
| -        | Subtração           | $a - $b          |
| *        | Multiplicação       | $a * $b          |
| /        | Divisão             | $a / $b          |
| %        | Módulo (resto)      | $a % $b          |
| **       | Exponenciação       | $a ** $b         |
Neste exemplo, $a e $b são variáveis que armazenam valores numéricos. O operador de adição (+) soma os valores, o operador de subtração (-) subtrai um valor do outro, o operador de multiplicação (*) multiplica os valores, o operador de divisão (/) divide um valor pelo outro, o operador de módulo (%) retorna o resto da divisão e o operador de exponenciação (**) eleva um valor à potência do outro.
Veja um exemplo prático de uso dos operadores aritméticos:
-->
<?php
    $a = 10;
    $b = 5;

    echo "Soma: " . ($a + $b) . "<br>"; // 15
    echo "Subtração: " . ($a - $b) . "<br>"; // 5
    echo "Multiplicação: " . ($a * $b) . "<br>"; // 50
    echo "Divisão: " . ($a / $b) . "<br>"; // 2
    echo "Módulo: " . ($a % $b) . "<br>"; // 0
    echo "Exponenciação: " . ($a ** $b) . "<br>"; // 100000
?>
<!--
Neste exemplo, definimos as variáveis $a e $b com os valores 10 e 5, respectivamente. Em seguida, utilizamos os operadores aritméticos para realizar diferentes operações matemáticas e exibimos os resultados. O uso de parênteses é importante para garantir a ordem correta das operações, especialmente quando combinamos vários operadores em uma única expressão.

1.8.2 Operadores Relacionais (ou de Comparação)
São usados para comparar dois valores e retornar um resultado booleano: true (verdadeiro) ou false (falso). São amplamente utilizados em condições, como estruturas if, while, etc.

Veja os operadores relacionais no quadro abaixo:
| Operador | Descrição                 | Exemplo          |
|----------|---------------------------|------------------|
| ==       | Igual a                   | $a == $b         |
| !=       | Diferente de              | $a != $b         |
| >        | Maior que                 | $a > $b          |
| <        | Menor que                 | $a < $b          |
| >=       | Maior ou igual a          | $a >= $b         |
| <=       | Menor ou igual a          | $a <= $b         |
| ===      | Idêntico a                | $a === $b        |
| !==      | Não idêntico a            | $a !== $b        |

Neste exemplo, os operadores relacionais comparam os valores de $a e $b. O operador de igualdade (==) verifica se os valores são iguais, o operador de diferença (!=) verifica se são diferentes, o operador de maior que (>) verifica se $a é maior que $b, o operador de menor que (<) verifica se $a é menor que $b, o operador de maior ou igual a (>=) verifica se $a é maior ou igual a $b e o operador de menor ou igual a (<=) verifica se $a é menor ou igual a $b, o operador de identidade (===) verifica se os valores são iguais e do mesmo tipo, enquanto o operador de não identidade (!==) verifica se os valores são diferentes ou de tipos diferentes.

Veja um exemplo prático de uso dos operadores relacionais:
-->
<?php
    $a = 10;
    $b = 5;

    echo "Igual a: " . ($a == $b) . "<br>"; // false
    echo "Diferente de: " . ($a != $b) . "<br>"; // true
    echo "Maior que: " . ($a > $b) . "<br>"; // true
    echo "Menor que: " . ($a < $b) . "<br>"; // false
    echo "Maior ou igual a: " . ($a >= $b) . "<br>"; // true
    echo "Menor ou igual a: " . ($a <= $b) . "<br>"; // false
    echo "Idêntico a: " . ($a === $b) . "<br>"; // false
    echo "Não idêntico a: " . ($a !== $b) . "<br>"; // true
?>
<!--
Neste exemplo, comparamos os valores de $a e $b usando os operadores relacionais e exibimos os resultados. O resultado de cada comparação é um valor booleano, que pode ser true ou false, dependendo da relação entre os valores de $a e $b.

Ullman (2018) salienta a importância do uso de === e !== quando se deseja evitar erros relacionados ao tipo de dados, especialmente em comparações mais rigorosas.

1.8.3 Operadores Lógicos
Usados para combinar expressões booleanas. Muito utilizados em estruturas condicionais para testar múltiplas condições ao mesmo tempo.

Veja os operadores lógicos no quadro abaixo:

| Operador | Descrição                 | Exemplo          |
|----------|---------------------------|------------------|
| &&       | E (AND)                   | $a && $b         |
| ||       | OU (OR)                   | $a || $b         |
| !        | NÃO (NOT)                 | !$a              |

Neste exemplo, os operadores lógicos combinam expressões booleanas. O operador E (&&) retorna true se ambas as expressões forem verdadeiras, o operador OU (||) retorna true se pelo menos uma das expressões for verdadeira, o operador NÃO (!) inverte o valor booleano de uma expressão.

Veja um exemplo prático de uso dos operadores lógicos:
-->
<?php
    $a = true;
    $b = false;

    echo "E (AND): " . ($a && $b) . "<br>"; // false
    echo "OU (OR): " . ($a || $b) . "<br>"; // true
    echo "NÃO (NOT) a: " . (!$a) . "<br>"; // false
    echo "NÃO (NOT) b: " . (!$b) . "<br>"; // true
?>
<!--
Neste exemplo, definimos as variáveis $a e $b como booleanas (true e false, respectivamente). Em seguida, utilizamos os operadores lógicos para combinar essas expressões e exibimos os resultados. O operador E (&&) retorna false porque ambas as expressões não são verdadeiras, o operador OU (||) retorna true porque pelo menos uma das expressões é verdadeira, e o operador NÃO (!) inverte os valores booleanos de $a e $b.
Segundo Holzner (2006), o uso adequado dos operadores lógicos é fundamental para a construção de condições complexas e para o controle do fluxo de execução em programas PHP, permitindo a criação de sistemas mais robustos e eficientes.
-->
<?php
  $idade = 18;
  $tem_carteira = true;

  if ($idade >= 18 && $tem_carteira) {
    echo "Pode dirigir.";
  } else {
    echo "Não pode dirigir.";
  }
?>
<!--
Neste exemplo, verificamos se a pessoa tem 18 anos ou mais e se possui carteira de motorista. A condição só será verdadeira se ambas as expressões forem verdadeiras, ou seja, a pessoa deve ser maior de idade e ter carteira para poder dirigir.
De acordo com POWERS (2017), os operadores lógicos são fundamentais para tornar os scripts mais inteligentes e capazes de reagir a situações complexas.

Em resumo, os operadores aritméticos, relacionais e lógicos são ferramentas essenciais para a construção de scripts PHP eficientes e funcionais. Eles permitem realizar cálculos, comparar valores e tomar decisões com base em condições, tornando possível criar sistemas dinâmicos e interativos.
-->