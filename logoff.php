<?php

session_start();
/*
echo '<pre>';
print_r($_SESSION);

echo '</pre>';
//remover indices dp array de sessão
//unset()
unset($_SESSION['x']);
echo '<pre>';
print_r($_SESSION);
echo '</pre>';




//destruir a variavel de sessão
//session_destroy

//forcar redirecionamento

echo '<pre>';
print_r($_SESSION);

echo '</pre>';

*/
session_destroy();
header('Location: index.php');
?>