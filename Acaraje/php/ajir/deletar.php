<?php

require_once "../conexao/conexao.php";
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$sql_delete = "DELETE FROM produtos WHERE id = $id";
	$conn_delete = mysqli_query($conexao, $sql_delete) or die('Erro ao deletar');

	if($conn_delete){
	mysqli_close($conexao);
	header('Location: ../../funcionarios/cadastrados.php?deletado=sucesso');
	}else{
	header('Location: ../../funcionarios/cadastrados.php?remover=erro');
	}
}

?>