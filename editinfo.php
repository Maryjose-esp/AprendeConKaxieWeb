<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" type="text/css" href="css/style4.css">

    <link rel="stylesheet" href="css/style5.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="images/logo.ico" type="image/x-icon">
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
    // exit();

} else {
    include('navbarSS.php');
    $useractual = $_SESSION['Usuario'];
    $sql = "SELECT * FROM usuario WHERE NUSUARIO = ?";
    $resultado = mysqli_prepare($conexion, $sql);
    $ejecutar = mysqli_stmt_bind_param($resultado, "s", $useractual);
    $ejecutar = mysqli_stmt_execute($resultado);


    if ($ejecutar == false) {
        echo "Algo salió mal";
    } else {
        $ejecutar = mysqli_stmt_bind_result($resultado, $useractual, $PasAct, $nombreAct, $apellidoAct, $fotoAct);
        while (mysqli_stmt_fetch($resultado)) {
            $useractual = $useractual;
            $PasAct = $PasAct;
            $nombreAct = $nombreAct;
            $apellidoAct = $apellidoAct;
        }

    }


    mysqli_stmt_close($resultado);

    if (isset($_POST['guardae'])) {
        $nusuario = $_POST['NUSUARIO'];
        $contrasena = $_POST['CONTRASENA'];
        $nombre = $_POST['NOMBRE'];
        $apellido = $_POST['APELLIDO'];

        $sql = "SELECT CONTRASENA FROM usuario WHERE NUSUARIO = ?";
        $resultado = mysqli_prepare($conexion, $sql);
        $ejecutar = mysqli_stmt_bind_param($resultado, "s", $useractual);
        $ejecutar = mysqli_stmt_execute($resultado);

        if ($ejecutar == false) {
            echo "Sucedió un error";
        } else {
            $ejecutar = mysqli_stmt_bind_result($resultado, $PasAct);
            while (mysqli_stmt_fetch($resultado)) {
                $PaswC = $PasAct;
            }
            mysqli_stmt_close($resultado);

            if($PaswC === $contrasena){
                $sql = "UPDATE usuario SET NUSUARIO = ?, NOMBRE = ?, APELLIDO = ? WHERE NUSUARIO = ?";
            $resultado = mysqli_prepare($conexion, $sql);
            $ejecutar = mysqli_stmt_bind_param($resultado, "ssss", $nusuario, $nombre, $apellido, $useractual);
            $ejecutar = mysqli_stmt_execute($resultado);
            if ($ejecutar == false) {
                echo "Algo salio mal";
            } else {
                $_SESSION['Usuario'] = $nusuario;
                mysqli_stmt_close($resultado);
                echo '
                <dialog id="dialogp" class="dialogos_check">
        <img src="images/iconoCorrecto.png" id="checkingd" width="100px" height="100px" />
        <center>
            Los datos han sido actualizados de manera correcta. <br /><br />
        </center>
        <button id="irPagini" class="ir_a_evaluacion_dialog" onclick="irIndex()">
            De acuerdo
        </button>
    </dialog>
    <script>
        var dialogo_Actual = document.querySelector("#dialogp");
        dialogo_Actual.showModal();
    </script>
                ';
                echo '<script>
                function irIndex(){window.location.href = "index.php";}
        var dialogo_Actual = document.querySelector("#dialogp");
        dialogo_Actual.showModal();
    </script>';
                mysqli_close($conexion);

                //header('location:index.php');
            }
            }else{
                //cuando la contraseña no coincide
                echo '<dialog id="dialogno" class="dialogos_check">
        <img src="images/iconoIncorrecto.png" id="incheck" width="100px" height="100px" />
        <center>
            La contraseña escrita no coincide con la asociada a esta cuenta. Por favor, verifica y vuelve a intentarlo.<br /><br />
        </center>
        <button id="irPagini" class="ir_a_evaluacion_dialog" onclick= "cerrarVent();">
            De acuerdo
        </button>
    </dialog>
    <script>
        var dialogo_Actual = document.querySelector("#dialogno");
        dialogo_Actual.showModal();

        function cerrarVent(){
            dialogo_Actual.close();
        }
    </script>';
    
    mysqli_close($conexion);

            }


            
            


        }


    }


}

