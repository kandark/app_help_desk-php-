<?php

session_start();
echo $_SESSION['autenticado'];


//VARIAVEL QUE VERIFICA SE A AUTENTICAÇÃO FOI REALIZADA
$usuario_autenticado = false;

//USUARIOS DO SISTEMA
$usuarios_app = array(
    array('email' => 'adm@teste.com', 'senha' => 'abcd'),
    array('email' => 'user@teste.com', 'senha' => 'abcd')
);

foreach($usuarios_app as $user){
   
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_autenticado = true;
    }
}

    if($usuario_autenticado){
        echo 'Usuário autenticado.';
        $_SESSION['autenticado']='SIM';
        $_SESSION['x']='um valor';
        $_SESSION['y']='outro valor';

        header('Location: home.php');

    }else{
        $_SESSION['autenticado']='NÃo';

        header('Location: index.php?login=erro');
      
    }
    



?>