<?php
//se encarga de conectar la vista y el modelo

class Controller {

    //vista
    function __construct() {

        $this->view = new View(); 
    }

    //modelo
    function loadModel($modelo) {

        $direccionModelo = 'Models/'.$modelo.'.php';

        if(file_exists($direccionModelo)){

            require $direccionModelo;

            $modelName = $modelo.'Model';

            $this -> model = new $modelName();

        }
    }
}




?>