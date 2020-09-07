<?php
 require_once "../php/ajir/seguranca.php"; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Acesso Restrito</title>
	<link rel="stylesheet" type="text/css" href="../css/style-restrito.css">
</head>
<body>
<header id="cabecalho">
	<h1>Área dos funcionários</h1>
		<div id="lista">
			<ul>
				<a href="pag_restrita.php"><li>Cadastro de Produtos</li></a>
				<a href="cadastrados.php"><li  class="active">Produtos Cadastrados</li></a>
				<a href="../php/ajir/logoff.php" class="btn">Sair</a>
			</ul>
		</div>
</header>

<div id="cadastro-produtos">
	<h1>Produtos já cadastrados</h1>
</div>
	
	<div class="form-cardapio" action="#" method="POST">
		<!--Bloco de Repetição -->
	<?php
	 if(isset($_GET['remover']) and $_GET['remover'] = 'error'){
		echo '<p class="att">Erro ao deletar</p>';
		}
	if(isset($_GET['deletado']) and $_GET['deletado'] = 'sucesso') {
		echo '<p class="att">Produto removido com sucesso</p>';
	}

	require_once "../php/conexao/conexao.php";
	$sql = "SELECT * FROM produtos";
	$conn = mysqli_query($conexao, $sql);

	while ($dados = mysqli_fetch_array($conn)) {
		$produto = $dados['produto'];
		$ingredientes = $dados['ingredientes'];
		$valor = $dados['valor'];
		$valor = number_format($valor, 2, ',', '.');
	?>
	<table border="1" class="cardapio">
		<tr>
			<td>Produto</td>
			<td>Ingredientes</td>
			<td>Valor</td>
		</tr>
	
		<tr>
			<td><?= $produto;?></td>
			<td><?= $ingredientes;?></td>
			<td><?= $valor?></td>
		</tr>
	</table>
		<form class="form-cardapio" action="att-produto.php" method="POST">
		<input type="hidden" name="id" value="<?= $dados['id']; ?>">
		<button class="btn" name="att-produto">Atualizar</button>
		<a href="../php/ajir/deletar.php?id=<?= $dados['id']; ?>" class="btn-1" name="deletar" >Deletar</a>
		</form>

	<?php  }?>
	
	</div>

</body>
</html>	