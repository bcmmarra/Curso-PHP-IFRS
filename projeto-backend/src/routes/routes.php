<!-- Definição de rotas e mapeamento de endpoints -->

<?php
// ===============================================
// Roteador baseado em método HTTP
// ===============================================

// Importa o controlador responsável pelas ações de usuário
require_once __DIR__ . '/../controllers/UserController.php';

// Define que todas as respostas serão retornadas em formato JSON
header('Content-Type: application/json; chaset=utf-8');

// Captura o caminho solicitado (ex.: /users ou /users/1)
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Captura o método HTTP da requisição (GET, POST, PUT, DELETE, etc.)
$method = $_SERVER['REQUEST_METHOD'];

// Cria uma instância do controlador para manipular as rotas
$controller = new UserController();

// Estrutura de decisão com base no método HTTP
switch($method){
    // -----------------------------------------------------------
    // Método GET → utilizado para listar ou buscar informações
    // -----------------------------------------------------------
    case 'GET':
        if ($path === '/users'){
            // Exemplo: GET /users → lista todos os usuários
            $controller->listarUsuarios();
        } else {
            // Rota não encontrada para o método GET
            http_response_code(404);
            echo json_encode(['erro' => 'Rota GET nã encontrada']);
        }
        break;

    // -----------------------------------------------------------
    // Método POST → utilizado para criar novos registros
    // -----------------------------------------------------------
    case 'POST':
        if ($path === '/users'){
            // Exemplo: POST /users → cria um novo usuário
            $controller->criarUsuario();
        } else {
            http_response_code(404);
            echo json_encode(['erro' => 'Rota POST não encontrada']);
        }
        break;

    // -----------------------------------------------------------
    // Método PUT → utilizado para atualizar registros existentes
    // -----------------------------------------------------------
    case 'PUT':
        // Verifica se a rota segue o padrão /users/{id}
        if (preg_match('#^/users/(\d+)$#', $path, $matches)){
            // $matches[1] captura o valor numérico do ID
            $controller->atualizarUsuario($matches[1]);
        } else {
            http_response_code(404);
            echo json_encode(['erro' => 'Rota PUT não encontrada']);
        }
        break;

    // -----------------------------------------------------------
    // Método DELETE → utilizado para excluir registros
    // -----------------------------------------------------------
    case 'DELETE':
        // Verifica se a rota segue o padrão /users/{id}
        if(preg_match('#^/users/(\d+)$#', $path, $matches)){
            // Chama o método de exclusão passando o ID encontrado
            $controller->excluirUsuario($matches[1]);
        } else {
            http_response_code(404);
            echo json_encode(['erro' => 'Rota DELETE não encontrada']);
        }
        break;
    // -----------------------------------------------------------
    // Outros métodos HTTP não suportados (ex.: PATCH, OPTIONS)
    // -----------------------------------------------------------
    default:
        http_response_code(405); // Código 405 -> Método não permitido
        echo json_encode(['erro' => 'Método HTTP não suportado']);
}
?>