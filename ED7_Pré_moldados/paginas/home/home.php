<?php
    session_start();

    if((isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('Location: ../login/login.php');
    }

    else
    {
        $logado = $_SESSION['usuario'];
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script defer src="menu.js"></script>
    <title>Home</title>
</head>
<body>

    <header>
        <div id="identificacao">
            <nav class="navbar navbar-expand-sm bg-black navbar-dark">
                <div class="container-fluid justify-content-start">
                    <a href="#">
                        <img src="imagens/img_1.jfif" alt="Logotipo" width="70px" height="60px" class="rounded">
                    </a>
                </div>
                <div class="container-fluid justify-content-center">
                    <h1 style="color: white; font-weight: bolder;">ED7 PRÉ-MOLDADOS</h1>
                </div>
                <div class="container-fluid justify-content-end d-flex">
                  <a href="sair.php" class="btn btn-danger" style="font-size: medium;">Trocar de Usuário</a>
                </div>
              </nav>              
        </div>
    </header>

    <main>
        <div>
            <img src="imagens/img_2.jpg" alt="Logotipo" style="width: 100%; height: 90vh">
        </div>
    </main>

    <footer>
        <div id="navbar">
            <nav>
                <a  href="../home/index.html" class="item-navbar ativo"><i class="bi bi-house"></i><span>Home</span></a>
                <a href="../cadastrar/cad_produtos.php" class="item-navbar"><i class="bi bi-cart-plus"></i><span>Cadastrar</span></a>
                <a href="../estoque/estoque.php" class="item-navbar"><i class="bi bi-book"></i><span>Estoque</span></a>
            </nav>
        </div>
    </footer>
    
</body>
</html>