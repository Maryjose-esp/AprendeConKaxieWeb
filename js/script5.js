const defaultFile = './images/fotoperdefa.png';
const file = document.getElementById('subirImagen');
const img = document.getElementById('verimg');
file.addEventListener('change', e => {
    if(e.target.files[0]){
        const reader = new FileReader();
        reader.onload = function(e){
            img.src = e.target.result;
            document.getElementById('FotoPerfilMena').classList.remove('colorSeleccion');
            document.getElementById('FotoPerfilMajo').classList.remove('colorSeleccion');
            document.getElementById('FotoPerfilNata').classList.remove('colorSeleccion');
            document.querySelectorAll('[name=fotoPerfil]').forEach((x) => x.checked=false);
                            
        }
        reader.readAsDataURL(e.target.files[0])
    }else{
        img.src = defaultFile;
    }
});

function eliminararchivo(){
    document.getElementById('subirImagen').value="";
    img.src = defaultFile;
}
