<!-- Modelos (acesso e manipulação de dados) -->

<?php
// ===============================================
// Modelo que representa a tabela 'usuarios'
// Essa classe faz a comunicação direta com o banco de dados,
// executando consultas SQL (SELECT, INSERT, UPDATE e DELETE).
// ===============================================

// Importa a classe de conexão com o banco de dados

require_once __DIR__ . '/../config/Database.php';

class User
{
    // Propriedades privadas
    private $conn;                  // Armazena a conexão PDO ativa
    private $table = "usuarios";    // Nome da tabela no banco de dados

    // -----------------------------------------------
    // Construtor: é chamado automaticamente ao criar o objeto
    // -----------------------------------------------
    public function __construct()
    {
        // Cria uma instância da classe Database
        $database = new Database();

        //Obtém a conexão com o banco e armazena em $this->conn
        $this->conn = $database->getConnection();
    }

    // ===========================================================
    // Retorna todos os registros da tabela 'usuarios'
    // ===========================================================
    public function buscarTodos(): array
    {
        // Monta o comando SQL
        $sql = "SELECT id, nome, email FROM {$this->table}";

        // Prepara o comando para execução segura
        $stmt = $this->conn->prepare($sql);

        // Executa o comando
        $stmt->execute();

        // Retorna todos os resultados em formado de array associativo
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // ===========================================================
    // Insere um novo usuário na tabela
    // ===========================================================
    public function criar(string $nome, string $email): array
    {
        // SQL para inserir um nome registro
        $sql = "INSERT INTO {$this->table} (nome, email) VALUES (:nome, :email)";

        // Prepara o comando
        $stmt = $this->conn->prepare($sql);

        // Associa os parâmetros aos valores recebidos
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);

        // Executa o comando INSERT
        $stmt->execute();

        // Recupera o ID gerado automaticamente pelo banco
        $id = $this->conn->lastInsertId();

        // Retorna os dados do novo usuário criado
        return ['id' => $id, 'nome' => $nome, 'email' => $email];
    }

    // ===========================================================
    // Altera nome e e-mail de um usuário existente
    // ===========================================================
    public function atualizar(int $id, array $dados): bool
    {
        //SQL de atualização com parâmetros nomeados
        $sql = "UPDATE {$this->table} SET nome = :nome, email = :email WHERE id = :id";

        // Prepara o comando SQL
        $stmt = $this->conn->prepare($sql);

        // Substitui os parâmetros pelos dados recebidos
        $stmt->bindParam(':nome', $dados['nome']);
        $stmt->bindParam(':email', $dados['email']);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        // Retorno true se a execução foi bem-sucessida
        $stmt->execute();
        return $stmt->rowCount() > 0; // Retorna true apenas se alguma linha foi realmente alterada/excluida
    }

    // ===========================================================
    // Remove um usuário do banco de dados
    // ===========================================================
    public function excluir(int $id): bool
    {
        //SQL de exclusão
        $sql = "DELETE FROM{$this->table} WHERE id = :id";

        // Prepara o comando SQL
        $stmt = $this->conn->prepare($sql);

        // Substitui o parâmetro :id pelo valor informado
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        // Ececuta o comando e retorna true-false
        $stmt->execute();
        return $stmt->rowCount() > 0; // Retorna true apenas se alguma linha foi realmente alterada/excluída
    }
}
?>

<!-- 
Vejamos como funciona este código:

Conexão com o banco: Ao criar um novo objeto User, o construtor (__construct) abre automaticamente a conexão MySQL usando a classe Database.

> Método buscarTodos():  Executa uma consulta SELECT que retorna todos os usuários como um array associativo (PDO::FETCH_ASSOC).
> Método criar():  Insere um novo registro e retorna o ID gerado automaticamente (lastInsertId()).  Usa prepared statements para evitar injeção de SQL. O uso de bindParam garante que o valor do ID seja tratado de forma segura.
> Método atualizar(): Atualiza os dados de um usuário específico. Retorna true em caso de sucesso ou false se falhar.
> Método excluir(): Remove um registro com base no ID recebido. Em caso de sucesso, o PDO retorna true. 
-->