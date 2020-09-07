<?php
require_once "conexao.php";
include_once "logoff.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Easy Eats - ADM </title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Oswald&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    border: none;
    outline: none;
    font-family: 'Oswald', sans-serif;
  }

body {
    display: grid;
    background-color: #f7a204;
    grid-template-rows: 10% 20% 1fr;
    grid-template-columns: 1fr;
    grid-template-areas:
        "presentation"
        "cad-prod"
        "orders"
    ;
    
}

a{ text-decoration: none;}

.presentation {
    grid-area: presentation;
    display: flex;
    flex-flow: row nowrap;
    align-items: center;
    background-color: #003049;
    width: 100%;
    height: 100px;
    border-bottom: 8px solid #d62828;
}

.presentation h2{
    margin: 0 auto;
}
@import url('https://fonts.googleapis.com/css?family=Oswald&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    border: none;
    outline: none;
    font-family: 'Oswald', sans-serif;
  }

body {
    display: grid;
    background-color: #f7a204;
    grid-template-rows: 120px 1fr;
    grid-template-columns: 1fr;
    grid-template-areas:
        "presentation"
        "cad-prod"
    ;
    
}

a{ text-decoration: none;}

.presentation {
    grid-area: presentation;
    display: flex;
    flex-flow: row nowrap;
    justify-content: space-evenly;
    align-items: center;
    background-color: #003049;
    width: 100%;
    height: 100px;
    border-bottom: 8px solid #d62828;
}

.presentation h2{
    font-size: 30px;
    color: #f7a204;
}

.cadastro-produto{
    grid-area: cad-prod;
    display: flex;
    flex-flow: column nowrap;
    justify-content: center;
    align-items: center;
}
.orders{
    grid-area: orders;
}
.alert{
    text-align: center;
    text-decoration: none;
}
.options{
    width: 350px;
    list-style: none;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-flow: row nowrap;
}

.options li{
    background: #003049;
    border-radius: 5px;
    padding: 5px;
    color: #fefefe;
}

.form-cadastro{
    display: flex;
    flex-flow: column nowrap;
    justify-content: center;
    align-items: center;
    margin: 10px;
}

.part h3{
    text-align: center;
}

.campo {
    width: 300px;
    margin: 5px 0;
    padding: 5px;
}

.btn{
    padding: 5px;
}

.btn-op{
    text-align: center;
    width: 60px;
}

.part{
    margin: 0 auto;
    border-top: 3px solid #003049 
}

.logo {
    width: 100px;
    height: 100px;
}

.title {
    color: #f7a204;
    font-size: 32px;
}


.order {
    display: flex;
    flex-flow: column nowrap;
    justify-content: center;
    align-items: center;
    background-color: rgba(151, 151, 151, .8);
    margin: 10px 0;
    padding: 10px;
    width: 400px;
    height: auto;
}

.order div, h2, p, button{
    margin: 3px;
}

.order div{
    font-size: 18px;
}

.hashtag {
    display: flex;
    width: 45px;
    height: 45px;
    font-size: 15px;
    color: #eae2b7;
    background-color: #000;
    border-radius: 30px;
    justify-content: center;
    align-items: center; 
}

.orders {
    display: flex;
    flex-flow: nowrap column;
    justify-content: center;
    align-items: center;
    grid-area: orders;
}

.peca-pedido{
    width: 60px;
    height: 30px;
}

    </style>
</head>
<body>
    <div class="presentation">
    <img src="../ativos/imagens/logo2.png" alt="logo easy eats" class="logo">
        <h2 class="title">Pedidos entregues</h2>
    </div>

     <div class="main">

         <div class="cadastro-produto">
            <ul class="options">
            <a href="pedido.php"><li>Pedidos</li></a>
            <a href="pedidos_realizados.php"><li>Entregue</li></a>
            <a href="inserir_produtos.php"><li>Voltar</li></a>
            <a href="sair.php"><li>Sair</li></a>
            </ul> 

         </div>
<?php 
    
    
    $sql = "SELECT * from pedidos_realizados";
    $conn = mysqli_query($conexao, $sql) or die('Erro de conexão');
    

    if(mysqli_num_rows($conn) > 0){
    
    while($dados = mysqli_fetch_array($conn)){
    
    if($dados['id_vendedor'] == $_SESSION['perfil_id']){

    $count = $dados[0].'#'.$dados[1].'#'.$dados[2].'#'.$dados[3].'#'.$dados[5];
    $quebra = explode('#', $count);

    if(!empty($dados)){
        str_replace('.', ',', $quebra[1]); 

        ?>
   <div class="orders">
            <div class="order">
                <div class="hashtag"><img src="../ativos/imagens/logo2.png" class="hashtag" alt="comida"></div>
                        <h2 class="card-title" name="produto"><?='Produto: '.$dados[1]; ?></h2>
                        <h3>Status: Entregue</h3>
                        <p class="card-text" name="Nº Pedido"><?= 'Nº do Pedido: '.$dados[0]; ?></p>
                        <p class="card-text" name="Ingredientes"><?= 'Ingredientes: '.$dados[3]; ?></p>
                        <p class="card-text" name="valor"><?='Valor: R$ '.number_format($dados[2], 2, ',', '.'); ?></p>
                        <p class="card-text" name="cliente"><?= 'Cliente: '.$dados[5]; ?></p>
        </div>
    </div>
    <?php 
    }
    }
    }
    }

    ?>
    </div>

</body>
</html>