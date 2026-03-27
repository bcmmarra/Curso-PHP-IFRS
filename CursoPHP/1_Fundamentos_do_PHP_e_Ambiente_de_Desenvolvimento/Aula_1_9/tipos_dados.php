<?php
echo "Tipos de dados em PHP:<br><br>";
// Tipos de dados primitivos
$inteiro = 42; // Tipo inteiro
$flutuante = 3.14; // Tipo float
$booleano = true; // Tipo booleano
$string = "Olá, mundo!"; // Tipo string
echo "Inteiro: " . $inteiro . "<br>"; // Saída: Inteiro: 42
echo "Flutuante: " . $flutuante . "<br>"; // Saída: Flutuante: 3.14
echo "Booleano: " . ($booleano ? "true" : "false") . "<br>"; // Saída: Booleano: true
echo "String: " . $string . "<br>"; // Saída: String: Olá, mundo!

// Tipos de dados compostos
$array = array(1, 2, 3, 4, 5); // Tipo array
$objeto = (object) ['nome' => 'João', 'idade' => 30]; // Tipo objeto
echo "Array: " . implode(", ", $array) . "<br>"; // Saída: Array: 1, 2, 3, 4, 5
echo "Objeto: Nome - " . $objeto->nome . ", Idade - " . $objeto->idade . "<br>"; // Saída: Objeto: Nome - João, Idade - 30  

// Tipo de dado nulo
$nulo = null; // Tipo nulo
echo "Valor nulo: " . var_export($nulo, true) . "<br>"; // Saída: Valor nulo: NULL

// Tipo de dado recurso
$arquivo = fopen("exemplo.txt", "w"); // Tipo recurso
if ($arquivo) {
    echo "Recurso de arquivo criado com sucesso.<br>"; // Saída: Recurso de arquivo criado com sucesso.
    fclose($arquivo); // Fechando o recurso de arquivo
} else {
    echo "Erro ao criar recurso de arquivo.<br>";
}

// Tipo de dado callable
function minhaFuncao() {
    return "Olá, sou uma função!";
}
$callable = 'minhaFuncao'; // Tipo callable
echo "Chamando a função callable: " . $callable() . "<br>"; // Saída: Chamando a função callable: Olá, sou uma função!

// Tipo de dado iterável
$iteravel = [1, 2, 3, 4, 5]; // Tipo iterável
echo "Iterando sobre o iterável: ";

foreach ($iteravel as $valor) {
    echo $valor . " "; // Saída: Iterando sobre o iterável: 1 2 3 4 5 
}
echo "<br><br>";
echo "Tipos de dados em PHP são fundamentais para a manipulação de informações e controle do fluxo do programa. Cada tipo de dado tem suas próprias características e usos específicos, permitindo que os desenvolvedores criem aplicações robustas e eficientes.";
?>
  