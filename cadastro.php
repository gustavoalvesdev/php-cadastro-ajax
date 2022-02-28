<?php 

require 'conexao.php';

if (isset($_POST['cidade']) && !empty($_POST['cidade']) && isset($_POST['uf']) && !empty($_POST['uf'])) {

	$cidade = addslashes($_POST['cidade']);
	$uf = addslashes($_POST['uf']);
	$ativo = 1;

	$sql = $pdo->prepare("INSERT INTO cidade(cidade, uf, ativo) VALUES(:cidade, :uf, :ativo)");
	$sql->bindValue(':cidade', $cidade);
	$sql->bindValue(':uf', $uf);
	$sql->bindValue(':ativo', $ativo);

	try {
		$sql->execute();
		echo 'Cidade cadastrada com sucesso!';
	} catch(Exception $ex) {
		echo 'Falha ao cadastrar cidade!';
		die();
	}

} else {

	echo 'Todos os campos devem ser preenchidos!!!';

}
