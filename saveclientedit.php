<?php
    include_once('conexao.php');
    if(isset($_POST['update'])){
        $cliente = $_POST['cliente'];
        $cpf = $_POST['cpf'];
        $id = $_POST['id'];
        $sqlupdate = "UPDATE cliente SET cliente ='$cliente', cpf = '$cpf' WHERE id = '$id'";

        $result = $conectar->query($sqlupdate);
    }

    header('location: clientes.php')
?>