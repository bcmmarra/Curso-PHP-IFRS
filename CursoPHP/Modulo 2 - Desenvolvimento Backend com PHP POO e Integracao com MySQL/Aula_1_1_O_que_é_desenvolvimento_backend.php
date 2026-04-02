<!-- 
1.1.1 Conceito de frontend e backend
Em uma aplicação web, como um site ou sistema online, podemos dividir seu funcionamento em duas partes principais: frontend e backend.

O frontend é a parte visual e interativa com a qual o usuário interage diretamente — botões, menus, campos de formulário, imagens e cores.

O backend, por outro lado, é a parte invisível, que fica “nos bastidores”. Ele é responsável por processar informações, armazenar e recuperar dados no banco de dados, realizar cálculos, validar regras e enviar respostas ao frontend.

O backend é executado no servidor, e não no navegador do usuário. Ou seja, o que você escreve em PHP nunca será visualizado diretamente por quem usa o site. O que o navegador exibe é o resultado processado pelo PHP no backend.

Segundo Ullman (2018), o backend é a camada da aplicação que oferece os serviços essenciais para que o frontend funcione com lógica, segurança e persistência de dados.

1.1.2 Como funciona uma aplicação web: cliente e servidor
Para entender melhor como funciona uma aplicação web, vejamos um exemplo prático de como o backend atua:

Um usuário acessa um site em seu navegador e clica no botão "Entrar".

O navegador (cliente) envia os dados (usuário e senha) para o servidor através de uma requisição HTTP.

O servidor, que executa um script backend em PHP, recebe os dados.

O script consulta o banco de dados para verificar se o usuário existe e se a senha está correta.

Se os dados forem válidos, o servidor cria uma sessão e retorna uma resposta ao cliente, permitindo o acesso.

Se os dados estiverem errados, o servidor devolve uma mensagem de erro.

Esse ciclo é chamado de requisição e resposta. Cada clique, envio de formulário ou solicitação de página aciona o backend.

1.1.3 O que o Backend Faz na Prática?
As principais responsabilidades do backend são:

Gerenciar banco de dados: armazenar, recuperar e atualizar dados (ex.: nomes de usuários, senhas, produtos, comentários).

Executar regras de negócio: definir a lógica da aplicação (ex.: "um aluno só pode se matricular se tiver nota acima de 6").

Autenticar e autorizar usuários: garantir que somente usuários permitidos acessem certas áreas.

Gerar páginas dinamicamente: criar conteúdo HTML personalizado a cada solicitação.

Manter segurança: proteger dados sensíveis e evitar ataques (como SQL Injection).

Segundo Holzner (2006), o backend é o núcleo operacional da aplicação web, e o PHP é uma das linguagens mais acessíveis para controlar essas funcionalidades.

1.1.4 Linguagens mais usadas no Backend
Algumas linguagens comuns para desenvolvimento backend incluem:

PHP
Python
Java
Ruby
Node.js (JavaScript no servidor)

Neste curso, o foco é o PHP, por ser uma linguagem simples de aprender, com ampla documentação, ideal para iniciantes e perfeita para ensino médio.

Conforme Powers (2017), o PHP se destaca por permitir a construção de sites dinâmicos com poucos recursos e grande eficiência.

1.1.5 Por que aprender Backend com PHP?
Aprender backend com PHP permite:

Construir sites com funcionalidades reais, como login, cadastro, e-commerce;

Trabalhar com bancos de dados, integrando MySQL com facilidade;

Criar sistemas completos, mesmo com conhecimentos básicos em HTML e lógica de programação.

O backend transforma um site estático (apenas visual) em uma ferramenta interativa, inteligente e dinâmica.

Zandstra (2014) destaca que a programação backend em PHP prepara o estudante para aplicar conceitos de orientação a objetos, design patterns e práticas profissionais, mesmo em projetos pequenos. 
-->