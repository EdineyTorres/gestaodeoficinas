<?php 
/*
 * Sistemas de Gestão para Oficinas Mecânicas
 * edineymartinstorres@gmail.com
 * Agosto/2021
 */
require_once("config.php");
@session_start();

try {
	$pdo = new PDO("mysql:dbname=$banco;host=$host; charset=utf8", "$usuario", "$senha");
	$conn = mysqli_connect($host, $usuario, $senha, $banco);
} catch (Exception $e) {
	echo 'Erro de conexão com o Banco de Dados' .$e;
}

 ?>