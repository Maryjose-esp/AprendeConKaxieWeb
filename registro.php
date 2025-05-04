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
    include('ifSession.php');?>
    <?php 
    require ('conexionbd.php');
    // $conexion = mysqli_connect($db_host, $db_usuario, $db_contrasena, $db_nombre);
    // mysqli_select_db($conexion, $db_nombre) or die('NO SE ENCUENTRA LA BD');
    mysqli_set_charset($conexion, "utf8");

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $NomUser = $_POST['NomUsr'];
    $Contrasena = $_POST['Passw'];
    $Name = $_POST['Nombre'];
    $LastName = $_POST['Apellido'];
    
    $select= "SELECT NUSUARIO FROM usuario";
    $usuariosEx= mysqli_query($conexion, $select);
    
    $arreglo= array();

    while ($row = mysqli_fetch_array($usuariosEx)){
        $arreglo[]=$row['NUSUARIO'];
    }

    if (in_array ($NomUser,$arreglo)){

        echo '<script>';
                echo 'document.addEventListener("DOMContentLoaded", function() {';
                echo '    var dialog = document.getElementById("registro-dialog");';
                echo '    var closeButton = dialog.querySelector(".d-boton");';
                echo '    closeButton.addEventListener("click", function() {';
                echo '        dialog.close();';
                echo '    });';
                echo '    dialog.showModal();';
                echo '});';
                echo '</script>';

    } else{

    //Sentencia normal SQL - Primero vamos a insertar en la tabla de usuarios
    $comando = "INSERT INTO usuario (NUSUARIO, CONTRASENA, NOMBRE, APELLIDO) VALUES (?,?,?,?)";
    
    //Preparar la consulta
    $preparar = mysqli_prepare($conexion, $comando);

    //Unir los parametros de la sentencia
    $insercion = mysqli_stmt_bind_param($preparar, "ssss", $NomUser, $Contrasena, $Name, $LastName);

    //Ejecutar la consulta
    $insercion = mysqli_stmt_execute($preparar);
    /*Asociar las variables al resultado de la consulta
    y evaluar si nuestra ejecucion devolvio un true o false*/
    
    if ($insercion == false) {
        echo "OCURRIO UN ERROR";
    } else {
        echo "Listo, vete";
        mysqli_stmt_close($preparar); //cierra la senntencia preparada que ya fue ejecutada
    
        //Al tener una insercion exitosa, entonces se procede a insertar en las otras tablas
        //Son 14 progresiones, entonces, se inserta en las 14
        for ($i = 1; $i <= 14; $i++) {

            $comando = "INSERT INTO progresion$i (nusuario) VALUES (?)";
            $preparar = mysqli_prepare($conexion, $comando);
            $insercion = mysqli_stmt_bind_param($preparar, "s", $NomUser);
            $insercion = mysqli_stmt_execute($preparar);
            if ($insercion == false) {
                echo "error en las progresiones";
            }

            //Insertar en las tablas de evaluaciones
            if ($i <= 2) {
                $comando = "INSERT INTO evaluacion_$i (nusuario) VALUES (?)";
                $preparar = mysqli_prepare($conexion, $comando);
                $insercion = mysqli_stmt_bind_param($preparar, "s", $NomUser);
                $insercion = mysqli_stmt_execute($preparar);
                if ($insercion == false) {
                    echo "error en las evaluaciones";
                }
            }

        }

        //insertar en la tabla avances
        $comando = "INSERT INTO avances (nusuario) VALUES (?)";
        $preparar = mysqli_prepare($conexion, $comando);
        $insercion = mysqli_stmt_bind_param($preparar, "s", $NomUser);
        $insercion = mysqli_stmt_execute($preparar);
        if ($insercion == false) {
            echo "error en la tabla de avances";
        }

        // if (isset($_POST['Mantener'])) {
        //     $sessionTime = 365 * 24 * 60 * 60; // 1 año de duración
        //     session_set_cookie_params($sessionTime);
        //     session_start();
        // }
    
        session_start();
        $_SESSION['Usuario'] = $_POST['NomUsr'];
        header("location:index.php");


    }

    }
    }

    //fotoperdefa.png
    ?>

<dialog id="registro-dialog" class="container2">
<p>Usuario ya existente, favor de cambiarlo.</p>
<input type="button" class="d-boton" value="Cerrar">
</dialog>

    <section style=" margin-top:30px;">
        <div class="formulario2">

            <h3 class="adaptar_noblock">Registrarse</h3><br>

            <img src="./images/KaxieCreausr.png" class="imgKaxr">
            <form name=registro action="" method="POST">

                <div id="contin2">

                    <div class="inputcamp">
                        <Input type="text" id="Nombre" name="Nombre" placeholder="Nombre" required><br>
                        <label id="ValNom"></label>
                    </div>

                    <div class="inputcamp">
                        <Input type="text" id="Apellido" name="Apellido" placeholder="Apellido" required> <br>
                        <label id="ValApe"></label>
                    </div>

                    <div class="inputcamp">
                        <Input type="text" name="NomUsr" placeholder="Nombre de usuario" required><br>
                        <label id="UsuarioName"></label>
                    </div>

                    <div class="inputcamp">
                        <Input type="password" name="Passw" id="Passw" placeholder="Contrasena" minlength=8 required>
                        <img src="/images/close.png" id="eyeicon" onclick="cambioOjoK(document.registro.eyeicon, document.registro.Passw)"> <br>
                        <label id="ValCon"></label>
                         
                    </div><br><br>
                    
                    <div class="recuerdame">
                        <Input class="recuerdame" type="checkbox" name="Mantener" id="SesionM"><label
                            for="SesionM">Mantener inicio de sesion</label>
                    </div>
                    
                    <p class="new">¿Ya tienes una cuenta? <a href="sesion.php">Da click aqui para iniciar sesion</a>
                    </p><br><br>
                    <input type="submit" id="registra" name="iniciaS" value="Registrarse" class="btn" disabled=true>
                    
                </div>






            </form>
            <script src="js/ValidarUsrC.js"></script>
            <div>

    </section>
    <?php
    include('footer.php');
    ?>

<script>
    var dialog = document.getElementById('registro-dialog');
    var closeButton = dialog.querySelector('.d-boton');
    closeButton.addEventListener('click', function () {
        dialog.close();
    });
</script>
</body>

</html>