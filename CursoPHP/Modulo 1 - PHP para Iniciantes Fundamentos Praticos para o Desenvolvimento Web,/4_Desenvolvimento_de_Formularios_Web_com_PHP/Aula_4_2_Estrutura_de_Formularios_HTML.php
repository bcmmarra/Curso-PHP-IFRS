<!-- 
4.2 Estrutura de Formulários HTML
Os formulários HTML são essenciais no desenvolvimento web interativo, pois permitem a entrada de dados pelos usuários. Esses dados são enviados ao servidor — geralmente por meio de PHP — para serem processados, armazenados ou utilizados em diversas operações (MDN Web Docs, 2025).

Neste tópico, vamos conhecer os principais elementos estruturais de um formulário HTML.

4.2.1 Elemento <form>
A tag <form> é a contêiner que envolve todos os campos do formulário (ULLMAN, 2025). Nela são definidos:

O destino dos dados (via atributo action), ou seja, o arquivo que receberá as informações (geralmente um .php).
O método de envio (GET ou POST), que define como os dados serão transmitidos ao servidor.

Veja abaixo um exemplo de formulário HTML: 

<form action="processar.php" method="POST">
    // Campos do formulário vão aqui
</form>

No exemplo acima:

action="processar.php": ao clicar em "Enviar", os dados serão enviados para esse arquivo.
method="POST": os dados serão enviados de forma segura no corpo da requisição HTTP.

4.2.2 Elemento <input>
O <input> é o elemento de entrada mais versátil do HTML. Pode ser configurado para aceitar diversos tipos de dados com o atributo type.

Tipos comuns:

> text: entrada de texto comum
> password: texto oculto (senha)
> email: validação de e-mail
> number: somente números
> submit: botão de envio
> radio: Seleção única entre opções
> checkbox: Múltiplas escolhas possíveis

Veja abaixo um exemplo:
-->

<form action="processar.php" method="post">
  <!-- Campo de texto -->
  <label for="nome">Nome:</label>
  <input type="text" name="nome" id="nome"><br><br>

  <!-- Campo de email -->
  <label for="email">E-mail:</label>
  <input type="email" name="email" id="email"><br><br>

  <!-- Campo de senha -->
  <label for="senha">Senha:</label>
  <input type="password" name="senha" id="senha"><br><br>

  <!-- Campo de número -->
  <label for="idade">Idade:</label>
  <input type="number" name="idade" id="idade"><br><br>

  <!-- Botões de opção (radio) -->
  <p>Gênero:</p>
  <input type="radio" name="genero" id="masculino" value="masculino">
  <label for="masculino">Masculino</label>
  <input type="radio" name="genero" id="feminino" value="feminino">
  <label for="feminino">Feminino</label>
  <input type="radio" name="genero" id="outro" value="outro">
  <label for="outro">Outro</label><br><br>

  <!-- Caixas de seleção (checkbox) -->
  <p>Interesses:</p>
  <input type="checkbox" name="interesses[]" id="html" value="HTML">
  <label for="html">HTML</label>
  <input type="checkbox" name="interesses[]" id="css" value="CSS">
  <label for="css">CSS</label>
  <input type="checkbox" name="interesses[]" id="php" value="PHP">
  <label for="php">PHP</label><br><br>

  <!-- Botão de envio -->
  <input type="submit" value="Enviar">
</form>

<!-- 
Este código HTML cria um formulário completo que envia os dados preenchidos para o arquivo processar.php usando o método POST, que é mais seguro para o envio de informações. Ele contém diversos tipos de campos: um campo de texto para o nome, um campo de e-mail que valida se o conteúdo parece um endereço de e-mail, um campo de senha que oculta os caracteres digitados, e um campo numérico para a idade. Em seguida, o formulário apresenta botões de opção (radio) para o usuário selecionar seu gênero — masculino, feminino ou outro — permitindo que apenas uma opção seja escolhida. Logo após, há caixas de seleção (checkbox) para o usuário marcar múltiplos interesses (HTML, CSS e PHP); como os nomes estão com colchetes (interesses[]), os dados serão enviados em formato de lista para o servidor. Por fim, o formulário termina com um botão de envio (submit) que envia todos os dados preenchidos ao script PHP indicado.

