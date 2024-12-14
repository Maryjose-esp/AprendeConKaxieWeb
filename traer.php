<?php
function traer($np, $ne, $cr){
    require('conexionbd.php');
    $us = $_SESSION['Usuario'];
    $array = [];
    for($i = 0; $i < $cr; $i++){
        $nax = "p".$np."e".$ne."txt".($i+1);
        $comando = "SELECT $nax from progresion$np WHERE nusuario = '$us'";
        $consulta = mysqli_query($conexion, $comando);
        if($row = $consulta->fetch_assoc()){
            $array[$i] = $row[$nax];
            
        } 
        
        
    }
    return $array;
}