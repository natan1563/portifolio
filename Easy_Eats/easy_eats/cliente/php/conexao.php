<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "easy_eats";


$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

mysqli_set_charset($conexao, "utf8");

if(mysqli_connect_error($conexao)){
	echo 'Erro de conexao: '.mysqli_connect_error($conexao);
}




?>