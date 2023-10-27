<?php



    session_start();

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {

        include_once('conexao.php');

       $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuario WHERE email = '$email' and senha = '$senha'";

        $result = $conectar->query($sql);
      
        if(mysqli_num_rows($result) < 1){
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: index.php');
        }else{
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            $row = mysqli_fetch_assoc($result);
             $_SESSION['user_id'] = $row['id'];
            header('Location: dashboard.php');
        }

    }else{
        header('Location: index.php');
    }
    
    
    
?>