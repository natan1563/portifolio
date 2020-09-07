<?php
require_once "conexao.php";
session_start();

if(isset($_GET['btn-sair']) or $_SESSION['logado'] != 'SIM' or isset($_GET['login']) and $_GET['login'] == 'erro'){
mysqli_close($conexao);
session_destroy();
header('Location: ../login.php?logado=#007');
}


?>