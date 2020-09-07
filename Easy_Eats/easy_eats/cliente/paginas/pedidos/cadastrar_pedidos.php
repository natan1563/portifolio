<?php 
require_once "../../php/conexao.php";
require_once "../../php/logoff_user.php";
?>



<?php 
if(isset($_POST['btn-produto']) and !empty($_POST['id_produto'])){
	

	$dados_pedido = $_POST['id_produto'];
	$vendedor = $_POST['projeto'];	

	//tabela dos produtos 
	$sql_pedidos = "SELECT * from produtos";
    $conn_pedidos = mysqli_query($conexao, $sql_pedidos) or die('Erro de conexão'); 
  

    //selecionando o id do usuario
    $id = $_SESSION['id_user'];
  	$sql_login = "SELECT * from login WHERE id = $id";
    $conn_login = mysqli_query($conexao, $sql_login) or die('Erro de conexão'); 
  	$kappa = mysqli_fetch_array($conn_login); 


    while ($key_produto = mysqli_fetch_array($conn_pedidos)) {
    

    $quebra = $key_produto[0].'#'.$key_produto[1].'#'.$key_produto[2].'#'.$key_produto[3].'#'.$key_produto[4].'#'.$key_produto[5];


    $quebrou = explode('#', $quebra);


    if($quebrou[0] == $dados_pedido){


		$insert = "INSERT INTO pedidos(produto, valor, ingredientes, id_cliente, nome, id_vendedor, projeto) values ('$quebrou[1]', '$quebrou[2]', '$quebrou[3]', $kappa[0], '$kappa[1]', $quebrou[4], '$vendedor')";

		$enter = mysqli_query($conexao, $insert) or die('Erro na conexão com o banco de dados');

		if($enter == 1){
			mysqli_close();
			header('Location: ../turmas/participantes.php?pedido=sucesso');

		}
	
 		   
}
}
}
?>