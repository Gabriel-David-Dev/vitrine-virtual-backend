<?php

    $dbHost = 'metro.proxy.rlwy.net';
    $dbUsername = 'root';
    $dbPassword = 'bQkCySeKDcIAPPyMcfqoFzbrXYZlAwxQ';
    $dbName = 'railway';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName, 41959);

    if ($conexao->connect_error) {
        die("Falha na conexão: " . $conexao->connect_error);
    }

?>