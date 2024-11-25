<?php
    class Painel{
        public static function logado(){
            //Operador ternario
            return isset($_SESSION['login']) ? true : false;
        }
    }
?>