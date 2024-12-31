<html>
    <head>
        <title>Prolema</title>
    </head>
    <body>
        <?php
        $conexion = mysqli_connect('host', 'user', 'password', 'base')
        or die('Problemas con la conexion');

        mysqli_query($conexion, "INSERT alumnos(nombre, mail, codigocurso) VALUES
                    ('$_REQUEST[nombre]', '$_REQUEST[mail]', $_REQUEST[codigocurso])")
        or die('Problemas en el select: '. mysqli_error($conexion));
        echo 'El alumno fue dado de alta';
        
    
        ?>

    </body>
</html>