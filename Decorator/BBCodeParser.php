<?php 

    class BBCodeParser{

        private $post;

        function _constructor($object){
            $this->post = $object;
        }

        public function getContent(){

            $post->filter();
            $content = $this->parseBBCode($post->getContent());
            return $content;
        }
        private function parseBBCode($content){
            //coding process wil go there 
        }
    }

?>