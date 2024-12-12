<?php
    class Painel{
        public static function logado(){
            return isset($_SESSION['login']) ? true : false; //Operador ternário
        }

        public static function logout(){
            session_destroy();
            header('Location: '.INCLUDE_PATH_PAINEL);
        }

        public static function loadPage(){
            if(isset($_GET['url'])){
                $url = explode('/', $_GET['url']);
                if(file_exists('pages/'.$url[0].'.php')){
                    include('pages/'.$url[0].'.php');
                }else{
                    header('Location: '.INCLUDE_PATH_PAINEL);
                }
            }else{
                include('pages/home.php');
            }
        }

        public static function deleteUserOnline(){
            $date = date('Y-m-d H:i:s');
            MySql::conectar()->exec("DELETE FROM `tb.admin.online` WHERE ultima_acao < `$date` - INTERVAL 1 MINUTE");
        }

        public static function listUserOnline(){
            self::deleteUserOnline();
            $sql = MySql::conectar()->prepare("SELECT * FROM `tb.admin.online`");
            $sql->execute();
            return $sql->fetchAll();
        }
    }
?>