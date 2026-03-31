<!-- 
2.6 Laços de Repetição: while, do...while, for, foreach
Essas estruturas são utilizadas em situações como: percorrer listas, realizar cálculos repetitivos, validar dados, entre outras aplicações onde a execução repetitiva e controlada é necessária (ULLMAN, 2018).

2.6.1 Laço while
O laço while avalia uma condição antes de executar o bloco de código. Enquanto a condição for verdadeira, o bloco continuará sendo executado.

Sintaxe:
while (condição) {
    Bloco de código executado repetidamente
}
-->

<?php
  $contador = 1;
  while ($contador <= 5) {
      echo "Valor: $contador <br>";
      $contador++;
  }
?>

<!-- 
Este código PHP usa um laço de repetição while para exibir valores de 1 a 5. A variável $contador começa com o valor 1. A estrutura while funciona assim: enquanto a condição dentro dos parênteses for verdadeira ($contador <= 5), o bloco dentro das chaves será executado. Nesse caso, o programa imprime o texto "Valor: $contador" seguido de uma quebra de linha (<br>), e depois incrementa o valor de $contador com $contador++, ou seja, soma 1 a cada repetição. Quando o valor de $contador chegar a 6, a condição deixa de ser verdadeira e o laço para. O resultado final será a exibição das linhas: 

Valor: 1
Valor: 2
Valor: 3
Valor: 4
Valor: 5

-->

<?php
echo "<br><br>";
?>

<!-- 
2.6.2 Laço do...while
Diferente do while, o laço do...while executa o bloco pelo menos uma vez, pois a condição é avaliada após a execução.

Sintaxe:
do {
    Bloco de código executado pelo menos uma vez
} while (condição);
-->

<?php
  $contador = 6;
  do {
      echo "Valor: $contador <br>";
      $contador++;
  } while ($contador <= 5);
?>

<!-- 
Este código PHP utiliza a estrutura de repetição do...while, que executa o bloco de código pelo menos uma vez, mesmo que a condição seja falsa. A variável $contador começa com o valor 6. O do executa o bloco dentro das chaves, que imprime "Valor: 6" seguido de uma quebra de linha (<br>), e depois incrementa $contador para 7. Em seguida, o while verifica se $contador <= 5, o que é falso. Mesmo assim, como o do executa antes da verificação, a mensagem é exibida uma única vez. Esse exemplo mostra que o do...while garante a execução inicial do bloco, mesmo que a condição não seja satisfeita. 

Valor: 6
-->
<?php
echo "<br><br>";
?>
<!-- 
2.6.3 Laço for

O for é usado quando sabemos exatamente quantas vezes o código deve ser executado. A estrutura é composta por três partes:

Inicialização

Condição de continuidade

Incremento ou decremento

Sintaxe:
for (inicialização; condição; incremento/decremento) {
    Bloco de código executado repetidamente
}
-->

<?php
  for ($i = 0; $i < 3; $i++) {
      echo "Contagem: $i <br>";
  }
?>

<!-- 
Este código PHP usa a estrutura de repetição for, ideal para quando se sabe exatamente quantas vezes algo deve ser repetido. A variável $i começa com o valor 0. A condição $i < 3 é verificada a cada repetição: enquanto for verdadeira, o bloco de código dentro das chaves será executado. A cada vez, o valor de $i é incrementado em 1 com $i++. Dentro do laço, o comando echo exibe "Contagem: $i" seguido de uma quebra de linha (<br>). O laço repete três vezes, com $i valendo 0, depois 1, depois 2. Quando $i se torna 3, a condição se torna falsa e o laço é encerrado. O resultado exibido na tela:  

Contagem: 0
Contagem: 1
Contagem: 2
-->
<?php
echo "<br><br>";
?>
<!-- 
2.6.4 Laço foreach
O laço foreach é uma estrutura de repetição específica para percorrer elementos de arrays. Ao contrário de for e while, que requerem o uso de índices numéricos para acessar os elementos de um array, o foreach facilita esse processo, permitindo iterar diretamente sobre os valores e, opcionalmente, sobre as chaves dos elementos do array.

O foreach é especialmente útil quando:
Não se deseja ou não se conhece previamente o tamanho do array.
Quer-se evitar a manipulação de índices.
Busca-se código mais limpo, legível e direto.

Vejamos a seguir a sintaxe do foreach.

a) Forma 1: Iterando apenas os valores

Sintaxe:
  foreach ($array as $valor) {
      // Bloco de código usando $valor
  }

Nesse formato, o PHP percorre cada elemento do array $array e, a cada iteração, armazena o valor do elemento atual na variável $valor.
-->
<?php
  $cores = ["vermelho", "verde", "azul"];
  foreach ($cores as $cor) {
      echo "Cor: $cor <br>";
  }
?>

<?php
echo "<br><br>";
?>

<!-- 
Este código PHP utiliza o laço foreach, que é ideal para percorrer todos os elementos de um array. A variável $cores é um array que contém três valores: "vermelho", "verde" e "azul". O foreach percorre esse array, e a cada repetição o valor atual é armazenado na variável $cor. Dentro do bloco, o comando echo exibe o texto "Cor: $cor", seguido de uma quebra de linha (<br>). Assim, o código imprime uma linha para cada cor presente no array.  

O resultado será:

Cor: vermelho  
Cor: verde  
Cor: azul  

b) Forma 2: Iterando chaves e valores

Sintaxe:
foreach ($array as $chave => $valor) {
    // Bloco de código usando $chave e $valor
}

Essa forma é usada para obter tanto a chave quanto o valor de cada elemento do array. As chaves podem ser numéricas ou associativas (nomes, rótulos, etc.).
-->
<?php
  $idades = ["João" => 25, "Maria" => 30, "Pedro" => 22];
  foreach ($idades as $nome => $idade) {
      echo "$nome tem $idade anos <br>";
  }
?>

<!-- 
Este código PHP usa um foreach para percorrer um array associativo, onde cada elemento tem uma chave (nome) e um valor (idade). O array $idades contém três pares: "João" => 25, "Maria" => 30 e "Pedro" => 22. O foreach é usado para passar por cada item do array. A cada repetição, a chave (nome da pessoa) é atribuída à variável $nome e o valor (idade) à variável $idade. O comando echo então imprime uma frase com o nome e a idade da pessoa, seguida de uma quebra de linha (<br>). 

O resultado na tela será:
João tem 25 anos
Maria tem 30 anos
Pedro tem 22 anos
-->

<!-- 
Observações importantes:

O laço foreach não modifica o array original.
Ele é a opção mais indicada para arrays associativos, pois facilita o acesso aos pares chave => valor.
O foreach pode ser usado com arrays multidimensionais, exigindo estruturas aninhadas para percorrê-los corretamente.

Boas práticas:
Escolha nomes de variáveis descritivos para os elementos iterados ($cor, $produto, $usuario, etc.).
Use foreach quando não precisar do índice numérico (caso contrário, considere for).
Ao modificar o array dentro do laço, tenha cuidado com efeitos colaterais inesperados.
-->
