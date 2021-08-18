<?php

try{
	$pdo = new PDO("mysql:dbname=bd_comercial;host=localhost","root","");
}catch(PDOException $e){
	echo "Error: ".$e->getMessage();
}