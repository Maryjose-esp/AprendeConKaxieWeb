function pruebi() {
  alert("hola");
}
function TraerDatos(ProgresionActual, arrayp17e1, cantidadEjercicios) {
  var auxiliar_from_name = "";
  let contador_ejercicio = 0;

  for (let j = 1; j <= cantidadEjercicios; j++) {
    // j es en funcion al ejerccio

    while (contador_ejercicio >= 0) {
      // buscara el input text

      auxiliar_from_name =
        "p" +
        ProgresionActual.toString() +
        "e" +
        j.toString() +
        "txt" +
        (contador_ejercicio + 1).toString();

      if ($("#" + auxiliar_from_name).length) {
        var savedServer = localStorage.getItem(auxiliar_from_name);
        $("#" + auxiliar_from_name).val(savedServer);

        if (arrayp17e1[j - 1][contador_ejercicio] == savedServer) {
          $("#" + auxiliar_from_name).addClass("RespuestaCorrecta");
        } else if (arrayp17e1[j - 1][contador_ejercicio] != savedServer) {
          $("#" + auxiliar_from_name).addClass("RespuestaIncorrecta");
        }

        contador_ejercicio++;
      } else {
        contador_ejercicio = -1; //estpp debe romper el ciclo
      }
    }
    contador_ejercicio = 0;
  }
}

function colores(respuestas, numprogresion, numejercicio) {
  //ya hace lo que quiero ahora metamos el ajax para que quede mejor
  //alert("alto ahi woody")
  let inputres = [];
  let total = respuestas[numejercicio - 1].length;
  let array_auxMisRes = [];
  let array_reactivosPorEjercicio = [];
  let auxcontadorreac = 0;
  //   let saveButton = document.getElementById(
  //     "P" + numprogresion.toString() + "E" + numejercicio.toString() + "REV"
  //   );
  for (var i = 0; i < total; i++) {
    inputres[i] = document.getElementById(
      "p" +
        numprogresion.toString() +
        "e" +
        numejercicio.toString() +
        "txt" +
        (i + 1).toString()
    );
  }

  //ver si el elemento que se va a subir existe
  for (var i = 0; i < total; i++) {
    if (
      $(
        "#" +
          "p" +
          numprogresion.toString() +
          "e" +
          numejercicio.toString() +
          "txt" +
          (i + 1).toString()
      ).length
    ) {
      localStorage.setItem(
        "p" +
          numprogresion.toString() +
          "e" +
          numejercicio.toString() +
          "txt" +
          (i + 1).toString(),
        inputres[i].value
      );
      auxcontadorreac++;
    }
  }

  for (var i = 0; i < total; i++) {
    let aux =
      "p" +
      numprogresion.toString() +
      "e" +
      numejercicio.toString() +
      "txt" +
      (i + 1).toString();
    let savedServer1 = localStorage.getItem(aux);
    array_auxMisRes[i] = parseInt(savedServer1);
    console.log(array_auxMisRes[i]); //BORRAR
    if (savedServer1) {
      //inputres[i].value = savedServer1;//AL INPUT TEXT SE LE DA EL VALOR QUE HAY EN LA VARIABLE

      if (inputres[i].value == respuestas[numejercicio - 1][i]) {
        //SI EL VALOR DEL INPUT TEXT ES IGUAL AL DEL ARRAY, ANADE LA CLASE DE CORRECTO
        //alert("algo pasa");
        inputres[i].classList.remove("RespuestaIncorrecta");
        inputres[i].classList.add("RespuestaCorrecta");
      } else if (
        inputres[i].value != respuestas[numejercicio - 1][i] ||
        inputres[i].value == null
      ) {
        inputres[i].classList.remove("RespuestaCorrecta");
        inputres[i].classList.add("RespuestaIncorrecta");
      }
    }
  }

  //INICIO AJAX
  var parametros = {
    // 'matriz' = matriz,
    NumberExercise: numejercicio,
    NumberProgresion: numprogresion,
    Matriz: JSON.stringify(respuestas[numejercicio - 1]),
    MisRespuestas: JSON.stringify(array_auxMisRes),
    Reactivos: auxcontadorreac,
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
    $(
      "#p" + numprogresion.toString() + "e" + numejercicio.toString() + "img"
    ).html(response);
    //$("#show").html(response);
  }

  //FIN AJAX
  function eliminartodo() {
    if (confirm("Estas seguro")) {
      localStorage.clear();
      for (var i = 0; i < total; i++) {
        document.getElementById(
          "p" +
            numprogresion.toString() +
            "e" +
            numejercicio.toString() +
            "txt" +
            (i + 1).toString().classList.remove("RespuestaCorrecta")
        );
        document.getElementById(
          "p" +
            numprogresion.toString() +
            "e" +
            numejercicio.toString() +
            "txt" +
            (i + 1).toString().classList.remove("RespuestaIncorrecta")
        );
      }
    }
  }
}

function RevisarPHP(NumberExercise, NumberProgresion, matriz) {
  var parametros = {
    // 'matriz' = matriz,
    NumberExercise: NumberExercise,
    NumberProgresion: NumberProgresion,
    Matriz: JSON.stringify(matriz[NumberExercise - 1]),
    MisRespuestas: JSON.stringify([1, 2, 3]),
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
    //$("#p" + NumberProgresion.toString() + "e" + NumberExercise.toString() + "img").html(response);
    //$("#show").html(response);
  }
}
