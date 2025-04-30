// function pruebi() {
//   alert("hola");
// }
function TraerDatos(ProgresionActual, arrayp17e1, cantidadEjercicios) {
  var auxiliar_from_name = "";
  let contador_ejercicio = 0;
  const epsilont = 0.8;
  var TypeOfDate = "";
  var CompararTR = 0;
  
  for (let j = 1; j <= cantidadEjercicios; j++) {
    // j es en funcion al ejerccio

    if(typeof arrayp17e1[j - 1][0] == "string"){//si es de tipo string lo guarda en la variable
      TypeOfDate = "s"
     }else if(typeof arrayp17e1[j - 1][0] == "number"){//si es number lo guarda
      TypeOfDate = "n";
     }
  
     if(localStorage.getItem("p" +ProgresionActual.toString() +"e" +j.toString() +"txt1")){
      while (contador_ejercicio >= 0) {
      // buscara el input text

      auxiliar_from_name ="p" +ProgresionActual.toString() +"e" +j.toString() +"txt" +(contador_ejercicio + 1).toString();

      if ($("#" + auxiliar_from_name).length) {
        var savedServer = localStorage.getItem(auxiliar_from_name);
        $("#" + auxiliar_from_name).val(savedServer);

        if(TypeOfDate == "n"){
          var auxindi2 = "n";
          for(let k = 0; k < savedServer.length; k++){
            if(savedServer[k] == "/"){
              auxindi2 = "f";
              k = savedServer.length + 1;
            }
          }

          

          if(auxindi2 == "f"){
            let numerador = parseFloat(savedServer.split("/")[0]);
            let denominador = parseFloat(savedServer.split("/")[1]);
            let resultado = numerador / denominador;
            CompararTR =  Math.abs(resultado - arrayp17e1[j - 1][contador_ejercicio] );
            
          }else if( auxindi2 == "n"){
            CompararTR = Math.abs(savedServer - arrayp17e1[j - 1][contador_ejercicio] );


          }

          if (CompararTR < epsilont) {

          $("#" + auxiliar_from_name).addClass("RespuestaCorrecta");
        } else {
          $("#" + auxiliar_from_name).addClass("RespuestaIncorrecta");
        }
        }else if(TypeOfDate == "s"){
          if(savedServer == arrayp17e1[j - 1][contador_ejercicio]){
            $("#" + auxiliar_from_name).addClass("RespuestaCorrecta");
          }else{
            $("#" + auxiliar_from_name).addClass("RespuestaIncorrecta"); 
          }
        }
        

        

        contador_ejercicio++;
      } else {
        contador_ejercicio = -1; //estpp debe romper el ciclo
      }
    }
     }

    
    contador_ejercicio = 0;
  }
}

