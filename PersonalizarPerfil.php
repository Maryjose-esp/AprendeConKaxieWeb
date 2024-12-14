<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="images/logo.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <title>Personaliza tu perfil - Aprende Con Kaxie</title>
</head>

<body>

    <?php
    session_start();
    if(!isset($_SESSION['Usuario'])){
        header('Location:index.php');

    }else{
        include('navbarSS.php');
    }
    ?>

    <Section class="personP">
        <h1 class="h1title">Cambiar foto de perfil</h1><br>
        <Section class="imgperfpp">
            <center><i>Selecciona uno de los siguientes avatares.</i><br>
                <hr width="60%" noshade style="border-color: black;">
            </center>
            <br><br>
            <form action="cargarfotop.php" enctype="multipart/form-data" method="post">
                <div class="acomodarimg" id="avatarespred">
                
                    <div class="avatarPer">
                        <div id="FotoPerfilMena" name="photoprofile">
                            <input type="radio" name="fotoPerfil" value="mena" id="mena" onclick="sombreadored()">
                            <div class="avatarPer"></div>
                            </input>
                        </div>
                    </div>
                    <div class="avatarPer">
                        <div id="FotoPerfilMajo" name="photoprofile">
                            <input type="radio" name="fotoPerfil" value="majo" id="majo" onclick="sombreadored()"> 
                        </div>
                    </div>
                    <div class="avatarPer">
                        <div class= "FotoPerfilNata" id="FotoPerfilNata" name="photoprofile">
                            <input type="radio" name="fotoPerfil" value="natalia" id="natalia" onclick="sombreadored()">
                        </div>
                    </div>
                    <script>
                        function sombreadored(){
                            if(document.getElementById('natalia').checked) {
                                document.getElementById('FotoPerfilNata').classList.add('colorSeleccion');
                                document.getElementById('FotoPerfilMajo').classList.remove('colorSeleccion');
                                document.getElementById('FotoPerfilMena').classList.remove('colorSeleccion');
                            }else if(document.getElementById('majo').checked) {
                                document.getElementById('FotoPerfilMajo').classList.add('colorSeleccion');
                                document.getElementById('FotoPerfilNata').classList.remove('colorSeleccion');
                                document.getElementById('FotoPerfilMena').classList.remove('colorSeleccion');
                            } else if(document.getElementById('mena').checked) {
                                document.getElementById('FotoPerfilMena').classList.add('colorSeleccion');
                                document.getElementById('FotoPerfilMajo').classList.remove('colorSeleccion');
                                document.getElementById('FotoPerfilNata').classList.remove('colorSeleccion');
                            }
                            
                        } 

                        
                    </script>
                </div>
                <br><br>
                <center><i>O carga tu propia imagen.</i><br>
                    <hr width="60%" noshade style="border-color: black;">
                </center>
                <br><br>
                <div class="acomodarimg">
                    <div class="preview">
                            <img src="./images/fotoperdefa.png" width="100px" height="100px" id="verimg">;
                    </div>
                    <div>
                        <input type="file" name="subirimagen" value="subir imagen" accept="image/*" id="subirImagen"></input>
                    <label for="subirImagen">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h360v80H200v560h560v-360h80v360q0 33-23.5 56.5T760-120H200Zm480-480v-80h-80v-80h80v-80h80v80h80v80h-80v80h-80ZM240-280h480L570-480 450-320l-90-120-120 160Zm-40-480v560-560Z"/></svg>    
                    Seleccionar imagen</label>
                    </div>
                    <br>
                    <button type="button"onclick="eliminararchivo()" class="cancelload"><b>Cancelar</b></button>
                    
                    </div>
                <br><br>

                
                <div class="acomodarimg">
                    <input type="submit" value="Guardar cambios" class="btn" style="color:black;font-weight: 600;box-shadow: none;"></input><br>
                    
                </div>
                
            </form>
            <script src="js/script5.js"></script>
        </section>
    </section>
    <?php include ('footer.php'); ?>
</body>

</html>