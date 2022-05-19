<?php
    
    session_start();
    //$aux = implode('#', $_POST); 
    //echo '<hr>Implode<br>' . $aux;

    //tratando texto
    $titulo = str_replace('#', '!', $_POST['titulo']);
    $categoria = str_replace('#', '!', $_POST['categoria']);
    $descricao = str_replace('#', '!', $_POST['descricao']);
    //criando texto 
    $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

    //manipulando o arquivo
    $arquivo = fopen('arquivo.txt', 'a');

    fwrite($arquivo, $texto);

    fclose($arquivo);

    header('Location: home.php');

?>