4.2.3 Elemento <label>
A tag <label> melhora a acessibilidade e a experiência do usuário ao informar claramente o que cada campo representa.

Veja abaixo um exemplo com label:
-->
<form action="cadastrar.php" method="post">
    <label for="email">E-mail:</label>
    <input type="email" name="email" id="email">
    <input type="submit" value="Cadastrar">
</form>

<!--
Este código HTML define um formulário simples que envia o dado digitado para um arquivo chamado cadastrar.php, usando o método POST, que é mais seguro para envio de informações. O formulário contém um rótulo (<label>) associado a um campo de e-mail, graças ao atributo for="email" no <label> e id="email" no <input>, o que melhora a acessibilidade e a usabilidade. O campo de entrada é do tipo email, o que significa que o navegador pode verificar se o valor digitado parece um endereço de e-mail válido antes de permitir o envio. Por fim, há um botão de envio (<input type="submit">) com o texto "Cadastrar", que envia o conteúdo digitado para o arquivo cadastrar.php, onde poderá ser tratado por um script em PHP. 

4.2.4 Elemento <textarea>
Diferente do <input>, que é de uma linha só, a tag <textarea> permite inserir blocos de texto, como mensagens ou descrições.

Veja abaixo um exemplo:
-->

<form action="processar.php" method="post">
    <label for="mensagem">Mensagem:</label><br>
    <textarea name="mensagem" id="mensagem" rows="4" cols="40">
    Digite sua mensagem aqui...
    </textarea>
</form>

<!--
Este código HTML cria um formulário com um campo de texto grande, usando a tag <textarea>, ideal para o usuário digitar mensagens mais longas. O formulário está configurado para enviar os dados para o arquivo processar.php usando o método POST. O <label> com for="mensagem" está associado à área de texto com id="mensagem", o que melhora a usabilidade e a acessibilidade. O campo <textarea> tem os atributos rows="4" e cols="40", que definem a altura e a largura visível da caixa de texto (em linhas e colunas). O texto "Digite sua mensagem aqui..." aparece dentro da área de texto como conteúdo inicial, mas não é um placeholder — ele será enviado junto caso o usuário não o apague. 

4.2.5 Elemento <select> 
O elemento <select> permite ao usuário escolher uma ou mais opções de uma lista pré-definida. Cada opção é definida por uma tag <option> dentro do <select>.

Veja abaixo um exemplo do uso do elemento <select>:
-->

<form action="cadastrar.php" method="post">
    <label for="estado">Estado:</label>
    <select name="estado" id="estado">
        <option value="">Selecione...</option>
        <option value="RS">Rio Grande do Sul</option>
        <option value="SP">São Paulo</option>
        <option value="RJ">Rio de Janeiro</option>
    </select>
</form>

<!--
Este código HTML cria um formulário com uma lista suspensa (menu dropdown) que permite ao usuário selecionar um estado. O formulário será enviado ao arquivo cadastrar.php usando o método POST, embora neste exemplo ainda não tenha um botão de envio (submit). O elemento <label> com for="estado" está associado ao <select id="estado">, o que melhora a acessibilidade e permite que o usuário clique no texto "Estado:" para ativar o menu. Dentro da lista <select>, há quatro opções: a primeira (<option value="">Selecione...</option>) é apenas uma sugestão inicial, sem valor atribuído, incentivando o usuário a escolher uma das opções reais. As outras três opções têm valores curtos (como "RS" e "SP") que serão enviados ao servidor quando o formulário for submetido, enquanto o texto visível para o usuário são os nomes completos dos estados. 

4.2.6 Elementos <fieldset> e <legend>
Os elementos <fieldset> e <legend> são usados para organizar e agrupar visualmente os campos de um formulário HTML que estão logicamente relacionados. Além de melhorarem a apresentação, também favorecem a acessibilidade para tecnologias assistivas como leitores de tela.

Elemento <fieldset>

O elemento <fieldset> serve como contêiner para agrupar controles de formulário que fazem parte de uma mesma categoria ou seção. Quando utilizado, o navegador exibe uma borda ao redor dos campos agrupados, destacando-os visualmente.

