<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
        <?php
            $conexion = mysqli_connect('host', 'user', 'password', 'base')
            or die('Problemas con la conexion');

            mysqli_query($conexion, "INSERT alumnos
            (nombre, mail, codigocurso) VALUES
            ('$_REQUEST[nombre]', '$_REQUEST[mail]', $_REQUEST[codigocurso])")
            or die('Problemas en el INSERT'.mysqli_error($conexion));

            mysqli_close($conexion);
            echo 'El alumno fue dado de alta';
            ?>
    </body>
</html>