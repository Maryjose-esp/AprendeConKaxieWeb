<?php

$ProgresionActual = $_POST['NumberProgresion'];
$NumeroEjercicio = $_POST['NumberExercise'];
$tipoDato = $_POST['TipoDate'];
$epsilon = 0.8;
// CONVERSION STRING TO ARRAY 
$matriz = $_POST['Matriz'];
$nuevo_matriz = trim($matriz, '[ ]');
$arreglo_matriz = explode(",", $nuevo_matriz);

//JSON ME DA UNA CADENA DE TEXTO ASI QUE ESE STRING LO TENGO QUE CONVERTIR A ARRAY
$misrespuestas = $_POST['MisRespuestas'];
$nuevo_misrespues = trim($misrespuestas, '[ ]');
$arreglo_misrespuestas = explode(",", $nuevo_misrespues);
//echo $arreglo_misrespuestas[1];

$contador = 0;

$j = $_POST['Reactivos'];
for ($i = 0; $i < $j; $i++) {
    // echo "yo: $arreglo_misrespuestas[$i] la matriz: $arreglo_matriz[$i]";
    //echo $arreglo_misrespuestas[$i];
    //if(!(($arreglo_misrespuestas[$i]===null))){
    

    if($tipoDato == "s"){
      
        if($arreglo_misrespuestas[$i] == $arreglo_matriz[$i]){
            $contador++;
        }
    }else if($tipoDato == "n"){
        
        if ((abs($arreglo_misrespuestas[$i] - $arreglo_matriz[$i])) < $epsilon) {
            $contador++;
        }
    }
       
    //}else{
        
       //  $arreglo_misrespuestas[$i] = 0;
    //}

    
    
}
$contador;
$promedio = $contador / ($j / 10);
$kaxieimg = "";
if ($promedio < 6) {
    $kaxieimg = "reprobo.png";
} else if ($promedio >= 6 && $promedio <= 8) {
    $kaxieimg = "aceptable.png";
} else if ($promedio > 8 && $promedio <= 10) {
    $kaxieimg = "buenacalif.png";
}
// echo '<div class="Calificacion">';
session_start();

if (array_key_exists('Usuario',$_SESSION)) {
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

    // $actualizar = "UPDATE progresion$ProgresionActual SET $auxcampocalif = $promedio WHERE nusuario = '$usuario'";
    // $consulta = mysqli_query($conexion, $actualizar);
    // if ($consulta) {
    //     echo "sipi >:)";
    // } else {
    //     echo "no";
    // }
}
//echo $promedio;
echo '<div>';
echo '<img src="./images/' . $kaxieimg . '" height="200px">';
echo '</div>';
echo '<span>';
echo number_format($promedio, 2, ".", "");

echo '</span>';
echo '</div>';


?>