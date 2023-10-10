<?php 
    class Emoticon{

        private $post;

        function _constructor($object){
            $this->post = $object;
        }

        public function getContent(){

            $post->filter();
            $content = $this->parseEmoticon($post->getContent());
            return $content;
        }
        private function parseEmoticon($content){
            //coding process wil go there 
        
    }
}


?>