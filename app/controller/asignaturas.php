<?php
    include_once('controller.php');
    class Asignaturas extends Controller{

        public function __construct(){
            $this->setTable('asignaturas');
            parent::__construct();
        }

        public function index(){
            $estudiantes = $this->getModel()->list();
            $this->view->render('asignaturas/index', $estudiantes);
        }

            
    }

?>