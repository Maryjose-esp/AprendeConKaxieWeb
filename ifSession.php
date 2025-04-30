<?php


session_start();
$indicador_bd = false;

if (!isset($_SESSION['Usuario'])) {
    include('navbar.php');
    $indicador_bd = false;
} else {
    include('navbarSS.php');
    $indicador_bd = true;


}



function DatosPDF()
{
    $Nombre = "";
    $Apellido = "";

    require('conexionbd.php');
    $UserActual_Bool = $_SESSION['Usuario'];

    $sql = "SELECT NOMBRE, APELLIDO FROM usuario WHERE NUSUARIO = ?";
    $resultado = mysqli_prepare($conexion, $sql);
    $ejecutar = mysqli_stmt_bind_param($resultado, "s", $UserActual_Bool);
    $ejecutar = mysqli_stmt_execute($resultado);

    if ($ejecutar) {
        $ejecutar = mysqli_stmt_bind_result($resultado, $nomACT, $apellidoACT);
        while (mysqli_stmt_fetch($resultado)) {
            $Nombre = $nomACT;
            $Apellido = $apellidoACT;
        }
        mysqli_stmt_close($resultado);
        $DatosFinales = "$Nombre $Apellido - $UserActual_Bool";
        echo $DatosFinales;

    }
    // $consulta_estado_Eval = "SELECT * FROM usuario WHERE NUSUARIO = '$UserActual_Bool'";
    // $resultado_consulta_bool = mysqli_query($conexion, $consulta_estado_Eval) or die('nels');

    // while ($fila = mysqli_fetch_assoc($resultado_consulta_bool)) { //guarda el estado de contestacion de la evaluacion
    //     $Nombre = $fila['NOMBRE']; //guarda el estado
    //     $Apellido = $fila['APELLIDO'];

    // }


}

function DisplayR($NP)
{
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

        if ($auxiliar_Estado == 0) {
            echo '<script>const btnRA = document.getElementById("btnRetroAlem");btnRA.style.display = none;</script>';
        }
    }
}

function dialog_abrir($NumeroProgresion)
{
    require('conexionbd.php');
    $UserActual_Bool = $_SESSION['Usuario'];

    $sql = "SELECT evaluacion_Estado FROM progresion$NumeroProgresion WHERE nusuario = ?";
    $resultado = mysqli_prepare($conexion, $sql);
    $ejecutar = mysqli_stmt_bind_param($resultado, "s", $UserActual_Bool);
    $ejecutar = mysqli_stmt_execute($resultado);

    if ($ejecutar) {
        $ejecutar = mysqli_stmt_bind_result($resultado, $boolEstadoA);
        while (mysqli_stmt_fetch($resultado)) {
            $auxiliar_Estado = $boolEstadoA;
        }
        mysqli_stmt_close($resultado);

        if ($auxiliar_Estado == 0) {
            $dialogo = '<dialog class="dialog_aviso_Eval" id = "dialogp' . $NumeroProgresion . '">
        <img src="images/KaxieJusLap.png" width="40%">
        <div>
            <Center>
                <p id="espera_Aviso_dialog">Espera</p><br>
            </Center>
            <p>Antes de continuar y con la finalidad de llevar un registro sobre tus avances, es necesario que respondas
                una
                rapida encuesta
                diagnostico, no te preocupes, la ponderacion de esta es unicamente con fines comparativos.
            </p><br>
            <p>Cuando termines, podras acceder al contenido y repasar tus dudas.</p><br>
            <button class="ir_a_evaluacion_dialog"><a href="evaluacion' . $NumeroProgresion . '.php">Responder evaluacion</a></button>
            <button class="ir_a_evaluacion_dialog"><a href="index.php"><i class="fa-solid fa-house"></i></a></button>
        </div>
        </dialog>';

            echo $dialogo;

            echo "<script>
             var dialogo_Actual = document.querySelector('#dialogp" . $NumeroProgresion . "');
             dialogo_Actual.showModal();
            </script>";

        }

    }


    // $consulta_estado_Eval = "SELECT * FROM progresion$NumeroProgresion WHERE nusuario = '$UserActual_Bool'";
    // $resultado_consulta_bool = mysqli_query($conexion, $consulta_estado_Eval) or die('nels');



    // while ($fila = mysqli_fetch_assoc($resultado_consulta_bool)) { //guarda el estado de contestacion de la evaluacion
    //     $auxiliar_Estado = $fila['evaluacion_Estado']; //guarda el estado
    // }


}


?>