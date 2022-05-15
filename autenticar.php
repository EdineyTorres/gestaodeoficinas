<?php 
/*
 * Sistemas de Gestão para Oficinas Mecânicas
 * edineymartinstorres@gmail.com
 * Agosto/2021
 */
require_once("conexao.php");
@session_cache_expire(120);
@session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if(empty($usuario) || empty($senha)){
	echo "<script language='javascript'>window.location='index.php'; </script>";
}else{
	$res = $pdo->prepare("SELECT * FROM usuarios_sac where nome = :usuario and senha = :senha");
	$res->bindValue(":usuario", $usuario);
	$res->bindValue(":senha", $senha);
	$res->execute();

	$dados = $res->fetchAll(PDO::FETCH_ASSOC);
	$linhas = count($dados);

	if($linhas > 0){
		
		$_SESSION['nome_usuario'] = $dados[0]['nome'];
		$_SESSION['email_usuario'] = $dados[0]['email'];
		$_SESSION['nivel_usuario'] = $dados[0]['cargo'];
		$_SESSION['cpf_usuario'] = $dados[0]['cpf'];

		if($_SESSION['nivel_usuario'] == 'Administrador'){
			echo "<script language='javascript'>window.location='adm'; </script>";
		}

		if($_SESSION['nivel_usuario'] == 'Atendente'){
			echo "<script language='javascript'>window.location='atendente'; </script>";
		}


		if($_SESSION['nivel_usuario'] == 'Usuario'){
			echo "<script language='javascript'>window.location='usuario'; </script>";
		}

	}else{
		echo "<script language='javascript'>window.alert('Usuário ou Senha Incorretos!'); </script>";
		echo "<script language='javascript'>window.location='index.php'; </script>";
	}

}

 ?>