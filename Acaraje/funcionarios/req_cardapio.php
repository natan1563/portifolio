	<div class="form-cardapio" action="#" method="POST">
	<link rel="stylesheet" type="text/css" href="css/style-cardapio.css">
	
	<?php 
	/*Cardápio para página de clientes */

	require_once "php/conexao/conexao.php";
	
	$sql = "SELECT * FROM produtos";
	$conn = mysqli_query($conexao, $sql);

	while ($dados = mysqli_fetch_array($conn)) {
		$produto = $dados['produto'];
		$ingredientes = $dados['ingredientes'];
		$valor = $dados['valor'];
		$valor = number_format($valor, 2, ',', '.');
	?>
	<div id="contain-table">
	<table border="1" class="cardapio">
		<tr id="title">
			<td>Produto</td>
			<td>Ingredientes</td>
			<td>Valor</td>
		</tr>
	
		<?php
		 if(isset($_GET['deletado']) and $_GET['deletado'] = 'erro'){
			echo 'Erro ao deletar';
			}
		if(isset($_GET['deletado']) and $_GET['deletado'] = 'sucesso') {
			echo 'Produto removido com sucesso';
		}
		?>
		<tr>
			<td><?= $produto;?></td>
			<td><?= $ingredientes;?></td>
			<td><?= $valor?></td>
		</tr>
	</table>
	</div>
	<?php  }?>
	
	</div>
