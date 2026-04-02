<!-- 
1.3.1 Introdução
Antes de começar a programar em PHP, é essencial preparar um ambiente de desenvolvimento local. Esse ambiente permitirá que você escreva, teste e execute códigos PHP no seu próprio computador, de forma segura e prática, sem depender de um servidor remoto.

Em geral, desenvolver localmente é mais rápido, gratuito e flexível, sendo uma prática recomendada tanto para quem está aprendendo quanto para profissionais experientes (Ullman, 2018).

O ambiente básico para desenvolvimento PHP inclui:

Um servidor web (como Apache ou Nginx) para processar as requisições HTTP.
O interpretador PHP para executar o código.
Um gerenciador de banco de dados (geralmente MySQL ou MariaDB).
Um editor de código para escrever os scripts.

1.3.2 XAMPP: Solução Integrada
Neste contexto, para rodar código PHP no computador, você precisa de um servidor web local, do interpretador PHP e, muitas vezes, de um banco de dados. Em vez de instalar cada componente separadamente, recomendamos o XAMPP, um pacote gratuito que combina tudo em um só instalador.

O XAMPP inclui:

Apache (servidor web).
PHP (interpretador).
MySQL/MariaDB (banco de dados).
Painel de controle fácil para iniciar/parar serviços.

O XAMPP reúne todas essas ferramentas em um único instalador, eliminando a necessidade de configurações complexas. Para quem está começando, é uma das formas mais fáceis de montar o ambiente local. Segundo Holzner (2006). ferramentas como XAMPP simplificam a vida do desenvolvedor iniciante ao integrar servidor, banco de dados e interpretador PHP em um só pacote.

Veja a seguir um passo a passo para instalar o XAMPP no Windows (os passos são semelhantes em Linux e macOS):

Acesse o site oficial: https://www.apachefriends.org/index.html
Baixe a versão compatível com seu sistema operacional.
Execute o instalador e siga o assistente.
Durante a instalação, selecione os componentes desejados (Apache, MySQL e PHP são essenciais).
Conclua a instalação e abra o XAMPP Control Panel.

No painel de controle do XAMPP, você poderá iniciar e parar os serviços do Apache (servidor web) e MySQL (banco de dados), monitorando facilmente o status dos servidores locais.

Dica: Após a instalação, você pode acessar http://localhost no navegador para verificar se o servidor Apache está funcionando.

OBS: Além de ferramentas completas como XAMPP, o PHP moderno (a partir da versão 5.4) oferece um servidor embutido, ideal para quem quer praticar rapidamente, sem instalar pacotes adicionais. Para isso, basta execute o comando abaixo:

php -S localhost:8000

Em seguida, acesse no navegador http://localhost:8000.

1.3.3 Configurando o editor de código
Embora seja possível escrever código PHP em um editor de texto básico como o Bloco de Notas (Windows), TextEdit (macOS) ou gedit (Linux), um editor mais avançado torna o processo muito mais produtivo. Recomendamos o Visual Studio Code (VS Code), um editor de código gratuito e amplamente utilizado por desenvolvedores. 

Entre as vantagens do VS Code podemos citar:

Realce de sintaxe para PHP.
Autocompletar inteligente.
Navegação entre arquivos e funções.
Integração com extensões para melhorar o fluxo de trabalho.

Você pode baixá-lo em: https://code.visualstudio.com/ 

1) Extensão PHP Intelephense
Depois de instalar o VS Code, recomendamos adicionar a extensão PHP Intelephense, que oferece:

Sugestões automáticas de código.
Navegação avançada entre funções e arquivos.
Detecção de erros em tempo real.

Como instalar:
Abra o VS Code.
Vá até o menu de extensões (ícone de quadrados no lado esquerdo).
Busque por “PHP Intelephense”.
Clique em Instalar.

Com isso, seu editor estará configurado para oferecer uma experiência de desenvolvimento moderna, mesmo para quem está apenas começando (Powers, 2017).

2) Extensão PHP Server

Outra extensão muito útil para iniciantes é o PHP Server. Ela cria um servidor embutido no VS Code, permitindo que você teste seus scripts diretamente no navegador com um clique.

Principais funcionalidades:
Inicia um servidor local com um clique.
Escolha de porta personalizada.
Visualização imediata no navegador.
Simula um ambiente real para testar scripts PHP.


Como instalar:
No VS Code, abra o menu de extensões.
Busque por “PHP Server”.
Clique em Instalar.
Após a instalação, basta clicar com o botão direito em um arquivo PHP e selecionar “PHP Server: Serve project” para iniciar o servidor e visualizar seu código no navegador.

Em seguida, vamos criar nosso primeiro projeto em PHP. 
-->