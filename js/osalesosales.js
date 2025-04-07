$(document.registro).ready(function() {
    $('#Passw').keyup(function() {
        //const decimal = /^(?=-*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!-*\s).{8,150}$/;

        var pass = $('#Passw').val();

        if (pass=="hi"){
            $('#error').text("Contraseña valida");

        } else {
            $('#error').text("Incorrecto");
        }
        // if(pass.value.match(decimal)){
        //     $('#error').text("Contraseña valida.");

        // } else {
        //     $('#error').text("La contraseña debe contener mínimo 8 valores, una letra mayúscula, una minúscula, un número y un carácter especial.");

        // }

    });
});