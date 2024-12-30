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
          
                
                ?>
            </select>
            <br>
            <input type="submit" value="Registrar">
        </form>
    </body>
</html>