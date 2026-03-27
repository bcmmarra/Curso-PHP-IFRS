<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de PHP incorporado no HTML</title>
</head>
<body>
    <?php
        $titulo = "Meu Site Dinâmico";
        echo "<h1>$titulo</h1>";
        print "<p>Conteúdo gerado no servidor.</p>";
    ?>
</body>
</html>