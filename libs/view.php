<?php


class View {


    function __construct() {

        // echo("view esta funcionando");

    }

    function render($vista) {
        require_once 'Views/'.$vista.'.php';
    }
}




?>