<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="images/logo.ico" type="image/x-icon">
    <title>Inicio de Sesion - Aprende Con Kaxie</title>
</head>

<body>
    <?php
    require ('ifSession.php');
    ?>
    <section style="margin-top: 30px;">

        <div class="formulario">
            <CENTER>
                <H3>Iniciar sesión</h3>
            </CENTER>
            <div class="imgKax">

            </div>
            <form action="abrirsesion.php" method="GET" enctype="text/plain">
                <div id="contin">
                    <div class="inputcamp">
                        <Input type="text" name="NomUsrIS" placeholder="Nombre de usuario" required><br>


                    </div>
                    <div class="inputcamp">
                        <Input type="password" name="passwIS" placeholder="Contrasena" required> <br>


                    </div>
                </div>
                <div class="recuerdame">
                    <Input type="checkbox" name="Mantener" id="SesionMan"><label for="SesionMan">Mantener inicio de sesion</label><br>
                </div>

                <input type="submit" name="iniciaS" value="Iniciar Sesion" class="btn">
                <div class="new">
                    <p>No tinenes una cuenta? <a href="registro.php">Da click aqui para crear una</a>
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