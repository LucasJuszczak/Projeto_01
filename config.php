<?php

    /*cria uma sessão ou retorna o atual com base em um identificaor passado por meio de uma solicitação GET ou POST ou passado por meio de um cookie*/
    session_start();

    define('INCLUDE_PATH', 'http://localhost/Projeto_01teste'); // Definir o domínio do site

    define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/');

    //Banco de dados

    
    
    $autoload = function($class){
        include('assets/classes/'.$class.'.php'); // Carregando a classe: 'Email'
    };

    spl_autoload_register($autoload);
?>