<?php
echo '<pre>';
        print_r($_POST);
        echo '<pre>';

//estamos trabalhlalndo na montagem do texto

        $titulo = str_replace('#','-',$_POST['titulo']);
        $categoria= str_replace('#','-',$_POST['categoria']);
        $descricao= str_replace('#','-',$_POST['decricao']);

        //implode converte um array em uma string

        $texto = $titulo . '#' . $categoria . '#' .$descricao . PHP_EOL; 
        //abrindo arquivo
        $arquivo =  fopen('arquivo.txt','a');
        //escrevwndo texto
        fwrite($arquivo,$texto);

        //fechando arquivo
        fclose($arquivo);
?>