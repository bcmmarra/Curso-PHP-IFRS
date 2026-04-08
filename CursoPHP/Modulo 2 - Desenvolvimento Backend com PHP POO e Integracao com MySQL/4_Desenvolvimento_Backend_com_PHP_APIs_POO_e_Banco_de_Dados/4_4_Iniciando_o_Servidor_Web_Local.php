<!-- 
4.4 Iniciando o Servidor Web Local
Depois de criar os arquivos PHP, os controladores, as rotas e o banco de dados, chega o momento de executar o projeto para verificar seu funcionamento. Diferente do HTML ou do JavaScript, o PHP precisa ser processado por um servidor web — ele não é interpretado diretamente pelo navegador. Por isso, antes de abrir um arquivo .php, precisamos de um ambiente de execução local que simule o funcionamento de um servidor real da internet.

Vimos que o PHP oferece duas formas principais de fazer isso:
Usando ferramentas completas, como o WampServer ou o XAMPP, que já vêm com o Apache e o MySQL configurados;
Usando o servidor embutido do próprio PHP, ideal para testes rápidos e didáticos, sem precisar instalar pacotes extras.

Para este exemplo, adotaremos a segunda opção, pois ela é mais prática. Desta forma, digite o seguinte comando no terminal:

Esse comando deve ser digitado no Prompt de Comando (CMD) ou no Terminal do VS Code, e você deve estar dentro da pasta raiz do seu projeto (projeto-backend). Se o terminal exibir 'php não é reconhecido', verifique se o caminho do PHP foi adicionado às Variáveis de Ambiente do seu Windows."

php -S localhost:8000 -t public

Onde: 
php -S: Inicia o servidor embutido
localhost:8000: Define o endereço e a porta (padrão 8000)
-t public: Define a pasta pública do projeto, onde está o index.php

"Se você receber um erro dizendo que a porta 8000 já está em uso, você pode simplesmente alterá-la no comando para 8001 ou 8080:
php -S localhost:8080 -t public"

Ao executar o comando, você verá uma mensagem semelhante a:
PHP 8.2.12 Development Server (http://localhost:8000) started

"Para testar se o servidor está realmente ativo, abra o seu navegador e digite http://localhost:8000/users.
Se tudo estiver correto, você verá a resposta JSON que configuramos no roteador:
{"mensagem": "Listando usuários..."}"

OBS: Se você quiser interromper o servidor, volte ao terminal e pressione:
Ctrl + C 
-->