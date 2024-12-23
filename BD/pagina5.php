<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
    <?php
        $conexion = mysqli_connect('host', 'user', 'password', 'base')
        or die('Problemas con la conexion');

        $registros = mysqli_query($conexion, "SELECT codigo, nombre, mail, codigocurso FROM alumnos") 
        or die('Prolemas en el select'.mysqli_error($conexion));

       
        mysqli_close($conexion);
        ?>
    </body>
</html>