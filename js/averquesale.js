$(document.registration).ready(function() {

    $('input').keyup(function() {
      // set password variable
  var password = $(this).val();
  var p1 = document.getElementById("Passw").value;
  var noValido = / /;
  
  //validar longitud contraseña
  if ( password.length < 8 ) {
      $('#length').removeClass('valid').addClass('invalid');
  } else {
      $('#length').removeClass('invalid').addClass('valid');
  }
  //validar letra
  if ( password.match(/[A-z]/) ) {
      $('#letter').removeClass('invalid').addClass('valid');
  } else {
      $('#letter').removeClass('valid').addClass('invalid');
  }
  
  //validar letra mayúscula
  if ( password.match(/[A-Z]/) ) {
      $('#capital').removeClass('invalid').addClass('valid');
  } else {
      $('#capital').removeClass('valid').addClass('invalid');
  }
  
  //validar numero
  if ( password.match(/\d/) ) {
      $('#number').removeClass('invalid').addClass('valid');
  } else {
      $('#number').removeClass('valid').addClass('invalid');
  }
  
  //validar confirmación contraseña
  if (p1.length == 0 || p2.length == 0) {
    $('#null').removeClass('valid').addClass('invalid');
  } else {
    $('#null').removeClass('invalid').addClass('valid');
  }
  
  //validar contraseñas cohincidan
  
  
  }).focus(function() {
      $('#pswd_info').show();
  }).blur(function() {
      $('#pswd_info').hide();
  });
  
  });