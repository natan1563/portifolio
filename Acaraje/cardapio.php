<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lia do Acarajé</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<header>
	
	<div class="container">
		
		<div class="quebra">
		<h1 class="titulo-2">Confira nossas ofertas</h1>
		<ul id="menu">
			<li><a class="line" href="index.php">Início</a></li>
			<li><a class="line active">Cardápio</a></li>
			<li><a class="line" href="restrito.php">Acesso Restrito</a></li>
		</ul>
		</div>
	</div>
	
</header>

<?php /*Cardapio */ require_once 'funcionarios/req_cardapio.php'; ?>	

<footer class="footer_container-2">
	<div class="footer">
		<h4>Nosso endereço: Rua 2 de Julho, Nº 300 |  Telefone para contato: (71) 99028-9345 | &copyNATech - Desenvolvimento de Web Sites</h4>
	</div>
</footer>
</body>
</html>