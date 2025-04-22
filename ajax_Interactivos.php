<?php

$NumeroEjercicio = $_POST['NumberExercise'];
$ProgresionActual = $_POST['NumberProgresion'];
$promedio = $_POST['Calif'];

session_start();

require('conexionbd.php');
    
    $usuario = $_SESSION['Usuario'];

    $auxcampocalif = 'CalifE' . $NumeroEjercicio;
    $sql = "UPDATE progresion$ProgresionActual SET $auxcampocalif = ? WHERE nusuario = ?";
    $resultado = mysqli_prepare($conexion, $sql);
    $ejecutar = mysqli_stmt_bind_param($resultado, 'ds', $promedio, $usuario);
    $ejecutar = mysqli_stmt_execute($resultado);
    if($ejecutar){
        mysqli_stmt_close($resultado);
    }