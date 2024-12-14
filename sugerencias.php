<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <link rel= "icon" href="images/logo.ico" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Sugerencias</title>
</head>
<body>
<?php
    require ('ifSession.php');
?>

    <div class="formulario4">
        <br>
        <div class="container2">
            <center>
                <div class="colort">
                    <h3>Envía tus sugerencias</h3>
                    <img src="images/kaxirreo.png" heigth="200" width="200">
                    <p>Nos encantaría saber tus ideas y comentarios.</p>
                </div>
<!--Le puse un id al formulario para llamarlo en java-->
                <form id="suggestions-form" action="https://formsubmit.co/aprendeconkaxie@gmail.com" method="POST">
                    <div class="inputcamp">
                        <input type="text" name="name" class="form-control" placeholder="Nombre completo" required>
                    </div>
                    <div class="inputcamp">
                        <input type="email" name="email" class="form-control" placeholder="Correo email" required>
                    </div>
                    <div class="inputcamp">
                        <textarea placeholder="Escribe algo aquí..." class="styled-textarea" name="message" rows="10" required></textarea>
                    </div>
                    <input type="hidden" name="_template" value="table">
                    <input type="text" name="_honey" style="display:none">
                    <input type="hidden" name="_captcha" value="false">
                    <div>
                    <input type="submit" name="uno" value="Enviar formulario" class="btn-nat">
                    <!-- <button type="submit" class="btn" name="uno">Enviar formulario</button> -->
                </div>
                </form>

                <dialog id="alert-dialog" class=" container2 center">
                    <p>¡Gracias por tu sugerencia!</p>
                    <input type="submit" name="uno" value="Aceptar" class="d-boton" onclick="closeDialog()">

                    <!-- <button onclick="closeDialog()" class="d-boton">Aceptar</button> -->
                </dialog>
            </center>
        </div>
    </div>
    <br>
    <?php include('footer.php'); ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var form = document.getElementById('suggestions-form');
            var submitButton = form.querySelector('.btn-nat');
            var dialog = document.getElementById('alert-dialog');

            form.addEventListener('submit', function(event) {
                event.preventDefault(); //es para que no se envie el formulario solo

                alert('De un solo clic al botón. Tarda un poco en cargar.');//la advertencia jssj

                submitButton.classList.add('clicked');//estilo botonn, esto se puede quitar solo era para ver si si funcionaba
                submitButton.disabled = true;//para deshabilitar y no le piquen muchas veces

                var formData = new FormData(form);//crea un objeto con los datos del formulario

                fetch(form.action, {//envia los datos (del objeto)
                    method: form.method,
                    body: formData
                })
                .then(response => response.ok ? response : Promise.reject(response))//se encarga de lo que diga el servidor
                .then(() => {//este muestra el dialogo si se realiza correctamente ↑ eso
                    dialog.showModal();
                })
                .catch(error => {
                    console.error('Error al enviar el formulario:', error);//por si hay errores
                    submitButton.classList.remove('clicked');
                    submitButton.disabled = false;
                });
            });
        });

        function closeDialog() {//una funcion para cerrar el dialogo jssjsj
            var dialog = document.getElementById('alert-dialog');
            dialog.close();
            window.location.href="index.php";
        }
    </script>
</body>
</html>
