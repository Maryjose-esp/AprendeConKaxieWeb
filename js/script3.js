let iconos
selecciones = []

generarTablero()
function cargarIconos(){
    iconos=[
        '<img src="images/Progresion1img/memoimg/1.png" width="100%">',
        '<img src="images/Progresion1img/memoimg/3.png" width="100%">',
        '<img src="images/Progresion1img/memoimg/5.png" width="100%">',
        '<img src="images/Progresion1img/memoimg/7.png" width="100%">',
        '<img src="images/Progresion1img/memoimg/9.png" width="100%">',
        '<img src="images/Progresion1img/memoimg/11.png" width="100%">',
        '<img src="images/Progresion1img/memoimg/13.png" width="100%">',
        '<img src="images/Progresion1img/memoimg/15.png" width="100%">',
        '<img src="images/Progresion1img/memoimg/17.png" width="100%">',
        '<img src="images/Progresion1img/memoimg/19.png" width="100%">',
        '<img src="images/Progresion1img/memoimg/21.png" width="100%">',
        '<img src="images/Progresion1img/memoimg/23.png" width="100%">'
        
    ]
}

function generarTablero(){
    cargarIconos();
    selecciones = []
    let tablero = document.getElementById("tablero")
    let tarjetas = []
    for(let i = 0; i< 24; i++){
        tarjetas.push(`   
        <div class="area-tarjeta" onclick="seleccionarTarjeta(${i})">
            <DIV CLASS="tarjeta" id="tarjeta${i}">
                <DIV CLASS="cara trasera" id="trasera${i}">
                    ${iconos[0]}
                </div>

                <DIV CLASS="cara superior">
                    <i class="fa-solid fa-question"></i>
                </div>
            </div>
        </div>
        `)

        if(i%2==1){
            iconos.splice(0, 1)
        }
    }
    //tarjetas.sort(()=> Math.random()-0.5)
    tablero.innerHTML = tarjetas.join("")
}



function selecciontarTarjeta(i){
    let tarjeta = document.getElementById("tarjeta"+i)
    if(tarjeta.style.transform!= "rotateY(180deg)"){
        tarjeta.style.transform = "rotateY(180deg)"
        selecciones.push(i)
    }
    if(selecciones.length == 2){
        deseleccionar(selecciones)
        selecciones = []
    }
}

function deseleccionar (selecciones){
    setTimeout(() => {
        

        let trasera1=document.getElementById("trasera"+selecciones[0])
        let trasera2=document.getElementById("trasera"+selecciones[1])

        if(trasera1.innerHTML != trasera2.innerHTML){
            let tarjeta1=document.getElementById("tarjeta"+selecciones[0])
            let tarjeta2=document.getElementById("tarjeta"+selecciones[1])
            tarjeta1.style.transform = "rotateY(0deg)"
            tarjeta2.style.transform = "rotateY(0deg)"
        }else{
            trasera1.style.background = "plum";
            trasera2.style.background = "plum";
        }
    }, 1000);
}