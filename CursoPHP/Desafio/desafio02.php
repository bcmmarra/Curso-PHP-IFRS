<?php
// 1. Inicializamos as variáveis para evitar erros no HTML lá embaixo
$descricao = "";
$valor = 0;


// 2. Verificamos se o método de envio foi POST (ou seja, se o botão foi clicado)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 3. Capturamos os dados SOMENTE após o envio
    // Usamos filter_input para uma camada extra de segurança (boa prática!)
    $descricao = $_POST['descricao'];
    $valor = (float) $_POST['valor']; // Força o PHP a entender que é um número decimal

    // 4. Aqui você processaria os dados (salvar no banco, etc)
    echo "<div style='background: #d4edda; padding: 10px;'>";
    echo "<strong>Sucesso!</strong> Registro de '$descricao' no valor de R$ $valor recebido.";
    echo "</div>";
}
?>