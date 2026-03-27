<?php
define("TAXA_IMPOSTO", 0.18);
echo "Taxa de imposto: " . TAXA_IMPOSTO; // Saída: Taxa de imposto: 0.18
// Tentando alterar o valor da constante (isso causará um erro)
// TAXA_IMPOSTO = 0.20; // Isso não é permitido e resultará em um erro
?>


<?php
define("BANCO", "meu_BD");
define("USUARIO", "admin");
define("SENHA", "123456");

echo "<br><br>";
echo "Conectando ao banco de dados " . BANCO . " com o usuário " . USUARIO;
// Saída: Conectando ao banco de dados meu_BD com o usuário admin
?>