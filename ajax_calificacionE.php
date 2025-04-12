<?php
session_start();
$ProgresionActual = $_POST['NumberProgresion'];
$NumeroEjercicio = $_POST['NumberExercise'];

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
    if ($arreglo_misrespuestas[$i] == $arreglo_matriz[$i]) {
        $contador++;
    }
}
$contador;
$promedio = $contador / ($j / 10);
$kaxieimg = "";
if ($promedio <= 6) {
    $kaxieimg = "reprobo.png";
} else if ($promedio > 6 && $promedio <= 8) {
    $kaxieimg = "aceptable.png";
} else if ($promedio > 8 && $promedio <= 10) {
    $kaxieimg = "buenacalif.png";
}
// echo '<div class="Calificacion">';

if ($_SESSION['Usuario']) {
    require('conexionbd.php');
    $usuario = $_SESSION['Usuario'];

    $auxcampocalif = 'CalifE' . $NumeroEjercicio;
    $actualizar = "UPDATE progresion$ProgresionActual SET $auxcampocalif = $promedio WHERE nusuario = '$usuario'";
    $consulta = mysqli_query($conexion, $actualizar);
    // if ($consulta) {
    //     echo "sipi >:)";
    // } else {
    //     echo "no";
    // }
}
echo '<div>';
echo '<img src="./images/' . $kaxieimg . '" height="200px">';
echo '</div>';
echo '<span>';
echo number_format($promedio, 2, ".", "");

echo '</span>';
echo '</div>';


?>