<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    
    <title>Document</title>
</head>
<body>
    <?php 
        require('conexionbd.php');
        $useractual = $_SESSION['Usuario'];
        $subirfoto = "SELECT FOTOPER FROM usuario WHERE NUSUARIO = '$useractual' ";
        $resultado = mysqli_query($conexion, $subirfoto);

        while ($fila=mysqli_fetch_array($resultado)) {
            $rutaimg = $fila['FOTOPER'];
        }
    ?>

    <header>
        
        
    
      <a class="fotoper"><img src="/uploads/<?php echo $rutaimg ?>" width="60px" height="60px"></a>
            <ul>
            
                <li><a href="">Perfil</a>
                    <ul>
                        <li><a href="PersonalizarPerfil.php">Personalizar perfil</a></li>
                        <li><a href="editinfo.php">Editar informacion</a></li>
                        <li><a href="avances.php">Ver mis avances</a></li>
                        <li><a href="eliminarcuenta.php">Eliminar cuenta</a></li>
                        <li><a href=""><form method="post">
                            <input type="submit" value="Cerrar sesion" name="sesionfuera" class="sinformatobtn">
                        </form>
                            <?php 
                            if(isset($_POST['sesionfuera'])){
                                session_start(); 
                                session_destroy();
                                header('location:index.php');
                            }
                        ?></a></li>
                    </ul>
                </li>
                <li><a href=""><?php echo $_SESSION['Usuario']; ?></a></li>
                <li><a href="index.php">Aprende con Kaxie</a></li> 
                <li><a href="">Progresiones</a>
                   <ul>
                        <li><a href="progresion1.php" >Progresión 1</a></li>
                        <li><a href="progresion2.php" >Progresión 2</a></li>
                        <li><a href="progresion3.php" >Progresión 3</a></li>
                        <li><a href="progresion4.php" >Progresión 4</a></li>
                        <li><a href="progresion5.php" >Progresión 5</a></li>
                        <li><a href="progresion6.php" >Progresión 6</a></li>
                        <li><a href="progresion7.php" >Progresión 7</a></li>
                        <li><a href="progresion8.php" >Progresión 8</a></li>
                        <li><a href="progresion9.php" >Progresión 9</a></li>
                        <li><a href="progresion10.php">Progresión 10</a></li>
                        <li><a href="progresion11.php" >Progresión 11</a></li>
                        <li><a href="progresion12.php">Progresión 12</a></li>
                        <li><a href="progresion13.php" >Progresión 13</a></li>
                        <li><a href="progresion14.php" >Progresión 14</a></li>
                    </ul>
                </li>
                <li><a href="Evaluaciones.php">Evaluaciones</a></li>

            </ul>
        
    </header>

</body>
</html>