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

        if($reg = mysqli_fetch_array($registros)){
            mysqli_query($conexion , "DELETE FROM alumnos WHERE mail='$_REQUEST[mail]'")
            or die('Problemas con el select'. mysqli_error($conexion));

            echo 'Se efectuo el borrado del alumno con dicho mail';
        }else{
            echo 'No existe un alumno con ese mail';
        }
        
        ?>
    </body>
</html>