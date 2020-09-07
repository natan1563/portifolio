<?php
require_once "conexao.php";
session_start();

if(isset($_GET['btn-sair']) or $_SESSION['logado'] != 'SIM' or $_SESSION['perfil_id'] == 1 or isset($_GET['login']) and $_GET['login'] == 'erro' or !isset($_SESSION['perfil_id'])){
mysqli_close($conexao);
session_destroy();
header('Location: ../paginas/login.php?logado=#007');
}


?>