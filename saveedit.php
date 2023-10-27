<?php
    include_once('conexao.php');
    if(isset($_POST['update'])){
        $product_name = $_POST['nomeprod'];
        $product_price = $_POST['precoprod'];
        $id = $_POST['id'];
        $sqlupdate = "UPDATE produtos SET produto ='$product_name', preco = '$product_price' WHERE id = '$id'";

        $result = $conectar->query($sqlupdate);
    }

    header('location: produtos.php')
?>