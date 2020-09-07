<?php
require_once "php/conexao/conexao.php";
session_start();

$erros = [];
if (isset($_POST['btn-logar'])) {
	$usuario = mysqli_escape_string($conexao, $_POST['usuario']);
	$senha = mysqli_escape_string($conexao, $_POST['senha']);
	if(empty($usuario) or empty($senha)){
		$erros[] = 'Os campos não podem ficar em branco';
	}else{
		$sql = "SELECT login FROM administrador WHERE login = '$usuario'";
		$conn = mysqli_query($conexao, $sql);

		if(mysqli_num_rows($conn) > 0) {

			$sql = "SELECT * FROM administrador WHERE login = '$usuario' and senha = '$senha'";
			$conn = mysqli_query($conexao, $sql) or die('Erro na Conexão');


			if(mysqli_num_rows($conn)){
				$_SESSION['login'] = "logado";
				header('Location: funcionarios/pag_restrita.php');
			}else{
				$erros[] = 'Senha incorreta';				
			}
		}else{
			$erros[] = 'Usuário Inválido';			
		}
	}
}
?>