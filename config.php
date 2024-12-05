<?php

    /*cria uma sessão ou retorna o atual com base em um identificaor passado por
     meio de uma solicitação GET ou POST ou passado por meio de um cookie*/
    session_start();

    define('INCLUDE_PATH', 'http://localhost/Projeto_01teste/'); // Definir o domínio do site

    define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/');

    //Banco de dados

    //Hospedagem
    define('HOST', 'localhost');
    //Banco
    define('DATABASE', 'projeto_01');
    //Usuario
    define('USER', 'root');
    //Senha
    define('PASSWORD', '');

    $autoload = function($class){
        include('assets/classes/'.$class.'.php'); // Carregando a classe: 'Email'
    };

    spl_autoload_register($autoload);

    //função para os cargos dentro do painel
    function pegaCargo($cargo){
        $vetor = [
            '0' => 'Normal',
            '1' => 'Sub-Administrador',
            '2' => 'Administrador'
        ];
        return $vetor[$cargo];
    }
?>