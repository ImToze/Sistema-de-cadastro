<?php
session_start();
if(!empty($_GET['id'])){
    include_once('conexao.php');

    $id = $_GET['id'];

    $sqlselect = "SELECT * FROM produtos WHERE id = $id";
    
    $result = $conectar->query($sqlselect);

    if($result->num_rows > 0){  
        $sqldelete = "DELETE FROM produtos WHERE id = $id";
        $resultDelete = $conectar->query($sqldelete);
        }
    }

    header('location: produtos.php');


?>