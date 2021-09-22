<?php
//se va a encargar de llamar a todas las librerias para que esten
//todas conectadas entre ellas
require_once 'Config/config.php';

require_once 'libs/app.php';
require_once 'libs/controller.php';
require_once 'libs/database.php';
require_once 'libs/model.php';
require_once 'libs/view.php';


$inicializar = new App();