<?php require ('ifSession.php');  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style3.css">
    <link rel="stylesheet" href="css/style4.css">
    <link rel="stylesheet" href="css/style5.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
<link rel="icon" href="./images/logo.ico" type= "image/x-icon">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.6/jspdf.plugin.autotable.min.js"></script>
<script src="js/jquery-3.7.1.js"></script>
    <title>Progresion 10</title>
</head>
<body>

 <?php
 if ($indicador_bd) {
         dialog_abrir('10');
     }else{
         echo "<script>
         document.addEventListener('DOMContentLoaded', () => {
     let btnPdf = document.querySelectorAll('[id = btnPDF]');
     btnPdf.forEach((btnPdf) => {
         btnPdf.style.display ='none';
       });
   }); 
     </script>";
     }
     ?>

     <script>var IndicadorBDJS = '<?php echo $indicador_bd;?>';
        var arrayp10e1 = [[],[15,5.66,1.43,10.31]];
    </script>
    </script>
     <script src="js/script7.js"></script>
     <script>
         var DatosFinalesPDF = "<?php DatosPDF(); ?>";
     </script>
 
<aside class="aside" id="aside10"> 
        <section id="s1">
        Pro
        gre
        sión 
        10
        </section>
        <br>
            <Section class="sectionAs">
                <P>Revisa el teorema del triángulo de Napoleón, considerándolo como un problema-meta 
                    en el que se aplican resultados de la geometría euclidiana como: Teorema de 
                    Pitágoras, criterios de congruencia y semejanza de triángulos, caracterizaciones 
                    de cuadriláteros concíclicos, entre otros.</p><br>

                    <img src="images/progresion10img/P10.png" WIDTH=100%><br><br>
                <b><h2>Metas:</h2></b><br>
                <H3>M1</H3>
                <P>Observa y obtiene información de una situación o fenómeno para 
                    establecer estrategias o formas de visualización que ayuden a entenderlo.</P>
                <BR>
                <H3>M4</H3>
                <P> Argumenta a favor o en contra de afirmaciones acerca de 
                    situaciones, fenómenos o problemas propios de la matemática, de 
                    las ciencias o de su contexto.</P><BR>

                <H3>M2</H3>
                <P>Socializa con sus pares sus conjeturas, descubrimientos o procesos en 
                    la solución de un problema tanto teórico como de su entorno.</P>
                <BR>
                <H3>M3</H3>
                <P>Organiza los procedimientos empleados en la solución de un problema 
                    a través de argumentos formales para someterlo a debate o a evaluación.</P><BR>
            
                <b><h2>Categorías:</h2></b><br>
                <H3>C2</H3>
                <P>Procesos de intuición y razonamiento.</P><BR>

                <H3>C4</H3>
                <P>Interacción y lenguaje matemático.</P><BR>

                <b><h2>Subcategorías:</h2></b><br>
                <H3>S1</H3>
                <P>Capacidad para observar y conjeturar.</P><BR>

                <H3>S2</H3>
                <P>Pensamiento intuitivo.</P><BR>

                <H3>S3</H3>
                <P>Pensamiento formal.</P><BR>

                <H3>S1</H3>
                <P>Registro escrito, simbólico, algebraico e iconográfico.</P><BR>

                <H3>S3</H3>
                <P>Ambiente matemático de comunicación.</P><BR>

                
            </section>
            <footer class="anteriorsig">
                <div class="panterior"><a href="progresion9.php"><img src = "images/Anterior.png" WIDTH=47px style="margin-bottom: -18px;">Anterior</a></div>
                <div class="psiguiente"><a href="progresion11.php">Siguiente<img src="images/Siguiente.png" WIDTH=47px style="margin-bottom: -18px"></a></div>
            </footer>
    </aside>


        <section class="textP">

        <center> <div id="indice10" class="indice"> 
            <p>
                &emsp;&emsp;&emsp;&emsp;&ensp;Índice<br>
                <a href="#cc"> Conceptos clave</a><br>
                <a href="#quees"> ¿De que habla del teorema de<br> Napoleón?</a><br>
                <a href="#ejemplo"> Ejemplo</a><br>
                <a href="#ejer"> Ejercicios</a><br>
                <a href="#resu"> Resumen </a><br>
            </p>
        </div> </center>


        <center> <div class="indice"> </div> </center>
            <div class="conceptosclave" id="cc">
                <div>
                    <img src= "images/KCClave.png" WIDTH="180px" HEIGHT="auto" style="margin-right: 20px;">
                </div>
            <div class="conceptoscla">
            <h1>Conceptos Clave</h1>
            <P><b>Semejanza.</b> Misma forma y distinto tamaño.<br>
