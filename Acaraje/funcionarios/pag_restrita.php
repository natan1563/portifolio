<?php 
require_once "../php/ajir/seguranca.php"; 
require_once "../php/ajir/insere_produtos.php"
	
; 
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
				<a href="pag_restrita.php"><li class="active">Cadastro de Produtos</li></a>
				<a href="cadastrados.php"><li>Produtos Cadastrados</li></a>
				<a href="../php/ajir/logoff.php" class="btn">Sair</a>
			</ul>
		</div>
</header>

<div id="cadastro-produtos">
	<h1>Cadastro de produtos</h1>
			<?php
			if(isset($_GET['cadastro']) and $_GET['cadastro'] = 'sucesso'){
				$erros[] = 'Cadastro realizado com sucesso!';
			}
			if(isset($erros) and !empty($erros)){
			foreach ($erros as $erro) {
				echo '<p class="erro att">'.$erro.'</p>';
			} 
			}?>
	<form id="formum" action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
		<label for="produto" class="lab-form">Produto:</label>
		<input type="text" name="produto" class="form" placeholder="Nome do Produto">
		<label for="ingredientes" class="lab-form">Ingredientes:</label>
		<input type="text" name="ingredientes" class="form" placeholder="Ingredientes">
		<label for="valor" class="lab-form">Valor:</label>
		<input type="text" name="valor" class="form" placeholder="Valor">
		<input type="submit" name="btn-cadastrar" id="buttom" value="Cadastrar">
	</form>
</div>

<footer>
	
</footer>
</body>
</html>