<?php
include 'conexao.php';
session_start();

   $cliente= $_POST['cliente'];
   $cpf = $_POST['cpf'];

   $select_cart = mysqli_query($conectar, "SELECT * FROM `cliente` WHERE cliente = '$cliente'") or die('query failed');

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart!';
   }else{
      mysqli_query($conectar, "INSERT INTO `cliente`(cliente, cpf) VALUES('$cliente', '$cpf')") or die('query failed');
      $message[] = 'product added to cart!';
   }

   header('location:clientes.php');


?>