function GenerarPDF(ProgresionActual, EjercicioActual,arrayp17e1,DatosFinalesNombre) {
  var auxiliar_from_name = "";
  let contador_ejercicio = 0;
  let auxTYpeD = "";
  //variables para pdf
  let booleana_saber = "false";
  let contador_aciertos_pdf = 0;
  const epsilonPD = 0.8;
  const tableData1 = [];
  let fecha_para_pdf = new Date();
  const formatter = new Intl.DateTimeFormat("en-US", {
    day: "2-digit",
    month: "2-digit",
    year: "numeric",
    hour: "2-digit",
    minute: "2-digit",
  });
  const formattedDate = formatter.format(fecha_para_pdf);
  if(typeof arrayp17e1[EjercicioActual - 1][0] == "string" ){
    auxTYpeD = "s";
  }else if(typeof arrayp17e1[EjercicioActual - 1][0] == "number"){
    auxTYpeD = "n";
  }

  // j es en funcion al ejerccio

  while (contador_ejercicio >= 0) {
    // buscara el input text

    auxiliar_from_name = "p" +ProgresionActual.toString() +"e" +EjercicioActual +"txt" +(contador_ejercicio + 1).toString();

    if ($("#" + auxiliar_from_name).length) {
      var savedServer = localStorage.getItem(auxiliar_from_name);
      $("#" + auxiliar_from_name).val(savedServer);
      if(auxTYpeD == "s"){
        if(savedServer == arrayp17e1[EjercicioActual - 1][contador_ejercicio] ){
          $("#" + auxiliar_from_name).addClass("RespuestaCorrecta");
        booleana_saber = "Correcto";
        contador_aciertos_pdf++;
        const rowData = [auxiliar_from_name, savedServer, booleana_saber];
        tableData1.push(rowData);
        }else{
          $("#" + auxiliar_from_name).addClass("RespuestaIncorrecta");
        booleana_saber = "Incorrecto";
        const rowData = [auxiliar_from_name, savedServer, booleana_saber];
        tableData1.push(rowData);
        }

      }else if(auxTYpeD = "n"){
        var segundoTipo = "n";//por defecto se queda en number
        for(let k = 0; k < savedServer.length; k++){
          if(savedServer[k] == "/"){
            segundoTipo = "f"; //cambia a fracción
            k = savedServer.length+1;//detiene el ciclo for cuando encuentra el slash
          }
        }

        let valorAuxiliar = 0;

        if(segundoTipo == "n"){
            valorAuxiliar = Math.abs( savedServer-arrayp17e1[EjercicioActual - 1][contador_ejercicio] );

          
        }else if(segundoTipo == "f"){
          let numerador = parseFloat(savedServer.split("/")[0]);
            let denominador = parseFloat(savedServer.split("/")[1]);
            let resultado = numerador / denominador;
            valorAuxiliar = Math.abs( resultado-arrayp17e1[EjercicioActual - 1][contador_ejercicio] );

        }
          if (valorAuxiliar < epsilonPD) {
            $("#" + auxiliar_from_name).addClass("RespuestaCorrecta");
            booleana_saber = "Correcto";
            contador_aciertos_pdf++;
            const rowData = [auxiliar_from_name, savedServer, booleana_saber];
            tableData1.push(rowData);
          } else if (valorAuxiliar >= epsilonPD) {
            $("#" + auxiliar_from_name).addClass("RespuestaIncorrecta");
            booleana_saber = "Incorrecto";
            const rowData = [auxiliar_from_name, savedServer, booleana_saber];
            tableData1.push(rowData);
          }
      }
      

      contador_ejercicio++;
    } else {
      contador_ejercicio = -1; //estpp debe romper el ciclo
    }
  }
  contador_ejercicio = 0;
  var pdf = new jsPDF("p", "pt", "a4");
  
  const header = "Hoja de resultados";
  pdf.setFont('Helvetica', 'bold');
  pdf.setTextColor(0,67,134);
  pdf.text(header, 40, 15, { baseline: "top" });
  pdf.setTextColor(0,78,245);
  pdf.text(200, 50, "Aprende con Kaxie");
  pdf.setFont('Helvetica', 'normal');
  pdf.setTextColor(0,0,0);
  pdf.text(
    35,
    80,
    "Imprime esta hoja para tener respaldo de los resultados obtenidos en el"
  );
  pdf.text(35, 100, "ejercicio.");
  pdf.text(35, 130, "Tus resultados se describen a continuación:");
  const head = [["Reactivo", "Respuesta", "Estado"]];
  pdf.autoTable({
    head: head,
    body: tableData1,
    theme: "grid",
    startY: 140,
    foot: [[" ", "Aciertos totales", contador_aciertos_pdf]],
  });
  pdf = addWaterMark(pdf, formattedDate, DatosFinalesNombre);
  pdf.save(
    "p" + ProgresionActual.toString() + "ejercicio" + EjercicioActual + ".pdf"
  );
}

function addWaterMark(doc, fecha, DatosFinalesNombre) {
  var totalPages = doc.internal.getNumberOfPages();

  for (i = 1; i <= totalPages; i++) {
    doc.setPage(i);
    //doc.addImage(imgData, 'PNG', 40, 40, 75, 75);
    doc.setTextColor(150);
    doc.text(
      50,
      doc.internal.pageSize.height - 30,
      "Aprende con Kaxie. Usuario: " + DatosFinalesNombre + " " + fecha.toString()
    );
  }

  return doc;
}

