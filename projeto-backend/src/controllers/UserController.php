<!-- Controladores (lógica da aplicação) -->

<?php
// ===============================================
// Classe responsável por gerenciar as ações de usuários
// Faz a ponte entre as requisições vindas do roteador
// e as operações realizadas pelo modelo (User.php)
// ===============================================

// Importa o arquivo que contém a classe User (modelo)
require_once __DIR__ . '/../models/User.php';

class UserController
{
    // ==================================================
    // Retorna todos os usuários cadastrados
    // ==================================================
    public function listarUsuarios(): void
    {
        $userModel = new User(); // Cria uma instância do modelo
        $usuarios = $userModel->buscarTodos(); // Chama o método que busca todos os registros
        $this->respostaJson($usuarios); // Retorna os dados no formato JSON
    }

    // ==================================================
    // Cadastra um novo usuário
    // ==================================================
    public function criarUsuario(): void
    {
        // Lê o corpo da requisição e converte o JSON em array PHP
        $dados = json_decode(file_get_contents('php://input'), true);

        // Verifica se o JSON foi enviado malformado (faltando uma vírgula, por exemplo)
        if (json_last_error() !== JSON_ERROR_NONE){
            $this->respostaJson(['erro' => 'JSON inválido'], 400);
            return;
        }
        // Verifica se os campos obrigatórios foram enviados
        if (empty($dados['nome']) || empty($dados['email'])) {
            $this->respostaJson(['erro' => 'Campos obrigatórios: nome e email'], 400);
            return; // Encerra o método se os dados estiverem incompletos
        }

        // Chama o modelo para inserir os dados no banco
        $userModel = new User();
        $novo = $userModel->criar($dados['nome'], $dados['email']);

        // Retorna o usuário criado com código 201 (Created)
        $this->respostaJson($novo, 201);
    }

    // ==================================================
    // Atualiza os dados de um usuário existente
    // ==================================================
    public function atualizarUsuario(int $id): void
    {
        // Lê o corpo da requisição e converte o JSON em array
        $dados = json_decode(file_get_contents('php://input'), true);

        // Se nenhum dado foi enviado, retorna erro
        if (empty($dados)){
            $this->respostaJson(['erro' => 'Nenhum dado recebido'], 400);
            return;
        }

        $userModel = new User();
        $atualizado = $userModel->atualizar($id, $dados);

        if ($atualizado) {
            // Retorna mensagem de sucesso
            $this->respostaJson(['mensagem' => 'Usuário atualizado com sucesso']);
        } else {
            // Se o ID não existir, retorno erro 404
            $this->respostaJson(['erro' => 'Usuário não encontrado'], 404);
        }
    }

    // ==================================================
    // Exclui um usuário do banco de dados
    // ==================================================
    public function excluirUsuario(int $id): void
    {
        $userModel = New User();
        $excluido = $userModel->excluir($id);

        if($excluido) {
            $this->respostaJson(['mensagem' => 'Usuários excluíds com sucesso']);
        } else {
            $this->respostaJson(['erro' => 'Usuário não encontrado'], 404);
        }
    }

    // ==================================================
    // Padroniza todas as respostas da API
    // ==================================================
    private function respostaJson($dados, int $status = 200): void
    {
        http_response_code($status); // Define o código HTTP da resposta
        header('Content-Type: application/json; charser=utf-8'); // Define o tipo de conteúdo
        echo json_encode($dados, JSON_UNESCAPED_UNICODE); // Converte o array em JSON
        exit; // Encerra o script após enviar a resposta
    }
}
?>

<!-- 
listarUsuarios() → obtém todos os registros chamando o modelo User e retorna o resultado em formato JSON.
criarUsuario() → lê o corpo JSON da requisição (php://input), valida os dados obrigatórios e aciona o método de criação no modelo.
atualizarUsuario() → recebe um ID e um conjunto de dados para atualizar, verificando se o corpo da requisição não está vazio.
excluirUsuario() → chama o modelo para excluir o registro e envia mensagens diferentes conforme o sucesso da operação.
respostaJson() → padroniza o formato das respostas e o código HTTP, mantendo consistência em toda a API.
-->