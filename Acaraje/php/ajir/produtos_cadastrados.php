<?php
	require_once "../php/conexao/conexao.php";

	$sql = "SELECT * FROM produtos";
	$conn = mysqli_query($conexao, $sql);

	 if(mysqli_num_rows($conn) < 1){
	 	$produto = '-';
	 	$ingredientes = '-';
	 	$valor = '-';

	 	echo "$produto $ingredientes $valor";
	 }
	while ($dados = mysqli_fetch_array($conn)) {
		$produto = $dados['produto'];
		$ingredientes = $dados['ingredientes'];
		$valor = $dados['valor'];
	}
?>