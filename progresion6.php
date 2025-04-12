<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style3.css">
    <link rel="stylesheet" href="css/style4.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.6/jspdf.plugin.autotable.min.js"></script>
    <link rel="icon" href="images/logo.ico" type="image/x-icon">
    <script src="js/script7.js"></script>
    <title> Progresion 6 </title>
</head>

<body>
    <?php
    require('ifSession.php');
    if ($indicador_bd) {
        dialog_abrir('6');
    }
    ?>
    <script src='js/jquery-3.7.1.js'></script>
    <script>
        var DatosFinalesPDF = "<?php DatosPDF()
        ;
        ?>";
        //definir matriz con arreglos de las respuestas correctas a cada ejercicio
        var arrayp6e1 = [[2347, 832, 28380, 232, 1028, -107, -4.245, 75.33, 2.68, 0.361], [1, 2, 3]];

    </script>

    <aside class="aside" id="asidex6">
        <section id="s1">
            Pro
            gre
            sión
            6
        </section>
        <br>
        <Section class="sectionAs">
            <P>Revisa desde una perspectiva histórica al conjunto de los números reales, comenzando con la
                consideración de números decimales positivos hasta llegar a la presentación de la estructura de campo
                de los números reales.
            </p>
            <div class="div1">
                <img class="kaxi6" src="images/P6.png" id="KaxieP6" WIDTH=100%>
            </div>
            <b>
                <h3> Metas </h3>
            </b><br>
            <H3>M1</H3>
            <P>Ejecuta cálculos y algoritmos para resolver problemas matemáticos, de las ciencias y de su entorno.
            </P>
            <H3>M1</H3>
            <P>
                Observa y obtiene información de una situación o fenómeno para establecer estrategias o formas
                de visualización que ayuden a entenderlo.
            </P>
            <H3>M2</H3>
            <P>Socializa con sus pares sus conjeturas, descubrimientos o procesos en la solución de un
                problema tanto teórico como de su entorno.
            </P>
            <b>
                <h3> Categorías </h3>
            </b><br>
            <H3>C1</H3>
            <P>Procedural
            <H3>C2</H3>
            <P>Procesos de intuición y razonamiento.</P>
            <H3>C4</H3>
            <P>Interacción y lenguaje matemático.</P>
            <b>
                <h3> Subcategorías </h3>
            </b><br>
            <H3>S4</H3>
            <P>Manejo de datos e incertidumbre.</P>
            <H3>S1</H3>
            <P>Capacidad para observar y conjeturar.</P>
            <H3>S2</H3>
            <P>Pensamiento intuitivo.</P>
            <H3>S3</H3>
            <P>Ambiente matemático de comunicación.</P>
            <!-- <div class="bodfals">
                    <div class="skill">
                        <div class="outer">
                            <div class="inner">
                                <div id ="number">
                                    65%
                                </div>
                            </div>
                        </div>

                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="260px" height="260px">
                    <defs>
                        <linearGradient id="GradientColor">
                            <stop offset="0%" stop-color="#7198f5"/>
                            <stop offset="25%" stop-color="#71c2f5"/>
                            <stop offset="50%" stop-color="#71ecf5"/>
                            <stop offset="75%" stop-color="#71f5d2"/>
                            <stop offset="100%" stop-color="#71f5a5"/>
                        </linearGradient>
                    </defs>
                    <circle cx="100" cy="100" r="70" stroke-linecap="round"/>
                </svg> 
                    </div>
                    
                </div>
                <script src="js/script4.js"></script>
                <center><p> Este es tu porcentaje de avance en la progresión </p></center> -->
        </section>
        <footer class="anteriorsig">
            <div class="panterior"><a href="progresion5.php"><img src="images/Anterior.png" width=47px
                        style="margin-bottom: -18px;">Anterior</a></div>
            <div class="psiguiente"><a href="progresion7.php">Siguiente<img src="images/Siguiente.png" width=47px
                        style="margin-bottom: -18px;"></a></div>
        </footer>
    </aside>
    <section class="textP">
        <center>
            <div id="indice6" class="indice">
                <p>
                    &emsp;&emsp;&emsp;&emsp;Índice<br>
                    <a href="#cc6">Conceptos clave</a><br>
                    <a href="#historia-numeros-reales">Historia de los números<br> reales</a><br>
                    <a href="#numeros-racionales-definicion">Números racionales</a><br>
                <p class="sangriindice"><a href="#numeros-enteros">Números enteros</a></p>
                <p class="sangriindice"><a href="#numeros-fraccionarios">Números fraccionarios</a></p>
                <p><a href="#numeros-irracionales">Números irracionales</a></p>
                <p><a href="#p6ejercicios">Ejercicios</a></p>
                <p><a href="#Res">Resumen de la progresión</a></p>
                </p>
        </center>
        </div>

        <div class="conceptosclave">
            <div>
                <img src="images/KCClave.png" width=180px heigth=auto style="margin-right: 20px;">
            </div>
            <div class="ceonceptoscla">
                <h1 id="cc6">Conceptos clave</h1>
                <p>Número. Expresión de una cantidad con relación a su unidad.
                </p>
                <p>Número positivo. Números mayores que 0.</p>
                <p>Número negativo. Números menores que 0.</p>
            </div>
        </div>
        <br>

        <h1 id="historia-numeros-reales">Historia de los números reales </h1><br>
        Los números reales, al igual que todo lo que conocemos, tienen una historia. Comprenden diversos conjuntos o
        tipos de números que no surgieron al mismo tiempo, sino que su aparición fue paulatina a través del tiempo.<br>
        <br>
        Los primeros números conocidos por el hombre, fueron los naturales, que en pocas palabras son aquellos que
        empleamos en la vida cotidiana para contar objetos. El símbolo para denotarlos es ℕ. De esta manera, se tiene
        que:<br>
        ℕ = {0, 1, 2, 3, 4, 5, 6...}.<br>
        <br>
        Después se ubican a los números enteros, los cuales incluyen a los naturales como a sus inversos aditivos, es
        decir, cantidades positivas y negativas. Este conjunto se representa por la letra ℤ :<br>
        ℤ = {-6, -5, -4, -3, -2, -1, 0, 1, 2, 3, 4, 5, 6...}.<br>
        <br>
        Posteriormente se encuentran los números racionales, quienes se expresan como el cociente (división) entre dos
        números enteros. Su representación es a través de la letra ℚ:<br>
        ℚ = {<math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
            <:mfrac>
                <mrow>
                    <mo>-</mo>
                    <mn>1</mn>
                </mrow>
                <mrow>
                    <mn>3</mn>
                </mrow>
                </mfrac>
                <mi> </mi>
                <mo>,</mo>
                <mi> </mi>
                <mfrac>
                    <mrow>
                        <mn>2</mn>
                    </mrow>
                    <mrow>
                        <mn>7</mn>
                    </mrow>
                </mfrac>
                <mo>,</mo>
                <mi> </mi>
                <mfrac>
                    <mrow>
                        <mo>-</mo>
                        <mn>1</mn>
                    </mrow>
                    <mrow>
                        <mn>3</mn>
                    </mrow>
                </mfrac>
                <mo>,</mo>
                <mi> </mi>
                <mfrac>
                    <mrow>
                        <mo>-</mo>
                        <mn>1</mn>
                    </mrow>
                    <mrow>
                        <mn>3</mn>
                    </mrow>
                </mfrac>
                <mo>…</mo>
        </math>}<br>
        <br>
        Estos números se conocieron desde la época de los fenicios y egipcios. Debido a que el planteamiento de que
        "todo segmento de línea recta se puede medir con números racionales" fue equivocado, surge la necesidad de un
        nuevo conjunto de números.<br>
        <br>
        Los números irracioanales son los siguientes en ser planteados, aparecieron frente a la necesidad de expresar
        medidas de segmentos de la recta que no se pueden explicar como la divisón de dos números enteros. Más adelante
        se verá con detalle las características de cada uno de estos conjuntos. Se representan con la letra 𝕀.<br>
        <br>
        De esta manera, es que se establecen los números reales, los cuales se estrcuturan de distintas maneras según
        convenga, lo que sí es seguro es que comprenden a los números naturales, enteros, racionales e irracionales.<br>
        <br>
        Desde que se trabajó por primera vez con los números naturales hasta que se consolidó el concepto de número
        real, tuvieron que pasar miles de años. Su conceptualización final se dio en 1871 con los trabajos del
        matemático alemán Georg Cantor.<br>
        <br>
        Así, se puede estructuras el siguiente diagrama que explica cómo se organizan los números reales:<br>
        <center><img src="images/Progresion6img/img3p6.png" width="90%"></center><br>
        <br>
        Ahora, se analizará a detalle cada uno de los conjuntos de números que se muestran en el diagrama anterior.<br>
        <br>


        <h1 id="numeros-racionales-definicion"><span style="background-color: #72CEF2;"
                class="circle_colors_realnumber">1</span>Números racionales</h1>
        <br>
        Son aquellos números que pueden ser expresados como la relación entre dos enteros, es decir, el cociente de
        estos.
        Su representación es por medio de una fracción a/b donde a y b son números enteros y, además, b no puede ser
        igual a 0.<br>
        Comprende a los números enteros y fraccionarios.<br>
        <br>
        Cada número dentro de esto una gran variedad de fracciones, se puede decir que infinitas maneras equivalentes.
        Por ejemplo, el número 3:<br>
        <math class="p6ejercicio3fracciones" xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
            <mfrac>
                <mrow>
                    <mn>9</mn>
                </mrow>
                <mrow>
                    <mn>3</mn>
                </mrow>
            </mfrac>
            <mi> </mi>
            <mo>,</mo>
            <mi> </mi>
            <mfrac>
                <mrow>
                    <mn>12</mn>
                </mrow>
                <mrow>
                    <mn>4</mn>
                </mrow>
            </mfrac>
            <mo>,</mo>
            <mi> </mi>
            <mfrac>
                <mrow>
                    <mn>15</mn>
                </mrow>
                <mrow>
                    <mn>5</mn>
                </mrow>
            </mfrac>
            <mo>,</mo>
            <mi> </mi>
            <mfrac>
                <mrow>
                    <mn>18</mn>
                </mrow>
                <mrow>
                    <mn>6</mn>
                </mrow>
            </mfrac>
            <mo>,</mo>
            <mi> </mi>
            <mfrac>
                <mrow>
                    <mn>30</mn>
                </mrow>
                <mrow>
                    <mn>10</mn>
                </mrow>
            </mfrac>
            <mo>,</mo>
            <mi> </mi>
            <mfrac>
                <mrow>
                    <mn>600</mn>
                </mrow>
                <mrow>
                    <mn>200</mn>
                </mrow>
            </mfrac>
            <mo>…</mo>
        </math>
        <br>
        <br>
        Otro ejemplo puede ser 0.25<br>
        <math class="p6ejercicio3fracciones" xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
            <mfrac>
                <mrow>
                    <mn>1</mn>
                </mrow>
                <mrow>
                    <mn>4</mn>
                </mrow>
            </mfrac>
            <mi> </mi>
            <mo>,</mo>
            <mi> </mi>
            <mfrac>
                <mrow>
                    <mn>2</mn>
                </mrow>
                <mrow>
                    <mn>8</mn>
                </mrow>
            </mfrac>
            <mo>,</mo>
            <mi> </mi>
            <mfrac>
                <mrow>
                    <mn>3</mn>
                </mrow>
                <mrow>
                    <mn>12</mn>
                </mrow>
            </mfrac>
            <mo>,</mo>
            <mi> </mi>
            <mfrac>
                <mrow>
                    <mn>4</mn>
                </mrow>
                <mrow>
                    <mn>16</mn>
                </mrow>
            </mfrac>
            <mo>,</mo>
            <mi> </mi>
            <mfrac>
                <mrow>
                    <mn>5</mn>
                </mrow>
                <mrow>
                    <mn>20</mn>
                </mrow>
            </mfrac>
            <mo>,</mo>
            <mi> </mi>
            <mfrac>
                <mrow>
                    <mn>6</mn>
                </mrow>
                <mrow>
                    <mn>24</mn>
                </mrow>
            </mfrac>
            <mo>…</mo>
        </math>

        <br>
        <br>
        Esto quiere decir que, tanto los números enteros como decimales son capaces de expresarse como el cociente entre
        dos números enteros.<br>
        <br>
        Matemáticamente, este conjunto se representa con el símbolo ℚ<br>
        <br>
        Se utilizan para medir ciertas propiedades de los objetos, tales como el largo de una casa, el volumen de un
        recipiente, el peso de un individuo, etc.<br>

        <center><img src="images/Progresion6img/img1p6.png" width="75%"></center><br>
        <br><br>
        Dentro de este conjunto, se desglosan los números enteros y los números fraccionarios o decimales, mismos que se
        explican a continuación.<br>
        <br>
        <h2 id="numeros-enteros"><span style="background-color: #80BFC4;"
                class="circle_colors_realnumber">1.1</span>Números enteros</h2><br>
        Este conjunto abarca todos los números naturales, con sus inversos negativos y el cero. <br>
        Se representa con el símbolo que proviene del vocablo de origen alemán zahl, lo cual significa "número" o
        "cantidad". <br>
        Su representación en la recta numérica es la siguiente: <br>
        <center><img src="images/Progresion6img/img2p6.png" width="90%"></center><br>
        <br><br>
        Los enteros positivos crecen hacia la derecha y los negativos lo hacen hacia la izquierda; esto quiere decir que
        en el caso de los negativos, mientras más cerca esté del cero, más grande es.<br>
        <br>
        Por ejemplo, -95 es mayor que -112.<br>
        <br>
        Todos los números enteros pueden ser positivos, negativos o el cero, no obstante, hay un caso particular con los
        números naturales puesto que todos los números enteros no son números naturales.<br><br>



        <span style="background-color: #72F29F;" class="circle_colors_realnumber">1.1.1</span>Positivos.
        Cantidades mayores a 0.<br><br>
        <span class="subrayar_subclasificaciones_">Naturales:</span>
        Los números naturales son aquellos que empiezan desde el 1 hasta el infinito, por lo que el 0 no es
        considerado un número natural pero sí un número entero.<br><br>


        <span style="background-color: #72F29F;" class="circle_colors_realnumber">1.1.2</span>Negativos. Son
        aquellos menores a 0.<br><br><br>
        <span style="background-color: #72F29F;" class="circle_colors_realnumber">1.1.3</span>Cero. Valor nulo.
        <br>
        <br>

        Los números enteros, sin importar su signo, cuentan con un valor absoluto, el cual se entiende como la distancia
        que hay entre la ubicación del número en la recta y el cero.<br>
        Por ejemplo:<br>
        Valor absoluto de 12 y -12 = |12|<br>
        Valor absoluto de 1 y -1 = |1|<br>
        Valor absoluto de 355 y -355 = |355|<br>
        <br>
        <h2 id="numeros-fraccionarios"> <span style="background-color: #80BFC4;"
                class="circle_colors_realnumber">1.2</span>Números fraccionarios</h2><br><br>
        También conocidos como fracciones comunes, se forman por la división entre dos números naturales siempre y
        cuando el divisor o denominador sea diferente a cero.<br>
        <br>
        Los elementos de la fracción son los siguientes<br>
        <math class="p6ejercicio3fracciones" xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
            <mfrac>
                <mrow>
                    <mi>A</mi>
                </mrow>
                <mrow>
                    <mi>B</mi>
                </mrow>
            </mfrac>
        </math>

        <br><br>
        A es el numerador, el cual indica cuántas partes se toman del entero.<br>
        B es el denominador, es decir, en cuántas partes se divide la unidad.<br>
        <br>
        Estos números se pueden expresar de las siguientes maneras:<br>
        <br>



        <span style="background-color: #72F29F;" class="circle_colors_realnumber">1.2.1</span> Fracciones<br><br>
        Comprende a las fracciones propias e impropias.<br><br>

        <span class="subrayar_subclasificaciones_">Fracciones propias:</span> El numerador es menor que el denominador.

        <math class="p6ejercicio3fracciones" xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
            <mfrac>
                <mrow>
                    <mn>2</mn>
                </mrow>
                <mrow>
                    <mn>5</mn>
                </mrow>
            </mfrac>
        </math>
        <br>
        <br> <span class="subrayar_subclasificaciones_">Fracciones impropias:</span> El numerador es mayor que el
        denominador.
        <math class="p6ejercicio3fracciones" xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
            <mfrac>
                <mrow>
                    <mn>7</mn>
                </mrow>
                <mrow>
                    <mn>2</mn>
                </mrow>
            </mfrac>
        </math>
        <br><br>
        Si el numerador es múltiplo del denominador, entonces, la fracción representa un número natural
        entero.
        <math class="p6ejercicio3fracciones" xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
            <mfrac>
                <mrow>
                    <mn>6</mn>
                </mrow>
                <mrow>
                    <mn>2</mn>
                </mrow>
            </mfrac>
            <mo>=</mo>
            <mn>3</mn>
        </math>
        <br><br>
        <span style="background-color: #72F29F;" class="circle_colors_realnumber">1.2.2</span>Decimales finitos<br>
        <br>
        Son los que tienen una cantidad exacta de cifras decimales.<br>
        Por ejemplo:<br>
        0.25<br>
        0.1<br>
        0.5<br>
        <br>
        <span style="background-color: #72F29F;" class="circle_colors_realnumber">1.2.3</span>Decimales
        infinitos periódicos<br><br>
        En este caso su parte decimal no tiene fin, sin embargo, esta repite de forma periódica.<br>
        Por ejemplo:<br>
        0.333333…<br>
        0.666666…<br>
        0.43434343…..<br>
        0.111111111…<br>
        <br>
        Para evitar escribir tantas cantidades, matemáticamente escriben de la siguiente forma:<br>
        <div class="p6ejercicio3fracciones">
            <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <mn>0</mn>
                <mo>.</mo>
                <mover accent="true">
                    <mrow>
                        <mn>3</mn>
                    </mrow>
                    <mo>-</mo>
                </mover>
            </math>
            <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <mn>0</mn>
                <mo>.</mo>
                <mover accent="true">
                    <mrow>
                        <mn>6</mn>
                    </mrow>
                    <mo>^</mo>
                </mover>
            </math>
            <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <mn>0</mn>
                <mo>.</mo>
                <mover accent="true">
                    <mrow>
                        <mn>1</mn>
                    </mrow>
                    <mo>-</mo>
                </mover>
            </math>
            <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <mn>0</mn>
                <mo>.</mo>
                <mover accent="true">
                    <mrow>
                        <mn>43</mn>
                    </mrow>
                    <mo>^</mo>
                </mover>
            </math>
        </div>

        <br><br>
        <h1 id="numeros-irracionales"><span style="background-color: #72CEF2;"
                class="circle_colors_realnumber">2</span>Números irracionales</h1><br>
        Son aquellos que no se pueden representar mediante el cociente de dos números enteros. Se clasifican con el
        símbolo 𝕀.<br><br>
        <h2 id="numeros-irracionales-definicion"> <span style="background-color: #80BFC4;"
                class="circle_colors_realnumber">1.2</span>Números infinitos no periódicos</h2><br>
        Su expresión decimal tiene un número infinito de decimales que no forman períodos, sin embargo, se puede
        prescindir de esa clasificación pues esta es una característica general de los números irracionales.<br>
        Posterior al punto decimal, los números se repiten sin ninguna clase de patrón y no terminan.<br>
        <br>
        Para poder saber si un números es o no irracional, se tiene que comprobar si no se puede expresar como
        fracción,
        si esto es posible, entonces corresponde a un número racional.<br>
        <br>
        Ejemplos de números irracionales son:<br>
        <div class="space_numeros_irracionales">
            <span class="num_size_progresion6">
                <i>e</i>
            </span>
            <div class="alinear_numeros_irracionales_texto">
                Número de euler<br>
                Su valor es de 2.718281828459045235...
            </div>
        </div>
        <br>
        <div class="space_numeros_irracionales">
            <span class="num_size_progresion6">
                <i>π</i>
            </span>
            <div class="alinear_numeros_irracionales_texto">
                Pi<br>
                Su valor es de 3.141592653589793238...
            </div>
        </div>
        <br>
        <div class="space_numeros_irracionales">
            <span class="num_size_progresion6">
                <i>√5</i>
            </span>
            <div class="alinear_numeros_irracionales_texto">
                Raíz cuadrada de 5<br>
                Su valor es de 2.2360679775...
            </div>
        </div>
        <br>
        <div class="space_numeros_irracionales">
            <span class="num_size_progresion6">
                <i>φ</i>
            </span>
            <div class="alinear_numeros_irracionales_texto">
                Aureo<br>
                Su valor es de 1.6180339887...
            </div>
        </div>

        <br>

        <div class="imgejercicios">
            <div>
                <img src="images/Ejercicios.png" width=180px height=auto style="margin-right: 20px;">
            </div>
            <div id="ejercicios">
                <h1 id="p6ejercicios">Ejercicios</h1><br><br>
            </div>
        </div>
        A continuación, se presentan ejercicios de suma, resta, multiplicación y división con el conjunto de números
        descritos anteriormente.<br>
        <br>


        1. Números racionales - Enteros y naturales<br>
        <form method="post">


            1023 + 76 -3446 = <input type="text" name="p6e1txt1" id="p6e1txt1" maxlength="10" size="5"><br>
            -67 + 899 = <input type="text" required name="p6e1txt2" id="p6e1txt2" maxlength="10" size="5"><br>
            -100 -347 - (-28839 + 12) = <input type="text" required name="p6e1txt3" id="p6e1txt3" maxlength="10"
                size="5"><br>
            12 + 78 + 99 + 62 - 19 = <input type="text" required name="p6e1txt4" id="p6e1txt4" maxlength="10"
                size="5"><br>
            127 + 67 + 98 + 15 + 721 = <input type="text" required name="p6e1txt5" id="p6e1txt5" maxlength="10"
                size="5"><br>
            -16 - (-6) - (-7) - (-19) + (-123) = <input type="text" required name="p6e1txt6" id="p6e1txt6"
                maxlength="10" size="5"><br>
            156 / 89 * -6 = <input type="text" required name="p6e1txt7" id="p6e1txt7" maxlength="10" size="5"><br>
            -678 / -9 = <input type="text" required name="p6e1txt8" id="p6e1txt8" maxlength="10" size="5"><br>
            (1562 * 3) / (-872 * -2 ) = <input type="text" required name="p6e1txt9" id="p6e1txt9" maxlength="10"
                size="5"><br>
            (123 + 7 * 81 - 1) / (1829 - 371 / 371 + 78) = <input type="text" required name="p6e1txt10" id="p6e1txt10"
                maxlength="10" size="5"><br>
            <br><br>
            <!-- <input type="submit" value="" class="botonesrevisar" id="P6E1REV" name="P6E1REV"> -->
            <button type="button" onclick="colores(arrayp6e1, 6, 1);" id="P6E1REV" name="P6E1REV">prueba</button>
            <button type="button" onclick="GenerarPDF(6, 1, arrayp6e1, DatosFinalesPDF)">PDF</button>
            <input type="reset" value="" class="botonesreintentar">

        </form>
        <div class="Calificacion" id="p6e1img">

        </div>

        <script>
            TraerDatos(6, arrayp6e1, 1);
            // let respuestasp6_1 = [2347, 832, 28380, 232, 1028, -107, -4.245, 75.33, 2.68, 0.361];
            // colores(respuestasp6_1, 6, 1);
        </script>

        <?php
        // if (isset($_POST['P6E1REV'])) {
        
        //     $RespuestasE1_P6 = array(
        //         2347,
        //         832,
        //         28380,
        //         232,
        //         1028,
        //         -107,
        //         -4.245,
        //         75.33,
        //         2.68,
        //         0.361
        //     );
        //     require('funcionrevtxt.php');
        //     Caso2txt($RespuestasE1_P6, 1, 6, 'decimal');
        

        // }
        ?>



        <br><br>
        2. Números racionales - Fraccionarios decimales<br>
        <form method="post">
            6.5 + 7.8 - 1.2 - 0.5 = <input type="text" required name="p6e2txt1" id="p6e2txt1" maxlength="10"
                size="5"><br>
            120. 67 * 90.12 = <input type="text" required name="p6e2txt2" id="p6e2txt2" maxlength="10" size="5"><br>
            -12.5 - 12.5 - 10.5 + 9.5 = <input type="text" required name="p6e2txt3" id="p6e2txt3" maxlength="10"
                size="5"><br>
            0.1 + 0.2 + 0.3 + 0.4 = <input type="text" required name="p6e2txt4" id="p6e2txt4" maxlength="10"
                size="5"><br>
            -0.1 - (-0.2) - (-0.3) - (-0.4) = <input type="text" required name="p6e2txt5" id="p6e2txt5" maxlength="10"
                size="5"><br>
            0.75 / 0.5 = <input type="text" required name="p6e2txt6" id="p6e2txt6" maxlength="10" size="5"><br>
            (1.5 * 1.75) / (0.333 - 0.666) = <input type="text" required name="p6e2txt7" id="p6e2txt7" maxlength="10"
                size="5"><br>
            (0.074074 - 0.5 * 7.33333) / (125.038038 - 2.083083 * 7.25) = <input type="text" required name="p6e2txt8"
                id="p6e2txt8" maxlength="10" size="5"><br>
            1.333 + 2.333 * 0.353535 = <input type="text" required name="p6e2txt9" id="p6e2txt9" maxlength="10"
                size="5"><br>
            14.7123123123 / 1.22222 = <input type="text" required name="p6e2txt10" id="p6e2txt10" maxlength="10"
                size="5"><br>
            <input type="submit" value="" class="botonesrevisar" id="P6E2REV" name="P6E2REV">
            <input type="reset" value="" class="botonesreintentar">
        </form>
        <br><br>
        <script>
            let respuestasp6_2 = [12.6, 10893.0644, -26, 1, 0.8, 1.5, -7.875, -0.0327, 2.158, 12.065];
            colores(respuestasp6_2, 6, 2);
        </script>

        <?php
        if (isset($_POST['P6E2REV'])) {

            $RespuestasE2_P6 = array(
                12.6,
                10893.0644,
                -26,
                1,
                0.8,
                1.5,
                -7.875,
                -0.0327,
                2.158,
                12.065
            );
            require('funcionrevtxt.php');
            Caso2txt($RespuestasE2_P6, 2, 6, 'decimal');


        }
        ?>


        <br><br>

        3. Números racionales - Fraccionarios representados por fracciones<br>
        <form method="post">
            <div class="p6ejercicio3fracciones">


                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                    <mo>-</mo>
                    <mfrac>
                        <mrow>
                            <mn>2</mn>
                        </mrow>
                        <mrow>
                            <mn>3</mn>
                        </mrow>
                    </mfrac>
                    <mo>-</mo>
                    <mi> </mi>
                    <mfrac>
                        <mrow>
                            <mn>5</mn>
                        </mrow>
                        <mrow>
                            <mn>3</mn>
                        </mrow>
                    </mfrac>
                    <mo>-</mo>
                    <mi> </mi>
                    <mfrac>
                        <mrow>
                            <mn>1</mn>
                        </mrow>
                        <mrow>
                            <mn>3</mn>
                        </mrow>
                    </mfrac>
                </math>
                = <input type="text" required name="p6e3txt1" id="p6e3txt1" maxlength="10" size="5"><br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                    <mfrac>
                        <mrow>
                            <mn>8</mn>
                        </mrow>
                        <mrow>
                            <mn>8</mn>
                        </mrow>
                    </mfrac>
                    <mo>+</mo>
                    <mi> </mi>
                    <mfrac>
                        <mrow>
                            <mn>10</mn>
                        </mrow>
                        <mrow>
                            <mn>8</mn>
                        </mrow>
                    </mfrac>
                    <mo>+</mo>
                    <mi> </mi>
                    <mfrac>
                        <mrow>
                            <mn>2</mn>
                        </mrow>
                        <mrow>
                            <mn>8</mn>
                        </mrow>
                    </mfrac>
                </math>
                = <input type="text" required name="p6e3txt2" id="p6e3txt2" maxlength="10" size="5"><br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                    <mfrac>
                        <mrow>
                            <mn>15</mn>
                        </mrow>
                        <mrow>
                            <mn>2</mn>
                        </mrow>
                    </mfrac>
                    <mo>+</mo>
                    <mi> </mi>
                    <mfrac>
                        <mrow>
                            <mn>41</mn>
                        </mrow>
                        <mrow>
                            <mn>2</mn>
                        </mrow>
                    </mfrac>
                    <mo>-</mo>
                    <mi> </mi>
                    <mfrac>
                        <mrow>
                            <mn>2</mn>
                        </mrow>
                        <mrow>
                            <mn>2</mn>
                        </mrow>
                    </mfrac>
                    <mo>+</mo>
                    <mi> </mi>
                    <mfrac>
                        <mrow>
                            <mn>9</mn>
                        </mrow>
                        <mrow>
                            <mn>2</mn>
                        </mrow>
                    </mfrac>
                    <mo>-</mo>
                    <mi> </mi>
                    <mfrac>
                        <mrow>
                            <mn>14</mn>
                        </mrow>
                        <mrow>
                            <mn>2</mn>
                        </mrow>
                    </mfrac>
                </math>
                = <input type="text" required name="p6e3txt3" id="p6e3txt3" maxlength="10" size="5"><br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                    <mo>(</mo>
                    <mrow>
                        <mfrac>
                            <mrow>
                                <mn>8</mn>
                            </mrow>
                            <mrow>
                                <mn>9</mn>
                            </mrow>
                        </mfrac>
                        <mo>)</mo>
                    </mrow>
                    <mo>(</mo>
                    <mrow>
                        <mfrac>
                            <mrow>
                                <mn>19</mn>
                            </mrow>
                            <mrow>
                                <mn>9</mn>
                            </mrow>
                        </mfrac>
                        <mo>)</mo>
                    </mrow>
                </math>
                = <input type="text" required name="p6e3txt4" id="p6e3txt4" maxlength="10" size="5"><br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                    <mo>(</mo>
                    <mrow>
                        <mo>-</mo>
                        <mfrac>
                            <mrow>
                                <mn>17</mn>
                            </mrow>
                            <mrow>
                                <mn>15</mn>
                            </mrow>
                        </mfrac>
                        <mo>)</mo>
                    </mrow>
                    <mo>(</mo>
                    <mrow>
                        <mo>-</mo>
                        <mfrac>
                            <mrow>
                                <mn>22</mn>
                            </mrow>
                            <mrow>
                                <mn>15</mn>
                            </mrow>
                        </mfrac>
                        <mo>)</mo>
                    </mrow>
                </math>
                = <input type="text" required name="p6e3txt5" id="p6e3txt5" maxlength="10" size="5"><br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                    <mo>(</mo>
                    <mrow>
                        <mo>-</mo>
                        <mfrac>
                            <mrow>
                                <mn>1</mn>
                            </mrow>
                            <mrow>
                                <mn>7</mn>
                            </mrow>
                        </mfrac>
                        <mo>)</mo>
                    </mrow>
                    <mo>(</mo>
                    <mrow>
                        <mfrac>
                            <mrow>
                                <mn>9</mn>
                            </mrow>
                            <mrow>
                                <mn>7</mn>
                            </mrow>
                        </mfrac>
                        <mo>)</mo>
                    </mrow>
                </math>
                = <input type="text" required name="p6e3txt6" id="p6e3txt6" maxlength="10" size="5"><br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                    <mo>(</mo>
                    <mrow>
                        <mo>-</mo>
                        <mfrac>
                            <mrow>
                                <mn>5</mn>
                            </mrow>
                            <mrow>
                                <mn>5</mn>
                            </mrow>
                        </mfrac>
                        <mo>)</mo>
                    </mrow>
                    <mo>÷</mo>
                    <mo>(</mo>
                    <mrow>
                        <mo>-</mo>
                        <mfrac>
                            <mrow>
                                <mn>5</mn>
                            </mrow>
                            <mrow>
                                <mn>5</mn>
                            </mrow>
                        </mfrac>
                        <mo>)</mo>
                    </mrow>
                </math>
                = <input type="text" required name="p6e3txt7" id="p6e3txt7" maxlength="10" size="5"><br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                    <mo>(</mo>
                    <mrow>
                        <mfrac>
                            <mrow>
                                <mn>11</mn>
                            </mrow>
                            <mrow>
                                <mn>30</mn>
                            </mrow>
                        </mfrac>
                        <mo>)</mo>
                    </mrow>
                    <mo>÷</mo>
                    <mo>(</mo>
                    <mrow>
                        <mo>-</mo>
                        <mfrac>
                            <mrow>
                                <mn>29</mn>
                            </mrow>
                            <mrow>
                                <mn>30</mn>
                            </mrow>
                        </mfrac>
                        <mo>)</mo>
                    </mrow>
                </math>
                = <input type="text" required name="p6e3txt8" id="p6e3txt8" maxlength="10" size="5"><br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                    <mfrac>
                        <mrow>
                            <mn>5</mn>
                        </mrow>
                        <mrow>
                            <mn>6</mn>
                        </mrow>
                    </mfrac>
                    <mo>+</mo>
                    <mi> </mi>
                    <mfrac>
                        <mrow>
                            <mn>7</mn>
                        </mrow>
                        <mrow>
                            <mn>9</mn>
                        </mrow>
                    </mfrac>
                </math>
                = <input type="text" required name="p6e3txt9" id="p6e3txt9" maxlength="10" size="5"><br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                    <mfrac>
                        <mrow>
                            <mn>5</mn>
                        </mrow>
                        <mrow>
                            <mn>6</mn>
                        </mrow>
                    </mfrac>
                    <mo>-</mo>
                    <mi> </mi>
                    <mfrac>
                        <mrow>
                            <mn>7</mn>
                        </mrow>
                        <mrow>
                            <mn>9</mn>
                        </mrow>
                    </mfrac>
                </math>
                = <input type="text" required name="p6e3txt10" id="p6e3txt10" maxlength="10" size="5"><br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                    <mo>-</mo>
                    <mfrac>
                        <mrow>
                            <mn>5</mn>
                        </mrow>
                        <mrow>
                            <mn>6</mn>
                        </mrow>
                    </mfrac>
                    <mo>+</mo>
                    <mi> </mi>
                    <mfrac>
                        <mrow>
                            <mn>7</mn>
                        </mrow>
                        <mrow>
                            <mn>9</mn>
                        </mrow>
                    </mfrac>
                </math>
                = <input type="text" required name="p6e3txt11" id="p6e3txt11" maxlength="10" size="5"><br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                    <mo>-</mo>
                    <mfrac>
                        <mrow>
                            <mn>5</mn>
                        </mrow>
                        <mrow>
                            <mn>6</mn>
                        </mrow>
                    </mfrac>
                    <mo>-</mo>
                    <mi> </mi>
                    <mfrac>
                        <mrow>
                            <mn>7</mn>
                        </mrow>
                        <mrow>
                            <mn>9</mn>
                        </mrow>
                    </mfrac>
                </math>
                = <input type="text" required name="p6e3txt12" id="p6e3txt12" maxlength="10" size="5"><br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                    <mfrac>
                        <mrow>
                            <mn>5</mn>
                        </mrow>
                        <mrow>
                            <mn>6</mn>
                        </mrow>
                    </mfrac>
                    <mo>÷</mo>
                    <mi> </mi>
                    <mfrac>
                        <mrow>
                            <mn>7</mn>
                        </mrow>
                        <mrow>
                            <mn>9</mn>
                        </mrow>
                    </mfrac>
                </math>
                = <input type="text" required name="p6e3txt13" id="p6e3txt13" maxlength="10" size="5"><br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                    <mo>-</mo>
                    <mfrac>
                        <mrow>
                            <mn>5</mn>
                        </mrow>
                        <mrow>
                            <mn>6</mn>
                        </mrow>
                    </mfrac>
                    <mo>÷</mo>
                    <mi> </mi>
                    <mfrac>
                        <mrow>
                            <mn>7</mn>
                        </mrow>
                        <mrow>
                            <mn>9</mn>
                        </mrow>
                    </mfrac>
                </math>
                = <input type="text" required name="p6e3txt14" id="p6e3txt14" maxlength="10" size="5"><br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                    <mo>-</mo>
                    <mfrac>
                        <mrow>
                            <mn>5</mn>
                        </mrow>
                        <mrow>
                            <mn>6</mn>
                        </mrow>
                    </mfrac>
                    <mo>÷</mo>
                    <mo>(</mo>
                    <mrow>
                        <mo>-</mo>
                        <mi> </mi>
                        <mfrac>
                            <mrow>
                                <mn>7</mn>
                            </mrow>
                            <mrow>
                                <mn>9</mn>
                            </mrow>
                        </mfrac>
                        <mo>)</mo>
                    </mrow>
                </math>
                = <input type="text" required name="p6e3txt15" id="p6e3txt15" maxlength="10" size="5"><br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                    <mfrac>
                        <mrow>
                            <mn>3</mn>
                        </mrow>
                        <mrow>
                            <mn>10</mn>
                        </mrow>
                    </mfrac>
                    <mo>+</mo>
                    <mi> </mi>
                    <mfrac>
                        <mrow>
                            <mn>7</mn>
                        </mrow>
                        <mrow>
                            <mn>10</mn>
                        </mrow>
                    </mfrac>
                    <mo>+</mo>
                    <mi> </mi>
                    <mfrac>
                        <mrow>
                            <mn>11</mn>
                        </mrow>
                        <mrow>
                            <mn>10</mn>
                        </mrow>
                    </mfrac>
                    <mo>+</mo>
                    <mi> </mi>
                    <mfrac>
                        <mrow>
                            <mn>6</mn>
                        </mrow>
                        <mrow>
                            <mn>10</mn>
                        </mrow>
                    </mfrac>
                </math>
                = <input type="text" required name="p6e3txt16" id="p6e3txt16" maxlength="10" size="5"><br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                    <mo>-</mo>
                    <mfrac>
                        <mrow>
                            <mn>3</mn>
                        </mrow>
                        <mrow>
                            <mn>10</mn>
                        </mrow>
                    </mfrac>
                    <mo>-</mo>
                    <mi> </mi>
                    <mfrac>
                        <mrow>
                            <mn>7</mn>
                        </mrow>
                        <mrow>
                            <mn>10</mn>
                        </mrow>
                    </mfrac>
                    <mo>-</mo>
                    <mi> </mi>
                    <mfrac>
                        <mrow>
                            <mn>11</mn>
                        </mrow>
                        <mrow>
                            <mn>10</mn>
                        </mrow>
                    </mfrac>
                    <mo>-</mo>
                    <mi> </mi>
                    <mfrac>
                        <mrow>
                            <mn>6</mn>
                        </mrow>
                        <mrow>
                            <mn>10</mn>
                        </mrow>
                    </mfrac>
                </math>
                = <input type="text" required name="p6e3txt17" id="p6e3txt17" maxlength="10" size="5"><br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                    <mfrac>
                        <mrow>
                            <mn>12</mn>
                        </mrow>
                        <mrow>
                            <mn>12</mn>
                        </mrow>
                    </mfrac>
                    <mo>+</mo>
                    <mi> </mi>
                    <mfrac>
                        <mrow>
                            <mn>3</mn>
                        </mrow>
                        <mrow>
                            <mn>4</mn>
                        </mrow>
                    </mfrac>
                    <mo>+</mo>
                    <mi> </mi>
                    <mfrac>
                        <mrow>
                            <mn>5</mn>
                        </mrow>
                        <mrow>
                            <mn>11</mn>
                        </mrow>
                    </mfrac>
                    <mo>+</mo>
                    <mi> </mi>
                    <mfrac>
                        <mrow>
                            <mn>6</mn>
                        </mrow>
                        <mrow>
                            <mn>4</mn>
                        </mrow>
                    </mfrac>
                </math>
                = <input type="text" required name="p6e3txt18" id="p6e3txt18" maxlength="10" size="5"><br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                    <mfrac>
                        <mrow>
                            <mn>5</mn>
                        </mrow>
                        <mrow>
                            <mn>2</mn>
                        </mrow>
                    </mfrac>
                    <mo>×</mo>
                    <mi> </mi>
                    <mfrac>
                        <mrow>
                            <mn>12</mn>
                        </mrow>
                        <mrow>
                            <mn>5</mn>
                        </mrow>
                    </mfrac>
                    <mi> </mi>
                    <mo>-</mo>
                    <mi> </mi>
                    <mfrac>
                        <mrow>
                            <mn>1</mn>
                        </mrow>
                        <mrow>
                            <mn>6</mn>
                        </mrow>
                    </mfrac>
                    <mi> </mi>
                    <mo>-</mo>
                    <mi> </mi>
                    <mfrac>
                        <mrow>
                            <mn>3</mn>
                        </mrow>
                        <mrow>
                            <mn>2</mn>
                        </mrow>
                    </mfrac>
                    <mi> </mi>
                    <mo>÷</mo>
                    <mi> </mi>
                    <mfrac>
                        <mrow>
                            <mn>10</mn>
                        </mrow>
                        <mrow>
                            <mn>9</mn>
                        </mrow>
                    </mfrac>
                </math>
                = <input type="text" required name="p6e3txt19" id="p6e3txt19" maxlength="10" size="5"><br>
            </div>
            <input type="submit" value="" class="botonesrevisar" id="P6E3REV" name="P6E3REV">
            <input type="reset" value="" class="botonesreintentar">
        </form>

        <br><br>
        <script>
            let respuestasp6_3 = ['-8/3', '5/2', '49/2', '152/81', '374/225', '-9/49', '-1.64', '-11/29', '29/18', '1/18', '-1/18', '-29/18', '15/14', '', '-15/14', '27/10', '-27/10', '489/132', '269/60'];
            colores(respuestasp6_3, 6, 3);
        </script>
        <?php
        if (isset($_POST['P6E3REV'])) {

            $RespuestasE3_P6 = array(
                '-8/3',
                '5/2',
                '49/2',
                '152/81',
                '374/225',
                '-9/49',
                '-1.64',
                '-11/29',
                '29/18',
                '1/18',
                '-1/18',
                '-29/18',
                '15/14',
                '',
                '-15/14',
                '27/10',
                '-27/10',
                '489/132',
                '269/60'
            );
            require('funcionrevtxt.php');
            Caso2txt($RespuestasE3_P6, 3, 6, 'decimal');


        }
        ?>



        <br><br>


        4. Números irracionales<br>
        <form method="post" id="p6e4">
            2e + 6π = <input type="text" required name="p6e4txt1" id="p6e4txt1" maxlength="10" size="5"><br>
            (8e) / √2 = <input type="text" required name="p6e4txt2" id="p6e4txt2" maxlength="10" size="5"><br>
            Ln(7) * 3(√5) = <input type="text" required name="p6e4txt3" id="p6e4txt3" maxlength="10" size="5"><br>
            Log(5) + 5e - π = <input type="text" required name="p6e4txt4" id="p6e4txt4" maxlength="10" size="5"><br>
            √10 / e = <input type="text" required name="p6e4txt5" id="p6e4txt5" maxlength="10" size="5"><br>
            √93 - ln(12) * -5e = <input type="text" required name="p6e4txt6" id="p6e4txt6" maxlength="10" size="5"><br>
            <button type="submit" class="botonesrevisar" id="P6E4REV" name="P6E4REV"></button>
            <input type="reset" value="" class="botonesreintentar">
        </form>
        <script>
            let respuestasp6_4 = [24.288, 15.376, 13.058, 11.147, 1.164, 10.424];

            var obj_p6e4 = [
                {
                    reactivo: 'default1',
                    respuesta: 1,
                    estado: 'false'
                }
            ];
            colores(respuestasp6_4, 6, 4, obj_p6e4);
        </script>

        <?php
        if (isset($_POST['P6E4REV'])) {

            $RespuestasE4_P6 = array(
                24.288,
                15.376,
                13.058,
                11.147,
                1.164,
                10.424
            );
            require('funcionrevtxt.php');
            Caso2txt($RespuestasE4_P6, 4, 6, 'p6e4');


        }
        ?>


        <br><br>



        5. Mayor, menor o igual<br>
        <form method="post">
            125 > <select name="p6e5txt1" id="p6e5txt1">
                <option value=0 selected disabled>Respuesta</option>
                <option value=required> > </option>
                <option value=required>
                    < </option>
                <option value=required> = </option>

            </select>100<br>

            0.5 <<select name="p6e5txt2" id="p6e5txt2">
                <option value=0 selected disabled>Respuesta</option>
                <option value=required> > </option>
                <option value=required>
                    < </option>
                <option value=required> = </option>

                </select> 0.75<br>

                1000 > <select name="p6e5txt3" id="p6e5txt3">
                    <option value=0 selected disabled>Respuesta</option>
                    <option value=required> > </option>
                    <option value=required>
                        < </option>
                    <option value=required> = </option>

                </select>-1000<br>

                1 ><select name="p6e5txt4" id="p6e5txt4">
                    <option value=0 selected disabled>Respuesta</option>
                    <option value=required> > </option>
                    <option value=required>
                        < </option>
                    <option value=required> = </option>

                </select> 0<br>

                85.5 ><select name="p6e5txt5" id="p6e5txt5">
                    <option value=0 selected disabled>Respuesta</option>
                    <option value=required> > </option>
                    <option value=required>
                        < </option>
                    <option value=required> = </option>

                </select> 85.49<br>

                0.25 =<select name="p6e5txt6" id="p6e5txt6">
                    <option value=0 selected disabled>Respuesta</option>
                    <option value=required> > </option>
                    <option value=required>
                        < </option>
                    <option value=required> = </option>

                </select> 1/4<br>

                1/3 = <select name="p6e5txt7" id="p6e5txt7">
                    <option value=0 selected disabled>Respuesta</option>
                    <option value=required> > </option>
                    <option value=required>
                        < </option>
                    <option value=required> = </option>

                </select>0.3333<br>

                75 =<select name="p6e5txt8" id="p6e5txt8">
                    <option value=0 selected disabled>Respuesta</option>
                    <option value=required> > </option>
                    <option value=required>
                        < </option>
                    <option value=required> = </option>

                </select> (7.5 * 10)<br>

                -6 ><select name="p6e5txt9" id="p6e5txt9">
                    <option value=0 selected disabled>Respuesta</option>
                    <option value=required> > </option>
                    <option value=required>
                        < </option>
                    <option value=required> = </option>

                </select> -7<br>

                -1000 <<select name="p6e5txt10" id="p6e5txt10">
                    <option value=0 selected disabled>Respuesta</option>
                    <option value=required> > </option>
                    <option value=required>
                        < </option>
                    <option value=required> = </option>

                    </select> -89<br>

                    -4*-3 =<select name="p6e5txt11" id="p6e5txt11">
                        <option value=0 selected disabled>Respuesta</option>
                        <option value=required> > </option>
                        <option value=required>
                            < </option>
                        <option value=required> = </option>

                    </select> 12<br>

                    √25 = <select name="p6e5txt12" id="p6e5txt12">
                        <option value=0 selected disabled>Respuesta</option>
                        <option value=required> > </option>
                        <option value=required>
                            < </option>
                        <option value=required> = </option>

                    </select>2.5*2<br>

                    -0.1 <<select name="p6e5txt13" id="p6e5txt13">
                        <option value=0 selected disabled>Respuesta</option>
                        <option value=required> > </option>
                        <option value=required>
                            < </option>
                        <option value=required> = </option>

                        </select> 0<br>

                        √99 ><select name="p6e5txt14" id="p6e5txt14">
                            <option value=0 selected disabled>Respuesta</option>
                            <option value=required> > </option>
                            <option value=required>
                                < </option>
                            <option value=required> = </option>

                        </select> √76<br>

                        √19 <<select name="p6e5txt15" id="p6e5txt15">
                            <option value=0 selected disabled>Respuesta</option>
                            <option value=required> > </option>
                            <option value=required>
                                < </option>
                            <option value=required> = </option>

                            </select> 9/2<br>

                            √609 = <select name="p6e5txt16" id="p6e5txt16">
                                <option value=0 selected disabled>Respuesta</option>
                                <option value=required> > </option>
                                <option value=required>
                                    < </option>
                                <option value=required> = </option>

                            </select>24.6779253585<br>

                            π <<<select name="p6e5txt18" id="p6e5txt18">
                                <option value=0 selected disabled>Respuesta</option>
                                <option value=required> > </option>
                                <option value=required>
                                    < </option>
                                <option value=required> = </option>

                                </select> 3.657<br>

                                e * 2 <<select name="p6e5txt18" id="p6e5txt18">
                                    <option value=0 selected disabled>Respuesta</option>
                                    <option value=">"> > </option>
                                    <option value="<">
                                        < </option>
                                    <option value="="> = </option>

                                    </select> ln(300)<br>


                                    <input type="submit" value="" class="botonesrevisar" id="P6E5REV" name="P6E5REV">
                                    <input type="reset" value="" class="botonesreintentar">
        </form>


        <script>
            let respuestase5p6 = ['>', '<', '>', '>', '>', '=', '=', '=', '>', '<', '=', '=', '<', '>', '<', '=', '<', '<'];
            colores(respuestase5p6, 6, 5);
        </script>

        <?php
        if (isset($_POST['P6E5REV'])) {

            $RespuestasE5_P6 = array(
                '>',
                '<',
                '>',
                '>',
                '>',
                '=',
                '=',
                '=',
                '>',
                '<',
                '=',
                '=',
                '<',
                '>',
                '<',
                '=',
                '<',
                '<'
            );
            require('funcionrevtxt.php');
            Caso2txt($RespuestasE5_P6, 5, 6);


        }
        ?>


        <div>
            6. Arrastra y suelta las etiquetas en el lugar correcto:<br>
            <!-- <div class = "nota2">Si la respuesta es la raiz solo pon el número <br>ejemplo:√21 =  21</div> -->
            <br><br>
            <h2>Ordenar de mayor a menor</h2>
            <script src="js/script6_1.js"></script>
            <center>
                <div class="container">
                    <section>
                        <style>
                            .words-container1 {
                                display: flex;
                                flex-wrap: wrap;
                                gap: 10px;
                                justify-content: center;
                                margin-bottom: 20px;
                            }
                        </style>
                    </section>
                    <div class="words-container1">
                        <!-- primer grpio -->
                        <div class="word" draggable="true" data-word="21">√21</div>
                        <div class="word" draggable="true" data-word="12">√12</div>
                        <div class="word" draggable="true" data-word="8/3">8/3</div>
                        <div class="word" draggable="true" data-word="9/5">9/5</div>
                        <div class="word" draggable="true" data-word="-7">-7</div>
                        <!-- segundo gropo -->
                        <div class="word" draggable="true" data-word="80">√80</div>
                        <div class="word" draggable="true" data-word="18">√18</div>
                        <div class="word" draggable="true" data-word="11/3">11/3</div>
                        <div class="word" draggable="true" data-word="-9/2">-9/2</div>
                        <div class="word" draggable="true" data-word="-12">-12</div>
                        <!-- tercer grpo -->
                        <div class="word" draggable="true" data-word="50">√50</div>
                        <div class="word" draggable="true" data-word="15">√15</div>
                        <div class="word" draggable="true" data-word="7/3">7/3</div>
                        <div class="word" draggable="true" data-word="5/6">5/6</div>
                        <div class="word" draggable="true" data-word="-8">-8</div>
                        <!-- cuarto grupo -->
                        <div class="word" draggable="true" data-word="88">√88</div>
                        <div class="word" draggable="true" data-word="13/2">13/2</div>
                        <div class="word" draggable="true" data-word="24">√24</div>
                        <div class="word" draggable="true" data-word="-11/4">-11/4</div>
                        <div class="word" draggable="true" data-word="-16">-16</div>
                        <!-- quinto grupo :], mal emocionalmente, new home ♫♫♫♫♫-->
                        <div class="word" draggable="true" data-word="55">√55</div>
                        <div class="word" draggable="true" data-word="30">√30</div>
                        <div class="word" draggable="true" data-word="11/5">11/5</div>
                        <div class="word" draggable="true" data-word="3/2">3/2</div>
                        <div class="word" draggable="true" data-word="-7">7</div>
                    </div>
            </center>
            <div class="text-container">
                <p>
                    <math class="tamfrac">
                        <mfrac>
                            <mn>8</mn>
                            <mn>3</mn>
                        </mfrac>
                    </math> , √12, -7, √21, <math class="tamfrac">
                        <mfrac>
                            <mn>9</mn>
                            <mn>5</mn>
                        </mfrac>
                    </math>&nbsp;&nbsp;&nbsp;<span class="dropzone" data-word="21"></span><span class="dropzone"
                        data-word="12"></span><span class="dropzone" data-word="8/3"></span><span class="dropzone"
                        data-word="9/5"></span><span class="dropzone" data-word="-7"></span>
                    <br><br>
                    √80, <math class="tamfrac">
                        <mfrac>
                            <mn>-9</mn>
                            <mn>2</mn>
                        </mfrac>
                    </math> , <math class="tamfrac">
                        <mfrac>
                            <mn>11</mn>
                            <mn>3</mn>
                        </mfrac>
                    </math> , √18, -12&nbsp;&nbsp;<span class="dropzone" data-word="80"></span><span class="dropzone"
                        data-word="18"></span><span class="dropzone" data-word="11/3"></span><span class="dropzone"
                        data-word="-9/2"></span><span class="dropzone" data-word="-12"></span>
                    <br><br>
                    <math class="tamfrac">
                        <mfrac>
                            <mn>7</mn>
                            <mn>3</mn>
                        </mfrac>
                    </math> , √50, -8, √15, <math class="tamfrac">
                        <mfrac>
                            <mn>5</mn>
                            <mn>6</mn>
                        </mfrac>
                    </math>&nbsp;&nbsp;<span class="dropzone" data-word="50"></span><span class="dropzone"
                        data-word="15"></span><span class="dropzone" data-word="7/3"></span><span class="dropzone"
                        data-word="5/6"></span><span class="dropzone" data-word="-8"></span>
                    <br><br>
                    √88, <math class="tamfrac">
                        <mfrac>
                            <mn>-11</mn>
                            <mn>4</mn>
                        </mfrac>
                    </math> , <math class="tamfrac">
                        <mfrac>
                            <mn>13</mn>
                            <mn>2</mn>
                        </mfrac>
                    </math> , √24, -16&nbsp;&nbsp;<span class="dropzone" data-word="88"></span><span class="dropzone"
                        data-word="13/2"></span><span class="dropzone" data-word="24"></span><span class="dropzone"
                        data-word="-11/4"></span><span class="dropzone" data-word="-16"></span>
                    <br><br>
                    <math class="tamfrac">
                        <mfrac>
                            <mn>3</mn>
                            <mn>2</mn>
                        </mfrac>
                    </math> , √55, -7, √30, <math class="tamfrac">
                        <mfrac>
                            <mn>11</mn>
                            <mn>5</mn>
                        </mfrac>
                    </math> &nbsp;&nbsp;<span class="dropzone" data-word="55"></span><span class="dropzone"
                        data-word="30"></span><span class="dropzone" data-word="11/5"></span><span class="dropzone"
                        data-word="3/2"></span><span class="dropzone" data-word="-7"></span>
                </p>
            </div>
        </div>
        <div class="buttons" style="display: flex;">
            <button class="botonesrevisar" id="checkAnswers"></button>
            <button class="botonesreintentar" id="retry"></button>
        </div>
        <!-- <script src="script6_1.js"></script> -->
        <br><br>
        </div>

        <center>
            <br>
            <h1 id="Res">Resumen de la progresión</h1>
            <img src="images/Progresion6img/M6.png" width=90%>
        </center>

    </section>
    <div id="fot">
        <?php
        include("footer.php");
        ?>
    </div>

</body>

</html>