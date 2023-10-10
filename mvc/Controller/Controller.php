<?php 

include 'mvc/model/Model.php';

class Controller {
    public $model;

    function __construct(){
        $this->model = new Model();

    }
}

?>