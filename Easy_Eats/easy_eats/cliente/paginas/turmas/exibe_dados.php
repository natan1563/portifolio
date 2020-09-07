<?php 
 function cardapio($valor){
  session_start();
    require_once "../../php/conexao.php";
    require_once "../../php/logoff_turmas.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cardápio</title>
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

.orders{
    grid-area: orders;
}
.alert{
    text-align: center;
    text-decoration: none;
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
}    </style>
</head>

<body>

<!--- ADAPTAVEL -->
<?php
    require_once "controlaturma.php";

    if(!isset($_SESSION['logado'] ) or $_SESSION['logado'] != 'SIM'){
   header('Location: ../../php/logoff.php?login=erro'); 
    }
    //Conexão na tabela de produtos 
    $sql = "SELECT * from produtos";
    $conn = mysqli_query($conexao, $sql) or die('Erro de conexão'); 
    //Conexão na tabela de login 
    $sql_turma = "SELECT * FROM login";
    $conn_turma = mysqli_query($conexao, $sql_turma) or die('Erro de conexão');
    
    //Verifica se tem linhas afetas (com dados)
    if(mysqli_num_rows($conn) > 0 and mysqli_num_rows($conn_turma) > 0){ ?>
    
    <div class="presentation">
        <a href="../index.php"><img src="../../ativos/imagens/logo2.png" alt="logo easy eats" class="logo"></a>
        <h2 class="title">Cardápio do 
            <?php 
            //print_r($conn_turma);
                while($dados_turma = mysqli_fetch_array($conn_turma)){
                
                if($dados_turma['perfil_id'] == $valor and $dados_turma['perfil_id'] != 1) {
                   echo $dados_turma['projeto'];
                }
                }
                ?>
        </h2>
    </div>
    <div class="cadastro-produto">
     <ul class="options">
            <a href="../index.php"><li>Pagina Inicial</li></a>
            <a href="participantes.php"><li>Voltar</li></a>
            <a href="../../php/sair.php"><li>Sair</li></a>
    </ul>
    </div>

    </div>
    
    <?php
    while($dados = mysqli_fetch_array($conn)){

    if($dados['perfil_id'] == $valor){

    $count = $dados[1].'#'.$dados[2].'#'.$dados[3].'#'.$dados[5];
    
    $quebra = explode('#', $count);

    if(!empty($dados) and $dados['perfil_id'] == $valor){
        str_replace('.', ',', $quebra[1]);
    ?>
    
    <!-- Trocar tags depreciadas por css -->    
  <form action="../pedidos/cadastrar_pedidos.php" method="POST">
    <div class="main-content">              
                <div class="orders">
                    <div class="order">
                        <div class="hashtag"><img src="../../ativos/imagens/logo2.png" class="hashtag" alt="comida"></div>
                            <h4 name="produto">     <?='Produto: '.$quebra[0]; ?></h2>
                            <p  name="Ingredientes"><?= 'Ingredientes: '.$quebra[2]; ?></p>
                            <p  name="valor">       <?='Valor: R$ '.number_format($quebra[1], 2, ',', '.');?></p>            
                        <input type="hidden" name="id_produto" value="<?=$dados['id'];?>">
                        <input type="hidden" name="projeto" value="<?=$dados[5];?>">
                        <button class="btn" name="btn-produto" size="100">Agendar pedido</button>
                    </div>
                </div>

        </div>
                            <br> 
    
    </div>
 </form>
<?php
}
}
}
}
}   
?>
 </body>
 </html>


