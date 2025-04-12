<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/style5.css">
    <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="images/logo.ico" type="image/x-icon">
    <title>Registrarse - Aprende Con Kaxie</title>
</head>

<body>
    <?php
    include('ifSession.php');
    ?>



    <section style=" margin-top:30px;">
        <div class="formulario2">

            <h3 class="adaptar_noblock">Registrarse</h3><br>

            <img src="./images/KaxieCreausr.png" class="imgKaxr">
            <form name=registro action="registrouser.php" method="post">

                <div id="contin2">

                    <div class="inputcamp">
                        <Input type="text" name="Nombre" placeholder="Nombre" required><br>
                    </div>

                    <div class="inputcamp">
                        <Input type="text" name="Apellido" placeholder="Apellido" required> <br>
                    </div>

                    <div class="inputcamp">
                        <Input type="text" name="NomUsr" placeholder="Nombre de usuario" required><br>
                    </div>

                    <div class="inputcamp">
                        <Input type="password" name="Passw" id="Passw" placeholder="Contrasena" minlength=8 required>

                    </div>
                    <div class="recuerdame">
                        <Input class="recuerdame" type="checkbox" name="Mantener" id="SesionM"><label
                            for="SesionM">Mantener inicio de sesion</label>
                    </div>

                    <p class="new">¿Ya tienes una cuenta? <a href="sesion.php">Da click aqui para iniciar sesion</a>
                    </p><br><br>
                    <input type="submit" id="registra" name="iniciaS" value="Registrarse" class="btn">

                </div>






            </form>
            <div>

    </section>
    <?php
    include('footer.php');
    ?>
</body>

</html>