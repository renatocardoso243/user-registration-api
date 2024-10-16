<?php
include 'db.php'; // Certifique-se de que o arquivo db.php esteja configurado corretamente.

try {
    $pdo->query("SELECT 1");
    echo 'Conexão com o banco de dados bem-sucedida!';
} catch (PDOException $e) {
    echo 'Erro ao conectar ao banco de dados: ' . $e->getMessage();
}
?>