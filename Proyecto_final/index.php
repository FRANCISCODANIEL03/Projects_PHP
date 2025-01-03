<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Familiar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  
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

