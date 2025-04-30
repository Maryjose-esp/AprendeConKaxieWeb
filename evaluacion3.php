<?php
require ('ifSession.php');
echo '<script src="js/question3.js"></script>'; //ACCEDE AL JS CON LAS PREGUNTAS
require('evaluacionplantilla.php'); //INCLUYE LA PLANTILLA DEL DISEÑO DE LAS EVALUACIONES
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo.ico" type="image/x-icon">

    <title>Evaluacion Progresion 3</title>
</head>
<body>
    
    <script>
        const ProgresionActual = document.getElementById("encabezadoEval");
        ProgresionActual.innerHTML = "Evaluación progresión 3";
    </script>
</body>
</html>