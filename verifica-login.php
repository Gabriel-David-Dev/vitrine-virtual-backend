<?php
    session_start();

    if(isset($_POST['entrar']) && !empty($_POST['email']) && !empty($_POST['senha'])) {

        include_once('config-db.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql  = "SELECT * FROM usuarios WHERE email_usuario = '$email' AND senha_usuario = '$senha'";
        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1) {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: ' . '../Frontend/login.php?erro=1');
        }
        else {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            $_SESSION['logado'] = true;
            header('Location: ' . '../Frontend/index.php');
        }
    }
    else {
        header('Location: ' . '../Frontend/login.php');
    }
?>