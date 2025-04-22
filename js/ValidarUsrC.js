const passwordInput = document.getElementById("Passw"); //el input de la contraseña
const Validar = document.getElementById("ValCon"); //label para colocar el texto correspondiente a la validación de la contraseña
const btnRegistro = document.getElementById("registra"); //botón de registro del formulario 

const Nombre = document.getElementById("Nombre"); //input del nombre
const PermitirNom = document.getElementById("ValNom"); //label para el mensaje de no valido del campo

const Apellido = document.getElementById("Apellido"); //input del apellido del usr
const PermitirApe = document.getElementById("ValApe"); //label correspondiente al mensaje de no valido en caso de serlo

//variables para saber el estado actual del campo llenado
var ApeVali = false ;
var NomVali = false ;
var ContraVali = false;

function ActualizarBoton () {
    btnRegistro.disabled = !(ApeVali && NomVali && ContraVali); // desactiva el botón si alguna validación es falsa
}

Apellido.oninput = function(){
    const valiApe = /^[a-zA-ZÀ-ÿñÑ\s]+$/; // expresión regular para solo aceptar letras y acentos, así como la ñ

    if(Apellido.value.match(valiApe)){ //si el valor dentro del input cumple con los criterios de la expresión, entonces el botón podrá activarse
        PermitirApe.innerHTML = "";
        btnRegistro.disabled=false;
        ApeVali = true ;
    } else {
        PermitirApe.innerHTML = "Apellido no valido";
        btnRegistro.disabled=true;
        ApeVali = false ;
    }
    ActualizarBoton(); //actualiza el estado del botón
}

Nombre.oninput = function() { //función que valida si el nombre es correcto
    const valiNom = /^[a-zA-ZÀ-ÿñÑ\s]+$/; //expresión regular para solo admitir letras, acentos y ñ y espacios

    if(Nombre.value.match(valiNom)){
        PermitirNom.innerHTML = "";
        btnRegistro.disabled=false; //permite que el botón se active
        NomVali = true ; // variable para permitir activar el botón
    } else {
        PermitirNom.innerHTML = "Nombre no valido";
        btnRegistro.disabled=true;
        NomVali = false ;
    }
    ActualizarBoton();
}

passwordInput.oninput = function() { // función que permite validar la contraseña, de ser así, permite que el usuario utilice el botón
    const decimal = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&{}+'¿¡\\~|°¬´´¨""#//()=``.:,;ñ])[A-Za-z\d\\@$!%*?&{}+'¿¡~|°¬´´¨""#//()=``.:,;ñ]{8,15}$/;
//expresión regular que permite, letras (mayúsculas o mínusculas), números y carácteres especiales, si no coloca alguna entonces la contraseña no es valida
    if(passwordInput.value.match(decimal)){
        Validar.innerHTML = "Contraseña valida.";
        btnRegistro.disabled=false;
        ContraVali = true ;
    } else {
        Validar.innerHTML = "Contraseña invalida, se requiere una mayúscula, un signo especial, un número además de tener entre 8 y 15 carácteres.";
        btnRegistro.disabled=true;
        ContraVali = false;
    }
    ActualizarBoton();
};



function cambioOjoK (eyeicon, password){ //función que permite observar la contraseña, mediante imagenes representativas de un ojo para ser intituivo
    if(password.type == "password"){
        password.type = "text";
        eyeicon.src= "images/open.png";
    } else {
        password.type = "password";
        eyeicon.src= "images/close.png";
    }
    
}

