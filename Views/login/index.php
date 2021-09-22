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
    <link rel="stylesheet" href="<?php constant('URL'); ?>Public/css/style_logIn.css">
    <title>Document</title>
</head>

<?php require_once 'Views/header.php'; ?>
<body id="cuerpo">
    <form id="add_session" method="POST" action="<?php constant('URL');?>login/loginUsuario">
        <h2>Iniciar sesion</h2>
        <input name="usuario" id="usuario" placeholder="usuario" type="text">
        <input name="code" id="code" placeholder="contraseña" type="password">
        <input id="submitU" value="submit" type="submit">
        <p id="registrarse"><a href="<?php constant('URL'); ?>signup">No estoy registado<a></p>
    </form>
    
</body>
<?php require_once 'Views/footer.php'; ?>

</html>