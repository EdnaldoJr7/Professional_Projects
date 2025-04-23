<?php
    if(isset($_POST['submit']))
    {
        
        include_once('conexao.php');
        
        $usuario = $_POST["usuario"];
        $funcao = $_POST["funcao"];
        $senha = $_POST["senha"];


        $result = mysqli_query($conexao, "INSERT INTO usuarios(usuario, funcao, senha) VALUES ('$usuario', '$funcao', '$senha')");

        header('Location: ../login/login.php');
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>
<body>

    <div class="box">
        <span class="borderLine"></span>
        <form action="cadastro.php" method="POST">
            <h2>Cadastro</h2>
            <div class="inputBox">
                <input type="text" required="required" name="usuario" id="usuario">
                <span>Usuário</span>
                <i></i>
            </div>

            <div class="inputBox">
                <input type="text" required="required" name="funcao" id="funcao">
                <span>Função</span>
                <i></i>
            </div>

            <div class="inputBox">
                <input type="password" required="required" name="senha" id="senha">
                <span>Senha</span>
                <i></i>
            </div>

            <div class="links justify-content-end">
                <a href="../login/login.php">Login</a>
            </div>

            <input type="submit" value="Cadastrar" name="submit">
        </form>
    </div>
    
</body>
</html>