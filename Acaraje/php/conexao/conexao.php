<?php 

$conect = "localhost";
$root = "root";
$pass = "";
$banco = "acaraje";

$conexao = mysqli_connect($conect, $root, $pass, $banco) or die('Erro na conexão');
mysqli_set_charset($conexao, 'Utf8');

?>