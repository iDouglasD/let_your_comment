<?php
    header('Content-Type: application/json');

    $pdo = new PDO('mysql:host=127.0.0.1;port=3308;dbname=bd-comment;', 'root', '');

    $stmt = $pdo->prepare('SELECT * FROM comments');
    $stmt->execute();

    if ($stmt->rowCount() >= 1) {
        echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
    } else {
        echo json_encode('Nenhum comentário encontrado');
    }