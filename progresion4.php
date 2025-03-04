<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style3.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link rel= "icon" href=."images/logo.ico" type="image/x-icon">
    <title> Progresion 4 </title>
</head>
<body>
<?php
    require ('ifSession.php');
?>
   <script src="js/script11.js"></script>
    <aside class="aside" id="aside4"> 
    <section id="s1">
        Pro
        gre
        sión 
        4
        </section>
        <br>
            <section class="sectionAs">
                <P>Explica algunas relaciones entre números enteros utilizando conceptos como el de divisibilidad, 
                    el de número primo o propiedades generales sobre este conjunto numérico, apoyándose del uso 
                    adecuado del lenguaje algebraico.
                </p>
                <div class="div1">
                <img  class ="kaxi4" src="images/P4.png"  id="KaxieP4" WIDTH=100%> 
                </div>
                <b><h3> Metas </h3></b><br>
                <H3>M2</H3>
                <P>Analizar los resultados obtenidos al aplicar procedimientos algoritmicos propios del Pensamiento 
                    Matemático en la resolución de problematicas teóricas y su contexto.
                </P>
                <H3>M3</H3>
                <P>Comprueba los procedimientos usados en la resolución de problemas utilizando diversos métodos, 
                    empleando recursos tecnológicos o la interacción con sus pares.
                </P>
                <H3>M3</H3>
                <P>Aplica procedimientos, técnicas y lenguaje matemático para la solución de problemas propios del 
                    Pensamiento Matemático, de Áreas de Conocimiento, <br>Recursos Sociocognitivos, Recursos Socioemocionales 
                    y de su entorno.
                </P>
                <b><h3> Categorías </h3></b><br>
                <H3>C1</H3>
                <P>Procedural
                <H3>C3</H3>
                <P>Solución de problemas y modelación
                <b><h3> Subcategorías </h3></b><br>
                <H3>S1</H3>
                <P>Elementos aritmético-algebraicos.</P>
                <H3>S4</H3>
                <P> Manejo de datos e incertidumbre.</P>
                <H3>S1</H3>
                <P> Uso de modelos.</P>
               
            </section>
            <footer class="anteriorsig">
                <div class="panterior"><a href ="progresion3.php"><img src="./images/Anterior.png" width=47px style="margin-bottom: -18px;">Anterior</a></div>
                <div class="psiguiente"><a href ="progresion5.php">Siguiente<img src="./images/Siguiente.png" width=47px style="margin-bottom: -18px;"></a></div>
            </footer>
    </aside>

    <section class="textP">
    <center> <div id= "indice4" class="indice"> 
            <p>
                &emsp;&emsp;&emsp;&emsp;Índice<br>
                <a href="#cc4">Conceptos clave</a><br>
                <a href="#quees4">¿Qué es la divisibilidad?</a><br>
                <p class="sangriindice"><a href="#ala4">Criterios de divisibilidad</a></p>
                <p><a href="#queson4">Números primos</a><br></p>
                <p class="sangriindice"><a href="#ejerc4">Ejercicios</a></p>
                <p><a href="#Res">Resumen de la progresión</a></p>
                
                
            </p>
    </center></div> 
            <div class="conceptosclave">
                <div>
                   <img src="images/KCClave.png" width=180px heigth=auto style="margin-right: 20px;"> 
                </div>
            <div class= "ceonceptoscla">
                <h1 id="cc4">Conceptos clave</h1>
                <P>Números enteros. Conjunto numérico que contiene a la totalidad de los números naturales, a sus inversos negativos y al cero.</P>
                <P>Divisibilidad.  Propiedad de los números enteros (números sin decimales) de dividirse por otro número entero y que su resultado sea a su vez un número entero.</P>
                <P>Números primos. Son aquellos que solo son divisibles entre ellos mismos y el 1.</P> 
                <P>Conjunto númerico. Agrupaciones que guardan una serie de propiedades estructurales para cada conjunto. </P> 
                <P>Lenguaje algebraico. forma de las matemáticas que escribimos con letras, números, potencias y signos.</P>  
            </div>
        </div>
        <br>
        <h1 id="quees4">¿Qué es la divisibilidad?</h1>
        <P>La divisibilidad en matemáticas se refiere a la propiedad de los números enteros (números sin decimales) de ser divididos por otro número entero, 
        produciendo un resultado entero. Para determinar si un número puede dividirse entre otro, se utilizan criterios específicos de divisibilidad.
        <br>

        <br>
        <center><h2 id="ala4">Algunos criterios de divisibilidad son:</h2>
        <div class="nota">
        <p>Criterios de divisibilidad del número 2.</p>
        <ul>
            <li>Un número es divisible por 2 si termina en 0 o cifra par.
                <ul>
                    <li>2, 12, 22, 32... terminan en 2</li>
                    <li>4, 14, 24, 34... terminan en 4</li>
                    <li>6, 16, 26, 36... terminan en 6</li>
                    <li>8, 18, 28, 38... terminan en 8</li>
                    <li>10, 20, 30, 40... terminan en 0</li>
                    <li>780, 438, 56, 4356...</li>
                </ul>
            </li>
        </ul>
        <p><br>Criterios de divisibilidad del número 3.</p>
        <ul>
            <li>Un número es divisible por 3 si la suma de sus cifras es múltiplo de 3.
                <ul>
                    <li>3, 12, 21, 30... sus cifras suman 3</li>
                    <li>6, 15, 24, 33... sus cifras suman 6</li>
                    <li>9, 18, 21, 36... sus cifras suman 9</li>
                </ul>
            </li>
        </ul>
        <p><br>Criterios de divisibilidad del número 4</p>
        <ul>
            <li>Un número es divisible por 4 si sus dos últimas cifras son 00 o un múltiplo de 4.
                <ul>
                    <li>8100 es divisible entre 4, porque termina en 00</li>
                    <li>23824 es divisible entre 4, porque termina en 24</li>
                    <!-- <li>8100 es divisible entre 4, porque termina en 325</li> -->
                    <li>2518, 900, 504, 116...</li>
                </ul>
            </li>
        </ul>
        <p><br>Para saber si un número es divisible por 10 o pr 5, tampoco necesitamos hacer la dvisión. </P>
        <ul>
            <li>Un número es divisible por 5 si termina en 0 o en 5.
                <ul>
                    <li>5, 15, 25, 35... terminan en 5</li>
                    <li>10, 20, 30, 40... terminan en 0</li>
                </ul>
            </li>
        </ul>
        <p><br>Criterios de divisibilidad del número 6.</p>
        <ul>
            <li>Tiene que cumplir dos condiciones, la primera es que tiene que ser divisible por 2, es decir,
                tiene que ser número par. Segundo tiene que ser divisible por 3, es decir, la suma de sus dígitos tiene
                que ser 3 o múltiplo de 3.
                <ul>
                    <li>72 termina en número par y 7 + 2 = 9/3 = 3</li>
                    <li>304470 termina en número par y 3 + 0 + 4 + 4 + 7 + 0 = 18/3 = 6</li>
                    <li>9102/6 = 1517 el resultado debe ser entero</li>
                </ul>
            </li>
        </ul>
        <p><br>Criterios de divisibilidad del número 7.</p>
        <ul>
            <li>Hay que restar el número sin la cifra de las unidades y el doble de la cifra de las unidades.
                Si el resultado es 0 o múltiplo de 7 entonces el número es divisible entre 7.
                <ul>
                    <li>8274 si es divisible entre 7</li>
                    <li>105 es múltiplo de 7</li>
                    <li>343, 15, etc.</li>
                </ul>
            </li>
        </ul>
        <p><br>Criterios de divisibilidad del número 8.</p>
        <ul>
            <li>Hay que comprobar que sus tres últimas cifras sean divisibles entre 8. 
                Si sus tres últimas cifras son divisibles entre 8 entonces también es divisible entre 8.
                <ul><br>
                    <li>Tenemos 2 criterios de divisibilidad del número 8</li>
                    <li><h4>Criterio 1:</h4></li>
                    <ul>
                        <li>86064, 70000, 1160, 12096</li>
                        <li>Todos estos números son divisibles por 8, porque sus tres útimas cifras, o bien son 000, o forman un número que es múltiplo de 8.</li>
                    </ul>
                    <li><h4>Criterio 2</h4></li>
                    <ul>
                        <li>432, 1008, 5096, 1800</li>
                        <li>Todos estos números son divisibles por 8, porque sus mitades son divisibles entre 4</li>
                    </ul>
                </ul>
            </li>
        </ul>
        <p><br>Criterios de divisibilidad del número 9</p>
        <ul>
            <li>Cuando la suma de sus dígitos es 9 o múltiplo de 9.
                <ul>
                    <li>279, 81, 2583, 5877</li>
                    <li>Todos estos números son divisibles porque al sumar sus cifras se obtiene un múltiplo de 9.</li>
                </ul>
            </li>
        </ul>
        <p><br>Criterios de divisibilidad del número 10</p>
        <ul>
            <li>Un número es divisible por 10, si termina en 0.
                <ul>
                    <li>10, 40, 70, 100...</li>
                    <li>20, 50, 80, 110... todos terminan en 0.</li>
                    <li>30, 60, 90...</li>
                </ul>
            </li>
        </ul>

        </div>
        <br><br>
        </center>
        <div id="queson4" class="nota2">
            <p><h3>¿Qué son los números primos?</h3></p>
        <p><br>Los números primos son números divisibles entre ellos mismos y el 1, si los intentas 
        dividir entre otros números el resultado no es entero, dicho de otra forma se obtiene un resto distinto a cero,
         los números primos son 2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31,...</p>
        </div>
