<?php



class Signup extends Controller {


    function __construct(){
        parent::__construct();
    }

    function render() {
        $this->view->render('sign_up/index');
    }

    function registrarUsuario() {
        
        // var_dump($_POST['Rnombre']);

        $nombre        = $_POST['Rnombre'];
        $apellidos     = $_POST['Rapellido'] ;
        $nombreUsuario = $_POST['RnombreUser'];
        $contraseña    = $_POST['Rcontraseña'];
        

        // $nombre=  'final';
        // $apellidos = 'final';
        // $nombreUsuario = 'final';
        // $contraseña = 'final';

       

        $this->model->insert(["nombre"=>$nombre,"apellidos"=>$apellidos,"nombreUsuario"=>$nombreUsuario,"contraseña"=>$contraseña ]);
        
    }
}

