<?php 
ini_set('mysql.connect_timeout',300);
ini_set('default_socket_timeout',300);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=WindSong:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/projectos/MVC ejemplo/blog_MVC/Public/css/style_signUp.css" type="text/css">


    <title>Document</title>
</head>


<?php require_once 'Views/header.php'; ?>

<body>
    <section class="contenedor">

        <form action="<?php echo constant('URL');?>signup/registrarUsuario"  id="registrar" method="post">
            <h2>Registar usuario</h2>
            <input name="Rnombre" id="Rnombre" placeholder="nombre" type="text">
            <input name="Rapellido" id="Rapellido" placeholder="apellido" type="text">
            <input name="RnombreUser" id="RnombreUser" placeholder="nombreUser" type="text">
            <input name="Rcontraseña" id="Rcontraseña" placeholder="contraseña" type="password">
            <input name="Rcontraseña" id="Rcontraseña" placeholder="Repetir contraseña" type="password">
            <input name="submit" id="Rusuario" type="submit" value="submit">        
        </form>
    </section>
</body>
<?php require_once 'Views/footer.php'; ?>
</html>