<br><br>
        <div class="imgejercicios">
            <div>
                <img id="ejerc4" src="./images/Ejercicios.png" width="180px" height="auto" style="margin-rigth:20px;">
            </div>
            <div id="ejercicios"> <h1>Ejercicios</h1></div>
        </div>
        <p><b><br>1.Siguiendo los criterios de divisibilidad y recordando los números primos, comprueba si las siguientes
            afirmaciones son verdaderas o falsas (Si o No):
        </p></b>
        <form method="post">
    <div class="columne42">
    
        <p><br>1780 es divisible por 2:</p>
        <input type="radio" name="p4e1r1" id=p4e1r1a1 value=1> <label for="p4e1r1a1">sí</label>
        <br>
        <input type="radio" name="p4e1r1" id=p4e1r1a2 value=2> <label for="p4e1r1a2">no</label>

        <p><br>732 es divisible por 2:</p>
        <input type="radio" name="p4e1r2" id=p4e1r2a1 value=1> <label for="p4e1r2a1">sí</label>
        <br>
        <input type="radio" name="p4e1r2" id=p4e1r2a2 value=2> <label for="p4e1r2a2">no</label>

        <p><br>3261 es divisible por 3:</p>
        <input type="radio" name="p4e1r3" id=p4e1r3a1  value=1> <label for="p4e1r3a1">sí</label>
        <br>
        <input type="radio" name="p4e1r3" id=p4e1r3a2 value=2> <label for="p4e1r3a2">no</label>

        <p><br>535 es divisible por 2 y por 3:</p>
        <input type="radio" name="p4e1r4" id=p4e1r4a1 value=2> <label for="p4e1r4a1">sí</label>
        <br>
        <input type="radio" name="p4e1r4" id=p4e1r4a2 value=1> <label for="p4e1r4a2">no</label>

        <p><br>27 es divisible por 4:</p>
        <input type="radio" name="p4e1r5" id=p4e1r5a1 value=2> <label for="p4e1r5a1">sí</label>
        <br>
        <input type="radio" name="p4e1r5" id=p4e1r5a2 value=1> <label for="p4e1r5a2">no</label>

        <p><br>58 es divisible por 5:</p>
        <input type="radio" name="p4e1r6" id=p4e1r6a1 value=2> <label for="p4e1r6a1">sí</label>
        <br>
        <input type="radio" name="p4e1r6" id=p4e1r6a2 value=1> <label for="p4e1r6a2">no</label>

        <p><br>31 es divisible por 5:</p>
        <input type="radio" name="p4e1r7" id=p4e1r7a1 value=2> <label for="p4e1r7a1">sí</label>
        <br>
        <input type="radio" name="p4e1r7" id=p4e1r7a2 value=1> <label for="p4e1r7a2">no</label>

        <p><br>136 es divisible por 6:</p>
        <input type="radio" name="p4e1r8" id=p4e1r8a1 value=2> <label for="p4e1r8a1">sí</label>
        <br>
        <input type="radio" name="p4e1r8" id=p4e1r8a2 value=1> <label for="p4e1r8a2">no</label>

        <p><br>1448 es divisible por 6:</p>
        <input type="radio" name="p4e1r9" id=p4e1r9a1 value=2> <label for="p4e1r9a1">sí</label>
        <br>
        <input type="radio" name="p4e1r9" id=p4e1r9a2 value=1> <label for="p4e1r9a2">no</label>

        <p><br>35 es divisible por 7:</p>
        <input type="radio" name="p4e1r10" id=p4e1r10a1 value=1> <label for="p4e1r10a1">sí</label>
        <br>
        <input type="radio" name="p4e1r10" id=p4e1r10a2 value=2> <label for="p4e1r10a2">no</label>

        <p><br>16500 es divisible por 7:</p>
        <input type="radio" name="p4e1r11" id=p4e1r11a1 value=2> <label for="p4e1r11a1">sí</label>
        <br>
        <input type="radio" name="p4e1r11" id=p4e1r11a2 value=1> <label for="p4e1r11a2">no</label>

        <p><br>44 es divisible por 8:</p>
        <input type="radio" name="p4e1r12" id=p4e1r12a1 value=2> <label for="p4e1r12a1">sí</label>
        <br>
        <input type="radio" name="p4e1r12" id=p4e1r12a2 value=1> <label for="p4e1r12a2">no</label>

        <p><br>3688 es divisible por 8:</p>
        <input type="radio" name="p4e1r13" id=p4e1r13a1 value=1> <label for="p4e1r13a1">sí</label>
        <br>
        <input type="radio" name="p4e1r13" id=p4e1r13a2 value=2> <label for="p4e1r13a2">no</label>

        <p><br>98 es divisible por 9:</p>
        <input type="radio" name="p4e1r14" id=p4e1r14a1 value=2> <label for="p4e1r14a1">sí</label>
        <br>
        <input type="radio" name="p4e1r14" id=p4e1r14a2 value=1> <label for="p4e1r14a2">no</label>

        <p><br>11500210 es divisible por 10:</p>
        <input type="radio" name="p4e1r15" id=p4e1r15a1 value=1> <label for="p4e1r15a1">sí</label>
        <br>
        <input type="radio" name="p4e1r15" id=p4e1r15a2 value=2> <label for="p4e1r15a2">no</label>
        <br>
        <p><br>¿60 es número primo?</p>
        <input type="radio" name="p4e1r16" id=p4e1r16a1 value=2> <label for="p4e1r16a1">sí</label>
        <br>
        <input type="radio" name="p4e1r16" id=p4e1r16a2 value=1> <label for="p4e1r16a2">no</label>
        <br>
        <p><br>¿67 es número primo?</p>
        <input type="radio" name="p4e1r17" id=p4e1r17a1 value=1> <label for="p4e1r17a1">sí</label>
        <br>
        <input type="radio" name="p4e1r17" id=p4e1r17a2 value=2> <label for="p4e1r17a2">no</label>
        <br>
        <p><br>¿41 es número primo?</p>
        <input type="radio" name="p4e1r18" id=p4e1r18a1 value=1> <label for="p4e1r18a1">sí</label>
        <br>
        <input type="radio" name="p4e1r18" id=p4e1r18a2 value=2> <label for="p4e1r18a2">no</label>
        <br>
        <p><br>¿20 es número primo?</p>
        <input type="radio" name="p4e1r19" id=p4e1r19a1 value=2> <label for="p4e1r19a1">sí</label>
        <br>
        <input type="radio" name="p4e1r19" id=p4e1r19a2 value=1> <label for="p4e1r19a2">no</label>
        <br>
        <p><br>¿100 es número primo?</p>
        <input type="radio" name="p4e1r20" id=p4e1r20a1 value=2> <label for="p4e1r20a1">sí</label>
        <br>
        <input type="radio" name="p4e1r20" id=p4e1r20a2 value=1> <label for="p4e1r20a2">no</label>
        <br>
        <p><br>¿97 es número primo?</p>
        <input type="radio" name="p4e1r21" id=p4e1r21a1 value=1> <label for="p4e1r21a1">sí</label>
        <br>
        <input type="radio" name="p4e1r21" id=p4e1r21a2 value=2> <label for="p4e1r21a2">no</label>
        <br>
        <p><br>¿87 es número primo?</p>
        <input type="radio" name="p4e1r22" id=p4e1r22a1 value=2> <label for="p4e1r22a1">sí</label>
        <br>
        <input type="radio" name="p4e1r22" id=p4e1r22a2 value=1> <label for="p4e1r22a2">no</label>
        <br>
        <br>
        <button type="submit" value="" class="botonesrevisar" name="p4e1rev" id="p4e1rev"></button>
        <input type="reset" value="" class="botonesreintentar" onclick="eliminartodo()">
           
    </form>
