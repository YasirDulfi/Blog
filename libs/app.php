<?php
 require_once 'Controllers/error.php';

class App {



    function __construct() {


        $url = isset($_GET['url'])? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        
        if(empty($url[0]) || $url[0] == 'index'){
            
            $direccionControlador = 'Controllers/main.php';
            require_once $direccionControlador;
            //cargo el controlador 
            $controller = new Main();

            $controller->loadModel('main');

            $controller->render();
            return false;
        } 

        $direccionControlador = 'Controllers/'.$url[0].'.php';
        
        if(file_exists($direccionControlador)){
            
            //cargo el controlador
            require_once $direccionControlador;
            //cargo la vista
            $controller = new $url[0];
            //cargo el modelo
            $controller->loadModel($url[0]);
           

            if(isset($url[1])){
                if(isset($url[2])){
                    $controller->{$url[1]}($url[2]);   

                }else {
                    $controller->{$url[1]}();   

                }

            } else {
                 //cargo la pagina
                $controller->render();
            }

        } else {                
            
            
            $controller = new Errors();
        }


        
    
    }
    

}







?>