// $usuarioK = $_SESSION['Usuario'];

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {


//     $consulta = "SELECT contrasena FROM usuario WHERE NUSUARIO = '$usuarioK'";
//     $resultado = mysqli_query($conexion, $consulta);

//     if ($resultado) {
//         $usuario = mysqli_fetch_assoc($resultado);

//         if ($contrasena === $usuario['contrasena']) { //comprobar contraseña
//             $actualizar = "UPDATE usuario SET NUSUARIO = '$nusuario', NOMBRE = '$nombre', APELLIDO = '$apellido' WHERE NUSUARIO = '$usuarioK'";
//             $resultado_actualizacion = mysqli_query($conexion, $actualizar);

//             if ($resultado_actualizacion) {

//                 echo '<script>';
//                 echo 'document.addEventListener("DOMContentLoaded", function() {';
//                 echo '    var dialog = document.getElementById("update-dialog");';
//                 echo '    var closeButton = dialog.querySelector(".d-boton");';
//                 echo '    closeButton.addEventListener("click", function() {';
//                 echo '        dialog.close();';
//                 echo '        window.location.href = "index.php";';
//                 echo '    });';
//                 echo '    dialog.showModal();';
//                 echo '});';
//                 echo '</script>';

//                 // se actualiza la variable de sesión
//                 $_SESSION['Usuario'] = $nusuario;
//             } else {
//                 echo "<section class=\"actualizar\">";
//                 echo "<p>Error al actualizar los datos: " . mysqli_error($conexion) . "</p>";
//                 echo "</section>";
//             }
//         } else {
//             echo "<section class=\"actualizar\">";
//             echo "<p>Contraseña incorrecta.</p>";
//             echo "</section>";
//         }
//     } else {
//         echo "<section class=\"actualizar\">";
//         echo "<p>No se encontró el usuario en la base de datos.</p>";
//         echo "</section>";
//     }
// }

// $consulta = "SELECT * FROM usuario WHERE NUSUARIO = '$usuarioK'";
// $resultado = mysqli_query($conexion, $consulta);

// if ($resultado) {
//     if (mysqli_num_rows($resultado) > 0) {
//         $usuario = mysqli_fetch_assoc($resultado);
//     } //else {
//     //     echo "<section class=\"actualizar\">";
//     //     echo "<p>No se encontraron datos del usuario.</p>";
//     //     echo "</section>";
//     // }
// } else {
//     echo "<section class=\"actualizar\">";
//     echo "<p>Error al consultar la base de datos: " . mysqli_error($conexion) . "</p>";
//     echo "</section>";
// }

// mysqli_close($conexion);
?>



<body>

    <dialog id="update-dialog" class="container2">
        <p>Datos actualizados correctamente.</p>
        <input type="button" class="d-boton" value="Cerrar">
    </dialog>

    <section class="actualizar">
        <center>
            <h1>Editar información</h1>
            <img src="images/KaxieLap.png" width="140px"
            <h4>Confirma tu contraseña para poder editar tu cuenta.</h4>
            <form name="editinfo" action="" method="POST">
                <div class="inputcamp"><input type="text" id="NUSUARIO" name="NUSUARIO" value=<?php echo $useractual; ?>
                        required></div><br>
                <div class="inputcamp"><input type="text" id="NOMBRE" name="NOMBRE" value=<?php echo $nombreAct; ?>
                        required></div><br>
                <div class="inputcamp"><input type="text" id="APELLIDO" name="APELLIDO" value=<?php echo $apellidoAct; ?>
                        required></div><br>
                <div class="inputcamp"><input type="password" id="CONTRASENA" name="CONTRASENA"
                        placeholder="Confirma tu contraseña" required>
                        <img src="images/close.png" id="eyeicon" onclick="cambioOjoK(document.editinfo.eyeicon, document.editinfo.CONTRASENA)"></div><br><br><br>
                <input type="submit" value="Guardar Cambios" name="guardae" class="btn"><br>
                <script src="js/ValidarUsrC.js"></script>
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