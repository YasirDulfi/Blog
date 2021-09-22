<?php
require_once 'libs/controller.php';

class Errors extends Controller {


    function __construct() {
        parent::__construct();
        echo("se ha producido un error");
    }

    
}