</div>  
                <?php
                if (isset($_POST['p4e1rev'])) {
                    require ('funcionrevradio.php');
                    RevisarRadios(22, 1, 4);//cantidad de reactivos, número de ejercicio y número de progresión
                    //se les debe de dar un value a los radios respuestas correctas value de 1
                }
                ?>
            <br><br>
            <div>
<h1>Arrastra y suelta las etiquetas en el lugar correcto:</h1>

<script src="js/script4_1.js"></script>
<div class="container">
        <div class="text-container">
            <p>
                Un número es divisible entre <span class="dropzone" data-word="5"></span> si su última cifra es 0 o 5. 
                <br><br>
                Un número es divisible entre 9, si su última cifra es <span class="dropzone" data-word="9"></span> o multiplo de <span class="dropzone" data-word="9"></span>
                <br><br>
                Número que tiene que cumplir 2 condiciones: <span class="dropzone" data-word="6"></span>
                <br> <br>
                Un número es divisible por <span class="dropzone" data-word="3"></span> si la suma de sus cifras es múltiplo de 3.
                <br><br>
                ¿Qué número es divisible, para que termine en 0? <span class="dropzone" data-word="10"></span>
                <br><br>
                Si el resultado es 0 o es múltiplo de 7 entonces el número es divisible entre <span class="dropzone" data-word="7"></span> 
                <br><br>
                Un número es divisible por <span class="dropzone" data-word="4"></span> si sus 2 últimas cifras son 00 o un múltiplo de 4.
                <br><br>
                ¿Cuál número tiene más de 1 criterio? <span class="dropzone" data-word="8"></span>¿Qué número de criterio es cúando sus tres últimas son 000?<span class="dropzone" data-word="1"></span> 
                <br><br>
                Un número es divisible por 2 si termina en 0 o en: <span class="dropzone" data-word="par"></span> si su última cifra es 0 o 5. 
                
                
            </p>
        </div>
        <div class="words-container" id="wordsContainer">
            <!-- <div class="word" draggable="true" data-word="5">5</div>
            <div class="word" draggable="true" data-word="9">9</div>
            <div class="word" draggable="true" data-word="9">9</div>
            <div class="word" draggable="true" data-word="6">6</div>
            <div class="word" draggable="true" data-word="3">3</div>
            <div class="word" draggable="true" data-word="10">10</div>
            <div class="word" draggable="true" data-word="7">7</div>
            <div class="word" draggable="true" data-word="4">4</div>
            <div class="word" draggable="true" data-word="8">8</div>
            <div class="word" draggable="true" data-word="1">1</div>
            <div class="word" draggable="true" data-word="par">par</div> -->


           
            <div class="word" draggable="true" data-word="10">10</div>
            <div class="word" draggable="true" data-word="7">7</div>
            <div class="word" draggable="true" data-word="4">4</div>
            <div class="word" draggable="true" data-word="8">8</div>
            <div class="word" draggable="true" data-word="1">1</div>
            <div class="word" draggable="true" data-word="par">par</div>
            <div class="word" draggable="true" data-word="5">5</div>
            <div class="word" draggable="true" data-word="9">9</div>
            <div class="word" draggable="true" data-word="9">9</div>
            <div class="word" draggable="true" data-word="6">6</div>
            <div class="word" draggable="true" data-word="3">3</div>
            
        </div>
    </div>
    <div class="buttons">
        <button class="botonesrevisar" id="checkAnswers"></button>
        <button class="botonesreintentar" id="retry"></button>
    </div>
    <!-- <script src="script4_1.js"></script> -->
