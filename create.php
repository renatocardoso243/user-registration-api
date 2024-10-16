<?php
    include 'db.php';

    //RECEBENDO DADOS DO FORMULÁRIO ENVIADO PELO REACT
    $data = json_decode(file_get_contents('php://input'), true);
    $name = $data['name'];
    $email = $data['email'];
    $password = pasword_hash($data['password'], PASSWORD_DEFAULT);

    //INSERINDO NOVO USUÁRIO NO BANCO DE DADOS
    $stmt = $pdo->prepare('INSERT INTO users (name, email, password) VALUES (?, ?, ?)');
    if ($stmt -> execute([$name, $email, $password])) {
        echo json_encode(['message' => 'Usuário criado com sucesso!']);
    } else {
        echo json_encode(['message' => 'Erro ao criar o usuário!']);
    }


?>