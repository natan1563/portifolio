<?php
require_once "conexao.php";
include_once "logoff.php";
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
        

        
        $sql = "INSERT INTO produtos (produto, valor, ingredientes, perfil_id) VALUES ('$produto', '$valor', '$ingredientes', $perfil_id)";
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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Easy Eats - ADM </title>
    <style>
        body{
            background-color: #f7a204;
        }
        
        * {
            padding: 0;
            margin: 0;
        }

        .carte {
            grid-area: carte;
            display: flex;
            flex-flow: column nowrap;
            justify-content: center;
            align-items: center;
        }

        .bot-carte {
            width: 100%;
            display: flex;
            flex-flow: row nowrap;
            justify-content: space-around;
            align-items: center;
            align-self: flex-end;
            background: #eae2b7;
        }

        .carte-sign {
            width: 120px;
            height: 70px;
            display: flex;
            flex-flow: row nowrap;
            justify-content: center;
            align-items: center;
            background: #eae2b7;
            color: #f7a204;
            font-size: 35px;
        }

        .carte-sign:nth-child(2) {
            border-left: 4px solid #f77f00;
            border-right: 4px solid #f77f00;
        }

        .main-carte-sign {
            transform: translate(0, 6px);
            text-align: center;
            width: 270px;
            padding: 5px 10px;
            color: #f7a204;
            border: 4px solid #f7a204;
            background: #eae2b7;
            grid-area: mainCarte;
            font-size: 20px;
            border-radius: 10px;
        }

        .presentation {
            display: flex;
            flex-flow: row nowrap;
            /*justify-content: center;
            align-items: center;*/
            background-color: #003049;
            width: 100%;
            height: 100px;
            border-bottom: 8px solid #d62828;
        }

        .logo {
            width: 100px;
            height: 100px;
        }

        .title {
            color: #f7a204;
            font-size: 45px;
            margin: 0 auto;
        }
        .orders{
            width: 100%;
            display: inline;
            padding: 15px auto;

        }
        .order{
            display: flex;
            flex-flow: column nowrap;
            justify-content: center;
            align-items: space-around;
            background-color:  rgba(151, 151, 151, .8);
            width: 350px;
            height: 120px;
            padding: 10px 5px;
            margin: 10px auto;
        }
        .hashtag{
            width: 50px;
            height: 50px;
            font-size: 15px;
            color: #eae2b7;
            background-color: #111;
            border-radius: 30px;
        }
    </style>
</head>

<body>
    <div class="presentation">
        <img src="../../ativos/imagens/logo2.png" alt="logo easy eats" class="logo">
        <h2 class="title">Cardápio</h2>
    </div>

    <form method="get" action="logoff.php">
        <a href="pedido.php">PEDIDOS</a>
        <a href="pedidos_realizados.php">REALIZADOS</a>
        <a href="../paginas/index.php">VOLTAR</a>
        <button name="btn-sair" type="submit">SAIR</button>
     </form>

<?php

    if(isset($_GET['produto']) && $_GET['produto'] == 'cad_sucesso'){
        $erros[] = 'Produto cadastrado com sucesso'; 
    }else if(isset($_GET['id_produto']) && $_GET['id_produto'] == 'deletado'){
        $erros[] = 'Removido com sucesso';
    }else if(isset($_GET['id_produto']) && $_GET['id_produto'] != 'deletado'){
        $erros[] = 'Erro ao remover';
    }

        if(!empty($erros)){
         foreach ($erros as $erro) {
           echo '<li>'.$erro.'</li>';
                                } 
                            }
        ?>
        <br>
        <br>

        <header class="header">      
<center>
    <form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="text" name="produto" size="60" placeholder="Nome do Produto">
    <input type="text" name="valor" size="60" placeholder="Valor do Produto">
    <input type="text" name="ingredientes"  size="60" placeholder="Ingredientes">
    <button name="cadastrar-produto">Cadastrar Produto</button>
</form>
</center>
</header>


<?php 
    
    
    //delete
    
    $sql = "SELECT * from produtos";
    $conn = mysqli_query($conexao, $sql) or die('Erro de conexão');
    

    if(mysqli_num_rows($conn) > 0){
    ?>
    <?php
    
    while($dados = mysqli_fetch_array($conn)){
    
    if($dados['perfil_id'] == $_SESSION['perfil_id']){
    $count = $dados[0].'#'.$dados[1].'#'.$dados[2].'#'.$dados[3];
    $quebra = explode('#', $count);




    if(!empty($dados)){
        str_replace('.', ',', $quebra[1]);

?>
    <div class="main-content">
        <div class="card shadow p-3 mb-5 bg-white rounded container-fluid">
            <div class="div-pic">
                <img src="../ativos/imagens/fundo_gg.jpg" class="rounded" alt="comida">
            </div>

        <div class="orders">
            <div class="order">
                <div class="hashtag"><img src="../../ativos/imagens/logo2.png" class="hashtag" alt="comida"></div>
                <h2 class="card-title"><?='Produto: '.$quebra[1]; ?></h2>
                <p class="card-text"><?='Ingredientes: '.$quebra[3]; ?></p>
                <p class="card-text"><?='Valor: R$ '.number_format($quebra[2], 2, ',', '.'); ?></p>
            </div>
        </div>
    </div>
                <form action="botoes.php" method="POST">
                    <input type="hidden" name="id_produto" value="<?= $quebra[0]; ?>">
                    <button name="btn-deletar" class="btn btn-danger">Retirar</button>
                </form>
        </div>

    </div>


<!-- Base -->

            <div class="orders">
                    <div class="order">
                        <div class="hashtag"><img src="../../ativos/imagens/logo2.png" class="hashtag" alt="comida"></div>
                            <h4 name="produto">     <?='Produto: '.$quebra[0]; ?></h2>
                            <p  name="Ingredientes"><?= 'Ingredientes: '.$quebra[2]; ?></p>
                            <p  name="valor">       <?='Valor: R$ '.number_format($quebra[1], 2, ',', '.');?></p>            
                        <input type="hidden" name="id_produto" value="<?=$dados['id'];?>">
                        <button class="btn" name="btn-produto" size="100">Agendar pedido</button>
                    </div>
                </div>

     <?php 
    }
    }
    }
}

    ?>
   






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
    
    <center>
        <font color="white"><h1>Bem vindo ao cardápio da 
            <?php 
            //print_r($conn_turma);
                while($dados_turma = mysqli_fetch_array($conn_turma)){
                
                if($dados_turma['perfil_id'] == $valor and $dados_turma['perfil_id'] != 1) {
                   echo $dados_turma['turma'];
                }
                }
                ?>
                </h1>
        </font>
    </center>
    
    <?php
    while($dados = mysqli_fetch_array($conn)){

    if($dados['perfil_id'] == $valor){

    $count = $dados[1].'#'.$dados[2].'#'.$dados[3];
    
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


