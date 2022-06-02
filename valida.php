<?php
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $user = 'Julia';
    $pass = 1234;

    if (($usuario == $user) && ($senha == $pass)){
        //echo "ok, validado.";
        session_start();
        $_SESSION['username'] = $usuario;
        $_SESSION['logado'] = 1;
        header("Location: restrita.php");

    }else{
        echo "nananinanão!!! <br>";
        echo "<a href='index.html'>Voltar</a>";
    }




?>