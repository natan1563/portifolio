<?php
// Botão de Redirecionamento para a página de login 
if(isset($_POST['btn-login'])){
    header('location: login.php');
}
// Botão de Redirecionamento para a página de login 
if(isset($_POST['btn-cadastro'])){
    header('location: cadastro.php');
}

?>