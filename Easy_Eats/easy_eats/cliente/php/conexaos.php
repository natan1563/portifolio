<?php
$servidor = "sql301.epizy.com";
$usuario = "epiz_24602351";
$senha = "H9FjxwmjyPjQ";
$banco = "epiz_24602351_easy_eats";


$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

mysqli_set_charset($conexao, "utf8");

if(mysqli_connect_error($conexao)){
	echo 'Erro de conexao: '.mysqli_connect_error($conexao);
}




?>