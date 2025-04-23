
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>

    <div class="box">
        <span class="borderLine"></span>
        <form action="entrar.php" method="POST">
            <h2>Login</h2>
            <div class="inputBox">
                <input type="text" required="required" name="usuario" id="usuario">
                <span>Usuário</span>
                <i></i>
            </div>

            <div class="inputBox">
                <input type="password" required="required" name="senha" id="senha">
                <span>Senha</span>
                <i></i>
            </div>

            <div class="links justify-content-end" style="align-items:end">
                <a href="../cadastro/cadastro.php">Cadastre-se</a>
            </div>

            <input type="submit" value="Entrar" id="submit" name="submit">
        </form>
    </div>
    
</body>
</html>