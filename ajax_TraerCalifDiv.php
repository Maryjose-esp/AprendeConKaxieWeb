

<?php
//obtener valores enviados con ajax
$NumeroE = $_POST['NumberExercise'];
$NumeroP = $_POST['NumberProgresion'];

//function TraerCalificacionPHP($NumeroP, $NumeroE){//parámetros string
    //require('ifSession.php');
    require('conexionbd.php');
    session_start();
     if(!isset($_SESSION['Usuario'])){
         $indicador_bd = false;
    }else{
        $indicador_bd = true;
    }

    if($indicador_bd){//si hay una sesión abierta, entonces puedo traer la calificación al ejercicio en caso de que haya sido respondido
        //session_start();
        $UsuarioActual = $_SESSION['Usuario'];
        $sql = "SELECT CalifE$NumeroE FROM progresion$NumeroP WHERE nusuario = ?";
        $resultado = mysqli_prepare($conexion, $sql);
        $ejecutar = mysqli_stmt_bind_param($resultado, "s", $UsuarioActual);
        $ejecutar = mysqli_stmt_execute($resultado);

        if($ejecutar){
            $ejecutar = mysqli_stmt_bind_result($resultado, $califAx);
                while (mysqli_stmt_fetch($resultado)) {
                    $Calificacion = $califAx;
                }
                mysqli_stmt_close($resultado);

                switch(true){
                    case ($Calificacion == 0):
                        $kaxieimg = false;
                        break;

                    case ($Calificacion < 6):
                        $kaxieimg = "reprobo.png";
                        break;

                    case ($Calificacion >= 6 && $Calificacion <= 8):
                        $kaxieimg = "aceptable.png";
                        break;

                    case ($Calificacion > 8 && $Calificacion <= 10):
                        $kaxieimg = "buenacalif.png";
                        break;
                }

                // if ($Calificacion < 6) {
                //     $kaxieimg = "reprobo.png";
                // } else if ($Calificacion >= 6 && $Calificacion <= 8) {
                //     $kaxieimg = "aceptable.png";
                // } else if ($Calificacion > 8 && $Calificacion <= 10) {
                //     $kaxieimg = "buenacalif.png";
                // }

                if($kaxieimg != false){
echo '<div><img src="./images/' . $kaxieimg . '" height="200px"></div><span>';
                echo number_format($Calificacion, 2, ".", "");
                echo '</span></div>';
                }

                


                //return $Calificacion;

        }
    }else {
        //si no hay sesión no puede jalar nada
    }
//}
?>

<!-- <script>
$("#p" + numprogresion.toString() + "e" + numejercicio.toString() + "img").html(response);
const divCalif = "p" + NumeroP.toString() + "e" + NumeroE.toString() + "img";
$(divCalif).html()
</script> -->