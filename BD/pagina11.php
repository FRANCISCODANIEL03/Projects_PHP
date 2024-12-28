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
        ?>
        <form action="pagina12.php" method="post">
            Ingrese nuevo mail:
            <input type="text" name="mailnuevo" value="<?php
            echo $reg['mail'] ?>"><br>
            <input type="hidden" name="mailviejo" value="<?php
            echo $reg['mail'] ?>"><br>
            <input type="submit" value="Modificar">
        </form>
        <?php
        }else{
            echo 'No existe un alumno con ese mail';
        }
        ?>
    </body>
</html>