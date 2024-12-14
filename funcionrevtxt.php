<?php

function Caso1txt(array $respuestas, $numEjercicio, $NumProgresion)
{
    $contador = 0;
    $j = count($respuestas);
    $j /= 2;
    $a = 1;
    $k = 0;
    for ($i = 0; $i < $j; $i++) {
        $m = 1;
        $valortxt = $_POST['p'.$NumProgresion.'e' . $numEjercicio . 'txt' . $a . '_' . $m];
        if ($valortxt == $respuestas[$k]) {
            $contador++;
        }
        $m++;
        $valortxt = $_POST['p'.$NumProgresion.'e' . $numEjercicio . 'txt' . $a . '_' . $m];
        if ($valortxt == $respuestas[$k + 1]) {
            $contador++;
        }
        $a++;
        $k += 2;
    }

    $contador;
    $j = count($respuestas);
    $promedio = $contador / ($j / 10);
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
    if(isset($_SESSION['Usuario'])){
        require('conexionbd.php');
            $usuario = $_SESSION['Usuario'];    
            $j = count($respuestas);
            $j /= 2;  
            for($i = 1; $i<=$j; $i++){
                $m= 1;
                $respuesta = $_POST['p'.$NumProgresion.'e'.$numEjercicio.'txt'.$i.'_'.$m]; //Almacena el value del radio seleccionado
                $auxcampo = "p".$NumProgresion."e".$numEjercicio."txt".$i.'_'.$m; //concatena los parametros para acceder al campo
                $insertar = "UPDATE progresion$NumProgresion SET $auxcampo = '$respuesta' WHERE nusuario = '$usuario'";
                $consulta = mysqli_query($conexion, $insertar);
                $m++;
                $respuesta = $_POST['p'.$NumProgresion.'e'.$numEjercicio.'txt'.$i.'_'.$m]; //Almacena el value del radio seleccionado
                $auxcampo = "p".$NumProgresion."e".$numEjercicio."txt".$i.'_'.$m; //concatena los parametros para acceder al campo
                $insertar = "UPDATE progresion$NumProgresion SET $auxcampo = '$respuesta' WHERE nusuario = '$usuario'";
                $consulta = mysqli_query($conexion, $insertar);
        }
    }
    
}

function Caso2txt(array $respuestas, $numEjercicio, $NumProgresion, $tipdato ){
    $contador = 0;
    $j = count($respuestas);
    for($i = 0; $i<$j; $i++){
        $valortxt = $_POST['p'.$NumProgresion.'e'.$numEjercicio.'txt'.($i+1)];
        if($valortxt == $respuestas[$i]){
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

    echo '<div class="Calificacion">';
    echo '<div>';
    echo '<img src="./images/' . $kaxieimg . '" height="200px">';
    echo '</div>';
    echo '<span>';
    echo number_format($promedio,2,".","");;
    echo '</span>';
    echo '</div>';
    if(isset($_SESSION['Usuario'])){
        require('conexionbd.php');
            $usuario = $_SESSION['Usuario'];   
            $j = count($respuestas);   
            for($i = 1; $i<=$j ; $i++){
                $respuesta = $_POST['p'.$NumProgresion.'e'.$numEjercicio.'txt'.$i]; //Almacena el value del radio seleccionado
                $auxcampo = "p".$NumProgresion."e".$numEjercicio."txt".$i; //concatena los parametros para acceder al campo
                if($tipdato=='decimal'){
                    $respuesta = floatval($respuesta);
                    $insertar = "UPDATE progresion$NumProgresion SET $auxcampo = $respuesta WHERE nusuario = '$usuario'";
                    
                } else if($tipdato=='varchar'){
                    $insertar = "UPDATE progresion$NumProgresion SET $auxcampo = '$respuesta' WHERE nusuario = '$usuario' ";
                    
                }
                $consulta = mysqli_query($conexion, $insertar);
        }
        $auxcampocalif = "CalifE" . $numEjercicio;
        $insertar = "UPDATE progresion$NumProgresion SET $auxcampocalif = $promedio WHERE nusuario = '$usuario'";
        $consulta = mysqli_query($conexion, $insertar);
    }
    

}

