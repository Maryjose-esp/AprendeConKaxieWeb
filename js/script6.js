//TRAER RADIOS
//p9e2r1a1
let inputres = [];
let total = respuestas.length;
let saveButton = document.getElementById('Save');
for (var i = 0; i < 2; i++) {
    radioactual = document.getElementById('rbd' + (i + 1).toString());
    if(radioactual == "1"){
        inputres[i] = radioactual;
    }
}
//clave valor
saveButton.addEventListener('click', () => {//CUANDO SE DA CLICK AL BOTON, GUARDA EN EL LOCAL STORAGE
    for (var i = 0; i < 2; i++) {
        localStorage.setItem('rbd' + i.toString(), inputres[i].value);
    }
});

window.addEventListener('DOMContentLoaded', () => {//CUANDO CARGA LA PAGINA, SE REFRESCA LUEGO DEL SUBMIT

    for (var i = 0; i < 2; i++) {
        let savedServer1 = localStorage.getItem('rbd' + i.toString());
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
            document.getElementById('p9e1txt' + (i + 1).toString()).classList.remove('RespuestaCorrecta');
            document.getElementById('p9e1txt' + (i + 1).toString()).classList.remove('RespuestaIncorrecta');

        }
    }
}



