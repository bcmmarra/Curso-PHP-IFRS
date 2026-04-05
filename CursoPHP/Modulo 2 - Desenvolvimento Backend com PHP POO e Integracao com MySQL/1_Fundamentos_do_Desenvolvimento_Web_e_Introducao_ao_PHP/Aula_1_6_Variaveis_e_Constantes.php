<!-- 
1.6 Variáveis e Constantes
No PHP, assim como em outras linguagens de programação, variáveis e constantes são recursos fundamentais para armazenar e manipular dados durante a execução de scripts. Compreender seu funcionamento é essencial para escrever códigos organizados, legíveis e funcionais.

1.6.1 O que são variáveis?
Variáveis são espaços na memória do servidor onde podemos armazenar diferentes tipos de informações (como textos, números ou listas). No PHP, todas as variáveis começam com o símbolo $, seguido por um nome que identifica essa variável.

Veja abaixo um exemplo básico de uso de variáveis: 
-->
<?php
    $nome = "Bruno";
    $idade = 35;
    $sexo = "Masculino";

    echo "Nome do usuário: $nome, o usuário tem $idade anos e é do sexo $sexo. <br><br>"; // Exemplo usando concatenação
    echo 'Nome do usuário: ' . $nome . ', o usuário tem ' . $idade . ' anos e é do sexo ' . $sexo . '.'; // Exemplo usando aspas simples e concatenação.
?>
<!--
Neste exemplo:
> $nome armazena uma string (texto).
> $idade armazena um número inteiro.
> $sexo armazena outra string.

Segundo Ullman (2018), variáveis em PHP são tipadas dinamicamente, ou seja, o tipo do dado é determinado automaticamente com base no valor atribuído, sem necessidade de declaração explícita do tipo.

Na impressão, utilizamos tanto aspas duplas quanto simples para demonstrar diferentes formas de concatenar e exibir as variáveis. As aspas duplas permitem a interpolação direta das variáveis, enquanto as aspas simples exigem o uso do operador de concatenação (.) para combinar texto e variáveis.

1.6.2 Regras de nomenclatura de variáveis
Ao criar variáveis em PHP, é importante seguir algumas regras de nomenclatura para garantir que o código seja válido e fácil de entender. As principais regras são:
- Devem começar com o símbolo $.
- O nome da variável deve começar com uma letra ou um sublinhado (_), nunca com um número.
- O nome da variável pode conter letras, números e sublinhados, mas não pode conter espaços ou caracteres especiais.
- O nome da variável é case-sensitive, ou seja, $nome e $Nome são consideradas variáveis diferentes.
- Evite usar palavras reservadas do PHP como nomes de variáveis, pois isso pode causar erros no código.
- Use nomes de variáveis descritivos para facilitar a compreensão do código, como $nomeUsuario em vez de $n.
Seguindo essas regras, podemos criar variáveis de forma eficiente e evitar problemas de sintaxe ou confusão ao ler o código.
Veja abaixo alguns exemplos válidos:
$valorTotal;
$_usuario;
$quantidade_produtos;

Agora, veja alguns exemplos inválidos:
$1numero;      // Começa com número
$meu-nome;     // Contém hífen

1.6.3 O que são constantes?
Constantes são semelhantes às variáveis, mas, como o nome sugere, seu valor não pode ser alterado após ser definido. Elas são usadas para armazenar valores que devem permanecer constantes durante a execução do script, como configurações ou valores fixos.
Para definir uma constante em PHP, utilizamos a função define(), que recebe dois parâmetros: o nome da constante (em maiúsculas por convenção) e o valor que ela deve armazenar.
Veja um exemplo de definição e uso de constantes:
-->

<?php
    define("PI", 3.14159);
    define("NOME_SITE", "Meu Site");

    echo "O valor de PI é: " . PI . "<br>";
    echo "Bem-vindo ao " . NOME_SITE . "!";
?>
<!--
Neste exemplo, definimos a constante PI com o valor de 3.14159 e a constante NOME_SITE com o valor "Meu Site". Depois, utilizamos essas constantes para exibir seus valores.
Constantes são úteis para armazenar valores que não devem ser modificados, como configurações de banco de dados, chaves de API ou mensagens fixas. Elas ajudam a tornar o código mais organizado e fácil de manter, evitando a necessidade de alterar valores em vários lugares do código caso seja necessário fazer uma atualização.

Conforme Holzner (2006), o uso de constantes torna o código mais seguro e organizado, já que evita alterações acidentais de valores críticos.

A partir do PHP 7, também é possível usar a palavra-chave const para definir constantes, desde que fora de funções e sem valores calculados dinamicamente:
-->

