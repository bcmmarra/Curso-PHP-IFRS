<?php
// Exibe mensagem de boas-vindas
echo "Olá, mundo!, com echo!";
echo "<br><br>";
?>

<?php
echo "<h1>Bem-vindo ao PHP IFRS!</h1>";
echo "<br><br>";
?>

<?php
echo "Olá, ", "mundo! ", "PHP é incrível!";
echo "<br><br>";
?>

<?php
print ("Olá, mundo, com print!");
echo "<br><br>";
?>

<?php
echo "echo = mais rápido que print, não retorna valor, pode usar parênteses ou não. Aceita multiplos parâmetros separados por vírgula. Exemplo: echo 'Olá, ', 'mundo!';";
echo "<br><br>";
print "print = mais lento que echo, retorna valor (1), deve usar parênteses. Exemplo: print('Olá, mundo!');";

echo "<br><br>";

echo "PHP é uma linguagem de script de código aberto amplamente utilizada para desenvolvimento web. Ela é especialmente adequada para criar páginas dinâmicas e interativas. O PHP é executado no servidor, o que significa que o código é processado antes de ser enviado ao navegador do usuário. Ele pode ser embutido em HTML, facilitando a integração com o conteúdo da página. O PHP suporta uma ampla variedade de bancos de dados, tornando-o uma escolha popular para desenvolvimento de aplicativos web. Além disso, possui uma grande comunidade de desenvolvedores e uma vasta quantidade de recursos disponíveis online.";
echo "<br><br>";

echo"<h2> Usando variáveis em PHP com echo e print</h2>";

$nome = "Bruno";
echo "Olá, " , $nome , "! Bem-vindo ao Curso de PHP IFRS!";
echo "<br><br>";

$idade = 35;
print "Olá, $nome! Você tem $idade anos. Bem-vindo ao Curso de PHP IFRS!";
echo "<br><br>";

echo "Quando as aspas são duplas, as variáveis são interpretadas e seu valor é exibido. Exemplo: echo \"Olá, $nome!\"; <br>";
echo "Quando as aspas são simples, as variáveis não são interpretadas e o nome da variável é exibido. Exemplo: echo 'Olá, $nome!'; <br>";

echo 'Olá, $nome!' . "<br>";
echo "Olá, $nome!";
?>