<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link rel="icon" href="images/logo.ico" type="image/x-icon">
    <title>Progresion 1</title>
</head>

<body>
    <?php
    require ('ifSession.php');
    ?>
    <script src="js/script11.js"></script>
    <aside class="aside" id="aside1">
        <section id="s1">
            Pro
            gre
            sión
            1
        </section>
        <br>
        <Section class="sectionAs">
            <P>Compara, considerando sus aprendizajes de trayectoría, el lenguaje natural con el lenguaje
                matemático para observar que este último requiere de precisión y rigurosidad.
            </p>
            <img src="images/P1.png" id="KaxieP1">
            <b>
                <h3> Metas </h3>
            </b><br>
            <H3>M1</H3>
            <P>Describe situaciones o fenómenos empleando rigurosamente el lenguaje matemático y el lenguaje natural.
            </P>
            <b>
                <h3> Categorías </h3>
            </b><br>
            <H3>C1</H3>
            <P>Interacción y lenguaje matemático.</P>
            <b>
                <h3> Subcategorías </h3>
            </b><br>
            <H3>S1</H3>
            <P>Registro escrito, simbólico, algebraico e iconográfico.</P>

            <!-- <div class="bodfals">
                <div class="skill">
                    <div class="outer">
                        <div class="inner">
                            <div id="number">
                                65%
                            </div>
                        </div>
                    </div>
                    svg
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="300px" height="300px">
                        <defs>
                            <linearGradient id="GradientColor">
                                <stop offset="0%" stop-color="#7198f5" />
                                <stop offset="25%" stop-color="#71c2f5" />
                                <stop offset="50%" stop-color="#71ecf5" />
                                <stop offset="75%" stop-color="#71f5d2" />
                                <stop offset="100%" stop-color="#71f5a5" />
                            </linearGradient>
                        </defs>
                        <circle cx="110" cy="110" r="70" stroke-linecap="round" />
                    </svg>
                </div>

            </div>
            <script src="js/script4.js"></script>
            <center>
                <p> Este es tu porcentaje de avance en la progresión </p>
            </center>-->
        </section>

        <footer class="anteriorsig">
            <div class="panterior"><a href="index.php"> <img src="images/Anterior.png" width=47px
                        style="margin-bottom: -18px;"> Principal</a></div>
            <div class="psiguiente"><a href="progresion2.php"> Siguiente <img src="images/Siguiente.png" width=47px
                        style="margin-bottom: -18px;"> </a></div>
        </footer>
    </aside>


    <section class="textP">
        <center>
            <div class="responsive">
            <div id="indice1" class="indice">
                <p>
                    &emsp;&emsp;&emsp;&emsp;&ensp;Índice<br>
                    <a href="#cc">Conceptos clave</a><br>
                    <a href="#quees">¿Qué es el lenguaje <br>algebraico?</a><br>
                    <a href="#funcion">Función</a><br>
                    <a href="#caracteristicas">Características</a><br>
                    <a href="#jerarquia">Jerarquía</a><br>
                    <a href="#ejemplos">Ejemplos</a><br>
                    <a href="#ejercicios">Ejercicios</a><br>
                    <a href="#resumen">Resumen</a><br>
                </p>
            </div>
            </div>
        </center>
        <div class="responsive">
        <div class="conceptosclave">
            <div><img src="images/KCClave.png" width=180px height=auto style="margin-right: 20px;"></div>
            <div class="ceonceptoscla">
                <h1 id="cc">Conceptos clave</h1>
                <P>Lenguaje natural. Es el lenguaje hablado o escrito de los seres humanos.<br>
                    Lenguaje matemático. Es aquel que está conformado por signos matemáticos, números y reglas.<br>
                    Variables. Valores no fijos que cambian según alguna condición.</P>
            </div>
        </div>
        <div>
        <br>
        <div class="responsive">
        <h1 id="quees">¿Qué es el lenguaje algebraico?</h1>
        <P>Consiste en transformar o traducir lo que nosotros conocemos como "lenguaje común"
            o "lenguaje normal" a símbolos y letras, a fin de representar cantidades desconocidas
            con símbolos, simplificar teoremas, ecuaciones e inecuaciones. En pocas palabras, darle la
            solución a un problema desde un enfoque matemático.</p>
        <br>
        <p>Este lenguaje está constituido principalmente por las letras del alfabeto, aunque se verá que frecuentemente
            se usan la <i>"a", "b", "c",
                "x", "y", "m" y "n".</i> Empero, en algunos otros casos también se emplean algunas letras del alfabeto
            griego, las más comúnes son: α (alpha), β (betha), θ (tetha) y Ω (omega).
            Usamos las letras para
            representar las variables, es decir, los valores desconocidos que, como su nombre lo indica, varían o
            cambian.</p>
        <br>
        <p>Las expresiones algebraicas son cadenas ordenadas por una jerarquía donde regularmente veremos números,
            letras y
            operadores aritméticos, sin embargo, en materias como trigonometría es usual encontrar funciones
            trigonométricas dentro de la cadena,
            lo mismo sucede con otras ramas matemáticas.
            <br>Entre este conjunto de elementos podemos distinguir los siguientes:
        <ul>
            <li>Incógnitas. Son los valores desconocidos. También se les denomina "variables" y estas pueden ser
                dependientes
                o independientes.</li>
            <li>Signos artiméticos. Tales como "+", "-", "x", "/".</li>
            <li>Superíndices o potencias. La cantidad de veces que un número es multiplicado por sí mismo.</li>
            <li>Raíces o radicales. La división de un número entre sí mismo una determinada cantidad de veces.</li>
            <li>Funciones. La relación de dependencia entre dos o más variables o valores.</li>
        </ul>
        </p>
        <br>
        <p>Dentro del lenguaje algebraico ya no se emplean tanto las palabras de suma, resta, división o multiplicación,
            en su lugar tenemos
            sinónimos para referirnos a tales operaciones. Véase la siguiente tabla:</p>
