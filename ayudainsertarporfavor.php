<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style3.css">
    <link rel="stylesheet" href="css/style4.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.6/jspdf.plugin.autotable.min.js"></script>
    <title>Document</title>


</head>

<body>
    <?php
    require('ifSession.php');

    ?>
    <script src='js/jquery-3.7.1.js'></script>
    <script src='js/script7 copy 2.js'></script>
    <script>
        var DatosFinalesPDF = "<?php DatosPDF()
        ;
        ?>";
        //definir matriz con arreglos de las respuestas correctas a cada ejercicio
        var arrayp17e1 = [[1, 2, 3], [1, 2, 3]];

    </script>
    <form method="post">
        d1<input type="text" id="p17e1txt1" name="p17e1txt1"><br>
        d2<input type="text" id="p17e1txt2" name="p17e1txt2"><br>
        d3<input type="text" id="p17e1txt3" name="p17e1txt3"><br>
        <button type="button" onclick="colores(arrayp17e1, 17, 1);" id="P17E1REV" name="P17E1REV">prueba</button>
        <button type="button" onclick="GenerarPDF(17, 1, arrayp17e1, DatosFinalesPDF)">PDF</button>
    </form>
    <div class="Calificacion" id="p17e1img">

    </div>

    <form method="post">
        d1<input type="text" id="p17e2txt1" name="p17e2txt1"><br>
        d2<input type="text" id="p17e2txt2" name="p17e2txt2"><br>
        <!-- d3<input type="text" id="p17e2txt3" name="p17e2txt3"><br> -->
        <button type="button" onclick="colores(arrayp17e1, 17, 2);" id="P17E1REV" name="P17E1REV">prueba</button>
        <button type="button" onclick="GenerarPDF(17, 2, arrayp17e1, DatosFinalesPDF)">PDF</button>
    </form>

    <div class="Calificacion" id="p17e2img">

    </div>

    <script>
        TraerDatos(17, arrayp17e1, 2);
        // if () {
        //     // si existe
        // } else {
        //     // no existe
        // }
        // function RevisarPHP(NumberExercise, NumberProgresion, matriz) {
        //     var parametros =
        //     {
        //         // 'matriz' = matriz,
        //         "NumberExercise": NumberExercise,
        //         "NumberProgresion": NumberProgresion,
        //         'Matriz': JSON.stringify(
        //             matriz[NumberExercise - 1]),
        //         'MisRespuestas': JSON.stringify([1, 2, 3])
        //     };


        //     $.ajax({
        //         data: parametros,
        //         url: 'ajax_calificacionE.php',
        //         type: 'POST',
        //         dataType: 'text',
        //         // success: function (data) {
        //         //     console.log(data);
        //         // }, error: function (error) {
        //         //     console.log('no jala');
        //         // },
        //         success: On_success,
        //         async: true
        //     });

        //     function On_success(response) {
        //         console.log(response);
        //         //$("#p" + NumberProgresion.toString() + "e" + NumberExercise.toString() + "img").html(response);
        //         //$("#show").html(response);
        //     }

        // }

        // var auxiliar_from_name = "";
        // let contador_ejercicio = 0;
        // for (let j = 1; j <= 2; j++) {// j es en funcion al ejerccio
        //     while (contador_ejercicio >= 0) {  // buscara el input text
        //         auxiliar_from_name = 'p17e' + j.toString() + 'txt' + (contador_ejercicio + 1).toString();
        //         if ($('#' + auxiliar_from_name).length) {

        //             //si el input existe, quiere ddecir que es posible que haya sido respondido con anterioridad
        //             var savedServer = localStorage.getItem(auxiliar_from_name);

        //             // if (savedServer) {
        //             //inputres[i].value = savedServer1;//AL INPUT TEXT SE LE DA EL VALOR QUE HAY EN LA VARIABLE
        //             $('#' + auxiliar_from_name).val(savedServer);

        //             if (arrayp17e1[j - 1][contador_ejercicio] == savedServer) {

        //                 $('#' + auxiliar_from_name).addClass("RespuestaCorrecta");
        //             } else if (arrayp17e1[j - 1][contador_ejercicio] != savedServer) {
        //                 $('#' + auxiliar_from_name).addClass("RespuestaIncorrecta");
        //             }

        //             // if (inputres[i].value == respuestas[i]) {//SI EL VALOR DEL INPUT TEXT ES IGUAL AL DEL ARRAY, ANADE LA CLASE DE CORRECTO
        //             //     //alert("algo pasa");

        //             //     inputres[i].classList.remove("RespuestaIncorrecta");
        //             //     inputres[i].classList.add("RespuestaCorrecta");
        //             // } else if (inputres[i].value != respuestas[i] || inputres[i].value == null) {
        //             //     inputres[i].classList.remove("RespuestaCorrecta");
        //             //     inputres[i].classList.add("RespuestaIncorrecta");
        //             // }
        //             contador_ejercicio++;

        //         } else {
        //             contador_ejercicio = -1; //estpp debe romper el ciclo
        //         }
        //     }
        //     contador_ejercicio = 0;

        // }


        // while ($('#elemento').length) {
        //     console.log('existe');
        // }
        // colores(array_r, 17, 1);

        // function pasaraphp() {
        //     var parametros =
        //     {
        //         "calife": 40,
        //         "numprogresion": '1'
        //     };

        //     $.ajax({
        //         data: parametros,
        //         url: 'ajax_funcionEval.php',
        //         type: 'POST',
        //         dataType: 'text',
        //         success: function (data) {
        //             console.log(data);
        //         }, error: function (error) {
        //             console.log(error);
        //         },
        //         async: true
        //     });


        // };

    </script>
</body>


</html>