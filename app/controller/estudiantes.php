<?php
    include_once('controller.php');
    class Estudiantes extends Controller{

        public function __construct(){
            $this->setTable('estudiantes');
            parent::__construct();
        }

        public function index(){
            $estudiantes = $this->getModel()->list();
            $this->view->render('estudiantes/index', $estudiantes);
        }

        public function add(){
            if(isset($_POST["guardar"]) && !empty($_POST["guardar"])){
                $datos = "'".$_POST["nombre"]."','".$_POST["nota1"]."','".$_POST["nota2"]."','".$_POST["nota3"]."'";                
                $this->getModel()->add($datos);
                header("Location: ?modulo=estudiantes");
            }
            $this->view->render('estudiantes/add', null);
        }

        public function edit(){

            if(isset($_POST["guardar"]) && !empty($_POST["guardar"])){
                $datos = "nombre = '".$_POST["nombre"]."', nota1 = '".$_POST["nota1"]."', nota2 = '".$_POST["nota2"]."', nota3 = '".$_POST["nota3"]."'";                
                $this->getModel()->edit($datos, $_POST["id"]);
                header("Location: ?modulo=estudiantes");
            }

            $id = $_GET["id"];
            $estudiante = $this->getModel()->find($id);
            if(count($estudiante)>0){
                $this->view->render('estudiantes/edit', $estudiante[0]);
            }
            else{
                header("location: ?modulo=estudiantes");
            }
        }

        public function delete(){
            $id = $_GET["id"];
            $this->getModel()->delete($id);
            header("Location: ?modulo=estudiantes");
        }

            
    }

?>