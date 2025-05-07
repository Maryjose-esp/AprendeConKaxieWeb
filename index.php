<!--Página principal de Aprende con Kaxie-->
<?php require('ifSession.php');?><!--Archivo que comprueba si un usuario existe, entonces desbloqueará algún navbar, el que tiene sesión y el que no-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"> <!--Estilos para el index-->
    <link rel="stylesheet" href="css/style4.css">
    <!--LIBRERIA ICONOS FOOTER-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="icon" href="images/logo.ico" type="image/x-icon"> <!--Logo del sitio web Aprende con Kaxie-->
    <link rel="stylesheet" href="splide-4.1.3/splide-4.1.3/dist/css/splide.min.css"><!--Estilos-->
    <script src="splide-4.1.3/splide-4.1.3/dist/js/splide.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!--Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/close.css' rel='stylesheet'>
    <script>document.addEventListener('DOMContentLoaded', function () { //splide para el carrusel de imágenes que se mueve de manera automatica
            var splide = new Splide('#main_splide', {
                arrows: 'false',
                type: 'loop', 
                autoplay: 'true',
                interval: '3300',
                pauseOnHover: 'true'}).mount();});
        document.addEventListener('DOMContentLoaded', function () {
            var splide = new Splide('#sup_splide', {
                arrows: 'false',
                type: 'loop',
                autoplay: 'true',
                interval: '2500',
                perPage: 3,
                focus: 'center',
                pauseOnHover: 'true'}).mount();}); </script>
    <title>Aprende Con Kaxie</title> <!--Titulo en la pestaña-->
