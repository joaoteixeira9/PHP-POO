<?php
    $pdo = require 'conn.php';
    $sql = 'INSERT INTO bebidas(nome) VALUES(?)';

    $prepare = $pdo->prepare($sql);
    $prepare->bindParam(1, $_GET['nome']);
    $prepare->execute();
    echo $prepare->rowCount();
?>