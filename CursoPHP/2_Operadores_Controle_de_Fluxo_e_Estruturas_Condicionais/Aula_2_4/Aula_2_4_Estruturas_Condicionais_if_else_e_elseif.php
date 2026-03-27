<!-- 
2.4.1 Estrutura if

A estrutura if avalia uma condição booleana (verdadeira ou falsa).
Se a condição for verdadeira (true), o bloco de código associado ao if é executado. Caso contrário, ele é ignorado.

if (condição) {
    // Bloco de código executado se a condição for verdadeira
}

-->

<?php
$idade = 18;

if ($idade >= 18) {
    echo "Você tem $idade então você já é maior de IDADE";
}
?>

<br> <br>

<!-- 
2.4.2 Uso do else
A cláusula else permite especificar um bloco alternativo que será executado caso a condição do if seja falsa.

if (condição) {
    Bloco de código executado se a condição for verdadeira
} else {
    Bloco de código executado se a condição for falsa
}
-->

<?php
$idade = 17;

if ($idade >= 18) {
    echo "Você tem $idade então você já é MAIOR de idade";
} else {
    echo "Você tem $idade então você já é MENOR de idade";
}
?>

<!-- 
Este código PHP verifica se uma pessoa tem 18 anos ou mais para decidir se o acesso será permitido. A variável $idade é definida com o valor 16, e em seguida o comando if faz a verificação: se a idade for maior ou igual a 18, o programa mostra "Acesso permitido". Caso contrário, ou seja, se a idade for menor que 18, o bloco else será executado e será exibida a mensagem "Acesso negado. Menor de idade.". Neste caso, como a idade é 16, o resultado mostrado será "Acesso negado. Menor de idade.".  
-->

<br> <br>

<!-- 
2.4.3 Uso de elseif
A cláusula elseif permite testar condições adicionais caso a primeira condição não seja satisfeita. Isso possibilita várias alternativas em sequência, sendo uma estrutura muito útil para fluxos de decisão mais detalhados.

if (condição1) {
    Bloco 1
} elseif (condição2) {
    Bloco 2
} else {
    Bloco padrão
}
-->

<?php
$nota = 6.1;

if ($nota >= 7) {
    echo "A sua nota foi: $nota você esta APROVADO";
} elseif ($nota >= 6) {
    echo "A sua nota foi: $nota você esta de RECUPERAÇÃO";
} else {
    echo "A sua nota foi: $nota você esta REPROVADO";
}
?>
<!-- 
Este código PHP classifica uma nota em diferentes conceitos, de acordo com seu valor. A variável $nota recebe o valor 85. Em seguida, o código utiliza uma estrutura condicional com if, elseif e else para verificar em qual faixa a nota se encaixa. Primeiro, ele verifica se a nota é maior ou igual a 90; se for, exibe "Conceito A". Como 85 não é maior ou igual a 90, essa condição é ignorada. Depois, com elseif, verifica se a nota é maior ou igual a 80; como 85 atende a essa condição, o programa exibe "Conceito B". O bloco else só seria executado se nenhuma das condições anteriores fosse verdadeira, e nesse caso exibiria "Conceito C ou inferior". Portanto, o resultado deste código será "Conceito B".  
-->

<br> <br>

<!-- 
2.4.4 Aninhamento de if/else
É possível aninhar estruturas condicionais para criar lógicas mais complexas.
-->
<?php
$idade = 16;
$acompanhado = true;

if ($idade >= 18) {
    echo "Entrada Liberada";
} else {
    if ($acompanhado) {
        echo "Entrada permitida com acompanhante";
    } else {
        echo "Entrada NEGADA";
    }
}
?>
<!-- 
Este código PHP decide se uma pessoa pode entrar em um local com base na idade e se está acompanhada. A variável $idade tem o valor 17, indicando que a pessoa é menor de idade, e a variável $acompanhado tem o valor true, ou seja, ela está acompanhada. O código começa verificando com if se a idade é maior ou igual a 18; se for, exibe "Entrada liberada". Como a idade é 17, essa condição é falsa, e o código entra no bloco else. Dentro dele, há uma nova verificação com outro if: se a pessoa está acompanhada ($acompanhado for verdadeiro), o programa exibe "Entrada permitida com acompanhante". Caso contrário, mostraria "Entrada negada". Como a pessoa está acompanhada, o resultado será "Entrada permitida com acompanhante". 
-->