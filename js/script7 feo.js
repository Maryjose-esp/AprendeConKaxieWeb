
function colores(respuestas, numprogresion, numejercicio, respuestas_tabla_dinamica){ //TOMA COMO PARAMETROS EL ARRAY DE RESPUESTAS CORRECTAS, EL NUM DE PROGRESION, EL DE EJERCICIO Y UN ARRAY DE OBJETOS QUE POR DEFECTO YA TIENE EL INDEX 0 OCUPADO
    let inputres = []; // ARREGLO QUE GUARDA LAS RESPUESTAS INTRODUCIDAS POR EL USUARIO
    let total = respuestas.length; // CUENTA CUANTOS ELEMENTOS HAY EN ELL ARRAY DE RESPUESTAS CORRECTAS QUE SE PASA COMO PARAMETRO
    let saveButton = document.getElementById('P'+numprogresion.toString()+'E'+numejercicio.toString()+'REV' ); // OBTIENE EL BOTON DE REVISAR
    var booleana_saber_ = 'false';  
    var respuesta_auxiliar; // VAR AUXILIAR QUE GUARDA LA RESPUESTA DADA POR EL USUARIO
    const body = [];
    const tableData1 = []
    const rowData = []
    let fecha_para_pdf = new Date();
    const formatter = new Intl.DateTimeFormat('en-US', { day: '2-digit', month: '2-digit', year: 'numeric', hour: '2-digit', minute: '2-digit' });
    const formattedDate = formatter.format(fecha_para_pdf);
    var contador_aciertos_pdf = 0;


    for (var i = 0; i < total; i++) { //CICLO QUE VA LLENANDO EL ARRAY CON LOS INPUTS DEL FORMULARIO
        inputres[i] = document.getElementById('p'+numprogresion.toString()+'e'+numejercicio.toString()+'txt' + (i + 1).toString());
        
    }

    saveButton.addEventListener('click', () => { //CUANDO SE DA CLICK AL BOTON, GUARDA EN EL LOCAL STORAGE
        for (var i = 0; i < total; i++) { //CICLO QUE METE AL LOCAL STORAGE LAS RESPUESTAS DADAS POR EL USUARIO
            localStorage.setItem('p'+numprogresion.toString()+'e'+numejercicio.toString()+'txt' + (i + 1).toString(), inputres[i].value);
            
            
        }
    });

    window.addEventListener('DOMContentLoaded', () => {//CUANDO CARGA LA PAGINA, SE REFRESCA LUEGO DEL SUBMIT

        for (var i = 0; i < total; i++) { //EFECTUA TODO EL PROCESO DE COLOREAR LOS INPUTS Y DE CREAR EL OBJETO PARA EL PDF
            let aux = 'p'+numprogresion.toString()+'e'+numejercicio.toString()+'txt' + (i + 1).toString(); // AUX QUE GUARDA EL NOMBRE DEL INPUT ACTUAL
            let savedServer1 = localStorage.getItem(aux); //VARIABLE QUE VA OBTENIENDO LO QUE HAY EN EL LS CONFORME AL ID QUE SE LE HA DADO, EL ID ES EL MISMO DEL INPUT
            
            
            if (savedServer1) {//SI ESA VARIABLE TIENE ALGO
                
                inputres[i].value = savedServer1;//AL INPUT TEXT SE LE DA EL VALOR QUE HAY EN LA VARIABLE
                if (inputres[i].value == respuestas[i]) {//SI EL VALOR DEL INPUT TEXT ES IGUAL AL DEL ARRAY, ANADE LA CLASE DE CORRECTO
                    inputres[i].classList.add('RespuestaCorrecta');
                    contador_aciertos_pdf++;
                    booleana_saber_ = 'correcta'; //Y A LA VARIABLE BOOLEANA LE DA UN TRUE
                    respuesta_auxiliar = inputres[i].value; //EN LA RESPUESTA PONE EL VALOR QUE HAY EN EL INPUT TEXT
                    const rowData = [
                        aux,
                        inputres[i].value,
                        booleana_saber_
                    ]
                  tableData1.push(rowData)
                } else if(inputres[i].value != respuestas[i] || inputres[i].value == null){ // SI ES FALSO HACE LO CONTRARIO
                    inputres[i].classList.add('RespuestaIncorrecta');
                    booleana_saber_ = 'incorrecta';                  
                    respuesta_auxiliar = inputres[i].value;
                    const rowData = [
                        aux,
                        inputres[i].value,
                        booleana_saber_
                    ]
                    tableData1.push(rowData)
                }
               
                
            
            }
             var auxiliar_Arreglo_obj = [{
                reactivo: aux,
                respuesta: respuesta_auxiliar,
                estado: booleana_saber_
            }]
            //EL FRAGMENTO ANTERIOR CREA UN NUEVO INDEX PARA EL OBJETO QUE FUNGE COMO AUXILIAR
            //respuestas_tabla_dinamica.push(auxiliar_Arreglo_obj); //ESTE OBJETO SE ANADE MEDIANTE EL PUSH AL OBJETO DEL EJERCICIO 
            respuestas_tabla_dinamica.splice((i+1), 0, auxiliar_Arreglo_obj)
            
var ayudaporfavor = i +1;
        //console.log(respuestas_tabla_dinamica[i+1]); //LINEA QUE ME HACIA VER SI TODO IBA BIEN O MEJOR CHILLABA :(
        //console.log(respuestas_tabla_dinamica[3].reactivo);
        // console.log(respuestas_tabla_dinamica[3])
            // var tableData = [];
            // const rowData = [
            //     respuestas_tabla_dinamica[i+1].reactivo,
            //     respuestas_tabla_dinamica[i+1].respuesta,
            //     respuestas_tabla_dinamica[i+1].estado
            // ]
            // tableData.push(rowData)
           
        }
        console.log(respuestas_tabla_dinamica[5])
        
        tableData1.push(rowData);
       
        var pdf = new jsPDF('p', 'pt', 'a4');
        
        // let auxHTML = obtnerHTMLPlantilla();
        // pdf.html(auxHTML);
        // pdf.text(30, 30, "Tus resultados son los siguientes");
        const header = 'Report 2014';
        pdf.text(header, 40, 15, { baseline: 'top' });
pdf.text(200, 50, 'Aprende con Kaxie');
    pdf.text(35, 80, 'Imprime esta hoja para tener respaldo de los resultados obtenidos en el');
    pdf.text(35, 100, 'ejercicio.');
    pdf.text(35, 130, 'Tus resultados se describen a continuación:');
        const head = [['Reactivo', 'Respuesta', 'Estado']];
        pdf.autoTable( {   head: head, body:tableData1, theme: 'grid', startY: 140, foot: [[' ', 'Aciertos totales', contador_aciertos_pdf]]} );
        pdf = addWaterMark(pdf, formattedDate);
    pdf.save("p" + numprogresion.toString() + "ejercicio" + numejercicio.toString()+".pdf");
    
        
        
    //     respuestas_tabla_dinamica.forEach(item => {
           
            
           
    //    })
       
        

    });

    
    function addWaterMark(doc, fecha) {
        var totalPages = doc.internal.getNumberOfPages();
      
        for (i = 1; i <= totalPages; i++) {
          doc.setPage(i);
          //doc.addImage(imgData, 'PNG', 40, 40, 75, 75);
          doc.setTextColor(150);
          doc.text(50, doc.internal.pageSize.height - 30, 'Aprende con Kaxie. Usuario: hola' + fecha.toString());
        }
      
        return doc;
      }

    //   function obtnerHTMLPlantilla (){
    //     let html_source = document.getElementById('formato-encabezado-pdf');
    //     return html_source;
    //   }
      
    function eliminartodo() { //FUNCION QUE LIMPIA EL LOCALSTORAGE POR COMPLETO, TODOOOOOOO HAY QUE CHECAR QUE NOMAS BORRE UNAS COSAS JAJAJAJA
        if (confirm("Estas seguro")) {
            localStorage.clear();
            for (var i = 0; i < total; i++) {
                document.getElementById('p'+numprogresion.toString()+'e'+numejercicio.toString()+'txt' + (i + 1).toString().classList.remove('RespuestaCorrecta'));
                document.getElementById('p'+numprogresion.toString()+'e'+numejercicio.toString()+'txt' + (i + 1).toString().classList.remove('RespuestaIncorrecta'));

            }
        }
    }
    let dowloandButton = document.getElementById('descargarpdf_p'+numprogresion.toString()+'_e'+numejercicio.toString() ); // OBTIENE EL BOTON DE DESCARGAR

    // function crearPDFdinamico (respuestas_tabla_dinamica){
        
        
    //     // let size_pdf_array = respuestas_tabla_dinamica.length;
    //     // for ( var i = 1; i <= size_pdf_array; i++){
    //     //     rowData = [
    //     //         respuestas_tabla_dinamica[i].reactivo,
    //     //         respuestas_tabla_dinamica[i].respuesta,
    //     //         respuestas_tabla_dinamica[i].estado
    //     //     ]
    //     //     tableData.push(rowData);
    //     // }
    //     // respuestas_tabla_dinamica.forEach(item => {
           
    //     //          rowData = [
    //     //             item.reactivo,
    //     //             item.respuesta,
    //     //             item.estado
    //     //         ]
    //     //         tableData.push(rowData)
    //     //     })
    //  // const body = [
    //  //     [ejercicio, respuestadada, estadobool],
    //  //     [2, 'Switzerland', 7.509, 'Bern'],
    //  //     [3, 'Iceland', 7.501, 'Reykjavík'],
    //  // ];

    // }
    // dowloandButton.addEventListener('click', () => { //CUANDO SE DA CLICK AL BOTON, GUARDA EN EL LOCAL STORAGE
    //     // crearPDFdinamico(respuestas_tabla_dinamica);
    //     colores(respuestas, numprogresion, numejercicio, respuestas_tabla_dinamica);
        

    // });
    

}



