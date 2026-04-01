<!-- 
3.4 Manipulação de Strings: Interpolação, Concatenação e Funções de String
3.4.1 O que são strings?
No PHP, uma string é uma sequência de caracteres alfanuméricos, como palavras, frases ou qualquer texto. Strings são largamente utilizadas em aplicações web, como em formulários, sistemas de login, mensagens de erro, entre outros contextos.

Strings podem ser declaradas usando aspas simples ('') ou aspas duplas (""):
-->
<?php
$stringSimples = 'Esta é uma string com aspas simples.';
$stringDupla = "Esta é uma string com aspas duplas.";
echo $stringSimples . "<br>";
echo $stringDupla . "<br> <br>";
?>
<?php
$nome = 'Ana';
$mensagem = "Bem-vinda, $nome!";
echo $mensagem;
?>
<!--
Neste exemplo, a variável $nome é interpolada dentro da string $mensagem, o que resulta na mensagem "Bem-vinda, Ana!". A interpolação só funciona com aspas duplas, enquanto as aspas simples tratam o conteúdo literalmente.

Strings são fundamentais na manipulação de dados textuais, sendo tratadas como variáveis do tipo escalar no PHP (ULLMAN, 2018).

3.4.2 Interpolação de strings
Interpolação é o processo de incluir o valor de uma variável dentro de uma string. No PHP, isso funciona apenas com aspas duplas.

Veja abaixo um exemplo:
-->
<?php
$nome = 'Carlos';
$idade = 30;
$mensagem = "Olá, meu nome é $nome e tenho $idade anos.";
echo $mensagem;
echo "<br> <br> ";
?>

<?php
$nome = "Carlos";
echo "Olá, $nome!";
echo "<br> <br> ";
?>
<!--
Neste exemplo, as variáveis $nome e $idade são interpoladas dentro da string $mensagem, resultando na mensagem "Olá, meu nome é Carlos e tenho 30 anos.". A interpolação torna o código mais legível e fácil de escrever, evitando a necessidade de concatenar strings manualmente.

Observe que, com aspas simples, a variável não será interpretada:
-->
<?php
$nome = "Carlos";
echo 'Olá, $nome!'; // Não interpolará a variável
echo "<br> <br> ";
?>

<!--
Neste caso, a saída será literalmente "Olá, $nome!", sem substituir o valor da variável $nome. Isso demonstra a diferença entre aspas simples e duplas em relação à interpolação de strings.

3.4.3 Concatenação de strings
Concatenação é o processo de unir duas ou mais strings para formar uma única string. No PHP, a concatenação é feita utilizando o operador de ponto (.).
-->

<?php
  $nome = "Luiza";
  $mensagem = "Olá, " . $nome . "! Seja bem-vinda.";
  echo $mensagem;
    echo "<br> <br> ";
?>
<!--
Neste exemplo, a string "Olá, " é concatenada com a variável $nome e a string "! Seja bem-vinda." para formar a mensagem completa "Olá, Luiza! Seja bem-vinda.". A concatenação é útil quando se deseja construir strings de forma dinâmica, especialmente quando a interpolação não é possível ou desejada.
Observe que a concatenação pode ser usada tanto com aspas simples quanto com aspas duplas, pois o operador de ponto é independente do tipo de aspas utilizado. Por exemplo:
--> 
<?php
  $nome = "Luiza";
  $mensagem = 'Olá, ' . $nome . '! Seja bem-vinda.';
  echo $mensagem;
  echo "<br> <br> ";
?>
<!--
Neste caso, a concatenação funciona da mesma forma, resultando na mesma mensagem "Olá, Luiza! Seja bem-vinda.". A escolha entre aspas simples e duplas para a concatenação depende do contexto e da preferência do desenvolvedor, mas é importante lembrar que a interpolação só funciona com aspas duplas.

Porque usar concatenação em vez de interpolação?
A concatenação pode ser preferida em situações onde a interpolação não é possível, como quando se deseja incluir caracteres especiais ou quando se está construindo uma string complexa que envolve várias variáveis e texto. Além disso, a concatenação pode ser mais clara em alguns casos, especialmente para desenvolvedores que estão acostumados a esse estilo de construção de strings. Por exemplo, ao construir uma string que inclui uma variável dentro de um array, a concatenação pode ser mais legível:
-->

<?php
  $nome = "Luiza";
  $dados = ["nome" => $nome, "idade" => 25];
  $mensagem = "Olá, " . $dados['nome'] . "! Você tem " . $dados['idade'] . " anos.";
  echo $mensagem;
  echo "<br> <br> ";
?>
<!--
Neste exemplo, a concatenação é usada para construir a mensagem utilizando os valores do array $dados. A interpolação não funcionaria diretamente com os elementos do array, tornando a concatenação a escolha mais adequada para esse caso.

