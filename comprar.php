<?php
include_once('conexao.php') ;


if (isset($_GET['id'])) {
    $produto_id = $_GET['id'];
    $quantidade = 1; 

    $sql = "INSERT INTO vendas (produto_id, quantidade) VALUES ('$produto_id', '$quantidade')";
    if ($conectar->query($sql) === TRUE) {
        echo "Produto comprado com sucesso!";
    } else {
        echo "Erro ao comprar o produto: " . $conectar->error;
    }
}
header('location: vendas.php');
$conectar->close();
?>
