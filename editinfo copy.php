<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel= "icon" href="images/logo.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <title>Editar Perfil</title>
</head>
<?php
require('conexionbd.php');
session_start();

if (!isset($_SESSION['Usuario'])) {
    header("Location: index.php");
    exit();
} else {
    include('navbarSS.php');
}

$usuarioK = $_SESSION['Usuario'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nusuario = $_POST['NUSUARIO'];
    $contrasena = $_POST['CONTRASENA'];
    $nombre = $_POST['NOMBRE'];
    $apellido = $_POST['APELLIDO'];

    $consulta = "SELECT contrasena FROM usuario WHERE NUSUARIO = '$usuarioK'";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        $usuario = mysqli_fetch_assoc($resultado);

        if ($contrasena === $usuario['contrasena']) { //comprobar contraseña
            $actualizar = "UPDATE usuario SET NUSUARIO = '$nusuario', NOMBRE = '$nombre', APELLIDO = '$apellido' WHERE NUSUARIO = '$usuarioK'";
            $resultado_actualizacion = mysqli_query($conexion, $actualizar);

            if ($resultado_actualizacion) {
                
                echo '<script>';
                echo 'document.addEventListener("DOMContentLoaded", function() {';
                echo '    var dialog = document.getElementById("update-dialog");';
                echo '    var closeButton = dialog.querySelector(".d-boton");';
                echo '    closeButton.addEventListener("click", function() {';
                echo '        dialog.close();';
                echo '        window.location.href = "index.php";';
                echo '    });';
                echo '    dialog.showModal();';
                echo '});';
                echo '</script>';
                
                // se actualiza la variable de sesión
                $_SESSION['Usuario'] = $nusuario;
            } else {
                echo "<section class=\"actualizar\">";
                echo "<p>Error al actualizar los datos: " . mysqli_error($conexion) . "</p>";
                echo "</section>";
            }
        } else {
            echo "<section class=\"actualizar\">";
            echo "<p>Contraseña incorrecta.</p>";
            echo "</section>";
        }
    } else {
        echo "<section class=\"actualizar\">";
        echo "<p>No se encontró el usuario en la base de datos.</p>";
        echo "</section>";
    }
}

$consulta = "SELECT * FROM usuario WHERE NUSUARIO = '$usuarioK'";
$resultado = mysqli_query($conexion, $consulta);

if ($resultado) {
    if (mysqli_num_rows($resultado) > 0) {
        $usuario = mysqli_fetch_assoc($resultado);
    } //else {
    //     echo "<section class=\"actualizar\">";
    //     echo "<p>No se encontraron datos del usuario.</p>";
    //     echo "</section>";
    // }
} else {
    echo "<section class=\"actualizar\">";
    echo "<p>Error al consultar la base de datos: " . mysqli_error($conexion) . "</p>";
    echo "</section>";
}

mysqli_close($conexion);
?>



<body>

<dialog id="update-dialog" class="container2">
    <p>Datos actualizados correctamente.</p>
    <input type="button" class="d-boton" value="Cerrar">
</dialog>

<section class="actualizar">
    <center>
        <h1>Editar información</h1>
        <h4>Confirma tu contraseña para poder editar tu cuenta.</h4>
        <form action="" method="POST">
            <div class="inputcamp"><input type="text" id="NUSUARIO" name="NUSUARIO" placeholder="Nombre de usuario" required></div><br>
            <div class="inputcamp"><input type="text" id="NOMBRE" name="NOMBRE" placeholder="Nombre" required></div><br>
            <div class="inputcamp"><input type="text" id="APELLIDO" name="APELLIDO" placeholder="Apellido" required></div><br>
            <div class="inputcamp"><input type="password" id="CONTRASENA" name="CONTRASENA" placeholder="Contraseña actual" required></div><br>
            <input type="submit" value="Guardar Cambios" name="guardae" class="btn"><br>
        </form>
    </center>
</section>

<?php include('footer.php'); ?>

<script>
    var dialog = document.getElementById('update-dialog');
    var closeButton = dialog.querySelector('.d-boton');
    closeButton.addEventListener('click', function () {
        dialog.close();
        window.location.href = 'index.php';
    });
</script>

</body>
</html>