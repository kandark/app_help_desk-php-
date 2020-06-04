<?php

session_start();
echo $_SESSION['autenticado'];



//VARIAVEL QUE VERIFICA SE A AUTENTICAÇÃO FOI REALIZADA
$usuario_autenticado = false;
$usuario_id=null;
$usuario_perfil_id=null;
$perfis=array(1=>'Administrativo',2=>'Usuário');
//USUARIOS DO SISTEMA
$usuarios_app = array(
    array('id'=>'1','email' => 'adm@teste.com', 'senha' => 'abcd','perfil_id'=>1),
    array('id'=>'2','email' => 'user@teste.com', 'senha' => 'abcd','perfil_id'=>1),
    array('id'=>'3','email' => 'kimberly@teste.com', 'senha' => 'abcd','perfil_id'=>2),
    array('id'=>'4','email' => 'kanda@teste.com', 'senha' => 'abcd','perfil_id'=>2)

);

foreach($usuarios_app as $user){
   
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_autenticado = true;
       $usuario_id= $user['id'];
       $usuario_perfil_id=$user['pefil_id'];

    }
}

    if($usuario_autenticado){
        echo 'Usuário autenticado.';
        $_SESSION['autenticado']='SIM';
        $usuario_perfil_id=$user['pefilid'];
        $_SESSION['id']=$usuario_id;
        $_SESSION['perfil_id']=$usuario_perfil_id;
        header('Location: home.php');

    }else{
        $_SESSION['autenticado']='NÃo';

        header('Location: index.php?login=erro');
      
    }
    



?>