<?php

class AdminModel extends Model{


    function __construct() {
        parent::__construct();
    }
    
    public function getUsers(){
        $peticion =  $this->db->connect()->prepare('SELECT * FROM usuarios');
        $peticion->execute();

        $resultado = $peticion->fetchAll();
        return $resultado; 
    }

    public function borrarUsers($id){
        try{
        $peticion = $this->db->connect()->prepare('DELETE FROM usuarios WHERE id_usuario= :id AND poder=0');
        $peticion->bindParam('id',$id);
        $peticion->execute();
        } catch(PDOException $e){
            echo "error: ".$e->getMessage();
        }
    }
}





?>