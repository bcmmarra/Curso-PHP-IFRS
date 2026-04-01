<!-- 
Em muitas situações, é necessário comparar uma única variável com vários valores possíveis. Embora isso possa ser feito com múltiplas estruturas if/elseif, o PHP oferece uma alternativa mais organizada e legível: a estrutura switch/case.

A construção switch/case é ideal para testar múltiplas condições associadas a um mesmo valor, especialmente quando se trabalha com seleções baseadas em menus, categorias ou opções numéricas (HOLZNER, 2006; ULLMAN, 2018).

A sintaxe básica do switch/case é a seguinte:
switch (variável) {
    case valor1:
        // Código executado se a expressão for igual a valor1
        break;
    case valor2:
        // Código executado se a expressão for igual a valor2
        break;
    // ... outros casos ...
    default:
        // Código executado se nenhum dos casos anteriores for atendido
}


Veja abaixo os elementos principais da sua sintaxe:
- switch: palavra-chave que inicia a estrutura de decisão.
- variável: a expressão ou variável que será avaliada.
- case: define um caso específico para comparação. O código dentro do case é executado se a variável corresponder ao valor especificado.
- break: interrompe a execução do switch após um case ser atendido. Sem o break, o código continuará a ser executado nos casos seguintes, o que pode levar a resultados indesejados.
- default: caso nenhum dos casos anteriores seja atendido, o código dentro do default será executado. É opcional, mas recomendado para lidar com situações inesperadas.
No exemplo acima, a variável $opcao é avaliada. Se $opcao for igual a 1, 2 ou 3, a mensagem correspondente será exibida. Se $opcao tiver um valor diferente desses, a mensagem "Opção inválida." será exibida.

O switch avalia a variável fornecida e executa o bloco de código correspondente ao valor que corresponde à variável. O uso do break é crucial para evitar que o código continue a ser executado nos casos seguintes, a menos que isso seja intencional (conhecido como "fall-through"). O case default é opcional, mas é uma boa prática incluí-lo para lidar com valores inesperados ou não tratados.

fall-through é um comportamento em estruturas de controle de fluxo, como switch/case, onde a execução continua para o próximo caso mesmo que a condição do caso atual seja atendida. Isso pode ser útil em situações onde múltiplos casos compartilham o mesmo bloco de código, mas deve ser usado com cuidado para evitar confusão e erros no código (HOLZNER, 2006).

Exemplo prático:
-->

<?php
$opcao = 2;

switch ($opcao) {
    case 1:
        echo "Opção 1 selecionada.";
        break;
    case 2:
        echo "Opção 2 selecionada.";
        break;
    case 3:
        echo "Opção 3 selecionada.";
        break;
    default:
        echo "Opção inválida.";
}
echo "<br><br>";
?>

<!-- 
Veja abaixo os elementos principais da sua sintaxe:

switch (expressão):
A expressão é avaliada apenas uma vez.
Pode ser uma variável, uma constante, ou o retorno de uma função.
O valor resultante dessa expressão será comparado com cada um dos valores definidos nos case.

case valor:
Cada case representa uma possibilidade de valor que será comparada com a expressão.
Quando a expressão é igual ao valor do case, o código dentro desse bloco é executado.
O PHP compara usando o operador == (comparação com conversão de tipo), não o operador === (comparação estrita). Isso significa que tipos diferentes podem ser considerados iguais em determinadas situações.

break:
Impede que a execução continue para os outros casos.
Quando omitido, os blocos seguintes também serão executados (fall-through), o que pode causar efeitos indesejados.

default:
Bloco opcional.
Executado quando nenhum dos casos anteriores for correspondido.
Equivalente ao else de uma estrutura if/else.

Veja abaixo o seu fluxo de execução:
1 - O valor da expressão no switch é calculado.
2 - O PHP verifica cada case sequencialmente.
3 - Quando encontrar o primeiro case que corresponde ao valor da expressão (==), ele executa o bloco de código associado.
4 - Ao encontrar um break, ele sai do switch.
5 - Se nenhum case for correspondente, e houver um default, este será executado.

2.5.2 Exemplo Prático com switch
O exemplo a seguir demonstra o uso do switch para determinar o dia da semana com base em um número fornecido:
-->
<?php
$opcao = 2;
switch ($opcao) {
    case 1:
        echo "Você escolheu a opção 1";
        break;
    case 2:
        echo "Você escolheu a opção 2";
        break;
    case 3:
        echo "Você escolheu a opção 3";
        break;
    default:
        echo "Opção inválida";
}
echo "<br><br>";
?>


<!-- 
Este código PHP usa a estrutura switch para verificar qual opção foi escolhida, com base no valor da variável $opcao, que foi definida como 2. O switch compara esse valor com os casos listados: se for 1, exibe "Você escolheu a opção 1"; se for 2, exibe "Você escolheu a opção 2"; se for 3, exibe "Você escolheu a opção 3". Como o valor de $opcao é 2, o código executa o segundo case e imprime "Você escolheu a opção 2". O bloco default serve como uma opção padrão, que será executada se nenhuma das condições anteriores for atendida — nesse exemplo, ele não será usado. 

