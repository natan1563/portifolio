<?php
session_start();

if(!isset($_SESSION['login']) or $_SESSION['login'] != 'logado'){
	header('Location: ../index.php?log=null');
 }

 ?>