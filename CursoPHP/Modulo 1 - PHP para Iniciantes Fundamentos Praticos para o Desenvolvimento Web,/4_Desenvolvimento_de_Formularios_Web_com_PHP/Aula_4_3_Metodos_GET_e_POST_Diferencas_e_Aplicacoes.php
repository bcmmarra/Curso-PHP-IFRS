<!-- 
4.3 Métodos GET e POST: Diferenças e Aplicações
Quando um formulário HTML é enviado, os dados inseridos pelos usuários precisam ser transmitidos do cliente (navegador) para o servidor web, onde podem ser processados por linguagens como PHP. Essa transmissão ocorre por meio de métodos HTTP, sendo os mais utilizados em formulários o GET e o POST. Ambos fazem parte do protocolo HTTP, mas apresentam comportamentos distintos e são utilizados conforme o tipo e a sensibilidade dos dados que serão enviados.

4.3.1 O que é o método GET
O método GET envia os dados do formulário pela URL. Isso significa que os pares de nome e valor dos campos são anexados à URL da página de destino, tornando as informações visíveis na barra de endereços do navegador.

Características do método GET:
Os dados aparecem na URL como uma query string, após o símbolo ?.

> É ideal para pesquisas, filtros e dados não sensíveis, pois é possível compartilhar o link com os dados incluídos.
> Tem limite de tamanho para os dados enviados (geralmente entre 2000 e 8000 caracteres, dependendo do navegador e servidor).
> Não deve ser usado para enviar senhas, dados bancários ou informações pessoais.

Vejamos um exemplo de formulário com método GET:
-->

<form action="processar.php" method="get">
    <label for="busca">Pesquisar:</label>
    <input type="text" id="busca" name="busca">
    <input type="submit" value="Pesquisar">
</form>

<!--
Ao enviar o formulário com o termo “livros”, a URL gerada seria:
        
processar.php?busca=livros

No PHP, pode-se capturar o valor em processa.php com o código:
-->

<?php
$pesquisa = $_GET['busca'];
?>

<!--
4.3.2 O que é o método POST
O método POST envia os dados do formulário no corpo da requisição HTTP, sem que eles apareçam na URL. Por esse motivo, é o método mais indicado para envio de informações sensíveis ou grandes volumes de dados.

Características do método POST:

> Os dados não ficam visíveis na URL.
> Permite o envio de dados em maior quantidade.
> É ideal para cadastros, logins, envios de arquivos e formulários com múltiplas informações.
> Mais seguro do que GET (embora não criptografe os dados por padrão – para isso, é necessário usar HTTPS).

Vejamos um exemplo de formulário com método POST:
-->

<form action="processar.php" method="post">
  <label for="usuario">Usuário:</label>
  <input type="text" id="usuario" name="usuario"><br>

  <label for="senha">Senha:</label>
  <input type="password" id="senha" name="senha"><br>

  <input type="submit" value="Entrar">
</form>

<!-- No PHP, os dados são acessados com: -->

<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
?>

<!-- 
Comparação Visual: Query String vs. Request Body
GET: http://exemplo.com/processar.php?usuario=joao&senha=12345
POST: http://exemplo.com/processar.php (dados enviados no corpo da requisição)

4.3.3 Idempotência e Efeitos Colaterais
O método GET é idempotente, o que significa que múltiplas requisições com os mesmos parâmetros devem produzir o mesmo resultado sem causar efeitos colaterais. Por exemplo, uma busca por “livros” sempre retornará os mesmos resultados (a menos que o conteúdo do site mude).

Já o método POST não é idempotente, pois cada requisição pode resultar em uma ação diferente, como a criação de um novo usuário ou a realização de uma compra. Por isso, é importante usar POST para operações que alteram o estado do servidor.
É por isso que, ao dar F5 em uma página após enviar um formulário POST, o navegador exibe o alerta: "Deseja reenviar os dados do formulário?".

Limitações de Cache e Histórico
Este é um argumento prático muito forte para escolher entre um e outro.

Tabela comparativa de comportamento:

Característica          Método GET                                      Método POST
Histórico do Navegador  Os parâmetros ficam salvos no histórico.        Os dados não ficam no histórico.
Favoritos (Bookmarks)   Pode ser salvo nos favoritos com os dados.      Não pode ser salvo com os dados.
Cache                   As respostas podem ser armazenadas em cache.    As respostas nunca são armazenadas em cache.
Tipos de Dados          Apenas caracteres ASCII (texto).                Sem restrições (permite binários/arquivos).

Segurança: O mito do "POST é seguro"
Muitos acreditam que o POST é seguro porque "esconde" os dados da URL. Na verdade, sem o protocolo HTTPS, qualquer pessoa na mesma rede Wi-Fi pode interceptar o corpo da requisição e ler a senha em texto puro. O POST evita a exposição acidental (olhando por cima do ombro ou no histórico), mas apenas o HTTPS garante a segurança real através da criptografia.



Boas práticas

Use GET apenas quando os dados enviados não forem confidenciais e for desejável que o resultado possa ser compartilhado ou salvo (por exemplo, filtros de busca).

Use POST quando estiver lidando com informações pessoais, senhas ou formulários com muitos dados.

Sempre utilize HTTPS em conjunto com o método POST para garantir que os dados sejam criptografados durante a transmissão. 
-->


