<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
        <?php
        $conexion = mysqli_connect('host', 'user', 'password', 'base')
        or die('Problemas con la conexion');

        mysqli_query($conexion, "UPDATE alumnos SET mail='$_REQUEST[mailnuevo]' WHERE 
        mail='$_REQUEST[mailviejo]'")
        or die('Problemas en el select: '.mysqli_error($conexion));

        echo 'El mail fue modificado con exito';
        mysqli_close($conexion);
        ?>
    </body>
</html>