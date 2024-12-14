<?php
function RevisarRadios($NumReactivos, $NumEjer, $NumProgresion)
{//ANADIR NUM PROGRESION 
    $contador = 0;
    for ($i = 1; $i <= $NumReactivos; $i++) {
        $respuesta = $_POST['p' . $NumProgresion . 'e' . $NumEjer . 'r' . $i];
        if ($respuesta == "1") {
            $contador++;
        }
    }
    $contador;
    $promedio = $contador / ($NumReactivos / 10);
    $kaxieimg = "";
    if ($promedio <= 6) {
        $kaxieimg = "reprobo.png";

    } else if ($promedio > 6 && $promedio <= 8) {
        $kaxieimg = "aceptable.png";

    } else if ($promedio > 8 && $promedio <= 10) {
        $kaxieimg = "buenacalif.png";

    }

    echo '<div class="Calificacion">';
    echo '<div>';
    echo '<img src="./images/' . $kaxieimg . '" height="200px">';
    echo '</div>';
    echo '<span>';
    echo number_format($promedio,2,".","");;
    echo '</span>';
    echo '</div>';
    if (isset($_SESSION['Usuario'])) {
        require ('conexionbd.php');
        $usuario = $_SESSION['Usuario'];
        for ($i = 1; $i <= $NumReactivos; $i++) {
            $respuesta = $_POST['p' . $NumProgresion . 'e' . $NumEjer . 'r' . $i]; //Almacena el value del radio seleccionado
            $auxcampo = "p" . $NumProgresion . "e" . $NumEjer . "r" . $i; //concatena los parametros para acceder al campo
            $insertar = "UPDATE progresion$NumProgresion SET $auxcampo = '$respuesta' WHERE nusuario = '$usuario'";
            $consulta = mysqli_query($conexion, $insertar);
        }

        $auxcampocalif = "CalifE" . $NumEjer;
        $insertar = "UPDATE progresion$NumProgresion SET $auxcampocalif = $promedio WHERE nusuario = '$usuario'";
        $consulta = mysqli_query($conexion, $insertar);
    }
}

