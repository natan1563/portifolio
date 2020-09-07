<?php 
session_start();
require_once "../../php/conexao.php";
require_once "../../php/logoff_turmas.php";
if(isset($_GET['pedido']) and $_GET['pedido'] == 'sucesso'){
  echo "<script>alert('Pedido cadastrado com sucesso !');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cardápio</title>
    <style type="text/css">
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
    grid-template-rows: 90px 90px 1fr;
    grid-template-columns: 1fr;
    grid-template-areas:
        "presentation"
        "carte"
        "orders"
    ;
    
}

a {
    text-decoration: none;
}

.carte{
    width: 100%;
    grid-area: carte;
    display: flex;
    flex-flow: row nowrap;
    justify-content: flex-start;
    align-items: center;
    overflow-x: auto;
}

.bot-carte{
    display: flex;
    flex-flow: row nowrap;
    justify-content: space-around;
    align-items: center;
    background: #eae2b7;
    width:1500px
}

.carte-sign{
    width: 120px;
    height: 70px;
    display: flex;
    flex-flow: row nowrap;
    justify-content: center;
    align-items: center;
    background: #eae2b7;
    color: #f7a204;
    font-size: 20px;
    text-align: center;
}

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
    font-size: 32px;
    margin: 0 auto;
}

.logo {
    width: 100px;
    height: 100px;
}

.title {
    color: #f7a204;
    font-size: 40px;
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
.information{
    color: #eae2b7;
    text-align: center;
}
.cadastro-produto{
    grid-area: cad-prod;
    display: flex;
    flex-flow: column nowrap;
    justify-content: center;
    align-items: center;
}
.options{
    width: 250px;
    list-style: none;
    display: flex;
    justify-content: space-between;
    align-items: right;
    flex-flow: row nowrap;
}

.btn-voltar{
    text-decoration: none;
    background-color: #005582;
    color: white;
    padding: 6px;
    border-radius: 3px;
    margin: 0 5px;
}
    </style>    
</head>
<body>
    <div class="presentation">
        <img src="../../ativos/imagens/logo1.png" alt="logo easy eats" class="logo">
        <h2 class="title">Cardápio</h2>
        <a href="../pedidos/pedidos_cliente.php"class="btn-voltar">Seu Pedido</a>
        <a href="../index.php"class="btn-voltar">Voltar</a>
    </div>
    <div class="carte">

        <div class="bot-carte"> 

            <a href="cantinhodonordeste3.php">
                <div  class="carte-sign">Cantinho do Nordeste</div>
            </a>
            <a href="outrosabor5.php">
                <div class="carte-sign">Outro Sabor</div>
            </a>
            <a href="pizzaritos2.php">
                <div class="carte-sign">Pizzaritos</div>
            </a>
            <a href="flowers_drinks4.php">
                <div class="carte-sign">Flowers Drinks</div>
            </a>
            <a href="megustabrownie6.php">
                <div class="carte-sign">Me Gusta Brownie</div>
            </a>
        </div>
    </div>
    <h1 class="information"> <<< Deslize para o lado >>> </h1>
</body>

</html>