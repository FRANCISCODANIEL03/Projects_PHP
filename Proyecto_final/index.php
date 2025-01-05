<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Familiar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Registro Familiar</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <label>Id: </label>
        <input type="text" name="id" id="id">
        <label>Nombre: </label>
        <input type="text" name="nombre" id="nombre">
        <label>Parentesco: </label>
        <input type="text" name="parentesco" id="parentesco">
        <label>Foto: </label>
        <input type="file" name="foto" id="foto">
        <button type="submit" name="registrar">Registrar</button>
        <button type="submit" name="actualizar">Actualizar</button>
        <button type="submit" name="eliminar">Eliminar</button>
        <button id="mostrar">Mostrar Listado</button>
        <div>
        <?php
            // Conexion a la base de datos
            $conexion = mysqli_connect('host', 'user', 'password', 'base')
            or die('Problemas con la conexión');

            if (isset($_REQUEST['registrar'])) {
                // Verificar si se selecciono un archivo
                $ruta = "imgs/perfil.jpg"; // Si no se sube una foto, insertar una predeterminada
                $extensiones = array(0=>'image/jpg', 1=>'image/jpeg', 2=>'image/png', 3=>'image/webp', 4=>NULL);
                
                // Obtener los datos del formulario
                $nombre = $_REQUEST['nombre']; 
                $parentesco = $_REQUEST['parentesco']; 
                // Verificar si se ingresaron datos
                if(!$nombre || !$parentesco){
                    echo "<h3 id=\"err\">Alguna celda esta vacia</h3>";
                }else{
                    if(in_array($_FILES['foto']['type'], $extensiones)){
                        if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
                            $foto = $_FILES['foto']['name']; // Nombre del archivo
                            $foto_tmp = $_FILES['foto']['tmp_name']; // Ruta temporal del archivo
                            $ruta = "imgs/" . $foto; // Ruta final donde se guardará el archivo
                            move_uploaded_file($foto_tmp, $ruta); // Mover el archivo a la carpeta "imgs"
                        } 
                        mysqli_query($conexion, "INSERT familia (nombre, parentesco, foto) VALUES ('$nombre',
                         '$parentesco', '$ruta')")
                        or die('Problemas en el INSERT: ' . mysqli_error($conexion));
                    
                        echo "<h3>Familiar registrado exitosamente</h3>";
                       
                    } else{
                        echo "<h3 id=\"err\">El formato de archivo ingresado no es compatible</h3>";
                    }
                }
            } elseif (isset($_REQUEST['eliminar'])) {
                $id = $_REQUEST['id'];
                $registros = mysqli_query($conexion, "SELECT id FROM familia") 
                or die('Problemas en el select'. mysqli_error($conexion));
                $ids = []; // Array para almacenar los IDs
                while ($row = mysqli_fetch_assoc($registros)) {
                    $ids[] = $row['id']; // Almacenar cada ID en el array
                }      
                if(!$id){
                    echo "<h3 id=\"err\">Celda ID vacia</h3>";
                } else{  
                    settype($id, 'int');
                    if(in_array($id, $ids)){

                        mysqli_query($conexion, "DELETE FROM familia WHERE id = $id")
                        or die('Problemas en el INSERT: ' . mysqli_error($conexion));

                        echo "<h3>Familiar eliminado</h3>";
                    } else{
                        echo "<h3 id=\"err\">El ID ingresado no existe en los registros</h3>";
                    }
                }
            } 
            ?>
        </div>
    </form>
    
</body>
<script>
    if(window.history.replaceState){
    window.history.replaceState(null, null, window.location.href)
}
// Seleccionamos el botón y el div
const boton = document.getElementById('mostrar');
const div = document.getElementById('table_list');

// Agregamos un evento de clic al botón
boton.addEventListener('click', (e) => {
    e.preventDefault()
    if (div.style.display === 'none' || div.style.display === '') {
        div.style.display = 'grid'; // Mostrar el div
        boton.textContent = 'Ocultar Listado'; // Cambiar texto del botón
    } else {
        div.style.display = 'none'; // Ocultar el div
        boton.textContent = 'Mostrar Listado'; // Cambiar texto del botón
    }
});
</script>
</html>

