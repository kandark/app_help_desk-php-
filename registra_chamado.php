<?php
session_start();
// echo '<pre>';
//         print_r($_POST);
//         echo '<pre>';

//estamos trabalhlalndo na montagem do texto

        $titulo = str_replace('#','-',$_POST['titulo']);
        $categoria= str_replace('#','-',$_POST['categoria']);
        $descricao= str_replace('#','-',$_POST['decricao']);

        //implode converte um array em uma string

        $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' .$descricao . PHP_EOL; 
        //abrindo arquivo
        $arquivo =  fopen('../../app_help_desk/arquivo.txt','a');

        

        //escrevendo texto
        fwrite($arquivo,$texto);

        //fechando arquivo
        fclose($arquivo);
        header('Location: abrir_chamado.php');
?>