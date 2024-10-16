<?php
    include 'db.php';

    //Receber dados do formulário enviado pelo React
    $data = json_decode(file_get_contents('php://input'), true);
    $id = $data['id'];
    $name = $data['name'];
    $email = $data['email'];
    
    //Atualizar dados no banco
    $stmt = $pdo->prepare('UPDATE users SET name = ?, email = ? WHERE id = ?');
    if ($stmt->execute([$name, $email, $id])) {
        echo json_encode([ 'message' => 'Usuário atualizado com sucesso!']);
    } else {
        echo json_encode(['message' => 'Erro ao atualizar o usuário!']);
    }
?>