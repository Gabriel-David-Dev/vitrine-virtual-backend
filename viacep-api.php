<?php

    function buscarEndereco($cep) {
        $cepFormatado = preg_replace("/[^0-9]/", "", $cep);

        if (strlen($cepFormatado) === 8) {
            $url = "https://viacep.com.br/ws/{$cepFormatado}/json/";
            $response = @file_get_contents($url);
            if ($response !== false) {
                $dados_cep = json_decode($response);
                return $dados_cep;
            } 
            else {
                return null;
            }
        } 
        else {
            return 'CEP inválido';
        }
    }

?>