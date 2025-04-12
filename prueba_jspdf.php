<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueba jspdf</title>
    <!-- <script type="text/javascript" src="js/jspdf.min.js"></script>
    <script type="text/javascript" src="js/jspdf.plugin.autotable.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.6/jspdf.plugin.autotable.min.js"></script>
    <script src="js/script7.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style3.css">


</head>

<body>





    <!-- <table id="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>Country</th>
                <th>IP-address</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Donna</td>
                <td>Moore</td>
                <td>dmoore0@furl.net</td>
                <td>China</td>
                <td>211.56.242.221</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Janice</td>
                <td>Henry</td>
                <td>jhenry1@theatlantic.com</td>
                <td>Ukraine</td>
                <td>38.36.7.199</td>
            </tr>
        </tbody>
    </table> -->


    <form method="post">
        <input type="text" name="p15e1txt1" id="p15e1txt1">
        <input type="text" name="p15e1txt2" id="p15e1txt2">
        <input type="text" name="p15e1txt3" id="p15e1txt3">
        <input type="text" name="p15e1txt4" id="p15e1txt4">
        <input type="text" name="p15e1txt5" id="p15e1txt5">
        <button type="submit" name="P15E1REV" id="P15E1REV">jala pues</button>
        <button name="descargarpdf_p15_e1" id="descargarpdf_p15_e1">DESCARGA MI PDFFF</button>
    </form>
    <script>

        var respuestase1p15 = [1, 2, 3, 4, 5];
        var respuestas_tabla_dinamica = [
            {
                reactivo: 'default1',
                respuesta: 1,
                estado: 'false'
            }
        ];
        colores(respuestase1p15, 15, 1, respuestas_tabla_dinamica);
        // var objeto_tablap15 = colores(respuestase1p15, 15, 1, respuestas_tabla_dinamica);
        // console.log(objeto_tablap15)
        // crearPDFdinamico(objeto_tablap15, 15, 1);
        // let respuestas_tabla_dinamica = [
        //     {
        //         reactivo: 'default1',
        //         respuesta: 'defaultresp',
        //         estado: 'false'
        //     }
        // ];
        // function imprimepues() {

        //     console.log(respuestas_tabla_dinamica[0]);

        // }
        // imprimepues()


        // function hola(array_objetos_anadir, respuestas, numprogresion, numejercicio) {
        //     var size_array_answer = respuestas.length;
        //     var comparar_Valor = "";
        //     var variable_bool_estado = false;
        //     for (var i = 0; i < size_array_answer; i++) {
        //         let auxiliar_nombre = "p" + numprogresion.toString() + "e" + numejercicio.toString() + "txt" + (i + 1).toString();
        //         comparar_Valor = document.getElementById(auxiliar_nombre);
        //         comparar_Valor = comparar_Valor.value;

        //         if (comparar_Valor == respuestas[i]) {
        //             variable_bool_estado = true;
        //         } else {
        //             variable_bool_estado = false;
        //         }

        //         let auxanadir = {
        //             reactivo: "p" + numprogresion.toString() + "e" + numejercicio.toString() + "txt" + (i + 1).toString(),
        //             respuesta: comparar_Valor,
        //             estado: variable_bool_estado
        //         };

        //         array_objetos_anadir.push(auxanadir);

        //     }
        // }
        // hola(respuestas_tabla_dinamica, respuestase1p15, 15, 1);
        // console.log(respuestas_tabla_dinamica[3]);
        //     console.log(respuestas_tabla_dinamica);

        //     // var pdf = new jsPDF();
        //     // pdf.text(20, 20, "USUARIO JIMENA CARRILLO CASTILLO 6F");
        //     // const head = [['Reactivo', 'Respuesta', 'Estado']];
        //     // let ejercicio = 'p15e1txt1';
        //     // let respuestadada = document.getElementById('p15e1txt1').value;
        //     // let estadobool = false;
        //     // const body = [
        //     //     [ejercicio, respuestadada, estadobool],
        //     //     // [2, 'Switzerland', 7.509, 'Bern'],
        //     //     // [3, 'Iceland', 7.501, 'Reykjavík'],
        //     // ];
        //     // pdf.autoTable({ head: head, body: body });

        //     // const body2 = [
        //     //     [ejercicio, respuestadada, estadobool],
        //     // ]
        //     // pdf.autoTable({ body: body2 });

        //     // pdf.save("prueba2form.pdf")
        // }
        // window.addEventListener('DOMContentLoaded', () => {
        //     hola(respuestase1p15, 15, 1)
        // });

    </script>

    <?php
    if (isset($_POST['P6E5REV'])) {

        $RespuestasE1_P15 = array(1, 2, 3, 4, 5);
        require('funcionrevtxt.php');
        Caso2txt($RespuestasE1_P15, 1, 15);


    }
    ?>

    <!-- <script>
        // import { jsPDF } from 'jspdf';
        // import { applyPlugin } from 'jspdf-autotable';
        function hola() {
            var pdf = new jsPDF();
            pdf.text(20, 20, "hola");
            // pdf.autoTable({
            //     html: '#table', startY: 25,
            //     theme: 'grid',
            //     // columnStyles: {
            //     //     0: { cellWidth: 20 },
            //     //     1: { cellWidth: 60 },
            //     //     2: { cellWidth: 40 },
            //     //     3: { cellWidth: 60 }
            //     // },
            //     bodyStyles: { lineColor: [1, 1, 1] },
            //     styles: { minCellHeight: 10 }
            // });
            const head = [['ID', 'Country', 'Rank', 'Capital']]
            const body = [
                [1, 'Denmark', 7.526, 'Copenhagen'],
                [2, 'Switzerland', 7.509, 'Bern'],
                [3, 'Iceland', 7.501, 'Reykjavík'],
            ]
            pdf.autoTable({ head: head, body: body })
            pdf.save("alumnoholi.pdf")
            // window.open(URL.createObjectURL(pdf.output("blob")))
            // applyPlugin(jsPDF);
            // const doc = new jsPDF();

            // // Simple data example
            // const head = [['ID', 'Country', 'Rank', 'Capital']]
            // const body = [
            //     [1, 'Denmark', 7.526, 'Copenhagen'],
            //     [2, 'Switzerland', 7.509, 'Bern'],
            //     [3, 'Iceland', 7.501, 'Reykjavík'],
            // ]
            // doc.autoTable({ head: head, body: body })

            // // Simple html example
            // doc.autoTable({ html: '#table' })
            // doc.text(15, 15, " holi"); doc.save('table.pdf')
        }

        hola();
    </script> -->

    <!-- <form method="post">
        Nombre<input type="text" name = "p15e1txt" id = "p15e1txt" name="1" id="1"><br>
        Edad<input type="text" name = "p15e1txt" id = "p15e1txt" name="2" id="2"><br>
        <input type="submit" id="subir" onclick="generarPDF()">
    </form>



    <script type="text/javascript">
        // //import * as jsPDF from 'jspdf';
        // import jsPDF from 'jsPDF';
        // // import { jsPDF } from "jspdf";
        // import * as $ from "jquery";


        function generarPDF() {
            
            let edad = document.getElementById("1").value;
            let nombre = document.getElementById("2").value;
            var doc = new jsPDF();
            doc.text(10, 10, nombre); // 10 y 10 son las coordenadas
            doc.text(40, 40, edad); //40 y 40 son las coordenas
            // doc.fromHTML($('#formprueba').get(0), 15, 15);//plantilla html. en sus parametros lleva el id de un div o lo que sea
            doc.save('formulario2.pdf'); // lo manda imprimir o descargar con la extension .pdf
        }

    </script> -->
</body>

</html>