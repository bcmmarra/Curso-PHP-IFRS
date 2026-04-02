<!-- 
4.1 Conceito de Cliente, Servidor e Protocolo HTTP
A web funciona a partir da interação entre clientes (normalmente navegadores) e servidores (computadores que armazenam e processam as páginas e aplicações). A comunicação entre esses dois elementos ocorre por meio de um protocolo chamado HTTP (Hypertext Transfer Protocol).

Quando o usuário preenche um formulário e clica em “Enviar”, seu navegador (cliente) envia uma requisição HTTP ao servidor. O servidor interpreta essa requisição ——— com o apoio de linguagens como o PHP ———, executa a lógica necessária e envia uma resposta HTTP ao cliente. Essa resposta pode conter o resultado do processamento (como uma mensagem de confirmação, os dados armazenados ou uma página atualizada).

Compreender esse ciclo de comunicação é essencial para o desenvolvedor iniciante, pois é nele que se fundamenta todo o funcionamento de formulários e da web dinâmica como um todo. Ao longo deste módulo, será possível compreender como o PHP atua no tratamento dessas requisições e quais práticas devem ser adotadas para garantir segurança e eficiência no processo.

4.1.1 Entendendo a Arquitetura Cliente-Servidor
A base do funcionamento da internet ——— e, por consequência, das aplicações desenvolvidas com PHP ——— está na arquitetura cliente-servidor (PHP MANUAL, 2025).

Essa arquitetura é composta, essencialmente, por dois elementos:

> Cliente: é o dispositivo ou software (geralmente um navegador, como Chrome, Firefox ou Safari) que faz uma requisição de informações ou serviços.

> Servidor: é o sistema que recebe essa requisição, processa-a e devolve uma resposta ao cliente.

Por exemplo, quando um usuário acessa um site digitando seu endereço no navegador, o navegador atua como cliente, enviando uma requisição ao servidor que hospeda o site. O servidor, então, responde com o conteúdo da página solicitada.

De acordo com Welling e Thomson (2017),  a estrutura cliente-servidor é um modelo amplamente adotado que permite a separação entre o consumo e o fornecimento de serviços na web.

4.1.2 O Papel do PHP no Lado do Servidor
Ao desenvolver páginas e aplicações para a web, é fundamental entender que nem todo código executado no navegador do usuário (cliente) é o mesmo que aquele que roda no servidor. O PHP é uma linguagem de programação interpretada exclusivamente no lado do servidor, ou seja, todo o seu processamento acontece antes da resposta ser enviada ao navegador.

Como isso funciona na prática?

Quando um usuário acessa uma página .php, o servidor web (por exemplo, o Apache) reconhece que o arquivo contém código PHP. Ele, então, aciona o interpretador PHP, que executa o código presente no arquivo e gera dinamicamente uma resposta — geralmente em HTML.

Essa resposta gerada é enviada ao navegador do usuário, que nunca verá o código PHP original, mas apenas o resultado final gerado por ele.

Exemplo prático

Considere o arquivo boas-vindas.php com o seguinte código: 
-->
<?php
  $nome = "Carla";
  echo "<h1>Olá, $nome! Seja bem-vinda ao nosso site.</h1>";
?>

<!--
Quando um usuário acessa boas-vindas.php, o servidor processa o código PHP, substitui a variável $nome por "Carla" e envia a seguinte resposta HTML ao navegador:
<h1>Olá, Carla! Seja bem-vinda ao nosso site.</h1>
O navegador, por sua vez, renderiza essa resposta, exibindo a mensagem de boas-vindas para o usuário.


4.1.3 O que é HTTP ?
O HTTP (Hypertext Transfer Protocol) é o principal protocolo de comunicação utilizado na web. Ele define a forma como os dados são solicitados e transferidos entre os dois principais elementos da arquitetura web: o cliente (normalmente um navegador) e o servidor (onde está hospedado o site ou aplicação web).

Segundo Welling e Thomson (2017), o protocolo HTTP é a espinha dorsal da comunicação web, responsável por estruturar o envio de requisições e respostas entre o cliente e o servidor.

O que é um protocolo?
Um protocolo, no contexto da internet, é um conjunto de regras e padrões que define como os dados devem ser transmitidos e interpretados por computadores. O HTTP, nesse caso, é o protocolo que organiza a troca de informações na web, garantindo que o cliente entenda a resposta enviada pelo servidor e vice-versa.

Como o HTTP funciona?
O HTTP trabalha com o modelo requisição-resposta. Esse modelo consiste nas seguintes etapas:

> O cliente (navegador) envia uma requisição HTTP para o servidor.
> O servidor processa a requisição e devolve uma resposta HTTP.
> O cliente interpreta a resposta e exibe o conteúdo ao usuário.

Estrutura de uma requisição HTTP

Uma requisição HTTP inclui:

> Método HTTP (GET, POST, etc.)
> URL (endereço do recurso solicitado)
> Cabeçalhos (headers) com informações adicionais
>(Opcionalmente) um corpo de mensagem com dados (por exemplo, em formulários)

Vejamos abaixo um exemplo de uma requisição HTTP:

GET /index.php HTTP/1.1
Host: www.exemplo.com
User-Agent: Mozilla/5.0

A linha GET /index.php HTTP/1.1 indica que o navegador (ou cliente) está fazendo uma requisição GET, ou seja, está pedindo para acessar o arquivo index.php do servidor, usando a versão 1.1 do protocolo HTTP.
A linha Host: www.exemplo.com informa para qual domínio a requisição está sendo enviada, no caso, o site www.exemplo.com.
A linha User-Agent: Mozilla/5.0 identifica o tipo de navegador ou software que está fazendo a requisição, o que pode ajudar o servidor a adaptar o conteúdo (por exemplo, para celular ou desktop). 

