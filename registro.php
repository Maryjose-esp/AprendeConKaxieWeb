<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="images/logo.ico" type="image/x-icon">
    <title>Registrarse - Aprende Con Kaxie</title>
</head>

<body>
    <?php
    include ('ifSession.php');
    ?>

    <section style=" margin-top:30px;">
        <div class="formulario2">
            <CENTER>
                <H3>Registrarse</h3>
            </CENTER>
            <div class="imgKaxr">

            </div>
            <form action="registrouser.php" method="get">
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
                        <Input type="password" name="Passw" placeholder="Contrasena" required> <br>
                    </div>
                </div>

                <div class="recuerdame">
                    <Input type="checkbox" name="Mantener" id="SesionM"><label for="SesionM">Mantener inicio de sesion</label><br>
                </div>

                <input type="submit" name="iniciaS" value="Registrarse" class="btn">
                <div class="new">
                    <p>Ya tinenes una cuenta? <a href="sesion.php">Da click aqui para iniciar sesion</a>
                    <p>
                </div>
            </form>
            <div>

    </section>
        <?php
        include ('footer.php');
        ?>
</body>

</html>