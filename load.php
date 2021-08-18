<?php

require 'connection.php';

$sql = $pdo->query("SELECT * FROM produto");
if($sql->rowCount() > 0){
	foreach ($sql->fetchAll() as $value){
		echo "<h3>ID: ".$value['idProduto']."<h3>";
		echo "<h3>NOME PRODUTO : ".$value['nomeProduto']."<h3>";
		echo "<h3>PREÇO PRODUTO : ".$value['precoProduto']."<h3>";
	}
}