<!-- 
3.1 O que são funções?
Em programação, funções são blocos de código que executam uma tarefa específica. Elas permitem modularizar o programa, ou seja, dividir o código em partes menores e reutilizáveis, facilitando a leitura, a manutenção e o reaproveitamento das instruções. De acordo com Welling e Thomson (2017), funções são particularmente úteis para isolar trechos de lógica que precisam ser executados repetidamente, reduzindo a duplicação de código. Uma função pode aceitar entradas (argumentos), realizar operações com elas e retornar um valor de saída (ULLMAN, 2018).

No PHP, funções podem ser definidas pelo programador (funções definidas pelo usuário) ou já estarem disponíveis na linguagem (funções internas ou nativas). Com a evolução da linguagem, especialmente nas versões mais recentes como o PHP 8.4, tornou-se possível especificar tipos para parâmetros e valores de retorno, o que promove maior segurança e clareza na construção do código (PHP MANUAL, 2025).

3.1.2 Estrutura básica de uma função
A declaração de uma função em PHP é feita com a palavra-chave function, seguida do nome da função, parênteses e, opcionalmente, parâmetros: 

function nomeDaFuncao($parametro1, $parametro2) {
    // Corpo da função
    return $resultado;
}

No exemplo acima, nomeDaFuncao é o nome da função, $parametro1 e $parametro2 são os parâmetros de entrada, e o corpo da função contém as instruções que serão executadas quando a função for chamada. O comando return é usado para retornar um valor ao final da execução da função.

Veja abaixo um exemplo de função simples sem parâmetros:
-->

<?php
function saudacao(){
    echo "Olá, seja bem-vindo ao curso de PHP!";
}

saudacao(); // Chama a função para exibir a saudação

echo "<br> <br>";
?>

<!--Neste exemplo, a função saudacao() é definida para exibir uma mensagem de boas-vindas. Ao chamar a função, a mensagem é exibida na tela. Funções como essa são úteis para organizar o código e evitar repetição, permitindo que a mesma lógica seja reutilizada em diferentes partes do programa. Além disso, funções podem ser usadas para realizar cálculos, manipular dados, interagir com o usuário, entre outras tarefas, tornando o desenvolvimento de aplicações mais eficiente e estruturado. Em resumo, funções são fundamentais para a construção de programas em PHP, pois promovem a modularidade, a reutilização de código e a clareza na organização das instruções.

3.1.3 Funções com parâmetros
Parâmetros permitem que a função receba valores externos para processar dados de forma dinâmica.
-->
<?php
function saudacaoPersonalizada($nome){
    echo "Mensagem de saudação personalizada para o usuário: <br>";
    echo "Olá, $nome! Seja bem-vindo ao curso de PHP!";
}
saudacaoPersonalizada("Maria"); // Chama a função com um argumento para personalizar a saudação
echo "<br> <br>";
?>
<!--
Neste exemplo, a função saudacaoPersonalizada() recebe um parâmetro $nome, que é utilizado para personalizar a mensagem de saudação. Ao chamar a função com o argumento "Maria", a saída será "Olá, Maria! Seja bem-vindo ao curso de PHP!". O uso de parâmetros torna as funções mais flexíveis e adaptáveis a diferentes situações, permitindo que o mesmo bloco de código seja reutilizado com diferentes entradas. 

Tipagem nos parâmetros: É possível indicar o tipo de dado esperado, como string, int, float, bool, entre outros:


function saudacaoTipada(string $nome){
    echo "Olá, $nome! Seja bem-vindo ao curso de PHP!";
}
-->
<?php
  function dobrar(int $numero) {
      echo $numero * 2;
  }
  dobrar(4); // Saída: 8
  echo "<br> <br>";
?>

<!--
Neste exemplo, a função dobrar() espera um parâmetro do tipo inteiro. Ao chamar a função com o argumento 4, a saída será 8, que é o resultado da multiplicação de 4 por 2. A tipagem dos parâmetros ajuda a garantir que a função receba os tipos de dados corretos, evitando erros e melhorando a legibilidade do código.

3.1.4 Retorno de valores com return
A palavra-chave return é usada para retornar um valor de uma função. Isso permite que a função produza um resultado que pode ser utilizado em outras partes do programa.
-->

<?php
  function soma($a, $b) {
      return $a + $b;
  }
  $resultado = soma(3, 7);
  echo "Resultado: $resultado";
?>

<!--
Neste exemplo, a função soma() recebe dois parâmetros, $a e $b, e retorna a soma desses valores. Ao chamar a função com os argumentos 3 e 7, o resultado é 10, que é armazenado na variável $resultado e exibido na tela. O uso de return permite que as funções sejam mais versáteis, pois podem produzir resultados que podem ser reutilizados em diferentes contextos do programa.
Em resumo, as funções são blocos de código que executam tarefas específicas, podendo receber parâmetros para processar dados de forma dinâmica e retornar valores para serem utilizados em outras partes do programa. Elas são essenciais para a modularização, reutilização e organização do código em PHP, facilitando o desenvolvimento de aplicações mais eficientes e estruturadas.

3.1.5 Boas práticas na definição de funções
Veja abaixo algumas boas práticas na definição de funções:

Use nomes descritivos: nomes como calcularTotal(), formatarNome() tornam o código mais legível.
Evite funções muito longas: divida grandes blocos em funções menores e mais específicas.
Teste funções individualmente: isso facilita encontrar erros e validar resultados.
Utilize parâmetros com tipos e valores padrão: para tornar o uso mais flexível.
-->
<?php
function calcularTotal(float $preco, int $quantidade = 1): float {
    return $preco * $quantidade;
}
$total = calcularTotal(19.99, 3);
echo "Total: $total";
?>

<!--
Neste exemplo, a função calcularTotal() recebe um preço e uma quantidade, com a quantidade tendo um valor padrão de 1. A função retorna o total calculado multiplicando o preço pela quantidade. Ao chamar a função com os argumentos 19.99 e 3, o resultado é 59.97, que é exibido na tela. Seguir boas práticas na definição de funções contribui para a criação de código mais limpo, eficiente e fácil de manter.
-->

