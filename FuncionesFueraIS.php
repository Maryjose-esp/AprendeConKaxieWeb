<?php

    $NP = $_POST['numP'];

    require('conexionbd.php');
    $UserActual_Bool = $_SESSION['Usuario'];

    $sql = "SELECT evaluacion_Estado FROM progresion$NP WHERE nusuario = ?";
    $resultado = mysqli_prepare($conexion, $sql);
    $ejecutar = mysqli_stmt_bind_param($resultado, "s", $UserActual_Bool);
    $ejecutar = mysqli_stmt_execute($resultado);

    if ($ejecutar) {
        $ejecutar = mysqli_stmt_bind_result($resultado, $boolEstadoA);
        while (mysqli_stmt_fetch($resultado)) {
            $auxiliar_Estado = $boolEstadoA;
        }
        mysqli_stmt_close($resultado);

        echo $auxiliar_Estado;
    }
