<?php 	
	if(isset($_POST['att-produto'])) 
{
		$id = $_POST['id'];
		header('Location: att-produto?id='.$id);
}
	if(isset($_POST['btn-atualizar']))
	{			
		$produto = $_POST['produto'];
		$ingredientes = $_POST['ingredientes'];
		$valor = $_POST['valor'];
		$valor = str_replace(',', '.', $valor);	
		$id = $_GET['id'];

		if(empty($produto) || empty($ingredientes) || empty($valor)
		){
		echo 'Os campos não podem ficar em branco';
		}else
		{

		$sql = "UPDATE produtos SET produto ='$produto', ingredientes = '$ingredientes', valor = '$valor' WHERE id = $id";					 

		if(mysqli_query($conexao, $sql))
		{
		echo '<center class="att">Atualizado com sucesso!!</center>';
		}else
		{
		echo '<center class="att">Erro ao atualizar, tente novamente.</center>';
		}

	}
		
}				
?>