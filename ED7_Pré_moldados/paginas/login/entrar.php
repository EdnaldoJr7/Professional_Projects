<?php

    session_start();

    if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha']))
    {
        include_once('../cadastro/conexao.php');
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' and senha = '$senha'";

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['usuario']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }

        else{
            $_SESSION['usuario'] = $usuario;
            $_SESSION['senha'] = $senha;
            header('Location: ../home/home.php');
        }
    }

    else
    {
        header('Location: login.php');
    }
?>