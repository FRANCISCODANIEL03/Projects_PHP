<html>
    <head>
        <title>Pagina2</title>
    </head>

    <body>
        <?php
            $num = $_REQUEST['num'];
            if($num == NULL) echo 'Valor no enviado';
            if(!is_numeric($num)) echo 'Error de datos enviados';
            else{    
            function fibo($num1){
                if($num1 < 2){return $num1;}
                else{return fibo($num1-1) + fibo($num1 - 2);}
            }
            $res = fibo($num);
            echo $res;
            }
        ?>
    </body>
</html>