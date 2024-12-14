

function correctorincorrect(array $respuestas, $numejercicio, $numprogresion){
    //p9e1txt1
    '/'
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


    </script> EOT;
}