<?php

class SignupModel extends Model{

    public function __construct() {
        parent::__construct();
        
    }

    public function insert($datos){
        
        $nombre = $datos['nombre'];
        $apellidos = $datos['apellidos'];
        $nombreUsuario = $datos['nombreUsuario'];
        $contrasenia = $datos['contraseña'];
        $id ='NULL';
        $poder = '0';


        $peticion =  $this->db->connect()->prepare('INSERT INTO usuarios (id_usuario, nombre, apellidos, nombre_usuario, contrasenia, poder) VALUES (:id_usuario, :nombre, :apellidos, :nombre_usuario, :contrasenia, :poder)'); 
       
        $peticion -> execute(['id_usuario'=> $id, 'nombre'=>$nombre, 'apellidos'=>$apellidos, 'nombre_usuario'=>$nombreUsuario, 'contrasenia'=>$contrasenia, 'poder'=>$poder]);
        
        
      
    }
}

?>

