<?php

class Login extends Controller{


    function __construct() {
        parent::__construct();
    }
    
    function render() {
        $this->view->render('login/index');
    }
    
    public function loginUsuario() {

        $usuario = $_POST['usuario'];
        $contrasenia = $_POST['code'];

        $existe =$this->model->comprobarUsuario(['usuario'=>$usuario,'contrasenia'=>$contrasenia]);
        
        $this->direccion($existe);
    }

    private function direccion($resultado){
        
        if(isset($resultado[0])){
            if($resultado[0]['poder'] == 1){
                session_start();
                $_SESSION['admin'] = true;
                
                $this->view->render('admin/index');
            }

            if($resultado[0]['poder'] == 0){
                $this->view->render('login/index');
            }
        } else {
            $this->view->render('main/index');

        }
    }
}