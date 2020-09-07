
<?php
require_once "logoff.php";
$erro = [];
?>

<head>
    <meta charset="UTF-8">
</head>

<form name="frmBusca" action="<?= $_SERVER['PHP_SELF']; ?>?a=buscar" method="POST">
	<input type="text" name="palavra" class="inLog campo" placeholder="Pesquise pelo nome do produto">
	<input type="submit" value="Buscar" name="btn-buscar"class="btn">
</form>

<?php
if(isset($_POST['btn-buscar'])){
	
	//pega a palavra
	$palavra = trim($_POST['palavra']);
	if(empty($_POST['palavra'])){
		$erro[] = 'Campo de busca não pode ficar em branco';
	}else{
	$sql_busca = "SELECT * FROM pedidos WHERE produto LIKE '%".$palavra."%' ORDER BY produto";
	$conn_busca = mysqli_query($conexao, $sql_busca);

	if(mysqli_num_rows($conn_busca) > 0){
		
		while($conn_dados = mysqli_fetch_array($conn_busca)){
		$conn_quebra = 	$conn_dados[0].'#'.$conn_dados[1].'#'.$conn_dados[2].'#'.$conn_dados[3].'#'.$conn_dados[4].'#'.$conn_dados[5].'#'.$conn_dados[6];

		$conn_quebrado = explode('#', $conn_quebra);
		$number = number_format($conn_quebrado[2], 2, ',', '.');
		if($_SESSION['perfil_id'] == $conn_quebrado[6]){	
		?>
		<div class="orders">
            <div class="order">
                <div class="hashtag"><img src="../ativos/imagens/logo2.png" class="hashtag" alt="comida"></div>
                <div class="pic-info card-body">        <h2 class="card-title"><?='Resultado da Pesquisa: '.$conn_quebrado[1]; ?></h2>
                <p class="card-text"><?= 'Nº do Pedido: '.$conn_quebrado[0]; ?></p>
                <p class="card-text"><?= 'Ingredientes: '.$conn_quebrado[3]; ?></p>
                <p class="card-text"><?= 'Valor: R$ '.$number;  ?></p>
                <p class="card-text"><?= 'Cliente: '.$conn_quebrado[5]; ?></p>
            </div>
        </div>
    </div>
<?php
}
}
}
}
} 

?>
<?php 
//Ajeitar 
if(!empty($erro))
{
	foreach ($erro as $erros) 
	{
		echo $erros;
	}

}
?>
