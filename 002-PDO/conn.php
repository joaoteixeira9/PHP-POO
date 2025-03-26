<?php
    $pdo = null;
    
    try{
        $pdo = new PDO('mysql:host=localhost; dbname=bd_adega', 'root', '');
    }catch (Exception $e){
        echo $e->getMessage();
        exit();
    }
    return $pdo;
?>