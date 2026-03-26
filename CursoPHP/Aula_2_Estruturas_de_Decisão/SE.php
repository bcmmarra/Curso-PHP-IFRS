<!-- 🛠️ Aula 2: Estruturas de Decisão (O "E se?")
Para o seu projeto financeiro, você precisará validar dados. Por exemplo: "Se o valor for negativo, pinte de vermelho". -->

<!-- 1. Estrutura IF (Se) -->
<!-- A estrutura IF é usada para executar um bloco de código apenas se uma condição for verdadeira. -->
<?php
$valor_transacao = -50.00;

if ($valor_transacao < 0) {
    echo "Atenção: Isso é uma despesa!";
} else {
    echo "Boa! Isso é uma receita.";
}

$saldo_atual = -500; // Exemplo de saldo negativo
if ($saldo_atual < 0) {
    echo "<p style='color: red;'>Saldo negativo! Por favor, deposite mais fundos.</p>";
}
?>
<!-- 2. Estrutura ELSE (Senão) -->
<!-- O ELSE é usado para executar um bloco de código quando a condição do IF for falsa. -->
<?php
$saldo_atual = 1500; // Exemplo de saldo positivo
if ($saldo_atual < 0) {
    echo "<p style='color: red;'>Saldo negativo! Por favor, deposite mais fundos.</p>";
} else {
    echo "<p style='color: green;'>Saldo positivo! Continue assim.</p>";
}
?>
<!-- 3. Estrutura ELSEIF (Senão se) -->
<!-- O ELSEIF é usado para verificar múltiplas condições. -->
<?php
$saldo_atual = 0; // Exemplo de saldo neutro
if ($saldo_atual < 0) {
    echo "<p style='color: red;'>Saldo negativo! Por favor, deposite mais fundos.</p>";
} elseif ($saldo_atual == 0) {
    echo "<p style='color: orange;'>Saldo neutro! Considere adicionar fundos.</p>";
} else {
    echo "<p style='color: green;'>Saldo positivo! Continue assim.</p>";
}
?>

<!-- 4. Estrutura SWITCH (Escolha) -->
<!-- O SWITCH é usado para comparar uma variável com diferentes valores e executar um bloco de código correspondente
a cada valor. -->
<?php
$tipo_usuario = "admin"; // Exemplo de tipo de usuário
switch ($tipo_usuario) {
    case "admin":
        echo "<p>Bem-vindo, administrador! Você tem acesso total.</p>";
        break;
    case "editor":
        echo "<p>Bem-vindo, editor! Você pode editar conteúdos.</p>";
        break;
    case "viewer":
        echo "<p>Bem-vindo, visualizador! Você pode apenas visualizar conteúdos.</p>";
        break;
    default:
        echo "<p>Tipo de usuário desconhecido. Acesso negado.</p>";
}
?>