</head><body>
    <?php if (isset($_GET['param']) === true) { //Abre un dialogo donde informa que la imagen cargada lo hizo exitosamente
        echo '<dialog class="dialog1" open>';
        echo '<button onClick="this.parentElement.close()"><a href="index.php"><i class="gg-close" style="font-size: 100px;" ></a></i></button>';
        echo '<center><img src="./images/fotoactualizada.png">'; //carga una imagen dentro del dialog
        echo '<p>La nueva imagen de perfil ha sido cargada con éxito.<br> Puedes continuar navegando.';
        echo '</p></center></dialog>';
    }else if(isset($_GET['indicador'])){ //Se abre un dialogo cuando se registra un nuevo usuario, dandole la bienvenida junto a botones para entrar al manual de usuario y el inicio
        echo '<dialog id="dialogno" class="welcomeDialog">
        <center><img src="images/bienvenidoK.png" width="200px"></center><br> 
        ¡Hola '.$_GET['nombre']. ' ' . $_GET['apellido'] . '! Bienvenid@ a Aprende con Kaxie. Esperamos que tu recorrido y aprendizaje por el sitio sea
        grato.<br>
        Te dejamos el manual de usuario para que aprendas sobre el funcionamiento del sitio en general o bien,
        puedes continuar y explorar por tu propia cuenta.
        ¡Te deseamos que obtengas buenos resultados a lo largo de las progresiones!<br><br>
        <center>
            <button id="manualUsuario" class="WelcomeBtn"><a href="download/ManualDeUsuarioAK.pdf"><i class="fa-solid fa-file-pdf"></i></a></button>
            <button id="GoToIndex" class="WelcomeBtn"><a href="index.php"><i class="fa-solid fa-play"></i></a></button>
        </center></dialog>
    <script> var dialogo_Actual = document.querySelector("#dialogno");
        dialogo_Actual.showModal(); </script>';}?>
    <section id="main_splide" class="splide" aria-label="Basic Structure Example" style="width=100%;"><!--Seccion del carrusel de imágenes automático, contiene imágenes y frases de matemáticos famosos, además de una explicación de lo qué es Aprende con Kaxie-->
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <div class="espacio_img_text_slide">
                        <div class="div2"><img class="kax2" src="images/79 sin título_20231014200257.png"></div>
                        <p class="log">Aprende con Kaxie es una ayuda didáctica sobre Pensamiento Matemático II, materia que se rige bajo la nueva reforma educativa en México.<br><br> Pruébalo y aventurate con Kaxie, tu pequeño profesor que te acompañará a lo largo de las progresiones.</p></div></li>
                <li class="splide__slide">
                    <div class="espacio_img_text_slide">
                        <div class="div2"><img class="kax2" src="images/richard.png"></div>
                        <p class="log">"Para aquellos que no conocen las matemáticas, es difícil sentir la belleza de la naturaleza. Si quieres apreciarla, es necesario aprender el lenguaje en el que habla". <br>-Richard Feynman</p></div></li>
                <li class="splide__slide">
                    <div class="espacio_img_text_slide">
                        <div class="div2"><img class="kax2" src="images/chesterton.png"></div>
                        <p class="log">"La diferencia entre el poeta y el matemática es que el poeta intenta meter su cabeza en los cielos, mientras que el matemático intenta meter los cielos en su cabeza" <br>-G.K. Chesterton</p></div></li>
                <li class="splide__slide">
                    <div class="espacio_img_text_slide">
                        <div class="div2"><img class="kax2" src="images/gudder.png"></div>
                        <p class="log">"La esencia de las matemáticas no es hacer las cosas simples complicadas, sino hacer las cosas complicadas simples"<br>-S. Gudder.</p></div></li>
                <li class="splide__slide">
                    <div class="espacio_img_text_slide">
                        <div class="div2"><img class="kax2" src="images/einstein.png"></div>
                        <p class="log">"No tengo ningún talento especial, sólo soy apasionadamente curioso." <br>- Albert Einstein</p>
                    </div></li></ul></div></section>
    <div class="cards-grid"><!--Apartado de las flip cards donde se explica lo qué es Aprende con Kaxie, objetivos y beneficios, al pasar el cursor encima de una imagen se dará vuelta mostrando el texto-->
        <div class="flip-card">
            <p class="espaciar_titulos">Qué es </p>
            <div class="flip-card-inner">
                <div class="flip-card-front" style="background-image: url('./images/queesindex.jpg');"></div>
                <div class="flip-card-back">Aprende con Kaxie es una página que engloba las 14 progresiones marcadas en el marco curricular de Pensamiento Matemático II, una de las nuevas materias que trajó la Nueva Escuela Mexicana a partir del ciclo escolar 2023-2024.</div></div></div>
        <div class="flip-card" id="flip2">
            <p class="espaciar_titulos">Objetivo</p>
            <div class="flip-card-inner">
                <div class="flip-card-front" style="background-image: url('./images/objetivosindex.jpg');"></div>
                <div class="flip-card-back">Desarrollar Aprende con Kaxie para proporcionar una herramienta de apoyo a los alumnos de segundo semestre del CBTis 171.</div></div></div>
        <div class="flip-card" id="flip3">
            <p class="espaciar_titulos">Beneficios</p>
            <div class="flip-card-inner">
                <div class="flip-card-front" style="background-image: url('./images/beneficiosindex.jpg');"></div>
                <div class="flip-card-back">
                    Contribuir a un buen aprovechamiento escolar<br>Impulsar el interés por el estudio<br>Fortalecer habilidades cognitivas<br>Crear un apoyo de repaso.
                </div></div></div></div><br><br><br><br><br><br>
    <div class="img_splide_islas"><!--Otro splide, este es de islas representantes de las progresiones, también es automático y al darle click a una imagen, llevará al usuario a la progresión correspondiente-->
        <div id="sup_splide" class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide"><div class="islas"><a href="progresion1.php"> <img class="isla" src="./images/islaP1.png"> </a></div></li>
                    <li class="splide__slide"><div class="islas"><a href="progresion2.php"> <img class="isla" src="./images/islaP2.png"> </a></div></li>
                    <li class="splide__slide"><div class="islas"><a href="progresion3.php"> <img class="isla" src="./images/islaP3.png"> </a></div></li>
                    <li class="splide__slide"><div class="islas"><a href="progresion4.php"> <img class="isla" src="./images/islaP4.png"> </a></div></li>
                    <li class="splide__slide"><div class="islas"><a href="progresion5.php"> <img class="isla" src="./images/islaP5.png"> </a></div></li>
                    <li class="splide__slide"><div class="islas"><a href="progresion6.php"> <img class="isla" src="./images/islaP6.png"> </a></div></li>
                    <li class="splide__slide"><div class="islas"><a href="progresion7.php"> <img class="isla" src="./images/islaP7.png"> </a></div></li>
                    <li class="splide__slide"><div class="islas"><a href="progresion8.php"> <img class="isla" src="./images/islaP8.png"> </a></div></li>
                    <li class="splide__slide"><div class="islas"><a href="progresion9.php"> <img class="isla" src="./images/islaP9.png"> </a></div></li>
                    <li class="splide__slide"><div class="islas"><a href="progresion10.php"> <img class="isla" src="./images/islaP10.png"> </a></div></li>
                    <li class="splide__slide"><div class="islas"><a href="progresion11.php"> <img class="isla" src="./images/islaP11.png"> </a></div></li>
                    <li class="splide__slide"><div class="islas"><a href="progresion12.php"> <img class="isla" src="./images/islaP12.png"> </a></div></li>
                    <li class="splide__slide"><div class="islas"><a href="progresion13.php"> <img class="isla" src="./images/islaP13.png"> </a></div></li>
                    <li class="splide__slide"><div class="islas"><a href="progresion14.php"> <img class="isla" src="./images/islaP14.png"> </a></div></li>
                </ul></div></div></div><br><br>
    <center><p class="ramasprinc"> Ramas principales</p></center><br><br><!--Apartado de las ramas principales de Pensamiento Matemático II-->
    <div class="ramascontainer">
        <section class="centrar_apartados">
            <div CLASS="RAMAINDI">
                <CENTER><h2>Álgebra</h2></CENTER><br>
                <div class="ramas"><img src="images/algeindex.jpg" width="300px" height="220px"></div>
                <div class="textramas"><p>Estudia las estructuras y reglas generales que rigen a las operaciones aritméticas. Aquí ya no se trabaja únicamente con números, se emplean símbolos y letras en representación de valores desconocidos (incógnitas). Su propósito es resolver ecuaciones y expresar relaciones matemáticas, a fin de que puedan ser solucionadas.</p></div></div>
            <div CLASS="RAMAINDI">
                <CENTER><h2>Geometría analítica</h2></CENTER><br>
                <div class="ramas"><img src="images/trigonometryindex.jpg" width="220px"></div>
                <div class="textramas"><p>Comprende un estudio profundo de las figuras geométricas, así como de sus datos (áreas, perímetros, ángulos, distancias vértices, etc), todo esto sobre el plano cartesiano, valiéndose del álgebra para encontrar soluciones a distintas situaciones.</p></div></div>
            <div CLASS="RAMAINDI">
                <CENTER><h2>Geometría</h2></CENTER><br>
                <div class="ramas"><img src="images/geometryindex.jpg" width="265px" height="220px"></div>
                <div class="textramas"><p>Está dedicada al estudio de las propiedades y medidas de las figuras sobre un plano o en el espacio, abarcando diversos conceptos como recta, punto, curvas, etc.</p></div>
            </div></section></div><BR><BR>
    <div id="fot"><?php include('footer.php'); ?></div><!--INCLUYE EL FOOTER--></body></html>