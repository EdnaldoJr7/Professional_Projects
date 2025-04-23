<?php
    session_start();
    include_once('../cadastrar/config.php');

    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM produtos WHERE id LIKE '%$data%' or descricao LIKE '%$data%' or cod_barras LIKE '%$data%' ORDER BY id DESC";
    }
    else
    {
        $sql = "SELECT * FROM produtos ORDER BY id DESC";
    }

    $result = $conexao -> query($sql);

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
    <title>Estoque</title>

    <style>
        .table-bg{
            border-radius: 15px 15px 0 0 ;
        }

        .box-search{
            display: flex;
            justify-content: center;
            gap: .1%;
        }
    </style>


</head>
<body style="background-color:rgb(3, 49, 57)">


    <div>
        <form class="box-search" style="margin-top: 15px;">
            <input class="form-control w-25" type="search" placeholder="O que você Procura?" style="text-align:center;" id="pesquisar">
            <button class="btn btn-primary" type="button" onclick="searchData()" ><span><i class="bi bi-search"></i></span></button>
        </form>
    </div>
    
    <main>
        <div class="container m-5" style="margin: auto;">
            <table class="table table-striped table-bg">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Código de Barras</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Unidade</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Valor Unitário</th>
                        <th scope="col">...</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($user_data = mysqli_fetch_assoc($result))
                        {
                            echo "<tr>";
                            echo "<td>".$user_data['id']."</td>";
                            echo "<td>".$user_data['cod_barras']."</td>";
                            echo "<td>".$user_data['descricao']."</td>";
                            echo "<td>".$user_data['unidade']."</td>";
                            echo "<td>".$user_data['quantidade']."</td>";
                            echo "<td>".$user_data['valor_unitario']."</td>";
                            echo "<td>
                                <a href='../editar/editar.php?id=$user_data[id]' class= 'btn btn-primary btn-sm'>
                                    <span><i class='bi bi-pencil'></i></span>
                                </a>
                                    
                                <a href='../remover/delete.php?id=$user_data[id]' class= 'btn btn-danger btn-sm'>
                                    <span><i class='bi bi-trash'></i></span>
                                </a>

                            </td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </main>

    <footer>
        <div id="navbar">
            <nav>
                <a  href="../home/home.php" class="item-navbar"><i class="bi bi-house"></i><span>Home</span></a>
                <a href="../cadastrar/cad_produtos.php" class="item-navbar"><i class="bi bi-cart-plus"></i><span>Cadastrar</span></a>
                <a href="../estoque/estoque.php" class="item-navbar ativo"><i class="bi bi-book"></i><span>Estoque</span></a>
            </nav>
        </div>
    </footer>
    
</body>

<script>
    var search = document.getElementById('pesquisar');
    
    search.addEventListener("keydown", function(event) {
        if (event.key === "Enter")
        {
            searchData();
        }
    });

    function searchData()
    {
        window.location = 'estoque.php?search='+search.value;
    }
</script>
</html>