<br><br>
            </div>

<br><br><br>
<h2>Resuelve la siguiente ecuación y determina por cuál número es divisible el resultado:</h2>
<p>Según el valor de x, sustituye en la ecuación para comprobar si es correcta y finalmente 
    determina por qué número es divisible el resultado que obtengas en la comprobación.</p><br>
    <p class="texto-rojo">Recuerda que esta es correcta si en ambos miembros de la ecuación se obtiene el mismo número.</p>
   <br>
   <form method="post">
<div class= "columne42">

    <!-- Pregunta 1 es ejercicio 2 por que el drag and drop no cuenta-->
  <h3>2x + 4 = 6 + 3x</h3>
  <input type="radio" name="p4e3r1" id="p4e2r1a1"  value="2"><label for="p4e2r1a1">1</label><br>
  <input type="radio" name="p4e2r1" id="p4e3r1a2" value="3"><label for="p4e3r1a2">5</label><br>
  <input type="radio" name="p4e2r1" id="p4e3r1a3" value="4"><label for="p4e3r1a3">10</label><br>
  <input type="radio" name="p4e2r1" id="p4e3r1a4" value="1"><label for="p4e3r1a4">no es divisible</label><br><!--si-->
<br>
<!-- Pregunta 2 -->
  <h3>4x - 5 = 2 - x</h3>
  <input type="radio" name="p4e2r2" id="p4e2r2a1" value="2"><label for="p4e2r2a1">1</label><br>
  <input type="radio" name="p4e2r2" id="p4e2r2a2" value="1"><label for="p4e2r2a2">no es divisible</label><br><!--si-->
  <input type="radio" name="p4e2r2" id="p4e2r2a3" value="3"><label for="p4e2r2a3">2</label><br>
  <input type="radio" name="p4e2r2" id="p4e2r2a4" value="4"><label for="p4e2r2a4">3</label><br>
  <br>

