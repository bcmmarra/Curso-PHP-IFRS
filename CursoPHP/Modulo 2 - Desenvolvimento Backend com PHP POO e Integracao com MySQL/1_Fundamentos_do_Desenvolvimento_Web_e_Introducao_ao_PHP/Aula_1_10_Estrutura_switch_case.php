<!-- 
1.10 Estrutura switch/case
A estrutura switch/case é uma alternativa à estrutura condicional if/elseif/else, sendo especialmente útil quando precisamos comparar uma única variável com vários valores diferentes. Ela ajuda a tornar o código mais limpo e organizado, evitando múltiplos ifs aninhados.

1.10.1 Quando usar switch?
Sempre que tivermos uma variável que pode assumir diversos valores fixos (como dias da semana, estados civis, faixas de pontuação, entre outros), o switch é uma escolha elegante e eficiente.

De acordo com HOLZNER (2006), o uso de switch é recomendado para situações em que o valor de uma variável pode se encaixar em diversas alternativas excludentes, promovendo maior clareza e manutenção do código.

1.10.2 Sintaxe básica
Vejamos abaixo a sintaxe básica do switch: 

switch (variável) {
    case valor1:
        // código a ser executado se variável == valor1
        break;
    case valor2:
        // código a ser executado se variável == valor2
        break;
    // mais casos...
    default:
        // código a ser executado se variável não corresponder a nenhum caso
}

O switch avalia a variável e executa o bloco de código correspondente ao valor que corresponde. O uso do break é crucial para evitar que o código continue executando os casos seguintes (conhecido como "fall-through"). O caso default é opcional, mas é uma boa prática incluí-lo para lidar com valores inesperados.

Veja a explicação desta sintaxe:

switch: avalia a expressão fornecida.
case: compara o valor da expressão com o valor listado.
break: encerra o bloco de código de um case (impede que os próximos cases sejam executados).
default: é executado quando nenhum dos cases corresponde ao valor.

1.10.3 Exemplo prático: dias da semana
Vejamos um exemplo prático mostrando os dias da semana usando o switch:
-->
<?php
    $dia = 3;

    switch ($dia) {
        case 1:
            echo "Domingo";
            break;
        case 2:
            echo "Segunda-feira";
            break;
        case 3:
            echo "Terça-feira";
            break;
        case 4:
            echo "Quarta-feira";
            break;
        case 5:
            echo "Quinta-feira";
            break;
        case 6:
            echo "Sexta-feira";
            break;
        case 7:
            echo "Sábado";
            break;
        default:
            echo "Valor inválido para dia da semana.";
    }
?>
<!--
Neste exemplo, a variável $dia é avaliada pelo switch. Como $dia tem o valor 3, o código dentro do case 3 é executado, resultando na saída "Terça-feira". Se $dia tivesse um valor fora do intervalo de 1 a 7, o código dentro do default seria executado, exibindo "Valor inválido para dia da semana.".

1.10.4 Agrupando múltiplos casos
Em algumas situações, é útil agrupar vários cases que terão o mesmo resultado. Isso é feito simplesmente omitindo o break entre eles.

Vejamos abaixo um exemplo onde vamos verificar um dia é fim de semana ou dia útil:
-->
<?php
    $dia = 6;

    switch ($dia) {
        case 1:
        case 7:
            echo "Fim de semana";
            break;
        case 2:
        case 3:
        case 4:
        case 5:
            echo "Dia útil";
            break;
        default:
            echo "Valor inválido para dia da semana.";
    }
?>
<!--
Neste exemplo, os cases 1 e 7 estão agrupados para indicar que ambos correspondem a "Fim de semana", enquanto os cases 2, 3, 4 e 5 estão agrupados para indicar "Dia útil". Se $dia for 6, o resultado será "Dia útil", e se for um valor fora do intervalo de 1 a 7, o default será acionado.

1.10.5 Vantagens do switch/case
- Clareza: O switch torna o código mais legível quando se trata de múltiplas comparações de uma única variável.
- Manutenção: É mais fácil adicionar ou remover casos sem afetar a estrutura geral do código.
- Performance: Em alguns casos, o switch pode ser mais eficiente do que múltiplos ifs, especialmente quando há muitos casos a serem comparados.
- Organização: O switch ajuda a organizar o código de forma mais lógica, agrupando casos relacionados.

Em resumo, o switch/case é uma estrutura de controle de fluxo poderosa e eficiente para lidar com múltiplas condições baseadas em uma única variável, promovendo um código mais limpo e fácil de manter.

De acordo com Lerdorf (2013), o uso de switch/case é recomendado para melhorar a legibilidade e a manutenção do código, especialmente em situações onde uma variável pode assumir muitos valores distintos, proporcionando uma estrutura mais clara e fácil de entender.

1.10.5 Cuidados importantes
Tenha atenção ao uso do switch:

Cuidado para não esquecer o uso do break, a menos que queira deliberadamente executar múltiplos cases.
O default é opcional, mas é boa prática incluí-lo para tratar valores inesperados.

O switch compara valores com o operador == (igualdade fraca), o que pode gerar surpresas se os tipos de dados forem diferentes (ULLMAN, 2018).
-->
