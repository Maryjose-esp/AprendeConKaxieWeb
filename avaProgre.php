<?php 
if (isset($_SESSION['Usuario'])) {
    require('conexionbd.php');
    $usuario = $_SESSION['Usuario'];
    $p= "p".$num."avance";
    $progresion="progresion".$num;

    $conexion=mysqli_connect($db_host, $db_usuario, $db_contrasena, $db_nombre);
    mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la base de datos");
    mysqli_set_charset($conexion,"utf8");

    $sql= "SELECT $p FROM $progresion WHERE nusuario=?";
    $resultado=mysqli_prepare($conexion,$sql);
    
    $ok= mysqli_stmt_bind_param($resultado,"s",$usuario);
    $ok= mysqli_stmt_execute($resultado);
    
    if ($ok==false){
        
        echo "Error al ejecutar consulta";
    } else {
        $ok=mysqli_stmt_bind_result($resultado,$progre);
        while (mysqli_stmt_fetch($resultado)){
            echo $progre;
        }
    }
    mysqli_stmt_close($resultado);
}
?>