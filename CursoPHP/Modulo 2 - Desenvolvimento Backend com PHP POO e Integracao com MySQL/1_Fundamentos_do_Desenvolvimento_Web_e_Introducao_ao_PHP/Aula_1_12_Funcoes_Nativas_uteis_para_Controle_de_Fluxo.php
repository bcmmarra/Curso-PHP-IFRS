<!-- 
1.12 Funções Nativas Úteis para Controle de Fluxo
No PHP, além das estruturas tradicionais como if, switch, while e for, também podemos utilizar funções nativas para melhorar o controle de fluxo em nossos scripts. Essas funções ajudam a verificar condições, tomar decisões ou manipular os dados de forma lógica e eficiente.

Estas funções não substituem os comandos condicionais, mas complementam a lógica dos programas, tornando o código mais claro, reutilizável e robusto.

1.12.1 isset(), empty() e unset()
Ciclo de vida da variável:
Verificar se existe (isset) -> Verificar se tem conteúdo (empty) -> Destruir (unset).

a) isset()
Este comando verifica se uma variável foi definida e não é null. Muito útil para verificar se variáveis foram enviadas em formulários, por exemplo. 

Veja um exemplo abaixo: 
-->
<?php
$nome = "João";

if (isset($nome)) {
    echo "A variável foi definida.";
}
echo "<br> <br>";

?>

<!--
Esse código verifica se a variável $nome foi definida usando a função isset().

$nome recebe o valor "João".
isset($nome) retorna true porque a variável existe e não é null.

Como a condição é verdadeira, o echo exibe: A variável foi definida.

b) empty()
Verifica se a variável está vazia, ou seja, se é igual a "", 0, null, false, [] ou unset. Ideal para checar campos obrigatórios em formulários ou valores que não devem estar vazios.

Veja um exemplo abaixo:
-->
<?php
$mensagem = "";

if (empty($mensagem)) {
    echo "A variável está vazia.";
}
echo "<br> <br>";

?>
<!--
Esse código verifica se a variável $mensagem está vazia usando a função empty().

$mensagem recebe uma string vazia "".
empty($mensagem) retorna true porque valores como "", 0, "0", null, false ou arrays vazios são considerados vazios no PHP.

Como a condição é verdadeira, o echo exibe: A variável está vazia.

c) unset()
Diferente das anteriores, esta função não retorna um valor (true ou false), mas executa uma ação: ela destrói a variável especificada. Isso significa que a variável deixa de existir no script a partir daquela linha, liberando a memória que estava ocupando.

Veja um exemplo abaixo:
-->
<?php
$usuario = "Carlos";
unset($usuario);

if (!isset($usuario)) {
    echo "A variável \$usuario foi removida e não existe mais.";
}
echo"<br><br>"
?>

<!--
O que aconteceu? A função unset() removeu a associação entre o nome $usuario e o valor "Carlos". Tentar usar a variável após o unset() resultará em um erro de "variável indefinida".


1.12.2 is_numeric() e is_string()
Essas funções ajudam a identificar o tipo de dado contido em uma variável.

a) is_numeric()
Verifica se o valor é um número ou uma string numérica.

Veja um exemplo abaixo:
-->
<?php
  $idade = "25";

  if (is_numeric($idade)) {
    echo "Valor válido para cálculo.";
  }
  echo "<br> <br>";
?>

<!--
Esse código verifica se o conteúdo da variável $idade é numérico usando is_numeric().

$idade contém "25", que é uma string, mas representa um número.

is_numeric($idade) retorna true para números inteiros, decimais ou strings numéricas.

Como a condição é verdadeira, o echo exibe: Valor válido para cálculo.


b) is_string()
Verifica se o valor é do tipo string.

Veja um exemplo abaixo:
-->
<?php
  $nome = "Lucas";

  if (is_string($nome)) {
    echo "É um texto.";
  }
  echo "<br> <br>";
?>

<!--
Esse código verifica se a variável $nome é do tipo string usando is_string().

$nome contém "Lucas", que é um texto.
is_string($nome) retorna true para qualquer valor do tipo string.

Como a condição é verdadeira, o echo exibirá: É um texto.

OBS: Usar essas funções evita erros em cálculos ou concatenações com tipos inadequados.

1.12.3 die() e exit()
Essas funções encerram a execução do script imediatamente.

a) die()
Pode também exibir uma mensagem antes de terminar o script.

Veja um exemplo abaixo:
-->
<?php
  if (!file_exists("dados.txt")) {
    die("Arquivo necessário não encontrado.");
  }
  echo "<br> <br>";
?>

<!--
Esse código verifica se o arquivo dados.txt existe usando file_exists().

O operador ! (negação) inverte o resultado:
Se o arquivo não existir, a condição será verdadeira.
Nesse caso, die() é chamado para encerrar a execução do script e exibir a mensagem: Arquivo necessário não encontrado.


b) exit()
Tem funcionamento idêntico ao die(), podendo ser usado com ou sem mensagem.

Veja um exemplo abaixo:
-->
<?php
  $login_valido = false;

  if (!$login_valido) {
    exit("Acesso negado.");
  }
?>
<!--
Esse código verifica se a variável $login_valido não é verdadeira usando o operador !.

$login_valido está definido como false.
!$login_valido é true, então a condição do if é satisfeita.

A função exit() encerra imediatamente a execução do script e exibe: Acesso negado.

Se $login_valido fosse true, o script continuaria normalmente.

OBS: São utilizadas geralmente em validações críticas ou tratamento de erros.

1.12.4 isset(), empty() e unset() em conjunto

Essas três funções costumam ser combinadas para validar, manipular ou eliminar variáveis durante o controle do fluxo.

Veja um exemplo abaixo:
-->
<?php
  $valor = 100;

  if (isset($valor) && !empty($valor)) {
    echo "Tudo certo!";
    unset($valor); // elimina a variável
  }
?>

<!--
Esse código faz duas verificações na variável $valor:

isset($valor) – verifica se a variável foi definida.
!empty($valor) – garante que ela não está vazia (nem 0, null, false, "", etc.).

Como $valor = 100, ambas as condições são verdadeiras.
O echo exibe: Tudo certo!

Em seguida, unset($valor) remove a variável da memória, tornando-a inexistente no restante do script.

Se tentarmos fazer um echo $valor na linha de baixo, o código gerará um erro. Porque a remoção é imediata e definitiva para aquele escopo.

1. O comportamento em Arrays (Importante!)
Quando usamos unset() em um elemento de um array, a chave é removida, mas o PHP não reindexa o array.
-->
<?php
$frutas = [0 => "Maçã", 1 => "Banana", 2 => "Laranja"];
unset($frutas[1]); 
// O array agora é: [0 => "Maçã", 2 => "Laranja"]
// Note que o índice 1 simplesmente "sumiu".
?>
<!--
2. Diferença Crucial: unset() vs $var = null
Para não confundir os dois. Vale adicionar esta pequena tabela comparativa:

Comando         |O que faz com a variável?          |A variável ainda existe?           |
----------------|-----------------------------------|---------------------------        |
$v = null;      |Limpa o valor, tornando-o nulo.    |Sim, ela continua definida.        |
unset($v);      |Elimina a variável por completo.   |Não, ela passa a ser inexistente.  |

-->