<!-- 
    Autor Julio Alejandro Gutierrez Hernandez
 -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Generando tabla</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
<div class="contenedor">
        <div class="logo">
            <img src="logo.jpg" alt="MI logo">
        </div>
    <form action="" method="get">

        <h1> Generando tabla </h1>
        <br>
        <h3>
            Filas:
            <input type="number" name="renglon" id="renglon" min="0" max="120">
            Columnas:
            <input type="number" name="columna" id="columna" min="0" max="120">
        </h3>
        <br>
        <input type="submit" value="Generar">

        <?php
        if (isset($_GET["renglon"]) && isset($_GET["columna"])) {
            echo "<table border='1'>";
            for ($ren = 1; $ren <= $_GET['renglon']; $ren++) {
                echo "<tr>";
                for ($col = 1; $col <= $_GET['columna']; $col++) {
                    echo "<td>";
                    echo "$ren$col";
                    echo "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
        ?>
</body>

</html>