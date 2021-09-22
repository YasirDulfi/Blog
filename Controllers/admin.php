<?php
require_once './index.php';

class Admin extends Controller{
    

    function __construct() {
        parent::__construct();
        $this->view->resultados = [];
    }

    public function render() {
        $usuarios = $this->model->getUsers();
        $this->view->resultados = $usuarios;
        $this->view->render('admin/index');
    }

    public function borrar($id){
        
        $this->model->borrarUsers($id);
        $this->render();
    }

    
}





?>