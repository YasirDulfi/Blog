<!DOCTYPE html>
<html lang="en">

<?php require './config.php' ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=WindSong:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php constant('URL'); ?>Public/css/style_admin.css">
    <title>Document</title>
</head>

<body>
    <?php require_once ' /Views/header.php'; ?>

    <section id="usuarios">
        <div class="titulos_usuarios"> Usuarios</div>
        <table>
        
            <tr class="fila">
                <th class="elementos">Id</th>
                <th class="elementos">Nombre</th>
                <th class="elementos">Apellidos</th>
                <th class="elementos">Nombre del usuario</th>
                <th class="elementos">Contraseña</th>
                <th class="elementos">Poder</th>
                <th class="elementos"><a href="">Borrar<a></th>
                <th class="elementos"><a href="#">Actualizar<a></th>
            </tr>
            <?php  
                $resultado = $this->resultados;
                
                foreach($resultado as $resultado){
            ?>
            <tr class="fila">
                <th class="elementos"><?php echo $resultado['id_usuario']; ?></th>
                <th class="elementos"><?php echo $resultado[ 'nombre' ]; ?></th>
                <th class="elementos"><?php echo $resultado['apellidos']; ?></th>
                <th class="elementos"><?php echo $resultado['nombre_usuario']; ?></th>
                <th class="elementos"><?php echo $resultado['contrasenia']; ?></th>
                <th class="elementos"><?php echo $resultado['poder']; ?></th>
                <th class="elementos"><a href="<?php $this->id = $resultado['id_usuario'];
                                                     echo constant('URL');
                                                ?>admin/borrar/<?php echo $resultado['id_usuario']; ?>">Borrar<a></th>
                <th class="elementos"><a href="#">Actualizar<a></th>
                
            </tr>
            <?php
            
                }
            ?>
        </table>
        
    </section>


    <?php require_once 'Views/footer.php'; ?>
</body>

</html>