Elemento <legend>

O elemento <legend> é usado dentro do <fieldset> para fornecer um título descritivo ao grupo de campos. Ele geralmente aparece como uma legenda sobre a borda do <fieldset>.

Veja abaixo um exemplo do uso dos elementos <fieldset> e <legend>:
-->

<form action="processa.php" method="post">
  <fieldset>
    <legend>Dados Pessoais</legend>

    <label for="nome">Nome completo:</label>
    <input type="text" id="nome" name="nome"><br><br>

    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email"><br><br>

    <label for="idade">Idade:</label>
    <input type="number" id="idade" name="idade"><br><br>

  </fieldset>

  <fieldset>
    <legend>Preferências</legend>

    <p>Você deseja receber notificações por e-mail?</p>
    <input type="radio" id="sim" name="notificacao" value="sim">
    <label for="sim">Sim</label>
    <input type="radio" id="nao" name="notificacao" value="nao">
    <label for="nao">Não</label>

  </fieldset>
  <br>
  <input type="submit" value="Enviar">
</form>

<!--
Este código HTML define um formulário organizado em seções utilizando as tags <fieldset> e <legend>, que ajudam a agrupar visualmente e semanticamente os campos. O formulário será enviado para o arquivo processa.php por meio do método POST. O primeiro grupo, com a legenda "Dados Pessoais", contém três campos: um para o nome completo, outro para o e-mail e um campo numérico para a idade. O segundo grupo, com a legenda "Preferências", apresenta uma pergunta com duas opções (botões de rádio) para que o usuário indique se deseja ou não receber notificações por e-mail — como ambos os botões compartilham o mesmo name="notificacao", apenas uma resposta pode ser selecionada. No final, há um botão de envio (<input type="submit">) que envia os dados preenchidos.

4.2.7 Atributos de Validação
O HTML5 introduziu diversos atributos que permitem validar os dados do formulário diretamente no navegador, sem a necessidade de scripts adicionais. Alguns dos mais comuns incluem:

> required: Torna o preenchimento do campo obrigatório.
> placeholder: Exibe um texto de ajuda dentro do campo (ex: "Digite seu CPF").
> min / max: Define limites para campos numéricos.
> maxlength: Limita a quantidade de caracteres em textos.

Exemplo:
<input type="text" name="usuario" required placeholder="Nome de usuário">

4.2.8 A Importância Crítica do Atributo name

Para o PHP, o id é irrelevante; o que importa é o name.

Dica de Ouro: ID vs NAME

ID: É o "RG" do elemento no navegador. Serve para o CSS aplicar estilos ou para o JavaScript encontrar o campo.
NAME: É o nome da "chave" que o PHP usará para acessar o dado. Sem o atributo name, o PHP simplesmente não recebe o valor digitado. No servidor, o dado chegará como $_POST['nome_do_campo'].

4.2.9 Envio de Arquivos (enctype)
Para enviar arquivos através de um formulário HTML, é necessário definir o atributo enctype do elemento <form> como "multipart/form-data". Isso permite que os dados do arquivo sejam enviados corretamente ao servidor.

Exemplo:
<form action="processa.php" method="post" enctype="multipart/form-data">
  <label for="arquivo">Selecione um arquivo:</label>
  <input type="file" id="arquivo" name="arquivo">
  <input type="submit" value="Enviar">
</form>


Diferença Visual: Radio vs Checkbox
Tipo	    Comportamento	            Uso Comum
Radio	    Escolha Única (Exclusivo)	Gênero, Aceite de Termos (Sim/Não).
Checkbox	Múltipla Escolha	        Interesses, Habilidades, Categorias.

4.2.10 O Elemento <button>
A tag <button> é muito comum na web moderna por permitir colocar ícones e HTML dentro dela, ao contrário do <input type="submit"> que é limitado a texto. O <button> pode ser configurado para agir como um botão de envio (submit), reset ou apenas um botão comum.

<button type="submit">
    <img src="icon-enviar.png" alt=""> Enviar Dados
</button>

-->
