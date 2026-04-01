<!-- 
2.2 Operadores de Comparação, Lógicos e o Operador Ternário
2.2.1 Operadores de Comparação
Eles retornam valores booleanos: true (verdadeiro) ou false (falso), sendo usados com frequência em estruturas condicionais como if e else.


Operador ---|--- Descrição                  ---|--- Exemplo
==       ---|--- Igualdade de valor         ---|--- $a == $b
===      ---|--- Igualdade de valor e tipo  ---|--- $a === $b
!=       ---|--- Diferente de valor         ---|--- $a != $b
!==      ---|--- Diferente de valor ou tipo ---|--- $a !== $b
>        ---|--- Maior que                  ---|--- $a > $b
<        ---|--- Menor que                  ---|--- $a < $b
>=       ---|--- Maior ou igual             ---|--- $a >= $b
<=       ---|--- Menor ou igual             ---|--- $a <= $b
**       ---|--- Exponenciação (potência)   ---|--- $a ** $b

== compara apenas o valor, ignorando o tipo.
=== compara tanto o valor quanto o tipo.
!= e !== testam desigualdade, com ou sem verificação de tipo.
>, <, >=, <= seguem as regras matemáticas usuais.

-->

<?php
$idade = 18;

if($idade >= 18) {
    echo "Você é maior de idade";
} else {
    echo "Você é menor de idade";
}
?>

<?php
echo "<br><br>";
?>
<!--2.2.2 Operadores Lógicos
Eles são usados para combinar expressões booleanas e também retornam valores booleanos. Os principais operadores lógicos são:

Operador ---|--- Descrição                  ---|--- Exemplo
&&       ---|--- E lógico (AND)             ---|--- $a > 0 && $b > 0
||       ---|--- Ou lógico (OR)             ---|--- $a > 0 || $b > 0
!        ---|--- Negação lógica (NOT)       ---|--- !$a > 0
&& retorna true se ambas as expressões forem verdadeiras.
|| retorna true se pelo menos uma das expressões for verdadeira.
! inverte o valor lógico da expressão.
-->

<?php
$logado = true;
$admin = false;

echo "Exemplo de uso do operador AND (&&):<br>";
if ($logado && $admin) {
    echo "Acesso completo";
} else {
    echo "Acesso restrito";
}

echo "<br><br>";

echo "Exemplo de uso do operador OR (||):<br>";

$temConvite = true;
$ehVIP = false;

if ($temConvite || $ehVIP) {
    echo "Entrada permitida";
} else{
    echo "Entrada negada.";
}
      
echo "<br><br>";

echo "Exemplo de uso do operador NOT (!):<br>";

$logado = false;

if(!$logado){
    echo "Você precisa fazer login para acessar esta página.";
}
?>

<?php
echo "<br><br>";
?>

<!--2.2.3 Operador Ternário
O operador ternário é uma forma reduzida e elegante de escrever if/else para expressões simples.

Ele tem a seguinte sintaxe:
(condição) ? valor_se_verdadeiro : valor_se_falso;

A condição é avaliada, e se for verdadeira, a expressão_se_verdadeira é retornada; caso contrário, a expressão_se_falsa é retornada. O operador ternário é útil para simplificar código que de outra forma exigiria uma estrutura if-else mais longa.
-->

<?php
$idade = 20;

$mensagem = ($idade >= 18) ? "Maior de idade" : "Menor de idade";

echo $mensagem;
?>