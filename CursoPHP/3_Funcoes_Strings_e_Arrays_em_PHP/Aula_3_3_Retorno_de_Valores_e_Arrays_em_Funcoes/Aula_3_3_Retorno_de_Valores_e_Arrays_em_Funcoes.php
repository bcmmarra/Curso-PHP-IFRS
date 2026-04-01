<!-- 
3.3 Retorno de Valores e Arrays em Funções
3.3.1 O que significa retornar um valor?
Retornar um valor em PHP significa que a função envia um resultado de volta para o local onde foi chamada através da instrução return. Esse mecanismo permite que a função retorne diversos tipos de dados — como strings, números, booleanos ou arrays — para que sejam utilizados em expressões, atribuídos a variáveis ou passados como argumentos para outras funções. Segundo Welling e Thomson (2017), o uso de retornos torna o código mais reutilizável e desacoplado, promovendo boas práticas de programação ao isolar a lógica do processamento de sua exibição ou uso posterior.

A instrução return é usada para devolver o resultado da execução de uma função, encerrando sua execução imediatamente (ULLMAN, 2018, p. 125). Esse comportamento permite que o resultado de uma função seja armazenado em uma variável, manipulado, exibido ou usado como argumento para outras funções.


3.3.2 Retornando valores escalares
Valores escalares são tipos de dados simples, como strings, números e booleanos. Retornar valores escalares em funções é uma prática comum para realizar cálculos, processar dados ou gerar mensagens. Por exemplo, uma função que calcula a soma de dois números pode retornar o resultado dessa operação:
-->

<?php
  function somar($a, $b) {
    return $a + $b;
  }

  $resultado = somar(5, 10);
  echo "Resultado da soma: $resultado";
  echo "<br> <br> ";
?>

<!--
Neste exemplo, a função somar recebe dois parâmetros ($a e $b), realiza a soma e retorna o resultado. O valor retornado é então armazenado na variável $resultado, que é exibida em seguida.

3.3.3 Tipagem do valor de retorno
A partir do PHP 7 é possível especificar o tipo de dado que a função deve retornar, aumentando a previsibilidade do código. Isso é feito utilizando o operador : após os parênteses da função.

Vejamos um exemplo com tipo de retorno int:
-->

<?php
  function multiplicar(int $a, int $b): int {
      return $a * $b;
  }
  echo "Resultado da multiplicação: " . multiplicar(4, 5);
  echo "<br> <br> ";
?>

<!--
Neste exemplo, a função multiplicar é declarada para aceitar dois parâmetros do tipo int e retornar um valor do tipo int. Se a função tentar retornar um valor de outro tipo, o PHP lançará um erro, garantindo que o código seja mais robusto e fácil de depurar.

3.3.4 Retornando arrays
Funções também podem retornar arrays, o que é útil para retornar múltiplos valores ou conjuntos de dados relacionados. Por exemplo, uma função que retorna informações de um usuário pode retornar um array associativo:
-->

<?php
  function dadosDoUsuario() {
      return ["nome" => "Ana", "idade" => 28];
  }

  $usuario = dadosDoUsuario();
  echo "Nome: " . $usuario["nome"] . "<br>";
  echo "Idade: " . $usuario["idade"];
  echo "<br> <br> ";
?>

<!--
Neste exemplo, a função dadosDoUsuario retorna um array associativo contendo o nome e a idade do usuário. O array é armazenado na variável $usuario, e seus valores são acessados usando as chaves "nome" e "idade".

3.3.5 Retornando arrays multidimensionais
Além de arrays simples, funções podem retornar arrays multidimensionais, que são arrays contendo outros arrays. Isso é útil para representar estruturas de dados mais complexas, como listas de usuários ou produtos. Por exemplo:
-->
<?php
  function listaDeUsuarios() {
      return [
          ["nome" => "Carlos", "idade" => 30],
          ["nome" => "Maria", "idade" => 25],
          ["nome" => "João", "idade" => 35]
      ];
  }

  $usuarios = listaDeUsuarios();
  foreach ($usuarios as $usuario) {
      echo "Nome: " . $usuario["nome"] . ", Idade: " . $usuario["idade"] . "<br>";
  }
?>

<!--
Neste exemplo, a função listaDeUsuarios retorna um array multidimensional, onde cada elemento é um array associativo representando um usuário com seu nome e idade. O resultado é percorrido usando um loop foreach para exibir as informações de cada usuário.
-->

