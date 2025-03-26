<?php

    require 'Produto.php';
    $produto = new Produto();

    switch ($_GET['operacao']) {
        case 'read':
            echo '<h3>Bebidas</h3>';
            foreach($produto->read() as $value){
            echo '<strong>ID:</strong> ' .$value['id']. ' <strong>Nome: </strong>'.$value['nome']. '<br>';
            }
            break;
        case 'create':
            $status = $produto->create('João Teixeira');

            if(!$status){
                echo 'Não foi possível executar a operação!';
                return false;
            }
            echo 'Registro inserido com sucesso!';
            break;
        case 'update':
            $produto->update(90.00, 18);
            break;
        case 'delete':
            $produto->delete(18);
            break;
    }  
?>