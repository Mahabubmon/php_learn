<?php 

    class Post implements Iterator{
        private $post = array();
        function __construct($post){

            if(is_array($post)){
                $this->post = $post;
            }
        }

        public function rewind(){
            reset($this->$post);
        }

        public function current(){
            return current($this->post);
        }
        public function key(){
            return key($this->var);
        }
        public function next(){
            return ($this->var);
        }
        public function valid(){
            return ($this->current()!== false);
        }

    }

?>