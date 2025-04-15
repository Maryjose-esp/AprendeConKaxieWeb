<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/style4.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="images/logo.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <title>Eliminar cuenta - Aprende con Kaxie</title>
</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION['Usuario'])) {
        header('Location:index.php');

    } else {
        include ('navbarSS.php');
    }
    ?>

    <section class="deleteaccount">
        <center>
            <h1>Eliminar cuenta</h1>
            <h4>Confirma tu contraseña para poder eliminar tu cuenta.</h4>
            <h6>Una vez presionado el botón la cuenta será eliminada, así que piensa muy bien en ejecutar esta acción pues es irreversible.</h6>
            <form method="post">
                <div class="inputcamp"><input type="text" name="usuario" value=<?php echo $_SESSION['Usuario']?> readonly></div><br>
                <div class="inputcamp"><input type="password" name="confirmar1" placeholder="Contraseña" required></div>
                <br>
                <div class="inputcamp"><input type="password" name="confirmar2" placeholder="Confirmar contraseña"
                        required></div><br><br><br>
                <input type="submit" value="Eliminar cuenta" name="EliminarC" class="btn"><br>
            </form>
            <?php
            if (isset($_POST['EliminarC'])) {
                $password1 = $_POST['confirmar1'];
                $password2 = $_POST['confirmar2'];
                require ('conexionbd.php'); 
                $useractual = $_SESSION['Usuario'];
                $sql = "SELECT CONTRASENA FROM usuario WHERE NUSUARIO = ?";
                $resultado = mysqli_prepare($conexion, $sql);
                $ejecutar = mysqli_stmt_bind_param($resultado, "s", $useractual);
                $ejecutar = mysqli_stmt_execute($resultado);

                if ($ejecutar == false) {
                    echo "Sucedió un error";
                } else {
                    $ejecutar = mysqli_stmt_bind_result($resultado, $PasAct);
                    while (mysqli_stmt_fetch($resultado)) {
                        $PaswC = $PasAct;
                    }
                    mysqli_stmt_close($resultado);

                    if($password1 === $password2){
                        if($PaswC === $password1){
                            
                            $sql = "DELETE FROM usuario WHERE NUSUARIO = ? AND CONTRASENA = ?";
                            $resultado = mysqli_prepare($conexion, $sql);
                            $ejecutar = mysqli_stmt_bind_param($resultado, "ss", $useractual, $password1);
                            $ejecutar = mysqli_stmt_execute($resultado);
                            
                            if($ejecutar){
                                session_destroy();
                                $url = "index.php";
                                echo '<script type="text/javascript">';
                                echo 'window.location.href="'.$url.'";';
                                echo '</script>';
                            }
                            
                        }else{
                            echo '<dialog id="dialogno" class="dialogos_check">
        <img src="images/iconoIncorrecto.png" id="incheck" width="100px" height="100px" />
        <center>
            La contraseña escrita no coincide con la asociada a esta cuenta. Por favor, verifica y vuelve a intentarlo.<br /><br />
        </center>
        <button id="irPagini" class="ir_a_evaluacion_dialog" onclick= "cerrarVent();">
            De acuerdo
        </button>
    </dialog>
    <script>
        var dialogo_Actual = document.querySelector("#dialogno");
        dialogo_Actual.showModal();

        function cerrarVent(){
            dialogo_Actual.close();
        }
    </script>';
                        }
                    }else{
                        echo '<dialog id="dialogno" class="dialogos_check">
        <img src="images/iconoIncorrecto.png" id="incheck" width="100px" height="100px" />
        <center>
            Las contraseñas no coinciden. Por favor, verifica y vuelve a intentarlo.<br /><br />
        </center>
        <button id="irPagini" class="ir_a_evaluacion_dialog" onclick= "cerrarVent();">
            De acuerdo
        </button>
    </dialog>
    <script>
        var dialogo_Actual = document.querySelector("#dialogno");
        dialogo_Actual.showModal();

        function cerrarVent(){
            dialogo_Actual.close();
        }
    </script>';
                    }
                    
                }
                
               // $usuario = $_SESSION['Usuario'];
                

        //         if ($password1 == $password2) {
        //             $delete = "DELETE FROM usuario WHERE NUSUARIO = '$usuario' AND CONTRASENA = '$password2'";
        //             $comando = mysqli_query($conexion, $delete);
        //             session_destroy();
        //             if ($comando) {
        //                 $url = "index.php";
        //                 echo '<script type="text/javascript">';
        // echo 'window.location.href="'.$url.'";';
        // echo '</script>';
        //             }
        //         } else {

        //         }

            }
            ?>
        </center>
    </section>

    <?php include ('footer.php'); ?>
</body>

</html>