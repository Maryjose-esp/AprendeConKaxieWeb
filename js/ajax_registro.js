

function registrar(){
  var Nom = document.getElementById("Nombre").value;
  var Apell = document.getElementById("Apellido").value;
  var Contra = document.getElementById("Passw").value;
  var Usuario = document.getElementById("NomUsr").value;
  var dialogo_Act = document.getElementById("UserRepetido");
  var buttonDialog = document.getElementById("irPagini");

//console.log(Usuario);
  
  var parametros = {
    NomUsr: Usuario,
    Passw : Contra,
    Nombre : Nom,
    Apellido : Apell,
  }

  $.ajax({
    data: parametros,
    url: "registrouser.php",
    type: "POST",
    dataType: "text",
    success: On_success,
    async: true,
  });
  function On_success(response) {
    console.log(response);
    if(response == 1){
      //alert("ese nombre de usuario ya existe, intente con otro por favor");
      dialogo_Act.showModal();
      buttonDialog.addEventListener("click", function() {
        dialogo_Act.close();
      });

    }else{
      const url = new URL(response);
      window.location.replace(url);
    }

}
}
   

