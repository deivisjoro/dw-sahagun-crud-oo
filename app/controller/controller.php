<?php
    include_once('app/model/model.php');
    include_once('app/view/view.php');

    class Controller{

        private $model;
        public  $view;
        private $table;

        public function __construct(){
            $this->model = new Model($this->getTable());        
            $this->view  = new View();
        }

        public function setTable($table){
            $this->table = $table;
        }

        public function getTable(){
            return $this->table;
        }

        public function getModel(){
            return $this->model;
        }      

    }

?>