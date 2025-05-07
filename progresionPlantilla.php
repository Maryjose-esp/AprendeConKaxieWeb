<!--Solo plantilla de la progresión-->
<?php require ('ifSession.php');  ?> <!--Archivo php que comprueba si hay una sesión existente, en caso de estar, el navbar desbloqueará más partes del sitio web, como lo son los avances, editar el perfil, etc.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"> <!--Hojas de estilos aplicadas dentro de las progresiones, se colocarán las correspondientes-->
    <link rel="stylesheet" href="css/style2.css"> <!--Style 2, es para generico, mantiene un estilo generico a las progresiones, por ejemplo colores, etc.-->
    <link rel="stylesheet" href="css/style4.css"> <!--Style 4 para los botones correspondientes a los ejercicios-->
    <link rel="stylesheet" href="css/style5.css"> <!--Style 5 para algunos estilos de la progresión, además de hacerla responsive en ciertos puntos-->
    <link rel="preconnect" href="https://fonts.googleapis.com">  <!--Fonts-->
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet"> <!--Otro style en cuanto a la letra de Quicksand-->
<link rel="icon" href="./images/logo.ico" type= "image/x-icon"> <!--Logo del sitio Web "aprende con Kaxie"-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script> <!--Librerias vinculadas para Ajax-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.6/jspdf.plugin.autotable.min.js"></script>
<script src="js/jquery-3.7.1.js"></script> <!--Script para revisar los ejercicios de la progresión-->
    <title>Progresion x</title> <!--Titulo en la pestaña, este dependiende de la progresión-->
