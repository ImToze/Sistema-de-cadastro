<?php


include 'conexao.php';
session_start();
$user_id = $_SESSION['user_id'];
$id = $_GET['id'];//Aqui
if(!isset($user_id)){
   header('location:produtos.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:produtos.php');
};



   $product_name = $_POST['nomeprod'];
   $product_price = $_POST['precoprod'];

   $select_cart = mysqli_query($conectar, "SELECT * FROM `produtos` WHERE produto = '$product_name'") or die('query failed');

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart!';
   }else{
      mysqli_query($conectar, "INSERT INTO `produtos`(produto, preco) VALUES('$product_name', '$product_price')") or die('query failed');
      $message[] = 'product added to cart!';
   }


?>