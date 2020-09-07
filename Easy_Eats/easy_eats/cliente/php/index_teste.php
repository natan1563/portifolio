<?php
require_once "conexao.php";
include_once "logoff.php";
$erros = [];



if(isset($_POST['cadastrar-produto'])){
$produto = mysqli_escape_string($conexao, $_POST['produto']);
$valor = mysqli_escape_string($conexao, $_POST['valor']);
$ingredientes = mysqli_escape_string($conexao, $_POST['ingredientes']);

    if(empty($produto) || empty($valor) || empty($ingredientes)){

        $erros[] = 'Os campos não podem ficar em branco';
    
    }else{

        $valor = str_replace(",",".", $valor);
        

        
        $sql = "INSERT INTO produtos (produto, valor, ingredientes) VALUES ('$produto', '$valor', '$ingredientes')";
        if(mysqli_query($conexao, $sql)){
             $erros[] = 'Produto cadastrado com sucesso';
             //mysqli_close($conexao); 
             header('Location: #');
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
    <link rel="stylesheet" href="/node_modules/reset-css/reset.css">
    <link rel="stylesheet" href="../ativos/estilos/index1.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Easy Food</title>
</head>

<body>

<?php

    if(!empty($erros)){
        foreach ($erros as $erro) {
            echo '<li>'.$erro.'</li>';
                                  } 
                    }
?>

    <nav class="header-navigation navbar-default navbar navbar-dark bg-dark navbar-expand-lg">
            <div class="navbar-brand">
                <img src="" alt="Logo do Easy Food">
            </div>
                            <!--Botão para menu de celular-->
            <div id="menu" class="collapse navbar-collapse " >
                            <!--Botão para menu de celular-->
                <ul class="header-navigation-list navbar-nav nav">
                    <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" id="menu_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Salas</a> 
                        <div class="dropdown-menu">
                            <a href="#" style="color: black" class="dropdown-item">2m1</a>
                            <a href="#" style="color: black" class="dropdown-item">2m2</a>
                            <a href="#" style="color: black" class="dropdown-item">2m3</a>
                            <a href="#" style="color: black" class="dropdown-item">3m1</a>
                            <a href="#" style="color: black" class="dropdown-item">3m2</a>
                            <a href="#" style="color: black" class="dropdown-item">3m3</a>
                            <a href="#" style="color: black" class="dropdown-item">4m1</a>
                            <a href="#" style="color: black" class="dropdown-item">4m2</a>
                            <a href="#" style="color: black" class="dropdown-item">4m3</a>
                        </div>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link">Cardápio</a></li>
                </ul>
            </div>
            <div class="div-buttons">
                     <form method="get" action="logoff.php">
                        <button class="btn navbar-btn" name="btn-sair" type="submit">SAIR</button>
                     </form>
           
                <!--Botão para menu de celular-->
                <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!--Botão para menu de celular-->
            </div>
        </nav>  
    </header>

    <div class="main-loader jumbotron container">
        <div class="loader">
            <h3>4M1</h3>
        </div>
        <div class="loader">
            <h3>1M1</h3>
        </div>
        <div class="loader">
            <h3>2M2</h3>
        </div>
    </div>


    <div class="container site">
    <header class="header">
         
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="text" name="produto" placeholder="Nome do Produto">
    <input type="text" name="valor" placeholder="Valor do Produto">
    <input type="text" name="ingredientes" placeholder="Ingredientes">
    <button name="cadastrar-produto">Cadastrar Produto</button>

</form>

    <?php 
    $sql = "SELECT * from produtos";
    $conn = mysqli_query($conexao, $sql) or die('Erro de conexão');
    

    if(mysqli_num_rows($conn) > 0){
    ?>
    <?php
    while($dados = mysqli_fetch_array($conn)){
    $count = $dados[1].'#'.$dados[2].'#'.$dados[3];
    $quebra = explode('#', $count);

    if(!empty($dados)){
        str_replace('.', ',', $quebra[1]);

?>
    <div class="main-content">
        <div class="card shadow p-3 mb-5 bg-white rounded container-fluid">
            <div class="div-pic">
                <img src="../ativos/imagens/fundo_gg.jpg" class="rounded" alt="comida">
            </div>

            <div class="pic-info card-body">
                <h2 class="card-title"><?='Produto: '.$quebra[0]; ?></h2>
                <p class="card-text"><?= 'Ingredientes: '.$quebra[2]; ?></p>
                <p class="card-text"><?= 'Ingredientes: '.$quebra[1]; ?></p>
            </div>
        </div>

    </div>
    <?php 
    }
    }
    }
    ?>

    <footer class="float-left">
        <div class="footer">
            <p>Um oferencimento de <cite>&copy;Imperial Seven Ltda.</cite></p>
        </div>
    </div>
    </footer>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>