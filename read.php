<?php
    include 'db.php';

    //Buscar todos os usuários no banco de dados
    $stmt = $pdo->query('SELECT * FROM users');
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //Retorna os usuários em formato JSON
    echo json_encode($users);
?>