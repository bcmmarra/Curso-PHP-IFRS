<!-- 
3.6 Iterando Arrays com foreach
3.6.1 O que é foreach
O laço foreach é uma estrutura de repetição do PHP especialmente projetada para percorrer arrays. Ele permite acessar, um por um, os elementos de um array sem a necessidade de controlar índices manualmente, como ocorre nos laços for ou while.

O foreach é considerado a forma mais simples e legível de iterar sobre arrays em PHP, sendo muito utilizado em aplicações web para exibir listas de itens, processar dados de formulários, entre outras tarefas.

Segundo Welling e Thomson (2017), o foreach reduz erros comuns associados à manipulação de índices e simplifica a leitura do código.



3.6.2 Sintaxe básica
A estrutura do foreach segue o seguinte formato: 
    
foreach ($array as $valor) {
    // bloco de código
}

Onde:

$array é o nome do array que será percorrido.

$valor é uma variável temporária que representa o valor de cada item do array durante a iteração.

Veja abaixo um exemplo:
-->
<?php
$cores = ["azul", "verde", "vermelho"];
foreach ($cores as $cor) { // $cor pode ser qualquer coisa $c, $cl, $batatinha
    echo "Cor: $cor<br>"; // Aqui vai o mesmo nome da variável usada no foreach
}
echo "<br><br>"
?>

<!-- 
Este código PHP cria um array chamado $cores contendo três valores: "azul", "verde" e "vermelho". Em seguida, utiliza o laço foreach para percorrer cada elemento do array. A cada repetição, o valor atual do array é atribuído à variável $cor, e o comando echo exibe esse valor na tela com o texto "Cor: $cor", seguido de uma quebra de linha (<br>). 

3.6.3 Acessando chaves e valores
Também é possível acessar a chave (ou índice) de cada elemento durante a iteração:

Veja abaixo um exemplo:
-->
<?php
$frutas = [
    "a" => "Abacaxi",
    "b" => "Banana",
    "c" => "Caju"
];

foreach ($frutas as $letra => $nome) {
    echo "Letra $letra: $nome<br>";
}
echo "<br><br>"
?>

<!-- 
Este código PHP cria um array associativo chamado $frutas, onde cada fruta está associada a uma letra como chave: "a" corresponde a "Abacaxi", "b" a "Banana", e "c" a "Caju". Em seguida, o laço foreach percorre o array, e a cada repetição atribui a chave à variável $letra e o valor à variável $nome. O comando echo exibe uma linha com a letra e o nome da fruta no formato "Letra a: Abacaxi", seguido por uma quebra de linha (<br>). 

Esse formato é especialmente útil para arrays associativos, nos quais a chave possui significado específico.

3.6.4 Exemplo com array multidimensional
Veja abaixo um exemplo do uso de foreach com um array multidimensional:
-->
<?php
$usuarios = [
    ["nome" => "Alice", "idade" => 25],
    ["nome" => "Bruno", "idade" => 30],
    ["nome" => "Carla", "idade" => 22]
];

foreach ($usuarios as $usuario) {
    echo "Nome: " . $usuario["nome"] . "<br>";
    echo "Idade: " . $usuario["idade"] . " anos<br><br>";
}
?>

<!-- 
Este código PHP define um array multidimensional chamado $usuarios, que contém três arrays associativos, cada um representando um usuário com dois dados: "nome" e "idade". O laço foreach percorre o array principal, e a cada repetição, a variável $usuario recebe um desses arrays internos. Dentro do laço, o comando echo é usado para exibir o nome e a idade de cada pessoa. 

3.6.5 Boas práticas no uso do foreach
Vejamos abaixo algumas boas práticas no uso do foreach:

Use nomes de variáveis descritivos dentro do foreach para facilitar a leitura do código.

Evite modificar o array original durante a iteração, a menos que você compreenda completamente os efeitos disso.

Utilize isset() ao acessar índices em arrays multidimensionais ou incompletos para evitar erros de execução.

Quando o array estiver vazio, o bloco foreach não será executado — essa é uma característica útil para evitar processamento desnecessário.

Exemplo do uso do isset()
-->
<?php
$configuracoes = [
    'usuario' => 'Joao',
    'preferencias' => [
        'notificacoes' => [
            'email' => true,
            // 'sms' não está definido aqui
        ]
    ]
];

// 1. Verificação Simples
if (isset($configuracoes['preferencias']['notificacoes']['email'])) {
    // Este bloco só executa se a chave 'email' existir e não for nula
    // enviarEmail();
}

// 2. Verificação com Múltiplos Índices
// O isset pode checar vários valores de uma vez só; todos precisam ser verdadeiros
if (isset($configuracoes['usuario'], $configuracoes['preferencias'])) {
    echo "Dados do usuário carregados com sucesso.";
}
?>

