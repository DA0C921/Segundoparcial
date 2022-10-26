<!-- 
 Autor:Julio Alejandro Gutierrez Hernandez
-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 4</title>
</head>
<body>
   <h1 id="Samu">Soy una simple página!!! =( =( =(</h1><!-- Al h1 le agregamos un id por que lo utilizaremos mas adelante    -->
    <button id="btnrojo" style="background-color: red ;" onmouseover="Rojo()">Red</button> <!-- Creeamos un boton y le damos un color en este caso rojo   -->
    <button id="btnazul" style="background-color: blue ;" onmouseover="Azul()">Blue</button><!-- Creeamos un boton y le damos un color en este caso azul   -->
    <button id="btnverde" style="background-color: green ;" onmouseover="Verde()">Green</button><!-- Creeamos un boton y le damos un color en este caso verde   -->
    
    <script>
        function Rojo(){
            //alert("Outchh Soy rojo");
       document.getElementById("Samu").style.backgroundColor="red";  //La funcion hace que al darle click al boton hace que el id "samu" que en este caso es el h1 cambie de color rojo

        }
        function Azul(){
            //alert("Outchh Soy Azul");
            document.getElementById("Samu").style.backgroundColor="blue";//La funcion hace que al darle al darle click al boton hace que el id "samu" que en este caso es el h1 cambie de color azul


        }
        function Verde(){
            //alert("Outchh Soy verde");
            document.getElementById("Samu").style.backgroundColor="green";//La funcion hace que al darle al darle click al boton hace que el id "samu" que en este caso es el h1 cambie de color al verde


        }
    </script>
</body>
</html>