Também é possível usar o operador de atribuição com concatenação (.=):
-->
<?php
  $mensagem = "Olá, ";
  $mensagem .= "Luiza!"; // Concatena "Luiza!" à mensagem existente
  echo $mensagem;
  echo "<br> <br> ";
?>

<?php
  $texto = "Curso: ";
  $texto .= "PHP para Iniciantes";
  echo $texto;
?>

<!--
Neste exemplo, a variável $mensagem é inicialmente definida como "Olá, " e depois o operador .= é usado para concatenar "Luiza!" à mensagem existente, resultando em "Olá, Luiza!". O mesmo acontece com a variável $texto, que é construída em duas etapas para formar a string completa "Curso: PHP para Iniciantes".

3.4.4 Funções úteis para manipulação de strings
O PHP oferece uma ampla variedade de funções para manipulação de strings, que facilitam tarefas comuns como formatação, busca, substituição e muito mais. Algumas das funções mais úteis incluem:
Principais funções de manipulação de strings:
- strlen(): Retorna o comprimento de uma string.
    strlen("PHP") → 3
- strtoupper(): Converte uma string para letras maiúsculas.
    strtoupper("php") → "PHP"
- strtolower(): Converte uma string para letras minúsculas.
    strtolower("PHP") → "php"
- substr(): Retorna uma parte de uma string.
    substr("Hello, World!", 7, 5) → "World"
    substr("Aprendizado", 0, 5) → "Apren"

- str_replace(): Substitui todas as ocorrências de uma string por outra.
    str_replace("mundo", "PHP", "Olá, mundo!") → "Olá, PHP!"
    str_replace("a", "o", "banana") → "bonono"

Exemplo:
-->
<?php
  $frase = "Olá, Mundo!";
  $novaFrase = str_replace("Mundo", "PHP", $frase);
  echo strtoupper($novaFrase); // OLÁ, PHP!
?>
<!-- 
 Este código PHP realiza duas operações com strings. Primeiro, a variável $frase é definida com o texto "Olá, Mundo!". Em seguida, a função str_replace é usada para substituir a palavra "Mundo" por "PHP", gerando a nova frase "Olá, PHP!", que é armazenada na variável $novaFrase. Depois, a função strtoupper é aplicada para transformar toda a frase em letras maiúsculas, resultando em "OLÁ, PHP!", que é exibido na tela com echo. 

Outras funções úteis para manipulação de strings incluem:
- strpos(): Encontra a posição da primeira ocorrência de uma substring em uma string.
- trim(): Remove espaços em branco do início e do fim de uma string.
- explode(): Divide uma string em um array usando um delimitador.
- implode(): Junta os elementos de um array em uma string usando um delimitador.
- strrev(): Inverte uma string.
- str_repeat(): Repete uma string um número específico de vezes.
- str_shuffle(): Embaralha os caracteres de uma string.
- str_split(): Divide uma string em um array de caracteres.
- str_pad(): Preenche uma string para um determinado comprimento com outra string.
- strcasecmp(): Compara duas strings sem considerar maiúsculas e minúsculas.
- strncasecmp(): Compara os primeiros n caracteres de duas strings sem considerar maiúsculas e minúsculas.
- strcspn(): Retorna o comprimento da parte inicial de uma string que não contém nenhum dos caracteres de outra string.
- strspn(): Retorna o comprimento da parte inicial de uma string que contém apenas caracteres de outra string.
- strpbrk(): Retorna a parte de uma string a partir da primeira ocorrência de um dos caracteres de outra string.
- strcoll(): Compara duas strings usando a configuração local.
- strftime(): Formata uma string de data/hora de acordo com a configuração local.
- strtr(): Traduz certos caracteres ou palavras em uma string.
- strval(): Converte um valor para string.
- str_word_count(): Conta o número de palavras em uma string.

Essas funções são essenciais para a manipulação de strings em PHP, permitindo que os desenvolvedores realizem uma ampla variedade de operações de forma eficiente e eficaz. O uso adequado dessas funções pode melhorar significativamente a qualidade e a funcionalidade do código, tornando-o mais robusto e fácil de manter.

3.4.5 Boas práticas no uso de strings
Veja abaixo algumas boas práticas no uso de strings:

Use aspas duplas para interpolação, mas prefira aspas simples se não houver necessidade de interpretação, por razões de desempenho.

Use funções como trim() para remover espaços desnecessários em entradas de formulários.

Ao concatenar grandes volumes de texto, prefira estruturas como buffers ou variáveis acumuladoras.

Comente claramente manipulações complexas de strings, para manter a legibilidade.
-->