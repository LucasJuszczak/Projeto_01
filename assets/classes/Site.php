<?php   

    class Site{
        public static function updateUserOnline(){
            //se existe a sessão online
            if (isset($_SESSION['online'])) {
                

            }else{
                //acessando o site peçla primeira vez
                $_SESSION['online'] = uniqid();
                $ip = $_SERVER['REMOTE_ADDR'];
                $token = $_SESSION['online'];
                $horarioAtual = date('Y-m-d H:i:s');
            }
        }
    }
?>