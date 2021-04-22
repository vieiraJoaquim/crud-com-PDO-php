<?php
//Conexão com o banco
$db_name = 'test';
$dbhost = 'localhost';
$db_user = 'root';
$db_pass = '';

$pdo = new PDO("mysql:dbname=".$db_name.";host=".$dbhost, $db_user, $db_pass);