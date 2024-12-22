<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
        <?php
        $conexion = mysqli_connect('host', 'user', 'password', 'base')
        or die('Problemas con la conexion');

        mysqli_query($conexion, "INSERT cursos(nombrecurso) VALUES
                    ('$_REQUEST[nombrecurso]')") 
        or die('Prolemas en el select'.mysqli_error($conexion));

        mysqli_close($conexion);
        echo 'El curso fue dado de alta';
        ?>
    </body>
</html>