<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 4</title>
</head>
<body>
    <h1 id="Samu">Soy una simple página!!! =( =( =(</h1>
    <button id="btnrojo" style="background-color: red ;" onmouseover="Rojo()">Red</button>
    <button id="btnazul" style="background-color: blue ;" onmouseover="Azul()">Blue</button>
    <button id="btnverde" style="background-color: green ;" onmouseover="Verde()">Green</button>
    
    <script>
        function Rojo(){
            //alert("Outchh Soy rojo");
            document.getElementById("Samu").style.backgroundColor="red";

        }
        function Azul(){
            //alert("Outchh Soy Azul");
            document.getElementById("Samu").style.backgroundColor="blue";


        }
        function Verde(){
            //alert("Outchh Soy verde");
            document.getElementById("Samu").style.backgroundColor="green";


        }
    </script>
</body>
</html>