<!-- 
4.1 O que são APIs e o padrão RESTful
Antes de entender como organizar um sistema backend em PHP, é fundamental compreender como a comunicação entre diferentes aplicações ocorre. Essa comunicação é viabilizada por meio das APIs (Application Programming Interfaces), que definem regras, formatos e protocolos para a troca de informações entre sistemas.

Segundo Sommerville (2019), uma API é uma interface bem definida que permite que componentes de software interajam sem a necessidade de conhecer detalhes internos de sua implementação.

Na web, essas interações ocorrem com base no protocolo HTTP, permitindo que sistemas escritos em linguagens diferentes — como PHP, JavaScript ou Python — possam se comunicar de forma padronizada. Quando essa comunicação segue princípios específicos, ela é chamada de API RESTful, uma das abordagens mais adotadas atualmente (Richardson; Amundsen; Foster, 2013).

4.1.1 O que é uma API
A sigla API significa Application Programming Interface, ou Interface de Programação de Aplicações. Trata-se de um conjunto de funções, padrões e endpoints que possibilitam que um programa solicite e envie dados a outro sistema.

As APIs representam um contrato de comunicação que define o formato das mensagens e os métodos pelos quais os sistemas se interconectam. Essa definição reforça que a API não é o sistema em si, mas sim a “porta de entrada” que permite o acesso controlado aos seus recursos.

Exemplo prático: Ao usar um aplicativo de celular para verificar o clima, o app faz uma requisição HTTP a uma API meteorológica. Essa API processa o pedido, consulta os dados de previsão do tempo e retorna uma resposta em formato JSON, contendo temperatura, umidade e condição atmosférica.

Esse modelo de comunicação é essencial para sistemas distribuídos e integrados — como plataformas educacionais, lojas virtuais e serviços bancários online —, que dependem de interoperabilidade entre componentes (Pressman; Maxim, 2021).

4.1.2 Como as APIs funcionam na web
Na Web, o protocolo HTTP (Hypertext Transfer Protocol) é o principal meio de comunicação entre cliente e servidor. Segundo a especificação do World Wide Web Consortium (W3C, 2024), o HTTP é um protocolo sem estado (stateless) em que cada requisição é independente e contém todas as informações necessárias para ser processada.

Em uma API web, o cliente (por exemplo, o navegador ou um aplicativo mobile) envia requisições HTTP para URLs específicas chamadas de endpoints. Essas requisições indicam a ação desejada — como buscar, criar, atualizar ou excluir um recurso — e o servidor responde com dados estruturados, geralmente no formato JSON (JavaScript Object Notation).

Veja abaixo um exemplo de um retorno de uma API em formato JSON:

{
  "id": 1,
  "name": "Ana Souza",
  "email": "ana@ifrs.edu.br"
}

Esse código acima representa um objeto em formato JSON que contém três pares de dados: o campo "id" (identificador numérico do usuário), o campo "name" (nome da pessoa) e o campo "email" (endereço de e-mail).

Esse modelo é amplamente usado porque o formato JSON é leve, legível e compatível com praticamente todas as linguagens de programação (Flanagan, 2020).


4.1.3 O que é o padrão RESTful
As APIs RESTful seguem os princípios do REST (Representational State Transfer), um modelo de arquitetura que organiza a comunicação entre sistemas de forma simples e padronizada. Elas são amplamente utilizadas para conectar o front-end e o back-end, permitindo trocas de dados eficientes.

O REST se baseia em alguns conceitos principais:
Arquitetura cliente-servidor: o cliente faz requisições e o servidor responde com dados, de forma independente.
Stateless (sem estado): cada requisição é completa por si só, sem depender das anteriores.
Recursos identificados por URLs: cada dado é acessado por um endereço único, como /usuarios/123.
Uso de métodos HTTP: o GET lê dados, o POST cria, o PUT atualiza e o DELETE remove.
Representações de dados: as respostas geralmente são em JSON, por ser leve e fácil de integrar.
Conectividade via HTTP: utiliza o protocolo padrão da web, facilitando a integração entre sistemas.

4.1.4 Métodos HTTP em uma API
Ao desenvolver uma API, os métodos HTTP indicam qual ação o cliente deseja realizar no servidor — por exemplo, quando um navegador ou aplicativo precisa buscar, criar, atualizar ou excluir informações. Cada método possui uma função específica, e entender o papel de cada um é fundamental para construir aplicações que se comuniquem corretamente com o back-end.