<!-- Pregunta 3 -->
  <h3>3x - 8 = 4x + 2</h3>
  <input type="radio" name="p4e2r3" id="p4e2r3a1" value="2"><label for="p4e2r3a1">1</label><br>
  <input type="radio" name="p4e2r3" id="p4e2r3a2" value="3"><label for="p4e2r3a2">2</label><br>
  <input type="radio" name="p4e2r3" id="p4e2r3a3" value="1"><label for="p4e2r3a3">no es divisible</label><br><!--si-->
  <input type="radio" name="p4e2r3" id="p4e2r3a4" value="4"><label for="p4e2r3a4">5</label><br>
  <br>

<!-- Pregunta 4 -->
  <h3>5x + 10 = 3 - 2x</h3>
  <input type="radio" name="p4e2r4" id="p4e2r4a1" value="2"><label for="p4e2r4a1">no es divisible</label><br>
  <input type="radio" name="p4e2r4" id="p4e2r4a2" value="3"><label for="p4e2r4a2">1</label><br>
  <input type="radio" name="p4e2r4" id="p4e2r4a3" value="4"><label for="p4e2r4a3">3</label><br>
  <input type="radio" name="p4e2r4" id="p4e2r4a4" value="1"><label for="p4e2r4a4">5</label><br><!--si-->
  <br>


