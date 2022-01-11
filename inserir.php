<?php
    header('Content-Type: application/json');

    $name = $_POST['name'];
    $comment = $_POST['comment'];

    $pdo = new PDO('mysql:host=127.0.0.1;port=3308;dbname=bd-comment;', 'root', '');

    $stmt = $pdo->prepare('INSERT INTO comments (name, comment) VALUES (:na, :co)');
    $stmt->bindValue(':na', $name);
    $stmt->bindValue(':co', $comment);
    $stmt->execute();

    if ($stmt->rowCount() >= 1) {
        echo json_encode('Comentário Salvo com Sucesso');
    } else {
        echo json_encode('Falha ao salvar comentário');
    }