</head>
<body>
<!--Se abre el php para evaluar si la variable de $indicador_bd es verdadera, de serlo, se abrirá el dialog número x que va de la progresión que se este mostrando-->
 <?php if ($indicador_bd) {
         dialog_abrir('x'); //número de la progresión para el dialog 
     }else{ //de caso contrario se abre un script 
         echo "<script> 
         document.addEventListener('DOMContentLoaded', () => {
     let btnPdf = document.querySelectorAll('[id = btnPDF]');
     btnPdf.forEach((btnPdf) => {
         btnPdf.style.display ='none';
       }); }); </script>"; } ?>
     <script>var IndicadorBDJS = '<?php echo $indicador_bd;?>'; //El IndicadorBDJS se actualiza a abrir un php junto con imprimir la variable de $indicador_bd
        var arraypxex = [[]]; //Nombre de la matriz con la respuesta de los ejercicios de input text dentro de la progresión
    </script>
     <script src="js/script7.js"></script><!--Se llama al script 7 que contiene las funciones para revisar y traer datos-->
     <script>
         var DatosFinalesPDF = "<?php DatosPDF(); ?>"; //variable para los datos de los pdf a imprimir por ejercicio
     </script>
<aside class="aside" id="asidex"> <!--Aside correspondiente a la progresión, la x representa el número de la progresión--> 
        <section id="s1">
        Pro
        gre
        sión 
        x <!-- Número de la progresión correspondiente-->
        </section><br>
            <Section class="sectionAs"> <!--Empieza la sección del aside-->
                <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit, <!--Descripción de x progresión, lo que se ve dependiendo de la NEM-->
                    sed do eiusmod tempor incididunt ut labore et dolore magna 
                    aliqua. Nisl tincidunt eget nullam non. Quis hendrerit dolor 
                    magna eget est lorem ipsum dolor sit. Volutpat odio facilisis 
                    mauris sit amet massa.</p><br>
                    <img src="images/progresion10img/P10.png" WIDTH=100%><br><br>
                <b><h2>Metas:</h2></b><br> <!--Metas dentro de la progresión-->
                <H3>MX</H3> <!--Número de meta dependiendo de la NEM-->
                <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</P>
                <BR>
                <b><h2>Categorías:</h2></b><br> <!--Categorías de la progresión-->
                <H3>CX</H3> <!--Número de categoría de la progresión-->
                <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</P><BR>
                <b><h2>Subcategorías:</h2></b><br> <!--Subcategorías de la progresión-->
                <H3>SX</H3> <!--Número de subcategoría-->
                <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</P><BR>
            </section>
            <footer class="anteriorsig"> <!--Botones para ir a la siguiente progresión o a la anterior, si se encuentra en la primera progresión el botón de antes le enviará al inicio en caso de estar en la final el botón de siguiente le enviará al inicio-->
                <div class="panterior"><a href="progresion.php"><img src = "images/Anterior.png" WIDTH=47px style="margin-bottom: -18px;">Anterior</a></div>
                <div class="psiguiente"><a href="progresion.php">Siguiente<img src="images/Siguiente.png" WIDTH=47px style="margin-bottom: -18px"></a></div>
            </footer> </aside> <!--Fin del aside-->
        <section class="textP"> <!--Sección donde se encuentra todo el material de la progresión-->
        <center> <div id="indicex" class="indice"> <!--Dependiendo de la progresión se pondrá el número de indice, pues se cambiará su tamaño en los estilos-->
            <p>&emsp;&emsp;&emsp;&emsp;&ensp;Índice<br> <!--Estructura básica del indice, dependiendo de la cantidad de temas podrá incrementar-->
                <a href="#cc"> Conceptos clave</a><br> <!--Por medio de href="#" permite llevar a una parte del código que tenga ese id dentro de la página-->
                <a href="#quees"> Explicación del tema</a><br>
                <a href="#ejemplo"> Ejemplo</a><br>
                <a href="#ejer"> Ejercicios</a><br>
                <a href="#resu"> Resumen </a><br>
            </p></div> </center>
            <div class="conceptosclave" id="cc"> <!--apartado de conceptos clave con id="cc" lo cual permitirá llegar a esta parte por medio del índice-->
                <div><img src= "images/KCClave.png" WIDTH="180px" HEIGHT="auto" style="margin-right: 20px;"></div> <!--Imagen de Kaxie para los conceptos clave-->
            <div class="conceptoscla"> <!--Parte de los conceptos clave necesarios para comprender la progresión-->
            <h1>Conceptos Clave</h1> <!--Cada concepto se encontrará en negritas y entre la etiqueta de párrafo-->
            <P><b>Concepto.</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br></p></div></div>
<!--ESPACIO PARA EL VIDEO CORRESPONDIENTE DE CADA PROGRESIÓN-->
            <div class="videoProgre"><div class="videoEsti"><video src="" controls width="100%"></video></div></div>
<!--FIN ESPACIO PARA EL VIDEO-->
            <h1>Lorem ipsum dolor sit amet</h1> <!--Primera parte del tema-->
            <P><div class="" id="quees"> <!--Explicación del tema -->
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nisl tincidunt eget nullam non. Quis hendrerit dolor magna eget est lorem ipsum dolor sit. Volutpat odio facilisis mauris sit amet massa. Commodo odio aenean sed adipiscing diam donec adipiscing tristique. Mi eget mauris pharetra et. Non tellus orci ac auctor augue. Elit at imperdiet dui accumsan sit. Ornare arcu dui vivamus arcu felis. Egestas integer eget aliquet nibh praesent. In hac habitasse platea dictumst quisque sagittis purus. Pulvinar elementum integer enim neque volutpat ac.
            </p> </div><br>
            <div class="imgejercicios"> <!--Apartado del comienzo de los ejercicios dentro de la progresión-->
            <div> <img  id="ejer" src="images/Ejercicios.png" WIDTH="180px" HEIGHT="auto" style="margin-right: 20px;"></div>
            <div id="ejercicios"> <h1>Ejercicio</h1> </div> </div>
            <FORM METHOD=POST>
            <p><h1>Lorem ipsum dolor sit amet.</h1></p><br> <!--Instrucciones para el ejercicio-->
            <P><b>Non tellus orci ac auctor augue.</b></p><br> <!--Pregunta de opción múltiple-->
            <!--Un input de tipo radio por opción, en este caso son tres, pero pueden ser dos o más, el radio correcto tendrá el valor de 1, los incorrectos tendrán que ser otro valor que no sea 1-->
            <!--Cada radio de cada grupo tendrá por nombre p(número de progresión)e(número de ejercicio)r(número de grupo), ya dependiendo de la opción se añadirá una "a" con el número de la opción, si es la primera, segunda, etc, se añade un label con un for con el id del radio para que al momento de ser presionado el texto se marque la opción correspondiente-->
            <INPUT TYPE="radio" name="pxexr1" id="pxexr1a1" value="1"> <label for="pxexr1a1">Ornare arcu dui vivamus arcu felis.</label> <BR><br>
            <INPUT TYPE="radio" name="pxexr1" id="pxexr1a2" value="2"> <label for="pxexr1a2">Ornare arcu dui vivamus arcu felis.</label><BR><br>
            <INPUT TYPE="radio" name="pxexr1" id="pxexr1a3" value="3"> <label for="pxexr1a3">Ornare arcu dui vivamus arcu felis.</label><BR><br><br>
            <!--Botones correspondientes para revisar los ejercicios y también descargar un pdf con la cantidad de aciertos-->
            <button type="button" onclick="ColoresRadios((NumRad), (NumProgre),(NumEjer));"class="buttonsResRev"><img id = "btnSubmit" src="images/Revisar.png" width="140px" alt="" onmouseover="this.src = 'images/RevisarSobre.png'" onmouseout="this.src = 'images/Revisar.png'"></button><!--La función ColoresRadios() tiene como paramentros, la cantidad de grupos de radios, el número de la progresión y el número del ejercicio-->
            <button type = "button" onclick="BorrarRadios((NumProgre),(NumEjer),(NumRad));" id = "btnReset" name = "" class="buttonsResRev"><img src = "images/VolverIntentar.png" width="140px" onmouseover="this.src = 'images/VolverIntentarSobre.png'" onmouseout="this.src = 'images/VolverIntentar.png'"></button><!--La función para resetear los radios requiere de colocar el número de la progresión, el número del ejercicio y el número de la cantidad de grupos de radios-->
            <button type="button" class="buttonsResRev" id = "btnPDF" onclick="pdfForRbd((NumProgre,(NumEjer),(NumRad), DatosFinalesPDF);" ><img src="images/pdfKaxie.png"  id = "btnPDF" width="90px" alt="" onmouseover="this.style.setProperty('-webkit-filter', 'drop-shadow(2px 2px 5px rgba(0, 38, 81, 0.7))'); this.style.setProperty('transform', 'scale(1.08)');" onmouseout="this.style.removeProperty('-webkit-filter'); this.style.removeProperty('transform');"></button> </FORM><!--En el momento de presionar la imagen del pdf descargará un pdf informando cuáles radios se encontraban correctos y cuales no, se colocan los datos del número de la progresión, el número del ejercicio, la cantidad de radios y los datos del pdf que se cargaron al inicio-->
            <div class="Calificacion" id = "pxeximg"></div> <!--en este apartado se colocará la imagen y calificación correspondiente del ejercicio, se califica y luego jala los datos de la base de datos-->
            <script> TraerRadios((CantidadDeEjerciciosConRadio),(NumProgre)); if(IndicadorBDJS){TraerCalificacionPHP((NumProgre),(Ejercicio))} </script> <!--Script que se coloca al final de los radios, jala los valores que se colocaron anteriormente, trayendolos cuando se recargue la página-->
        <FORM METHOD="POST">
        <h2>Nisl tincidunt eget nullam non.<h2><br><br> <!--Instrucciones del ejercicio de los input text-->
        <p><b>Mi eget mauris pharetra et.</p></b><br><!--Pregunta-->
        <input type="text" name="pYeYtxtY" id="pYeYtxtY"><br><br> <!--Los input text tienen la nomenclatura de p(progresion y se coloca el número de esta)e(número de ejercicio)txt(indica el text input que es) tanto en name como id-->
        <button type="button" onclick="colores(arraypxex, (NumProgre), (NumEjer));" id="PxExREV" name="PxExREV" class="buttonsResRev"><img id = "btnSubmit" src="images/Revisar.png" width="140px" alt="" onmouseover="this.src = 'images/RevisarSobre.png'" onmouseout="this.src = 'images/Revisar.png'"></button><!--Los botones para los input text son diferentes, pues el id y el name tendrán la nomenclatura de P(progresion)E(ejercicio)REV el REV es por revisar, este es el botón de revisar, además para la función solicida la matriz declarada al inicio, el número de la progresión y el número de ejercicio-->
        <button type = "button" onclick="eliminartodo((NumProgre), (NumEjer), (NumText))" id = "btnReset" name = "" class="buttonsResRev"><img src = "images/VolverIntentar.png" width="140px" onmouseover="this.src = 'images/VolverIntentarSobre.png'" onmouseout="this.src = 'images/VolverIntentar.png'"></button><!--Para el botón de volver a intentar se llama a la función eliminartodo, solicita los datos del número de la progresión, el número del ejercicio y finalmente la cantidad de input text que contiene el ejercicio-->
        <button type="button" class="buttonsResRev" id = "btnPDF" onclick="GenerarPDF((NumProgre), (NumEjer), arraypxex, DatosFinalesPDF)"><img src="images/pdfKaxie.png"  id = "btnPDF" width="90px" alt="" onmouseover="this.style.setProperty('-webkit-filter', 'drop-shadow(2px 2px 5px rgba(0, 38, 81, 0.7))'); this.style.setProperty('transform', 'scale(1.08)');" onmouseout="this.style.removeProperty('-webkit-filter'); this.style.removeProperty('transform');"></button></FORM><!--Para generar el pdf requiere el número de la progresión, el número del ejercicio, la matriz declarada al inicio y DatosFinalesPDF-->
        <div class="Calificacion" id="pxeximg"></div><!--Se colocará como id p(número de progresión)e(número de ejercicio)img para lograr colocar la calificación e imagen correspondiente-->
        <script> TraerCalificacionPHP((numProgre), (NumEjer)); </script> <!--Para traer el valor de la calificación se utiliza la función de TraerCalificacionPHP con el número de la progresión y número de ejercicio-->
        <CENTER><img id="resu" src="images/progresionximg/NombreX.png" WIDTH="100%"></CENTER><br> <!--Parte del resumen de la progresión-->
            <div class = "container_ir_evaluacion"><div> <!--Apartado para ir a la evaluación final-->
                <img src = "images/KaxieArcoiris.png" width = "200px"><br>
                <p>¿Listo para la prueba final? ¡Recuerda tomar tu tiempo para contestar cada enunciado! Esta vez serán tomados en cuenta para comparar tu progreso.</p></div>
            <center><button type = "button" class="btngotoEval"><a href = "evaluacionX.php"> Ir a la evaluación</a><br></button></center>
        </div>
        <script> TraerDatos(14, arrayp14e1, 4); </script></section> <!--Función para traer los datos del localstorage para rellenar los input text, se colocará casi al final de la progresión-->
        <div id="fot"><?php include("footer.php"); ?></div> <!--Footer del sitio web, se encuentra en todas las páginas-->
</body></html>