function colores(respuestas, numprogresion, numejercicio) {
  //ya hace lo que quiero ahora metamos el ajax para que quede mejor
  //alert("alto ahi woody")
  let inputres = [];
  let total = respuestas[numejercicio - 1].length;
  let array_auxMisRes = [];
  let array_reactivosPorEjercicio = [];
  let auxcontadorreac = 0;
  const epsilon = 0.8;
  var TipoDeDato = "";
  //   let saveButton = document.getElementById(
  //     "P" + numprogresion.toString() + "E" + numejercicio.toString() + "REV"
  //   );
  for (var i = 0; i < total; i++) {
    inputres[i] = document.getElementById("p" +numprogresion.toString() +"e" +numejercicio.toString()+"txt" +(i + 1).toString());
  
  }
//evaluar si la respuesta debe de ser de tipo number o string para más adelante
     if(typeof respuestas[numejercicio - 1][0] == "string"){//si es de tipo string lo guarda en la variable
      TipoDeDato = "s"
     }else if(typeof respuestas[numejercicio - 1][0] == "number"){//si es number lo guarda
      TipoDeDato = "n";
     }

  //ver si el elemento que se va a subir existe
  for (var i = 0; i < total; i++) {
    if ($("#" +"p" +numprogresion.toString() +"e" +numejercicio.toString() +"txt" +(i + 1).toString()).length) {
      
      console.log(inputres[i]);
      // if(inputres[i].tagName == "SELECT"){

      // }
     // if(auxiliarInput.length == 0 || /^\s+$/.test(auxiliarInput)){
        /*localStorage.setItem( "p" +numprogresion.toString() +"e" +numejercicio.toString() +"txt" +(i + 1).toString(), 0); //valor arbitrario cuando está vacío CHECAR
        auxcontadorreac++;*/
     // }else{

     //se sube al localstorage lo que hay en el input
     
        localStorage.setItem( "p" +numprogresion.toString() +"e" +numejercicio.toString() +"txt" +(i + 1).toString(),inputres[i].value);
      
       auxcontadorreac++;
     // }
        
    }
  }

  for (var i = 0; i < total; i++) {
    let aux ="p" +numprogresion.toString() +"e" +numejercicio.toString() +"txt" +(i + 1).toString();
    let auxiliarInput = document.getElementById(aux).value;
 

    let savedServer1 = localStorage.getItem(aux);
    //determinar el tipo de dato al que me enfrento
    /*aqui le movi */
    if(auxiliarInput.length == 0 || /^\s+$/.test(auxiliarInput)){
      array_auxMisRes[i] = 0;
    }else{
      if(TipoDeDato == "n"){
        var auxIndi = "n";//por defecto se queda en number
        for(let k = 0; k < savedServer1.length; k++){
          if(savedServer1[k] == "/"){
            auxIndi = "f"; //cambia a fracción
            k = savedServer1.length+1;//detiene el ciclo for cuando encuentra el slash
          }
        }

        if(auxIndi == "f"){
          let numerador = parseFloat(savedServer1.split("/")[0]);
            let denominador = parseFloat(savedServer1.split("/")[1]);
            let resultado = numerador / denominador;

            array_auxMisRes[i] = resultado;

        }else if(auxIndi == "n"){
          array_auxMisRes[i] = parseFloat(savedServer1);
        }
        
      }else if(TipoDeDato == "s"){
        array_auxMisRes[i] = savedServer1;
      }
      
    }
    /*fin mi movedera */
    // array_auxMisRes[i] = parseFloat(savedServer1);
    //console.log(array_auxMisRes[i]);
    // console.log(array_auxMisRes[i]); //BORRAR

    if (savedServer1) {
      //inputres[i].value = savedServer1;//AL INPUT TEXT SE LE DA EL VALOR QUE HAY EN LA VARIABLE
      if( TipoDeDato == "s"){//si es string únicamente compara
        if(savedServer1 == respuestas[numejercicio - 1][i]){
          inputres[i].classList.remove("RespuestaIncorrecta");
        inputres[i].classList.add("RespuestaCorrecta");
        }else if((savedServer1 != respuestas[numejercicio - 1][i]) || inputres[i].value == null){
          inputres[i].classList.remove("RespuestaCorrecta");
        inputres[i].classList.add("RespuestaIncorrecta");
        }
      }else if(TipoDeDato == "n"){//si es number determina si es fracción o no
        // let auxIndi = "n";//por defecto se queda en number
        // for(let k = 0; k < savedServer1.length; k++){
        //   if(savedServer1[k] == "/"){
        //     auxIndi = "f"; //cambia a fracción
        //     k = savedServer1.length+1;//detiene el ciclo for cuando encuentra el slash
        //   }
        // }
        let compararEP;

        if(auxIndi == "f"){
            let numerador = parseFloat(savedServer1.split("/")[0]);
            let denominador = parseFloat(savedServer1.split("/")[1]);
            let resultado = numerador / denominador;
            
            compararEP = Math.abs(resultado - respuestas[numejercicio - 1][i]);
        }else if(auxIndi == "n"){
          compararEP = Math.abs(inputres[i].value - respuestas[numejercicio - 1][i]);
          if(i == 12){
            console.log(inputres[i].value + " y " + respuestas[numejercicio - 1][i])
          }
        }
        //console.log(compararEP);

        if (compararEP < epsilon) {
        //SI EL VALOR DEL INPUT TEXT ES IGUAL AL DEL ARRAY, ANADE LA CLASE DE CORRECTO
        //alert("algo pasa");
        inputres[i].classList.remove("RespuestaIncorrecta");
        inputres[i].classList.add("RespuestaCorrecta");
        
      } else if (inputres[i].value != respuestas[numejercicio - 1][i] || inputres[i].value == null) {
        inputres[i].classList.remove("RespuestaCorrecta");
        inputres[i].classList.add("RespuestaIncorrecta");
      }
      }
      
      
    }
  }

  //INICIO AJAX
  //if(IndicadorBDJS){

  
  var parametros = {
    // 'matriz' = matriz,
    NumberExercise: numejercicio,
    NumberProgresion: numprogresion,
    Matriz: JSON.stringify(respuestas[numejercicio - 1]),
    MisRespuestas: JSON.stringify(array_auxMisRes),
    Reactivos: auxcontadorreac,
    TipoDate: TipoDeDato,
  };

  $.ajax({
    data: parametros,
    url: "ajax_calificacionE.php",
    type: "POST",
    dataType: "text",
    // success: function (data) {
    //     console.log(data);
    // }, error: function (error) {
    //     console.log('no jala');
    // },
    success: On_success,
    async: true,
  });

  function On_success(response) {
    console.log(response);
    $("#p" + numprogresion.toString() + "e" + numejercicio.toString() + "img").html(response);
    //$("#show").html(response);
  }
//}//fin del if
  //FIN AJAX

  
}


