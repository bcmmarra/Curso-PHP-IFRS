<!-- 
1.2.1 O que é PHP?
PHP é a sigla recursiva para "PHP: Hypertext Preprocessor" (ou "pré-processador de hipertexto"). Trata-se de uma linguagem de programação interpretada, orientada ao desenvolvimento web do lado do servidor. Isso significa que o PHP é usado para escrever códigos que serão executados no servidor web e não no computador do usuário.

Diferente de linguagens como HTML ou CSS, que apenas definem estrutura e aparência da página, o PHP controla a lógica do sistema, acessa bancos de dados, gerencia sessões de usuário, manipula arquivos e gera conteúdo dinâmico.

Segundo Powers (2017), o PHP é projetado especificamente para integração com HTML, permitindo que scripts sejam facilmente embutidos em páginas web e executados de maneira eficiente nos servidores.

1.2.2 Como o PHP funciona?
O fluxo básico de funcionamento de um código PHP é:

> O navegador envia uma solicitação a um arquivo .php no servidor.
> O servidor executa o script PHP usando um interpretador (como o módulo PHP no Apache).
> O PHP gera uma saída (geralmente HTML) e a envia de volta ao navegador.
> O navegador exibe o resultado — que pode ser uma página personalizada, com dados de banco ou outras funcionalidades.

O código PHP nunca chega ao navegador: o que o usuário vê é apenas o resultado processado. Essa é uma das principais razões pelas quais o PHP é utilizado em sistemas que exigem segurança, como cadastro de usuários, sistemas de login, aplicações com banco de dados, entre outros.

1.2.3 Histórico e evolução do PHP
O PHP foi criado em 1994 por Rasmus Lerdorf, inicialmente como um conjunto de scripts para acompanhar acessos a seu site pessoal. Com o tempo, a linguagem evoluiu e, hoje, o PHP é uma das principais linguagens da internet.

Entre as versões mais significativas:

> PHP 5: Introdução da Programação Orientada a Objetos (POO) com melhorias importantes.
> PHP 7: Grande ganho de desempenho e segurança.
> PHP 8: Novas funcionalidades, como atributos, expressões match, e JIT (Just In Time compilation).

Conforme Zandstra (2014), a linguagem PHP amadureceu a ponto de suportar padrões complexos de projeto (design patterns), princípios SOLID e arquitetura limpa, mantendo a facilidade de uso.

1.2.4 Por que utilizar PHP?
PHP é amplamente utilizado por diversas razões técnicas e educacionais:

1. Facilidade de aprendizado
A sintaxe do PHP é semelhante a outras linguagens como C, JavaScript e Java. Isso torna o PHP fácil de entender para quem já programou em outras linguagens ou está em fase intermediária.
-->

<?php
  echo "Olá, mundo!";
?>

<!-- 
Com apenas três linhas de código já é possível criar um script funcional, como mostra o exemplo acima.

2. Ampla documentação e comunidade
O site oficial do PHP (php.net) oferece documentação completa, exemplos de uso e explicações detalhadas para cada função da linguagem. Além disso, há milhares de tutoriais, fóruns e vídeos acessíveis gratuitamente.

A documentação oficial do PHP (2025) é referência indispensável para estudantes e profissionais, atualizada frequentemente com exemplos práticos e tradução para vários idiomas, incluindo o português.

3. Integração com HTML e banco de dados
PHP pode ser facilmente inserido em arquivos HTML, o que torna possível criar páginas dinâmicas. Além disso, sua integração com bancos de dados como MySQL e PostgreSQL é simples, robusta e bem documentada.
-->

<form method="POST">
  <input type="text" name="nome">
</form>

<?php
  echo "Olá, " . $_POST['nome'];
?>

<!-- 
Esse pequeno exemplo mostra como o PHP pode capturar informações enviadas por formulários HTML e gerar uma resposta personalizada.

4. Plataforma livre e compatível
PHP é gratuito e funciona em praticamente todos os servidores web (Apache, Nginx, IIS) e sistemas operacionais (Linux, Windows, macOS). Isso o torna ideal para escolas públicas, cursos técnicos e estudantes que desejam aprender sem custos.

Holzner (2006) destaca que o PHP democratizou o desenvolvimento web ao permitir que qualquer pessoa possa criar sistemas dinâmicos com recursos gratuitos.

5. Suporte a boas práticas e padrões modernos
Mesmo sendo simples, o PHP suporta programação estruturada, orientada a objetos, tratamento de erros, modularização e reutilização de código — recursos fundamentais para a formação de programadores profissionais.

1.2.5 Onde o PHP é utilizado?
Várias aplicações e sistemas populares foram desenvolvidos (ou ainda utilizam) PHP:

WordPress (maior plataforma de blogs do mundo)
Wikipedia
PrestaShop, Moodle, Joomla (CMS e plataformas de ensino)
Sites institucionais, portais de notícia, lojas virtuais e sistemas internos em escolas e empresas.

De acordo com o portal W3Techs (2025), quase 75% de todos os sites com linguagem de servidor conhecida utilizam PHP. 
-->