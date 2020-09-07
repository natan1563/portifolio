<?php
include_once "../php/location.php";
session_start();

if(!isset($_SESSION['logado'] ) or $_SESSION['logado'] != 'SIM'){
   header('Location: ../php/logoff.php?login=erro'); 
} 

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../ativos/estilos/index.css">
    <link rel="shortcut icon" href="../ativos/imagens/easy.ico">
    <title>Easy Eats</title>
</head>
<body>
    <div class="header">
        <img src="../ativos/imagens/logo1.png" alt="logo principal" class="logo">
        <div></div>
    </div>
    
    <!-- Passa pra Área admnistrativa --> 
    <?php 
        if(isset($_SESSION['perfil_id']) and $_SESSION['perfil_id'] != 1){
    ?>
    
    <div class="links">
    <a href="../php/inserir_produtos.php">Área Administrativa</a>
    </div>
    <?php } ?>
    
    <!-- jaja <div>
        <h2>Já fez o seu pedido? Confira-o <a class="link" href="pedidos/pedidos_cliente.php">aqui</a></h2>

        <?php 
        // if($_SESSION['perfil_id'] != 1){
        //     echo  '<a class="link" href="../php/inserir_produtos.php">Olá administrador! <br>Cadastre seu produto Aqui</a>';} 
        ?>  
    </div> -->

    <div class="loader">
        
    </div>

    <div class="congrats">
        <h1>VENHA VIVER A <em class="emphasis">MAIOR</em> EXPERIÊNCIA CULINÁRIA DO CEEPTIC</h1>
    </div>

    <div class="carte">
        <div class="main-carte">
            <div class="main-carte-sign">SALAS PARTICIPANTES</div>
        </div>

        <div class="bot-carte">
            <div href="" class="carte-sign">4M1</div>
            <div href="" class="carte-sign">4M2</div>
            <div href="" class="carte-sign">4M3</div>
        </div>
    </div>
        <a href="turmas/participantes.php"><img src="../ativos/imagens/pedido.png" alt="faça seu pedido" class="pedido"></a>


</body>
</html>

