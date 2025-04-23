<?php

    include_once('../cadastrar/config.php');

    if(isset($_POST['update']))
    { 
        $id = $_POST["id"];
        $cod_barras = $_POST["cod_barras"];
        $descricao = $_POST["descricao"];
        $unidade = $_POST["unidade"];
        $quantidade = $_POST["quantidade"];
        $valor_unitario = $_POST["valor_unitario"];

        $sqlUpdate = "UPDATE produtos SET cod_barras = '$cod_barras', descricao = '$descricao', unidade = '$unidade', quantidade =  '$quantidade', valor_unitario = '$valor_unitario' WHERE id = '$id'";

        $result = $conexao -> query($sqlUpdate);
    }

    header('Location: ../estoque/estoque.php')


?>