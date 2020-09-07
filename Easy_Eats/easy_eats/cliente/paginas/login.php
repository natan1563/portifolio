<?php include_once "../php/location.php"; 
      require_once "../php/botoes.php";

if(isset($_GET['logado']) and $_GET['logado'] == 'erro'){
  $erro[] = '<li class="register">Erro de autenticação</li>';
}

if(!empty($erro)){
  foreach($erro as $erros){
    echo '<li class="register">'.$erros.'</li>';
  }
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../ativos/estilos/dots.css">
  <title>Easy Eats</title>
</head>
<body>

<div class="container">

    <img src="../ativos/imagens/logo2.png" alt="logo do Easy Eats" class="logo">

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="formum">

      <input type="text" name="NLog" class="inLog campo" placeholder="Digite seu e-mail:">

      <input type="password" name="NPass" class="inPass campo" placeholder="Digite sua senha:">
    
  </div>
  
  <button class="btn-login" name="btn-enviar">LOGIN</button>
  </form>
  <p class="register">Não possui um acesso? <a href="cadastro.php">Cadastre-se</a></p>
</body>

</html>