A tabela a seguir apresenta os principais métodos HTTP e suas respectivas funções:

Quadro 1 - Principais métodos HTTP

Método HTTP     |Ação       |Exemplo de rota        |Função                                     |
----------------|-----------|-----------------------|-------------------------------------------|     
GET             |Ler        |/users ou /users/1     |Retorna dados existentes                   |
POST            |Criar      |/users                 |Adiciona um novo registro                  |
PUT             |Atualizar  |/users/1               |Atualiza um registro existente COMPLETO    |
PATCH           |Atualizar  |/users/1               |Atualiza um registro existente PARCIAL     |
DELETE          |Excluir    |/users/1               |Remove um registro                         |

OBSERVAÇÃO
PUT: Substitui o recurso inteiro (ex: atualiza nome, idade e curso de uma vez).
PATCH: Atualiza apenas uma parte (ex: apenas o e-mail do aluno).

Esses quatro métodos formam a base de uma API RESTful, que segue um padrão de comunicação entre cliente e servidor.

O GET é usado para ler informações, sem modificá-las.
O POST serve para enviar novos dados, criando registros no servidor.
O PUT é utilizado para atualizar informações já existentes.
E o DELETE remove um recurso específico do sistema.

Compreender e aplicar corretamente esses métodos é o primeiro passo para criar APIs organizadas, padronizadas e fáceis de integrar com diferentes aplicações web.

Além dos métodos, as APIs utilizam Status Codes para informar o resultado da operação:

200 (OK): Sucesso na leitura ou atualização.
201 (Created): Sucesso ao criar um novo recurso (ideal para o POST).
400 (Bad Request): Erro no envio dos dados pelo cliente.
404 (Not Found): O recurso ou a rota não existe.
500 (Internal Server Error): Erro no servidor (ex: banco de dados fora do ar)."

4.1.5 API x Formulário tradicional
Antes do surgimento das APIs modernas, o PHP era amplamente utilizado para processar formulários HTML e gerar páginas dinâmicas completas. Nesse modelo, o servidor recebia os dados do formulário, processava-os e devolvia uma nova página HTML pronta para ser exibida ao usuário.

Com o tempo, surgiu a necessidade de separar o backend da interface gráfica — especialmente com o crescimento dos aplicativos móveis e dos frameworks de front-end (como React, Angular e Vue.js).  Essa separação levou ao surgimento das APIs RESTful, que enviam e recebem dados de forma padronizada, sem gerar páginas HTML.

4.1.5.1 Estrutura de um envio tradicional (HTML + PHP)
No modelo clássico, o formulário envia os dados para uma página PHP por meio do atributo action. 
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <!-- Exemplo: formulário tradicional -->
<form action="processa_cadastro.php" method="POST">
  <label>Nome:</label>
  <input type="text" name="nome" required>
 
  <label>E-mail:</label>
  <input type="email" name="email" required>
 
  <button type="submit">Cadastrar</button>
</form>


</body>
</html>
<!-- 
O PHP então processa esses dados e renderiza uma nova página HTML como resposta.
 -->
<?php
// processa_cadastro.php
$nome = $_POST['nome'];
$email = $_POST['email'];

// Aqui poderia haver inserção no banco de dados...
echo "<h3>Usuário cadastrado com sucesso!</h3>";
echo "<p>Nome: $nome</p>";
echo "<p>E-mail: $email</p>";
?>
<!-- 
Assim, vejamos como este modelo funciona:

O navegador envia os dados do formulário para o servidor via método POST;
O servidor PHP recebe os dados e os processa;
A resposta do servidor é uma nova página HTML completa, renderizada no navegador.

4.1.5.2 Estrutura de uma requisição em uma API RESTful
No modelo com uso de APIs, o backend não retorna páginas prontas — ele apenas recebe e envia dados, normalmente em formato JSON. Quem cuida da interface visual é outro sistema (um site feito em React, um aplicativo Android, etc.).

Veja abaixo um exemplo de envio via API RESTful (usando JavaScript):
 -->
