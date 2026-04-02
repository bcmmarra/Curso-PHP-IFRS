<!-- 
1.4.1 O que é um script PHP?
Um script é um conjunto de instruções escritas em uma linguagem de programação que serão interpretadas por um servidor. No caso do PHP, esse script é executado no lado do servidor e pode gerar páginas HTML personalizadas, processar dados de formulários, manipular arquivos, interagir com bancos de dados, entre outras funções.

Um script PHP deve estar contido em um arquivo com a extensão .php e ser processado por um servidor que tenha o PHP instalado (como Apache ou Nginx).

Segundo Ullman (2018), o PHP "é executado no servidor antes que o conteúdo chegue ao navegador, o que o torna ideal para gerar conteúdo dinâmico".

1.4.2 Início de um script: tags de abertura e fechamento
Todo script PHP deve conter as tags de abertura e fechamento da linguagem:
-->
<?php
  // Código PHP aqui
?>
<!-- As tags de abertura < ?php e fechamento ?> indicam ao servidor onde o código PHP começa e termina. O código dentro dessas tags será interpretado e executado, enquanto o restante do arquivo pode conter HTML, CSS ou JavaScript que será enviado diretamente ao navegador.

Onde:
< ?php → marca o início do código PHP.
?> → indica o fim do código PHP.

A tag de fechamento pode ser omitida em arquivos que contenham apenas PHP. Isso evita erros relacionados a espaços em branco antes ou depois da tag, conforme recomendado pela documentação oficial do PHP (PHP Manual, 2025).

1.4.3 Exemplo básico de script
Observe um exemplo básico de script com PHP:
-->

<?php
  echo "Olá, mundo!";
?>

<!-- 
Neste exemplo simples:
A função echo exibe a frase "Olá, mundo!" no navegador.

O servidor interpreta o código e envia apenas o resultado (HTML) ao navegador.

Como destaca Powers (2017), o PHP é uma linguagem ideal para iniciantes e extremamente poderosa para desenvolvedores profissionais, com suporte para conteúdo dinâmico desde os exemplos mais simples até aplicações robustas.

1.4.4 Inserindo PHP dentro do HTML
É possível combinar PHP com HTML em um mesmo arquivo:
-->

<!DOCTYPE html>
<html>
  <head>
    <title>Exemplo PHP</title>
  </head>
  <body>
    <h1>Bem-vindo!</h1>
    <p>
      Hoje é: <?php echo date("d/m/Y"); ?>
    </p>
  </body>
</html>

<!--
Neste exemplo:

A estrutura da página é HTML.
Dentro da tag <p>, usamos < ?php echo ... ?> para inserir conteúdo gerado dinamicamente (a data atual).

De acordo com Zandstra (2014), essa flexibilidade torna o PHP uma linguagem poderosa e acessível, permitindo a criação de aplicações interativas com pouco código.


1.4.5 Estrutura de um script com lógica
Além de exibir conteúdo, scripts PHP também podem conter estruturas de controle, como condicionais e laços de repetição. Exemplo:
-->

<?php
  $nome = "Ana";

  if ($nome == "Ana") {
    echo "Olá, Ana!";
  } else {
    echo "Bem-vindo, visitante!";
  }

  for ($i = 1; $i <= 3; $i++) {
    echo "<br>Número: $i";
  }
?>
<!--
Esse exemplo mostra:

Uso de variável ($nome);
Condição if/else para decidir o que exibir;
Laço for para repetir uma instrução.

1.4.6 Organização de scripts em projetos
Em projetos maiores, o código é distribuído em arquivos separados, que podem ser reutilizados. Exemplo de organização de diretórios:

meusite/
├── index.php
├── contato.php
├── includes/
│   ├── header.php
│   └── footer.php
├── css/
│   └── estilo.css
└── js/
    └── script.js


Observe nesta estrutura que:

index.php → página principal do site.
includes/ → arquivos reutilizáveis com cabeçalho e rodapé.
css/ e js/ → pastas para arquivos de estilo e scripts.

Holzner (2006) recomenda fortemente esse tipo de estrutura modular para facilitar a manutenção e evitar repetição de código. 
-->