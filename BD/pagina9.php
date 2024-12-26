<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
        <?php
        $conexion = mysqli_connect('host', 'user', 'password', 'base')
        or die('Problemas con la conexion');
 
        $registros = mysqli_query($conexion, "SELECT * FROM alumnos WHERE mail='$_REQUEST[mail]'") 
        or die('Prolemas en el select'.mysqli_error($conexion));

       
        ?>
    </body>
</html>