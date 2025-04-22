let arreglo =["", "","",""]; //para saber cuales divs ya esan ocupados
function allowDrop(ev){//evita que se abra como enlace al soltar elementos
    ev.preventDefault();

}

function drag(ev){
    ev.dataTransfer.setData("text",ev.target.id);

}

function drop(ev){
    /*mediante ev.target.id se toma el nombre del id del div, el cual puede
    ser 0 o 1 0 2 si el arreglo en diah posicion esta vacio significa que no tiene nada,
    o sea , puedo soltar allo. Caso contrario, ya tiene un elemento*/
        if(arreglo[parseInt(ev.target.id)] ==""){
            //obtenga los datos arrastrados con el metodo DataTransfer.getData()
            //este metodo devolvera cualquier dato que se haya establecido en el mismo
            //tipo en metodo setData()
            //en este ejemplo DATA  quedara con gato o perro o loro
        var data= ev.dataTransfer.getData("text");
        //agrego al arreglo el nombre del id
        arreglo[parseInt(ev.target.id)]= data;
        //agrego el elemento saltado
        ev.target.appendChild(document.getElementById(data));
    }

    //control que ya esten arrastrados todos los elementos

    if(arreglo[0]!="" && arreglo[1] != "" && arreglo[2]!="" && arreglo[3]!=""){
        let contadorAciert = 0;
        let kaxieimg = "";
        //controlo si hay cincidencia
      
        if(arreglo[0] == "img8"){
            contadorAciert++;
        }
        if(arreglo[1] == "img7"){
            contadorAciert++;
        }
        if(arreglo[2] == "img6"){
            contadorAciert++;
        }
        if(arreglo[3] == "img5"){
            contadorAciert++;
        }

        contadorAciert *= 10 / 4;
        if (contadorAciert < 6) {
            kaxieimg = "reprobo.png";
        } else if (contadorAciert >= 6 && contadorAciert <= 8) {
            kaxieimg = "aceptable.png";
        } else if (contadorAciert > 8 && contadorAciert <= 10) {
            kaxieimg = "buenacalif.png";
        }
        const actualDoc = document.getElementById('p1e3img');
        const imgResult = document.createElement("img");
        const spanResult = document.createElement("span");
        spanResult.innerHTML = contadorAciert.toString();

        imgResult.src = "images/" + kaxieimg;
        imgResult.width = 200;
        actualDoc.appendChild(imgResult);
        actualDoc.appendChild(spanResult);
        console.log(imgResult)

        if(IndicadorBDJS == true){
            var parametros = {
                // 'matriz' = matriz,
                NumberExercise: "3",
                NumberProgresion: "1",
                Calif: contadorAciert.toString(),
              };
            
              $.ajax({
                data: parametros,
                url: "ajax_Interactivos.php",
                type: "POST",
                dataType: "text",
                // success: function (data) {
                //     console.log(data);
                // }, error: function (error) {
                //     console.log('no jala');
                // },
                success: console.log("yap"),
                async: true,
              });
        }
        //actualDoc.innerText = contadorAciert.toString();
        
        
        // if(arreglo[0]=="img8" && arreglo[1]=="img7" &&
        // arreglo[2]=="img6" && arreglo[3]=="img5"){
        //     document.getElementById('calif').innerText ="MUY BIEN";
        // } else{
        //     document.getElementById('calif').innerText ="INTENTA DE NUEVO";
        // }
    }
}