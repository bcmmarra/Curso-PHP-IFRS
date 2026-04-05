<!-- 
1.9 Controle de fluxo: if, else, elseif
O controle de fluxo em programação permite tomar decisões com base em condições. Em PHP, usamos as estruturas if, else e elseif para definir caminhos diferentes de execução, de acordo com os valores e resultados de determinadas expressões.

Essa habilidade é fundamental para criar programas inteligentes, dinâmicos e personalizados, que reagem de formas diferentes dependendo dos dados fornecidos pelo usuário ou pelo ambiente.

1.9.1 A estrutura básica if
A estrutura if executa um bloco de código somente quando a condição especificada é verdadeira.

Veja abaixo sua sintaxe: 
if (condição) {
    // código a ser executado se a condição for verdadeira
}
Exemplo prático:
-->
<?php
  $idade = 18;

  if ($idade >= 18) {
    echo "Você é maior de idade.";
  }
?>
<!--
Neste exemplo, verificamos se a variável $idade é maior ou igual a 18. Se a condição for verdadeira, a mensagem "Você é maior de idade." será exibida. Caso contrário, nada acontecerá.

1.9.2 Usando else para lidar com a condição falsa
A estrutura else é usada para definir um bloco de código que será executado quando a condição do if for falsa.

Veja sua sintaxe:

if (condição) {
    // código a ser executado se a condição for verdadeira
} else {
    // código a ser executado se a condição for falsa
}

Exemplo prático:
-->
<?php
  $idade = 16;

  if ($idade >= 18) {
    echo "Você é maior de idade.";
  } else {
    echo "Você é menor de idade.";
  }
?>
<!--
Neste exemplo, se a variável $idade for menor que 18, a mensagem "Você é menor de idade." será exibida, pois a condição do if é falsa e o código dentro do else é executado.

1.9.3 Usando elseif para múltiplas condições
A estrutura elseif é usada para verificar múltiplas condições em sequência. Ela permite definir blocos de código para cada condição, e o código correspondente será executado para a primeira condição verdadeira encontrada.

Veja sua sintaxe:
if (condição1) {
    // código a ser executado se a condição1 for verdadeira
} elseif (condição2) {
    // código a ser executado se a condição2 for verdadeira
} else {
    // código a ser executado se nenhuma das condições anteriores for verdadeira
}

Exemplo prático:
-->
<?php
  $nota = 85;

  if ($nota >= 90) {
    echo "Parabéns! Você tirou uma nota excelente.";
  } elseif ($nota >= 70) {
    echo "Bom trabalho! Você passou.";
  } else {
    echo "Infelizmente, você não passou. Tente novamente.";
  }
?>
<!--
Neste exemplo, a variável $nota é avaliada em três condições: se for maior ou igual a 90, a mensagem de parabéns é exibida; se for maior ou igual a 70, a mensagem de bom trabalho é exibida; caso contrário, a mensagem de não passou é exibida.

De acordo com Lerdorf (2013), o uso adequado de estruturas de controle de fluxo é essencial para criar programas eficientes e fáceis de entender, permitindo que o código seja organizado de maneira lógica e clara. O controle de fluxo é a base para a construção de qualquer aplicação, e o domínio dessas estruturas é fundamental para o sucesso de um desenvolvedor PHP.

1.9.4 Boas práticas no uso de estruturas condicionais
- Sempre use chaves {} para delimitar os blocos de código, mesmo que seja apenas uma linha. Isso melhora a legibilidade e evita erros futuros.
- Mantenha a indentação para tornar o código legível.
- Evite aninhar muitas estruturas if-else, pois isso pode tornar o código difícil de ler e manter. Considere usar switch ou funções para lidar com casos complexos.
- Use comentários para explicar a lógica por trás das condições, especialmente se elas forem complexas ou não forem autoexplicativas.
- Teste todas as condições possíveis para garantir que o código se comporte como esperado em diferentes cenários.
- Mantenha as condições simples e diretas. Se uma condição se tornar muito complexa, considere refatorar o código para torná-lo mais claro e fácil de entender.

De acordo com Holzner (2006), a clareza nas estruturas condicionais é essencial para manter o código legível, especialmente em sistemas com grande volume de decisões lógicas.

1.9.5 Operadores comuns em estruturas condicionais
Nas condições dos blocos if, else e elseif, é comum o uso dos operadores relacionais e lógicos, tais como, como:
==, !=, >, <, >=, <=
&& (e), || (ou), ! (não)

Veja abaixo alguns exemplos com operadores lógicos:
-->

<?php
  $idade = 20;
  $tem_carteira = true;

  if ($idade >= 18 && $tem_carteira) {
    echo "Pode dirigir.";
  } else {
    echo "Não pode dirigir.";
  }
?>

<!--
Neste exemplo, a condição verifica se a pessoa tem 18 anos ou mais e se possui carteira de motorista. A mensagem "Pode dirigir." será exibida somente se ambas as condições forem verdadeiras. Caso contrário, a mensagem "Não pode dirigir." será exibida.
-->

<?php
  $idade = 17;
  $tem_autorizacao = true;


  if ($idade >= 18 || $tem_autorizacao) {
    echo "Entrada liberada.";
  } else {
    echo "Entrada negada.";
  }
?>
<!--
Se a idade for maior ou igual a 18 OU (||) a pessoa tiver autorização, a mensagem "Entrada liberada." será exibida.
Caso contrário, mostrará "Entrada negada.".

No exemplo, mesmo tendo 17 anos, como $tem_autorizacao é true, o resultado será: “Entrada liberada”.

De acordo com POWERS (2017), o uso de operadores lógicos em estruturas condicionais é fundamental para criar scripts mais inteligentes e capazes de reagir a situações complexas, permitindo a construção de sistemas mais robustos e eficientes.
-->

