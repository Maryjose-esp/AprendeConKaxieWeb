<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/style5.css">
    <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="images/logo.ico" type="image/x-icon">
    <title>Registrarse - Aprende Con Kaxie</title>
</head>

<body>
    <?php
    include('ifSession.php');
    require ('conexionbd.php');
    // $conexion = mysqli_connect($db_host, $db_usuario, $db_contrasena, $db_nombre);
    // mysqli_select_db($conexion, $db_nombre) or die('NO SE ENCUENTRA LA BD');
    mysqli_set_charset($conexion, "utf8");

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $NomUser = $_POST['NomUsr'];
    $Contrasena = $_POST['Passw'];
    $Name = $_POST['Nombre'];
    $LastName = $_POST['Apellido'];
     

    $comando = "INSERT INTO usuario (NUSUARIO, CONTRASENA, NOMBRE, APELLIDO, FOTOPER) VALUES ('$NomUser', '$Contrasena', '$Name', '$LastName', 'fotoperdefa.png')";
    
    $insercion = mysqli_query($conexion, $comando);
    
    if ($insercion) {
        for ($i = 1; $i <= 14; $i++) {
            $comando2 = "INSERT INTO progresion$i (nusuario) VALUES ('$NomUser')";
            $insercion = mysqli_query($conexion, $comando2);
        }
        $comando = "INSERT INTO avances (nusuario) VALUES (?)";
        $preparar = mysqli_prepare($conexion, $comando);
        $insercion = mysqli_stmt_bind_param($preparar, "s", $NomUser);
        $insercion = mysqli_stmt_execute($preparar);
        if ($insercion == false) {
            echo "error en la tabla de avances";
        }
        // if(isset($_POST['Mantener'])){
        //     $sessionTime = 365 * 24 * 60 * 60; // 1 año de duración
        //     session_set_cookie_params($sessionTime);
        //     session_start();
        // }
            //session_start();
            
        $_SESSION['Usuario'] = $_POST['NomUsr'];
        
        session_start();
        // if(!isset($_SESSION['Usuario'])){
        //     header("location:index.php");

        // }
        
        

    } else {
        header("location:registro.php");
    }}
    
    mysqli_close($conexion);
    ?>

<dialog id="registro-dialog" class="container2">
<p>Usuario ya existente, favor de cambiarlo.</p>
<input type="button" class="d-boton" value="Cerrar">
</dialog>

    <section style=" margin-top:30px;">
        <div class="formulario2">

            <h3 class="adaptar_noblock">Registrarse</h3><br>

            <img src="./images/KaxieCreausr.png" class="imgKaxr">
            <form name=registro action="registrouser.php" method="POST">

                <div id="contin2">

                    <div class="inputcamp">
                        <Input type="text" id="Nombre" name="Nombre" placeholder="Nombre" required><br>
                        <label id="ValNom"></label>
                    </div>

                    <div class="inputcamp">
                        <Input type="text" id="Apellido" name="Apellido" placeholder="Apellido" required> <br>
                        <label id="ValApe"></label>
                    </div>

                    <div class="inputcamp">
                        <Input type="text" name="NomUsr" placeholder="Nombre de usuario" required><br>
                        <label id="UsuarioName"></label>
                    </div>

                    <div class="inputcamp">
                        <Input type="password" name="Passw" id="Passw" placeholder="Contrasena" minlength=8 required>
                        <img src="/images/close.png" id="eyeicon" onclick="cambioOjoK(document.registro.eyeicon, document.registro.Passw)"> <br>
                        <label id="ValCon"></label>
                         
                    </div><br><br>
                    
                    <div class="recuerdame">
                        <Input class="recuerdame" type="checkbox" name="Mantener" id="SesionM"><label
                            for="SesionM">Mantener inicio de sesion</label>
                    </div>
                    
                    <p class="new">¿Ya tienes una cuenta? <a href="sesion.php">Da click aqui para iniciar sesion</a>
                    </p><br><br>
                    <input type="submit" id="registra" name="iniciaS" value="Registrarse" class="btn" disabled=true>
                    <script src="js/ValidarUsrC.js"></script>
                </div>






            </form>
            <div>

    </section>
    <?php
    include('footer.php');
    ?>

<script>
    var dialog = document.getElementById('registro-dialog');
    var closeButton = dialog.querySelector('.d-boton');
    closeButton.addEventListener('click', function () {
        dialog.close();
    });
</script>
</body>

</html>