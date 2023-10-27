<?php

$usuario = 'root';
$senha = '';
$database = 'login';
$host = 'localhost';

$conectar = new mysqli($host, $usuario, $senha, $database);

if($conectar->error){
    die("Falha ao conectar ao banco de dados");
}