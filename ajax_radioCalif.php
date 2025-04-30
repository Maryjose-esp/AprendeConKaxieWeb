<?php

$contadorRdb = $_POST["AciertosTotales"];
$NumeroPro = $_POST["ProgresionA"];
$CantidadReactivos = $_POST["CantidadEjer"];
$NumeroEj = $_POST["EjercicioA"];

$promedio = $contadorRdb / ($CantidadReactivos / 10);
$kaxieimg = "";

switch (true){
    case ($promedio < 6):
        $kaxieimg = "reprobo.png";
        break;
    case ($promedio >= 6 && $promedio <= 8):
        $kaxieimg = "aceptable.png";
        break;
    case ($promedio > 8 && $promedio <= 10):
        $kaxieimg = "buenacalif.png";
        break;
}

session_start();

if (array_key_exists('Usuario',$_SESSION)) {
    require('conexionbd.php');
    
    $usuario = $_SESSION['Usuario'];

    $auxcampocalif = 'CalifE' . $NumeroEj;
    $sql = "UPDATE progresion$NumeroPro SET $auxcampocalif = ? WHERE nusuario = ?";
    $resultado = mysqli_prepare($conexion, $sql);
    $ejecutar = mysqli_stmt_bind_param($resultado, 'ds', $promedio, $usuario);
    $ejecutar = mysqli_stmt_execute($resultado);
    if($ejecutar){
        mysqli_stmt_close($resultado);
    }

}

echo '<div><img src="./images/' . $kaxieimg . '" height="200px"></div><span>';
echo number_format($promedio, 2, ".", "");
echo '</span></div>';

?>