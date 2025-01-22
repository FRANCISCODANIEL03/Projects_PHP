<html>
    <head>
        <title>Ciclo for</title>
    </head>

    <body>
        <?php
            # Ciclo for
            for($f = 1; $f <= 100; $f++){
                echo $f.', ';
            }
            # Ciclo while
            $valor = rand(1, 100);
            $inicio = 1;
            while($inicio <= $valor){
                echo $inicio.'<br>',
                $inicio++;
            }
        ?>
    </body>
</html>