<!-- Pregunta 5 -->
  <h3>2x - 3 = 7 - 4x</h3>
  <input type="radio" name="p4e2r5" id="p4e2r5a1" value="2"><label for="p4e2r5a1">1</label><br>
  <input type="radio" name="p4e2r5" id="p4e2r5a2" value="1"><label for="p4e2r5a2">no es divisible</label><br><!--si-->
  <input type="radio" name="p4e2r5" id="p4e2r5a3" value="3"><label for="p4e2r5a3">2</label><br>
  <input type="radio" name="p4e2r5" id="p4e2r5a4" value="4"><label for="p4e2r5a4">5</label><br>
  <br>


<!-- Pregunta 6 -->
  <h3>6x + 2 = 8 - 2x</h3>
  <input type="radio" name="p4e2r6" id="p4e2r6a1" value="2"><label for="p4e2r6a1">1</label><br>
  <input type="radio" name="p4e2r6" id="p4e2r6a2" value="3"><label for="p4e2r6a2">2</label><br>
  <input type="radio" name="p4e2r6" id="p4e2r6a3" value="1"><label for="p4e2r6a3">no es divisible</label><br><!--si-->
  <input type="radio" name="p4e2r6" id="p4e2r6a4" value="4"><label for="p4e2r6a4">5</label><br>
  <br>


