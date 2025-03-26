<?php
    $pdo = require 'conn.php';
    $sql = 'DELETE FROM bebidas WHERE id = ?';

    $prepare = $pdo->prepare($sql);
    $prepare->bindParam(1, $_GET['id']);
    $prepare->execute();
    echo $prepare->rowCount();
?>