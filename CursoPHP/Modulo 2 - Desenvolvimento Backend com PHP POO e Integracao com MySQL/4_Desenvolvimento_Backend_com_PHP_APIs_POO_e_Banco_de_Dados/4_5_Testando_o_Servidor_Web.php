<!-- 
4.5 Testando o Servidor Web
Com o servidor em execução, você pode testar os endpoints usando diversas ferramentas, como o navegador, a linha de comando com o curl, uma extensão do Visual Studio Code, como o REST Client, ou uma ferramenta de desenvolvimento e teste de APIs, como o Postman ou o Insomnia. Abaixo estão breves descrições de cada uma:

curl: uma ferramenta de linha de comando para transferir dados de e para servidores usando vários protocolos, com destaque para HTTP e HTTPS. Com curl, é possível fazer requisições para URLs específicas e visualizar a resposta diretamente no terminal, sendo ideal para testar e interagir com APIs, fazer download de arquivos e verificar conexões com servidores.

REST Client: uma extensão para o Visual Studio Code que permite realizar requisições HTTP diretamente no editor, sem a necessidade de ferramentas externas como Postman ou Insomnia. As requisições podem ser escritas em arquivos .http ou .rest e testadas no próprio editor.

Postman: uma ferramenta gráfica amplamente utilizada para teste e desenvolvimento de APIs. Ela permite enviar requisições HTTP (GET, POST, PUT, DELETE, etc.) e visualizar as respostas de forma organizada, sem a necessidade de comandos de terminal como o curl.

Insomnia: semelhante ao Postman, Insomnia é uma ferramenta de código aberto para desenvolver, testar e depurar APIs. Ela permite enviar requisições HTTP e HTTPS, gerenciar ambientes e variáveis, automatizar testes e organizar projetos.

Neste contexto, vamos usar o REST Client para testar os endpoints desta aplicação.  O uso da REST Client é bastante simples, mas, primeiro, busque pela extensão REST no VS Code:

Abra o VSCode.
Acesse o Marketplace de Extensões.
Pesquise por "REST Client" e clique em “Instalar” na extensão desenvolvida por Huachao Mao.

No plugin REST Client, cada requisição é organizada em seções simples dentro de um arquivo com extensão .http ou .rest. 

Sua sintaxe básica é muito simples, como demonstrado a seguir:

### Request 1
[GET|POST] [REST API URL] # Request Line
[Request Headers]
[Request Body]
### Request 2
[GET|POST] [REST API URL]
[Request Headers]
[Request Body]

A estrutura básica inclui a linha de requisição, que define o método HTTP (como GET ou POST) e a URL da API; seguida pelos cabeçalhos, que fornecem informações adicionais (como autenticação) em formato Chave: Valor; e, por fim, o corpo da requisição, usado para enviar dados em métodos como POST e PUT, geralmente em formato JSON. Separadas por ###, as requisições são independentes e podem ser executadas individualmente, tornando o teste de APIs prático e direto no Visual Studio Code.

Neste contexto, crie uma pasta nome “request” em seu projeto. Em seguida, dentro desta pasta, crie um arquivo com o nome de sua preferência com a extensão “.rest”, por exemplo, testes.rest.

Obs: No exemplo foi utilizado o nome "request", mas você pode usar o nome que desejar, o importante é que seja um padrão dentro da equipe de desenvolvimento.

Pronto! A seguir, vamos testar os diferentes endpoints de nossa aplicação.

4.5.1 Endpoint GET /users
No arquivo /tests/requests.rest, insira a seguinte requisição para o endpoint GET /users:

@baseUrl = http://localhost:8000
@json = application/json; charset=utf-8

###
# 1) LISTAR USUÁRIOS (GET /users)
# Esperado: 200 OK, array JSON de usuários
GET {{baseUrl}}/users
Accept: {{json}}

Após escrever a requisição, um link “Send Request” aparecerá acima dela. Clique nesse link para enviar a requisição. O REST Client enviará a requisição GET para o servidor PHP que está rodando no endereço http://localhost:8000/users. A resposta do servidor será exibida no painel de saída do REST Client, mostrando o código de status HTTP e o corpo da resposta em JSON.

Se o servidor estiver funcionando corretamente, você deverá receber uma resposta 200 OK com a lista de usuários, como o exemplo abaixo:

HTTP/1.1 200 OK
Host: localhost:8000
Date: Wed, 05 Nov 2025 12:45:59 GMT
Connection: close
X-Powered-By: PHP/8.2.12
Content-Type: application/json; charset=utf-8

[
  {
    "id": 1,
    "nome": "Ana Souza",
    "email": "ana.souza@ifrs.edu.br"
  },
  {
    "id": 2,
    "nome": "Bruno Carvalho",
    "email": "bruno.carvalho@ifrs.edu.br"
  },
  {
    "id": 3,
    "nome": "Carla Menezes",
    "email": "carla.menezes@ifrs.edu.br"
  }
]

4.5.2 Endpoint POST /users
No arquivo /tests/requests.rest, insira a seguinte requisição para o endpoint POST /users,  definindo o “Content-Type” como “application/json” e um corpo JSON para o novo usuário:

# Mantenha o código anterior do Endpoint GET /users

###
# 2) CRIAR USUÁRIO (POST /users)
# Esperado: 201 Created, JSON do novo usuário { id, nome, email }
POST {{baseUrl}}/users
Content-Type: {{json}}
Accept: {{json}}

{
  "nome": "Beatriz Teste",
  "email": "beatriz.teste@ifrs.edu.br"
}

Aqui, estamos enviando um novo usário com "nome": "Beatriz Teste" e "email": "beatriz.teste@ifrs.edu.br". Após escrever a requisição, um link “Send Request” aparecerá acima dela. Clique nesse link para enviar a requisição. 

