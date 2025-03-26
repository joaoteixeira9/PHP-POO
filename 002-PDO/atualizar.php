<?php
    $pdo = require 'conn.php';
    $sql = 'UPDATE bebidas SET preco = ? WHERE id = ?';

    $prepare = $pdo->prepare($sql);
    $prepare->bindParam(1, $_GET['preco']);
    $prepare->bindParam(2, $_GET['id']);
    $prepare->execute();
    echo $prepare->rowCount();
?>