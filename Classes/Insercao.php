<?php
require_once __DIR__ . '/Conexao.php';

class Insercao {
    private $db;

    public function __construct() {
        try {
            $this->db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
            ]);
        } catch (PDOException $e) {
            die('Erro ao conectar ao banco de dados: ' . $e->getMessage());
        }
    }

    public function inserirUsuario($nome, $telefone, $email, $observacao) {
        $stmt = $this->db->prepare("
            INSERT INTO usuarios (nome, telefone, email, observacao)
            VALUES (:nome, :telefone, :email, :observacao)
        ");

        $stmt->execute([
            ':nome' => htmlspecialchars(strip_tags($nome)),
            ':telefone' => htmlspecialchars(strip_tags($telefone)),
            ':email' => filter_var($email, FILTER_SANITIZE_EMAIL),
            ':observacao' => htmlspecialchars(strip_tags($observacao))
        ]);

        echo "Usuário cadastrado com sucesso!";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nome'], $_POST['telefone'], $_POST['email'])) {
    (new Insercao())->inserirUsuario(
        $_POST['nome'], $_POST['telefone'], $_POST['email'], $_POST['observacao'] ?? ''
    );
} else {
    echo "Preencha todos os campos obrigatórios!";
}
