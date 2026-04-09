<!-- Classe de conexão ao banco de dados -->

<?php
// ===============================================
// Classe de conexão com o banco de dados MySQL
// Essa classe centraliza a criação da conexão PDO,
// facilitando o acesso ao banco em todo o sistema.
// ===============================================

class Database
{
    // -----------------------------------------------
    // Propriedades privadas de configuração
    // -----------------------------------------------

    private $host = "localhost";
    private $db_name = "sistema_php";
    private $usernamen = "root";
    private $password = "";
    private $conn;

    // -----------------------------------------------
    // Método responsável por criar e retornar a conexão
    // -----------------------------------------------
    public function getConnection(): PDO
    {
        $this->conn = null;

        try {
            $this->conn = new PDO(
                "mysql:host={$this->host};dbname={$this-> db_name}; charset=utf8",
                $this->username,
                $this->password
            );
            // Define o modo de erro do PDO para lançar exceções
            // Isso facilita o tratamento de erros no código
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // Caso ocorra algum erro de conexão (ex.: banco inexistente, senha errada),
            // o sistema retorna uma mensagem JSON com o erro.
            echo json_encode(["erro" => "Erro ao conectar ao banco: " . $e->getMessage()]);
            exit; // Interrompe a execução do script
        }
        // Retorna o objeto de conexão PDO para ser usado em outras classes (ex.: modelo)
        return $this->conn;
    }
}
?>