<!-- Pregunta 7 -->
  <h3>x + 5 = 2x - 3</h3>
  <input type="radio" name="p4e2r7" id="p4e2r7a1" value="1"><label for="p4e2r7a1">1</label><br><!--si-->
  <input type="radio" name="p4e2r7" id="p4e2r7a2" value="2"><label for="p4e2r7a2">no es divisible</label><br>
  <input type="radio" name="p4e2r7" id="p4e2r7a3" value="3"><label for="p4e2r7a3">2</label><br>
  <input type="radio" name="p4e2r7" id="p4e2r7a4" value="4"><label for="p4e2r7a4">3</label><br>
  <br>

<!-- Pregunta 8 -->
  <h3>4x - 7 = 2x + 9</h3>
  <input type="radio" name="p4e2r8" id="p4e2r8a1" value="2"><label for="p4e2r8a1">1</label><br>
  <input type="radio" name="p4e2r8" id="p4e2r8a2" value="1"><label for="p4e2r8a2">4</label><br><!--si-->
  <input type="radio" name="p4e2r8" id="p4e2r8a3" value="3"><label for="p4e2r8a3">no es divisible</label><br>
  <input type="radio" name="p4e2r8" id="p4e2r8a4" value="4"><label for="p4e2r8a4">5</label><br>
  <br>

<!-- Pregunta 9 -->
  <h3>3x + 6 = 9 - x</h3>
  <input type="radio" name="p4e2r9" id="p4e2r9a1" value="1"><label for="p4e2r9a1">no es divisible</label><br><!--si-->
  <input type="radio" name="p4e2r9" id="p4e2r9a2" value="2"><label for="p4e2r9a2">1</label><br>
  <input type="radio" name="p4e2r9" id="p4e2r9a3" value="3"><label for="p4e2r9a3">2</label><br>
  <input type="radio" name="p4e2r9" id="p4e2r9a4" value="4"><label for="p4e2r9a4">3</label><br>
  <br>

    <!-- Pregunta 10 -->
  <h3>4x - 2 = 2x + 2</h3>
  <input type="radio" name="p4e2r10" id="p4e2r10a1" value="2"><label for="p4e2r10a1">1</label><br>
  <input type="radio" name="p4e2r10" id="p4e2r10a2" value="3"><label for="p4e2r10a2">no es divisible</label><br>
  <input type="radio" name="p4e2r10" id="p4e2r10a3" value="1"><label for="p4e2r10a3">2</label><br><!--si-->
  <input type="radio" name="p4e2r10" id="p4e2r10a4" value="4"><label for="p4e2r10a4">5</label><br>
  <br>

</div>
<button type="submit" value="" class="botonesrevisar" name="p4e2rev" id="p4e2rev"></button>
<input type="reset" value="" class="botonesreintentar" onclick="eliminartodo()">

 </form> 
 <?php
                if (isset($_POST['p4e2rev'])) {
                    require ('funcionrevradio.php');
                    RevisarRadios(10, 2, 4);//cantidad de reactivos, número de ejercicio y número de progresión
                    //se les debe de dar un value a los radios respuestas correctas value de 1
                }
                ?>
            
            <br><br>

<br><br>
<center>
    <br>
<h1 id="Res">Resumen de la progresión</h1>
 <img src="./images/Progresion4img/M4.png" WIDTH=100%>  
</center>
</section>
<div id="fot">
<?php 
    include("footer.php");
?>
</div>  
      
   
</body>
</html>