<?php
session_start();

// Limpa as variáveis da sessão em memória
$_SESSION = array();

// Destrói os dados da sessão no servidor
session_destroy();

// Redireciona para a página de login
header("Location: 15d_login.php");
exit();
?>