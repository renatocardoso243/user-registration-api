<?php
    include 'db.php';

    //Receber dados do formulário enviado pelo React
    $data = json_decode(file_get_contents('php://input'), true);
    $id = $data['id'];
    $name = $data['name'];
    $email = $data['email'];
    $password = isset($data['password']) && !empty($data['password']) ? password_hash($data['password'], PASSWORD_DEFAULT) : null;
    
    //Atualizar dados no banco
    if ($password) {
        $stmt = $pdo->prepare('UPDATE users SET name = ?, email = ?, password = ? WHERE id = ?');
        $stmt->execute([$name, $email, $password, $id]);
    } else {
        $stmt = $pdo->prepare('UPDATE users SET name = ?, email = ? WHERE id = ?');
        $stmt->execute([$name, $email, $id]);
    }
    
    if ($stmt) {
        echo json_encode(['message' => 'Usuário atualizado com sucesso!']);
    } else {
        echo json_encode(['message' => 'Erro ao atualizar o usuário.']);
    }
    ?>