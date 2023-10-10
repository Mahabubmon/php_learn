<?php 

    class Observable{

        private $observers = array();
        public function register($object){
            if($object instanceof observer ){
                $this->observers = $object;

            }else{
                echo "Object should be implements";

            }
           
        }

        public function stateChange(){
            foreach($this->observers as $observers){
                $observer->message();
            }
        }
    }

?>