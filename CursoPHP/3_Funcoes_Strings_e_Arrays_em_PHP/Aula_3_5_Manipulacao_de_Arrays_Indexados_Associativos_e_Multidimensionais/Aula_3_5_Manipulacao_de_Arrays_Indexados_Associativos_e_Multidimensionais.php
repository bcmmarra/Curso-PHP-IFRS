<!-- 
3.5 Manipulação de Arrays: Indexados, Associativos e Multidimensionais
3.5.1 O que é um array?
No PHP, um array é uma estrutura de dados que permite armazenar múltiplos valores em uma única variável. Cada valor dentro de um array é associado a uma chave (ou índice), que pode ser numérica ou textual. Arrays são especialmente úteis quando se deseja trabalhar com coleções de dados, como listas de nomes, produtos, resultados de formulários, entre outros.

Segundo Welling e Thomson (2017), arrays são a espinha dorsal da organização de dados em PHP, oferecendo flexibilidade para modelar estruturas simples ou complexas.

3.5.2 Arrays indexados
Um array indexado no PHP é uma estrutura de dados em que cada valor armazenado está associado a uma chave numérica inteira, chamada de índice. Essa chave é atribuída automaticamente pelo PHP, começando do número 0, a menos que o programador defina outra.

Esse tipo de array é útil quando precisamos guardar listas ordenadas de valores — por exemplo, uma lista de nomes, cidades, números ou produtos.

a) Criação de Arrays Indexados
Existem duas formas comuns de criar arrays indexados em PHP:

1) Usando a função array(): 
-->
<?php
$frutas = array("Maçã", "Banana", "Laranja");
print_r($frutas);
echo "<br> <br> ";
?>

<?php
$nomes = array("Ana", "Bruno", "Carlos", "Diana");
print_r($nomes);
echo "<br> <br> ";

?>
<!--
Neste exemplo, criamos um array indexado chamado $frutas usando a função array(), onde cada elemento é uma string representando o nome de uma fruta. O índice de cada elemento é atribuído automaticamente, começando do 0. Assim, "Maçã" tem índice 0, "Banana" tem índice 1 e "Laranja" tem índice 2. O mesmo processo é aplicado para o array $nomes, onde "Ana" tem índice 0, "Bruno" tem índice 1, "Carlos" tem índice 2 e "Diana" tem índice 3. A função print_r() é usada para exibir a estrutura do array de forma legível. A saída mostrará os elementos do array junto com seus índices, confirmando que se trata de um array indexado.

2) Usando colchetes []:
-->
<?php
$cidades = ["São Paulo", "Rio de Janeiro", "Belo Horizonte"];
print_r($cidades);
echo "<br> <br> ";
?>

<?php
$nomes = ["Ana", "Bruno", "Carlos", "Diana"];
print_r($nomes);
echo "<br> <br> ";

?>

<!--
Neste exemplo, criamos um array indexado chamado $cidades usando a sintaxe de colchetes []. Cada elemento é uma string representando o nome de uma cidade. A função print_r() é usada para exibir a estrutura do array de forma legível. A saída mostrará os elementos do array junto com seus índices, confirmando que se trata de um array indexado.

b) Acessando elementos de um array indexado
Para acessar os elementos de um array indexado, utilizamos a sintaxe de colchetes, especificando o índice do elemento que desejamos acessar. O índice é um número inteiro que começa em 0 para o primeiro elemento, 1 para o segundo, e assim por diante. Por exemplo:
-->

<?php
$frutas = ["Maçã", "Banana", "Laranja"];
echo "Primeira fruta: " . $frutas[0] . "<br>";
echo "Segunda fruta: " . $frutas[1] . "<br>";
echo "Terceira fruta: " . $frutas[2];
echo "<br> <br> ";
?>

<?php
$nomes = ["Ana", "Bruno", "Carlos", "Diana"];
echo $nomes[0]; // Saída: Ana
echo $nomes[2]; // Saída: Carlos
echo "<br> <br> ";
?>

<!--
Neste exemplo, temos um array indexado chamado $frutas, onde "Maçã" está no índice 0, "Banana" no índice 1 e "Laranja" no índice 2. Para acessar cada fruta, usamos a sintaxe de colchetes com o índice correspondente. Assim, $frutas[0] retorna "Maçã", $frutas[1] retorna "Banana" e $frutas[2] retorna "Laranja". O mesmo processo é aplicado para o array $nomes, onde $nomes[0] retorna "Ana" e $nomes[2] retorna "Carlos". A saída do código exibirá as frutas e os nomes correspondentes aos índices especificados.

Importante: Como os índices começam em zero, $nomes[0] acessa o primeiro valor do array, $nomes[1] o segundo, e assim por diante.

c) Adicionando Novos Elementos
Para adicionar novos elementos a um array indexado, podemos simplesmente atribuir um valor a um índice específico ou usar a sintaxe de colchetes sem especificar um índice, permitindo que o PHP atribua o próximo índice disponível automaticamente. Por exemplo:
-->
<?php
$frutas = ["Maçã", "Banana", "Laranja"];
$frutas[] = "Uva"; // Adiciona "Uva" ao final do array
print_r($frutas);
echo "<br> <br> ";
?>
<?php
$nomes = ["Ana", "Bruno", "Carlos", "Diana"];
$nomes[] = "Eduardo"; // Adiciona "Eduardo" ao final do array
print_r($nomes);
echo "<br> <br> ";
?>

