<?php 
require_once '../php/conexao/conexao.php';
$erros = [];

if(isset($_POST['btn-cadastrar'])){
	$produto = mysqli_escape_string($conexao, $_POST['produto']);	
	$ingredientes = mysqli_escape_string($conexao, $_POST['ingredientes']);	
	$valor = mysqli_escape_string($conexao, $_POST['valor']);

	if (empty($produto) or empty($ingredientes) or empty($valor)) {
			$erros[] = 'Os campos não podem ficar em branco';			
		}else{
			$valor = str_replace(',', '.', $valor);
			$sql = "INSERT INTO produtos (produto, ingredientes, valor) VALUES ('$produto', '$ingredientes', '$valor')";
			$conn = mysqli_query($conexao, $sql);
			print_r($sql);
			mysqli_close($conn);
			header('Location: ?cadastro=sucesso');
	}	

}