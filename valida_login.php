<?php

    session_start();

    //variavel de autenticação
    $autentic = false;
    $usuario_id = null;
    $usuario_perfil = null;

    $perfis = [
        1 => 'admin',
        2 => 'user'
    ];

    //usuarios do sistema
    $usuario_app = array(
        array('id' => 1, 'email' => 'luccasdrapala@gmail.com', 'senha' => '12345678', 'perfil_id' => 1),
        array('id' => 2, 'email' => 'teste@gmail.com', 'senha' => '1234', 'perfil_id' => 2)
    );

    foreach($usuario_app as $user){
        
        if($user['email'] === $_POST['email'] && $user['senha'] === $_POST['senha']){
            $autentic = true;
            $usuario_id = $user['id'];
            $usuario_perfil = $user['perfil_id'];
        }  
    }

    if($autentic){
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil;
        header('Location: home.php');
    } else {
        header('Location: index.php?login=erro');
        $_SESSION['autenticado'] = 'NAO';
    }
?>