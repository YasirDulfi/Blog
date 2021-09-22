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

    <link rel="stylesheet" href="http://localhost/projectos/MVC ejemplo/blog_MVC/Public/css/style_footer.css" type="text/css">
   
    <title>Document</title>
</head>

<footer>
    <div id="redesSociales">
        <h2>Redes sociales</h2>
        <div>
            <img id="facebook" src="http://localhost/projectos/MVC ejemplo/blog_MVC/Public/img/social-media/facebook.png" alt="">
            <img id="instagram" src="http://localhost/projectos/MVC ejemplo/blog_MVC/Public/img/social-media/instagram.png" alt="">
            <img id="twitter" src="http://localhost/projectos/MVC ejemplo/blog_MVC/Public/img/social-media/twitter.png" alt="">
        </div>
    </div>
    <form method="POST" id="formularioContacto">
        <h2>Pongase en contacto conmigo</h2>
        <h3 id="correcto">el formulario se ha enviado correctamente</h3>
        <input id="nombreContacto" placeholder="Nombre y Apellidos" type="text" required>
        <input id="emailContacto" placeholder="Email" type="email" required>
        <input id="textoContacto" placeholder="Pongase en contacto conmigo" type="text" required>
        <input id="submitContacto" value="submit" type="submit" required>
    </form>
</footer>
</html>