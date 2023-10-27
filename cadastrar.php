<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conectar, trim($_POST['nome']));
$email = mysqli_real_escape_string($conectar, trim($_POST['email']));
$senha = mysqli_real_escape_string($conectar, trim($_POST['senha']));

$sql = "select count(*) as total from usuario where email = '$email'";
$result = mysqli_query($conectar, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: cadastro.php');
	exit;
}

$sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

if($conectar->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conectar->close();

header('Location: index.php');
exit;
?>