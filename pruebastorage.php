<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/style3.css">
    <title>Formulario persistente</title>
</head>

<body>
    <form method="POST">
        <input type="text" name="server1" id="saveServer1" /><br>
        <input type="text" name="server2" id="saveServer2" /><br>
        <input type="text" name="server3" id="saveServer3" /><br>
        <input type="text" name="server4" id="saveServer4" /><br>
        <input type="text" name="server5" id="saveServer5" /><br>
        <input type="text" name="server6" id="saveServer6" /><br>
        <input type="text" name="server7" id="saveServer7" /><br>
        <input type="text" name="server8" id="saveServer8" /><br>
        <input type="text" name="server9" id="saveServer9" /><br>
        <input type="text" name="server10" id="saveServer10" /><br>
        <button type="submit" value="Save" id="Save">Save</button>
    </form>
    <script>
        let respuestas = [1, 2, 3, 4, 5, 6, 7, 8, 9, "10"];
        let inputres = [];
        let total = respuestas.length;
        let saveButton = document.getElementById('Save');

        let serverInput = document.getElementById('saveServer1');//GUARDA EN LA VARIABLE EL VALOR DEL INPUT TEXT
        let serverInput2 = document.getElementById('saveServer2');
        let serverInput3 = document.getElementById('saveServer3');

        saveButton.addEventListener('click', () => {//CUANDO SE DA CLICK AL BOTON, GUARDA EN EL LOCAL STORAGE
            localStorage.setItem('serverValue1', serverInput.value);
            localStorage.setItem('serverValue2', serverInput2.value);
            localStorage.setItem('serverValue3', serverInput3.value);
            /*localStorage.setItem('serverValue2', serverInput2.value);
            sessionStorage.setItem('serverValue3', serverInput3.value);*/
        });
        window.addEventListener('DOMContentLoaded', () => {//CUANDO CARGA LA PAGINA, SE REFRESCA LUEGO DEL SUBMIT
            let savedServer1 = localStorage.getItem('serverValue1');//VARIABLE QUE OBTIENE LO QUE HAY EN EL LOCAL STORAGE

            if (savedServer1) {//SI ESA VARIABLE TIENE ALGO
                serverInput.value = savedServer1;//AL INPUT TEXT SE LE DA EL VALOR QUE HAY EN LA VARIABLE
                if (serverInput.value == respuestas[0]) {//SI EL VALOR DEL INPUT TEXT ES IGUAL AL DEL ARRAY, ANADE LA CLASE DE CORRECTO
                    serverInput.classList.add('RespuestaCorrecta');
                }
            }

            let savedServer2 = localStorage.getItem('serverValue2');

            if (savedServer2) {
                serverInput2.value = savedServer2;
                if (serverInput2.value == respuestas[1]) {
                    serverInput2.classList.add('RespuestaCorrecta');
                }
            }

            let savedServer3 = localStorage.getItem('serverValue3');

            if (savedServer3) {
                serverInput3.value = savedServer3;
                if (serverInput3.value == respuestas[2]) {
                    serverInput3.classList.add('RespuestaCorrecta');
                }
            }
            /*serverInput2.value = savedServer2;
            serverInput3.value = savedServer3;*/



        });



        /*let serverInput2     = document.getElementById('saveServer2');
        let serverInput3     = document.getElementById('saveServer3');*/


    </script>


</body>

</html>