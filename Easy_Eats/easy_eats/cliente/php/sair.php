<?php
session_unset();
session_destroy();

if (!isset($_SESSION['perfil_id'])) {
	header('Location: ../paginas/login.php?logado=#007');
}