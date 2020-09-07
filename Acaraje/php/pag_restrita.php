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
				<a href="pag_restrita.html"><li class="active">Cadastro de Produtos</li></a>
				<a href="cadastrados.html"><li>Produtos Cadastrados</li></a>
			</ul>
		</div>
</header>

<div id="cadastro-produtos">
	<h1>Cadastro de produtos</h1>
	<form id="formum" action="#" method="POST">
		
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