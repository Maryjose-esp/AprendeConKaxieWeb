

    <?php

    /*Obtener los valores para empezar a preparar la consulta*/
    $NomUser = $_POST['NomUsr'];
    $Contrasena = $_POST['Passw'];
    $Name = $_POST['Nombre'];
    $LastName = $_POST['Apellido'];
    $indicador = "";
    require('conexionbd.php');
    // $conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
    // mysqli_select_db($conexion, $db_nombre) or die('NO SE ENCUENTRA LA BD');
    



    $sql = "SELECT NUSUARIO FROM usuario WHERE NUSUARIO = ?";
    $resultado = mysqli_prepare($conexion, $sql);
    $ejecutar = mysqli_stmt_bind_param($resultado, "s", $NomUser);
    $ejecutar = mysqli_stmt_execute($resultado);
    //$usuariosEx= mysqli_query($conexion, $select);
    
    // $arreglo= array();
    
    // while ($row = mysqli_fetch_array($usuariosEx)){
    //     $arreglo[]=$row['NUSUARIO'];
    // }

    

    $counter = 0;
    if ($ejecutar) {
        $useractual2 = "";
//         $counter = mysqli_stmt_affected_rows($resultado);
// echo mysqli_stmt_affected_rows($resultado);
        $ejecutar = mysqli_stmt_bind_result($resultado, $useractual);
        while (mysqli_stmt_fetch($resultado)) {
             $useractual2 = $useractual;
         }
         //echo $useractual2;
        mysqli_stmt_close($resultado);

         if($useractual2 === $NomUser){
            echo 1;
         }else{
            //echo "vamos a tratar de insertar";
            //Sentencia normal SQL - Primero vamos a insertar en la tabla de usuarios
            $comando = "INSERT INTO usuario (NUSUARIO, CONTRASENA, NOMBRE, APELLIDO) VALUES (?,?,?,?)";

            //Preparar la consulta
            $preparar = mysqli_prepare($conexion, $comando);

            //Unir los parametros de la sentencia
            $insercion = mysqli_stmt_bind_param($preparar, "ssss", $NomUser, $Contrasena, $Name, $LastName);

            //Ejecutar la consulta
            $insercion = mysqli_stmt_execute($preparar);
            /*Asociar las variables al resultado de la consulta
            y evaluar si nuestra ejecucion devolvio un true o false*/

            if ($insercion == false) {
                //echo "OCURRIO UN ERROR";
            } else {
                //echo "LIsto, vete";
                mysqli_stmt_close($preparar); //cierra la senntencia preparada que ya fue ejecutada
    
                //Al tener una insercion exitosa, entonces se procede a insertar en las otras tablas
                //Son 14 progresiones, entonces, se inserta en las 14
                for ($i = 1; $i <= 14; $i++) {

                    $comando = "INSERT INTO progresion$i (nusuario) VALUES (?)";
                    $preparar = mysqli_prepare($conexion, $comando);
                    $insercion = mysqli_stmt_bind_param($preparar, "s", $NomUser);
                    $insercion = mysqli_stmt_execute($preparar);
                    if ($insercion) {
                        mysqli_stmt_close($preparar);
                    }

                    //Insertar en las tablas de evaluaciones
                    if ($i <= 2) {
                        $comando = "INSERT INTO evaluacion_$i (nusuario) VALUES (?)";
                        $preparar = mysqli_prepare($conexion, $comando);
                        $insercion = mysqli_stmt_bind_param($preparar, "s", $NomUser);
                        $insercion = mysqli_stmt_execute($preparar);
                        if ($insercion) {
                            mysqli_stmt_close($preparar);
                        }
                    }

                }

                //insertar en la tabla avances
                $comando = "INSERT INTO avances (nusuario) VALUES (?)";
                $preparar = mysqli_prepare($conexion, $comando);
                $insercion = mysqli_stmt_bind_param($preparar, "s", $NomUser);
                $insercion = mysqli_stmt_execute($preparar);
                if ($insercion) {
                    mysqli_stmt_close($preparar);

                }

                // if (isset($_POST['Mantener'])) {
                //     $sessionTime = 365 * 24 * 60 * 60; // 1 año de duración
                //     session_set_cookie_params($sessionTime);
                //     session_start();
                // }
    
                session_start();
                $_SESSION['Usuario'] = $_POST['NomUsr'];
                $url = 'http://localhost/AprendeConKaxieWeb/index.php?indicador=NewUser&nombre=' . $Name . '&apellido=' . $LastName;
                echo $url;
                //header('location:index.php?indicador=NewUser&nombre=' . $Name . '&apellido=' . $LastName);
            }

         }
        
        mysqli_close($conexion);

        // if ($counter > 0) {
        //     //echo $counter;
        // //     echo '<dialog id="registro-dialog" class="container2">
        // // <p>Usuario ya existente, favor de cambiarlo.</p>
        // // <input type="button" class="d-boton" value="Cerrar" onclick = cerrarVent();>
        // // </dialog>';

        // //     echo '<script>
        // // var dialogo_Actual = document.querySelector("#registro-dialog");
        // // dialogo_Actual.showModal();

        // // function cerrarVent(){
        // //     dialogo_Actual.close();
        // // }
        // // </script>';

        // } else {
        //     //echo $counter;
        //     //echo strlen($NomUser);
    
            
        // }
        
    }
    //fotoperdefa.png
    
    ?>