<!--
Neste exemplo, temos um array indexado chamado $frutas com os elementos "Maçã", "Banana" e "Laranja". Para adicionar um novo elemento, "Uva", usamos a sintaxe de colchetes sem especificar um índice, o que faz com que o PHP atribua automaticamente o próximo índice disponível (neste caso, 3). O resultado é um array atualizado que inclui "Uva" como o quarto elemento. O mesmo processo é aplicado para o array $nomes, onde "Eduardo" é adicionado como o quinto elemento. A função print_r() é usada para exibir a estrutura do array atualizado, confirmando que os novos elementos foram adicionados corretamente.

No exemplo acima, o PHP atribui automaticamente o próximo índice disponível. Mas, também é possível definir manualmente o índice:
-->

<?php
$frutas = ["Maçã", "Banana", "Laranja"];
$frutas[5] = "Uva"; // Adiciona "Uva" no índice 5
print_r($frutas);
echo "<br> <br> ";
?>

<?php
$nomes = ["Ana", "Bruno", "Carlos", "Diana"];
$nomes[10] = "Eduardo"; // Adiciona "Eduardo" no índice 10
print_r($nomes);
echo "<br> <br> ";
?>

<!--
Neste exemplo, temos um array indexado chamado $frutas com os elementos "Maçã", "Banana" e "Laranja". Para adicionar um novo elemento, "Uva", no índice 5, usamos a sintaxe de colchetes especificando o índice desejado. O resultado é um array atualizado que inclui "Uva" no índice 5, enquanto os índices 3 e 4 permanecem vazios. O mesmo processo é aplicado para o array $nomes, onde "Eduardo" é adicionado no índice 10, deixando os índices 4 a 9 vazios. A função print_r() é usada para exibir a estrutura do array atualizado, confirmando que os novos elementos foram adicionados nos índices especificados. É importante notar que, ao definir manualmente índices, o PHP não preenche automaticamente os índices intermediários, resultando em um array com "buracos" nos índices. Isso pode afetar a forma como o array é percorrido ou manipulado posteriormente, especialmente se for necessário iterar sobre os elementos do array usando loops.

d) Reatribuindo Valores

Para reatribuir um valor a um elemento específico de um array indexado, basta usar a sintaxe de colchetes com o índice do elemento que deseja modificar e atribuir um novo valor a ele. Por exemplo:
-->
<?php
$frutas = ["Maçã", "Banana", "Laranja"];
$frutas[1] = "Abacaxi"; // Reatribui o valor no índice 1
print_r($frutas);
echo "<br> <br> ";
?>

<?php
$nomes = ["Ana", "Bruno", "Carlos", "Diana"];
$nomes[2] = "Carla"; // Reatribui o valor no índice 2
print_r($nomes);
echo "<br> <br> ";
?>

<!--
Neste exemplo, temos um array indexado chamado $frutas com os elementos "Maçã", "Banana" e "Laranja". Para reatribuir o valor no índice 1, usamos a sintaxe de colchetes especificando o índice desejado e atribuímos o novo valor "Abacaxi". O resultado é um array atualizado onde "Banana" foi substituída por "Abacaxi". O mesmo processo é aplicado para o array $nomes, onde "Carlos" é substituído por "Carla" no índice 2. A função print_r() é usada para exibir a estrutura do array atualizado, confirmando que os valores foram reatribuídos corretamente. Reatribuir valores em um array indexado é uma operação comum quando se deseja atualizar ou corrigir informações armazenadas em um array, permitindo que os dados sejam mantidos atualizados e relevantes ao longo do tempo.
-->

<!-- 
3.5.3 Arrays associativos
Um array associativo no PHP é uma estrutura de dados em que cada valor armazenado está associado a uma chave textual, em vez de um índice numérico. Essas chaves são definidas pelo programador e podem ser usadas para acessar os valores de forma mais intuitiva, especialmente quando os dados representam informações com rótulos específicos, como nomes, idades, endereços, etc.
-->
<?php
$pessoa = [
    "nome" => "João",
    "idade" => 30,
    "cidade" => "São Paulo"
];
print_r($pessoa);
echo "<br> <br> ";
?>
<!--
Neste exemplo, criamos um array associativo chamado $pessoa, onde cada elemento é composto por uma chave textual (como "nome", "idade" e "cidade") associada a um valor correspondente ("João", 30 e "São Paulo"). A função print_r() é usada para exibir a estrutura do array de forma legível, mostrando as chaves e seus respectivos valores. A saída confirmará que se trata de um array associativo, onde os dados são organizados de maneira mais descritiva, facilitando o acesso e a compreensão das informações armazenadas.
Para acessar os valores de um array associativo, utilizamos a sintaxe de colchetes, especificando a chave do elemento que desejamos acessar. Por exemplo:
-->
<?php
$pessoa = [
    "nome" => "João",
    "idade" => 30,
    "cidade" => "São Paulo"
];
echo "Nome: " . $pessoa["nome"] . "<br>";
echo "Idade: " . $pessoa["idade"] . "<br>";
echo "Cidade: " . $pessoa["cidade"];
echo "<br> <br> ";
?>
<!--
Neste exemplo, temos um array associativo chamado $pessoa, onde "nome" é a chave associada ao valor "João", "idade" é a chave associada ao valor 30, e "cidade" é a chave associada ao valor "São Paulo". Para acessar cada valor, usamos a sintaxe de colchetes com a chave correspondente. Assim, $pessoa["nome"] retorna "João", $pessoa["idade"] retorna 30 e $pessoa["cidade"] retorna "São Paulo". A saída do código exibirá as informações da pessoa de forma clara e organizada, confirmando que se trata de um array associativo onde os dados são acessados por meio de chaves descritivas.
-->

