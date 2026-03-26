<!-- 📦 Aula 3: Arrays (Listas de Dados)
No seu projeto, você não terá apenas um gasto, terá uma lista deles. O Array é onde guardamos isso. -->

<!-- 1. O que é um Array? -->
<!-- Um Array é uma estrutura de dados que pode armazenar múltiplos valores em uma única variável. Ele é muito útil para organizar e manipular conjuntos de dados relacionados. -->

<?php
// Array simples
$categorias = ["Alimentação", "Lazer", "Aluguel"];
echo $categorias[0]; // Saída: Alimentação

// Array Associativo (Chave => Valor) - MUITO USADO COM JSON
$transacao = [
    "descricao" => "Mercado",
    "valor" => 250.00,
    "data" => "2026-02-27"
];
echo $transacao["descricao"]; // Saída: Mercado
?>
