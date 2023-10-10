<?php 

    class Database1{
        private static $instance;
        public function _construct(){

            if(!self::$instance){
                self::$instance = $this;
                echo "Created New One.<br>";
                return self::$instance;

            }else{
                echo "Old One Instance.<br>";
                return self::$instance;
            }

        }
    }

?>