<!-- 
1.5.1 O que são comandos de saída?
Em PHP, os comandos de saída são usados para exibir dados no navegador, geralmente em forma de texto ou código HTML. Os dois comandos mais comuns para isso são echo e print.

Ambos os comandos funcionam de maneira semelhante, mas possuem diferenças sutis que serão explicadas a seguir. Eles fazem parte da base da linguagem e são fundamentais para construir páginas web dinâmicas, pois permitem apresentar informações processadas pelo servidor ao usuário.

Segundo HOLZNER (2006), o echo é uma das formas mais rápidas e eficientes de enviar texto para o navegador em scripts PHP.

1.5.2 Comando echo
O comando echo é utilizado para exibir um ou mais strings (textos) no navegador. Ele pode ser usado com ou sem parênteses, e suporta múltiplos argumentos separados por vírgula. Exemplo:
-->
<?php
  echo "Olá, mundo!"; // Exibe uma string simples
  echo "Hoje é ", date("d/m/Y"), "."; // Exibe múltiplos argumentos
?>

<!--
Neste exemplo:
A primeira linha exibe a frase "Olá, mundo!".
A segunda linha exibe a frase "Hoje é " seguida da data atual formatada como dia/mês/ano.

echo é uma construção da linguagem, e não uma função.
Não exige o uso de parênteses (mas eles são permitidos).

Também podemos inserir código HTML com echo, tal como abaixo:
-->
<?php
  echo "<h1>Bem-vindo ao curso de PHP!</h1>";
  echo "<p>Este é um parágrafo gerado pelo PHP.</p>";
  echo "<p>Hoje é: " . date("d/m/Y") . "</p>"; // Concatenando strings e função
?>
<!--
Aqui, o comando echo é usado para gerar um título e um parágrafo em HTML, que serão renderizados no navegador como parte da página.
De acordo com POWERS (2017), inserir HTML com echo permite personalizar dinamicamente o conteúdo da página com base em variáveis ou condições.

1.5.3 Comando print
O comando print é similar ao echo, mas tem algumas diferenças. Ele é uma função que retorna um valor (1), o que significa que pode ser usado em expressões. No entanto, print só aceita um argumento e não suporta múltiplos argumentos como echo. 
Exemplo:
-->
<?php
  print "Olá, mundo!"; // Exibe uma string simples
  // print "Hoje é ", date("d/m/Y"), "."; // Isso causaria um erro, pois print não suporta múltiplos argumentos
  print "Hoje é " . date("d/m/Y") . "."; // Concatenando strings e função
?>
<!--
Neste exemplo:
A primeira linha exibe a frase "Olá, mundo!".
A segunda linha exibe a frase "Hoje é " seguida da data atual, usando concatenação de strings.
print é uma função, e deve ser usada com parênteses se for parte de uma expressão.
De acordo com ZANDSTRA (2014), print é útil quando se deseja usar o valor de retorno em uma expressão, embora echo seja mais comum para a maioria dos casos de saída.
-->
<?php
    $mensagem = "Olá!";
    if (print $mensagem) {
        echo " - Mensagem exibida com sucesso!";
    }
?>
<!--
Neste exemplo, a função print exibe a mensagem "Olá!" e retorna 1, o que é avaliado como verdadeiro na condição if, resultando na exibição da mensagem adicional " - Mensagem exibida com sucesso!".
-->

<!--
1.5.4 Diferenças entre echo e print
As principais diferenças entre echo e print são:
echo pode aceitar múltiplos argumentos, enquanto print aceita apenas um.
echo é uma construção da linguagem e não retorna um valor, enquanto print é uma função que retorna
um valor (1).
echo é geralmente mais rápido que print, embora a diferença seja insignificante na maioria dos casos.
Em resumo, ambos os comandos são usados para exibir conteúdo no navegador, e a escolha entre eles pode depender do contexto e da preferência do desenvolvedor.
Segundo HOLZNER (2006), a escolha entre echo e print é muitas vezes uma questão de estilo, e ambos são amplamente utilizados na comunidade PHP.

Vejamos no quadro abaixo as principais diferenças entre os comandos echo e print:
| Característica       | echo                         | print                                        |
|----------------------|------------------------------|----------------------------------------------|
| Retorno              | Não retorna valor            | Retorna 1                                    |
| Argumentos           | Aceita múltiplos argumentos  | Aceita apenas um argumento                   |
| Velocidade           | Geralmente mais rápido       | Geralmente mais lento                        |
| Uso comum            | Exibir conteúdo simples      | Usado quando se precisa do valor de retorno  |
| Tipo                 | Construção da linguagem      | Função                                       |

Segundo a documentação oficial do PHP Manual (2025), echo é marginalmente mais rápido por não retornar valor, sendo mais adequado para casos de exibição simples.

1.5.5 Boas práticas com comandos de saída
Ao usar comandos de saída em PHP, é importante seguir algumas boas práticas para garantir que o código seja eficiente e fácil de manter:
> Evite usar echo ou print para exibir grandes blocos de HTML. Em vez disso, considere usar templates ou arquivos separados para o HTML.
> Use concatenação de strings para construir mensagens complexas, em vez de múltiplos comandos echo.
> Considere a legibilidade do código ao escolher entre echo e print, optando por echo para saídas simples e print quando o valor de retorno for necessário.
> Mantenha o código organizado e evite misturar lógica de negócios com a apresentação, utilizando uma abordagem de separação de preocupações, como o padrão MVC (Model-View-Controller).

De acordo com POWERS (2017), seguir boas práticas ao usar comandos de saída é crucial para criar aplicações PHP robustas e fáceis de manter, especialmente à medida que o projeto cresce em complexidade.

1.5.6 Escapando aspas e caracteres especiais
Ao usar comandos de saída, é importante lembrar de escapar aspas e caracteres especiais para evitar erros de sintaxe. Por exemplo:
-->
<?php
  echo "Ele disse: \"Olá, mundo!\""; // Usando aspas duplas dentro de uma string
  echo 'Ele disse: "Olá, mundo!"'; // Usando aspas simples para evitar a necessidade de escape das aspas duplas
?>
<!--
Neste exemplo, a primeira linha usa aspas duplas para a string e escapa as aspas duplas internas com uma barra invertida (\). A segunda linha usa aspas simples para a string, permitindo que as aspas duplas sejam usadas diretamente sem necessidade de escape.
Segundo ULLMAN (2018), o uso correto de aspas e escapes é fundamental para evitar erros comuns e garantir que o código seja interpretado corretamente pelo servidor, especialmente quando se trabalha com strings complexas ou HTML dentro de comandos de saída.
-->

<!--
1.5.7 Conclusão
Os comandos echo e print são fundamentais para a saída de dados em PHP, permitindo que os desenvolvedores criem páginas web dinâmicas e interativas. Compreender as diferenças entre eles é importante para escrever código eficiente e claro.
De acordo com POWERS (2017), dominar os comandos de saída é essencial para qualquer desenvolvedor PHP, pois eles são a base para a construção de interfaces de usuário e a apresentação de dados processados pelo servidor.
-->