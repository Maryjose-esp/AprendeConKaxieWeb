<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido!</title>
</head>

<body>
    <?php include ('header.php') ?>

    <?php

    require ('conexionbd.php');
    $conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
    mysqli_select_db($conexion, $db_nombre) or die('NO SE ENCUENTRA LA BD');
    mysqli_set_charset($conexion, "utf8");

    $NomUser = $_GET['NomUsr'];
    $Contrasena = $_GET['Passw'];
    $Name = $_GET['Nombre'];
    $LastName = $_GET['Apellido'];
    


    $comando = "INSERT INTO usuario (NUSUARIO, CONTRASENA, NOMBRE, APELLIDO, FOTOPER) VALUES ('$NomUser', '$Contrasena', '$Name', '$LastName', 'fotoperdefa.png')";
    $insercion = mysqli_query($conexion, $comando);

    if ($insercion) {
        for ($i = 1; $i <= 14; $i++) {
            $comando2 = "INSERT INTO progresion$i (nusuario) VALUES ('$NomUser')";
            $insercion = mysqli_query($conexion, $comando2);
        }
        $comando2 = "INSERT INTO avances (nusuario) VALUES ('$NomUser')";
        $insercion = mysqli_query($conexion, $comando2);
        if(isset($_GET['Mantener'])){
            $sessionTime = 365 * 24 * 60 * 60; // 1 año de duración
            session_set_cookie_params($sessionTime);
            session_start();
        }
            session_start();
        $_SESSION['Usuario'] = $_GET['NomUsr'];
        header("location:index.php");
        
        

    } else {
        header("location:registro.php");
    }
    ?>


    <?php include ('footer.php') ?>
</body>

</html>