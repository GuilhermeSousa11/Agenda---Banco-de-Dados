<?php
# endereço do servidor de banco de dados
$host = 'localhost';
# database ou schema
$db = 'agenda';
# usuario
$user = 'agenda_guilherme';
# senha
$password = 'agenda321';

$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
	$pdo = new PDO($dsn, $user, $password);

	if ($pdo) {
		# echo "Conectado ao schema $db com sucesso";
	}
} catch (PDOException $e) {
	echo "Erro: ".$e->getMessage();
}
?>