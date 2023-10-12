<?php 

    class Session{
        // Session:init
        public static function init(){
            session_start();
        }

        public static function set($key, $val){
            $_SESSION['$key'] = $val;
        }

        public static function get($key){
            if (isset($_SESSION['$key'])){
                return $_SESSION['$key'];

            }else{
                return false;
            }
        }

        public static function checkSession(){
            self::int();
            if(self::get('login')== false){
                self::destroy();
                heaser("Location:login.php");

            }
        }
        public static function  distroy(){
            session_destroy();
            header("Location:login.pgp");
        }
    }

?>