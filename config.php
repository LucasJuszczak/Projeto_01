<?php
    session_start(); // Cria uma sessão ou retorna a atual com base em um identificador passado por meio de uma solicitação GET ou POST ou passado por meio de um cookie
    
    date_default_timezone_set('America/Sao_Paulo'); // Fuso horário de São Paulo

    define('NOME_EMPRESA', 'IFPR'); // Nome da Empresa

    define('INCLUDE_PATH', 'http://localhost/Projeto_01/'); // Definir o domínio do site
    
    define('INCLUDE_PATH_PAINEL', INCLUDE_PATH.'painel/'); // Definir a URL do painel

    //Banco de dados
    define('HOST', 'localhost'); //Hospedagem
    define('DATABASE', 'projeto_01'); //Banco
    define('USER', 'root'); //Usuario
    define('PASSWORD', ''); //Senha
    
    $autoload = function($class){
        include('assets/classes/'.$class.'.php'); // Carregando a classe: 'Email'
    };

    spl_autoload_register($autoload);

    // Função para os cargos dentro do painel
    function pegaCargo($cargo){
        $vetor = [
            '0' => 'Normal',
            '1' => 'Sub-Administrador',
            '2' => 'Administrador'
        ];
        return $vetor[$cargo];
    }
?>