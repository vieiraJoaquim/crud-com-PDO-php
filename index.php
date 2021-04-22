<?php
//Conexão com o banco
$pdo = new PDO("mysql:dbname=test;host=localhost", "root", "");

$sql = $pdo->query('SELECT * FROM usuarios');

$dados = $sql->fetchAll( PDO::FETCH_ASSOC);

echo '<pre>';
print_r($dados);