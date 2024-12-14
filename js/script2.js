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
        //controlo si hay cincidencia
        if(arreglo[0]=="img8" && arreglo[1]=="img7" &&
        arreglo[2]=="img6" && arreglo[3]=="img5"){
            document.getElementById('calif').innerText ="MUY BIEN";
        } else{
            document.getElementById('calif').innerText ="INTENTA DE NUEVO";
        }
    }
}