function RevisarPHP(NumberExercise, NumberProgresion, matriz, totalReac) {
  var parametros = {
    // 'matriz' = matriz,
    NumberExercise: NumberExercise,
    NumberProgresion: NumberProgresion,
    Matriz: JSON.stringify(matriz[NumberExercise - 1]),
    MisRespuestas: JSON.stringify([1, 2, 3]),
    Reactivos: totalReac,
  };

  $.ajax({
    data: parametros,
    url: "ajax_calificacionE.php",
    type: "POST",
    dataType: "text",
    // success: function (data) {
    //     console.log(data);
    // }, error: function (error) {
    //     console.log('no jala');
    // },
    success: On_success,
    async: true,
  });

  function On_success(response) {
    // console.log(response);
    $("#p" + numprogresion.toString() + "e" + numejercicio.toString() + "img").html(response);
    //$("#p" + NumberProgresion.toString() + "e" + NumberExercise.toString() + "img").html(response);
    //$("#show").html(response);
  }
}

function eliminartodo(numprogresion, numejercicio, total) {
  if (confirm("Tus últimas respuestas serán borradas pero tu última calificación se mantendrá almacenada en nuestra base de datos (si tienes una sesión abierta).")) {
    
    
    for (let i = 1; i <= total; i++) {
      let nombreAuxiliar = "p" +numprogresion.toString() +"e" +numejercicio.toString() +"txt" +(i).toString();
      let inputtxt = document.getElementById(nombreAuxiliar);
      inputtxt.classList.remove('RespuestaCorrecta');
      inputtxt.classList.remove('RespuestaIncorrecta');
      inputtxt.value = '';
      // document.getElementById(nombreAuxiliar.classList.remove("RespuestaCorrecta"));
      // document.getElementById(nombreAuxiliar.classList.remove("RespuestaIncorrecta"));
      localStorage.removeItem(nombreAuxiliar);
    }
  }
}




