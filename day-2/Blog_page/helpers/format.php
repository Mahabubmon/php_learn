<?php 

    class format{
        public function formatDate($data){
            return date('F j, Y, g:i a',strtotime($data));

        }
    }     

?>