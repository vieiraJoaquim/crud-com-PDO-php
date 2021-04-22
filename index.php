<?php
require 'config.php';
?>

<a href="adicionar.php">ADICOINAR USER</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>
</table>
<?php
/*Puxar os dados do banco
$sql = $pdo->query('SELECT * FROM usuarios');

$dados = $sql->fetchAll( PDO::FETCH_ASSOC);

echo '<pre>';
print_r($dados);*/