Vejamos abaixo um exemplo de resposta HTTP:
HTTP/1.1 200 OK
Content-Type: text/html; charset=UTF-8
Server: Apache

<html>
  <body>Olá, Carla!</body>
</html>

A linha HTTP/1.1 200 OK indica que a requisição foi processada com sucesso e o servidor está retornando o conteúdo solicitado.
A linha Content-Type: text/html; charset=UTF-8 informa que o conteúdo da resposta é do tipo HTML e utiliza a codificação UTF-8.
A linha Server: Apache indica que o servidor web utilizado é o Apache.


Métodos HTTP mais comuns
No contexto da comunicação entre cliente e servidor, os métodos HTTP especificam a ação que o cliente deseja que o servidor execute sobre um recurso (normalmente uma página ou um arquivo). Esses métodos fazem parte da requisição HTTP enviada pelo navegador ao servidor, e cada um deles tem um propósito específico.

Em aplicações desenvolvidas com PHP, os métodos mais utilizados são o GET e o POST, especialmente no tratamento de formulários. Outros métodos como PUT e DELETE são usados com mais frequência em APIs ou sistemas que implementam operações de CRUD (Create, Read, Update, Delete).

Veja o quadro abaixo contendo um resumo dos principais métodos HTTP:

Quadro 1 - Métodos HTTP
Método              Função principal
GET                 Solicita dados do servidor (ex.: carregar uma página)
POST                Envia dados ao servidor (ex.: formulário de login)
PUT                 Atualiza dados no servidor  (ex.: editar um perfil)
DELETE              Remove dados do servidor (ex.: excluir um registro)

4.1.4 Diferença entre HTTP e HTTPS
Ao navegar por sites na internet, é comum observar que alguns endereços começam com http:// enquanto outros usam https://. Essa pequena diferença na URL indica algo fundamental sobre a segurança da comunicação entre o navegador do usuário e o servidor web.

HTTP – Hypertext Transfer Protocol
O HTTP (Protocolo de Transferência de Hipertexto) é o protocolo padrão utilizado para a comunicação entre clientes (como navegadores) e servidores web. Ele define como as requisições (por exemplo, abrir uma página) e respostas (conteúdo da página, imagens, formulários etc.) devem ser trocadas.

Contudo, o HTTP tradicional não oferece nenhum tipo de criptografia: as informações trocadas entre o navegador e o servidor são transmitidas em texto puro (plaintext). Isso significa que, se alguém interceptar essa comunicação (em redes Wi-Fi públicas, por exemplo), poderá ler facilmente dados sensíveis como senhas, números de cartões de crédito ou informações pessoais.

HTTPS – HTTP Secure
O HTTPS (HTTP Secure) é uma versão segura do HTTP. Ele adiciona uma camada de criptografia SSL/TLS (Secure Sockets Layer / Transport Layer Security) que protege a comunicação entre o navegador e o servidor. Com HTTPS:
Os dados são criptografados antes de serem enviados, impedindo que terceiros leiam ou modifiquem as informações transmitidas.

É garantida a autenticidade do servidor (o navegador confirma que está se comunicando com o site correto, e não com um site falso).

A integridade dos dados também é assegurada (evitando alterações durante a transmissão).

Como identificar um site com HTTPS?

Os navegadores geralmente indicam que um site utiliza HTTPS com um ícone de cadeado ao lado da barra de endereços. Além disso, o endereço começa com https:// ao invés de http://.

4.1.5 Códigos de Status HTTP
Toda resposta enviada pelo servidor inclui um código de status de três dígitos, que indica se a requisição foi bem-sucedida ou se houve um erro:

> 200 (OK): A requisição foi atendida com sucesso.
> 301/302 (Redirect): A página mudou de endereço.
> 400 (Bad Request): O servidor não entendeu a requisição (erro no cliente).
> 404 (Not Found): O recurso ou página solicitada não foi encontrado.
> 500 (Internal Server Error): Ocorreu um erro no script PHP do servidor.

Esses códigos são essenciais para o desenvolvimento web, pois ajudam a identificar e corrigir problemas na comunicação entre cliente e servidor, além de melhorar a experiência do usuário ao fornecer feedback adequado sobre o status da requisição.

Curiosidade: O HTTP é "Stateless"
O protocolo HTTP é "sem estado" (stateless). Isso significa que o servidor não guarda memória de uma requisição para outra. Para o servidor, cada clique ou atualização de página de um usuário é como se fosse a primeira vez que o visse. É por isso que, no PHP, utilizamos recursos como Sessions (Sessões) para manter um usuário logado enquanto ele navega entre diferentes páginas.

Diferença Prática entre GET e POST
Dica técnica:

GET: Os dados aparecem na URL (ex: perfil.php?id=10). É público e tem limite de caracteres. Ótimo para buscas.
POST: Os dados vão "escondidos" no corpo da requisição. É mais seguro para senhas e permite enviar arquivos (fotos/PDFs).

Conclusão: O ciclo de vida de uma aplicação web.
Entender o ciclo de vida de uma aplicação web é fundamental para qualquer desenvolvedor. Ele começa quando o usuário faz uma requisição (por exemplo, clicando em um link ou enviando um formulário). O navegador (cliente) envia essa requisição ao servidor, que processa o código PHP, interage com bancos de dados se necessário, e gera uma resposta (geralmente em HTML). Essa resposta é então enviada de volta ao navegador, que a renderiza para o usuário. Compreender esse processo é essencial para criar aplicações web eficientes, seguras e responsivas.

