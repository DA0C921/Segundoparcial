<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    
<center>
<?PHP
   /* 
    Descripcion: Componente los datos de formulario
    Autor: Julio Alejandro Gutierrez Hernandez
    fecha: 14 Octubre
    */

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['email'];
    $contraseña = $_POST['password'];
    $fnacimiento = $_POST['date'];
    $sexo = $_POST['sexo'];


    echo "Hola $nombre $apellido";
    echo "<br>";
    echo "Correo: $correo";
    echo "<br>";
    echo "Contraseña: $contraseña";
    echo "<br>";
    echo "Fecha de nacimiento: $fnacimiento";
     echo "<br>";
    echo " Eres $sexo";
    echo "<br>";
    echo "<a href='Registro.html'>Regresar</a>";
      ?>
</center>
    </body> 
</html>