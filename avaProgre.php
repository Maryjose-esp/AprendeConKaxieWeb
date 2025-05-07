<?php if (isset($_SESSION['Usuario'])) { //evalua si hay un usuario existente en caso de existir empezarán a ejecutarse una serie de acciones para traer los avances de cada progresión
    require('conexionbd.php'); //requiere la conexión a la base de datos
    $usuario = $_SESSION['Usuario']; //se obtiene el usuario con el session
    $p= "p".$num."avance"; //la variable $num viene de la declaración en la página de avances.php en la cual se declaran dos variables $num que es el número de la progresión y $calif que define si es calificación o si es porcentaje
    $progresion="progresion".$num;//esta variable dará forma al campo de la tabla de cada progresión para obtener el avance de cada una

    $conexion=mysqli_connect($db_host, $db_usuario, $db_contrasena, $db_nombre); //Se crea la conexión con consultas preparadas
    mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la base de datos");
    mysqli_set_charset($conexion,"utf8");

    $sql= "SELECT $p FROM $progresion WHERE nusuario=?";//Con las variables ya creadas anteriormente para tener los campos de cada progresion
    $resultado=mysqli_prepare($conexion,$sql);
    
    $ok= mysqli_stmt_bind_param($resultado,"s",$usuario);
    $ok= mysqli_stmt_execute($resultado);
    
    if ($ok==false){ 
        
        echo "Error al ejecutar consulta";
    } else {
        $ok=mysqli_stmt_bind_result($resultado,$progre);//$progre es el dato de avance en la progresion, calculado dentro de la bd 
        while (mysqli_stmt_fetch($resultado)){ 
            if($calif){ //Si la variable de si es calificación, es verdadera, se imprime solo el valor de $progre
            echo $progre;
            } else { //En caso contrario se multipla el valor del avance por 10 para tener un porcentaje y se muestre en la barra
                echo ($progre*10);
            }
        }
    }
mysqli_stmt_close($resultado);} else { //en caso de no tener sesión se imprimirá el 0.00
echo "0.00";
}?>