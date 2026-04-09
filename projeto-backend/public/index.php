<!--
Ponto de entrada principal do sistema .

Inicializar o ambiente do servidor: Carrega configurações básicas, define cabeçalhos HTTP e configura o tipo de resposta (geralmente JSON em APIs).

Carregar o roteamento: Inclui o arquivo responsável por identificar o caminho (rota) e o método HTTP da requisição.

Gerenciar o fluxo de execução: Encaminha a requisição para o controlador e retorna uma resposta ao cliente.
 -->

<?php
// ===============================================
// Arquivo principal de entrada da aplicação PHP
// ===============================================

// Define que o retorno será em formato JSON
header('Content-Type: application/json; charset=utf-8');
// O cabeçalho Content-Type informa ao navegador ou cliente HTTP que a resposta será em formato JSON, padrão em APIs RESTful.

// Ativa a exibição de erros (apenas em ambiente de testes)
ini_set('display_errors', 1);
error_reporting(E_ALL);
// As diretivas ini_set() e error_reporting() ativam a exibição de erros para fins de aprendizado — uma boa prática em ambiente de desenvolvimento, mas não em produção.

// Carrega o roteamento da aplicação
require_once __DIR__ . '/../src/routes/routes.php';
// O comando require_once importa o arquivo responsável por gerenciar as rotas e encaminhar a execução ao controlador correto.
?>