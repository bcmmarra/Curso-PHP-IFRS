<!-- 
2.1.1 Operadores Aritméticos

Operador ---|--- Descrição                  ---|--- Exemplo
+        ---|--- Adição                     ---|--- $a + $b
-        ---|--- Subtração                  ---|--- $a - $b
*        ---|--- Multiplicação              ---|--- $a * $b
/        ---|--- Divisão                    ---|--- $a / $b
%        ---|--- Módulo                     ---|--- $a % $b
**       ---|--- Exponenciação (potência)   ---|--- $a ** $b

+ (Adição): Soma os valores dos operandos.
- (Subtração): Subtrai o segundo operando do primeiro.
* (Multiplicação): Multiplica os operandos.
/ (Divisão): Divide o primeiro operando pelo segundo. Em divisões com números inteiros, pode resultar em números decimais.
% (Módulo): Retorna o resto da divisão inteira.
** (Exponenciação): Eleva o primeiro operando à potência do segundo.
-->

<?php
$a = 12;
$b = 5;

echo "Soma de $a + $b = " . $a + $b;
echo "<br><br>";
echo "Subtração de $a - $b = " . $a - $b;
echo "<br><br>";
echo "Multiplicação de $a * $b = " . $a * $b;
echo "<br><br>";
echo "Divisão de $a / $b = " . $a / $b;
echo "<br><br>";
echo "Módulo (Resto da Divisão de $a % $b = " . $a % $b;
echo "<br><br>";
echo "Exponenciação (Potência) de $a ** $b = " . $a ** $b;
?>