</div>
        <TABLE>
            <TR>
                <TH>Suma</TH>
                <TH>Resta</TH>
                <TH>Multiplicacion</TH>
                <TH>División</TH>
            </TR>

            <TR>
                <TD>Aumentar</TD>
                <TD>Disminuir</TD>
                <TD>Producto</TD>
                <TD>Cociente</TD>
            <TR>

            <TR>
                <TD>Mayor que</TD>
                <TD>Menor que</TD>
                <TD>Múltiplo</TD>
                <TD>Dividido</TD>
            <TR>

            <TR>
                <TD>Incrementar</TD>
                <TD>Diferencia</TD>
                <TD>Veces</TD>
                <TD>Proporción</TD>
            <TR>

            <TR>
                <TD>Más grande que</TD>
                <TD>Perder o pérdida</TD>
                <TD>Doble/triple/cuádruple/etc</TD>
                <TD>Razón</TD>
            <TR>

            <TR>
                <TD></TD>
                <TD></TD>
                <TD></TD>
                <TD>Mitad/tercera/cuarta/etc</TD>
            <TR>
        </TABLE>
        <br>
        <h1 id="funcion">Función</h1>
        <P>Seguramente te estarás preguntando ¿Para qué me sirve traducir un enunciado en lenguaje común a un lenguaje
            lleno de letras y números?
            Pues bien, la función global del lenguaje algebraico es generalizar las diversas operaciones que se
            desarrollan en la aritmética, pero ahora usando símbolos y letras. </p>
        <P>De manera más detallada, mediante el álgebra podemos resolver problemas de forma ordenada y lógica,
            valiéndonos de las operaciones aritméticas
            y ahora, dentro del álgebra, de otras operaciones como los despejes y sustituciones, etc.
        </P>
        <P> El álgebra simplifica los problemas, un buen estudio de esta rama nos demuestra lo sencillo que se pueden
            resolver situaciones de la vida cotidiana aplicando los fundamentos de la misma. </P>


        <br>
        <h1 id="caracteristicas">Características</h1>
        <P>
        <ul>
            <li>Es más precioso que el lenguaje númerico.</li>
            <li>Se expresam enunciados más breves.</li>
            <li>Expresión de valores desconocidos.</li>
        </ul>
        A continuación veremos algunos ejemplos comúnes de expresiones verbales
        y su traducción al lenguaje algebraico.
        </p>
        <TABLE BORDER="2PX">


            <TR>
                <TD>Un número cualquiera</TD>
                <TD class="italic">x</TD>
            </TR>

            <TR>
                <TD>La suma de dos números</TD>
                <TD class="italic">x+y</TD>
            </TR>

            <TR>
                <TD>La diferencia de dos números</TD>
                <TD class="italic">x-y</TD>
            </TR>
            <TR>
                <TD>El producto de dos números</TD>
                <TD class="italic">xy</TD>
            </TR>
            <TR>
                <TD>El cociente de dos números</TD>
                <TD class="italic">x:y o, x/y</TD>
            </TR>

            <TR>
                <TD>El cubo de un número</TD>
                <TD class="italic">x<sup>3</sup></TD>
            </TR>

            <TR>
                <TD>El triple del cuadrado de un número</TD>
                <TD class="italic">3x<sup>2</sup></TD>
            </TR>

            <TR>
                <TD>La suma de dos cuadrados de dos números</TD>
                <TD class="italic">x<sup>2</sup> + y<sup>2</sup></TD>
            </TR>
        </TABLE>
        <br>
        <h1 id="jerarquia">Jerarquía</h1>
        <P>Finalmente, para poder traducir expresiones en lenguaje natural a lenguaje algebraico,
            veamos la siguiente imagen que explica la jerarquía que debe de tenerse en cuenta en
            general cuando se estudia álgebra. Básicamente es el orden que se debe de seguir
            al efectuar las operaciones o establecer una expresión algebraica.
        </p>
        <img src="images/Progresion1img/img1.png" id="img1P1"><br>
        <B style="color:red">NOTA: Cuando hay agrupadores, la expresión que está dentro toma también la jerarquía ya
            explicada.</B>
        <br><br>
        <h1 id="ejemplos">Ejemplos</h1>
        <P> Ahora veremos unos ejemplos antes de pasar con los ejercicios.</p><br>
        1. El triple de un numero multiplicado por 9 y a cuyo resultado se le aumentan 12 unidades.
        <p class="italic">9(3x)+12 </p>
        <br>
        2. La suma de 3 numeros.
        <p class="italic">x+y+z</p>
        <br>
        3. La edad de Ariel es una quinta parte de la edad de Mauricio.
        <p class="italic">x = y/3</p>
        <br>
        4. Tres números enteros consecutivos cuya suma es 168.
        <p class="italic">x + (x+1) + (x+2) = 168</p>
        <br>
        5. Si a un número le disminuyo 13 unidades obtengo -84.
        <p class="italic">x - 13 = -34</p>
        <br>
        6. Un número multiplicado por sí mismo 5 veces.
        <p class="italic">x<sup>5</sup></p>
        <br>
        7. Al producto de dos números se le aumentan 3 unidades, 4 veces la mitad de ese resultado se aumenta al número
        20.
        <p class="italic">4[(xy + 3) / 2] + 20</p>

        <br>
        <div class="imgejercicios">
            <div>
                <img src="images/Ejercicios.png" width=180px height=auto style="margin-right: 20px;">
            </div>
            <div id="ejercicios">
                <h1>Ejercicios</h1><br><br>
            </div>
        </div>
        <form method="post">
            1. Elige la opción correcta.
            <p>
                Sara tiene el doble de manzanas que tiene Hansel, Luis tiene la
                mitad del triple de manzanas que tiene Sara ¿Cuántas manzanas
                tiene cada uno?<br>
                <input type="radio" name="p1e1r1" id="p1e1r1a1" value="1">
                <label for="p1e1r1a1">2x, x, 3x </label>
                <br>
                <input type="radio" name="p1e1r1" id="p1e1r1a2" value="2">
                <label for="p1e1r1a2">2y, x, 6x</label>
                <br>
                <input type="radio" name="p1e1r1" id="p1e1r1a3" value="3">
                <label for="p1e1r1a3">x, 2x, 3 </label>

            </p>
            <br>
            <p>
                Tengo un número. Lo multiplico por sí mismo 3 veces. Le
                aumento la mitad del número inicial. Finalmente todo lo
                anterior lo multiplico por el número 4 veces.<br>
                <input type="radio" name="p1e1r2" id="p1e1r2a1" value="1">
                <label for="p1e1r2a1">2x<sup>3</sup>+<math>
                        <mfrac>
                            <mn> x </mn>
                            <mn>2</mn>
                        </mfrac>
                    </math>(4x)</label>
                <br><br>
                <input type="radio" name="p1e1r2" id="p1e1r2a2" value="2">
                <label for="p1e1r2a2">(3x + <math>
                        <mfrac>
                            <mn> x </mn>
                            <mn>2</mn>
                        </mfrac>
                    </math>)4x</label>
                <br><br>
                <input type="radio" name="p1e1r2" id="p1e1r2a3" value="3">
                <label for="p1e1r2a3">(x<sup>3</sup>+<math>
                        <mfrac>
                            <mn> x </mn>
                            <mn>2</mn>
                        </mfrac>
                    </math>)4x</label>

            </p>
            <br>
            <p>
                A la raíz cuadrada de la suma de 3 términos se le aumenta el
                producto de los 3 términos, dicho producto está multiplicado por
                sí mismo 3 veces y se le está restando el doble del primer término.
                Todo lo anterior se multiplica por el producto de los últimos dos
                términos, cuyo producto está multiplicado por sí mismo 2 veces.<br>
                <input type="radio" name="p1e1r3" id="p1e1r3a1" value="1">
                <label for="p1e1r3a1">yz<sup>2</sup>{<math>
                        <mroot>
                            <mn>x+y+z</mn>
                            <mn> 2 </mn>
                        </mroot>
                    </math> + [(xyz)<sup>3</sup>]}-2x</label>
                <br>
                <input type="radio" name="p1e1r3" id="p1e1r3a2" value="2">
                <label for="p1e1r3a2">(yz)<sup>2</sup> {<math>
                        <mroot>
                            <mn>x+y+z</mn>
                            <mn> 2 </mn>
                        </mroot>
                    </math> + [(xyz)<sup>3</sup>-2x]}</label>
                <br>
                <input type="radio" name="p1e1r3" id="p1e1r3a3" value="3">
                <label for="p1e1r3a3">yz<sup>2</sup> { <math>
                        <mroot>
                            <mn>x+y+z</mn>
                            <mn> 2 </mn>
                        </mroot>
                    </math> + [(xyz)<sup>3</sup>-2x]}</label>

            </p>
            <br>

            <p>
                Al cuadrado de un número se le disminuye el cubo del cuadrado
                de otro número.<br>
                <input type="radio" name="p1e1r4" id="p1e1r4a1" value="1">
                <label for="p1e1r4a1">x<sup>2</sup> - y<sup>2</sup> - y<sup>3</sup></label>
                <br>
                <input type="radio" name="p1e1r4" id="p1e1r4a2" value="2">
                <label for="p1e1r4a2">x<sup>2</sup>- (y<sup>2</sup>)<sup>3</sup></label>
                <br>
                <input type="radio" name="p1e1r4" id="p1e1r4a2" value="3">
                <label for="p1e1r4a3"> x<sup>2</sup>-y<sup>3</sup>(2) </label>

            </p>
            <br>
            <p>
                La suma de dos números pares consecutivos es igual a 38.<br>
                <input type="radio" name="p1e1r5" id="p1e1r5a1" value="1">
                <label for="p1e1r5a1">38=2X+(2X+2) </label>
                <br>
                <input type="radio" name="p1e1r5" id="p1e1r5a2" value="2">
                <label for="p1e1r5a2">38=(2X+2)+(2X+4)</label>
                <br>
                <input type="radio" name="p1e1r5" id="p1e1r5a3" value="3">
                <label for="p1e1r5a3">38=4X </label>

            </p>
            <br>
            <p>
                Al triple de un número se le disminuye el cociente de otro número
                entre 2.<br>
                <input type="radio" name="p1e1r6" id="p1e1r6a1" value="1">
                <label for="p1e1r6a1">3X - 2Y </label>
                <br><br>
                <input type="radio" name="p1e1r6" id="p1e1r6a2" value="2">
                <label for="p1e1r6a2">3X - <math>
                        <mfrac>
                            <mn> y </mn>
                            <mn>2</mn>
                        </mfrac>
                    </math></label>
                <br><br>
                <input type="radio" name="p1e1r6" id="p1e1r6a3" value="3">
                <label for="p1e1r6a3">3X-
                    <math>
                        <mfrac>
                            <mn> x </mn>
                            <mn>2</mn>
                        </mfrac>
                    </math>
                </label>
            </p><br><br>
            <input type="submit" value="" class="botonesrevisar" name="p1e1Rev">
            <input type="reset" value="" class="botonesreintentar">
        </form>
        <?php
        if (isset($_POST['p1e1Rev'])) {
            require ('funcionrevradio.php');
            RevisarRadios(6, 1, 1);

        }
        ?>


        <br><br>

        Recordando la jerarquía de operaciones, arrastre los elementos que correspondan a su respectivo lugar.<br>
        <DIV class="containerIm">
            <DIV CLASS="picos">
                <img src="images/Progresion1img/16.png" alt="" draggable="true" ondragstart="drag(event)" id="img16">
                <img src="images/Progresion1img/8.png" alt="" draggable="true" ondragstart="drag(event)" id="img8">
                <img src="images/Progresion1img/12.png" alt="" draggable="true" ondragstart="drag(event)" id="img12">
                <img src="images/Progresion1img/20.png" alt="" draggable="true" ondragstart="drag(event)" id="img20">

            </div>

            <DIV CLASS="segundos">
                <img src="images/Progresion1img/15.png" alt="" draggable="true" ondragstart="drag(event)" id="img15">
                <img src="images/Progresion1img/19.png" alt="" draggable="true" ondragstart="drag(event)" id="img19">
                <img src="images/Progresion1img/11.png" alt="" draggable="true" ondragstart="drag(event)" id="img11">
                <img src="images/Progresion1img/7.png" alt="" draggable="true" ondragstart="drag(event)" id="img7">

            </div>

            <DIV CLASS="terceros">
                <img src="images/Progresion1img/14.png" alt="" draggable="true" ondragstart="drag(event)" id="img14">
                <img src="images/Progresion1img/18.png" alt="" draggable="true" ondragstart="drag(event)" id="img18">
                <img src="images/Progresion1img/6.png" alt="" draggable="true" ondragstart="drag(event)" id="img6">
                <img src="images/Progresion1img/10.png" alt="" draggable="true" ondragstart="drag(event)" id="img10">

            </div>

            <DIV CLASS="bases">
                <img src="images/Progresion1img/9.png" alt="" draggable="true" ondragstart="drag(event)" id="img9">
                <img src="images/Progresion1img/17.png" alt="" draggable="true" ondragstart="drag(event)" id="img17">
                <img src="images/Progresion1img/5.png" alt="" draggable="true" ondragstart="drag(event)" id="img5">
                <img src="images/Progresion1img/13.png" alt="" draggable="true" ondragstart="drag(event)" id="img13">
            </div>

        </div>
        <br><br>

        <div class="containerIm">
            <div class="espacios">
                <div class="cajita4" id="0" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                <div class="cajita3" id="1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                <div class="cajita2" id="2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                <div class="cajita1" id="3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
            </div>
            <div>


            </div>
        </div>
        <h1 id="calif"> </h1>

        <script src="js/script2.js"> </script>


        <p>2. Elige verdadero (V) o falso (F).</p>
        <form method="post">
            <p>
                "El doble de un número es igual al 78".
                <br>En lenguaje algebraico es 2x = 78<br>
                <input type="radio" name="p1e2r1" id="p1e2r1a1" value="1">
                <label for="p1e2r1a1">V </label>
                <br>
                <input type="radio" name="p1e2r2" id="p1e2r1a2" value="2">
                <label for="p1e2r1a2">F</label>
                <br>
                <br>
            </p>

            <p>
                "La suma de 5 números consecutivos a la cual se le disminuye 12".
                <br>En lenguaje algebraico es x + (x+1) + (x+2) + (x+3) + (x+4) - 12<br>
                <input type="radio" name="p1e2r2" id="p1e2r2a1" value="2">
                <label for="p1e2r2a1">V </label>
                <br>
                <input type="radio" name="p1e2r2" id="p1e2r2a2" value="1">
                <label for="p1e2r2a2">F</label>
                <br>
                <br>
            </p>

            <p>
                "El producto de 160 por un número más el cociente de ese numero entre 5".
                <br>En lenguaje algebraico es 160x + x/5<br>
                <input type="radio" name="p1e2r3" id="p1e2r3a1" value="2">
                <label for="p1e2r3a1">V </label>
                <br>
                <input type="radio" name="p1e2r3" id="p1e2r3a2" value="1">
                <label for="p1e2r3a2">F</label>
                <br>
                <br>
            </p>

            <p>
                "El cociente de 7 veces un número al cual se le disminuye otro número multiplicado por sí mismo 2 veces,
                entre el doble de 2".
                <br>En lenguaje algebraico es (7x - y^2)/4<br>
                <input type="radio" name="p1e2r4" id="p1e2r4a1" value="1">
                <label for="p1e2r4a1">V </label>
                <br>
                <input type="radio" name="p1e2r4" id="p1e2r4a2" value="2">
                <label for="p1e2r4a2">F</label>
                <br>
                <br>
            </p>

            <p>
                "La raíz cuadrada de la diferencia de dos números".
                <br>En lenguaje algebraico es (x - y)^2<br>
                <input type="radio" name="p1e2r5" id="p1e2r5a1" value="1">
                <label for="p1e2r5a1">V </label>
                <br>
                <input type="radio" name="p1e2r5" id="p1e2r5a2" value="2">
                <label for="p1e2r5a2">F</label>
                <br>
                <br>
            </p>

            <p>
                "El producto de dos números consecutivos".
                <br>En lenguaje algebraico es x^2 + x<br>
                <input type="radio" name="p1e2r6" id="p1e2r6a1" value="2">
                <label for="p1e2r6a1">V </label>
                <br>
                <input type="radio" name="p1e2r6" id="p1e2r6a2" value="1">
                <label for="p1e2r6a2">F</label>
                <br>
                <br>
            </p>
            <input type="submit" value="" class="botonesrevisar" name="p1e2Rev">
            <input type="reset" value="" class="botonesreintentar">

            <?php
            if (isset($_POST['p1e2Rev'])) {
                require ('funcionrevradio.php');
                RevisarRadios(6, 2, 1);
            }
            ?>
        </form>
        <?php ?>
        <br>
        <h1 id="resumen">Resumen</h1><br>
        <center><img src="./images/Progresion1img/resumenp1.png" width="40%"></center>

    </section>

    <div id="fot">
        <?php include ('footer.php'); ?>
    </div>
</body>

</html>