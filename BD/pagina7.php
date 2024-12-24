<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
    <?php
        $conexion = mysqli_connect('host', 'user', 'password', 'base')
        or die('Problemas con la conexion');

        $registros = mysqli_query($conexion, "SELECT codigo, nombre, mail, codigocurso FROM alumnos WHERE mail='$_REQUEST[mail]'") 
        or die('Prolemas en el select'.mysqli_error($conexion));

        if($reg = mysqli_fetch_array($registros)){
            echo 'Codigo: '. $reg['codigo']. '<br>';
            echo 'Nombre: '. $reg['nombre']. '<br>';
            echo 'Mail: '. $reg['mail']. '<br>';
            echo 'Curso: ';
            switch($reg['codigocurso']){
                case 1:
                    echo 'PHP';
                    break;
                case 2:
                    echo 'ASP';
                    break;
                case 3:
                    echo 'JSP';
                    break;
            }
            echo '<br>';
            echo '<br>';
        }else{
            echo 'No existe un alumno con ese mail ';
        }
       
        ?>
    </body>
</html>