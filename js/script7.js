function colores(respuestas, numprogresion, numejercicio){
    let inputres = [];
    let total = respuestas.length;
    let saveButton = document.getElementById('P'+numprogresion.toString()+'E'+numejercicio.toString()+'REV' );
    for (var i = 0; i < total; i++) {
        inputres[i] = document.getElementById('p'+numprogresion.toString()+'e'+numejercicio.toString()+'txt' + (i + 1).toString());
        
    }

    saveButton.addEventListener('click', () => {//CUANDO SE DA CLICK AL BOTON, GUARDA EN EL LOCAL STORAGE
        for (var i = 0; i < total; i++) {
            sessionStorage.setItem('p'+numprogresion.toString()+'e'+numejercicio.toString()+'txt' + (i + 1).toString(), inputres[i].value);
            
        }
    });

    window.addEventListener('DOMContentLoaded', () => {//CUANDO CARGA LA PAGINA, SE REFRESCA LUEGO DEL SUBMIT

        for (var i = 0; i < total; i++) {
        let aux = 'p'+numprogresion.toString()+'e'+numejercicio.toString()+'txt' + (i + 1).toString();
            let savedServer1 = sessionStorage.getItem(aux);
            
            
            if (savedServer1) {//SI ESA VARIABLE TIENE ALGO
                
                inputres[i].value = savedServer1;//AL INPUT TEXT SE LE DA EL VALOR QUE HAY EN LA VARIABLE
                if (inputres[i].value == respuestas[i]) {//SI EL VALOR DEL INPUT TEXT ES IGUAL AL DEL ARRAY, ANADE LA CLASE DE CORRECTO
                    inputres[i].classList.add('RespuestaCorrecta');
                } else if(inputres[i].value != respuestas[i] || inputres[i].value== null){
                    inputres[i].classList.add('RespuestaIncorrecta');
                }
            }
        }
    });

    function eliminartodo() {
        if (confirm("Estas seguro")) {
            localStorage.clear();
            for (var i = 0; i < total; i++) {
                document.getElementById('p'+numprogresion.toString()+'e'+numejercicio.toString()+'txt' + (i + 1).toString().classList.remove('RespuestaCorrecta'));
                document.getElementById('p'+numprogresion.toString()+'e'+numejercicio.toString()+'txt' + (i + 1).toString().classList.remove('RespuestaIncorrecta'));

            }
        }
    }

    

}