//AQUÍ
function TraerCalificacionPHP(NumeroP, NumeroE){

  //cuando tenga 0 no mostrará nada
  const divCalif = "p" + NumeroP.toString() + "e" + NumeroE.toString() + "img";

  //INICIO AJAX
  //if(IndicadorBDJS){

  
  var parametros = {
    // 'matriz' = matriz,
    NumberExercise: NumeroE,
    NumberProgresion: NumeroP,
    // Matriz: JSON.stringify(respuestas[numejercicio - 1]),
    // MisRespuestas: JSON.stringify(array_auxMisRes),
    // Reactivos: auxcontadorreac,
  };

  $.ajax({
    data: parametros,
    url: "ajax_TraerCalifDiv.php",
    type: "POST",
    dataType: "text",
    // success: function (data) {
    //     console.log(data);
    // }, error: function (error) {
    //     console.log('no jala');
    // },
    success: On_success,
    async: true,
  });

  function On_success(response) {
    console.log(response);
    $("#" + divCalif).html(response);
    //$("#show").html(response);
  }
//}//fin del if
  //FIN AJAX

}

function ColoresRadios(CantidadReactivos, NumeroPro, NumeroEj){//parámetros tipo int
  var contadorRdb = 0;
  //  auxiliarName = "";
  //  auxiliarQuery = "";
  for(let i = 1; i <= CantidadReactivos; i++){
    const auxiliarName = "p" + NumeroPro.toString() + "e" + NumeroEj.toString() + "r" + i.toString();
    //const elementNamw = document.getElementsByName(auxiliarName);
    
    
    
    const auxiliarQuery = document.querySelector("input[name=" + auxiliarName +"]:checked");
    

    if(auxiliarQuery === null){
      localStorage.setItem(auxiliarName, "");
    }else{
      const auxiliarQueryid =   auxiliarQuery.id;
    const labelAX = document.querySelectorAll("label[for =" + auxiliarQueryid + "]");
    // labelAX.forEach((labelAX) => {
    //   labelAX.classList.add("rdbCorrecto");
    //   //$('.rojo').removeClass("rojo").addClass("verde");
    // });
    

    // labelAX.classList.remove("rdbCorrecto");
    //     labelAX.classList.remove("rdbIncorrecto");
    
    

      localStorage.setItem(auxiliarName, auxiliarQuery.value);
    if(auxiliarQuery.value == 1){
      //auxiliarQuery.classList.add("rdbCorrecto");
      contadorRdb++;
      labelAX.forEach((labelAX) => {
        labelAX.classList.add("rdbCorrecto");
      });
      //auxiliarQuery.style.accent-color = "green";
      $(auxiliarQuery).css("accent-color", "green");
      //console.log(labelAX);
      //labelAX.classList.add("rdbCorrecto");
    }else{
      labelAX.forEach((labelAX) => {
        
        labelAX.classList.add("rdbIncorrecto");
      });
      $(auxiliarQuery).css("accent-color", "red");
    }
    }
    
  }
  //AJAX mandar calif a bd y calcular calificacio
  
  var parametros = {
    // 'matriz' = matriz,
    AciertosTotales: contadorRdb,
    ProgresionA: NumeroPro,
    CantidadEjer: CantidadReactivos,
    EjercicioA: NumeroEj,
  };

  $.ajax({
    data: parametros,
    url: "ajax_radioCalif.php",
    type: "POST",
    dataType: "text",
    // success: function (data) {
    //     console.log(data);
    // }, error: function (error) {
    //     console.log('no jala');
    // },
    success: On_success,
    async: true,
  });

  function On_success(response) {
    console.log(response);
    $("#p" + NumeroPro.toString() + "e" + NumeroEj.toString() + "img").html(response);
    //$("#show").html(response);
  }

  //fin AJAX
}

function TraerRadios (totalEjercicios, NumeroPro){//excepción cuando no hay nada en el localstorage
  var contadorReactivo = 1;
  var a = 1;
  for(let i = 1; i <= totalEjercicios; i++){ //itera los ejercicios radio
    while(contadorReactivo >= 1){
      const rbdname = "p" + NumeroPro.toString() + "e" + i.toString() + "r" + contadorReactivo.toString();
      const savedRadio = localStorage.getItem(rbdname);

      if(savedRadio === null){
        contadorReactivo = 0;
  
      }else if(savedRadio != ""){
          const elementNamw = document.getElementsByName(rbdname);
        console.log(elementNamw.length);
        if(!(elementNamw.length == 0)){
          elementNamw.forEach((elementNamw) => {
          var rbdid = document.getElementById((rbdname + "a" + a.toString()));
          if(savedRadio == elementNamw.value){
            const labelAX = document.querySelectorAll("label[for =" + rbdid.id + "]");
            if(savedRadio == 1){
              rbdid.style.accentColor = "green";
              $(rbdid).prop('checked',true) ;
              labelAX.forEach((labelAX) => {
                labelAX.classList.add("rdbCorrecto");
              });
            }else{
              rbdid.style.accentColor = "red";
              $(rbdid).prop('checked',true) ;
              labelAX.forEach((labelAX) => {
                labelAX.classList.add("rdbIncorrecto");
              });
            }
            console.log("le haz dado");
          }else{
            console.log("no son")
          }
          a++;
        });
        elementNamw.forEach((elementNamw) => {});
        a = 1;
        contadorReactivo++;
        }else{
          contadorReactivo = 0;
        }
      }else{
        contadorReactivo = 0;
      }
    }
    contadorReactivo = 1;
    a = 1; 
  }
}

