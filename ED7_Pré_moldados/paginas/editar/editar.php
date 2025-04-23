<?php
    if(!empty($_GET['id']))
    {
        
        include_once('../cadastrar/config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * from produtos WHERE id=$id";

        $result = $conexao-> query($sqlSelect);

        if($result-> num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $cod_barras = $user_data["cod_barras"];
                $descricao = $user_data["descricao"];
                $unidade = $user_data["unidade"];
                $quantidade = $user_data["quantidade"];
                $valor_unitario = $user_data["valor_unitario"];
            }

        }

        else{
            header('Location: ../estoque/estoque.php');
        }

    }

    else{
        header('Location: ../estoque/estoque.php');
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
    <title>Editar</title>

</head>
<body style="background-color: rgb(3, 49, 57);">
    <main>
        <div class="box">
            <span class="borderLine"></span>
            <form action="saveEdit.php" method="POST">
                <h2 style="font-weight: bolder;">Editar Produtos</h2>
    
                <div class="inputBox">
                    <input type="text" required="required" name="cod_barras" id="cod_barras" value="<?php echo $cod_barras ?>">
                    <span>Cod. Barras</span>
                    <i></i>
                </div>
    
                <div class="inputBox">
                    <input type="text" required="required" name="descricao" id="descricao" value="<?php echo $descricao ?>">
                    <span>Descrição</span>
                    <i></i>
                </div>
    
                <div class="inputBox">
                    <input type="text" required="required" name="unidade" id="unidade" value="<?php echo $unidade ?>">
                    <span>Unidade</span>
                    <i></i>
                </div>

                <div class="inputBox">
                    <input type="text" required="required" name="quantidade" id="quantidade" value="<?php echo $quantidade ?>">
                    <span>Quantidade</span>
                    <i></i>
                </div>

                <div class="inputBox">
                    <input type="text" required="required" name="valor_unitario" id="valor_unitario" value="<?php echo $valor_unitario ?>">
                    <span>V. Unitário</span>
                    <i></i>
                </div>

                <input type="hidden" name="id" value= "<?php echo $id ?>">
    
                <input type="submit" value="Editar" name="update" id="update">
    </main>

    <footer>
        <div id="navbar">
            <nav>
                <a  href="../home/index.html" class="item-navbar"><i class="bi bi-house"></i><span>Home</span></a>
                <a href="../cadastrar/cad_produtos.php" class="item-navbar ativo"><i class="bi bi-cart-plus"></i><span>Cadastrar</span></a>
                <a href="../vender/index.html" class="item-navbar"><i class="bi bi-cart4"></i><span>Vender</span></a>
                <a href="../estoque/estoque.php" class="item-navbar"><i class="bi bi-book"></i><span>Estoque</span></a>
                <a href="../historico/index.html" class="item-navbar"><i class="bi bi-clipboard2-data"></i><span>Histórico</span></a>
                <a href="../remover/index.html" class="item-navbar"><i class="bi bi-trash"></i><span>Remover</span></a>
            </nav>
        </div>
    </footer>
    
</body>
</html>