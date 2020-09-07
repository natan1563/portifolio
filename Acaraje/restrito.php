<?php require_once "login.php"; ?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lia do Acarajé</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<head>

<header>	

<div class="container">
	<div class="quebra">
	<h1 class="titulo">Faça seu login administrativo</h1>
		<ul id="menu">
		<li><a class="line" href="index.php">Início</a></li>
		<li><a class="line" href="cardapio.php">Cardápio</a></li>
		<li><a class="line active">Acesso Restrito</a></li>
		</ul>
	</div>
</div>
	
</header>

<div id="area">
	<form id="formulario" action="#" method="POST">
			<fieldset>
			<legend>Acesso Restrito</legend>
			<?php
			if(isset($erros) and !empty($erros)){
			foreach ($erros as $erro) {
				echo '<li class="erro">'.$erro.'</li>';
			} 
			}?>
			<table id="table">
			<tr><td><label>Usuário</label>
			<input type="text" name="usuario" class="campo_form"placeholder="Digite seu usuário">
			<label>Senha</label>
			<input type="password" name="senha" class="campo_form" placeholder="Digite sua senha">
			</td></tr>
			</table>	
			<input type="submit" value="Entrar" name="btn-logar" id="btn-entrar">	
		</fieldset>
	</form>
</div>


<footer class="footer_container-2">
	<div class="fundo"></div>
	<div class="footer">
		<h4>Nosso endereço: Rua 2 de Julho, Nº 300 |  Telefone para contato: (71) 99028-9345 | &copyNATech - Desenvolvimento de Web Sites</h4>
	</div>

</footer>
</body>
</html>