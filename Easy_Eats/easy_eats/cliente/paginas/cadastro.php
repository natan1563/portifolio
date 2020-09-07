
<?php
 
 include_once "../php/location.php";
 require_once "../php/botoes.php";

    if(!empty($erros)){
        foreach ($erros as $erro) {
            echo '<li class="register">'.$erro.'</li>';
        }
    }

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../ativos/estilos/cadastro.css">
    <title>Easy Eats - Cadastro</title>
</head>

<body>
    <div class="container">
        <img src="../ativos/imagens/logo2.png" alt="logo do Easy Eats" class="logo">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="formum">
            <input type="hidden" name="id">
            <input type="email" class="campo" placeholder="Digite seu melhor e-mail" name="email">
            <input type="text" class="campo" placeholder="Digite seu nome" name="nome">
            <input type="password" class="campo" placeholder="Digite sua senha" name="senha">
            <input type="password" class="campo" placeholder="Confirme sua senha" name="conf-senha">
            <input type="tel" class="campo" placeholder="Digite seu telefone" name="telefone"> 
            <input type="hidden" name="perfil_id" value="1">
            <input type="hidden" name="projeto" value="empty">

            <select class="select-menu" name="turma">
                <option value="4M3">4M3</option>
                <option value="4M2">4M2</option>
                <option value="4M1">4M1</option>
                <option value="3M3">3M3</option>
                <option value="3M2">3M2</option>
                <option value="3M1">3M1</option>
                <option value="2M3">2M3</option>
                <option value="2M2">2M2</option>
                <option value="2M1">2M1</option>
                <option value="1M3">1M3</option>
                <option value="1M2">1M2</option>
                <option value="1M1">1M1</option>
                    <!-- TURMAS da TARDE -->
                <option value="4V2">4V2</option>
                <option value="4V1">4V1</option>
                <option value="3V3">3V3</option>
                <option value="3V2">3V2</option>
                <option value="3V1">3V1</option>
                <option value="2V3">2V3</option>
                <option value="2V2">2V2</option>
                <option value="2V1">2V1</option>
                <option value="1V4">1V4</option>
                <option value="1V3">1V3</option>
                <option value="1V2">1V2</option>
                <option value="1V1">1V1</option>

            </select>
        </div>        
        </div>
        <!--Center dos Botões -->
        <button class="btn-login" name="btn-cadastrar">Cadastrar</button>
         </form>
        <p class="register">Já possui um acesso? <a href="login.php">Entre agora</a></p>
        
</body>

</html>
