<?php

// if ($_SESSION['Usuario']) {
session_start();
$calificacion = $_POST['calife'];
$numProgresionAc = $_POST['numprogresion'];

require('conexionbd.php');
// session_start();
$UserActual_Bool = $_SESSION['Usuario'];
$auxiliar_Estado = 0;
$sql = "SELECT evaluacion_Estado FROM progresion$numProgresionAc WHERE nusuario = ?";
$resultado = mysqli_prepare($conexion, $sql);
$ejecutar = mysqli_stmt_bind_param($resultado, "s", $UserActual_Bool);
$ejecutar = mysqli_stmt_execute($resultado);

if($ejecutar){
    $ejecutar =  mysqli_stmt_bind_result($resultado, $boolE);
    while(mysqli_stmt_fetch($resultado)){
        $auxiliar_Estado = $boolE;
    }
    mysqli_stmt_close($resultado);
    //echo $auxiliar_Estado;
}

/*$consulta_estado_Eval = "SELECT * FROM progresion$numProgresionAc WHERE nusuario = '$UserActual_Bool'";
$resultado_consulta_bool = mysqli_query($conexion, $consulta_estado_Eval) or die('nels');



while ($fila = mysqli_fetch_assoc($resultado_consulta_bool)) { //guarda el estado de contestacion de la evaluacion
    $auxiliar_Estado = $fila['evaluacion_Estado']; //guarda el estado
}*/


if ($auxiliar_Estado) {// si es verdadero quiere decir que ya ha sido contestada la primera vez, por lo que se debe subir la calificacion de la evaluacion a la tabla eval2
    $sql = "UPDATE evaluacion_2 SET e$numProgresionAc = ? WHERE NUSUARIO = ?";
   
    // $resultado = mysqli_prepare($conexion, $sql);
    // $ejecutar = mysqli_stmt_bind_param($resultado, "ds", $calificacion, $UserActual_Bool);
    // $ejecutar = mysqli_stmt_execute($resultado);
    // if($ejecutar){
    //     mysqli_stmt_close($resultado);
    // }
    
    
//     $consulta_insertar_calificacion_eval = "UPDATE evaluacion_2 SET e$numProgresionAc = $calificacion WHERE nusuario =
// '$UserActual_Bool'";
} else { //si es falso la obligatoria no ha sido contestada, asi que es su primer intento por lo que se cambia el estado en la tabla de la progresion y su calificacions se sube a la tabla 1
    $sql = "UPDATE evaluacion_1 SET e$numProgresionAc = ? WHERE NUSUARIO = ?";

    
//     $consulta_insertar_calificacion_eval = "UPDATE evaluacion_1 SET e$numProgresionAc = $calificacion WHERE nusuario =
// '$UserActual_Bool'";


    $sql2 = "UPDATE progresion$numProgresionAc SET evaluacion_Estado = ? WHERE NUSUARIO = ?";
    $resultado = mysqli_prepare($conexion, $sql2);
    $bolean = 1;
    $ejecutar = mysqli_stmt_bind_param($resultado, "is", $bolean, $UserActual_Bool);
    $ejecutar = mysqli_stmt_execute($resultado);
    if($ejecutar){
        mysqli_stmt_close($resultado);
    }

//     $actualizar_estatus_calif = "UPDATE progresion$numProgresionAc SET evaluacion_Estado = 1 WHERE nusuario =
// '$UserActual_Bool'";
//     $ejecutar_inserccionCal = mysqli_query($conexion, $actualizar_estatus_calif);

}
//echo $consulta_insertar_calificacion_eval;
//$ejecutar_inserccionCal = mysqli_query($conexion, $consulta_insertar_calificacion_eval);

$resultado = mysqli_prepare($conexion, $sql);
$ejecutar = mysqli_stmt_bind_param($resultado, "ds", $calificacion, $UserActual_Bool);
$ejecutar = mysqli_stmt_execute($resultado);
if($ejecutar){
    mysqli_stmt_close($resultado);
}
    
// if ($ejecutar_inserccionCal) {
//     echo "parece que ya :(";
// } else {
//     echo mysqli_error($conexion);
//     echo "no se pudo";
// }

?>