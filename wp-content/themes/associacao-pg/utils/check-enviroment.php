<?php
    function checkEnvironment()
    {
        $serverUrl = $_SERVER['HTTP_HOST'];

        $productionUrl = 'https://icsi.com.br/cliente/apg/';
        $localhostUrl = 'localhost';

        $production = '';
        $local = '40';

        if ($serverUrl === $productionUrl) {
            return $production;         
        }elseif($serverUrl === $localhostUrl) {
            return $local;
        }else{
            return 'Ambiente desconhecido';
        }

    }
    $environment = checkEnvironment();
    $homepageId = $environment;