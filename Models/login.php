<?php

class loginModel extends Model {


    function __construct() {
        parent::__construct();
    }

    function comprobarUsuario($datos){
        
        try{
            $conexion = $this->db->connect()->prepare('SELECT poder FROM usuarios WHERE nombre_usuario=:usuario AND contrasenia=:contrasenia');
            
            $conexion->execute(['usuario'=>$datos['usuario'],'contrasenia'=>$datos['contrasenia']]);

            $devolver = $conexion->fetchAll();

            return $devolver;
        } catch (PDOException $e){
            echo "error: ".$e->getMessage();
        }
    }

   
}