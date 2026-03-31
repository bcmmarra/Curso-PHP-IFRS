<!-- 
3.2 Parâmetros: Por Valor e Por Referência
3.2.1 O que são parâmetros?
Em PHP, os parâmetros são valores passados para uma função no momento de sua chamada. Esses valores são processados pela função, permitindo que ela produza resultados diferentes dependendo da entrada fornecida. Eles são definidos dentro dos parênteses da função: 
-->
<?php
function saudacao($nome)
{
    echo "Olá, $nome, Seja bem-vindo ao sistema de Gerenciamento de Tarefas!";
}

saudacao("Bruno");
echo "<br> <br>";
?>

<!--
Neste exemplo, a função saudacao() recebe um parâmetro $nome, que é utilizado para personalizar a mensagem de saudação. Ao chamar a função com o argumento "Bruno", a saída será "Olá, Bruno, Seja bem-vindo ao sistema de Gerenciamento de Tarefas!". Os parâmetros permitem que as funções sejam mais flexíveis e adaptáveis a diferentes situações, tornando o código mais reutilizável e eficiente.

3.2.2 Parâmetros por valor
Por padrão, os parâmetros em PHP são passados por valor. Isso significa que quando um valor é passado para uma função, uma cópia desse valor é criada dentro da função. Qualquer modificação feita ao parâmetro dentro da função não afetará o valor original fora da função.
-->
<?php
function incrementar(int $numero)
{
    $numero++;
    echo "Dentro da função: $numero <br>";
}

$valor = 5;
incrementar($valor);
echo "Fora da função: $valor";
echo "<br> <br>";
?>

<!--
Neste exemplo, a função incrementar() recebe um parâmetro $numero, que é incrementado dentro da função. No entanto, o valor original da variável $valor fora da função permanece inalterado, demonstrando que o parâmetro foi passado por valor.
-->

<!--
3.2.3 Parâmetros por referência
Em PHP, é possível passar parâmetros por referência usando o operador &. Quando um parâmetro é passado por referência, a função recebe uma referência ao valor original, permitindo que as modificações feitas dentro da função afetem o valor fora da função.
-->

<?php
function dobrarValor(&$numero)
{
    echo "Dentro da função: $numero , antes de dobrar<br>";
    $numero *= 2;
    echo "Dentro da função: $numero , depois de dobrar<br>";
}
$valor = 10;
dobrarValor($valor);
echo "Valor após função: $valor";
echo "<br> <br>";
?>

<!--
Neste exemplo, a função dobrarValor() recebe um parâmetro por referência usando o operador &. Isso significa que quando a função é chamada com a variável $valor, qualquer modificação feita ao parâmetro dentro da função afetará o valor original de $valor fora da função. Após a chamada da função, o valor de $valor é alterado para 20, demonstrando que o parâmetro foi passado por referência. Passar parâmetros por referência é útil quando se deseja que a função modifique o valor original, evitando a necessidade de retornar o valor modificado e atribuí-lo novamente fora da função.

Em resumo, os parâmetros por valor criam uma cópia do valor passado para a função, enquanto os parâmetros por referência permitem que a função modifique o valor original. A escolha entre os dois depende do comportamento desejado e da necessidade de modificar ou preservar o valor original fora da função.

3.2.4 Diferenças práticas entre valor e referência
A principal diferença prática entre parâmetros por valor e por referência é que os parâmetros por valor não alteram o valor original fora da função, enquanto os parâmetros por referência permitem que a função modifique o valor original.

No caso de parâmetros por valor, qualquer modificação feita ao parâmetro dentro da função não afetará o valor original fora da função. Isso é útil quando se deseja preservar o valor original e evitar efeitos colaterais indesejados. Por outro lado, os parâmetros por referência são úteis quando se deseja que a função modifique o valor original, evitando a necessidade de retornar o valor modificado e atribuí-lo novamente fora da função. A escolha entre os dois depende do comportamento desejado e da necessidade de modificar ou preservar o valor original fora da função. Em geral, é recomendado usar parâmetros por valor para a maioria dos casos, a menos que haja uma necessidade específica de modificar o valor original, caso em que os parâmetros por referência podem ser uma opção mais adequada.

Característica                      | Por Valor                 | Por Referência
----------------                    |-----------                |----------------
Cópia da variável                   | Sim                       | Não
Altera a variável original          | Não                       | Sim
Sintaxe                             | function funcao($param)   | function funcao(&$param)
Uso recomendado                     | Quando não é necessário   |Quando é necessário 
                                    |modificar o valor original |modificar o valor original
-->
