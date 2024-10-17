<?php
  // Informações do banco de dados do Supabase
  $host = 'aws-0-sa-east-1.pooler.supabase.com';
  $dbname = 'postgres';
  $username = 'postgres.xzdqjbcapveyyomwdsql';
  $password = 'YgyKL5Luj071Xgx1';
  $port = '6543'; // Porta padrão SUPA BASE

  try {
    // Criar a conexão com o banco de dados usando PDO
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
    $pdo = new PDO($dsn, $username, $password);

    // Definir o modo de erro para exceções
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Conexão bem-sucedida com o banco de dados do Supabase XÊra meu saco!";
  } catch (PDOException $e) {
    // Exibir erro em caso de falha na conexão
    die("Erro ao conectar: " . $e->getMessage());
  }
?>