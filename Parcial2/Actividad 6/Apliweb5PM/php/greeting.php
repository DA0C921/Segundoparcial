<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    
<center>
<?PHP
   /* 
    Descripcion:c Componente los datos de formulario
    Autor: Julio Alejandro Gutierrez Hernandez
    fecha: 12 Octubre
    */
   // Obtiene nombre de formulario
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $telefono = $_POST['telefono'];

    echo "Hola $nombre tienes $edad años y tu teléfono es $telefono";
    echo "<br>";
    echo "<a href='../Html/greetingForm.html'>Regresar</a>";
      ?>
</center>
    </body> 
</html>