<b>Homotecia.</b> Ampliación.<br>
<B>Teorema.</b> Una proposición que puede ser demostrada lógicamente.<br>
            </p>
            </div>
            </div>

<!--ESPACIO PARA EL VIDEO>

            <div class="videoProgre">
            <div class="videoEsti"><video src="" controls width="100%"></video></div>
            </div>
            

<FIN ESPACIO PARA EL VIDEO-->


            <h1>¿De qué habla el teorema de Napoleón?</h1>
            <P>
                <div class=lados10 id="quees">
            <b>Si sobre los lados 
            de un triángulo cualquiera se construyen triángulos equiláteros entonces los 
            centros de estos triángulos son también vértices de un triángulo equilátero.</b></div><br><BR>
            <CENTER><img src="images/progresion10img/TeoNa.gif" WIDTH="30%" id="ejemplo"></CENTER> <BR><BR>
Los triángulos pueden ser tanto internos como externos, los centros de esos triángulos 
siempre formarán un triángulo equilátero, y si restamos las áreas del triángulo externo 
con la del triángulo interno, darán como resultado el área del triángulo original.<br><br>


Hay varias formas de demostrar el teorema de Napoleón, una forma sencilla y rápida es 
al ya tener nuestro triángulo formado por los centros de los triángulos, digamos 
que es nuestro triángulo MNL, el  lado MN, lo giramos 30° en sentido de las agujas 
del reloj, y con ello hacemos una homotecia de raíz cuadrada de tres con centro en A, 
con homotecia con centro nos referimos a que es una ampliación, la razón indica cuánto 
se va a ampliar, tomamos la figura y por cada punto trazamos una línea que une el 
centro de la homotecia con el punto, se mide la distancia y se multiplica por la razón 
de la homotecia, obteniendo un punto, si hacemos eso con todos los puntos obtendremos 
una copia ampliada de la figura.<br><br>
Bueno, al momento de girar el lado MN y hacer la homotecia, obtenemos la línea de segmento 
 CZ, y después haremos lo mismo con el lado LN, pero esta vez lo giraremos en el sentido 
 contrario de las agujas del reloj, y hacemos la homotecia ahora con respecto al punto B, y 
 queda exactamente lo mismo que antes, el giro y la homotecia en cada caso son equivalentes, 
 eso significa que tienen la misma simetría espiral y si contamos con giro y homotecias 
 equivalentes que nos dan el mismo segmento, significa que los segmentos de partida eran 
 iguales, por ende son del mismo tamaño, y si vemos cómo hemos obtenido los giros, tenemos 
 que el ángulo que forman ambos lados es de 60°, por ello es un triángulo equilátero.<br><br>

 Hay varias variantes de este teorema por ejemplo el teorema de Petr-Douglas-Neumann, el 
 cual plantea que sean triángulos isósceles (dos lados iguales y uno diferente) agregando que 
 existe el de Jha Savaran que plantea el problema a partir de un hexágono.


            </p>
            <br>
            
            <div class="imgejercicios">
                <div>
                    <img  id="ejer" src="images/Ejercicios.png" WIDTH="180px" HEIGHT="auto" style="margin-right: 20px;">
                </div>
                <div id="ejercicios">
                    <h1>Ejercicio</h1>
                </div>
            </div>

            <FORM METHOD=POST>
            <p><h1>Responde las siguientes preguntas.</h1></p><br>

            <P><b>1.- ¿De qué trata el teorema de Napoleón?</b></p><br>
            <INPUT TYPE="radio" name="p10e1r1" id="p10e1r1a1" value="1"> <label for="p10e1r1a1">Al dibujar triángulos equiláteros 
                en cada uno de los lados de un triángulo cualquiera, los centros que los unen dichos 
                triángulos formarán siempre un triángulo equilátero.</label> <BR><br>
            <INPUT TYPE="radio" name="p10e1r1" id="p10e1r1a2" value="2"> <label for="p10e1r1a2">La suma de los cuadrados de los 
                catetos de un triángulo rectángulo es igual a la hipotenusa</label><BR><br>
            <INPUT TYPE="radio" name="p10e1r1" id="p10e1r1a3" value="3"> <label for="p10e1r1a3">Toda recta paralela a un lado 
                de un triángulo, forma con los otros dos lados o con sus prolongaciones otro triángulo que 
                es semejante al triángulo dado.</label><BR><br><br>

            <P><b>2.- ¿Qué es una homotecia?</b></p><br>
            <INPUT TYPE="radio" name="p10e1r2" id="p10e1r2a1" value="3"> <label for="p10e1r2a1"> Una potencia. </label> <BR><br>
            <INPUT TYPE="radio" name="p10e1r2" id="p10e1r2a2" value="2"> <label for="p10e1r2a2"> Una onomatopeya. </label><BR><br>
            <INPUT TYPE="radio" name="p10e1r2" id="p10e1r2a3" value="1"> <label for="p10e1r2a3"> Una ampliación. </label><BR><br><br>

            <P><b>3.- ¿Por cuántos grados se tiene que girar el lado 
                del triángulo en la forma de comprobación mencionada?</b></p><br>
            <INPUT TYPE="radio" name="p10e1r3" id="p10e1r3a1" value="1"> <label for="p10e1r3a1"> 30° </label> <BR><br>
            <INPUT TYPE="radio" name="p10e1r3" id="p10e1r3a2" value="2"> <label for="p10e1r3a2"> 60° </label><BR><br>
            <INPUT TYPE="radio" name="p10e1r3" id="p10e1r3a3" value="3"> <label for="p10e1r3a3"> 45° </label><BR><br><br>

            <P><b>4.- ¿En qué sentido se tiene que girar?</b></p><br>
            <INPUT TYPE="radio" name="p10e1r4" id="p10e1r4a1" value="1"> <label for="p10e1r4a1"> De las manecillas del reloj. </label> <BR><br>
            <INPUT TYPE="radio" name="p10e1r4" id="p10e1r4a2" value="2"> <label for="p10e1r4a2"> Contrario a las manecillas del reloj. </label><BR><br><br>

            <P><b>5.- ¿Qué es un triángulo equilátero?</b></p><br>
            <INPUT TYPE="radio" name="p10e1r5" id="p10e1r5a1" value="2"> <label for="p10e1r5a1"> Ninguno de sus lados son iguales. </label> <BR><br>
            <INPUT TYPE="radio" name="p10e1r5" id="p10e1r5a2" value="1"> <label for="p10e1r5a2"> El que cuenta con todos sus lados y ángulos iguales. </label><BR><br>
            <INPUT TYPE="radio" name="p10e1r5" id="p10e1r5a3" value="3"> <label for="p10e1r5a3"> Tiene dos lados iguales. </label><BR><br><br>

            <P><b>6.- ¿Cuál es una de las variantes de este teorema?</b></p><br>
            <INPUT TYPE="radio" name="p10e1r6" id="p10e1r6a1" value="3"> <label for="p10e1r6a1"> Teorema de Euclides </label><BR><br>
            <INPUT TYPE="radio" name="p10e1r6" id="p10e1r6a2" value="1"> <label for="p10e1r6a2"> Teorema de Jha Savaran </label><BR><br> <!--Correcta-->
            <INPUT TYPE="radio" name="p10e1r6" id="p10e1r6a3" value="2"> <label for="p10e1r6a3"> Teorema de Pitágoras </label><BR><br><br>

            <button type="button" onclick="ColoresRadios(6, 10, 1);"class="buttonsResRev"><img id = "btnSubmit" src="images/Revisar.png" width="140px" alt="" onmouseover="this.src = 'images/RevisarSobre.png'" onmouseout="this.src = 'images/Revisar.png'"></button>
            <button type = "button" onclick="BorrarRadios(10,1,6);" id = "btnReset" name = "" class="buttonsResRev"><img src = "images/VolverIntentar.png" width="140px" onmouseover="this.src = 'images/VolverIntentarSobre.png'" onmouseout="this.src = 'images/VolverIntentar.png'"></button>
            <button type="button" class="buttonsResRev" id = "btnPDF" onclick="pdfForRbd(10, 1, 6, DatosFinalesPDF);" ><img src="images/pdfKaxie.png"  id = "btnPDF" width="90px" alt="" onmouseover="this.style.setProperty('-webkit-filter', 'drop-shadow(2px 2px 5px rgba(0, 38, 81, 0.7))'); this.style.setProperty('transform', 'scale(1.08)');" onmouseout="this.style.removeProperty('-webkit-filter'); this.style.removeProperty('transform');"></button>
        
            </FORM>
            <div class="Calificacion" id = "p10e1img"></div>
            <script>
                TraerRadios(1,10);
                if(IndicadorBDJS){TraerCalificacionPHP(10,1)}
            </script>

            <h1>Triángulos, congruencia y semejanza.</h1>
            <p>Dada la introducción al teorema de Napoleón, comencemos con el tema 
                de triángulos, congruencia y semejanza.</p>

            <p>La congruencia entre figuras se hace notal cuando los lados y ángulos coinciden.</p>
            <img src="images/progresion10img/congruencia.png" WIDTH=30%>
            <p>En cambio cuando son semejantes lo único que es igual son los ángulos, sus lados 
                solamente proporcionales</p>

            <p>La razón de semejanza es la razón se proporcionalidad entre los lados de la figura.</p>
            <img src="images/progresion10img/semejanza.png" WIDTH=30%>
            <p><h1>Criterios de semejanza:</h1></p>
            <div class=lados10 id="quees">
                Fórmulas para la semejanza entre triángulos:<br>
                <center><img src="images/progresion10img/formula.png" WIDTH=80%><center><br>
                <center><math style = "font-size: 30px; font-family: arial;"><mfrac><mn>A'B'</mn><mn>AB</mn></mfrac></math>=
                <math style = "font-size: 30px; font-family: arial;"><mfrac><mn>A'C'</mn><mn>AE</mn></mfrac></math>=
                <math style = "font-size: 30px; font-family: arial;"><mfrac><mn>B'C'</mn><mn>BE</mn></mfrac></math></center><br>
                Igualdades entre segmentos de los triángulos.
            </div>
            <br>
            <div class="lados10" id="quees">
                Para calcular la homotecia (la ampliación en una semejanza), se realiza al dividir
                el valor del lado similar mayor con el lado menor similar.
            </div>
            <p><b>Criterio AA.</b><br>
            Si dos de sus ángulos son iguales.<br>
            <img src="images/progresion10img/semejanza-AA.png" WIDTH=30%><br>
            <b>Criterio LLL.</b><br>
            Si sus tres lados son proporcionales.<br>
            <img src="images/progresion10img/semejanza-LLL.png" WIDTH=30%><br>
            <b>Criterio LAL.</b><br>
            Si dos de sus lados son proporcionales y el ángulo comprendido entre ellos es congruente.</p>
            <img src="images/progresion10img/semejanza-LAL.png" WIDTH=30%><br>

            <p><h1>Criterios de congruencia:</h1></p>
            <p><b>LAL (lado, ángulo, lado)</p></b>
            <p>Dos triángulos son congruentes cuando dos de sus ladows son iguales como el ángulo 
            comprendido entre estos.</p>
            <img src="images/progresion10img/congruencia-LAL.png" WIDTH=30%><br>
            <p><b>ALA (ángulo, lado, ángulo)</p></b>
            <p>Dos triángulos son congruentes cuando dos ángulos interiores y el lado entre ellos tienen 
                la misma longitud y tamaño.</p>
                <img src="images/progresion10img/congruencia-ALA.png" WIDTH=30%><br>
            <p><b>LLL (lado, lado, lado)</p></b>
            <p>Dos triángulos son congruentes si sus tres lados son iguales.</p>
            <img src="images/progresion10img/congruencia-LLL.png" WIDTH=30%><br>


        <h2> Semejanza </h2><br>
        Como se mencionó la semejanza es la igualdad entre ángulos, no entre lados. 
        Por ejemplo, para hacer una figura semejante a un triángulo, se pueden 
        utilizar los criterios de semejanza mostrados anteriormente para obtener
         el valor de algún dato faltante, los ángulos siempre serán iguales.

         <div class="imgejercicios">
                <div>
                    <img  id="ejer" src="images/Ejercicios.png" WIDTH="180px" HEIGHT="auto" style="margin-right: 20px;">
                </div>
                <div id="ejercicios">
                    <h1>Ejercicio</h1>
                </div>
            </div>


        <FORM METHOD="POST">
        <h2>Encuentra el valor de los segmentos de los triángulos.<h2><br><br>

        <p><b>¿Cuánto vale BE?</p></b><br>
        <img src="images/progresion10img/1Ejercicio2.png" WIDTH="50%"><br>
        BE: <input type="text" name="p10e2txt1" id="p10e2txt1"><br><br>

        <p><b>Basandose en lso siguientes triángulos.<br>¿Cuál es el valor del lado AE?</p></b><br>
        <img src="images/progresion10img/2Ejercicio2.png" WIDTH="50%"><br>
        AE: <input type="text" name="p10e2txt2" id="p10e2txt2"><br><br>

        <p><b>¿Cuál es el valor de su homotecia?</p></b><br>
        <img src="images/progresion10img/3Ejercicio2.png" WIDTH="50%"><br>
        Homotecia de: <input type="text" name="p10e2txt3" id="p10e2txt3"><br><br>

        <p><b>¿Cuánto vale A'B'?</p></b><br>
        <img src="images/progresion10img/4Ejercicio2.png" WIDTH="50%"><br>
        A'B': <input type="text" name="p10e2txt4" id="p10e2txt4"><br><br>

        <button type="button" onclick="colores(arrayp10e1, 10, 2);" id="P14E2REV" name="P14E2REV" class="buttonsResRev"><img id = "btnSubmit" src="images/Revisar.png" width="140px" alt="" onmouseover="this.src = 'images/RevisarSobre.png'" onmouseout="this.src = 'images/Revisar.png'"></button>
        <button type = "button" onclick="eliminartodo(10, 2, 4)" id = "btnReset" name = "" class="buttonsResRev"><img src = "images/VolverIntentar.png" width="140px" onmouseover="this.src = 'images/VolverIntentarSobre.png'" onmouseout="this.src = 'images/VolverIntentar.png'"></button>
        <button type="button" class="buttonsResRev" id = "btnPDF" onclick="GenerarPDF(10, 2, arrayp10e1, DatosFinalesPDF)"><img src="images/pdfKaxie.png"  id = "btnPDF" width="90px" alt="" onmouseover="this.style.setProperty('-webkit-filter', 'drop-shadow(2px 2px 5px rgba(0, 38, 81, 0.7))'); this.style.setProperty('transform', 'scale(1.08)');" onmouseout="this.style.removeProperty('-webkit-filter'); this.style.removeProperty('transform');"></button>
        
    </FORM>

    <div class="Calificacion" id="p10e2img"></div>

        <script>
            TraerCalificacionPHP(10, 2);
        </script>

            <CENTER><img id="resu" src="images/progresion10img/Progre10.png" WIDTH="100%"></CENTER>
<br> 
            <div class = "container_ir_evaluacion">
            <div>
                <img src = "images/KaxieArcoiris.png" width = "200px"><br>
                <p>¿Listo para la prueba final? ¡Recuerda tomar tu tiempo para contestar cada enunciado! Esta vez serán tomados en cuenta para comparar tu progreso.</p>
            </div>
            <center>
                <button type = "button" class="btngotoEval">
                    <a href = "evaluacion10.php"> Ir a la evaluación</a><br>
                </button>
            </center>
        </div>
        </section>

        <div id="fot">
            <?php
            include("footer.php");
            ?>
        </div>

</body>
</html>