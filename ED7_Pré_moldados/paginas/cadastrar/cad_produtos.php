<?php
    if(isset($_POST['submit']))
    {
        
        include_once('config.php');
        
        $cod_barras = $_POST["cod_barras"];
        $descricao = $_POST["descricao"];
        $unidade = $_POST["unidade"];
        $quantidade = $_POST["quantidade"];
        $valor_unitario = $_POST["valor_unitario"];


        $result = mysqli_query($conexao, "INSERT INTO produtos(cod_barras, descricao, unidade, quantidade, valor_unitario) VALUES ('$cod_barras', '$descricao', '$unidade', '$quantidade', '$valor_unitario')");
    }
?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script defer src="menu.js"></script>
    <title>Cadastrar</title>

</head>
<body style="background-color: rgb(3, 49, 57);">
    <main>
        <div class="box">
            <span class="borderLine"></span>
            <form action="cad_produtos.php" method="POST">
                <h2 style="font-weight: bolder;">Cadastrar Produtos</h2>
    
                <div class="inputBox">
                    <input type="text" required="required" name="cod_barras" id="cod_barras">
                    <span>Cod. Barras</span>
                    <i></i>
                </div>
    
                <div class="inputBox">
                    <input type="text" required="required" name="descricao" id="descricao">
                    <span>Descrição</span>
                    <i></i>
                </div>
    
                <div class="inputBox">
                    <input type="text" required="required" name="unidade" id="unidade">
                    <span>Unidade</span>
                    <i></i>
                </div>

                <div class="inputBox">
                    <input type="text" required="required" name="quantidade" id="quantidade">
                    <span>Quantidade</span>
                    <i></i>
                </div>

                <div class="inputBox">
                    <input type="text" required="required" name="valor_unitario" id="valor_unitario">
                    <span>V. Unitário</span>
                    <i></i>
                </div>
    
                <input type="submit" value="Cadastrar" name="submit">
    </main>

    <footer>
        <div id="navbar">
            <nav>
                <a  href="../home/home.php" class="item-navbar"><i class="bi bi-house"></i><span>Home</span></a>
                <a href="../cadastrar/index.html" class="item-navbar ativo"><i class="bi bi-cart-plus"></i><span>Cadastrar</span></a>
                <a href="../estoque/estoque.php" class="item-navbar"><i class="bi bi-book"></i><span>Estoque</span></a>
            </nav>
        </div>
    </footer>
    
</body>
</html>