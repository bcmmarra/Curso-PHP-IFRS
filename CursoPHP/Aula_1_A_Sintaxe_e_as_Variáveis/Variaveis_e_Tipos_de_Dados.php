<!-- 📘 Aula 1: A Sintaxe e as Variáveis -->

<!-- 1. Variáveis e Tipos de Dados -->
<!-- Em PHP, toda variável obrigatoriamente começa com um cifrão ($). Ela é "fracamente tipada", ou seja, você não precisa dizer se é texto ou número, o PHP descobre sozinho. -->

<?php
// Declaração de variável no PHP sempre começa com o símbolo de cifrão ($) seguido do nome da variável. O nome da variável deve começar com uma letra ou um sublinhado (_) e pode conter letras, números e sublinhados, mas não pode conter espaços ou caracteres especiais.
// Variáveis são case-sensitive (diferenciam maiúsculas de minúsculas)
// Exemplo de variável de texto para o nome do usuário
// Sempre use nomes de variáveis que façam sentido para o que você está armazenando, isso ajuda a deixar o código mais legível e fácil de entender.
// Sempre inicie o nome da variável com letra minúscula e use camelCase para separar palavras, como em $saldoAtual, isso é uma convenção comum em PHP.
// String (Texto)
$usuario = "Desenvolvedor"; 

// Integer (Inteiro)
$idade = 25; 

// Float (Decimal)
$saldo_atual = 1500.50; 

// Boolean (Verdadeiro ou Falso)
$esta_logado = true; 
?>


<!-- 2. Concatenação (Juntando textos) -->
<!-- No Python você usa + ou f-strings. No PHP, o operador de concatenação é o ponto (.). -->
<!-- Aspas Duplas ("): Interpretam variáveis dentro delas. -->
<!-- Aspas Simples ('): Tratam tudo como texto literal. -->

<?php
echo "Olá, " . $usuario; // Resultado: Olá, Desenvolvedor
echo "Seu saldo é: $saldo_atual"; // Resultado: Seu saldo é: 1500.50
?>