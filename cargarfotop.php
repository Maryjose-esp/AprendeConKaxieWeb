<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/close.css' rel='stylesheet'>
    <title>Subiendo foto</title>
</head>

<body>
    <?php
    $image = $_FILES['subirimagen'];
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

        require ('conexionbd.php');
        session_start();
        $usuarioK = $_SESSION['Usuario'];

        $SQL = "UPDATE usuario SET FOTOPER ='$name_image' WHERE NUSUARIO='$usuarioK'";
        $resultado = mysqli_query($conexion, $SQL);


        header('location:index.php?param=true');

    }else{
        $radiofoto = $_POST['fotoPerfil'];
        if($radiofoto == "mena"){
            require ('conexionbd.php');
            session_start();
            $usuarioK = $_SESSION['Usuario'];
            $SQL = "UPDATE usuario SET FOTOPER ='perfilMena.png' WHERE NUSUARIO='$usuarioK'";
            $resultado = mysqli_query($conexion, $SQL);
            header('location:index.php');
    
        }else if($radiofoto == "majo"){
            require ('conexionbd.php');
            session_start();
            $usuarioK = $_SESSION['Usuario'];
            $SQL = "UPDATE usuario SET FOTOPER ='perfilMajo.png' WHERE NUSUARIO='$usuarioK'";
            $resultado = mysqli_query($conexion, $SQL);
            header('location:index.php');

        }else if($radiofoto == "natalia"){
            require ('conexionbd.php');
            session_start();
            $usuarioK = $_SESSION['Usuario'];
            $SQL = "UPDATE usuario SET FOTOPER ='perfilNata.png' WHERE NUSUARIO='$usuarioK'";
            $resultado = mysqli_query($conexion, $SQL);
            header('location:index.php');

        }
    }


    ?>
</body>

</html>