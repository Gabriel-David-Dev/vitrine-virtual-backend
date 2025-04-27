<?php

    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    unset($_SESSION['logado']);
    header("Location: " . "../Frontend/index.php");

?>