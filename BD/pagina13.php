<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
        <form action="pagina14.php" method="post">
            Ingrese nombre:
            <input type="text" name="nombre"><br>
            Ingrese mail:
            <input type="text" name="mail"><br>
            Seleccione el curso:
            <select name="codigocurso">
                <?php
                $conexion = mysqli_connect('localhost', 'root', 'FRANCISCO031147', 'base1')
                or die('Problemas con la conexion');
          
                $registros = mysqli_query($conexion, "SELECT codigo, nombrecurso FROM cursos") 
                or die('Prolemas en el select'.mysqli_error($conexion));

                while($reg = mysqli_fetch_array($registros)){
                    echo "<option value=\"$reg[codigo]\">$reg[nombrecurso]</option>";
                }
            
                ?>
            </select>
            <br>
            <input type="submit" value="Registrar">
        </form>
    </body>
</html>