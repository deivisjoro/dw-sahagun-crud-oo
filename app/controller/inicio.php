<?php
    include_once('controller.php');
    class Inicio extends Controller{

        public function index(){
            $this->view->render('inicio/index', null);
        }

        public function login(){
            if(isset($_POST["entrar"]) && !empty($_POST["entrar"])){
                if($_POST["usuario"]=='admin' && $_POST["password"]=='123'){
                    $_SESSION["admin"] = "SI";
                    echo "paso por aquio";
                }
            }    
            header("Location: ?modulo=inicio");
        }

        public function logout(){
            unset($_SESSION);
            session_destroy();
            header("Location: ?modulo=inicio");
        }

    }

?>