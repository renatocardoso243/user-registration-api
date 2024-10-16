<?php
    //Conexão com db postgress
    $host = 'aws-0-sa-east-1.pooler.supabase.com';
    $db = 'postgres';
    $user = 'postgres.xzdqjbcapveyyomwdsql';
    $pass = '2wX8BD650UaWOW2w';

    $dsn = 'pgsql:host=$host;dbname=$db';

    try {
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch (PDOException $e) {
        die('Erro ao conectar com o banco de dados: ' . $e->getMessage());
    }
?>