<?php 

    class format{
        public function formatDate($data){
            return date('F j, Y, g:i a',strtotime($data));

        }


        public function textShorten($text, $limit = 400){
            $text = $text." ";
            $text = substr($text, 0, $limit);
            $text = substr($text, 0, strrpos($text, ' '));
            $text = $text.".....";
            return $text;

        }
    }     

?>