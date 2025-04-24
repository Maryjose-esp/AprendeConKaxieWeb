<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo.ico" type="image/x-icon">
    <script type="text/javascript" src="js/jquery-3.7.1.min.js"></script>
    <title>Evaluacion Progresion 1</title>
</head>

<body>
    

    <?php
    echo '<script src="js/question1.js"></script>'; //ACCEDE AL JS CON LAS PREGUNTAS
    require('evaluacionplantilla.php'); //INCLUYE LA PLANTILLA DEL DISENO DE LAS EVALUACIONES

    if($indicador_bd){
        
    }
    

    ?>

<script>
        const ProgresionActual = document.getElementById("encabezadoEval");
        ProgresionActual.innerHTML = "Evaluación progresión 1";
        </script>

    
</body>

</html>