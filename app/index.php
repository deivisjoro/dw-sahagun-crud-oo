<?php
    
    session_start();

    $controlador = isset($_GET["modulo"]) ? strtolower($_GET["modulo"]) : 'inicio';
    if(!file_exists('app/controller/'.$controlador.'.php')){
        $controlador = 'inicio';
    }

    require_once('app/controller/'.$controlador.'.php');
    $modulo = ucwords($controlador); 
    $controller = new $modulo;

    $accion = isset($_GET["accion"]) ? strtolower($_GET["accion"]) : 'index';
    if(!method_exists($controller, $accion)){
        $accion = 'index';
    }
    
    //validaciones
    if(isset($_SESSION["admin"]) && !empty($_SESSION["admin"])){
        $controller->view->layout = 'administrador';        
    }
    else{
        require_once('app/controller/inicio.php');
        $controller = new Inicio;
        $controller->view->layout = 'principal';
    }

    call_user_func(array($controller, $accion));
    
    
    

?>