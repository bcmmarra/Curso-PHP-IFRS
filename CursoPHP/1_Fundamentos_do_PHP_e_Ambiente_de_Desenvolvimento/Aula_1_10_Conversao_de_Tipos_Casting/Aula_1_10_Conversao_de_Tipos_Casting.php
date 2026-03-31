<?php
echo "Conversão de Tipos e Casting em PHP:<br><br>";

// Conversão automática de tipos
$numero = "42"; // String contendo um número
$numero = (int) $numero; // Conversão para inteiro
echo "Número convertido para inteiro: " . $numero . "<br>"; // Saída: Número convertido para inteiro: 42
$soma = $numero + 10; // O PHP converte automaticamente o número para inteiro
echo "Soma do número com 10: " . $soma . "<br>"; // Saída: Soma do número com 10: 52

/*Conversão explícita de tipos (casting)
sintaxe: (tipo) valor

(int) ou (integer) 
(float) ou (double) ou (real)
(bool) ou (boolean)
(string)
(array)
(object)
*/

$flutuante = 3.14; // Tipo float
$inteiro = (int) $flutuante; // Conversão para inteiro
echo "Flutuante convertido para inteiro: " . $inteiro . "<br>"; // Saída: Flutuante convertido para inteiro: 3

//Exemplo de conversão de string para inteiro
$texto = "150"; // String contendo um número
$numero = (int) $texto; // Conversão para inteiro
echo "String convertida para inteiro: " . $numero . "<br>"; // Saída: String convertida para inteiro: 150

//Exemplo de conversão float para inteiro
$valor = 9.99; // Tipo float
$inteiro = (int) $valor; // Conversão para inteiro
echo "Float convertido para inteiro: " . $inteiro . "<br>"; // Saída: Float convertido para inteiro: 9

// Conversão de booleano para string
$booleano = true; // Tipo booleano
$string = (string) $booleano; // Conversão para string
echo "Booleano convertido para string: '" . $string . "'<br>"; // Saída: Booleano convertido para string: '1'

// Conversão de string para booleano
$string = "false"; // String que não é vazia, portanto considerada verdadeira
$booleano = (bool) $string; // Conversão para booleano
echo "String 'false' convertida para booleano: " . ($booleano ? "true" : "false") . "<br>"; // Saída: String 'false' convertida para booleano: true

// Conversão de array para string
$array = [1, 2, 3]; // Tipo array
$string = (string) $array; // Conversão para string - isso resultará em "Array"
echo "Array convertido para string: '" . $string . "'<br>"; // Saída: Array convertido para string: 'Array' 

echo "<br><br>";
echo "A conversão de tipos em PHP é uma parte fundamental da linguagem, permitindo que os desenvolvedores manipulem dados de forma flexível e eficiente. O casting explícito é útil para garantir que os dados sejam tratados como o tipo desejado, enquanto a conversão automática facilita a interação entre diferentes tipos de dados.";

// Alem do casting direto, PHP oferece funções para conversão de tipos, como intval(), floatval(), boolval(), strval(), entre outras, que podem ser usadas para converter valores de forma mais explícita e controlada.

// intval() - Converte um valor para inteiro
$valor = "50";
$numero = intval($valor);
echo "Valor convertido para inteiro usando intval(): " . $numero . "<br>"; // Saída: Valor convertido para inteiro usando intval(): 50

// floatval() - Converte um valor para float
$valor = "3.14";
$flutuante = floatval($valor);
echo "Valor convertido para float usando floatval(): " . $flutuante . "<br>"; // Saída: Valor convertido para float usando floatval(): 3.14

// strval() - Converte um valor para string
$valor = 100;
$string = strval($valor);
echo "Valor convertido para string usando strval(): " . $string . "<br>"; // Saída: Valor convertido para string usando strval(): 100


// boolval() - Converte um valor para booleano
$valor = True;
$booleano = boolval($valor);
echo "Valor convertido para booleano usando boolval(): " . $booleano . "<br>"; // Saída: Valor convertido para booleano usando boolval(): 1
?>