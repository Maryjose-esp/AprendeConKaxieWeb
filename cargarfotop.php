<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/close.css' rel='stylesheet'>
    <title>Subiendo foto</title>
</head>

<body>
    <?php
    //Obtener los valores para enviarlos a la bd
    require('conexionbd.php');
    session_start();
    $usuarioK = $_SESSION['Usuario'];

    $image = $_FILES['subirimagen'];
    //Condicional si evalua si el usuario subio una foto propia
    //Inicializar la consulta
    $SQL = "UPDATE usuario SET FOTOPER = ? WHERE NUSUARIO = ?";

    if ($name_image = $_FILES['subirimagen']['name']) {
        $name_image = $_FILES['subirimagen']['name'];
        $type_image = $_FILES['subirimagen']['type'];
        $size_image = $_FILES['subirimagen']['size'];
        if (
            $size_image <= 100000000 && ($type_image == "image/jpg" || $type_image == "image/jpeg" || $type_image == "image/gif" ||
                $type_image == "image/png" || $type_image == "image/tiff" || $type_image == "image/bmp" || $type_image == "image/svg")
        ) {
            $carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';
            move_uploaded_file($_FILES['subirimagen']['tmp_name'], $carpeta_destino . $name_image, );
        } else {
            echo "formato o peso invalido";
        }

        
        

        


        //Preparar la consulta
        $preparar = mysqli_prepare($conexion, $SQL);

        //Unir los parametros de la sentencia
        $insercion = mysqli_stmt_bind_param($preparar, "ss", $name_image, $usuarioK);

        //Ejecutar la consulta
        $insercion = mysqli_stmt_execute($preparar);
        /*Asociar las variables al resultado de la consulta
        y evaluar si nuestra ejecucion devolvio un true o false*/

        //Checa si la consulta se ejecuto correctamente
        if( $insercion === false ) {
            echo "ocurrio un error";
        }else{
            mysqli_stmt_close($preparar); //cierra la senntencia preparada que ya fue ejecutada
            header('location:index.php?param=true');


        }
        // $SQL = "UPDATE usuario SET FOTOPER ='$name_image' WHERE NUSUARIO='$usuarioK'";
        // $resultado = mysqli_query($conexion, $SQL);



        

    } else { //en caso de que haya elegido una imagen de los 3 avatares
        //obtener los valores iniciales
        $radiofoto = $_POST['fotoPerfil'];
        $varAxualiarFotoRadios = ""; //guardará la ruta del avatar seleccionado


        if ($radiofoto == "mena") {
            // require('conexionbd.php');
            // session_start();
            // $usuarioK = $_SESSION['Usuario'];
            $varAxualiarFotoRadios = "perfilMena.png";

            // $SQL = "UPDATE usuario SET FOTOPER ='perfilMena.png' WHERE NUSUARIO='$usuarioK'";
            // $resultado = mysqli_query($conexion, $SQL);
            // header('location:index.php');

        } else if ($radiofoto == "majo") {
            // require('conexionbd.php');
            // session_start();
            // $usuarioK = $_SESSION['Usuario'];
            $varAxualiarFotoRadios = "perfilMajo.png";

            // $SQL = "UPDATE usuario SET FOTOPER ='perfilMajo.png' WHERE NUSUARIO='$usuarioK'";
            // $resultado = mysqli_query($conexion, $SQL);
            // header('location:index.php');

        } else if ($radiofoto == "natalia") {
            // require('conexionbd.php');
            // session_start();
            // $usuarioK = $_SESSION['Usuario'];
            $varAxualiarFotoRadios = "perfilNata.png";
            // $SQL = "UPDATE usuario SET FOTOPER ='perfilNata.png' WHERE NUSUARIO='$usuarioK'";
            // $resultado = mysqli_query($conexion, $SQL);
            // header('location:index.php');

        }
        //Se ejecuta la actualización
        $preparar = mysqli_prepare($conexion, $SQL);

        //Unir los parametros de la sentencia
        $insercion = mysqli_stmt_bind_param($preparar, "ss", $varAxualiarFotoRadios, $usuarioK);

        //Ejecutar la consulta
        $insercion = mysqli_stmt_execute($preparar);
        

        //Checa si la consulta se ejecuto correctamente
        if( $insercion === false ) {
            echo "ocurrio un error";
        }else{
            mysqli_stmt_close($preparar); //cierra la senntencia preparada que ya fue ejecutada
            header('location:index.php?param=true');


        }

    }


    ?>
</body>

</html>