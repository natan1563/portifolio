<?php
require_once "conexao.php";
require_once "logoff.php";
$erros = [];

if(isset($_POST['cadastrar-produto'])){
$produto = mysqli_escape_string($conexao, $_POST['produto']);
$valor = mysqli_escape_string($conexao, $_POST['valor']);
$ingredientes = mysqli_escape_string($conexao, $_POST['ingredientes']);
$perfil_id = $_SESSION['perfil_id'];

    if(empty($produto) || empty($valor) || empty($ingredientes)){

        $erros[] = 'Os campos não podem ficar em branco';
    
    }else{

        $valor = str_replace(",",".", $valor);
        
        if($_SESSION['perfil_id'] == $perfil_id){
            $projeto = "SELECT projeto FROM login where perfil_id = $perfil_id";
            $project = mysqli_query($conexao, $projeto);
            $dd = mysqli_fetch_array($project);
            $dd = $dd[0];
        }

        
        $sql = "INSERT INTO produtos (produto, valor, ingredientes, perfil_id, projeto) VALUES ('$produto', '$valor', '$ingredientes', $perfil_id, '$dd')";
        if(mysqli_query($conexao, $sql)){
             $_GET['produto'] = 'Produto cadastrado com sucesso'; 
             $erros[] = $_GET['produto'];   
             header('Location: ?produto=cad_sucesso');
        }else{
    
            $erros[] = 'Erro ao cadastrar o produto';
    
        }
        
    }
}

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
        <h2 class="title">Área Administrativa</h2>
    </div>
    
    <!-- <form method="get" action="logoff.php" align="right">
        <a href="pedido.php" class="btn-sup">Pedidos</a>
        <a href="pedidos_realizados.php" class="btn-sup">Entregues</a>
        <a href="../paginas/index.php" class="btn-sup">Voltar</a>
        <button name="btn-sair" type="submit">Sair</button>
     </form>
 -->  
 <br>
 <div class="main">
 <div class="cadastro-produto">
 <ul class="options">
            <a href="pedido.php"><li>Pedidos</li></a>
            <a href="pedidos_realizados.php"><li>Entregue</li></a>
            <a href="../paginas/index.php"><li>Voltar</li></a>
            <a href="sair.php"><li>Sair</li></a>
    </ul>    
</div>
      
    <header class="header">      
    <?php

    //Debugger do cadastro de produtos
    if(isset($_GET['produto']) && $_GET['produto'] == 'cad_sucesso'){
        $erros[] = 'Produto cadastrado com sucesso'; 
    }else if(isset($_GET['id_produto']) && $_GET['id_produto'] == 'deletado'){
        $erros[] = 'Removido com sucesso';
    }else if(isset($_GET['id_produto']) && $_GET['id_produto'] != 'deletado'){
        $erros[] = 'Erro ao remover';
    }

        if(!empty($erros)){
         foreach ($erros as $erro) {
           echo '<p class="alert">'.$erro.'</p>';
                                } 
                            }
        ?>
    <!-- Form de cadastro de produtos-->
    <form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="form-cadastro">
    <input type="text" class="inLog campo" name="produto" size="42" placeholder="Nome do Produto. Ex: Pastel de camarão">
    <input type="text" class="inLog campo"name="valor" size="42" placeholder="Valor do Produto. Ex: 3,50">
    <input type="text" class="inLog campo"name="ingredientes"  size="42" placeholder="Ingredientes. Ex: Cebola, Alface, Pimentão">
    <button class="btn" name="cadastrar-produto">Cadastrar Produto</button>
</form>
</center>
</header>

<div class="part">
<h3>Seus produtos cadastrados</h3>
</div>

    <?php       
    //Exibição dos produtos cadastrados e dos botões para retirar 
    $sql = "SELECT * from produtos";
    $conn = mysqli_query($conexao, $sql) or die('Erro de conexão');
    

    if(mysqli_num_rows($conn) > 0){
    
    while($dados = mysqli_fetch_array($conn)){
    
    if($dados['perfil_id'] == $_SESSION['perfil_id']){
    $count = $dados[0].'#'.$dados[1].'#'.$dados[2].'#'.$dados[3];
    $quebra = explode('#', $count);

    if(!empty($dados)){
        str_replace('.', ',', $quebra[1]);

?>

        <form action="botoes.php" method="POST">
        <div class="orders">
            <div class="order">
                <div class="hashtag"><img src="../ativos/imagens/logo2.png" class="hashtag" alt="comida"></div>
                <h2 class="card-title"><?='Produto: '.$quebra[1]; ?></h2>
                <p class="card-text"><?='Ingredientes: '.$quebra[3]; ?></p>
                <p class="card-text"><?='Valor: R$ '.number_format($quebra[2], 2, ',', '.'); ?></p>
                <input type="hidden" name="id_produto" value="<?= $quebra[0]; ?>">
                <button name="btn-deletar" size="60">Remover</button>
                </div>
            </div>
                </form>

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


