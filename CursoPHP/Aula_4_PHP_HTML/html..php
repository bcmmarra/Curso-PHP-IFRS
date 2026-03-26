<!-- 📘 Aula 2: PHP dentro do HTML (Template Engine manual)
O PHP foi criado para ser inserido no meio do HTML. Isso permite que você crie estruturas fixas (como o menu do Descomplica MyFinance) e mude apenas os valores.

O conceito de "Abrir e Fechar" tags
Você pode abrir e fechar o PHP quantas vezes quiser no mesmo arquivo. Veja como o código fica mais organizado: -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel - MyFinance</title>
</head>
<body>
    <h1>Resumo Financeiro</h1>
    <h2>Legal... abaixo inseri um codigo PHP. </h2>
    <?php 
    $saldo = 1200.50; 
    $classe_css = ($saldo >= 0) ? "azul" : "vermelho"; // Isso se chama Operador Ternário
    ?>

    <p>Seu saldo atual é: 
        <strong style="color: <?php echo ($saldo >= 0) ? 'blue' : 'red'; ?>">
            R$ <?php echo $saldo; ?>
        </strong>
    </p>

</body>
</html>