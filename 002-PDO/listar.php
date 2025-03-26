
<?php
    $pdo = require 'conn.php'; 
    $sql = 'SELECT id, nome FROM bebidas';

    echo '<h3>Bebidas</h3>';
    foreach($pdo->query($sql) as $key=>$value){
        echo '<strong>ID:</strong> ' .$value['id']. ' <strong>Nome: </strong>'.$value['nome']. '<br>';
    }
?>