<?php

function connectdb() {
    $server = 'localhost';
    $user = 'root';
    $password = 'root';
    $database = 'pierre_sofip';
    $port= 8889; 

    try {
        $con = new PDO("mysql:host=$server;dbname=$database", $user, $password);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $con;
    } 

    catch(PDOException $e) {
        echo 'N° : ' . $e->getCode() . '<br>';
        die('Erreur : ' . $e->getMessage() . '<br>');
    }
}

?>