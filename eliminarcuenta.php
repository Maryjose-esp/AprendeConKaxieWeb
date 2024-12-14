<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="images/logo.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <title>Eliminar cuenta - Aprende con Kaxie</title>
</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION['Usuario'])) {
        header('Location:index.php');

    } else {
        include ('navbarSS.php');
    }
    ?>

    <section class="deleteaccount">
        <center>
            <h1>Eliminar cuenta</h1>
            <h4>Confirma tu contraseña para poder eliminar tu cuenta.</h4>
            <form method="post">
                <div class="inputcamp"><input type="text" name="usuario" value=<?php echo $_SESSION['Usuario']?> readonly></div><br>
                <div class="inputcamp"><input type="password" name="confirmar1" placeholder="Contraseña" required></div>
                <br>
                <div class="inputcamp"><input type="password" name="confirmar2" placeholder="Confirmar contraseña"
                        required></div><br><br><br>
                <input type="submit" value="Eliminar cuenta" name="EliminarC" class="btn"><br>
            </form>
            <?php
            if (isset($_POST['EliminarC'])) {
                require ('conexionbd.php');
                $usuario = $_SESSION['Usuario'];
                $password1 = $_POST['confirmar1'];
                $password2 = $_POST['confirmar2'];

                if ($password1 == $password2) {
                    $delete = "DELETE FROM usuario WHERE NUSUARIO = '$usuario' AND CONTRASENA = '$password2'";
                    $comando = mysqli_query($conexion, $delete);
                    session_destroy();
                    if ($comando) {
                        $url = "index.php";
                        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
                    }
                } else {

                }

            }
            ?>
        </center>
    </section>

    <?php include ('footer.php'); ?>
</body>

</html>