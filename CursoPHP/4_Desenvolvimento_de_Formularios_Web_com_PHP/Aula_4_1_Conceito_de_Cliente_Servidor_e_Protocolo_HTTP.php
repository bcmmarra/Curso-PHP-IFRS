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