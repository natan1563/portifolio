<?php
//------------------------ESSE É O QUE JÁ TÁ ONLINE------------------------------------ 



include_once "../../php/logoff_user.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Pedidos</title>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../../ativos/estilos/menu1.css">
 </head>


<body>
    <div class="presentation">
    <img src="../../ativos/imagens/logo2.png" alt="logo easy eats" class="logo">
    <h2 class="title">Seus pedidos</h2>
    <div class="div-buttons" align="right">
    <a href="../turmas/participantes.php" class="btn-voltar">Voltar</a>
    <a href="../../php/sair.php" class="btn-voltar">Sair</a>
    </div>
    </div>


    <?php 
    
    $id_cliente = $_SESSION['id_user'];
    $sql_cliente = "SELECT * from pedidos WHERE id_cliente = $id_cliente";
    
    $conn_cliente = mysqli_query($conexao, $sql_cliente) or die('Erro de conexão');
    

    if(mysqli_num_rows($conn_cliente) > 0){
	
    while($dados = mysqli_fetch_array($conn_cliente)){
    
    $count = $dados[0].'#'.$dados[1].'#'.$dados[2].'#'.$dados[3].'#'.$dados[5].'#'.$dados[7];
    $quebra = explode('#', $count);

    if(!empty($dados)){
         

        ?>
   <div class="orders">
            <div class="order">
                <h2>Agendado com <?=$dados[7]?></h2>
               <div class="hashtag"><img src="../../ativos/imagens/logo2.png" class="hashtag" alt="comida"></div>
                    <div class="pic-info card-body">
                        <h2 class="card-title" name="produto"><?='Produto: '.$dados[1]; ?></h2>
                        <p class="card-text" name="Nº Pedido"><?= 'Nº do Pedido: '.$dados[0]; ?></p>
                        <p class="" name="Ingredientes"><?= 'Ingredientes: '.$dados[3]; ?></p>
                        <p class="price" name="valor"><?='Valor: R$ '.number_format($dados[2], 2, ',', '.'); ?>
                        <p class="card-text" name="cliente"><?= 'Seu Nome: '.$dados[5]; ?></p>
                    </div>

        </div>
    </div>
    <?php 
    }
    }
    }
    ?>
</body>

</html>