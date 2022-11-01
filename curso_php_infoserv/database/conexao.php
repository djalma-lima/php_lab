<?php
// Variaveis para conexao com o banco.
$hostname = "localhost";
$username = "root";
$password = "";
$database = "php_lab";
$port = "3306";

$connection = mysqli_connect(
    $hostname,
    $username,
    $password,
    $database,
    $port);

$dontConnectiuon = $connection == null || $connection == false || $connection == [];

if ($dontConnectiuon) {
    echo "deu ruim, nao conectou no banco.";
    exit; // encerro o script do php.
}

// var_dump($connection);
//echo "Conexao realizada.";
