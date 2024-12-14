<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/style3.css">
    <title>Formulario persistente</title>
</head>

<body>
    <form method="POST">
        <input type="text" name="txt1" id="txt1" /><br>
        <input type="text" name="txt2" id="txt2" /><br>
        <input type="text" name="txt3" id="txt3" /><br>
        <input type="text" name="txt4" id="txt4" /><br>
        <input type="text" name="txt5" id="txt5" /><br>
        <input type="text" name="txt6" id="txt6" /><br>
        <input type="text" name="txt7" id="txt7" /><br>
        <input type="text" name="txt8" id="txt8" /><br>
        <input type="text" name="txt9" id="txt9" /><br>
        <input type="text" name="txt10" id="txt10" /><br>
        <input type="radio" name="txt11" id="rbd1" class="RadioCorrecto" value="1"/><label for="txt11" class="labelCorrecto">correcto</label><br>
        <input type="radio" name="txt11" id="rbd2" class="RadioIncorrecto" value="2"/><label for="txt12" class="labelIncorrecto">incorrecto</label><br>
        <input type="reset" name="limpiar" onclick="eliminartodo()">
        <button type="submit" value="Save" id="Save" name="ENVIAR" onclick="radio()">Save</button>
        <?php echo "holaaa"; ?>
    </form>
    <script>
        function radio(){
            var radioactual = document.getElementsByName('txt11').values;
            localStorage.setItem("r1", radioactual);
        }

        window.addEventListener('DOMContentLoaded', () => {
            for(var i = 1; i<= 2; i++){
                var obt = document.getElementById('rbd'+i.toString());
                if(obt.value == localStorage.getItem('rbd')){
                    obt.checked = true;
                }
            }
            var rad = document.getElementsByName('txt11');
            var valor = localStorage.getItem("r1");
            if(rad.value==valor){
                rad.checked = true;
            }
        });

    </script>

    <?php
    if (isset($_POST['ENVIAR'])) {
        $RespuestasE1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
        $j = count($RespuestasE1);
        $contador = 0;
        for ($i = 0; $i < $j; $i++) {
            $valor = $_POST['txt' . ($i + 1)];
            if ($valor == $RespuestasE1[$i]) {
                $contador++;
            }
        }
        echo $contador;
        echo <<< EOT
        <script>
        let respuestas = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        let inputres = [];
        let total = respuestas.length;
        let saveButton = document.getElementById('Save');
        for (var i = 0; i < total; i++) {
            inputres[i] = document.getElementById('txt' + (i + 1).toString());
        }

        saveButton.addEventListener('click', () => {//CUANDO SE DA CLICK AL BOTON, GUARDA EN EL LOCAL STORAGE
            for (var i = 0; i < total; i++) {
                sessionStorage.setItem('serverValue' + i.toString(), inputres[i].value);
            }
        });

        window.addEventListener('DOMContentLoaded', () => {//CUANDO CARGA LA PAGINA, SE REFRESCA LUEGO DEL SUBMIT

            for (var i = 0; i < total; i++) {
                let savedServer1 = sessionStorage.getItem('serverValue' + i.toString());
                if (savedServer1) {//SI ESA VARIABLE TIENE ALGO
                    inputres[i].value = savedServer1;//AL INPUT TEXT SE LE DA EL VALOR QUE HAY EN LA VARIABLE
                    if (inputres[i].value == respuestas[i]) {//SI EL VALOR DEL INPUT TEXT ES IGUAL AL DEL ARRAY, ANADE LA CLASE DE CORRECTO
                        inputres[i].classList.add('RespuestaCorrecta');
                    } else {
                        inputres[i].classList.add('RespuestaIncorrecta');
                    }
                }
            }
        });

        function eliminartodo() {
            if (confirm("Estas seguro")) {
                sessionStorage.clear();
                for (var i = 0; i < total; i++) {
                    document.getElementById('txt' + (i + 1).toString()).classList.remove('RespuestaCorrecta');
                    document.getElementById('txt' + (i + 1).toString()).classList.remove('RespuestaIncorrecta');

                }
            }
        }


    </script>
EOT;
    }
    ?>
   <!--<script>
        let respuestas = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        let inputres = [];
        let total = respuestas.length;
        let saveButton = document.getElementById('Save');
        for (var i = 0; i < total; i++) {
            inputres[i] = document.getElementById('txt' + (i + 1).toString());
        }

        saveButton.addEventListener('click', () => {//CUANDO SE DA CLICK AL BOTON, GUARDA EN EL LOCAL STORAGE
            for (var i = 0; i < total; i++) {
                localStorage.setItem('serverValue' + i.toString(), inputres[i].value);
            }
        });

        window.addEventListener('DOMContentLoaded', () => {//CUANDO CARGA LA PAGINA, SE REFRESCA LUEGO DEL SUBMIT

            for (var i = 0; i < total; i++) {
                let savedServer1 = localStorage.getItem('serverValue' + i.toString());
                if (savedServer1) {//SI ESA VARIABLE TIENE ALGO
                    inputres[i].value = savedServer1;//AL INPUT TEXT SE LE DA EL VALOR QUE HAY EN LA VARIABLE
                    if (inputres[i].value == respuestas[i]) {//SI EL VALOR DEL INPUT TEXT ES IGUAL AL DEL ARRAY, ANADE LA CLASE DE CORRECTO
                        inputres[i].classList.add('RespuestaCorrecta');
                    } else {
                        inputres[i].classList.add('RespuestaIncorrecta');
                    }
                }
            }
        });

        function eliminartodo() {
            if (confirm("Estas seguro")) {
                localStorage.clear();
                for (var i = 0; i < total; i++) {
                    document.getElementById('txt' + (i + 1).toString()).classList.remove('RespuestaCorrecta');
                    document.getElementById('txt' + (i + 1).toString()).classList.remove('RespuestaIncorrecta');

                }
            }
        }


    </script>-->


</body>

</html>