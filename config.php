<?php 
$db_host = "localhost";
$db_name = "todo_list";
$db_user = "root";
$db_pass = "";

$pdo = new PDO("mysql:dbname=$db_name;host=$db_host;", $db_user, $db_pass);
$array = [
    'message' => "Erro ao se comunicar com o servidor",
    'result' => false,
    'code' => 'CONNECTION_REFUSED'
];