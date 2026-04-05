<!-- 
1.11 Laços de Repetição: while, do...while, for, foreach
Os laços de repetição, também conhecidos como estruturas de iteração ou loops, são fundamentais na programação, pois permitem executar um bloco de código várias vezes, com base em uma condição. Eles são indispensáveis em tarefas como exibir listas de dados, repetir cálculos e percorrer arrays.

Segundo HOLZNER (2006), o uso de laços torna o código mais dinâmico e permite o processamento automatizado de grandes volumes de dados com mínima intervenção do programador.

1.11.1 while
O laço while executa um bloco de código enquanto uma condição for verdadeira.

Veja abaixo sua sintaxe: 
while (condição) {
    // código a ser executado enquanto a condição for verdadeira
}

Exemplo prático:
-->
<?php
    $contador = 1;

    while ($contador <= 5) {
        echo "Contador: $contador <br>";
        $contador++;
    }
?>
<!--
Neste exemplo, o laço while inicia com a variável $contador definida como 1. Enquanto a condição $contador <= 5 for verdadeira, o código dentro do laço será executado, exibindo o valor do contador e incrementando-o em 1 a cada iteração, quando $contador chega a 6, a condição é falsa e o laço para de executar. O resultado será a exibição dos números de 1 a 5.

1.11.2 do...while
O laço do...while é semelhante ao while, mas garante que o bloco de código seja executado pelo menos uma vez, mesmo que a condição seja falsa na primeira verificação.

Veja abaixo sua sintaxe:
do {
    // código a ser executado
} while (condição);

Exemplo prático:
-->
<?php
    $contador = 1;

    do {
        echo "Contador: $contador <br>";
        $contador++;
    } while ($contador <= 5);
?>
<!--
Neste exemplo, o bloco de código dentro do do...while será executado pelo menos uma vez, mesmo que a condição $contador <= 5 seja falsa na primeira verificação. O resultado será o mesmo que o exemplo anterior, exibindo os números de 1 a 5.

1.11.3 for
O laço for é uma estrutura de repetição que é geralmente usada quando o número de iterações é conhecido de antemão. Ele é composto por três partes: a inicialização, a condição e a atualização.

Veja abaixo sua sintaxe:
for (inicialização; condição; atualização) {
    // código a ser executado
}

Exemplo prático:
-->
<?php
    for ($contador = 1; $contador <= 5; $contador++) {
        echo "Contador: $contador <br>";
    }
?>
<!--
Neste exemplo, o laço for inicia com a variável $contador definida como 1 (inicialização). A condição $contador <= 5 é verificada antes de cada iteração, e o código dentro do laço é executado enquanto a condição for verdadeira. Após cada iteração, a atualização $contador++ é executada, incrementando o contador em 1. O resultado será a exibição dos números de 1 a 5.

1.11.4 foreach
O laço foreach é especificamente projetado para iterar sobre arrays. Ele simplifica a sintaxe e torna o código mais legível ao percorrer os elementos de um array.

Veja abaixo sua sintaxe:
foreach ($array as $valor) {
    // código a ser executado para cada valor do array
}

Exemplo prático:
-->
<?php
    $frutas = ["Maçã", "Banana", "Laranja"];

    foreach ($frutas as $fruta) {
        echo "Fruta: $fruta <br>";
    }
?>
<!--
Neste exemplo, o laço foreach percorre o array $frutas, e para cada elemento do array, a variável $fruta recebe o valor do elemento atual. O código dentro do laço é executado para cada fruta, resultando na exibição dos nomes das frutas: "Maçã", "Banana" e "Laranja". O foreach é especialmente útil para trabalhar com arrays associativos, onde você pode acessar tanto a chave quanto o valor de cada elemento.

Agora, veja um exemplo com array associativo:
-->

<?php
    $pessoa = [
        "nome" => "João",
        "idade" => 30,
        "cidade" => "São Paulo"
    ];

    foreach ($pessoa as $chave => $valor) {
        echo "$chave: $valor <br>";
    }
?>

<!--
Neste exemplo, o laço foreach percorre o array associativo $pessoa, onde a variável $chave recebe a chave de cada elemento (como "nome", "idade", "cidade") e a variável $valor recebe o valor correspondente (como "João", 30, "São Paulo"). O resultado será a exibição das chaves e valores do array associativo.
-->
<?php
  $aluno = ["nome" => "Lucas", "idade" => 16];

  foreach ($aluno as $chave => $valor) {
    echo "$chave: $valor<br>";
  }
?>
<!--
Esse código usa o foreach para percorrer um array associativo chamado $aluno.

$aluno tem duas chaves: "nome" e "idade", com valores "Lucas" e 16.

No foreach ($aluno as $chave => $valor),

$chave recebe o nome da chave atual.
$valor recebe o valor correspondente.

O echo exibe "chave: valor" para cada par do array.

Veja a saída:
nome: Lucas
idade: 16

Em resumo, os laços de repetição são ferramentas essenciais para a programação em PHP, permitindo a execução de blocos de código de forma eficiente e controlada. O while e do...while são úteis para situações onde o número de iterações não é conhecido, enquanto o for é ideal para loops com um número definido de iterações. O foreach é a escolha perfeita para iterar sobre arrays, tornando o código mais limpo e fácil de entender.
-->