Considerações sobre o switch/case
- O switch/case é mais eficiente do que múltiplos if/elseif quando se trata de comparar uma única variável com vários valores, pois a expressão é avaliada apenas uma vez.
- O uso do break é fundamental para evitar a execução indesejada de casos subsequentes. Se o break for omitido, o código continuará a ser executado nos casos seguintes, o que pode levar a resultados inesperados.
- O case default é opcional, mas é uma boa prática incluí-lo para lidar com valores inesperados ou não tratados, garantindo que o programa tenha um comportamento previsível mesmo em situações imprevistas.
- O switch/case é mais legível e organizado do que múltiplos if/elseif, especialmente quando se lida com muitas condições relacionadas a um mesmo valor, tornando o código mais fácil de entender e manter.
-->

<!-- 
2.5.3 Importância do break
O comando break evita que os blocos seguintes sejam executados. Sem ele, o PHP continuará a executar os blocos subsequentes, comportamento conhecido como "fall-through" (POWERS, 2017). Esse termo refere-se a um comportamento específico da estrutura switch/case: quando um case é satisfeito, mas não contém um comando break, o programa continua executando os blocos dos case seguintes, mesmo que eles não sejam correspondentes. Ou seja, o fluxo "cai" ( fall) para os próximos blocos — daí o nome fall-through (queda contínua).

Veja abaixo um exemplo com fall-through (sem break):
-->

<?php
$numero = 2;

switch ($numero) {
    case 1:
        echo "Um ";
    case 2:
        echo "Dois ";
    case 3:
        echo "Três ";
    case 4:
        echo "Quatro ";
    case 5:
        echo "Cinco ";
}
echo "<br><br>";
?>

<!-- 
Neste código PHP, a variável $numero é definida como 2. O switch avalia o valor de $numero e encontra o case 2, que corresponde ao valor. O código dentro do case 2 é executado, imprimindo "Dois ". No entanto, como não há um comando break após o case 2, a execução continua para o case 3, imprimindo "Três ", e assim por diante. O resultado final exibido na tela será "Dois Três Quatro Cinco", demonstrando o comportamento de fall-through. Se o break tivesse sido incluído após o case 2, apenas "Dois " seria impresso.

Apesar dos riscos, o fall-through pode ser útil em situações específicas, quando desejamos que vários casos diferentes levem ao mesmo bloco de código. Veja um exemplo abaixo:
-->

<?php
  $letra = "C";

  switch ($letra) {
      case "A":
      case "B":
      case "C":
          echo "Letra do início do alfabeto";
          break;
      case "X":
      case "Y":
      case "Z":
          echo "Letra do fim do alfabeto";
          break;
      default:
          echo "Letra intermediária";
  }
?>

<!--
Este código PHP utiliza a estrutura switch para classificar a letra armazenada na variável $letra, que neste caso é "C". O switch verifica o valor da variável comparando com diferentes case. As letras "A", "B" e "C" estão agrupadas para exibir a mesma mensagem: "Letra do início do alfabeto". Isso é possível porque os três case são colocados em sequência, sem comandos entre eles, até o echo que será executado. Como $letra vale "C", a mensagem exibida será "Letra do início do alfabeto". Se fosse "X", "Y" ou "Z", a mensagem seria "Letra do fim do alfabeto". Para qualquer outra letra, seria exibido "Letra intermediária", definido pelo bloco default. 

O uso do fall-through neste exemplo é intencional e serve para agrupar casos que compartilham a mesma lógica, tornando o código mais conciso e fácil de manter. No entanto, é importante usar essa técnica com cuidado para evitar confusão e garantir que o comportamento do código seja claro para outros desenvolvedores que possam ler ou modificar o código no futuro.

2.5.4 Uso do default
O bloco default é semelhante ao else das estruturas condicionais e deve ser utilizado como tratamento para valores inesperados ou inválidos.

Veja abaixo um exemplo com default:
-->
<?php
  $letra = "Z";

  switch ($letra) {
      case "A":
          echo "Letra A";
          break;
      case "B":
          echo "Letra B";
          break;
      default:
          echo "Letra não reconhecida";
  }
?>

<!-- 
Este código PHP usa a estrutura switch para verificar o valor da variável $letra, que neste caso é "Z". O switch compara esse valor com os case definidos. Primeiro, verifica se a letra é "A" e, se for, exibe "Letra A". Depois, verifica se é "B", e exibe "Letra B" se for o caso. Como o valor é "Z", que não corresponde a nenhum dos casos definidos, o programa executa o bloco default, que é usado para lidar com valores não reconhecidos, e exibe a mensagem "Letra não reconhecida". 

2.5.5 Quando Utilizar switch/case
O switch/case é recomendado quando se tem uma única variável ou expressão que precisa ser comparada com múltiplos valores possíveis. Ele é especialmente útil para melhorar a legibilidade do código, tornando-o mais organizado e fácil de entender, em comparação com múltiplas estruturas if/elseif. O switch/case é mais eficiente do que if/elseif para esse tipo de comparação, pois a expressão é avaliada apenas uma vez, enquanto if/elseif pode exigir múltiplas avaliações. No entanto, para condições mais complexas ou quando se precisa comparar múltiplas variáveis, as estruturas if/else podem ser mais adequadas.

Veja no quadro abaixo um resumo sobre quando utilizar switch/case em comparação com o if/else:

Situação                                                ----|----   Melhor estrutura
Condições simples ou duas possibilidades                ----|----   if/else
Comparação de uma variável com múltiplos valores        ----|----   switch/case
Comparações com operadores relacionais (>, <, etc.)     ----|----   if/else

A escolha entre if e switch deve levar em conta não apenas o funcionamento, mas a legibilidade e manutenção do código (ULLMAN, 2018).
-->