function BorrarRadios(numprogresion, numejercicio, total){
  if (confirm("Tus últimas respuestas serán borradas pero tu última calificación se mantendrá almacenada en nuestra base de datos (si tienes una sesión abierta).")) {
    
    
    for (let i = 1; i <= total; i++) {
      let nombreAuxiliar = "p" +numprogresion.toString() +"e" +numejercicio.toString() +"r" +(i).toString();
      const elementNamw = document.getElementsByName(nombreAuxiliar);
      const idElement = elementNamw.id;
      
      

      elementNamw.forEach((elementNamw) => {
        
        elementNamw.checked = false;
        elementNamw.style.accentColor = "";
        //const auxiliarIDr = elementNamw.id;
        const labelAX = document.querySelectorAll("label[for =" + elementNamw.id + "]");
        labelAX.forEach((labelAX) => {
          labelAX.classList.remove("rdbIncorrecto");
          labelAX.classList.remove("rdbCorrecto");
        });
      });

      localStorage.removeItem(nombreAuxiliar);
    }
  }
}

function pdfForRbd (ProgresionActual, EjercicioActual,totalA,DatosFinalesNombre){
  var auxiliar_from_name = "";
  let contador_ejercicio = 0;
  //variables para pdf
  let booleana_saber = "false";
  let contador_aciertos_pdf = 0;
  const epsilonPD = 0.1;
  const tableData1 = [];
  let fecha_para_pdf = new Date();
  const formatter = new Intl.DateTimeFormat("en-US", {
    day: "2-digit",
    month: "2-digit",
    year: "numeric",
    hour: "2-digit",
    minute: "2-digit",
  });
  const formattedDate = formatter.format(fecha_para_pdf);

  // j es en funcion al ejerccio

  for(let i = 1; i <= totalA; i++){
    auxiliar_from_name = "p" +ProgresionActual.toString() +"e" +EjercicioActual +"r" +(i).toString();//name para localstorage
    var savedServer = localStorage.getItem(auxiliar_from_name);
    if(savedServer == 1){
      booleana_saber = "Correcto";
        contador_aciertos_pdf++;
        const rowData = [auxiliar_from_name,  booleana_saber];
        tableData1.push(rowData);

    }else{
      booleana_saber = "Incorrecto";
        const rowData = [auxiliar_from_name,  booleana_saber];
        tableData1.push(rowData);

    }


  }
  var pdf = new jsPDF("p", "pt", "a4");
  
  const header = "Hoja de resultados";
  pdf.setFont('Helvetica', 'bold');
  pdf.setTextColor(0,67,134);
  pdf.text(header, 40, 15, { baseline: "top" });
  pdf.setTextColor(0,78,245);
  pdf.text(200, 50, "Aprende con Kaxie");
  pdf.setFont('Helvetica', 'normal');
  pdf.setTextColor(0,0,0);
  pdf.text(
    35,
    80,
    "Imprime esta hoja para tener respaldo de los resultados obtenidos en el"
  );
  pdf.text(35, 100, "ejercicio.");
  pdf.text(35, 130, "Tus resultados se describen a continuación:");
  const head = [["Reactivo", "Estado"]];
  pdf.autoTable({
    head: head,
    body: tableData1,
    theme: "grid",
    startY: 140,
    foot: [[ "Aciertos totales", contador_aciertos_pdf]],
  });
  pdf = addWaterMark(pdf, formattedDate, DatosFinalesNombre);
  pdf.save(
    "p" + ProgresionActual.toString() + "ejercicio" + EjercicioActual + ".pdf"
  );

}


