<!-- 
    Autor: Julio Alejandro Gutierrez Hernandez
    Fecha: 21-Octubre-2022
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Dias Vividos</title>
</head>
<body>
<div class="contenedor">
        <div class="logo">
            <img src="logo.jpg" alt="MI logo">
        </div>
    <h1>Programa que calcula los dias vividos</h1>
    <form action="" method="GET">
    <h4>Ingresa tu Edad</h4>
    <input type="number" name="edad" id="edad" min="0" max="120"  >
    <input  type="submit" value="Calcular">
    </form>
 <?php 

   if (isset($_GET['edad'])) { //Verifica que edad se establece valor
    $edad=$_GET['edad'];
    $dias=$edad*365;
    echo "<h3 style='text-align:center;'>Los dias vividos son $dias </h3>";
   }
 

 ?>

    
</body>
</html>