Se o usuário for criado com sucesso, você deverá receber uma resposta 201 Created com o novo usuário, incluindo um ID gerado.

HTTP/1.1 201 Created
Host: localhost:8000
Date: Wed, 05 Nov 2025 12:52:17 GMT
Connection: close
X-Powered-By: PHP/8.2.12
Content-Type: application/json; charset=utf-8

{
  "id": "4",
  "nome": "Beatriz Teste",
  "email": "beatriz.teste@ifrs.edu.br"
}


4.5.3 Endpoint PUT /users/{id}
No arquivo /tests/requests.rest, insira a seguinte requisição para o endpoint PUT /users/{id}, substituindo {id} pelo ID do usuário que você deseja atualizar. Vamos usar 4 como exemplo. Defina o “Content-Type” como “application/json” e insira o corpo JSON com os dados atualizados do usuário.

@userId = 4

###
# 3) ATUALIZAR (PUT /users/{id})
# Esperado: 200 OK, JSON com dados atualizados (depende da sua implementação)
PUT {{baseUrl}}/users/{{userId}}
Content-Type: {{json}}
Accept: {{json}}

{
  "nome": "Beatriz Atualizada",
  "email": "beatriz.atualizada@ifrs.edu.br"
}

Neste exemplo, estamos atualizando o usuário com id: 4 para ter "nome": "Beatriz Atualizada" e "email": "beatriz.atualizada@ifrs.edu.br".  Após escrever a requisição, um link “Send Request” aparecerá acima dela. Clique nesse link para enviar a requisição. 

Se a atualização for bem-sucedida, você deverá receber uma resposta 200 OK com a confirmação da atualização do usuário atualizado.

HTTP/1.1 200 OK
Host: localhost:8000
Date: Wed, 05 Nov 2025 12:56:21 GMT
Connection: close
X-Powered-By: PHP/8.2.12
Content-Type: application/json; charset=utf-8

{
  "mensagem": "Usuário atualizado com sucesso"
}


4.5.4 Endpoint DELETE /users/{id}
No arquivo /tests/requests.rest, insira a seguinte requisição para o endpoint DELETE /users/{id}, substituindo {id} pelo ID do usuário que você deseja excluir. Vamos usar valor armazenado em @userId (id = 4) como exemplo. 

###
# 4) EXCLUIR (DELETE /users/{id})
# Esperado: 204 No Content (ou 200 OK com mensagem, conforme seu controller)
DELETE {{baseUrl}}/users/{{userId}}
Accept: {{json}}


Após escrever a requisição, um link “Send Request” aparecerá acima dela. Clique nesse link para enviar a requisição. Se a exclusão for bem-sucedida, você deverá receber uma resposta 200 OK com uma mensagem confirmando que o usuário foi deletado.

HTTP/1.1 200 OK
Host: localhost:8000
Date: Wed, 05 Nov 2025 12:58:27 GMT
Connection: close
X-Powered-By: PHP/8.2.12
Content-Type: application/json; charset=utf-8

{
  "mensagem": "Usuário excluído com sucesso"
}

4.5.5 Endpoint não encontrado
Vamos simular que testamos uma rota que não existe em nosso backend. Desta forma, no arquivo /tests/requests.rest, insira a seguinte requisição abaixo:

###
# 5) ERRO DE ROTA (404) — endpoint inexistente
GET {{baseUrl}}/nao-existe
Accept: {{json}}

Observe a resposta que recebemos ao clicarmos no link “Send Request” :

HTTP/1.1 404 Not Found
Host: localhost:8000
Date: Wed, 05 Nov 2025 12:59:19 GMT
Connection: close
X-Powered-By: PHP/8.2.12
Content-Type: application/json; charset=utf-8

{
  "erro": "Rota GET não encontrada"
}

4.6 Considerações Finais
Após a implementação das classes, controladores, rotas e configuração do banco de dados, a etapa de testes representa o momento em que o sistema “ganha vida”. É aqui que podemos observar, de forma concreta, como as diferentes camadas — modelo, controlador, roteador e banco de dados — interagem para atender a uma requisição e retornar uma resposta coerente ao cliente.

Os testes realizados com o REST Client do VS Code ou ferramentas equivalentes, como Postman ou Insomnia, permitem compreender o ciclo completo de uma API RESTful: cada requisição HTTP (GET, POST, PUT, DELETE) aciona um conjunto específico de funções no backend, que se conectam ao banco de dados, executam comandos SQL e retornam resultados no formato JSON. Esses testes demonstram, de forma prática, os princípios de comunicação cliente-servidor e a aplicação dos verbos HTTP na construção de sistemas modernos.

Mais do que uma simples verificação técnica, os testes oferecem uma oportunidade de reflexão sobre a qualidade e robustez do código. Erros de rota, falhas de conexão ou respostas inconsistentes são valiosas fontes de aprendizado: cada mensagem de erro permite compreender o papel das validações, do tratamento de exceções e da importância de mensagens claras para o usuário final. Ao observar os retornos e ajustar o código, desenvolvemos uma das competências mais importantes na área de programação — a capacidade de depurar e melhorar um sistema de forma iterativa.

Durante os testes, também é possível visualizar a importância do banco de dados MySQL na estrutura geral do backend. A confirmação de que os dados realmente são inseridos, lidos, atualizados e excluídos no banco reforça a ideia de que o backend não é apenas uma camada lógica, mas uma ponte entre a aplicação e o armazenamento persistente das informações. Essa compreensão consolida o aprendizado sobre a integração entre PHP, MySQL e APIs REST, pilares essenciais do desenvolvimento web dinâmico. 
-->