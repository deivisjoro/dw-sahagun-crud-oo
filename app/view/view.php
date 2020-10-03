<?php

    class View{
        public $layout;
        public $vista;

        public function __contruct(){

        }

        public function render($nombre, $datos){
            include_once('app/view/layouts/'.$this->layout.'.php');
        }
    }

?>