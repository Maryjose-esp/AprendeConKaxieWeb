const totalcartas= 12;
let cartas=[]; //cartas generadas
let cartasseleccionadas = [];
let valores=[]; //valores usados
let movimientoactual=[];

let plantillacarta = '<div class="tarjeta"><div class="atras"></div><div class="adelante"></div></div>';

function active (e){
    if(movimientoactual < 2){
        e.target.classList.add('active');
        if (!cartasseleccionadas[0] || cartasseleccionadas[0] !== e.target){
            cartasseleccionadas.push(e.target);

            if(++movimientoactual == 2){
                if(cartasseleccionadas[0].querySelectorAll('.adelante')[0].innerHTML==cartasseleccionadas[1].querySelectorAll('.adelante')[0].innerHTML){
                    cartasseleccionadas = [];
                    movimientoactual = 0;
                }else{
                    setTimeout(() =>{
                        cartasseleccionadas[0].classList.remove('active');
                        cartasseleccionadas[1].classList.remove('active');
                        cartasseleccionadas = [];
                        movimientoactual=0;
                    }, 600)
                }
            }

        }
    }
}
for( let i = 0; i < totalcartas; i++){
    let div = document.createElement('div');
    div.innerHTML = plantillacarta;
    cartas.push(div);
    document.querySelector('#juegomemorama').append(cartas[i]);
}