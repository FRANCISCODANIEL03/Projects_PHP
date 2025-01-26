<html>
    <head>
        <title>Pagina2</title>
    </head>

    <body>
        <?php
            $imc = $_REQUEST['peso'] / ($_REQUEST['estatura']*$_REQUEST['estatura']);
            echo 'Tu IMC es: '.$imc;
        ?>
    </body>
</html>