<!-- 
4.4 Coleta e Tratamento de Dados de Formulários com PHP
Após um formulário HTML ser preenchido e enviado, os dados inseridos pelos usuários precisam ser recebidos, armazenados e processados por uma linguagem de programação no lado do servidor. Em aplicações web com PHP, isso é feito por meio das variáveis superglobais $_GET e $_POST, dependendo do método de envio do formulário.

O processo de tratamento inclui etapas como: validação, limpeza, armazenamento e resposta ao usuário. Essas boas práticas evitam falhas, melhoram a segurança e garantem o correto funcionamento da aplicação.

4.4.1 Coletando dados com $_GET e $_POST
No PHP, os dados de formulários HTML são acessados por arrays associativos, chamados superglobais:

> $_GET['nome_do_campo']: usado para capturar dados enviados com o método GET.
> $_POST['nome_do_campo']: usado para capturar dados enviados com o método POST.

Exemplo de formulário HTML:
-->

<form action="processa.php" method="post">
  <label for="nome">Nome:</label>
  <input type="text" name="nome" id="nome"><br><br>

  <label for="email">E-mail:</label>
  <input type="email" name="email" id="email"><br><br>

  <input type="submit" value="Enviar">
</form>

<!-- Exemplo do arquivo processa.php: -->

<?php
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  echo "Nome informado: $nome <br>";
  echo "E-mail informado: $email";
?>

<!--
Neste exemplo, quando o usuário preenche o formulário e clica em "Enviar", os dados são enviados para processa.php usando o método POST. O script PHP então acessa os valores dos campos "nome" e "email" através de $_POST e os exibe na tela.

4.4.2 Verificando se os dados foram enviados
Quando um formulário HTML é submetido, os dados são enviados ao servidor por meio de uma requisição HTTP. No entanto, é fundamental que o script PHP verifique se os campos foram realmente enviados e se estão preenchidos, antes de utilizá-los. Esse procedimento evita erros de execução e permite oferecer uma resposta mais controlada e segura ao usuário.

Essa verificação é especialmente importante em contextos nos quais o formulário pode estar incompleto, ou quando o mesmo script PHP é carregado tanto na abertura da página quanto após o envio do formulário.

Por que verificar os dados?
Sem essa verificação, ao tentar acessar um campo que não foi enviado (por exemplo, ao acessar $_POST['nome'] sem que o campo nome tenha sido preenchido ou enviado), o PHP pode exibir mensagens de aviso como:

Notice: Undefined index: nome

Além disso, o uso direto de variáveis não verificadas pode abrir brechas para ataques de segurança, como injeção de dados maliciosos ou exibição de erros ao usuário final.

Funções úteis: isset() e empty()

A função isset() verifica se a variável foi definida e não é nula. É utilizada para confirmar se o campo realmente foi enviado.
-->

<?php
  if (isset($_POST['nome'])) {
      echo "Campo nome foi enviado.";
  }
?>

<!--
A função empty() verifica se a variável está vazia, ou seja, contém um valor considerado "falso" (como "", 0, null, false, etc.). -->

<?php
  if (!empty($_POST['nome'])) {
      echo "Campo nome foi preenchido.";
  }
?>

<!-- 
Exemplo prático completo
É comum o uso das duas funções em conjunto para garantir que o dado exista e tenha valor. Suponha um formulário com os campos "nome" e "email":
-->

<form method="post">
  <label for="nome">Nome:</label>
  <input type="text" name="nome" id="nome"><br>

  <label for="email">Email:</label>
  <input type="email" name="email" id="email"><br>

  <input type="submit" value="Enviar">
</form>

<!--
No PHP, você pode validar assim:
-->

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['nome']) && !empty($_POST['nome'])) {
        $nome = trim($_POST['nome']);
    } else {
        $nome = "Nome não informado.";
    }

    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = trim($_POST['email']);
    } else {
        $email = "Email não informado.";
    }

    echo "Nome: $nome <br>";
    echo "Email: $email";
}
?>

<!--
Veja a explicação deste código:

$_SERVER['REQUEST_METHOD'] === 'POST': garante que o script só execute o processamento quando o formulário for enviado.
isset(): verifica se o campo existe no array $_POST.
!empty(): confirma que o campo não está vazio.
trim(): remove espaços em branco antes e depois da string.

Sugestão:
Se você quiser verificar todos os dados enviados, pode usar o print_r() para inspecionar o conteúdo de $_POST:
-->

<?php
  echo "<pre>";
  print_r($_POST);
  echo "</pre>";
?>