<?php
$usuario = [
    "nome" => "João",
    "email" => "joao@email.com",
    "idade" => 30
];
print_r($usuario);
echo "<br> <br> ";
?>

<!--
Este código PHP define um array associativo chamado $usuario, que armazena dados organizados em pares de chave e valor. Nesse caso, as chaves são "nome", "email" e "idade", com os respectivos valores "João", "joao@email.com" e 30. Para acessar um valor específico, basta usar o nome da chave entre colchetes. O comando echo $usuario["email"]; exibe o valor associado à chave "email", que é "joao@email.com". 

A função print_r($usuario); é utilizada para exibir a estrutura do array de forma legível, mostrando todas as chaves e seus valores correspondentes. A saída do código confirmará que se trata de um array associativo, onde os dados são organizados de maneira descritiva, facilitando o acesso e a compreensão das informações armazenadas.

3.5.4 Arrays multidimensionais
Um array multidimensional no PHP é um array que contém outros arrays como seus elementos. Isso permite criar estruturas de dados mais complexas, como tabelas, listas de usuários, produtos, etc. Arrays multidimensionais podem ser indexados, associativos ou uma combinação de ambos. Por exemplo, um array multidimensional que representa uma lista de usuários pode ser estruturado da seguinte forma:
-->
<?php
$produtos = [
    ["nome" => "Caneta", "preco" => 2.50],
    ["nome" => "Lápis", "preco" => 1.00],
    ["nome" => "Borracha", "preco" => 0.75]
];

echo $produtos[0]["nome"]; // Saída: Caneta
echo $produtos[1]["preco"]; // Saída: 1.00
echo "<br> <br> ";
?>

<!--
Neste exemplo, temos um array multidimensional chamado $produtos, onde cada elemento é um array associativo representando um produto com suas propriedades "nome" e "preco". Para acessar os valores, usamos a sintaxe de colchetes para primeiro acessar o índice do produto desejado e, em seguida, a chave do valor que queremos obter. Assim, $produtos[0]["nome"] retorna "Caneta", e $produtos[1]["preco"] retorna 1.00. A saída do código exibirá as informações dos produtos de forma clara e organizada, confirmando que se trata de um array multidimensional onde os dados são estruturados em múltiplos níveis de arrays. Arrays multidimensionais são extremamente úteis para representar dados complexos e hierárquicos, permitindo que os desenvolvedores organizem e acessem informações de maneira eficiente e intuitiva.

Também é possível usar índices numéricos em várias dimensões:
-->
<?php
$matriz = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

echo $matriz[0][1]; // Saída: 2
echo $matriz[2][0]; // Saída: 7
echo "<br> <br> "; ?>
<!--
Neste exemplo, temos um array multidimensional chamado $matriz, que é uma matriz 3x3 composta por arrays indexados. Cada elemento da matriz é um array que contém três números inteiros. Para acessar os valores, usamos a sintaxe de colchetes para primeiro acessar o índice da linha e, em seguida, o índice da coluna. Assim, $matriz[0][1] retorna 2, que é o elemento na primeira linha e segunda coluna, e $matriz[2][0] retorna 7, que é o elemento na terceira linha e primeira coluna. A saída do código exibirá os valores específicos da matriz de forma clara, confirmando que se trata de um array multidimensional onde os dados são organizados em múltiplos níveis de arrays indexados. Arrays multidimensionais são essenciais para representar estruturas de dados complexas, como tabelas ou matrizes matemáticas, permitindo que os desenvolvedores manipulem e acessem informações de maneira eficiente e estruturada.

3.5.5 Boas práticas na manipulação de arrays
Vejamos abaixo algumas boas práticas na manipulação de arrays:

Use nomes significativos para as chaves em arrays associativos.
Verifique a existência de uma chave com isset() antes de acessá-la.
Utilize var_dump() ou print_r() para inspecionar arrays durante o desenvolvimento. Ex: var_dump($meuArray);
Para grandes volumes de dados, considere estruturas especializadas, como objetos ou coleções.
Documente a estrutura esperada de arrays multidimensionais, para facilitar a manutenção.
-->