<?php
    const URL_BASE = "https://www.meusite.com";
    const MAX_USUARIOS = 1000;

    echo "A URL base do site é: " . URL_BASE . "<br>";
    echo "O número máximo de usuários é: " . MAX_USUARIOS;
?>
<!--
Neste exemplo, definimos as constantes URL_BASE e MAX_USUARIOS usando a palavra-chave const. Ambas as formas (define() e const) são válidas para criar constantes em PHP, e a escolha entre elas pode depender do contexto e da preferência do desenvolvedor. Em geral, define() é mais flexível e pode ser usada em qualquer lugar do código, enquanto const é mais restrita e deve ser usada para definir constantes em um escopo global ou dentro de classes.

O que é escopo global?
O escopo global refere-se à área do código onde as variáveis e constantes estão acessíveis em todo o script. Variáveis e constantes definidas no escopo global podem ser acessadas de qualquer parte do código, incluindo dentro de funções, desde que sejam referenciadas corretamente. No entanto, para acessar variáveis globais dentro de funções, é necessário usar a palavra-chave global ou a superglobal $GLOBALS.

O que significa dentro de classes?
Dentro de classes, o escopo se torna mais restrito. Variáveis e constantes definidas dentro de uma classe são chamadas de propriedades (variáveis) e constantes de classe (constantes). Elas só podem ser acessadas através de instâncias da classe ou usando a sintaxe de acesso estático, dependendo de como foram definidas. O uso de propriedades e constantes dentro de classes é fundamental para a programação orientada a objetos, permitindo encapsular dados e comportamentos relacionados em um único local.

1.6.4 Diferenças entre variáveis e constantes
As principais diferenças entre variáveis e constantes em PHP são:
- Mutabilidade: Variáveis podem ter seus valores alterados durante a execução do script, enquanto constantes não podem ser modificadas após serem definidas.
- Definição: Variáveis são definidas usando o símbolo $ seguido por um nome, enquanto constantes são definidas usando a função define() ou a palavra-chave const.
- Acesso: Variáveis podem ser acessadas e modificadas em qualquer parte do código, enquanto constantes são acessadas apenas pelo nome da constante, sem o símbolo $.
- Convenção de nomenclatura: Por convenção, os nomes de constantes são escritos em letras maiúsculas para diferenciá-las das variáveis, que geralmente são escritas em letras minúsculas ou camelCase.
- Uso: Variáveis são usadas para armazenar dados que podem mudar durante a execução do programa
, enquanto constantes são usadas para armazenar valores fixos que não devem ser alterados, como configurações ou valores de referência.
Entender essas diferenças é crucial para escolher a estrutura de dados correta ao desenvolver aplicações em PHP, garantindo que o código seja eficiente, seguro e fácil de manter.

Característica              | Variável                          | Constante
----------------------------|-----------------------------------|----------
Mutabilidade                | Sim                               | Não
Definição                   | $nome                             | define("NOME", "Valor") ou const NOME = "Valor"
Prefixo                     | $                                 | Nenhum
Acesso                      | $nome                             | NOME
Convenção de nomenclatura   | letras minúsculas ou camelCase    | letras maiúsculas
Visibilidade global         | Depende do escopo                 | Sempre global
Uso                         | Armazenar dados mutáveis          | Armazenar valores fixos

1.6.5 Boas práticas no uso de variáveis e constantes
Segue abaixo uma listagem com boas práticas no uso de variáveis e constantes:

> Nomes claros e significativos: use nomes que indiquem o propósito da informação ($totalCompra, TAXA_CAMBIO).
> Evite abreviações sem contexto: nomes como $t ou $x dificultam a leitura.
> Use constantes para valores fixos: como URLs base de uma API, ou caminhos de diretórios.
> Padronize a escrita: por convenção, nomes de constantes são escritos em letras maiúsculas, separados por underline.

1.6.6 Exemplo prático
Vamos criar um exemplo prático que utiliza variáveis e constantes para calcular o valor total de uma compra, incluindo um imposto fixo.
-->
<?php
$nome = "Bruno";
$idade = 35;
const CIDADE_NASCIMENTO = "Sete Quedas";

echo "Olá meu nome é $nome, tenho $idade anos, e nasci no municipio de " . CIDADE_NASCIMENTO . ".";
?>
<!--
Neste exemplo, definimos as variáveis $nome e $idade para armazenar informações pessoais, e a constante CIDADE_NASCIMENTO para armazenar o nome da cidade de nascimento. Em seguida, usamos essas variáveis e constantes para exibir uma mensagem personalizada.
O uso das variáveis podem ser interpoladas diretamente dentro de strings usando aspas duplas, enquanto a constante é concatenada usando o operador de concatenação (.) para garantir que seu valor seja corretamente exibido na mensagem.
-->