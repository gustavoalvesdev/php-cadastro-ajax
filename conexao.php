<?php 

$pdo = null;

try {
	$pdo = new PDO('mysql:host=localhost;dbname=cidadesajax', 'root', '');
} catch(PDOException $ex) {
	echo 'Falha no banco de dados!!!';
	die();
}
