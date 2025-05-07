<!--Barra de navegación si existe el usuario-->
<!DOCTYPE html><html lang="es"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css"> <!--Hoja de estilos-->
    <link rel="preconnect" href="https://fonts.googleapis.com"><!--fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="icon" href="images/logo.ico" type="image/x-icon"> <!--Logo del sitio web, se coloca en cada página-->
</head><body>
    <?php require('conexionbd.php'); //se requiere la conexión con la base de datos
    $useractual = $_SESSION['Usuario']; //se crea una variable para guardar el usuario actual por medio del session
    $subirfoto = "SELECT FOTOPER FROM usuario WHERE NUSUARIO = ?"; //Por medio de consultas preparadas se obtendrá la foto de perfil
    $resultado = mysqli_prepare($conexion, $subirfoto); //se prepara la consulta
    $ejecutar = mysqli_stmt_bind_param($resultado, "s", $useractual); //se colocan los parametros para ejecutar la consulta, la consulta, el tipo de dato 's' y el usuario por el cual se obtendrá la foto de perfil
    $ejecutar = mysqli_stmt_execute($resultado); 
    $ejecutar = mysqli_stmt_bind_result($resultado, $rutaimg); //se ejecuta y se obtiene el valor de la ruta de la imagen ?>
    <div class="wrapper">
        <nav> <!--Inicio de la barra de navegación, esta es cuando la sesión empieza-->
            <input type="checkbox" id="show-search">
            <input type="checkbox" id="show-menu">
            <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
            <div class="content">
                <a class="fotoper"><img width="60px" height="60px" src = "../../uploads/<?php //se añade el dato de la ruta de la imagen, así se mostrará la foto de perfil
                while(mysqli_stmt_fetch($resultado)){
                    echo $rutaimg; }
                mysqli_stmt_close($resultado);//se cierra la conexión ?> "></a>
                <ul class=" links">
                    <li><a href="#" class="desktop-link">Perfil</a>
                        <input type="checkbox" id="show-services">
                        <label for="show-services">Perfil</label>
                        <ul><li><a href="PersonalizarPerfil.php">Personalizar perfil</a></li><!--Envía al usuario a la parte de personalizar el perfil, donde podrá modificar su foto de perfil-->
                            <li><a href="editinfo.php">Editar información</a></li><!--Manda al usuario al apartado para editar datos de su perfil-->
                            <li><a href="avances.php">Ver mis avances</a></li><!--Enviará al usuario al apartado de avances donde se jala el valor del avance por progresión de la base de datos dependiendo del usuario-->
                            <li><a href="eliminarcuenta.php">Eliminar cuenta</a></li><!--Mandará al usuario a una página donde tendrá que confirmar su contraseña para eliminar la cuenta-->
                            <li><a href=""><form method="post">
                                        <input type="submit" value="Cerrar sesión" name="sesionfuera" class="sinformatobtn"></form>
                                    <?php if (isset($_POST['sesionfuera'])) { //al presionar "Cerrar sesión" en la barra de navegación se empezará con session y después se utilizará el destroy, 
                                        session_start();
                                        session_destroy();
                                        echo "<script>localStorage.clear(); window.location.href= 'http://aprendeconkaxie.com/index.php'</script>"; } ?></a></li></ul></li>
                    <li><a href=""><?php echo $_SESSION['Usuario']; ?></a></li> <!--Se obtiene el valor del usuario por medio de session, para colocarlo en la barra de navegación junto a la foto de perfil-->
                    <li><a href="index.php">Aprende con Kaxie</a></li> <!--Cuando se le da click a "Aprende con Kaxie" llevará al usuario a la página principal, el index.php-->
                    <li><a href="" class="desktop-link">Progresiones</a> <!--Lista de las 14 progresiones, al darle click a una enviará al usuario a la correspondiente-->
                        <input type="checkbox" id="show-features">
                        <label id="-labelshow" for="show-features">Progresiones</label>
                        <ul><li><a href="progresion1.php">Progresión 1</a></li>
                            <li><a href="progresion2.php">Progresión 2</a></li>
                            <li><a href="progresion3.php">Progresión 3</a></li>
                            <li><a href="progresion4.php">Progresión 4</a></li>
                            <li><a href="progresion5.php">Progresión 5</a></li>
                            <li><a href="progresion6.php">Progresión 6</a></li>
                            <li><a href="progresion7.php">Progresión 7</a></li>
                            <li><a href="progresion8.php">Progresión 8</a></li>
                            <li><a href="progresion9.php">Progresión 9</a></li>
                            <li><a href="progresion10.php">Progresión 10</a></li>
                            <li><a href="progresion11.php">Progresión 11</a></li>
                            <li><a href="progresion12.php">Progresión 12</a></li>
                            <li><a href="progresion13.php">Progresión 13</a></li>
                            <li><a href="progresion14.php">Progresión 14</a></li></ul></li>
                    <li><a href="Evaluaciones.php">Evaluaciones</a></li> <!--Este apartado manda al usuario a una página que contiene las 14 evaluaciones, cada una correspondiente a su progresión-->
</ul></div></nav></div></body></html>