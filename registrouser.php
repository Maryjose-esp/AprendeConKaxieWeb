<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido!</title>
</head>

<body>
    <?php include('header.php') ?>

    <?php

    /*Obtener los valores para empezar a preparar la consulta*/
    $NomUser = $_POST['NomUsr'];
    $Contrasena = $_POST['Passw'];
    $Name = $_POST['Nombre'];
    $LastName = $_POST['Apellido'];
    require('conexionbd.php');
    // $conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
    // mysqli_select_db($conexion, $db_nombre) or die('NO SE ENCUENTRA LA BD');
    
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
        echo "LIsto, vete";
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




    //fotoperdefa.png
    
    ?>


    <?php include('footer.php') ?>
</body>

</html>