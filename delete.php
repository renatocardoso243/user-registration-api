<?php
    include 'db.php';

    //Recebendo id do formulário enviado pelo React
    $data = json_decode(file_get_contents('php://input'), true);
    $id = $data['id'];

    //Deletar usuário do banco
    $stmt = $pdo->prepare('DELETE FROM users WHERE id = ?');
    if ($stmt->execute([$id])) {
        echo json_encode([ 'message' => 'Usuário excluído com sucesso!']);
    } else {
        echo json_encode(['message' => 'Erro ao excluir o usuário!']);
    }
?>