<script>
// Envio de dados para uma API PHP
fetch("http://localhost:8000/users", {
  method: "POST",
  headers: { "Content-Type": "application/json" },
  body: JSON.stringify({
    name: "Ana Souza",
    email: "ana@ifrs.edu.br"
  })
})
.then(response => response.json())
.then(data => console.log("Resposta da API:", data));
</script>
<!--
Esse exemplo mostra como enviar dados para uma API PHP usando a função fetch() do JavaScript. Ele faz uma requisição HTTP do tipo POST para o endereço http://localhost:8000/users. No cabeçalho (headers), é informado que o conteúdo está no formato JSON. Em seguida, os dados — nome e e-mail — são convertidos em texto JSON com JSON.stringify() e enviados no corpo da requisição (body). Quando o servidor responde, o código usa .then(response => response.json() para converter a resposta da API em objeto JavaScript, e depois exibe o resultado no console com console.log().

Agora, veja o backend em PHP que recebe esses dados:
 -->
<?php
// Informe ao cliente que o retorno é um JSON
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_SERVER['REQUEST_URI'] === '/users') {
    $data = json_decode(file_get_contents('php://input'), true);
    echo json_encode([
        'mensagem' => 'Usuário cadastrado com sucesso!',
        'dados_recebidos' => $data
    ]);
}
?>
<!--
Esse código PHP cria uma rota para cadastrar um usuário usando o método POST. Ele verifica se a requisição é POST e se o endereço acessado é /users. Caso seja, ele lê os dados enviados pelo cliente (normalmente em formato JSON), usando file_get_contents('php://input'), e os converte para um array PHP com json_decode(). Em seguida, ele retorna uma resposta em JSON (usando json_encode()) com uma mensagem de sucesso e mostra os dados recebidos.

Agora, vejamos como é a saída desta API em formato JSON:

{
  "mensagem": "Usuário cadastrado com sucesso!",
  "dados_recebidos": {
    "name": "Ana Souza",
    "email": "ana@ifrs.edu.br"
  }
}

Resumidamente, vejamos como este modelo funciona:

O cliente (frontend, app ou outro sistema) envia uma requisição HTTP para o backend;
O servidor processa a requisição e retorna uma resposta JSON, sem interface visual;
O cliente decide como exibir essa informação (por exemplo, numa tela, num gráfico,  etc).

4.1.6 Roteamento: ligando rotas às funções da API
Depois de entender como uma API recebe requisições e envia respostas, o próximo passo é compreender como o servidor PHP sabe o que deve ser feito. Esse processo é chamado de roteamento (routing).

O roteamento analisa o endereço (rota) e o método HTTP da requisição, e decide qual trecho de código deve ser executado. Por exemplo:

/users com o método GET → listar usuários;
/users com POST → criar um novo usuário;
/users/1 com DELETE → excluir o usuário de ID 1.

Vejamos abaixo um exemplo de roteamento em PHP:
 -->

<?php
// public/index.php
$path = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'GET':
        if ($path === '/users') {
            echo json_encode(['mensagem' => 'Listando usuários...']);
        } else {
            http_response_code(404);
            echo json_encode(['erro' => 'Rota não encontrada']);
        }
        break;

    case 'POST':
        if ($path === '/users') {
            echo json_encode(['mensagem' => 'Criando novo usuário...']);
        } else {
            http_response_code(404);
            echo json_encode(['erro' => 'Rota não encontrada']);
        }
        break;

    case 'DELETE':
        // Usa expressão regular #^/users/(\d+)$#. Aqui, o (\d+) serve para capturar qualquer número que venha após /users/, permitindo que o sistema saiba exatamente qual ID deve ser excluído.
        if (preg_match('#^/users/(\d+)$#', $path, $matches)) {
            echo json_encode(['mensagem' => "Excluindo usuário ID {$matches[1]}..."]);
        } else {
            http_response_code(404);
            echo json_encode(['erro' => 'Rota não encontrada']);
        }
        break;

    default:
        http_response_code(404);
        echo json_encode(['erro' => 'Rota não encontrada']);
}
?>
<!--
Esse código cria uma API com múltiplas rotas, permitindo diferentes ações conforme o método HTTP e o endereço (rota) acessado:

Ele pega o caminho da URL ($_SERVER['REQUEST_URI']) e o método HTTP ($_SERVER['REQUEST_METHOD']).
Se a rota for /users e o método for GET, a API responde com a mensagem "Listando usuários...".
Se for /users com método POST, responde "Criando novo usuário...".
Se for /users/algumNúmero com método DELETE, detectado com preg_match() (que identifica o número do ID na URL), retorna "Excluindo usuário ID X...".
Para qualquer outra rota, o código devolve o erro 404, indicando que a rota não foi encontrada. 
-->