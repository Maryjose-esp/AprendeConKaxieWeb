<?php

// if ($_SESSION['Usuario']) {
session_start();
$calificacion = $_POST['calife'];
$numProgresionAc = $_POST['numprogresion'];

require('conexionbd.php');
// session_start();
$UserActual_Bool = $_SESSION['Usuario'];
$consulta_estado_Eval = "SELECT * FROM progresion$numProgresionAc WHERE nusuario = '$UserActual_Bool'";
$resultado_consulta_bool = mysqli_query($conexion, $consulta_estado_Eval) or die('nels');

$auxiliar_Estado = 0;

while ($fila = mysqli_fetch_assoc($resultado_consulta_bool)) { //guarda el estado de contestacion de la evaluacion
    $auxiliar_Estado = $fila['evaluacion_Estado']; //guarda el estado
}


if ($auxiliar_Estado) {// si es verdadero quiere decir que ya ha sido contestada la primera vez, por lo que se debe subir la calificacion de la evaluacion a la tabla eval2
    $consulta_insertar_calificacion_eval = "UPDATE evaluacion_2 SET e$numProgresionAc = $calificacion WHERE nusuario =
'$UserActual_Bool'";
} else { //si es falso la obligatoria no ha sido contestada, asi que es su primer intento por lo que se cambia el estado en la tabla de la progresion y su calificacions se sube a la tabla 1
    $consulta_insertar_calificacion_eval = "UPDATE evaluacion_1 SET e$numProgresionAc = $calificacion WHERE nusuario =
'$UserActual_Bool'";
    $actualizar_estatus_calif = "UPDATE progresion$numProgresionAc SET evaluacion_Estado = 1 WHERE nusuario =
'$UserActual_Bool'";
    $ejecutar_inserccionCal = mysqli_query($conexion, $actualizar_estatus_calif);

}
//echo $consulta_insertar_calificacion_eval;
$ejecutar_inserccionCal = mysqli_query($conexion, $consulta_insertar_calificacion_eval);

if ($ejecutar_inserccionCal) {
    echo "parece que ya :(";
} else {
    echo mysqli_error($conexion);
    echo "no se pudo";
}

?>