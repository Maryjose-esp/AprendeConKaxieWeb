<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link rel="icon" href="images/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style3.css">
    <script src="js/script7.js"></script>
    <title>Progresion 11</title>
</head>

<body>
    <?php
    require ('ifSession.php');
    ?>
    <script src="js/script11.js"></script>
    <aside class="aside" id="aside11">
        <section id="s1">
            Pro
            gre
            sión
            11
        </section>
        <br>
        <Section class="sectionAs">
            <P>Emplea un sistema de coordenadas y algunos elementos básicos de geometría analítica como la distancia
                entre dos puntos en el plano para calcular áreas de figuras geométricas básicas y compara estos
                resultados
                con los cálculos obtenidos empleando principios básicos de geometría sintética.</p>
            <img src="./images/P11.png" id="KaxieP1">
            <b>
                <h3> Metas </h3>
            </b><br>
            <H3>M2</H3>
            <P>Analiza los resultados obtenidos al aplicar procedimientos algorítmicos
                propios del Pensamiento Matemático en la resolución de problemáticas teóricas
                y de su contexto.</P>
            <H3>M1</H3>
            <P>Selecciona un modelo matemático por la pertinencia de sus variables y relaciones para
                explicar una situación, fenómeno o resolver un problema tanto teórico como
                de su contexto. </P>
            <b>
                <h3> Categorías </h3>
            </b><br>
            <H3>C1</H3>
            <P>Procedural</P>
            <H3>C3</H3>
            <P>Solución de problemas y modelación.</P>
            <b>
                <h3> Subcategorías </h3>
            </b><br>
            <H3>S2</H3>
            <P>Elementos geométricos.</P>
            <H3>S1</H3>
            <P>Uso de modelos.</P>
            <!-- <div class="bodfals">
                    <div class="skill">
                        <div class="outer">
                            <div class="inner">
                                <div id ="number">
                                    65%
                                </div>
                            </div>
                        </div>
                    svg
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
                <center><p> Este es tu porcentaje de avance en la progresión </p></center>-->
        </section>
        <div class="anteriorsig">
            <div class="panterior"><a href="progresion10.php"> <img src="images/Anterior.png" width=47px
                        style="margin-bottom: -18px;"> Anterior </a></div>
            <div class="psiguiente"><a href="progresion12.php"> Siguiente <img src="images/Siguiente.png" width=47px
                        style="margin-bottom: -18px;"> </a></div>
        </div>
    </aside>


    <section class="textP">
        <center>
            <div id="indice11" class="indice">
                <p>
                    &emsp;&emsp;&emsp;&emsp;&ensp;Índice<br>
                    <a href="#sdcr">Sistema de coordenadas <br>rectangulares</a><br>
                <p class="sangriindice"><a href="#sdcrejem"> Ejemplos</a></p>
                <p class="sangriindice"><a href="#sdcrejer"> Ejercicios</a></p>
                </p>
                <p>
                    <a href="#udp">Unir dos puntos</a><br>
                    <a href="#dedp">Distancia entre dos puntos</a><br>
                    <a href="#pya">Perímetros y áreas</a><br>
                </p>
                <p class="sangriindice"><a href="#pyaejem"> Ejemplos</a></p>
                <p class="sangriindice"><a href="#pyaejer"> Ejercicios</a></p>
                <p>
                    <a href="#angul">Ángulo de inclinación y<br> pendiente</a><br>
                </p>
                <p class="sangriindice"><a href="#angulejem"> Ejemplos</a></p>
                <p class="sangriindice"><a href="#angulejer"> Ejercicios</a></p>
                <p>
                    <a href="#er">Determinación de la<br> ecuación de la recta</a><br>
                <p class="sangriindice"><a href="#erejer"> Ejercicios</a></p>
                </p>
                <p><a href="#resumen">Resumen</a><br>
                </p>
            </div>
        </center>
        <div class="conceptosclave">
            <div><img src="images/KCClave.png" width=180px height=auto class="conceptosclaveimg"
                    style="margin-right: 20px;"></div>
            <div class="ceonceptoscla">
                <h1>Conceptos clave</h1>
                <P>Pendiente. La pendiente es la tangente del ángulo de inclinación de una recta.</p>
                <br>
            </div>
        </div>
        <h1 id="sdcr">Sistema de coordenadas rectangulares </h1>
        <P>El sistema de coordenadas rectangulares corresponde a lo que la mayoría conoce como "plano cartesiano", el
            cual está formado por dos rectas perpendiculares que intersecan en un punto, mismo que se denomina "origen"
            o "punto cero".<br>
            De estas rectas surgen 4 cuadrantes, los cuales por convención se enumeran del 1 al 4 en números romanos (I,
            II, III y IV).<br><br></P>

        <p>La recta vertical corresponde al eje de las "y", también llamadas "eje de las ordenadas", por otro lado, la
            recta horizontal es el eje de las "x", igualmente conocido como "eje de las abscisas".<br>
        <ul>
            <li>El cuadrante I es totalmente positivo (+).</li>
            <li>El cuadrante II es negativo y positivo (-,+).</li>
            <li>El cuadrante II es negativo en su totalidad (-).</li>
            <li>El cuadrante IV es positivo y negativo (+,-).</li>
        </ul><br><Br>

        En la siguiente imagen se pueden apreciar estos elementos con mayor claridad:</p><br>
        <center><img src="./images/Progresion11img/pcelementos.png" width="350px"></center><br>


        <p>Si se desea ubicar un punto en el plano cartesiano, es necesario conocer dos valores: el valor de "x" y el
            valor de "y". A este conjunto de valores se les denomina "par ordenado de valores", se representa colocando
            los valores dentro de un paréntesis, siempre primero el valor sobre el eje x, separado por una coma del
            valor sobre el eje y, es decir:<br>
            (x, y).<br>
            Además, es recomendable que al punto que se vaya a ubicar se le dé un nombre, generalmente se utilizan las
            letras del abecedario en mayúscula.</p><br>

        <h2 id="sdcrejem">Ejemplos</h2><br>
        A(7,8)<br>
        B(-3,0)<br>
        C(-6,-9)<br>
        D(1,-7.5)<br>
        E(0.7, 6)<br>
        F(10, 34)<br>
        G(-5, -14)<br>
        H(9.9, -6.7)<br>
        I(-n, m)<br><br>

        <p>También es importante saber identificar a qué cuadrante pertenece un punto, para ello no es necesario que
            sean ubicados, por los signos podemos darnos una idea.
            Véanse los puntos W, X, Y y Z:</p><br>
        <center><img src="./images/Progresion11img/cuatropuntos.png" width="350px"></center><br>
        <dl>
            <dt style="color:#011931;">W(1.4, 10)</dt>
            <dl>Los signos de "x" y "y" son positivos, el cuadrante I es totalmente positivo, así que el punto W
                únicamente
                puede estar ubicado en dicho cuadrante.</dl>
            <br>
            <dt style="color:#011931;">X (-6, -8)</dt>
            <dl>Ambos valores son negativos, recordando, el cuadrante III tiene ambos ejes negativos, por ende, el punto
                X
                se halla ubicado en el cuadrante III.</dl>
            <br>
            <dt style="color:#011931;">Y(-1, 1)</dt>
            <dl>El valor x es negativo mientras que el valor y es positivo, por lo cual, el punto Y está ubicado en el
                cuadrante III, puesto que esté cuadrante está formado por un eje x negativo y un eje y positivo.</dl>
            <br>
            <dt style="color:#011931;">Z(7, -0.5)</dt>
            <dl>Ahora la coordenada x es positiva pero la coordenada y no, en este caso (+,-) el cuadrante IV es el que
                contiene dicho punto, pues el eje de las abscisas es positivo pero el de las ordenas es negativo.</dl>
        </dl><br>


        <p>Cosas a considerar:<br>
        <ol style=" list-style-type: lower-alpha;">
            <li>Si un punto es (0, 0) se dice que este se encuentra en el punto de origen, no en algún cuadrante en
                específico.</li>
            <li>Cuando uno de los valores, abscisas u ordenas es 0, el punto no se encuentra en un cuadrante en
                específico, sino que se halla en alguno de los ejes con su respectivo valor. Por ejemplo, el punto (0,9)
                se
                encuentra en el eje positivo de las ordenas, pues el valor de x=0 y el valor de y=9, la siguiente
                ilustración puede ayudar a comprenderlo mejor:</li> <br>
            <div style="height:500px;">
                <img src="./images/Progresion11img/coorcero.png" width="350px" align="left">
                <ul>
                    <li>Punto A. Se encuentra en el punto de origen</li>
                    <li>Punto B. Se encuentra en el eje positivo de las ordenadas </li>
                    <li>Punto C. Se encuentra en el eje negativo de las y</li>
                    <li>Punto D. Se encuentra en el eje positivo de las abscisas </li>
                    <li>Punto E. Se encuentra en el eje negativo de las x</li>
                </ul>
                <br>
            </div>
        </ol>
        </p>
        <br>
        <div class="imgejercicios">
            <div>
                <img id="sdcrejer" src="images/Ejercicios.png" width=180px height=auto style="margin-right: 20px;">
            </div>
            <div id="ejercicios">
                <h2>Ejercicios</h2><br><br>
            </div>
        </div>
        <br>
        1. Determina en qué cuadrante o eje están ubicados los siguientes puntos.<br>
        <span style="color:red;">NOTA: Las respuestas sólo pueden ser del 1-4, "x" y "y", sin comillas y en
            minúsculas.</span><br>
        <form method="post">
            A(0.8, 6)<input type="text" name="p11e1txt1" id="p11e1txt1" size="2" maxlength="1"><br>
            B(-7, 10.3)<input type="text" name="p11e1txt2" id="p11e1txt2" size="2" maxlength="1"><br>
            C(-12, -56)<input type="text" name="p11e1txt3" id="p11e1txt3" size="2" maxlength="1"><br>
            D(0, 7)<input type="text" name="p11e1txt4" id="p11e1txt4" size="2" maxlength="1"><br>
            E(8, -8.9)<input type="text" name="p11e1txt5" id="p11e1txt5" size="2" maxlength="1"><br>
            F(6, 0)<input type="text" name="p11e1txt6" id="p11e1txt6" size="2" maxlength="1"><br>
            G(0, 0)<input type="text" name="p11e1txt7" id="p11e1txt7" size="2" maxlength="1"><br>
            H(-1, 0)<input type="text" name="p11e1txt8" id="p11e1txt8" size="2" maxlength="1"><br>
            I(450, 100)<input type="text" name="p11e1txt9" id="p11e1txt9" size="2" maxlength="1"><br>
            J(-7, -9)<input type="text" name="p11e1txt10" id="p11e1txt10" size="2" maxlength="1"><br>
            <br>
            2. Escribe las coordenadas de los puntos que se ven en la imagen<br>
            <div style="height: 430px;">
                <img src="./images/Progresion11img/pcejer2.png" width="350px" align="left">
                A( <input type=number name="p11e1txt11" id="p11e1txt11">,<input type=number name="p11e1txt12"
                    id="p11e1txt12">)<br>
                B( <input type=number name="p11e1txt13" id="p11e1txt13">,<input type=number name="p11e1txt14"
                    id="p11e1txt14">)<br>
                C( <input type=number name="p11e1txt15" id="p11e1txt15">,<input type=number name="p11e1txt16"
                    id="p11e1txt16">)<br>
                D( <input type=number name="p11e1txt17" id="p11e1txt17">,<input type=number name="p11e1txt18"
                    id="p11e1txt18">)<br>
                E( <input type=number name="p11e1txt19" id="p11e1txt19">,<input type=number name="p11e1txt20"
                    id="p11e1txt20">)<br>
                <div class="pdcontainer">
                    <button type="submit" name="P11E1REV" id="P11E1REV" class="botonesrevisar"></button> <input
                        type="submit" value="" class="botonesreintentar">
                </div>
            </div>
            <Br>
        </form>

        <script>
            let respuestas = [1, 2, 3, 'y', 4, 'x', 0, 'x', 1, 3, 5, 6, 0, -4, 3, 3, -1, -2, 0, 6];
            colores(respuestas, 11, 1);
        </script>

        <?php
        if (isset($_POST['P11E1REV'])) {
            $RespuestasE1 = array(
                1,
                2,
                3,
                'y',
                4,
                'x',
                0,
                'x',
                1,
                3,
                5,
                6,
                0,
                -4,
                3,
                3,
                -1,
                -2,
                0,
                6
            );
            require ('funcionrevtxt.php');
            Caso2txt($RespuestasE1, 1, 11, 'varchar');
        }


        ?>






        <h1 id="udp">Unir dos puntos</h1><br>
        <p>Para unir 2 puntos estos deben estar ubicados en primera instancia en el plano, una vez ubicados se traza
            una línea recta entre ambos. Véase la siguiente imagen:</p><br>
        <center><img src="./images/Progresion11img/ud2p1.png" height="350px"></center>

        <p>Si se tuvieran los puntos A(8,8) y B(1, 9), primero se ubicarían los puntos en el plano, después, ambos se
            unirían trazando una línea recta entre ambos, de tal manera que la unión queda hecha.</p><br>
        <center><img src="./images/Progresion11img/ud2p2.png" width="350px"></center>

        </p>
        <h1 id="dedp">Distancia entre dos puntos</h1><br>
        <p>Como ya se vio, dentro del plano cartesiano es posible ubicar dos puntos y a su vez, determinar la distancia
            que hay entre ambos, para encontrar dicha distancia sólo se tienen que aplicar algunos conocimientos de
            álgebra y el tan conocido teorema de pitágoras.</p>
        <br><br>

        <p>Para analizar este proceso se pondrá como ejemplo la siguiente situación:
            Determinar la distancia que hay entre la isla Kaxbrim y la isla Kaxwi.</p>
        <br><br>
        <center><img src="./images/Progresion11img/img7.png" width="350px"></center><br><br>
        <span class="remember">Recuerda que…</span><br>
        <p>El teorema de Pitágoras dicta que <span class="italic">"en todo triángulo rectángulo, el cuadrado de la
                hipotenusa es igual a la
                suma del cuadrado de sus catetos."</span></p>
        <br>
        <math class="figformulas" xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
            <msup>
                <mrow>
                    <mi>a</mi>
                </mrow>
                <mrow>
                    <mn>2</mn>
                </mrow>
            </msup>
            <mo>+</mo>
            <msup>
                <mrow>
                    <mi>b</mi>
                </mrow>
                <mrow>
                    <mn>2</mn>
                </mrow>
            </msup>
            <mo>=</mo>
            <msup>
                <mrow>
                    <mi>c</mi>
                </mrow>
                <mrow>
                    <mn>2</mn>
                </mrow>
            </msup>
        </math>
        <br><br>

        <p>En la siguiente imagen se puede apreciar que con la unión del punto A y B es posible formar un triángulo
            rectángulo, de tal manera es posible aplicar el teorema de Pitágoras, pues la hipotenusa corresponde a la
            distancia entre las islas del ejemplo.</p>
        <center><img src="./images/Progresion11img/img8.png" width="350px"></center>
        <br><br>
        <p>Sin embargo, antes hay que conocer el valor de los catetos, lo cual es relativamente sencillo haciendo uso de
            las siguientes fórmulas:<br>
        <div>
            <math class="figformulas" xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <msub>
                    <mrow>
                        <mi>c</mi>
                    </mrow>
                    <mrow>
                        <mn>1</mn>
                    </mrow>
                </msub>
                <mo>=</mo>
                <msub>
                    <mrow>
                        <mi>y</mi>
                    </mrow>
                    <mrow>
                        <mn>2</mn>
                    </mrow>
                </msub>
                <mo>-</mo>
                <msub>
                    <mrow>
                        <mi>y</mi>
                    </mrow>
                    <mrow>
                        <mn>1</mn>
                    </mrow>
                </msub>
            </math>

            <math class="figformulas" xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <msub>
                    <mrow>
                        <mi>c</mi>
                    </mrow>
                    <mrow>
                        <mn>2</mn>
                    </mrow>
                </msub>
                <mo>=</mo>
                <msub>
                    <mrow>
                        <mi>x</mi>
                    </mrow>
                    <mrow>
                        <mn>2</mn>
                    </mrow>
                </msub>
                <mo>-</mo>
                <msub>
                    <mrow>
                        <mi>x</mi>
                    </mrow>
                    <mrow>
                        <mn>1</mn>
                    </mrow>
                </msub>
            </math>
        </div>

        <br><br>
        <p>Para entender a quién corresponde cada literal es necesario retomar los puntos A y B, donde A(4, 9) y B(1,
            4). El primer punto, en este caso siguiendo el orden alfabético es el punto A, por lo tanto:<br>
            <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <msub>
                    <mrow>
                        <mi>x</mi>
                    </mrow>
                    <mrow>
                        <mn>1</mn>
                    </mrow>
                </msub>
                <mo>=</mo>
                <mn>4</mn>
            </math>
            <br><math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <msub>
                    <mrow>
                        <mi>y</mi>
                    </mrow>
                    <mrow>
                        <mn>1</mn>
                    </mrow>
                </msub>
                <mo>=</mo>
                <mn>9</mn>
            </math>
            <br>

            <br><br>
            El segundo punto corresponde al B, donde:<br>
            <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <msub>
                    <mrow>
                        <mi>x</mi>
                    </mrow>
                    <mrow>
                        <mn>2</mn>
                    </mrow>
                </msub>
                <mo>=</mo>
                <mn>1</mn>
            </math>
            <br><math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <msub>
                    <mrow>
                        <mi>y</mi>
                    </mrow>
                    <mrow>
                        <mn>2</mn>
                    </mrow>
                </msub>
                <mo>=</mo>
                <mn>4</mn>
            </math>
            <br>
            <br><br>
            Sabiendo estos datos se puede sustituir en las dos pequeñas fórmulas de unos párrafos arriba:<br>
            <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <msub>
                    <mrow>
                        <mi>c</mi>
                    </mrow>
                    <mrow>
                        <mn>1</mn>
                    </mrow>
                </msub>
                <mo>=</mo>
                <msub>
                    <mrow>
                        <mi>y</mi>
                    </mrow>
                    <mrow>
                        <mn>2</mn>
                    </mrow>
                </msub>
                <mo>-</mo>
                <msub>
                    <mrow>
                        <mi>y</mi>
                    </mrow>
                    <mrow>
                        <mn>1</mn>
                    </mrow>
                </msub>
            </math>
            <br>
            <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <msub>
                    <mrow>
                        <mi>c</mi>
                    </mrow>
                    <mrow>
                        <mn>2</mn>
                    </mrow>
                </msub>
                <mo>=</mo>
                <msub>
                    <mrow>
                        <mi>x</mi>
                    </mrow>
                    <mrow>
                        <mn>2</mn>
                    </mrow>
                </msub>
                <mo>-</mo>
                <msub>
                    <mrow>
                        <mi>x</mi>
                    </mrow>
                    <mrow>
                        <mn>1</mn>
                    </mrow>
                </msub>
            </math>

            <br>
            <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <mn>4</mn>
                <mo>-</mo>
                <mn>9</mn>
                <mo>=</mo>
                <mo>-</mo>
                <mn>5</mn>
            </math>
            <br><math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <mn>1</mn>
                <mo>-</mo>
                <mn>4</mn>
                <mo>=</mo>
                <mo>-</mo>
                <mn>3</mn>
            </math>

        </p><br>
        <p>El siguiente paso es elevar al cuadrado los resultados obtenidos:<br>
            <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <msup>
                    <mrow>
                        <mfenced separators="|">
                            <mrow>
                                <mo>-</mo>
                                <mn>5</mn>
                            </mrow>
                        </mfenced>
                    </mrow>
                    <mrow>
                        <mn>2</mn>
                    </mrow>
                </msup>
                <mo>=</mo>
                <mn>25</mn>
            </math><br>
            <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <msup>
                    <mrow>
                        <mfenced separators="|">
                            <mrow>
                                <mo>-</mo>
                                <mn>3</mn>
                            </mrow>
                        </mfenced>
                    </mrow>
                    <mrow>
                        <mn>2</mn>
                    </mrow>
                </msup>
                <mo>=</mo>
                <mn>9</mn>
            </math>
        </p><br><br>

        <p>De esta manera se obtiene la medida de los catetos del triángulo formado. Lo que falta por hacer es despejar
            la literal c, es decir, sumar la medida de los catetos y al resultado de ello sacarle raíz cuadrada:<br>
            <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <mi>c</mi>
                <mo>=</mo>
                <mroot>
                    <mrow>
                        <mn>25</mn>
                        <mo>+</mo>
                        <mn>9</mn>
                    </mrow>
                    <mrow>
                        <mn>2</mn>
                    </mrow>
                </mroot>
            </math><br>
            <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <mi>c</mi>
                <mo>=</mo>
                <mroot>
                    <mrow>
                        <mn>34</mn>
                    </mrow>
                    <mrow>
                        <mn>2</mn>
                    </mrow>
                </mroot>
            </math><br>
            <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <mi>c</mi>
                <mo>=</mo>
                <mn>5.83</mn>
            </math>
        </p><br><br>

        Así, se tiene que la distancia entre ambas islas es de 5.83 unidades.<br><br>

        <p>Finalmente, se puede deducir la siguiente fórmula para calcular la distancia entre dos puntos ubicados en el
            plano cartesiano:<br>
            <math class="figformulas" xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <mi>d</mi>
                <mo>=</mo>
                <mroot>
                    <mrow>
                        <msup>
                            <mrow>
                                <mfenced separators="|">
                                    <mrow>
                                        <mo>(</mo>
                                        <msub>
                                            <mrow>
                                                <mi>x</mi>
                                            </mrow>
                                            <mrow>
                                                <mn>2</mn>
                                            </mrow>
                                        </msub>
                                        <mo>-</mo>
                                        <msub>
                                            <mrow>
                                                <mi>x</mi>
                                            </mrow>
                                            <mrow>
                                                <mn>1</mn>
                                            </mrow>
                                        </msub>
                                        <mo>)</mo>
                                    </mrow>
                                </mfenced>
                            </mrow>
                            <mrow>
                                <mn>2</mn>
                            </mrow>
                        </msup>
                        <mo>+</mo>
                        <msup>
                            <mrow>
                                <mo>(</mo>
                                <msub>
                                    <mrow>
                                        <mi>y</mi>
                                    </mrow>
                                    <mrow>
                                        <mn>2</mn>
                                    </mrow>
                                </msub>
                                <mo>-</mo>
                                <msub>
                                    <mrow>
                                        <mi>y</mi>
                                    </mrow>
                                    <mrow>
                                        <mn>1</mn>
                                    </mrow>
                                </msub>
                                <mo>)</mo>
                            </mrow>
                            <mrow>
                                <mn>2</mn>
                            </mrow>
                        </msup>
                    </mrow>
                    <mrow>
                        <mn>2</mn>
                    </mrow>
                </mroot>
            </math>
            <br><br> También es válida la siguiente fórmula, donde se invierte la diferencia de los valores en los ejes.
            <br>
            <math class="figformulas" xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <mi>d</mi>
                <mo>=</mo>
                <mroot>
                    <mrow>
                        <msup>
                            <mrow>
                                <mfenced separators="|">
                                    <mrow>
                                        <mo>(</mo>
                                        <msub>
                                            <mrow>
                                                <mi>x</mi>
                                            </mrow>
                                            <mrow>
                                                <mn>1</mn>
                                            </mrow>
                                        </msub>
                                        <mo>-</mo>
                                        <msub>
                                            <mrow>
                                                <mi>x</mi>
                                            </mrow>
                                            <mrow>
                                                <mn>2</mn>
                                            </mrow>
                                        </msub>
                                        <mo>)</mo>
                                    </mrow>
                                </mfenced>
                            </mrow>
                            <mrow>
                                <mn>2</mn>
                            </mrow>
                        </msup>
                        <mo>+</mo>
                        <msup>
                            <mrow>
                                <mo>(</mo>
                                <msub>
                                    <mrow>
                                        <mi>y</mi>
                                    </mrow>
                                    <mrow>
                                        <mn>1</mn>
                                    </mrow>
                                </msub>
                                <mo>-</mo>
                                <msub>
                                    <mrow>
                                        <mi>y</mi>
                                    </mrow>
                                    <mrow>
                                        <mn>2</mn>
                                    </mrow>
                                </msub>
                                <mo>)</mo>
                            </mrow>
                            <mrow>
                                <mn>2</mn>
                            </mrow>
                        </msup>
                    </mrow>
                    <mrow>
                        <mn>2</mn>
                    </mrow>
                </mroot>
            </math>
        </p> <br>

        <h1 id="pya">Perímetros y áreas</h1><br>
        <p>Es posible ubicar figuras geométricas en el plano cartesiano, y con la geometría analítica podemos obtener
            datos que calculamos cuando no usamos un plano, entonces ¿Cómo se calcula su área y perímetro?
            Comencemos con lo más sencillo, el perímetro.</p><br>
        <br>
        <p>Este concepto se refiere a la suma de la medida de sus lados. Se puede calcular analíticamente haciendo uso
            de la fórmula que usamos en "distancia de 2 puntos", para facilitar el trabajo hay que distinguir entre
            polígono regular e irregular, véase la siguiente imagen:</p><br>
        <img src="./images/Progresion11img/img24.png" width="80%">
        <br>
        <p>Teniendo claro lo que son los polígonos regulares e irregulares, se puede mencionar que cuando se tenga un
            polígono con todos sus lados iguales se deberá calcular la distancia entre dos vértices y posteriormente,
            multiplicar el resultado por la cantidad de lados del polígono.</p><br>
        <br>
        <p>Lo anterior no se puede hacer en aquellas figuras cuyos lados no son iguales, puesto que en este caso es
            necesario calcular la distancia entre cada uno de los pares de vértices que la componen.</p><br>
        <br>
        <p>El área es la superficie delimitada por el perímetro. Para calcular el área de una figura que se encuentra en
            el plano cartesiano se hará uso de la siguiente fórmula:</p><br>
        <math class="figformulas" xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">
            <mi>á</mi>
            <mi>r</mi>
            <mi>e</mi>
            <mi>a</mi>
            <mo>=</mo>
            <mfrac>
                <mrow>
                    <mn>1</mn>
                    <mi> </mi>
                </mrow>
                <mrow>
                    <mn>2</mn>
                </mrow>
            </mfrac>
            <mrow>
                <mrow>
                    <mi mathvariant="normal">det</mi>
                </mrow>

                <mrow>

                    <mrow>

                        <mtable>
                            <mtr>
                                <mtd>
                                    <mo>⁡[</mo>
                                    <mrow>
                                        <mtable>
                                            <mtr>
                                                <mtd>
                                                    <mrow>
                                                        <mtable>
                                                            <mtr>
                                                                <mtd>
                                                                    <msub>
                                                                        <mrow>
                                                                            <mi>x</mi>
                                                                        </mrow>
                                                                        <mrow>
                                                                            <mn>1</mn>
                                                                        </mrow>
                                                                    </msub>
                                                                </mtd>
                                                                <mtd>
                                                                    <msub>
                                                                        <mrow>
                                                                            <mi>y</mi>
                                                                        </mrow>
                                                                        <mrow>
                                                                            <mn>1</mn>
                                                                        </mrow>
                                                                    </msub>
                                                                </mtd>
                                                            </mtr>
                                                            <mtr>
                                                                <mtd>
                                                                    <msub>
                                                                        <mrow>
                                                                            <mi>x</mi>
                                                                        </mrow>
                                                                        <mrow>
                                                                            <mn>2</mn>
                                                                        </mrow>
                                                                    </msub>
                                                                </mtd>
                                                                <mtd>
                                                                    <msub>
                                                                        <mrow>
                                                                            <mi>y</mi>
                                                                        </mrow>
                                                                        <mrow>
                                                                            <mn>2</mn>
                                                                        </mrow>
                                                                    </msub>
                                                                </mtd>
                                                            </mtr>
                                                            <mtr>
                                                                <mtd>
                                                                    <mo>⋮</mo>
                                                                </mtd>
                                                                <mtd>
                                                                    <mo>⋮</mo>
                                                                </mtd>
                                                            </mtr>
                                                        </mtable>
                                                    </mrow>
                                                </mtd>
                                            </mtr>
                                            <mtr>
                                                <mtd>
                                                    <mrow>
                                                        <maligngroup />
                                                        <mtable>
                                                            <mtr>
                                                                <mtd>
                                                                    <msub>
                                                                        <mrow>
                                                                            <mi>x</mi>
                                                                        </mrow>
                                                                        <mrow>
                                                                            <mi>n</mi>
                                                                        </mrow>
                                                                    </msub>
                                                                </mtd>
                                                                <mtd>
                                                                    <msub>
                                                                        <mrow>
                                                                            <mi>y</mi>
                                                                        </mrow>
                                                                        <mrow>
                                                                            <mi>n</mi>
                                                                        </mrow>
                                                                    </msub>
                                                                </mtd>
                                                            </mtr>
                                                        </mtable>
                                                    </mrow>
                                                </mtd>
                                            </mtr>
                                        </mtable>
                                    </mrow>
                                </mtd>
                            </mtr>
                            <mtr>
                                <mtd>
                                    <mrow>
                                        <maligngroup />
                                        <mtable>
                                            <mtr>
                                                <mtd>
                                                    <msub>
                                                        <mrow>
                                                            <mi>x</mi>
                                                        </mrow>
                                                        <mrow>
                                                            <mn>1</mn>
                                                        </mrow>
                                                    </msub>
                                                </mtd>
                                                <mtd>
                                                    <msub>
                                                        <mrow>
                                                            <mi>y</mi>
                                                        </mrow>
                                                        <mrow>
                                                            <mn>1</mn>
                                                        </mrow>
                                                    </msub>
                                                </mtd>
                                            </mtr>
                                        </mtable>
                                    </mrow>
                                </mtd>
                            </mtr>
                        </mtable>
                        <mo>]</mo>
                    </mrow>
                    </mfenced>
                </mrow>
            </mrow>
        </math>

        <br>
        <p>No te asustes, puede parecer algo complejo por la introducción del concepto determinante pero para ello vamos
            a explicar paso por paso.</p><br>
        <br>
        <p>A continuación explicaremos cómo hacer los cálculos del perímetro y área en ambos casos, partiendo por
            explicar el término de determinante.<br>
            El determinante es un valor que se asocia a una matriz, es decir, una medida numérica que proporciona
            información importante acerca del conjunto de elementos de la matriz y sus transformaciones lineales.<br>
            Y con lo anterior ingresa un nuevo término, "matriz".<br>
            La matriz se entiende como un conjunto de números, distribuidos a través de columnas y filas, en la fórmula
            del perímetro la matriz se compone de 2 columnas y x filas.</p><br>
        <br>
        <p>Para escribir la determinante de la fórmula se escogerá un punto y se irán recorriendo en sentido contrario
            de las manecillas del reloj hasta llegar y escribir la coordenada por la que se empezó. </p><br>
        <br>
        Todo lo anterior lo veremos aplicado en el siguiente ejemplo.<br>
        <img src="./images/Progresion11img/img9.png" width="30%">
        <br>
        Las coordenadas de cada vértice son las siguientes:<br>
        A(0, 4)<br>
        B(-3, 3)<br>
        C(-2, 2)<br>
        D(1, 2)<br>
        <br>
        <p>Con esto, lo primero a calcular será el perímetro, sacando la medida de los 4 segmentos o aristas; dado que
            es un polígono irregular, se tendrá que calcular la medida de cada segmento, vamos paso por paso.</p>
        <br><br>
        <div style="display:flex;">
            <div>
                Segmento AB<br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                    <mi>d</mi>
                    <mo>=</mo>
                    <mroot>
                        <mrow>
                            <msup>
                                <mrow>
                                    <mfenced separators="|">
                                        <mrow>
                                            <mo>(</mo>
                                            <msub>
                                                <mrow>
                                                    <mi>x</mi>
                                                </mrow>
                                                <mrow>
                                                    <mn>2</mn>
                                                </mrow>
                                            </msub>
                                            <mo>-</mo>
                                            <msub>
                                                <mrow>
                                                    <mi>x</mi>
                                                </mrow>
                                                <mrow>
                                                    <mn>1</mn>
                                                </mrow>
                                            </msub>
                                            <mo>)</mo>
                                        </mrow>
                                    </mfenced>
                                </mrow>
                                <mrow>
                                    <mn>2</mn>
                                </mrow>
                            </msup>
                            <mo>+</mo>
                            <msup>
                                <mrow>
                                    <mo>(</mo>
                                    <msub>
                                        <mrow>
                                            <mi>y</mi>
                                        </mrow>
                                        <mrow>
                                            <mn>2</mn>
                                        </mrow>
                                    </msub>
                                    <mo>-</mo>
                                    <msub>
                                        <mrow>
                                            <mi>y</mi>
                                        </mrow>
                                        <mrow>
                                            <mn>1</mn>
                                        </mrow>
                                    </msub>
                                    <mo>)</mo>
                                </mrow>
                                <mrow>
                                    <mn>2</mn>
                                </mrow>
                            </msup>
                        </mrow>
                        <mrow>
                            <mn>2</mn>
                        </mrow>
                    </mroot>
                </math>
                <br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">
                    <mi>d</mi>
                    <mo>=</mo>
                    <mi> </mi>
                    <msqrt>
                        <msup>
                            <mrow>
                                <mo>(</mo>
                                <mfenced separators="|">
                                    <mrow>
                                        <mo>-</mo>
                                        <mn>3</mn>
                                        <mo>-</mo>
                                        <mn>0</mn>
                                    </mrow>
                                </mfenced>
                                <mo>)</mo>
                            </mrow>
                            <mrow>
                                <mn>2</mn>
                            </mrow>
                        </msup>
                        <mo>+</mo>
                        <msup>
                            <mrow>
                                <mfenced separators="|">
                                    <mrow>
                                        <mo>(</mo>
                                        <mn>3</mn>
                                        <mo>-</mo>
                                        <mn>4</mn>
                                        <mo>)</mo>
                                    </mrow>
                                </mfenced>
                            </mrow>
                            <mrow>
                                <mn>2</mn>
                            </mrow>
                        </msup>
                    </msqrt>
                </math>
                <br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">
                    <mi>d</mi>
                    <mo>=</mo>
                    <mi> </mi>
                    <msqrt>
                        <msup>
                            <mrow>
                                <mfenced separators="|">
                                    <mrow>
                                        <mo>-</mo>
                                        <mn>3</mn>
                                    </mrow>
                                </mfenced>
                            </mrow>
                            <mrow>
                                <mn>2</mn>
                            </mrow>
                        </msup>
                        <mo>+</mo>
                        <msup>
                            <mrow>
                                <mfenced separators="|">
                                    <mrow>
                                        <mo>(</mo>
                                        <mo>-</mo>
                                        <mn>1</mn>
                                        <mo>)</mo>
                                    </mrow>
                                </mfenced>
                            </mrow>
                            <mrow>
                                <mn>2</mn>
                            </mrow>
                        </msup>
                    </msqrt>
                </math>
                <br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">
                    <mi>d</mi>
                    <mo>=</mo>
                    <mi> </mi>
                    <msqrt>
                        <mn>9</mn>
                        <mo>+</mo>
                        <mn>1</mn>
                    </msqrt>
                </math>
                <br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">
                    <mi>d</mi>
                    <mo>=</mo>
                    <mi> </mi>
                    <msqrt>
                        <mn>10</mn>
                    </msqrt>
                </math>
                <br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">
                    <mi>d</mi>
                    <mo>=</mo>
                    <mi> </mi>
                    <mn>3.1</mn>
                </math>

                <br>
            </div>

            <div>
                Segmento BC<br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                    <mi>d</mi>
                    <mo>=</mo>
                    <mroot>
                        <mrow>
                            <msup>
                                <mrow>
                                    <mfenced separators="|">
                                        <mrow>
                                            <mo>(</mo>
                                            <msub>
                                                <mrow>
                                                    <mi>x</mi>
                                                </mrow>
                                                <mrow>
                                                    <mn>2</mn>
                                                </mrow>
                                            </msub>
                                            <mo>-</mo>
                                            <msub>
                                                <mrow>
                                                    <mi>x</mi>
                                                </mrow>
                                                <mrow>
                                                    <mn>1</mn>
                                                </mrow>
                                            </msub>
                                            <mo>)</mo>
                                        </mrow>
                                    </mfenced>
                                </mrow>
                                <mrow>
                                    <mn>2</mn>
                                </mrow>
                            </msup>
                            <mo>+</mo>
                            <msup>
                                <mrow>
                                    <mo>(</mo>
                                    <msub>
                                        <mrow>
                                            <mi>y</mi>
                                        </mrow>
                                        <mrow>
                                            <mn>2</mn>
                                        </mrow>
                                    </msub>
                                    <mo>-</mo>
                                    <msub>
                                        <mrow>
                                            <mi>y</mi>
                                        </mrow>
                                        <mrow>
                                            <mn>1</mn>
                                        </mrow>
                                    </msub>
                                    <mo>)</mo>
                                </mrow>
                                <mrow>
                                    <mn>2</mn>
                                </mrow>
                            </msup>
                        </mrow>
                        <mrow>
                            <mn>2</mn>
                        </mrow>
                    </mroot>
                </math>
                <br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">
                    <mi>d</mi>
                    <mo>=</mo>
                    <mi> </mi>
                    <msqrt>
                        <msup>
                            <mrow>
                                <mo>[</mo>
                                <mrow>
                                    <mo>-</mo>
                                    <mn>2</mn>
                                    <mo>-</mo>

                                    <mo>(</mo>
                                    <mrow>
                                        <mo>-</mo>
                                        <mn>3</mn>
                                    </mrow>
                                    <mo>)</mo>
                                    <mo>]</mo>
                                </mrow>
                                </mfenced>
                            </mrow>
                            <mrow>
                                <mn>2</mn>
                            </mrow>
                        </msup>
                        <mo>+</mo>
                        <msup>
                            <mrow>
                                <mfenced separators="|">
                                    <mrow>
                                        <mo>(</mo>
                                        <mn>2</mn>
                                        <mo>-</mo>
                                        <mn>3</mn>
                                        <mo>)</mo>
                                    </mrow>
                                </mfenced>
                            </mrow>
                            <mrow>
                                <mn>2</mn>
                            </mrow>
                        </msup>
                    </msqrt>
                </math>
                <br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">
                    <mi>d</mi>
                    <mo>=</mo>
                    <mi> </mi>
                    <msqrt>
                        <msup>
                            <mrow>
                                <mfenced separators="|">
                                    <mrow>
                                        <mo>(</mo>

                                        <mo>-</mo>
                                        <mn>2</mn>
                                        <mo>+</mo>
                                        <mn>3</mn>
                                        <mo>)</mo>
                                    </mrow>
                                </mfenced>
                            </mrow>
                            <mrow>
                                <mn>2</mn>
                            </mrow>
                        </msup>
                        <mo>+</mo>
                        <msup>
                            <mrow>
                                <mfenced separators="|">
                                    <mrow>
                                        <mo>(</mo>
                                        <mo>-</mo>
                                        <mn>1</mn>
                                        <mo>)</mo>
                                    </mrow>
                                </mfenced>
                            </mrow>
                            <mrow>
                                <mn>2</mn>
                            </mrow>
                        </msup>
                    </msqrt>
                </math>
                <br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">
                    <mi>d</mi>
                    <mo>=</mo>
                    <mi> </mi>
                    <msqrt>
                        <msup>
                            <mrow>
                                <mfenced separators="|">
                                    <mrow>
                                        <mn>1</mn>
                                    </mrow>
                                </mfenced>
                            </mrow>
                            <mrow>
                                <mn>2</mn>
                            </mrow>
                        </msup>
                        <mo>+</mo>
                        <msup>
                            <mrow>
                                <mfenced separators="|">
                                    <mrow>
                                        <mo>(</mo>
                                        <mo>-</mo>
                                        <mn>1</mn>
                                        <mo>)</mo>
                                    </mrow>
                                </mfenced>
                            </mrow>
                            <mrow>
                                <mn>2</mn>
                            </mrow>
                        </msup>
                    </msqrt>
                </math>
                <br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">
                    <mi>d</mi>
                    <mo>=</mo>
                    <mi> </mi>
                    <msqrt>
                        <mn>1</mn>
                        <mo>+</mo>
                        <mn>1</mn>
                    </msqrt>
                </math>
                <br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">
                    <mi>d</mi>
                    <mo>=</mo>
                    <mi> </mi>
                    <msqrt>
                        <mn>2</mn>
                    </msqrt>
                </math>
                <br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">
                    <mi>d</mi>
                    <mo>=</mo>
                    <mi> </mi>
                    <mn>1.4</mn>
                </math>
                <br>
            </div>

            <div>
                Segmento CD<br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                    <mi>d</mi>
                    <mo>=</mo>
                    <mroot>
                        <mrow>
                            <msup>
                                <mrow>
                                    <mfenced separators="|">
                                        <mrow>
                                            <mo>(</mo>
                                            <msub>
                                                <mrow>
                                                    <mi>x</mi>
                                                </mrow>
                                                <mrow>
                                                    <mn>2</mn>
                                                </mrow>
                                            </msub>
                                            <mo>-</mo>
                                            <msub>
                                                <mrow>
                                                    <mi>x</mi>
                                                </mrow>
                                                <mrow>
                                                    <mn>1</mn>
                                                </mrow>
                                            </msub>
                                            <mo>)</mo>
                                        </mrow>
                                    </mfenced>
                                </mrow>
                                <mrow>
                                    <mn>2</mn>
                                </mrow>
                            </msup>
                            <mo>+</mo>
                            <msup>
                                <mrow>
                                    <mo>(</mo>
                                    <msub>
                                        <mrow>
                                            <mi>y</mi>
                                        </mrow>
                                        <mrow>
                                            <mn>2</mn>
                                        </mrow>
                                    </msub>
                                    <mo>-</mo>
                                    <msub>
                                        <mrow>
                                            <mi>y</mi>
                                        </mrow>
                                        <mrow>
                                            <mn>1</mn>
                                        </mrow>
                                    </msub>
                                    <mo>)</mo>
                                </mrow>
                                <mrow>
                                    <mn>2</mn>
                                </mrow>
                            </msup>
                        </mrow>
                        <mrow>
                            <mn>2</mn>
                        </mrow>
                    </mroot>
                </math>
                <br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">
                    <mi>d</mi>
                    <mo>=</mo>
                    <mi> </mi>
                    <msqrt>
                        <msup>
                            <mrow>
                                <mfenced separators="|">
                                    <mrow>
                                        <mo>[</mo>
                                        <mn>1</mn>
                                        <mo>-</mo>
                                        <mfenced open="[" close="]" separators="|">
                                            <mrow>
                                                <mo>(</mo>
                                                <mo>-</mo>
                                                <mn>2</mn>
                                                <mo>)</mo>
                                            </mrow>
                                        </mfenced>
                                        <mo>]</mo>
                                    </mrow>
                                </mfenced>
                            </mrow>
                            <mrow>
                                <mn>2</mn>
                            </mrow>
                        </msup>
                        <mo>+</mo>
                        <msup>
                            <mrow>
                                <mfenced separators="|">
                                    <mrow>
                                        <mo>(</mo>
                                        <mn>2</mn>
                                        <mo>-</mo>
                                        <mn>2</mn>
                                        <mo>)</mo>
                                    </mrow>
                                </mfenced>
                            </mrow>
                            <mrow>
                                <mn>2</mn>
                            </mrow>
                        </msup>
                    </msqrt>
                </math>
                <br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">
                    <mi>d</mi>
                    <mo>=</mo>
                    <mi> </mi>
                    <msqrt>
                        <msup>
                            <mrow>
                                <mfenced separators="|">
                                    <mrow>
                                        <mo>(</mo>
                                        <mn>1</mn>
                                        <mo>+</mo>
                                        <mn>2</mn>
                                        <mo>)</mo>
                                    </mrow>
                                </mfenced>
                            </mrow>
                            <mrow>
                                <mn>2</mn>
                            </mrow>
                        </msup>
                        <mo>+</mo>
                        <msup>
                            <mrow>
                                <mfenced separators="|">
                                    <mrow>
                                        <mn>0</mn>
                                    </mrow>
                                </mfenced>
                            </mrow>
                            <mrow>
                                <mn>2</mn>
                            </mrow>
                        </msup>
                    </msqrt>
                </math>
                <br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">
                    <mi>d</mi>
                    <mo>=</mo>
                    <mi> </mi>
                    <msqrt>
                        <msup>
                            <mrow>
                                <mfenced separators="|">
                                    <mrow>
                                        <mn>3</mn>
                                    </mrow>
                                </mfenced>
                            </mrow>
                            <mrow>
                                <mn>2</mn>
                            </mrow>
                        </msup>
                        <mo>+</mo>
                        <mn>0</mn>
                    </msqrt>
                </math>
                <br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">
                    <mi>d</mi>
                    <mo>=</mo>
                    <mi> </mi>
                    <msqrt>
                        <mn>9</mn>
                    </msqrt>
                </math>
                <br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">
                    <mi>d</mi>
                    <mo>=</mo>
                    <mi> </mi>
                    <mn>3</mn>
                </math>
                <br>
            </div>


        </div>
        <div>
            Segmento DA<br>
            <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <mi>d</mi>
                <mo>=</mo>
                <mroot>
                    <mrow>
                        <msup>
                            <mrow>
                                <mfenced separators="|">
                                    <mrow>
                                        <mo>(</mo>
                                        <msub>
                                            <mrow>
                                                <mi>x</mi>
                                            </mrow>
                                            <mrow>
                                                <mn>2</mn>
                                            </mrow>
                                        </msub>
                                        <mo>-</mo>
                                        <msub>
                                            <mrow>
                                                <mi>x</mi>
                                            </mrow>
                                            <mrow>
                                                <mn>1</mn>
                                            </mrow>
                                        </msub>
                                        <mo>)</mo>
                                    </mrow>
                                </mfenced>
                            </mrow>
                            <mrow>
                                <mn>2</mn>
                            </mrow>
                        </msup>
                        <mo>+</mo>
                        <msup>
                            <mrow>
                                <mo>(</mo>
                                <msub>
                                    <mrow>
                                        <mi>y</mi>
                                    </mrow>
                                    <mrow>
                                        <mn>2</mn>
                                    </mrow>
                                </msub>
                                <mo>-</mo>
                                <msub>
                                    <mrow>
                                        <mi>y</mi>
                                    </mrow>
                                    <mrow>
                                        <mn>1</mn>
                                    </mrow>
                                </msub>
                                <mo>)</mo>
                            </mrow>
                            <mrow>
                                <mn>2</mn>
                            </mrow>
                        </msup>
                    </mrow>
                    <mrow>
                        <mn>2</mn>
                    </mrow>
                </mroot>
            </math>
            <br>
            <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">
                <mi>d</mi>
                <mo>=</mo>
                <mi> </mi>
                <msqrt>
                    <msup>
                        <mrow>
                            <mfenced separators="|">
                                <mrow>
                                    <mo>(</mo>
                                    <mn>0</mn>
                                    <mo>-</mo>
                                    <mn>1</mn>
                                    <mo>)</mo>
                                </mrow>
                            </mfenced>
                        </mrow>
                        <mrow>
                            <mn>2</mn>
                        </mrow>
                    </msup>
                    <mo>+</mo>
                    <msup>
                        <mrow>
                            <mfenced separators="|">
                                <mrow>
                                    <mo>(</mo>
                                    <mn>4</mn>
                                    <mo>-</mo>
                                    <mn>2</mn>
                                    <mo>)</mo>
                                </mrow>
                            </mfenced>
                        </mrow>
                        <mrow>
                            <mn>2</mn>
                        </mrow>
                    </msup>
                </msqrt>
            </math>
            <br>
            <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">
                <mi>d</mi>
                <mo>=</mo>
                <mi> </mi>
                <msqrt>
                    <msup>
                        <mrow>
                            <mfenced separators="|">
                                <mrow>
                                    <mo>-</mo>
                                    <mn>1</mn>
                                </mrow>
                            </mfenced>
                        </mrow>
                        <mrow>
                            <mn>2</mn>
                        </mrow>
                    </msup>
                    <mo>+</mo>
                    <msup>
                        <mrow>
                            <mfenced separators="|">
                                <mrow>
                                    <mn>2</mn>
                                </mrow>
                            </mfenced>
                        </mrow>
                        <mrow>
                            <mn>2</mn>
                        </mrow>
                    </msup>
                </msqrt>
            </math>
            <br>
            <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">
                <mi>d</mi>
                <mo>=</mo>
                <mi> </mi>
                <msqrt>
                    <mn>1</mn>
                    <mo>+</mo>
                    <mn>4</mn>
                </msqrt>
            </math>
            <br>
            <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">
                <mi>d</mi>
                <mo>=</mo>
                <mi> </mi>
                <msqrt>
                    <mn>5</mn>
                </msqrt>
            </math>
            <br>
            <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">
                <mi>d</mi>
                <mo>=</mo>
                <mi> </mi>
                <mn>2.2</mn>
            </math>
            <br>
        </div>

        <br>

        <p>Ya con la medida de los lados calculada, es momento de sumar los resultados a fin de obtener la medida del
            perímetro:</p><br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">
            <mi>p</mi>
            <mo>=</mo>
            <mn>3.1</mn>
            <mo>+</mo>
            <mn>1.4</mn>
            <mo>+</mo>
            <mn>3</mn>
            <mo>+</mo>
            <mi> </mi>
            <mn>2.2</mn>
        </math>
        <br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">
            <mi>p</mi>
            <mo>=</mo>
            <mn>9.7</mn>
        </math>

        <br>
        <p>Ahora, para obtener el área es momento de emplear la fórmula, sustituyendo los valores en primera instancia.
            Para ello, empezaremos recorriendo los puntos del A al B, en sentido contrario a las manecillas del reloj,
            de esta manera, las coordenadas se sustituyen en el siguiente orden:</p>
        A<br>
        B<br>
        C<br>
        D<br>
        A<br>
        Veámoslo a continuación:<br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">
            <mi>á</mi>
            <mi>r</mi>
            <mi>e</mi>
            <mi>a</mi>
            <mo>=</mo>
            <mfrac>
                <mrow>
                    <mn>1</mn>
                    <mi> </mi>
                </mrow>
                <mrow>
                    <mn>2</mn>
                </mrow>
            </mfrac>
            <mrow>
                <mrow>
                    <mi mathvariant="normal">det</mi>
                </mrow>
                <mo>⁡</mo>
                <mrow>
                    <mfenced open="[" close="]" separators="|">
                        <mrow>
                            <mtable>
                                <mtr>
                                    <mtd>
                                        <mrow>
                                            <maligngroup />
                                            <mtable>
                                                <mtr>
                                                    <mtd>
                                                        <mrow>
                                                            <maligngroup />
                                                            <mtable>
                                                                <mtr>
                                                                    <mtd>
                                                                        <msub>
                                                                            <mrow>
                                                                                <mi>x</mi>
                                                                            </mrow>
                                                                            <mrow>
                                                                                <mn>1</mn>
                                                                            </mrow>
                                                                        </msub>
                                                                    </mtd>
                                                                    <mtd>
                                                                        <msub>
                                                                            <mrow>
                                                                                <mi>y</mi>
                                                                            </mrow>
                                                                            <mrow>
                                                                                <mn>1</mn>
                                                                            </mrow>
                                                                        </msub>
                                                                    </mtd>
                                                                </mtr>
                                                                <mtr>
                                                                    <mtd>
                                                                        <msub>
                                                                            <mrow>
                                                                                <mi>x</mi>
                                                                            </mrow>
                                                                            <mrow>
                                                                                <mn>2</mn>
                                                                            </mrow>
                                                                        </msub>
                                                                    </mtd>
                                                                    <mtd>
                                                                        <msub>
                                                                            <mrow>
                                                                                <mi>y</mi>
                                                                            </mrow>
                                                                            <mrow>
                                                                                <mn>2</mn>
                                                                            </mrow>
                                                                        </msub>
                                                                    </mtd>
                                                                </mtr>
                                                                <mtr>
                                                                    <mtd>
                                                                        <mo>⋮</mo>
                                                                    </mtd>
                                                                    <mtd>
                                                                        <mo>⋮</mo>
                                                                    </mtd>
                                                                </mtr>
                                                            </mtable>
                                                        </mrow>
                                                    </mtd>
                                                </mtr>
                                                <mtr>
                                                    <mtd>
                                                        <mrow>
                                                            <maligngroup />
                                                            <mtable>
                                                                <mtr>
                                                                    <mtd>
                                                                        <msub>
                                                                            <mrow>
                                                                                <mi>x</mi>
                                                                            </mrow>
                                                                            <mrow>
                                                                                <mi>n</mi>
                                                                            </mrow>
                                                                        </msub>
                                                                    </mtd>
                                                                    <mtd>
                                                                        <msub>
                                                                            <mrow>
                                                                                <mi>y</mi>
                                                                            </mrow>
                                                                            <mrow>
                                                                                <mi>n</mi>
                                                                            </mrow>
                                                                        </msub>
                                                                    </mtd>
                                                                </mtr>
                                                            </mtable>
                                                        </mrow>
                                                    </mtd>
                                                </mtr>
                                            </mtable>
                                        </mrow>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mrow>
                                            <maligngroup />
                                            <mtable>
                                                <mtr>
                                                    <mtd>
                                                        <msub>
                                                            <mrow>
                                                                <mi>x</mi>
                                                            </mrow>
                                                            <mrow>
                                                                <mn>1</mn>
                                                            </mrow>
                                                        </msub>
                                                    </mtd>
                                                    <mtd>
                                                        <msub>
                                                            <mrow>
                                                                <mi>y</mi>
                                                            </mrow>
                                                            <mrow>
                                                                <mn>1</mn>
                                                            </mrow>
                                                        </msub>
                                                    </mtd>
                                                </mtr>
                                            </mtable>
                                        </mrow>
                                    </mtd>
                                </mtr>
                            </mtable>
                        </mrow>
                    </mfenced>
                </mrow>
            </mrow>
        </math>
        <br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">
            <mi>á</mi>
            <mi>r</mi>
            <mi>e</mi>
            <mi>a</mi>
            <mo>=</mo>
            <mfrac>
                <mrow>
                    <mn>1</mn>
                    <mi> </mi>
                </mrow>
                <mrow>
                    <mn>2</mn>
                </mrow>
            </mfrac>
            <mrow>
                <mrow>
                    <mi mathvariant="normal">det</mi>
                </mrow>
                <mo>⁡</mo>
                <mrow>
                    <mfenced open="[" close="]" separators="|">
                        <mrow>
                            <mtable>
                                <mtr>
                                    <mtd>
                                        <mrow>
                                            <maligngroup />
                                            <mtable>
                                                <mtr>
                                                    <mtd>
                                                        <mrow>
                                                            <maligngroup />
                                                            <mtable>
                                                                <mtr>
                                                                    <mtd>
                                                                        <mn>0</mn>
                                                                    </mtd>
                                                                    <mtd>
                                                                        <mn>4</mn>
                                                                    </mtd>
                                                                </mtr>
                                                                <mtr>
                                                                    <mtd>
                                                                        <mo>-</mo>
                                                                        <mn>3</mn>
                                                                    </mtd>
                                                                    <mtd>
                                                                        <mn>3</mn>
                                                                    </mtd>
                                                                </mtr>
                                                                <mtr>
                                                                    <mtd>
                                                                        <mo>-</mo>
                                                                        <mn>2</mn>
                                                                    </mtd>
                                                                    <mtd>
                                                                        <mn>2</mn>
                                                                    </mtd>
                                                                </mtr>
                                                            </mtable>
                                                        </mrow>
                                                    </mtd>
                                                </mtr>
                                                <mtr>
                                                    <mtd>
                                                        <mrow>
                                                            <maligngroup />
                                                            <mtable>
                                                                <mtr>
                                                                    <mtd>
                                                                        <mn>1</mn>
                                                                    </mtd>
                                                                    <mtd>
                                                                        <mn>2</mn>
                                                                    </mtd>
                                                                </mtr>
                                                            </mtable>
                                                        </mrow>
                                                    </mtd>
                                                </mtr>
                                            </mtable>
                                        </mrow>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mrow>
                                            <maligngroup />
                                            <mtable>
                                                <mtr>
                                                    <mtd>
                                                        <mn>0</mn>
                                                    </mtd>
                                                    <mtd>
                                                        <mn>4</mn>
                                                    </mtd>
                                                </mtr>
                                            </mtable>
                                        </mrow>
                                    </mtd>
                                </mtr>
                            </mtable>
                        </mrow>
                    </mfenced>
                </mrow>
            </mrow>
        </math>

        <br>
        Posteriormente se multiplican las diagonales descendentes y al resultado se le resta el producto de las
        diagonales ascendentes, es decir:<br>
        <img src="./images/Progresion11img/img25.png" width="20%">
        <br>
        <br>
        <span style="color:red;">NOTA:</span> Las flechas rojas corresponden a las diagonales ascendentes y las azules
        las diagonales descendentes.<br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">

            <mrow style="color:blue;">
                <mo>[</mo>
                <mo>(</mo>
                <mfenced separators="|">
                    <mrow>
                        <mn>0</mn>
                        <mi>*</mi>
                        <mn>3</mn>
                    </mrow>
                    <mo>)</mo>
                </mfenced>
                <mo>+</mo>
                <mfenced separators="|">
                    <mo>(</mo>
                    <mrow>
                        <mo>-</mo>
                        <mn>3</mn>
                        <mi>*</mi>
                        <mn>2</mn>
                    </mrow>
                    <mo>)</mo>
                </mfenced>
                <mo>+</mo>
                <mfenced separators="|">
                    <mo>(</mo>
                    <mrow>
                        <mo>-</mo>
                        <mn>2</mn>
                        <mi>*</mi>
                        <mn>2</mn>
                    </mrow>
                    <mo>)</mo>
                </mfenced>
                <mo>+</mo>
                <mfenced separators="|">
                    <mo>(</mo>
                    <mrow>
                        <mn>1</mn>
                        <mi>*</mi>
                        <mn>4</mn>
                    </mrow>
                    <mo>)</mo>
                    <mo>]</mo>
                </mfenced>
            </mrow>

            <mo>-</mo>


            <mrow style="color:red;">
                <mfenced separators="|">
                    <mo>[</mo>
                    <mo>(</mo>
                    <mrow>
                        <mo>-</mo>
                        <mn>3</mn>
                        <mi>*</mi>
                        <mn>4</mn>
                    </mrow>
                    <mo>)</mo>
                </mfenced>
                <mo>+</mo>
                <mfenced separators="|">
                    <mo>(</mo>
                    <mrow>
                        <mo>-</mo>
                        <mn>2</mn>
                        <mi>*</mi>
                        <mn>3</mn>
                    </mrow>
                    <mo>)</mo>
                </mfenced>
                <mo>+</mo>
                <mfenced separators="|">
                    <mo>(</mo>
                    <mrow>
                        <mn>1</mn>
                        <mi>*</mi>
                        <mn>2</mn>
                    </mrow>
                    <mo>)</mo>
                </mfenced>
                <mo>+</mo>
                <mfenced separators="|">
                    <mo>(</mo>
                    <mrow>
                        <mn>0</mn>
                        <mi>*</mi>
                        <mn>2</mn>
                    </mrow>
                    <mo>)</mo>
                    <mo>]</mo>
                </mfenced>
            </mrow>
            </mfenced>
        </math><br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">


            <mrow style="color:blue;">
                <mo>(</mo>
                <mn>0</mn>
                <mo>-</mo>
                <mn>6</mn>
                <mo>-</mo>
                <mn>4</mn>
                <mo>+</mo>
                <mn>4</mn>
                <mo>)</mo>
            </mrow>

            </mfenced>
            <mo>-</mo>
            <mi> </mi>

            <mrow style="color:red;">
                <mo>(</mo>
                <mo>-</mo>
                <mn>12</mn>
                <mo>-</mo>
                <mn>6</mn>
                <mo>+</mo>
                <mn>2</mn>
                <mo>+</mo>
                <mn>0</mn>
                <mo>)</mo>
            </mrow>

            </mfenced>
        </math><br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">

            <mrow style="color:blue;">
                <mo>(</mo>
                <mo>-</mo>
                <mn>10</mn>
                <mo>+</mo>
                <mn>4</mn>
                <mo>)</mo>
            </mrow>

            </mfenced>
            <mo>-</mo>
            <mi> </mi>

            <mrow style="color:red;">
                <mo>(</mo>
                <mo>-</mo>
                <mn>18</mn>
                <mo>+</mo>
                <mn>2</mn>
                <mo>)</mo>
            </mrow>

            </mfenced>
        </math><br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">

            <mrow style="color:blue;">
                <mo>(</mo>
                <mo>-</mo>
                <mn>6</mn>
                <mo>)</mo>
            </mrow>

            </mfenced>
            <mo>-</mo>
            <mi> </mi>

            <mrow style="color:red;">
                <mo>(</mo>
                <mo>-</mo>
                <mn>16</mn>
                <mo>)</mo>
            </mrow>

            </mfenced>
        </math><br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">
            <mo>-</mo>
            <mn>6</mn>
            <mo>+</mo>
            <mn>16</mn>
        </math><br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">
            <mn>10</mn>
        </math>

        <br>
        Todo lo que se hizo anteriormente fue calcular el determinante, empero, falta algo muy importante de la fórmula,
        dividir entre 2:<br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">
            <mi>á</mi>
            <mi>r</mi>
            <mi>e</mi>
            <mi>a</mi>
            <mo>=</mo>
            <mfrac>
                <mrow>
                    <mn>1</mn>
                    <mi> </mi>
                </mrow>
                <mrow>
                    <mn>2</mn>
                </mrow>
            </mfrac>
            <mfenced open="|" close="|" separators="|">
                <mrow>
                    <mn>10</mn>
                </mrow>
            </mfenced>
        </math>
        <br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">
            <mi>á</mi>
            <mi>r</mi>
            <mi>e</mi>
            <mi>a</mi>
            <mo>=</mo>
            <mfrac>
                <mrow>
                    <mn>10</mn>
                    <mi> </mi>
                </mrow>
                <mrow>
                    <mn>2</mn>
                </mrow>
            </mfrac>
        </math>
        <br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">
            <mi>á</mi>
            <mi>r</mi>
            <mi>e</mi>
            <mi>a</mi>
            <mo>=</mo>
            <mn>5</mn>
        </math>

        <br>
        Con todos estos cálculos llegamos a los siguientes resultados:<br>
        Perímetro = 9.7u
        <br>
        Área = 5u<sup>2</sup>
        <br>

        <p>Ahora, se explicará tomando un polígono regular, verdaderamente no hay una gran diferencia más que el
            perímetro se calcula más rápido. Veámoslo para entenderlo mejor.</p><br>
        <img src="./images/Progresion11img/img10.png" width="30%">
        <br>
        Las coordenadas de los puntos son las siguientes:<br>
        A(0, 0)<br>
        B(1, 0)<br>
        C(1.6, 0.7)<br>
        D(1.4, 1.7)<br>
        E(0.5, 2.1)<br>
        F(-0.4, 1.7)<br>
        G(-0.6, 0.7)<br>
        <br>
        Lo primero a calcular será el perímetro, tomando como referencia el segmento AB:<br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
            <mi>d</mi>
            <mo>=</mo>
            <mroot>
                <mrow>
                    <msup>
                        <mrow>
                            <mfenced separators="|">
                                <mrow>
                                    <mo>(</mo>
                                    <msub>
                                        <mrow>
                                            <mi>x</mi>
                                        </mrow>
                                        <mrow>
                                            <mn>2</mn>
                                        </mrow>
                                    </msub>
                                    <mo>-</mo>
                                    <msub>
                                        <mrow>
                                            <mi>x</mi>
                                        </mrow>
                                        <mrow>
                                            <mn>1</mn>
                                        </mrow>
                                    </msub>
                                    <mo>)</mo>
                                </mrow>
                            </mfenced>
                        </mrow>
                        <mrow>
                            <mn>2</mn>
                        </mrow>
                    </msup>
                    <mo>+</mo>
                    <msup>
                        <mrow>
                            <mo>(</mo>
                            <msub>
                                <mrow>
                                    <mi>y</mi>
                                </mrow>
                                <mrow>
                                    <mn>2</mn>
                                </mrow>
                            </msub>
                            <mo>-</mo>
                            <msub>
                                <mrow>
                                    <mi>y</mi>
                                </mrow>
                                <mrow>
                                    <mn>1</mn>
                                </mrow>
                            </msub>
                            <mo>)</mo>
                        </mrow>
                        <mrow>
                            <mn>2</mn>
                        </mrow>
                    </msup>
                </mrow>
                <mrow>
                    <mn>2</mn>
                </mrow>
            </mroot>
        </math>
        <br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">
            <mi>d</mi>
            <mo>=</mo>
            <mi> </mi>
            <msqrt>
                <msup>
                    <mrow>
                        <mfenced separators="|">
                            <mrow>
                                <mo>(</mo>
                                <mn>1</mn>
                                <mo>-</mo>
                                <mn>0</mn>
                                <mo>)</mo>
                            </mrow>
                        </mfenced>
                    </mrow>
                    <mrow>
                        <mn>2</mn>
                    </mrow>
                </msup>
                <mo>+</mo>
                <msup>
                    <mrow>
                        <mfenced separators="|">
                            <mrow>
                                <mo>(</mo>
                                <mn>0</mn>
                                <mo>-</mo>
                                <mn>0</mn>
                                <mo>)</mo>
                            </mrow>
                        </mfenced>
                    </mrow>
                    <mrow>
                        <mn>2</mn>
                    </mrow>
                </msup>
            </msqrt>
        </math>
        <br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">
            <mi>d</mi>
            <mo>=</mo>
            <mi> </mi>
            <msqrt>
                <mn>1</mn>
            </msqrt>
        </math>
        <br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">
            <mi>d</mi>
            <mo>=</mo>
            <mi> </mi>
            <mn>1</mn>
        </math>
        <br>
        <br>
        La medida de dicho segmento es 1, pues bien, como se trata de un heptágono ese 1 se multiplica por 7, siendo así
        su perímetro igual a 7.<br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">
            <mi>p</mi>
            <mo>=</mo>
            <mi> </mi>
            <mn>1</mn>
            <mi>*</mi>
            <mn>7</mn>
        </math><br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">
            <mi>p</mi>
            <mo>=</mo>
            <mi> </mi>
            <mn>7</mn>
        </math>
        <br>
        <br>
        Lo que ahora queda por hacer es calcular el área, para ello iniciamos sustituyendo en la fórmula que ya
        conocemos:<br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">
            <mi>á</mi>
            <mi>r</mi>
            <mi>e</mi>
            <mi>a</mi>
            <mo>=</mo>
            <mfrac>
                <mrow>
                    <mn>1</mn>
                    <mi> </mi>
                </mrow>
                <mrow>
                    <mn>2</mn>
                </mrow>
            </mfrac>
            <mrow>
                <mrow>
                    <mi mathvariant="normal">det</mi>
                </mrow>
                <mo>⁡</mo>
                <mrow>
                    <mfenced open="[" close="]" separators="|">
                        <mrow>
                            <mtable>
                                <mtr>
                                    <mtd>
                                        <mrow>
                                            <maligngroup />
                                            <mtable>
                                                <mtr>
                                                    <mtd>
                                                        <mrow>
                                                            <maligngroup />
                                                            <mtable>
                                                                <mtr>
                                                                    <mtd>
                                                                        <msub>
                                                                            <mrow>
                                                                                <mi>x</mi>
                                                                            </mrow>
                                                                            <mrow>
                                                                                <mn>1</mn>
                                                                            </mrow>
                                                                        </msub>
                                                                    </mtd>
                                                                    <mtd>
                                                                        <msub>
                                                                            <mrow>
                                                                                <mi>y</mi>
                                                                            </mrow>
                                                                            <mrow>
                                                                                <mn>1</mn>
                                                                            </mrow>
                                                                        </msub>
                                                                    </mtd>
                                                                </mtr>
                                                                <mtr>
                                                                    <mtd>
                                                                        <msub>
                                                                            <mrow>
                                                                                <mi>x</mi>
                                                                            </mrow>
                                                                            <mrow>
                                                                                <mn>2</mn>
                                                                            </mrow>
                                                                        </msub>
                                                                    </mtd>
                                                                    <mtd>
                                                                        <msub>
                                                                            <mrow>
                                                                                <mi>y</mi>
                                                                            </mrow>
                                                                            <mrow>
                                                                                <mn>2</mn>
                                                                            </mrow>
                                                                        </msub>
                                                                    </mtd>
                                                                </mtr>
                                                                <mtr>
                                                                    <mtd>
                                                                        <mo>⋮</mo>
                                                                    </mtd>
                                                                    <mtd>
                                                                        <mo>⋮</mo>
                                                                    </mtd>
                                                                </mtr>
                                                            </mtable>
                                                        </mrow>
                                                    </mtd>
                                                </mtr>
                                                <mtr>
                                                    <mtd>
                                                        <mrow>
                                                            <maligngroup />
                                                            <mtable>
                                                                <mtr>
                                                                    <mtd>
                                                                        <msub>
                                                                            <mrow>
                                                                                <mi>x</mi>
                                                                            </mrow>
                                                                            <mrow>
                                                                                <mi>n</mi>
                                                                            </mrow>
                                                                        </msub>
                                                                    </mtd>
                                                                    <mtd>
                                                                        <msub>
                                                                            <mrow>
                                                                                <mi>y</mi>
                                                                            </mrow>
                                                                            <mrow>
                                                                                <mi>n</mi>
                                                                            </mrow>
                                                                        </msub>
                                                                    </mtd>
                                                                </mtr>
                                                            </mtable>
                                                        </mrow>
                                                    </mtd>
                                                </mtr>
                                            </mtable>
                                        </mrow>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mrow>
                                            <maligngroup />
                                            <mtable>
                                                <mtr>
                                                    <mtd>
                                                        <msub>
                                                            <mrow>
                                                                <mi>x</mi>
                                                            </mrow>
                                                            <mrow>
                                                                <mn>1</mn>
                                                            </mrow>
                                                        </msub>
                                                    </mtd>
                                                    <mtd>
                                                        <msub>
                                                            <mrow>
                                                                <mi>y</mi>
                                                            </mrow>
                                                            <mrow>
                                                                <mn>1</mn>
                                                            </mrow>
                                                        </msub>
                                                    </mtd>
                                                </mtr>
                                            </mtable>
                                        </mrow>
                                    </mtd>
                                </mtr>
                            </mtable>
                        </mrow>
                    </mfenced>
                </mrow>
            </mrow>
        </math><br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
            class="p11mathsize">
            <mi>á</mi>
            <mi>r</mi>
            <mi>e</mi>
            <mi>a</mi>
            <mo>=</mo>
            <mfrac>
                <mrow>
                    <mn>1</mn>
                    <mi> </mi>
                </mrow>
                <mrow>
                    <mn>2</mn>
                </mrow>
            </mfrac>
            <mrow>
                <mrow>
                    <mi mathvariant="normal">det</mi>
                </mrow>
                <mo>⁡</mo>
                <mrow>
                    <mfenced open="[" close="]" separators="|">
                        <mrow>
                            <mtable>
                                <mtr>
                                    <mtd>
                                        <mrow>
                                            <maligngroup />
                                            <mtable>
                                                <mtr>
                                                    <mtd>
                                                        <mrow>
                                                            <maligngroup />
                                                            <mtable>
                                                                <mtr>
                                                                    <mtd>
                                                                        <mrow>
                                                                            <maligngroup />
                                                                            <mtable>
                                                                                <mtr>
                                                                                    <mtd>
                                                                                        <mn>0</mn>
                                                                                    </mtd>
                                                                                    <mtd>
                                                                                        <mn>0</mn>
                                                                                    </mtd>
                                                                                </mtr>
                                                                                <mtr>
                                                                                    <mtd>
                                                                                        <mn>1</mn>
                                                                                    </mtd>
                                                                                    <mtd>
                                                                                        <mn>0</mn>
                                                                                    </mtd>
                                                                                </mtr>
                                                                                <mtr>
                                                                                    <mtd>
                                                                                        <mn>1.6</mn>
                                                                                    </mtd>
                                                                                    <mtd>
                                                                                        <mn>0.7</mn>
                                                                                    </mtd>
                                                                                </mtr>
                                                                            </mtable>
                                                                        </mrow>
                                                                    </mtd>
                                                                </mtr>
                                                                <mtr>
                                                                    <mtd>
                                                                        <mrow>
                                                                            <maligngroup />
                                                                            <mtable>
                                                                                <mtr>
                                                                                    <mtd>
                                                                                        <mn>1.4</mn>
                                                                                    </mtd>
                                                                                    <mtd>
                                                                                        <mn>1.7</mn>
                                                                                    </mtd>
                                                                                </mtr>
                                                                            </mtable>
                                                                        </mrow>
                                                                    </mtd>
                                                                </mtr>
                                                            </mtable>
                                                        </mrow>
                                                    </mtd>
                                                </mtr>
                                                <mtr>
                                                    <mtd>
                                                        <mrow>
                                                            <maligngroup />
                                                            <mtable>
                                                                <mtr>
                                                                    <mtd>
                                                                        <mn>0.5</mn>
                                                                    </mtd>
                                                                    <mtd>
                                                                        <mn>2.1</mn>
                                                                    </mtd>
                                                                </mtr>
                                                            </mtable>
                                                        </mrow>
                                                    </mtd>
                                                </mtr>
                                            </mtable>
                                        </mrow>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mrow>
                                            <maligngroup />
                                            <mtable>
                                                <mtr>
                                                    <mtd>
                                                        <mo>-</mo>
                                                        <mn>0.4</mn>
                                                    </mtd>
                                                    <mtd>
                                                        <mn>1.7</mn>
                                                    </mtd>
                                                </mtr>
                                                <mtr>
                                                    <mtd>
                                                        <mo>-</mo>
                                                        <mn>0.6</mn>
                                                    </mtd>
                                                    <mtd>
                                                        <mn>0.7</mn>
                                                    </mtd>
                                                </mtr>
                                            </mtable>
                                        </mrow>
                                    </mtd>
                                </mtr>
                            </mtable>
                        </mrow>
                    </mfenced>
                </mrow>
            </mrow>
        </math>

        <br>
        Tras esto, procedemos a calcular la determinante:<br>
        <img src="./images/Progresion11img/img26.png" width=" 22%">
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
            class="p11mathsize">
            <mfenced open="[" close="]" separators="|">
                <mrow>
                    <mfenced separators="|">
                        <mrow>
                            <mn>0</mn>
                            <mi>*</mi>
                            <mn>0</mn>
                        </mrow>
                    </mfenced>
                    <mo>+</mo>
                    <mfenced separators="|">
                        <mrow>
                            <mn>1</mn>
                            <mi>*</mi>
                            <mn>0.7</mn>
                        </mrow>
                    </mfenced>
                    <mo>+</mo>
                    <mfenced separators="|">
                        <mrow>
                            <mn>1.6</mn>
                            <mi>*</mi>
                            <mn>1.7</mn>
                        </mrow>
                    </mfenced>
                    <mo>+</mo>
                    <mfenced separators="|">
                        <mrow>
                            <mn>1.4</mn>
                            <mi>*</mi>
                            <mn>2.1</mn>
                        </mrow>
                    </mfenced><br>
                    <mo>+</mo>
                    <mfenced separators="|">
                        <mrow>
                            <mn>0.5</mn>
                            <mi>*</mi>
                            <mn>1.7</mn>
                        </mrow>
                    </mfenced>
                    <mo>+</mo>
                    <mfenced separators="|">
                        <mrow>
                            <mo>-</mo>
                            <mn>0.4</mn>
                            <mi>*</mi>
                            <mn>0.7</mn>
                        </mrow>
                    </mfenced>
                </mrow>
            </mfenced>
            <mo>-</mo>
            <mfenced open="[" close="]" separators="|">
                <mrow>
                    <mfenced separators="|">
                        <mrow>
                            <mn>1</mn>
                            <mi>*</mi>
                            <mn>0</mn>
                        </mrow>
                    </mfenced>
                    <mo>+</mo>
                    <mfenced separators="|">
                        <mrow>
                            <mn>1.6</mn>
                            <mi>*</mi>
                            <mn>0</mn>
                        </mrow>
                    </mfenced>
                    <mo>+</mo>
                    <mfenced separators="|">
                        <mrow>
                            <mn>1.4</mn>
                            <mi>*</mi>
                            <mn>0.7</mn>
                        </mrow>
                    </mfenced>
                    <mo>+</mo>
                    <mfenced separators="|">
                        <mrow>
                            <mn>0.5</mn>
                            <mi>*</mi>
                            <mn>1.7</mn>
                        </mrow>
                    </mfenced>
                    <mo>+</mo>
                    <mfenced separators="|">
                        <mrow>
                            <mo>-</mo>
                            <mn>0.4</mn>
                            <mi>*</mi>
                            <mn>2.1</mn>
                        </mrow>
                    </mfenced>
                    <mo>+</mo>
                    <mfenced separators="|">
                        <mrow>
                            <mo>-</mo>
                            <mn>0.6</mn>
                            <mi>*</mi>
                            <mn>1.7</mn>
                        </mrow>
                    </mfenced>
                </mrow>
            </mfenced>
        </math><br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
            class="p11mathsize">
            <mfenced open="[" close="]" separators="|">
                <mrow>
                    <mn>0</mn>
                    <mo>+</mo>
                    <mn>0.7</mn>
                    <mo>+</mo>
                    <mn>2.72</mn>
                    <mo>+</mo>
                    <mn>2.94</mn>
                    <mo>+</mo>
                    <mn>0.85</mn>
                    <mo>-</mo>
                    <mn>0.28</mn>
                </mrow>
            </mfenced>
            <mo>-</mo>
            <mfenced open="[" close="]" separators="|">
                <mrow>
                    <mn>0</mn>
                    <mo>+</mo>
                    <mn>0</mn>
                    <mo>+</mo>
                    <mn>0.98</mn>
                    <mo>+</mo>
                    <mn>0.85</mn>
                    <mo>-</mo>
                    <mn>0.84</mn>
                    <mo>-</mo>
                    <mn>1.02</mn>
                </mrow>
            </mfenced>
        </math><br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
            class="p11mathsize">
            <mn>6.93</mn>
            <mo>-</mo>
            <mfenced open="[" close="]" separators="|">
                <mrow>
                    <mo>-</mo>
                    <mn>0.03</mn>
                </mrow>
            </mfenced>
        </math><br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
            class="p11mathsize">
            <mn>6.93</mn>
            <mo>+</mo>
            <mn>0.03</mn>
        </math><br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
            class="p11mathsize">
            <mn>6.96</mn>
        </math><br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
            class="p11mathsize">
            <mi>á</mi>
            <mi>r</mi>
            <mi>e</mi>
            <mi>a</mi>
            <mo>=</mo>
            <mfrac>
                <mrow>
                    <mn>1</mn>
                    <mi> </mi>
                </mrow>
                <mrow>
                    <mn>2</mn>
                </mrow>
            </mfrac>
            <mfenced open="|" close="|" separators="|">
                <mrow>
                    <mn>6.96</mn>
                </mrow>
            </mfenced>
        </math><br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
            class="p11mathsize">
            <mi>á</mi>
            <mi>r</mi>
            <mi>e</mi>
            <mi>a</mi>
            <mo>=</mo>
            <mfrac>
                <mrow>
                    <mn>6.96</mn>
                    <mi> </mi>
                </mrow>
                <mrow>
                    <mn>2</mn>
                </mrow>
            </mfrac>
        </math><br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
            class="p11mathsize">
            <mi>á</mi>
            <mi>r</mi>
            <mi>e</mi>
            <mi>a</mi>
            <mo>≈</mo>
            <mn>3.48</mn>
            <mi> </mi>
        </math>
        <br><br>
        Con esto obtenemos que el área = 3.48 y el perímetro = 7.
        <br>
        Con los dos casos explicados y previo a los ejercicios, analizaremos 2 ejemplos más, ahora aplicando esto a
        situaciones comunes.<br>

        <br>
        <h2 id="pyaejem">Ejemplos</h2><br>
        <p>1. Raúl tiene una granja y recientemente compró un nuevo terreno donde planea construir un corral para sus
            vacas. Por el momento cuenta con 10 tablas de 15 metros. Según el perímetro del corral ¿Le sobran o le
            faltan tablas para colocar alrededor? Y ¿Qué área tiene? Véase el siguiente dibujo:</p><br>
        <div style="display:flex;">
            <img src="./images/Progresion11img/img11.png" width=" 30%">
            <div>
                <span style="color:red;">NOTA: </span>La medida de los lados están en decámetros .<br>
                Coordenadas<br>
                A(0, 4)<br>
                B(2,2)<br>
                C(6, 4)<br>
                D(2, 6)<br>
            </div>
        </div>
        <br>

        Comenzamos con el perímetro, al ser un polígono irregular habrá que calcular segmento por segmento.<br>
        <br>
        <div style="display:flex;">
            <div>
                Segmento AB<br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                    <mi>d</mi>
                    <mo>=</mo>
                    <mroot>
                        <mrow>
                            <msup>
                                <mrow>
                                    <mfenced separators="|">
                                        <mrow>
                                            <mo>(</mo>
                                            <msub>
                                                <mrow>
                                                    <mi>x</mi>
                                                </mrow>
                                                <mrow>
                                                    <mn>2</mn>
                                                </mrow>
                                            </msub>
                                            <mo>-</mo>
                                            <msub>
                                                <mrow>
                                                    <mi>x</mi>
                                                </mrow>
                                                <mrow>
                                                    <mn>1</mn>
                                                </mrow>
                                            </msub>
                                            <mo>)</mo>
                                        </mrow>
                                    </mfenced>
                                </mrow>
                                <mrow>
                                    <mn>2</mn>
                                </mrow>
                            </msup>
                            <mo>+</mo>
                            <msup>
                                <mrow>
                                    <mo>(</mo>
                                    <msub>
                                        <mrow>
                                            <mi>y</mi>
                                        </mrow>
                                        <mrow>
                                            <mn>2</mn>
                                        </mrow>
                                    </msub>
                                    <mo>-</mo>
                                    <msub>
                                        <mrow>
                                            <mi>y</mi>
                                        </mrow>
                                        <mrow>
                                            <mn>1</mn>
                                        </mrow>
                                    </msub>
                                    <mo>)</mo>
                                </mrow>
                                <mrow>
                                    <mn>2</mn>
                                </mrow>
                            </msup>
                        </mrow>
                        <mrow>
                            <mn>2</mn>
                        </mrow>
                    </mroot>
                </math>
                <br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
                    class="p11mathsize">
                    <mi>d</mi>
                    <mo>=</mo>
                    <mi> </mi>
                    <msqrt>
                        <msup>
                            <mrow>
                                <mfenced separators="|">
                                    <mrow>
                                        <mo>(</mo>
                                        <mn>2</mn>
                                        <mo>-</mo>
                                        <mn>0</mn>
                                        <mo>)</mo>
                                    </mrow>
                                </mfenced>
                            </mrow>
                            <mrow>
                                <mn>2</mn>
                            </mrow>
                        </msup>
                        <mo>+</mo>
                        <msup>
                            <mrow>
                                <mfenced separators="|">
                                    <mrow>
                                        <mo>(</mo>
                                        <mn>2</mn>
                                        <mo>-</mo>
                                        <mn>4</mn>
                                        <mo>)</mo>
                                    </mrow>
                                </mfenced>
                            </mrow>
                            <mrow>
                                <mn>2</mn>
                            </mrow>
                        </msup>
                    </msqrt>
                </math><br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
                    class="p11mathsize">
                    <mi>d</mi>
                    <mo>=</mo>
                    <mi> </mi>
                    <msqrt>
                        <msup>
                            <mrow>
                                <mfenced separators="|">
                                    <mrow>
                                        <mn>2</mn>
                                    </mrow>
                                </mfenced>
                            </mrow>
                            <mrow>
                                <mn>2</mn>
                            </mrow>
                        </msup>
                        <mo>+</mo>
                        <msup>
                            <mrow>
                                <mfenced separators="|">
                                    <mrow>
                                        <mo>(</mo>
                                        <mo>-</mo>
                                        <mn>2</mn>
                                        <mo>)</mo>
                                    </mrow>
                                </mfenced>
                            </mrow>
                            <mrow>
                                <mn>2</mn>
                            </mrow>
                        </msup>
                    </msqrt>
                </math><br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
                    class="p11mathsize">
                    <mi>d</mi>
                    <mo>=</mo>
                    <mi> </mi>
                    <msqrt>
                        <mn>4</mn>
                        <mo>+</mo>
                        <mn>4</mn>
                    </msqrt>
                </math><br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
                    class="p11mathsize">
                    <mi>d</mi>
                    <mo>=</mo>
                    <mi> </mi>
                    <msqrt>
                        <mn>8</mn>
                    </msqrt>
                </math><br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
                    class="p11mathsize">
                    <mi>d</mi>
                    <mo>=</mo>
                    <mi> </mi>
                    <mn>2.8</mn>
                </math>
                <br>
            </div>
            <div>
                Segmento BC<br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                    <mi>d</mi>
                    <mo>=</mo>
                    <mroot>
                        <mrow>
                            <msup>
                                <mrow>
                                    <mfenced separators="|">
                                        <mrow>
                                            <mo>(</mo>
                                            <msub>
                                                <mrow>
                                                    <mi>x</mi>
                                                </mrow>
                                                <mrow>
                                                    <mn>2</mn>
                                                </mrow>
                                            </msub>
                                            <mo>-</mo>
                                            <msub>
                                                <mrow>
                                                    <mi>x</mi>
                                                </mrow>
                                                <mrow>
                                                    <mn>1</mn>
                                                </mrow>
                                            </msub>
                                            <mo>)</mo>
                                        </mrow>
                                    </mfenced>
                                </mrow>
                                <mrow>
                                    <mn>2</mn>
                                </mrow>
                            </msup>
                            <mo>+</mo>
                            <msup>
                                <mrow>
                                    <mo>(</mo>
                                    <msub>
                                        <mrow>
                                            <mi>y</mi>
                                        </mrow>
                                        <mrow>
                                            <mn>2</mn>
                                        </mrow>
                                    </msub>
                                    <mo>-</mo>
                                    <msub>
                                        <mrow>
                                            <mi>y</mi>
                                        </mrow>
                                        <mrow>
                                            <mn>1</mn>
                                        </mrow>
                                    </msub>
                                    <mo>)</mo>
                                </mrow>
                                <mrow>
                                    <mn>2</mn>
                                </mrow>
                            </msup>
                        </mrow>
                        <mrow>
                            <mn>2</mn>
                        </mrow>
                    </mroot>
                </math><br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
                    class="p11mathsize">
                    <mi>d</mi>
                    <mo>=</mo>
                    <mi> </mi>
                    <msqrt>
                        <msup>
                            <mrow>
                                <mfenced separators="|">
                                    <mrow>
                                        <mo>(</mo>
                                        <mn>6</mn>
                                        <mo>-</mo>
                                        <mn>2</mn>
                                        <mo>)</mo>
                                    </mrow>
                                </mfenced>
                            </mrow>
                            <mrow>
                                <mn>2</mn>
                            </mrow>
                        </msup>
                        <mo>+</mo>
                        <msup>
                            <mrow>
                                <mfenced separators="|">
                                    <mrow>
                                        <mo>(</mo>
                                        <mn>4</mn>
                                        <mo>-</mo>
                                        <mn>2</mn>
                                        <mo>)</mo>
                                    </mrow>
                                </mfenced>
                            </mrow>
                            <mrow>
                                <mn>2</mn>
                            </mrow>
                        </msup>
                    </msqrt>
                </math><br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
                    class="p11mathsize">
                    <mi>d</mi>
                    <mo>=</mo>
                    <mi> </mi>
                    <msqrt>
                        <msup>
                            <mrow>
                                <mfenced separators="|">
                                    <mrow>
                                        <mn>4</mn>
                                    </mrow>
                                </mfenced>
                            </mrow>
                            <mrow>
                                <mn>2</mn>
                            </mrow>
                        </msup>
                        <mo>+</mo>
                        <msup>
                            <mrow>
                                <mfenced separators="|">
                                    <mrow>
                                        <mn>2</mn>
                                    </mrow>
                                </mfenced>
                            </mrow>
                            <mrow>
                                <mn>2</mn>
                            </mrow>
                        </msup>
                    </msqrt>
                </math><br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
                    class="p11mathsize">
                    <mi>d</mi>
                    <mo>=</mo>
                    <mi> </mi>
                    <msqrt>
                        <mn>16</mn>
                        <mo>+</mo>
                        <mn>4</mn>
                    </msqrt>
                </math><br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
                    class="p11mathsize">
                    <mi>d</mi>
                    <mo>=</mo>
                    <mi> </mi>
                    <msqrt>
                        <mn>20</mn>
                    </msqrt>
                </math><br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
                    class="p11mathsize">
                    <mi>d</mi>
                    <mo>=</mo>
                    <mi> </mi>
                    <mn>4.4</mn>
                </math>

                <br>
            </div>
            <div>
                Segmento CD<br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                    <mi>d</mi>
                    <mo>=</mo>
                    <mroot>
                        <mrow>
                            <msup>
                                <mrow>
                                    <mfenced separators="|">
                                        <mrow>
                                            <mo>(</mo>
                                            <msub>
                                                <mrow>
                                                    <mi>x</mi>
                                                </mrow>
                                                <mrow>
                                                    <mn>2</mn>
                                                </mrow>
                                            </msub>
                                            <mo>-</mo>
                                            <msub>
                                                <mrow>
                                                    <mi>x</mi>
                                                </mrow>
                                                <mrow>
                                                    <mn>1</mn>
                                                </mrow>
                                            </msub>
                                            <mo>)</mo>
                                        </mrow>
                                    </mfenced>
                                </mrow>
                                <mrow>
                                    <mn>2</mn>
                                </mrow>
                            </msup>
                            <mo>+</mo>
                            <msup>
                                <mrow>
                                    <mo>(</mo>
                                    <msub>
                                        <mrow>
                                            <mi>y</mi>
                                        </mrow>
                                        <mrow>
                                            <mn>2</mn>
                                        </mrow>
                                    </msub>
                                    <mo>-</mo>
                                    <msub>
                                        <mrow>
                                            <mi>y</mi>
                                        </mrow>
                                        <mrow>
                                            <mn>1</mn>
                                        </mrow>
                                    </msub>
                                    <mo>)</mo>
                                </mrow>
                                <mrow>
                                    <mn>2</mn>
                                </mrow>
                            </msup>
                        </mrow>
                        <mrow>
                            <mn>2</mn>
                        </mrow>
                    </mroot>
                </math><br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
                    class="p11mathsize">
                    <mi>d</mi>
                    <mo>=</mo>
                    <mi> </mi>
                    <msqrt>
                        <msup>
                            <mrow>
                                <mfenced separators="|">
                                    <mrow>
                                        <mo>(</mo>
                                        <mn>2</mn>
                                        <mo>-</mo>
                                        <mn>6</mn>
                                        <mo>)</mo>
                                    </mrow>
                                </mfenced>
                            </mrow>
                            <mrow>
                                <mn>2</mn>
                            </mrow>
                        </msup>
                        <mo>+</mo>
                        <msup>
                            <mrow>
                                <mfenced separators="|">
                                    <mrow>
                                        <mo>(</mo>
                                        <mn>6</mn>
                                        <mo>-</mo>
                                        <mn>4</mn>
                                        <mo>)</mo>
                                    </mrow>
                                </mfenced>
                            </mrow>
                            <mrow>
                                <mn>2</mn>
                            </mrow>
                        </msup>
                    </msqrt>
                </math><br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
                    class="p11mathsize">
                    <mi>d</mi>
                    <mo>=</mo>
                    <mi> </mi>
                    <msqrt>
                        <msup>
                            <mrow>
                                <mfenced separators="|">
                                    <mrow>
                                        <mo>-</mo>
                                        <mn>4</mn>
                                    </mrow>
                                </mfenced>
                            </mrow>
                            <mrow>
                                <mn>2</mn>
                            </mrow>
                        </msup>
                        <mo>+</mo>
                        <msup>
                            <mrow>
                                <mfenced separators="|">
                                    <mrow>
                                        <mn>2</mn>
                                    </mrow>
                                </mfenced>
                            </mrow>
                            <mrow>
                                <mn>2</mn>
                            </mrow>
                        </msup>
                    </msqrt>
                </math><br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
                    class="p11mathsize">
                    <mi>d</mi>
                    <mo>=</mo>
                    <mi> </mi>
                    <msqrt>
                        <mn>16</mn>
                        <mo>+</mo>
                        <mn>4</mn>
                    </msqrt>
                </math><br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
                    class="p11mathsize">
                    <mi>d</mi>
                    <mo>=</mo>
                    <mi> </mi>
                    <msqrt>
                        <mn>20</mn>
                    </msqrt>
                </math><br>
                <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
                    class="p11mathsize">
                    <mi>d</mi>
                    <mo>=</mo>
                    <mi> </mi>
                    <mn>4.4</mn>
                </math>

                <br>
            </div>


        </div>



        Segmento DA<br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
            <mi>d</mi>
            <mo>=</mo>
            <mroot>
                <mrow>
                    <msup>
                        <mrow>
                            <mfenced separators="|">
                                <mrow>
                                    <mo>(</mo>
                                    <msub>
                                        <mrow>
                                            <mi>x</mi>
                                        </mrow>
                                        <mrow>
                                            <mn>2</mn>
                                        </mrow>
                                    </msub>
                                    <mo>-</mo>
                                    <msub>
                                        <mrow>
                                            <mi>x</mi>
                                        </mrow>
                                        <mrow>
                                            <mn>1</mn>
                                        </mrow>
                                    </msub>
                                    <mo>)</mo>
                                </mrow>
                            </mfenced>
                        </mrow>
                        <mrow>
                            <mn>2</mn>
                        </mrow>
                    </msup>
                    <mo>+</mo>
                    <msup>
                        <mrow>
                            <mo>(</mo>
                            <msub>
                                <mrow>
                                    <mi>y</mi>
                                </mrow>
                                <mrow>
                                    <mn>2</mn>
                                </mrow>
                            </msub>
                            <mo>-</mo>
                            <msub>
                                <mrow>
                                    <mi>y</mi>
                                </mrow>
                                <mrow>
                                    <mn>1</mn>
                                </mrow>
                            </msub>
                            <mo>)</mo>
                        </mrow>
                        <mrow>
                            <mn>2</mn>
                        </mrow>
                    </msup>
                </mrow>
                <mrow>
                    <mn>2</mn>
                </mrow>
            </mroot>
        </math>
        <br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
            class="p11mathsize">
            <mi>d</mi>
            <mo>=</mo>
            <mi> </mi>
            <msqrt>
                <msup>
                    <mrow>
                        <mfenced separators="|">
                            <mrow>
                                <mo>(</mo>
                                <mn>0</mn>
                                <mo>-</mo>
                                <mn>2</mn>
                                <mo>)</mo>
                            </mrow>
                        </mfenced>
                    </mrow>
                    <mrow>
                        <mn>2</mn>
                    </mrow>
                </msup>
                <mo>+</mo>
                <msup>
                    <mrow>
                        <mfenced separators="|">
                            <mrow>
                                <mo>(</mo>
                                <mn>4</mn>
                                <mo>-</mo>
                                <mn>6</mn>
                                <mo>)</mo>
                            </mrow>
                        </mfenced>
                    </mrow>
                    <mrow>
                        <mn>2</mn>
                    </mrow>
                </msup>
            </msqrt>
        </math><br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
            class="p11mathsize">
            <mi>d</mi>
            <mo>=</mo>
            <mi> </mi>
            <msqrt>
                <msup>
                    <mrow>
                        <mfenced separators="|">
                            <mrow>
                                <mo>-</mo>
                                <mn>2</mn>
                            </mrow>
                        </mfenced>
                    </mrow>
                    <mrow>
                        <mn>2</mn>
                    </mrow>
                </msup>
                <mo>+</mo>
                <msup>
                    <mrow>
                        <mfenced separators="|">
                            <mrow>
                                <mo>(</mo>
                                <mo>-</mo>
                                <mn>2</mn>
                                <mo>)</mo>
                            </mrow>
                        </mfenced>
                    </mrow>
                    <mrow>
                        <mn>2</mn>
                    </mrow>
                </msup>
            </msqrt>
        </math><br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
            class="p11mathsize">
            <mi>d</mi>
            <mo>=</mo>
            <mi> </mi>
            <msqrt>
                <mn>4</mn>
                <mo>+</mo>
                <mn>4</mn>
            </msqrt>
        </math><br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
            class="p11mathsize">
            <mi>d</mi>
            <mo>=</mo>
            <mi> </mi>
            <msqrt>
                <mn>8</mn>
            </msqrt>
        </math><br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
            class="p11mathsize">
            <mi>d</mi>
            <mo>=</mo>
            <mi> </mi>
            <mn>2.8</mn>
        </math>

        <br><br>
        <p>En este caso podemos apreciar que dos de los segmentos miden lo mismo, esto se puede visualizar desde el
            dibujo, sin embargo, en este ejemplo calculamos los 4 para comprobar esta afirmación.<br>
            Sumamos estas cantidades para obtener finalmente el perímetro:</p><br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
            class="p11mathsize">
            <mi>p</mi>
            <mo>=</mo>
            <mn>2.8</mn>
            <mo>+</mo>
            <mi> </mi>
            <mn>2.8</mn>
            <mo>+</mo>
            <mn>4.4</mn>
            <mo>+</mo>
            <mn>4.4</mn>
        </math><br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
            class="p11mathsize">
            <mi>p</mi>
            <mo>=</mo>
            <mn>14.4</mn>
        </math>

        <br>
        <p>Como el problema nos indica que la medida de los lados se encuentra en decímetros, hay que convertir el
            perímetro de dam a m, siendo entonces 144m</p><br>
        <br>
        <p>Ahora, el planteamiento nos indica que Raúl ya tiene 10 tablas de 15 metros, esto entonces cubre 150m, por
            ende, no le harán falta tablas.</p><br>
        <br>
        <p>Lo único que hace falta es calcular el área que tendrá el corral. En este caso, según la imagen de
            referencia, comenzaremos por el punto D, continuando por el punto A y así sucesivamente, en sentido
            contrario a las manecillas del reloj.</p><br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
            class="p11mathsize">
            <mi>á</mi>
            <mi>r</mi>
            <mi>e</mi>
            <mi>a</mi>
            <mo>=</mo>
            <mfrac>
                <mrow>
                    <mn>1</mn>
                    <mi> </mi>
                </mrow>
                <mrow>
                    <mn>2</mn>
                </mrow>
            </mfrac>
            <mrow>
                <mrow>
                    <mi mathvariant="normal">det</mi>
                </mrow>
                <mo>⁡</mo>
                <mrow>
                    <mfenced open="[" close="]" separators="|">
                        <mrow>
                            <mtable>
                                <mtr>
                                    <mtd>
                                        <mrow>
                                            <maligngroup />
                                            <mtable>
                                                <mtr>
                                                    <mtd>
                                                        <mrow>
                                                            <maligngroup />
                                                            <mtable>
                                                                <mtr>
                                                                    <mtd>
                                                                        <msub>
                                                                            <mrow>
                                                                                <mi>x</mi>
                                                                            </mrow>
                                                                            <mrow>
                                                                                <mn>1</mn>
                                                                            </mrow>
                                                                        </msub>
                                                                    </mtd>
                                                                    <mtd>
                                                                        <msub>
                                                                            <mrow>
                                                                                <mi>y</mi>
                                                                            </mrow>
                                                                            <mrow>
                                                                                <mn>1</mn>
                                                                            </mrow>
                                                                        </msub>
                                                                    </mtd>
                                                                </mtr>
                                                                <mtr>
                                                                    <mtd>
                                                                        <msub>
                                                                            <mrow>
                                                                                <mi>x</mi>
                                                                            </mrow>
                                                                            <mrow>
                                                                                <mn>2</mn>
                                                                            </mrow>
                                                                        </msub>
                                                                    </mtd>
                                                                    <mtd>
                                                                        <msub>
                                                                            <mrow>
                                                                                <mi>y</mi>
                                                                            </mrow>
                                                                            <mrow>
                                                                                <mn>2</mn>
                                                                            </mrow>
                                                                        </msub>
                                                                    </mtd>
                                                                </mtr>
                                                                <mtr>
                                                                    <mtd>
                                                                        <mo>⋮</mo>
                                                                    </mtd>
                                                                    <mtd>
                                                                        <mo>⋮</mo>
                                                                    </mtd>
                                                                </mtr>
                                                            </mtable>
                                                        </mrow>
                                                    </mtd>
                                                </mtr>
                                                <mtr>
                                                    <mtd>
                                                        <mrow>
                                                            <maligngroup />
                                                            <mtable>
                                                                <mtr>
                                                                    <mtd>
                                                                        <msub>
                                                                            <mrow>
                                                                                <mi>x</mi>
                                                                            </mrow>
                                                                            <mrow>
                                                                                <mi>n</mi>
                                                                            </mrow>
                                                                        </msub>
                                                                    </mtd>
                                                                    <mtd>
                                                                        <msub>
                                                                            <mrow>
                                                                                <mi>y</mi>
                                                                            </mrow>
                                                                            <mrow>
                                                                                <mi>n</mi>
                                                                            </mrow>
                                                                        </msub>
                                                                    </mtd>
                                                                </mtr>
                                                            </mtable>
                                                        </mrow>
                                                    </mtd>
                                                </mtr>
                                            </mtable>
                                        </mrow>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mrow>
                                            <maligngroup />
                                            <mtable>
                                                <mtr>
                                                    <mtd>
                                                        <msub>
                                                            <mrow>
                                                                <mi>x</mi>
                                                            </mrow>
                                                            <mrow>
                                                                <mn>1</mn>
                                                            </mrow>
                                                        </msub>
                                                    </mtd>
                                                    <mtd>
                                                        <msub>
                                                            <mrow>
                                                                <mi>y</mi>
                                                            </mrow>
                                                            <mrow>
                                                                <mn>1</mn>
                                                            </mrow>
                                                        </msub>
                                                    </mtd>
                                                </mtr>
                                            </mtable>
                                        </mrow>
                                    </mtd>
                                </mtr>
                            </mtable>
                        </mrow>
                    </mfenced>
                </mrow>
            </mrow>
        </math><br>
        <img src="./images/Progresion11img/img27.png" width="20%"><br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
            class="p11mathsize">
            <mi>á</mi>
            <mi>r</mi>
            <mi>e</mi>
            <mi>a</mi>
            <mo>=</mo>
            <mfrac>
                <mrow>
                    <mn>1</mn>
                    <mi> </mi>
                </mrow>
                <mrow>
                    <mn>2</mn>
                </mrow>
            </mfrac>
            <mrow>
                <mrow>
                    <mi mathvariant="normal">det</mi>
                </mrow>
                <mo>⁡</mo>
                <mrow>
                    <mfenced open="[" close="]" separators="|">
                        <mrow>
                            <mtable>
                                <mtr>
                                    <mtd>
                                        <mrow>
                                            <maligngroup />
                                            <mtable>
                                                <mtr>
                                                    <mtd>
                                                        <mn>2</mn>
                                                    </mtd>
                                                    <mtd>
                                                        <mn>6</mn>
                                                    </mtd>
                                                </mtr>
                                                <mtr>
                                                    <mtd>
                                                        <mn>0</mn>
                                                    </mtd>
                                                    <mtd>
                                                        <mn>4</mn>
                                                    </mtd>
                                                </mtr>
                                                <mtr>
                                                    <mtd>
                                                        <mn>2</mn>
                                                    </mtd>
                                                    <mtd>
                                                        <mn>2</mn>
                                                    </mtd>
                                                </mtr>
                                            </mtable>
                                        </mrow>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mrow>
                                            <maligngroup />
                                            <mtable>
                                                <mtr>
                                                    <mtd>
                                                        <mn>6</mn>
                                                    </mtd>
                                                    <mtd>
                                                        <mn>4</mn>
                                                    </mtd>
                                                </mtr>
                                                <mtr>
                                                    <mtd>
                                                        <mn>2</mn>
                                                    </mtd>
                                                    <mtd>
                                                        <mn>6</mn>
                                                    </mtd>
                                                </mtr>
                                            </mtable>
                                        </mrow>
                                    </mtd>
                                </mtr>
                            </mtable>
                        </mrow>
                    </mfenced>
                </mrow>
            </mrow>
        </math><br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
            class="p11mathsize">
            <mfenced open="[" close="]" separators="|">
                <mrow style="color:blue;">
                    <mfenced separators="|">
                        <mrow>
                            <mo>[</mo>
                            <mo>(</mo>
                            <mn>2</mn>
                            <mi>*</mi>
                            <mn>4</mn>
                            <mo>)</mo>
                        </mrow>
                    </mfenced>
                    <mo>+</mo>
                    <mfenced separators="|">
                        <mrow>
                            <mo>(</mo>
                            <mn>0</mn>
                            <mi>*</mi>
                            <mn>2</mn>
                            <mo>)</mo>
                        </mrow>
                    </mfenced>
                    <mo>+</mo>
                    <mfenced separators="|">
                        <mrow>
                            <mo>(</mo>
                            <mn>2</mn>
                            <mi>*</mi>
                            <mn>4</mn>
                            <mo>)</mo>
                        </mrow>
                    </mfenced>
                    <mo>+</mo>
                    <mfenced separators="|">
                        <mrow>
                            <mo>(</mo>
                            <mn>6</mn>
                            <mi>*</mi>
                            <mn>6</mn>
                            <mo>)</mo>
                            <mo>]</mo>
                        </mrow>
                    </mfenced>
                </mrow>
            </mfenced>
            <mo>-</mo>
            <mfenced open="[" close="]" separators="|" class="p11mathsize">
                <mrow style="color:red;">
                    <mfenced separators="|">
                        <mrow>
                            <mo>[</mo>
                            <mo>(</mo>
                            <mn>0</mn>
                            <mi>*</mi>
                            <mn>6</mn>
                            <mo>)</mo>
                        </mrow>
                    </mfenced>
                    <mo>+</mo>
                    <mfenced separators="|">
                        <mrow>
                            <mo>(</mo>
                            <mn>2</mn>
                            <mi>*</mi>
                            <mn>4</mn>
                            <mo>)</mo>
                        </mrow>
                    </mfenced>
                    <mo>+</mo>
                    <mfenced separators="|">
                        <mrow>
                            <mo>(</mo>
                            <mn>6</mn>
                            <mi>*</mi>
                            <mn>2</mn>
                            <mo>)</mo>
                        </mrow>
                    </mfenced>
                    <mo>+</mo>
                    <mfenced separators="|">
                        <mrow>
                            <mo>(</mo>
                            <mn>2</mn>
                            <mi>*</mi>
                            <mn>4</mn>
                            <mo>)</mo>
                            <mo>]</mo>
                        </mrow>
                    </mfenced>
                </mrow>
            </mfenced>
        </math><br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
            class="p11mathsize">
            <mfenced open="[" close="]" separators="|">
                <mrow style="color:blue;">
                    <mo>(</mo>
                    <mn>8</mn>
                    <mo>+</mo>
                    <mn>0</mn>
                    <mo>+</mo>
                    <mn>8</mn>
                    <mo>+</mo>
                    <mn>36</mn>
                    <mo>)</mo>
                </mrow>
            </mfenced>
            <mo>-</mo>
            <mfenced open="[" close="]" separators="|" class="p11mathsize">
                <mrow style="color:red;">
                    <mo>(</mo>
                    <mn>0</mn>
                    <mo>+</mo>
                    <mn>8</mn>
                    <mo>+</mo>
                    <mn>12</mn>
                    <mo>+</mo>
                    <mn>8</mn>
                    <mo>)</mo>
                </mrow>
            </mfenced>
        </math><br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
            class="p11mathsize">
            <mn>52</mn>
            <mo>-</mo>
            <mn>28</mn>
        </math><br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
            class="p11mathsize">
            <mn>24</mn>
        </math><br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
            class="p11mathsize">
            <mi>á</mi>
            <mi>r</mi>
            <mi>e</mi>
            <mi>a</mi>
            <mo>=</mo>
            <mfrac>
                <mrow>
                    <mn>1</mn>
                    <mi> </mi>
                </mrow>
                <mrow>
                    <mn>2</mn>
                </mrow>
            </mfrac>
            <mfenced open="|" close="|" separators="|">
                <mrow>
                    <mn>24</mn>
                </mrow>
            </mfenced>
        </math><br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
            class="p11mathsize">
            <mi>á</mi>
            <mi>r</mi>
            <mi>e</mi>
            <mi>a</mi>
            <mo>=</mo>
            <mfrac>
                <mrow>
                    <mn>24</mn>
                </mrow>
                <mrow>
                    <mn>2</mn>
                </mrow>
            </mfrac>
        </math><br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
            class="p11mathsize">
            <mi>á</mi>
            <mi>r</mi>
            <mi>e</mi>
            <mi>a</mi>
            <mo>=</mo>
            <mn>12</mn>
        </math>

        <br>
        <p>El área entonces es de 12dam<sup>2</sup>, en m<sup>2</sup> equivale a 120.<br>
            Con esto el problema queda resuelto.</p><br>
        <br>
        <p>2. En el patio de Alejandra se va a construir una piscina cuadrada, pero necesita saber cuántas baldosas de
            9cm2 necesita para cubrir el piso de la alberca. Calcular el área para saber cuántos cuadrados se
            necesitarán para cubrir el piso. Véase la siguiente imagen:</p><br>
        <div style="display:flex;">
            <div><img src="./images/Progresion11img/img12.png" width=" 70%"></div>
            <div>Coordenadas<br>
                A(3, 1)<br>
                B(3, 3)<br>
                C(1, 3)<br>
                D(1, 1)<br>
            </div>
        </div>
        <br>

        <br>
        <p>En este caso no se solicita perímetro, por lo cual iremos directamente al área, comenzando a calcular el
            determinante. Según la imagen del cuadrado, comenzaremos por el punto B y seguiremos con el C, contrario a
            las manecillas del reloj:</p><br>
        <math xmlns="http://www.w3.org/1998/Math/MathML"
            xmlns="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">
            <mi>á</mi>
            <mi>r</mi>
            <mi>e</mi>
            <mi>a</mi>
            <mo>=</mo>
            <mfrac>
                <mrow>
                    <mn>1</mn>
                    <mi> </mi>
                </mrow>
                <mrow>
                    <mn>2</mn>
                </mrow>
            </mfrac>
            <mrow>
                <mrow>
                    <mi mathvariant="normal">det</mi>
                </mrow>
                <mo>⁡</mo>
                <mrow>
                    <mfenced open="[" close="]" separators="|">
                        <mrow>
                            <mtable <mtr>
                                <mtd>
                                    <mrow>
                                        <maligngroup />
                                        <mtable>
                                            <mtr>
                                                <mtd>
                                                    <mrow>
                                                        <maligngroup />
                                                        <mtable>
                                                            <mtr>
                                                                <mtd>
                                                                    <msub>
                                                                        <mrow>
                                                                            <mi>x</mi>
                                                                        </mrow>
                                                                        <mrow>
                                                                            <mn>1</mn>
                                                                        </mrow>
                                                                    </msub>
                                                                </mtd>
                                                                <mtd>
                                                                    <msub>
                                                                        <mrow>
                                                                            <mi>y</mi>
                                                                        </mrow>
                                                                        <mrow>
                                                                            <mn>1</mn>
                                                                        </mrow>
                                                                    </msub>
                                                                </mtd>
                                                            </mtr>
                                                            <mtr>
                                                                <mtd>
                                                                    <msub>
                                                                        <mrow>
                                                                            <mi>x</mi>
                                                                        </mrow>
                                                                        <mrow>
                                                                            <mn>2</mn>
                                                                        </mrow>
                                                                    </msub>
                                                                </mtd>
                                                                <mtd>
                                                                    <msub>
                                                                        <mrow>
                                                                            <mi>y</mi>
                                                                        </mrow>
                                                                        <mrow>
                                                                            <mn>2</mn>
                                                                        </mrow>
                                                                    </msub>
                                                                </mtd>
                                                            </mtr>
                                                            <mtr>
                                                                <mtd>
                                                                    <mo>⋮</mo>
                                                                </mtd>
                                                                <mtd>
                                                                    <mo>⋮</mo>
                                                                </mtd>
                                                            </mtr>
                                                        </mtable>
                                                    </mrow>
                                                </mtd>
                                            </mtr>
                                            <mtr>
                                                <mtd>
                                                    <mrow>
                                                        <maligngroup />
                                                        <mtable>
                                                            <mtr>
                                                                <mtd>
                                                                    <msub>
                                                                        <mrow>
                                                                            <mi>x</mi>
                                                                        </mrow>
                                                                        <mrow>
                                                                            <mi>n</mi>
                                                                        </mrow>
                                                                    </msub>
                                                                </mtd>
                                                                <mtd>
                                                                    <msub>
                                                                        <mrow>
                                                                            <mi>y</mi>
                                                                        </mrow>
                                                                        <mrow>
                                                                            <mi>n</mi>
                                                                        </mrow>
                                                                    </msub>
                                                                </mtd>
                                                            </mtr>
                                                        </mtable>
                                                    </mrow>
                                                </mtd>
                                            </mtr>
                                        </mtable>
                                    </mrow>
                                </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mrow>
                                            <maligngroup />
                                            <mtable>
                                                <mtr>
                                                    <mtd>
                                                        <msub>
                                                            <mrow>
                                                                <mi>x</mi>
                                                            </mrow>
                                                            <mrow>
                                                                <mn>1</mn>
                                                            </mrow>
                                                        </msub>
                                                    </mtd>
                                                    <mtd>
                                                        <msub>
                                                            <mrow>
                                                                <mi>y</mi>
                                                            </mrow>
                                                            <mrow>
                                                                <mn>1</mn>
                                                            </mrow>
                                                        </msub>
                                                    </mtd>
                                                </mtr>
                                            </mtable>
                                        </mrow>
                                    </mtd>
                                </mtr>
                            </mtable>
                        </mrow>
                    </mfenced>
                </mrow>
            </mrow>
        </math><br>
        <math xmlns="http://www.w3.org/1998/Math/MathML"
            xmlns="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">
            <mi>á</mi>
            <mi>r</mi>
            <mi>e</mi>
            <mi>a</mi>
            <mo>=</mo>
            <mfrac>
                <mrow>
                    <mn>1</mn>
                    <mi> </mi>
                </mrow>
                <mrow>
                    <mn>2</mn>
                </mrow>
            </mfrac>
            <mrow>
                <mrow>
                    <mi mathvariant="normal">det</mi>
                </mrow>
                <mo>⁡</mo>
                <mrow>
                    <mfenced open="[" close="]" separators="|">
                        <mrow>
                            <mtable>
                                <mtr>
                                    <mtd>
                                        <mrow>
                                            <maligngroup />
                                            <mtable>
                                                <mtr>
                                                    <mtd>
                                                        <mn>3</mn>
                                                    </mtd>
                                                    <mtd>
                                                        <mn>3</mn>
                                                    </mtd>
                                                </mtr>
                                                <mtr>
                                                    <mtd>
                                                        <mn>1</mn>
                                                    </mtd>
                                                    <mtd>
                                                        <mn>3</mn>
                                                    </mtd>
                                                </mtr>
                                                <mtr>
                                                    <mtd>
                                                        <mn>1</mn>
                                                    </mtd>
                                                    <mtd>
                                                        <mn>1</mn>
                                                    </mtd>
                                                </mtr>
                                            </mtable>
                                        </mrow>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mrow>
                                            <maligngroup />
                                            <mtable>
                                                <mtr>
                                                    <mtd>
                                                        <mn>3</mn>
                                                    </mtd>
                                                    <mtd>
                                                        <mn>1</mn>
                                                    </mtd>
                                                </mtr>
                                            </mtable>
                                        </mrow>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mrow>
                                            <maligngroup />
                                            <mtable>
                                                <mtr>
                                                    <mtd>
                                                        <mn>3</mn>
                                                    </mtd>
                                                    <mtd>
                                                        <mn>3</mn>
                                                    </mtd>
                                                </mtr>
                                            </mtable>
                                        </mrow>
                                    </mtd>
                                </mtr>
                            </mtable>
                        </mrow>
                    </mfenced>
                </mrow>
            </mrow>
        </math>

        <br>
        <img src="./images/Progresion11img/img28.png" width="20%"><br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
            class="p11mathsize">
            <mfenced open="[" separators="|">
                <mrow style="color:blue;">
                    <mfenced separators="|">
                        <mrow>
                            <mn>[(3</mn>
                            <mi>*</mi>
                            <mn>3)</mn>
                        </mrow>
                    </mfenced>
                    <mo>+</mo>
                    <mfenced separators="|">
                        <mrow>
                            <mn>(1</mn>
                            <mi>*</mi>
                            <mn>1)</mn>
                        </mrow>
                    </mfenced>
                    <mo>+</mo>
                    <mfenced separators="|">
                        <mrow>
                            <mn>(1</mn>
                            <mi>*</mi>
                            <mn>1)</mn>
                        </mrow>
                    </mfenced>
                    <mo>+</mo>
                    <mfenced separators="|">
                        <mrow>
                            <mn>(3</mn>
                            <mi>*</mi>
                            <mn>3)]</mn>
                        </mrow>
                    </mfenced>
                </mrow>
            </mfenced close="]">
            <mo>-</mo>
            <mfenced open="[" close="]" separators="|">
                <mrow style="color:red;">
                    <mfenced separators="|">
                        <mrow>
                            <mn>[(1</mn>
                            <mi>*</mi>
                            <mn>3)</mn>
                        </mrow>
                    </mfenced>
                    <mo>+</mo>
                    <mfenced separators="|">
                        <mrow>
                            <mn>(1</mn>
                            <mi>*</mi>
                            <mn>3)</mn>
                        </mrow>
                    </mfenced>
                    <mo>+</mo>
                    <mfenced separators="|">
                        <mrow>
                            <mn>(3</mn>
                            <mi>*</mi>
                            <mn>1)</mn>
                        </mrow>
                    </mfenced>
                    <mo>+</mo>
                    <mfenced separators="|">
                        <mrow>
                            <mn>(3</mn>
                            <mi>*</mi>
                            <mn>1)]</mn>
                        </mrow>
                    </mfenced>
                </mrow>
            </mfenced>
        </math><br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
            class="p11mathsize">
            <mfenced open="[" close="]" separators="|">
                <mrow style="color:blue;">
                    <mn>[9</mn>
                    <mo>+</mo>
                    <mn>1</mn>
                    <mo>+</mo>
                    <mn>1</mn>
                    <mo>+</mo>
                    <mn>9]</mn>
                </mrow>
            </mfenced>
            <mo>-</mo>
            <mfenced open="[" close="]" separators="|">
                <mrow style="color:red;">
                    <mn>[3</mn>
                    <mo>+</mo>
                    <mn>3</mn>
                    <mo>+</mo>
                    <mn>3</mn>
                    <mo>+</mo>
                    <mn>3]</mn>
                </mrow>
            </mfenced>
        </math><br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
            class="p11mathsize">
            <mn>20</mn>
            <mo>-</mo>
            <mn>12</mn>
        </math><br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
            class="p11mathsize">
            <mn>8</mn>
        </math><br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
            class="p11mathsize">
            <mi>á</mi>
            <mi>r</mi>
            <mi>e</mi>
            <mi>a</mi>
            <mo>=</mo>
            <mfrac>
                <mrow>
                    <mn>1</mn>
                    <mi> </mi>
                </mrow>
                <mrow>
                    <mn>2</mn>
                </mrow>
            </mfrac>
            <mfenced open="|" close="|" separators="|">
                <mrow>
                    <mn>|8|</mn>
                </mrow>
            </mfenced>
        </math><br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
            class="p11mathsize">
            <mi>á</mi>
            <mi>r</mi>
            <mi>e</mi>
            <mi>a</mi>
            <mo>=</mo>
            <mfrac>
                <mrow>
                    <mn>8</mn>
                </mrow>
                <mrow>
                    <mn>2</mn>
                </mrow>
            </mfrac>
        </math><br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
            class="p11mathsize">
            <mi>á</mi>
            <mi>r</mi>
            <mi>e</mi>
            <mi>a</mi>
            <mo>=</mo>
            <mn>4</mn>
        </math>

        <br>
        <p>La superficie es de 4m2, y el problema solicita calcular cuántas baldosas son las que se necesitan para
            cubrir el área.<br>

            4m2 corresponde a 400cm2, las baldosas son de 9cm2 entonces:<br>
            <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">
                <mn>400</mn>
                <mo>÷</mo>
                <mn>9</mn>
            </math><br>
            <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">
                <mn>44.4</mn>
            </math><br>
            <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize">
                <mn>44</mn>
                <mfenced separators="|">
                    <mrow>
                        <mn>9</mn>
                    </mrow>
                </mfenced>
                <mo>=</mo>
                <mn>396</mn>
            </math><br>

            <br>
            El resultado es decimal, tomando la parte entera nos indica que se necesitan 44 baldosas, que cubren 396cm2:
        </p><br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" class="p11mathsize"
            class="p11mathsize">
            <mn>400</mn>
            <mo>-</mo>
            <mn>396</mn>
            <mo>=</mo>
            <mn>4</mn>
        </math>

        <br><br>
        <p>Harían falta 4cm2, por ello sería necesario recortar una baldosa para cubrir todo, la baldosa tiene de área
            9cm2, es decir, mide 3cm cada lado, por lo que se requiere que se reduzca a 2cm para que el área sea de 4cm2
            y así se pueda cubrir el piso de la piscina.</p><br>


        <p>Entonces, el área es de 4m2, por lo que se necesitan 44 baldosas de 9cm2 y 1 de 4cm2.</p><br>


        <div class="imgejercicios">
            <div>
                <img id="pyaejer" src="images/Ejercicios.png" width=180px height=auto style="margin-right: 20px;">
            </div>
            <div id="ejercicios">
                <h2>Ejercicios</h2><br><br>
            </div>
        </div>
        <br>
        <form method="post">
            1. Selecciona la respuesta correcta.<br>
            a)En un campo se destinará una parte para plantar árboles frutales, cada árbol necesita de 1.5m2. Las
            coordenadas de la figura son las siguientes:<br>
            <div style="display:flex;">
                <div>
                    <img src="./images/Progresion11img/img13.png" width="90%">
                </div>
                <div>
                    A(1.25, 6)<br>
                    B(0, 8)<br>
                    C(3, 7.5)<br>
                </div>

            </div>
            <br>
            <span style="color:red;">NOTA:</span> La medida de los lados se encuentra en hm, convertir el área a
            m2.<br><br>
            <div class="pdcontainer">
                <div>
                    ¿Cuál es el área del terreno?<br>
                    <input type="radio" name="p11e3r1" id="p11e3r1a1" value="1"><label
                        for="">270m<sup>2</sup></label><br>
                    <input type="radio" name="p11e3r1" id="p11e3r1a2" value="2"><label
                        for="">200m<sup>2</sup></label><br>
                    <input type="radio" name="p11e3r1" id="p11e3r1a3" value="3"><label for="">270m<sup>2</label><br>
                    <br>
                </div>
                <div>
                    ¿Cuántos árboles se podrán plantar?<br>
                    <input type="radio" name="p11e3r2" id="p11e3r2a1" value="2"><label for="">200</label><br>
                    <input type="radio" name="p11e3r2" id="p11e3r2a2" value="1"><label for="">180</label><br>
                    <input type="radio" name="p11e3r2" id="p11e3r2a3" value="3"><label for="">20</label><br>
                    <br>
                </div>
            </div>


            b)Se desea cercar un terreno que tiene las siguientes coordenadas:<br>
            <div style="display:flex;">
                <div>
                    <img src="./images/Progresion11img/img14.png" width="90%">
                </div>
                <div>
                    A(0, 100)<br>
                    B(50, 200)<br>
                    C(150, 150)<br>
                    D(50, 150)<br>
                    E(100, 100)<br>
                </div>

            </div>
            <br>

            Determinar cuántos metros de alambre se necesitan y cuánto dinero requieren si cada metro cuesta $25.50.<br>
            <br>
            <div class="pdcontainer">
                <div>
                    Alambre<br>
                    <input type="radio" name="p11e3" id="p11e3a1" value="3"><label for="">96.3m</label><br>
                    <input type="radio" name="p11e3" id="p11e3a2" value="2"><label for="">502.36m</label><br>
                    <input type="radio" name="p11e3" id="p11e3a3" value="1"><label for="">494.3m</label><br>
                    <br>
                </div>
                <div>
                    Dinero<br>
                    <input type="radio" name="p11e4" id="p11e4a1" value="1"><label for="">$19.38</label><br>
                    <input type="radio" name="p11e4" id="p11e4a2" value="2"><label for="">$15.45</label><br>
                    <input type="radio" name="p11e4" id="p11e4a3" value="3"><label for="">$100.25</label><br>
                    <br>
                </div>
            </div>



            c)La siguiente superficie corresponde a un espacio cuyo borde se desea adornar con listón. ¿Cuántos metros
            se
            necesitan?<br>
            <div class="pdcontainer">
                <div>
                    <img src="./images/Progresion11img/img29.png" width="90%">
                </div>
                <div>
                    A(5, 10)<br>
                    B(10, 5)<br>
                    C(15, 20)<br>
                    D(0, 15)<br>
                    E(5, 15)<br>
                </div>

                <div>
                    <input type="radio" name="p11e3r5" id="p11e3r5a1" value="1"><label for="">48.7m</label><br>
                    <input type="radio" name="p11e3r5" id="p11e3r5a2" value="2"><label for="">54.2m</label><br>
                    <input type="radio" name="p11e3r5" id="p11e3r5a3" value="3"><label for="">61.4m</label><br>
                    <br>
                </div>

            </div>
            <br>

            d)Rodrigo quiere comprar un terreno grande, tiene las siguientes opciones, ¿Cuál le conviene? Es decir, ¿Qué
            terreno tiene más m2?<br>
            <br>

            <div class="pdcontainer">
                <div>
                    Terreno A<br>
                    <img src="./images/Progresion11img/img15.png" width="80%">
                </div>
                <div>
                    A(41.5, 99.3)<br>
                    B(98.2, 42.6)<br>
                    C(200, 200)<br>
                    D(100, 300)<br>
                </div>

                <div>
                    Terreno B<br>
                    <img src="./images/Progresion11img/img16.png" width="100%">
                </div>
                <div>
                    E(100, 500)<br>
                    F(22.01, 420.4)<br>
                    G(500, 400)<br>
                </div>

            </div>
            <br>



            <br>

            Terreno C<br>
            <div style="display:flex;">
                <div>
                    <img src="./images/Progresion11img/img17.png" width="80%">
                </div>
                <div>

                    H(400, 300)<br>
                    I(300, 300)<br>
                    J(272.8,203.08)<br>
                    K(400, 100)<br>
                    L(500, 200)<br>
                </div>

            </div>
            <br>

            <input type="radio" name="p11e3r6" id="p11e3r6a1" value="3"><label for="">Terreno A</label><br>
            <input type="radio" name="p11e3r6" id="p11e3r6a2" value="2"><label for="">Terreno B</label><br>
            <input type="radio" name="p11e3r6" id="p11e3r6a3" value="1"><label for="">Terreno C</label><br>
            <br>

            e)Antonio compró dos propiedades, por el momento requiere colocar una barda que tenga 2 metros de altura.
            ¿Cuántos ladrillos de 150cm2 (30cm x 5 cm) va a necesitar en total para ambos terrenos?<br>
            Figura A<br>
            <div style="display:flex;">
                <div>
                    <img src="./images/Progresion11img/img18.png" width="90%">
                </div>
                <div>
                    A(31.3,99.1)<br>
                    B(100, 0)<br>
                    C(150, 150)<br>
                    D(50, 200)<br>
                </div>

            </div>
            <br>

            Figura B <br>
            <div style="display:flex;">
                <div>
                    <img src="./images/Progresion11img/img18.png" width="90%">
                </div>
                <div>
                    E(250, 50)<br>
                    F(250, 200)<br>
                    G(300, 100)<br>
                </div>

            </div>
            <br>
            <input type="radio" name="p11e3r7" id="p11e3r7a1" value="3"><label for="">1000</label><br>
            <input type="radio" name="p11e3r7" id="p11e3r7a2" value="2"><label for="">1280</label><br>
            <input type="radio" name="p11e3r7" id="p11e3r7a3" value="1"><label for="">1080</label><br>
            <br>

            2. Selecciona el área y perímetro correcto.<br>
            <br>
            a)<br>
            <div class="pdcontainer">
                <div>
                    <img src="./images/Progresion11img/img19.png" width="90%">
                </div>
                <div>
                    A(0, 40)<br>
                    B(80, 0)<br>
                    C(80,160)<br>
                    D(40,160)<br>
                    E(0,120)<br>
                    F(20,80)<br>
                </div>

                <div>
                    Área <br>
                    <input type="radio" name="p11e3r8" id="p11e3r8a1" value="2"><label
                        for="">5700u<sup>2</sup></label><br>
                    <input type="radio" name="p11e3r8" id="p11e3r8a2" value="1"><label
                        for="">9600u<sup>2</sup></label><br>
                    <input type="radio" name="p11e3r8" id="p11e3r8a3" value="3"><label
                        for="">8452u<sup>2</sup></label><br>
                    <br>
                </div>

                <div>
                    Perímetro<br>
                    <input type="radio" name="p11e3r9" id="p11e3r9a1" value="3"><label for="">135u</label><br>
                    <input type="radio" name="p11e3r9" id="p11e3r9a2" value="2"><label for="">522.8u</label><br>
                    <input type="radio" name="p11e3r9" id="p11e3r9a3" value="1"><label for="">435.4u</label><br>
                    <br>
                </div>

            </div>
            <br>

            b)<br>
            <div class="pdcontainer">
                <div>
                    <img src="./images/Progresion11img/img20.png" width="90%">
                </div>
                <div>
                    A(18,94)<br>
                    B(20,98)<br>
                    C(22,94)<br>
                    D(26,94)<br>
                    E(22,92)<br>
                    F(24,88)<br>
                    G(20,90)<br>
                    H(16,88)<br>
                    I(18,92)<br>
                    J(14,94)<br>
                </div>

                <div>
                    Área<br>
                    <input type="radio" name="p11e3r10" id="p11e3r10a1" value="1"><label
                        for="">40u<sup>2</sup></label><br>
                    <input type="radio" name="p11e3r10" id="p11e3r10a2" value="2"><label
                        for="">50u<sup>2</sup></label><br>
                    <input type="radio" name="p11e3r10" id="p11e3r10a3" value="3"><label
                        for="">60u<sup>2</sup></label><br>
                    <br>
                </div>

                <div>
                    Perímetro<br>
                    <input type="radio" name="p11e3r11" id="p11e3r11a1" value="3"><label for="">36u</label><br>
                    <input type="radio" name="p11e3r11" id="p11e3r11a2" value="3"><label for="">56u</label><br>
                    <input type="radio" name="p11e3r11" id="p11e3r11a3" value="3"><label for="">44u</label><br>
                    <br>
                </div>

            </div>
            <br>



            c)<br>
            <div class="pdcontainer">
                <div>
                    <img src="./images/Progresion11img/img21.png" width="90%">
                </div>
                <div>
                    A(-14.5, 0)<br>
                    B(-10,-10)<br>
                    C(4.03, 4.01)<br>
                    B(-10,-10)<br>
                    E(20,20)<br>
                    F(-5.7, 28)<br>
                    G(-13.9, 18.1)<br>
                    H(-10,10)<br>
                </div>

                <div>
                    Área<br>
                    <input type="radio" name="p11e3r12" id="p11e3r12a1" value="3"><label
                        for="">744.12u<sup>2</sup></label><br>
                    <input type="radio" name="p11e3r12" id="p11e3r12a2" value="1"><label
                        for="">806.9u<sup>2</sup></label><br>
                    <input type="radio" name="p11e3r12" id="p11e3r12a3" value="2"><label
                        for="">1203.6u<sup>2</sup></label><br>
                    <br>
                </div>

                <div>
                    Perímetro<br>
                    <input type="radio" name="p11e3r13" id="p11e3r13a1" value="3"><label for="">523.7u</label><br>
                    <input type="radio" name="p11e3r13" id="p11e3r13a2" value="2"><label for="">142.2u</label><br>
                    <input type="radio" name="p11e3r13" id="p11e3r13a3" value="1"><label for="">137.5u</label><br>
                    <br>
                </div>

            </div>
            <br>

            d)<br>
            <div class="pdcontainer">
                <div>
                    <img src="./images/Progresion11img/img22.png" width="90%">
                </div>
                <div>
                    A(-21.7, -218.2)<br>
                    B(-98.9, -168.04)<br>
                    C(-100,-50)<br>
                    D(100,-100)<br>
                </div>

                <div>
                    Área<br>
                    <input type="radio" name="p11e3r14" id="p11e3r14a1" value="3"><label
                        for="">7896.45u<sup>2</sup></label><br>
                    <input type="radio" name="p11e3r14" id="p11e3r14a2" value="2"><label
                        for="">15423.8u<sup>2</sup></label><br>
                    <input type="radio" name="p11e3r14" id="p11e3r14a3" value="1"><label
                        for="">19405.5u<sup>2</sup></label><br>
                    <br>
                </div>

                <div>
                    Perímetro<br>
                    <input type="radio" name="p11e3r15" id="p11e3r15a1" value="3"><label for="">145u</label><br>
                    <input type="radio" name="p11e3r15" id="p11e3r15a2" value="1"><label for="">586.1u</label><br>
                    <input type="radio" name="p11e3r15" id="p11e3r15a3" value="2"><label for="">786.8u</label><br>
                    <br>
                </div>

            </div>
            <br>

            e)<br>
            <div class="pdcontainer">
                <div>
                    <img src="./images/Progresion11img/img23.png">
                </div>
                <div>
                    A(-50.5, -19.1 )<br>
                    B(0,-100)<br>
                    C(29.6, -50.3)<br>
                    D(10.08, -19.7)<br>
                    E(11.3, 40.3)<br>
                    F(-50,50)<br>
                    G(-21.7, 21.9)<br>
                </div>

                <div>
                    Área<br>
                    <input type="radio" name="p11e3r16" id="p11e3r16a1" value="1"><label
                        for="">6339.3u<sup>2</sup></label><br>
                    <input type="radio" name="p11e3r16" id="p11e3r16a2" value="2"><label
                        for="">6524.9u<sup>2</sup></label><br>
                    <input type="radio" name="p11e3r16" id="p11e3r16a3" value="3"><label
                        for="">6879.3u<sup>2</sup></label><br>
                    <br>
                </div>

                <div>
                    Perímetro<br>
                    <input type="radio" name="p11e3r17" id="p11e3r17a1" value="1"><label for="">401.8u</label><br>
                    <input type="radio" name="p11e3r17" id="p11e3r17a2" value="2"><label for="">578.4u</label><br>
                    <input type="radio" name="p11e3r17" id="p11e3r17a3" value="3"><label for="">17.5u</label><br>
                    <br>
                </div>

            </div>
            <br>
            <div style="display:flex;">
                <button class="botonesrevisar" type="submit" name="P11E2REV" id="P11E2REV" class=""></button>
                <input class="botonesreintentar" value="" type="reset" name="n" id="n" id=""><br>
            </div>
        </form>
        <?php
        if (isset($_POST['P11E2REV'])) {
            require ('funcionrevradio.php');
            RevisarRadios(17, 2, 11);
        }
        ?>

        <br>
        <h1 id="angul">Ángulo de inclinación y pendiente</h1>
        <P>El ángulo de inclinación de una recta es el ángulo comprendido entre una recta y
            su componente horizontal. Para realizar estos cálculos se emplean conocimientos
            de trignometría, álgebra, aritmética y geometría analítica.<br>
            Se requiere de dos coordenadas en el plano cartesiano: conocer cuál es el punto
            1 y cuál es el punto 2. Las fórmulas que se emplean son las siguientes: </p>
        <br>
        <b>Fórmula para sacar la pendiente: </b><br>
        <div class="pendiente">
            <Div>
                <math class="formP11_1" xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                    <mi>m</mi>
                    <mo>=</mo>
                    <mfrac>
                        <mrow>
                            <msub>
                                <mrow>
                                    <mi>y</mi>
                                </mrow>
                                <mrow>
                                    <mn>2</mn>
                                </mrow>
                            </msub>
                            <mo>-</mo>
                            <msub>
                                <mrow>
                                    <mi>y</mi>
                                </mrow>
                                <mrow>
                                    <mn>1</mn>
                                </mrow>
                            </msub>
                        </mrow>
                        <mrow>
                            <msub>
                                <mrow>
                                    <mi>x</mi>
                                </mrow>
                                <mrow>
                                    <mn>2</mn>
                                </mrow>
                            </msub>
                            <mo>-</mo>
                            <msub>
                                <mrow>
                                    <mi>x</mi>
                                </mrow>
                                <mrow>
                                    <mn>1</mn>
                                </mrow>
                            </msub>
                        </mrow>
                    </mfrac>
                </math><br>
            </div>
            <div>En esta fórmula se toman las dos coordenadas.<br>
                Donde y2 y y1 corresponden a los valores de los puntos en el eje de las
                oordenadas.<br>
                x1 y x2 corresponden a los valores de los puntos en el eje de las abscisas.
                Por ejemplo:<br>
                Si el punto 1 es A(3, -5) y el punto 2 es B(10, 1) entonces:<br>
                <div style="column-count: 2;">
                    <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                        xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                        <msub>
                            <mrow>
                                <mi>y</mi>
                            </mrow>
                            <mrow>
                                <mn>2</mn>
                            </mrow>
                        </msub>
                        <mo>=</mo>
                        <mn>1</mn>
                    </math><br>
                    <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                        xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                        <msub>
                            <mrow>
                                <mi>y</mi>
                            </mrow>
                            <mrow>
                                <mn>1</mn>
                            </mrow>
                        </msub>
                        <mo>=</mo>
                        <mn>-5</mn>
                    </math><br>
                    <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                        xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                        <msub>
                            <mrow>
                                <mi>x</mi>
                            </mrow>
                            <mrow>
                                <mn>2</mn>
                            </mrow>
                        </msub>
                        <mo>=</mo>
                        <mn>10</mn>
                    </math><br>
                    <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                        xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                        <msub>
                            <mrow>
                                <mi>x</mi>
                            </mrow>
                            <mrow>
                                <mn>1</mn>
                            </mrow>
                        </msub>
                        <mo>=</mo>
                        <mn>3</mn>
                    </math><br>
                </div>
            </div>
        </div><br>
        <b>Fórmula para sacar el ángulo: </b><br>
        <div>
            <div>
                <math class="formP11_1" xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                    <mi>m</mi>
                    <mo>=</mo>
                    <mrow>
                        <mrow>
                            <mi mathvariant="normal">tan</mi>
                        </mrow>
                        <mo>⁡</mo>
                        <mrow>
                            <mi>θ</mi>
                        </mrow>
                    </mrow>
                </math>
                <div>
                    <div>
                        <p>Una vez obtenido el valor de la pendiente se utiliza esta segunda fórmula
                            para calcular el ángulo de inclinación de la recta. Generalmente se
                            requiere hacer un sencillo despeje para obtener el valordel ángulo tetha.
                            Donde theta y m son variables.</p><br>
                    </div>
                </div>
                <h2 id="angulejem">Ejemplos</h2><br>
                <i>Ejemplo 1</i><br>
                -Calcular el ángulo de inclinación de una recta que pasa por los puntos A(8, - 2) Y B(2, 0).
                <br>
                Lo primero a calcular es la pendiente, así que se sustituyen los valores en la fórmula y se realizan los
                cálculos.<br>
                <math style="font-size:27px;">
                    <mrow>
                        <mi>m</mi>
                        <mo>=</mo>
                        <mfrac>
                            <mrow>
                                <mn>0</mn>
                                <mo>&minus;</mo>
                                <mfenced open='(' close=')'>
                                    <mrow>
                                        <mo>(</mo>
                                        <mo>&minus;</mo>
                                        <mn>2</mn>
                                        <mo>)</mo>
                                    </mrow>
                                </mfenced>
                            </mrow>
                            <mrow>
                                <mn>2</mn>
                                <mo>&minus;</mo>
                                <mn>8</mn>
                            </mrow>
                        </mfrac>
                    </mrow>
                </math><br>
                <math style="font-size:27px;">
                    <mtable columnalign='left' linebreak='true'>
                        <mtr>
                        </mtr>
                        <mtr>
                            <mtd>
                                <mi>m</mi>
                                <mo>=</mo>
                                <mfrac>
                                    <mrow>
                                        <mn>0</mn>
                                        <mo>+</mo>
                                        <mn>2</mn>
                                    </mrow>
                                    <mrow>
                                        <mo>&minus;</mo>
                                        <mn>6</mn>
                                    </mrow>
                                </mfrac>
                            </mtd>
                        </mtr>
                        <mtr>
                            <mtd>
                                <mi>m</mi>
                                <mo>=</mo>
                                <mfrac>
                                    <mn>2</mn>
                                    <mrow>
                                        <mo>&minus;</mo>
                                        <mn>6</mn>
                                    </mrow>
                                </mfrac>
                            </mtd>
                        </mtr>
                        <mtr>
                            <mtd>
                                <mi>m</mi>
                                <mo>=</mo>
                                <mo>&minus;</mo>
                                <mfrac>
                                    <mn>1</mn>
                                    <mn>3</mn>
                                </mfrac>
                            </mtd>
                        </mtr>
                    </mtable>
                </math>
                <br>


                Una vez teniendo la pendiente calculada, se pasa a la siguiente fórmula a fin de conocer el
                ángulo de inclinación.<br>
                Se sustituye el valor de la pendiente.<br>
                <math>
                    <mrow>
                        <mo>&minus;</mo>
                        <mfrac>
                            <mn>1</mn>
                            <mn>3</mn>
                        </mfrac>
                        <mo>=</mo>
                        <tan />
                        <mi>&theta;</mi>
                    </mrow>
                </math>
                <br>

                Se realiza un sencillo despeje donde la tangente pasa a su inversa, es decir, al arcotangente.
                <br>
                <math>
                    <mtable columnalign='left' linebreak='true'>
                        <mtr>
                            <mtd>
                                <mrow></mrow>
                            </mtd>
                        </mtr>
                        <mtr>
                            <mtd>
                                <mi>&theta;</mi>
                                <mo>=</mo>
                                <arctan />
                                <mfenced open='(' close=')'>
                                    <mrow>
                                        <mo>arctan-</mo>
                                        <mfrac>
                                            <mn>1</mn>
                                            <mn>3</mn>
                                        </mfrac>
                                    </mrow>
                                </mfenced>
                            </mtd>
                        </mtr>
                    </mtable>
                </math>
                <br>


                <i>Ejemplo 2</i><br>
                Encontrar el ángulo de inclinación de una recta que atraviesa los puntos A(12, 3) Y B(5, 9).<br>

                <i>Ejemplo 3</i><br>
                Calcular el ángulo de inclinación de la recta que pasa por los puntos A(4, 5) Y B(11, 8).<br>

                <i>Ejemplo 4</i><br>
                Calcular el ángulo de inclinación de la recta que pasa por los puntos A(14, 0) Y B(20, 10).<br><br>


                <div class="imgejercicios">
                    <div>
                        <img id="angulejer" src="images/Ejercicios.png" width=180px height=auto
                            style="margin-right: 20px;">
                    </div>
                    <div>
                        <h1>Ejercicios</h1><br><br>
                    </div>
                </div>
                <form method="post">
                    1.Calcular los ángulos de inclinación y las pendientes de las siguientes rectas.<br><br>
                Encuentra el ángulo formado por la recta que tiene los puntos A(0,0) y B(4, 3)<br>
                Pendiente <input type="text" size=4 maxlength=10 name="p11e3txt1" id="p11e3txt1"> Ángulo de
                inclinación <input type="text" size=4 maxlength=10 name="p11e3txt2" id="p11e3txt2"><br> <br>
                Encuentra el ángulo formado por la recta que tiene los puntos A(-2,-2) y B(3, 1)<br>
                Pendiente <input type="text" size=4 maxlength=10 name="p11e3txt3" id="p11e3txt3"> Ángulo de
                inclinación <input type="text" size=4 maxlength=10 name="p11e3txt4" id="p11e3txt4"><br> <br>
                Encuentra el ángulo formado por la recta que tiene los puntos A(-1, 4) y B(4, -2)<br>
                Pendiente <input type="text" size=4 maxlength=10 name="p11e3txt5" id="p11e3txt5"> Ángulo de
                inclinación <input type="text" size=4 maxlength=10 name="p11e3txt6" id="p11e3txt6"><br> <br>
                Encuentra el ángulo formado por la recta que tiene los puntos A(-7, -5) y B(5, -3)<br>
                Pendiente <input type="text" size=4 maxlength=10 name="p11e3txt7" id="p11e3txt7"> Ángulo de
                inclinación <input type="text" size=4 maxlength=10 name="p11e3txt8" id="p11e3txt8"><br> <br>
                Encuentra el ángulo formado por la recta que tiene los puntos A(5,-4) y B(-6, 7)<br>
                Pendiente <input type="text" size=4 maxlength=10 name="p11e3txt9" id="p11e3txt9"> Ángulo de
                inclinación <input type="text" size=4 maxlength=10 name="p11e3txt10" id="p11e3txt10"><br> <br>
                Encuentra el ángulo formado por la recta que tiene los puntos A(7,-2) y B(3, 5)<br>
                Pendiente <input type="text" size=4 maxlength=10 name="p11e3txt11" id="p11e3txt11"> Ángulo de
                inclinación <input type="text" size=4 maxlength=10 name="p11e3txt12" id="p11e3txt12"><br> <br>
                Encuentra el ángulo formado por la recta que tiene los puntos A(6,7) y B(12, 7)<br>
                Pendiente <input type="text" size=4 maxlength=10 name="p11e3txt13" id="p11e3txt13"> Ángulo de
                inclinación <input type="text" size=4 maxlength=10 name="p11e3txt14" id="p11e3txt14"><br> <br>
                Encuentra el ángulo formado por la recta que tiene los puntos A(3, 7) y B(-6, 11)<br>
                Pendiente <input type="text" size=4 maxlength=10 name="p11e3txt15" id="p11e3txt15"> Ángulo de
                inclinación <input type="text" size=4 maxlength=10 name="p11e3txt16" id="p11e3txt16"><br> <br>
                Encuentra el ángulo formado por la recta que tiene los puntos A(5, 2) y B(7, 10)<br>
                Pendiente <input type="text" size=4 maxlength=10 name="p11e3txt17" id="p11e3txt17"> Ángulo de
                inclinación <input type="text" size=4 maxlength=10 name="p11e3txt18" id="p11e3txt18"><br> <br>
                Encuentra el ángulo formado por la recta que tiene los puntos A(-3,-2) y B(4, 8)<br>
                Pendiente <input type="text" size=4 maxlength=10 name="p11e3txt19" id="p11e3txt19"> Ángulo de
                inclinación <input type="text" size=4 maxlength=10 name="p11e3txt20" id="p11e3txt20"><br> <br>
                Encuentra el ángulo formado por la recta que tiene los puntos A(10,6) y B(9, -3)<br>
                Pendiente <input type="text" size=4 maxlength=10 name="p11e3txt21" id="p11e3txt21"> Ángulo de
                inclinación <input type="text" size=4 maxlength=10 name="p11e3txt22" id="p11e3txt22"><br> <br>
                Encuentra el ángulo formado por la recta que tiene los puntos A(1,4) y B(-3, -1)<br>
                Pendiente <input type="text" size=4 maxlength=10 name="p11e3txt23" id="p11e3txt23"> Ángulo de
                inclinación <input type="text" size=4 maxlength=10 name="p11e3txt24" id="p11e3txt24"><br> <br>
                Encuentra el ángulo formado por la recta que tiene los puntos A(2, 9) y B(-7, 8)<br>
                Pendiente <input type="text" size=4 maxlength=10 name="p11e3txt25" id="p11e3txt25"> Ángulo de
                inclinación <input type="text" size=4 maxlength=10 name="p11e3txt26" id="p11e3txt26"><br> <br>
                Encuentra el ángulo formado por la recta que tiene los puntos A(11, 9) y B(5, 11)<br>
                Pendiente <input type="text" size=4 maxlength=10 name="p11e3txt27" id="p11e3txt27"> Ángulo de
                inclinación <input type="text" size=4 maxlength=10 name="p11e3txt28" id="p11e3txt28"><br> <br>
                Encuentra el ángulo formado por la recta que tiene los puntos A(1,-6) y B(4, 5)<br>
                Pendiente <input type="text" size=4 maxlength=10 name="p11e3txt29" id="p11e3txt29"> Ángulo de
                inclinación <input type="text" size=4 maxlength=10 name="p11e3txt30" id="p11e3txt30"><br> <br>
                <div class="pdcontainer">
                <button name="P11E3REV" id="P11E3REV" type="submit" value="" class="botonesrevisar"></button>
                <input type="reset" value="" class="botonesreintentar">
                </div>
                </form>

                
                
                <script>
                    let respuestas2 = [936.86, '3/4',
                        30.96, '3/5',
                        129.81, -12,
                        9, '1/6',
                        135, -1,
                        119.7, '-7/4',
                        'infinito', 'infinito',
                        156, '-4/9',
                        75.96, 4,
                        55.84, '10/7',
                        9, 83.65,
                        '5/4', 51.34,
                        '1/9', 6.34,
                        '-2/6', 89.68,
                        '11/5', 65.55];
                    colores(respuestas2, 11, 3);
                </script>
                <?php
                if (isset($_POST['P11E3REV'])) {
                    $RespuestasE1 = array(
                        36.86,
                        '3/4',
                        30.96,
                        '3/5',
                        129.81,
                        -12,
                        9,
                        '1/6',
                        135,
                        -1,
                        119.7,
                        '-7/4',
                        'infinito',
                        'infinito',
                        156,
                        '-4/9',
                        75.96,
                        4,
                        55.84,
                        '10/7',
                        9,
                        83.65,
                        '5/4',
                        51.34,
                        '1/9',
                        6.34,
                        '-2/6',
                        89.68,
                        '11/5',
                        65.55

                    );
                    require ('funcionrevtxt.php');
                    Caso2txt($RespuestasE1, 3, 11, 'varchar');
                }
                ?>

                <br><br>
                <h1 id="er">Determinacion de la ecuacion de la recta</h1>
                <P>Determinar la ecuación de una recta es un proceso matemático sencillo que puede realizarse de
                    diversas maneras, todas llegando al
                    mismo resultado. La ecuación de una recta nos servirá para poder encontrar la ubicación de puntos en
                    una misma recta, conocer el
                    punto de intersección de una recta con el eje y u la ordenada al orígen, asimismo, se puede
                    encontrar la pendiente de una recta. Se
                    explicará cómo determinar esta ecuación con algunos ejemplos y al final de dejarán algunos
                    ejercicios de práctica.</p>
                <p class="remember">Recuerda que... </p>
                <p>La fórmula para calcular la pendiente es: </p>
                <math class="formP11_1" xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                    <mi>m</mi>
                    <mo>=</mo>
                    <mfrac>
                        <mrow>
                            <msub>
                                <mrow>
                                    <mi>y</mi>
                                </mrow>
                                <mrow>
                                    <mn>2</mn>
                                </mrow>
                            </msub>
                            <mo>-</mo>
                            <msub>
                                <mrow>
                                    <mi>y</mi>
                                </mrow>
                                <mrow>
                                    <mn>1</mn>
                                </mrow>
                            </msub>
                        </mrow>
                        <mrow>
                            <msub>
                                <mrow>
                                    <mi>x</mi>
                                </mrow>
                                <mrow>
                                    <mn>2</mn>
                                </mrow>
                            </msub>
                            <mo>-</mo>
                            <msub>
                                <mrow>
                                    <mi>x</mi>
                                </mrow>
                                <mrow>
                                    <mn>1</mn>
                                </mrow>
                            </msub>
                        </mrow>
                    </mfrac>
                </math><br>

                <b>Ecuación de la recta:</b><br>
                <div class="pendiente">
                    <div>
                        <math class="formP11_1" xmlns:mml="http://www.w3.org/1998/Math/MathML"
                            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                            <mi>y</mi>
                            <mo>=</mo>
                            <mi>m</mi>
                            <mi>x</mi>
                            <mo>+</mo>
                            <mi>b</mi>
                        </math>
                    </div>
                    <div>
                        Donde: <br>
                        y es el punto del eje de las ordenadas.<br>
                        x es el punto del eje de las abscisas.<br>
                        m es la pendiente de la recta.<br>
                        b es el punto de corte de la recta con el eje y.<br>
                    </div>
                </div>

                Generalmente se nos van a proporcionar dos coordenadas, por lo que, usando la fórmula de la pendiente
                susituimos los valores de la
                siguiente forma:<br><br>
                <math style="font-size: 30px;" xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                    <mi>m</mi>
                    <mo>=</mo>
                    <mfrac>
                        <mrow>
                            <mn>14</mn>
                            <mo>-</mo>
                            <mn>7</mn>
                        </mrow>
                        <mrow>
                            <mo>-</mo>
                            <mn>16</mn>
                            <mo>-</mo>
                            <mo>(</mo>
                            <mo>-</mo>
                            <mn>25</mn>
                            <mo>)</mo>
                        </mrow>
                    </mfrac>
                </math>
                <br>
                <math style="font-size: 30px;" xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                    <mi>m</mi>
                    <mo>=</mo>
                    <mfrac>
                        <mrow>
                            <mn>7</mn>
                        </mrow>
                        <mrow>
                            <mo>-</mo>
                            <mn>16</mn>
                            <mo>+</mo>
                            <mn>25</mn>
                            <mo>)</mo>
                        </mrow>
                    </mfrac>
                </math>
                <br>
                <math style="font-size: 30px;" xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                    <mi>m</mi>
                    <mo>=</mo>
                    <mfrac>
                        <mrow>
                            <mn>7</mn>
                        </mrow>
                        <mrow>
                            <mn>9</mn>
                        </mrow>
                    </mfrac>
                </math>
                <br>

                <p>Una vez con la pendiente calculada se sustituyen los valores que tenemos en la ecuación de la recta.
                    Para los valores de "x" y "y" se toma una de las dos coordenadas,esto ya es a elección personal,
                    aunque es recomendable
                    elegir la que tiene los valores más pequeños.</p><br>
                <math style="font-size: 30px;" xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                    <mn>7</mn>
                    <mo>=</mo>
                    <mfrac>
                        <mrow>
                            <mn>7</mn>
                        </mrow>
                        <mrow>
                            <mn>9</mn>
                        </mrow>
                    </mfrac>
                    <mo>(</mo>
                    <mn>14</mn>
                    <mo>)</mo>
                    <mo>+</mo>
                    <mi>b</mi>
                </math>
                <br>
                <math style="font-size: 30px;" xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                    <mn>7</mn>
                    <mo>=</mo>
                    <mfrac>
                        <mrow>
                            <mn>98</mn>
                        </mrow>
                        <mrow>
                            <mn>9</mn>
                        </mrow>
                    </mfrac>
                    <mo>+</mo>
                    <mi>b</mi>
                </math>
                <br>
                Así, podemos decir que ya hemos determinado la ecuación de la recta, sin embargo, también podemos
                obtener el valor de b
                por lo que hacemos una sustitución más a fin de completar los valores de las literales.<br>
                <math style="font-size: 30px;" xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                    <mi>b</mi>
                    <mo>=</mo>
                    <mn>7</mn>
                    <mo>-</mo>
                    <mi> </mi>
                    <mfrac>
                        <mrow>
                            <mn>98</mn>
                        </mrow>
                        <mrow>
                            <mn>9</mn>
                        </mrow>
                    </mfrac>
                </math>
                <br>
                <math style="font-size: 30px;" xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                    <mi>b</mi>
                    <mo>=</mo>
                    <mfrac>
                        <mrow>
                            <mn>63</mn>
                        </mrow>
                        <mrow>
                            <mn>9</mn>
                        </mrow>
                    </mfrac>
                    <mo>-</mo>
                    <mi> </mi>
                    <mfrac>
                        <mrow>
                            <mn>98</mn>
                        </mrow>
                        <mrow>
                            <mn>9</mn>
                        </mrow>
                    </mfrac>
                </math>
                <br>
                <math style="font-size: 30px;" xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                    <mi>b</mi>
                    <mo>=</mo>
                    <mo>-</mo>
                    <mfrac>
                        <mrow>
                            <mn>35</mn>
                        </mrow>
                        <mrow>
                            <mn>9</mn>
                        </mrow>
                    </mfrac>
                </math>
                <br><br>
                <div class="imgejercicios">
                    <div>
                        <img id="erejer" src="images/Ejercicios.png" width=180px height=auto
                            style="margin-right: 20px;">
                    </div>
                    <div id="ejercicios">
                        <h2>Ejercicios</h2><br><br>
                    </div>
                </div>
                <br>
                Con todo lo anterior, es momento de realizar algunos ejercicios<br>
                <form method="post">
                    1. Determinar la ecuación de la recta que pasa por los puntos A(-11, 0) y B(7, -15).<br>
                    Ecuación: <input type="text" size=4 maxlength=10 name="p11e4txt1" id="p11e4txt1">+ <em>b</em>
                    b<input type="text" size=4 maxlength=10 name="p11e4txt2" id="p11e4txt2">
                    <br><br>
                    2. Determinar la ecuación de la recta que pasa por los puntos A(6, 1) y B(3, 5).<br>
                    Ecuación: <input type="text" size=4 maxlength=10 name="p11e4txt3" id="p11e4txt3">+ <em>b</em>
                    b<input type="text" size=4 maxlength=10 name="p11e4txt4" id="p11e4txt4">
                    <br><br>
                    3. Determinar la ecuación de la recta que pasa por los puntos A(0, 0) y B(10, 10).<br>
                    Ecuación: <input type="text" size=4 maxlength=10 name="p11e4txt5" id="p11e4txt5">+ <em>b</em>
                    b<input type="text" size=4 maxlength=10 name="p11e4txt6" id="p11e4txt6">
                    <br><br>
                    4. Determinar la ecuación de la recta que pasa por los puntos A(-9, -2) y B(10, -1).<br>
                    Ecuación: <input type="text" size=4 maxlength=10 name="p11e4txt7" id="p11e4txt7">+ <em>b</em>
                    b<input type="text" size=4 maxlength=10 name="p11e4txt8" id="p11e4txt8">
                    <br><br>
                    5. Determinar la ecuación de la recta que pasa por los puntos A(-20, -6) y B(-12 -13).<br>
                    Ecuación: <input type="text" size=4 maxlength=10 name="p11e4txt9" id="p11e4txt9">+ <em>b</em>
                    b<input type="text" size=4 maxlength=10 name="p11e4txt10" id="p11e4txt10">
                    <br><br>
                    6. Determinar la ecuación de la recta que pasa por los puntos A(9, 9) y B(0, 0).<br>
                    Ecuación: <input type="text" size=4 maxlength=10 name="p11e4txt11" id="p11e4txt11">+ <em>b</em>
                    b<input type="text" size=4 maxlength=10 name="p11e4txt12" id="p11e4txt12">
                    <br><br>
                    7. Determinar la ecuación de la recta que pasa por los puntos A(5.3, -7.1) y B(-3.3, -1.9).<br>
                    Ecuación: <input type="text" size=4 maxlength=10 name="p11e4txt13" id="p11e4txt13">+ <em>b</em>
                    b<input type="text" size=4 maxlength=10 name="p11e4txt14" id="p11e4txt14">
                    <br><br>
                    8. Determinar la ecuación de la recta que pasa por los puntos A(-0.7, 10) y B(6, 10).<br>
                    Ecuación: <input type="text" size=4 maxlength=10 name="p11e4txt15" id="p11e4txt15">+ <em>b</em>
                    b<input type="text" size=4 maxlength=10 name="p11e4txt16" id="p11e4txt16">
                    <br><br>
                    9. Determinar la ecuación de la recta que pasa por los puntos A(7.1, 9) y B(-1 -1).<br>
                    Ecuación: <input type="text" size=4 maxlength=10 name="p11e4txt17" id="p11e4txt17">+ <em>b</em>
                    b<input type="text" size=4 maxlength=10 name="p11e4txt18" id="p11e4txt18">
                    <br><br>
                    10. Determinar la ecuación de la recta que pasa por los puntos A(8, 8) y B(9, 9.5).<br>
                    Ecuación: <input type="text" size=4 maxlength=10 name="p11e4txt19" id="p11e4txt19">+ <em>b</em>
                    b<input type="text" size=4 maxlength=10 name="p11e4txt20" id="p11e4txt20">
                    <br><br>
                    <div class="pdcontainer">
                        <button type="submit" name="P11E4REV" id="P11E4REV" value=""
                            class="botonesrevisar"></button>
                        <input type="reset" value="" class="botonesreintentar">
                    </div>
                </form>
                <script>
                    let respuestas3 = ['-5/6x',
                        '-55/6',
                        '-4/3x',
                        9,
                        'x',
                        'x',
                        '1/19x',
                        '-29/19',
                        '-7/8x',
                        '-42/2',
                        '-x',
                        'x',
                        '-0.6x',
                        -3.89,
                        '-infinita',
                        'infinita',
                        '-1.2x',
                        0.23,
                        '1.5x',
                        -4
                    ];
                    colores(respuestas3, 11, 4);
                </script>
                <?php
                if (isset($_POST['P11E4REV'])) {
                    $RespuestasE1 = array(
                        '-5/6x',
                        '-55/6',
                        '-4/3x',
                        9,
                        'x',
                        'x',
                        '1/19x',
                        '-29/19',
                        '-7/8x',
                        '-42/2',
                        '-x',
                        'x',
                        '-0.6x',
                        -3.89,
                        '-infinita',
                        'infinita',
                        '-1.2x',
                        0.23,
                        '1.5x',
                        -4

                    );
                    require ('funcionrevtxt.php');
                    Caso2txt($RespuestasE1, 4, 11, 'varchar');
                }
                ?>
                <br><br>

                <h1 id="resumen">Resumen</h1> <br>
                Por último, dejaremos un formulario con todas las fórmulas que se vieron a lo largo de la
                progresión.<br>
                <table class="table1p9">
                    <tr>
                        <th>Nombre</th>
                        <th>Fórmula</th>
                    </tr>

                    <tr>
                        <td>Teorema de Pitágoras</td>
                        <td><math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                                <msup>
                                    <mrow>
                                        <mi>a</mi>
                                    </mrow>
                                    <mrow>
                                        <mn>2</mn>
                                    </mrow>
                                </msup>
                                <mo>+</mo>
                                <msup>
                                    <mrow>
                                        <mi>b</mi>
                                    </mrow>
                                    <mrow>
                                        <mn>2</mn>
                                    </mrow>
                                </msup>
                                <mo>=</mo>
                                <msup>
                                    <mrow>
                                        <mi>c</mi>
                                    </mrow>
                                    <mrow>
                                        <mn>2</mn>
                                    </mrow>
                                </msup>
                            </math></td>
                    </tr>

                    <tr>
                        <td>Valor de los catetos</td>
                        <td><math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                                <msub>
                                    <mrow>
                                        <mi>c</mi>
                                    </mrow>
                                    <mrow>
                                        <mn>1</mn>
                                    </mrow>
                                </msub>
                                <mo>=</mo>
                                <msub>
                                    <mrow>
                                        <mi>y</mi>
                                    </mrow>
                                    <mrow>
                                        <mn>2</mn>
                                    </mrow>
                                </msub>
                                <mo>-</mo>
                                <msub>
                                    <mrow>
                                        <mi>y</mi>
                                    </mrow>
                                    <mrow>
                                        <mn>1</mn>
                                    </mrow>
                                </msub>
                            </math>
                            <br>
                            <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                                <msub>
                                    <mrow>
                                        <mi>c</mi>
                                    </mrow>
                                    <mrow>
                                        <mn>2</mn>
                                    </mrow>
                                </msub>
                                <mo>=</mo>
                                <msub>
                                    <mrow>
                                        <mi>x</mi>
                                    </mrow>
                                    <mrow>
                                        <mn>2</mn>
                                    </mrow>
                                </msub>
                                <mo>-</mo>
                                <msub>
                                    <mrow>
                                        <mi>x</mi>
                                    </mrow>
                                    <mrow>
                                        <mn>1</mn>
                                    </mrow>
                                </msub>
                            </math>
                        </td>
                    </tr>

                    <tr>
                        <td>Distancia entre dos puntos</td>
                        <td><math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                                <mi>d</mi>
                                <mo>=</mo>
                                <mroot>
                                    <mrow>
                                        <msup>
                                            <mrow>
                                                <mfenced separators="|">
                                                    <mrow>
                                                        <mo>(</mo>
                                                        <msub>
                                                            <mrow>
                                                                <mi>x</mi>
                                                            </mrow>
                                                            <mrow>
                                                                <mn>2</mn>
                                                            </mrow>
                                                        </msub>
                                                        <mo>-</mo>
                                                        <msub>
                                                            <mrow>
                                                                <mi>x</mi>
                                                            </mrow>
                                                            <mrow>
                                                                <mn>1</mn>
                                                            </mrow>
                                                        </msub>
                                                        <mo>)</mo>
                                                    </mrow>
                                                </mfenced>
                                            </mrow>
                                            <mrow>
                                                <mn>2</mn>
                                            </mrow>
                                        </msup>
                                        <mo>+</mo>
                                        <msup>
                                            <mrow>
                                                <mo>(</mo>
                                                <msub>
                                                    <mrow>
                                                        <mi>y</mi>
                                                    </mrow>
                                                    <mrow>
                                                        <mn>2</mn>
                                                    </mrow>
                                                </msub>
                                                <mo>-</mo>
                                                <msub>
                                                    <mrow>
                                                        <mi>y</mi>
                                                    </mrow>
                                                    <mrow>
                                                        <mn>1</mn>
                                                    </mrow>
                                                </msub>
                                                <mo>)</mo>
                                            </mrow>
                                            <mrow>
                                                <mn>2</mn>
                                            </mrow>
                                        </msup>
                                    </mrow>
                                    <mrow>
                                        <mn>2</mn>
                                    </mrow>
                                </mroot>
                            </math></td>
                    </tr>

                    <tr>
                        <td>Área de una figura</td>
                        <td><math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math"
                                class="p11mathsize">
                                <mi>á</mi>
                                <mi>r</mi>
                                <mi>e</mi>
                                <mi>a</mi>
                                <mo>=</mo>
                                <mfrac>
                                    <mrow>
                                        <mn>1</mn>
                                        <mi> </mi>
                                    </mrow>
                                    <mrow>
                                        <mn>2</mn>
                                    </mrow>
                                </mfrac>
                                <mrow>
                                    <mrow>
                                        <mi mathvariant="normal">det</mi>
                                    </mrow>

                                    <mrow>

                                        <mrow>

                                            <mtable>
                                                <mtr>
                                                    <mtd>
                                                        <mo>⁡[</mo>
                                                        <mrow>
                                                            <mtable>
                                                                <mtr>
                                                                    <mtd>
                                                                        <mrow>
                                                                            <mtable>
                                                                                <mtr>
                                                                                    <mtd>
                                                                                        <msub>
                                                                                            <mrow>
                                                                                                <mi>x</mi>
                                                                                            </mrow>
                                                                                            <mrow>
                                                                                                <mn>1</mn>
                                                                                            </mrow>
                                                                                        </msub>
                                                                                    </mtd>
                                                                                    <mtd>
                                                                                        <msub>
                                                                                            <mrow>
                                                                                                <mi>y</mi>
                                                                                            </mrow>
                                                                                            <mrow>
                                                                                                <mn>1</mn>
                                                                                            </mrow>
                                                                                        </msub>
                                                                                    </mtd>
                                                                                </mtr>
                                                                                <mtr>
                                                                                    <mtd>
                                                                                        <msub>
                                                                                            <mrow>
                                                                                                <mi>x</mi>
                                                                                            </mrow>
                                                                                            <mrow>
                                                                                                <mn>2</mn>
                                                                                            </mrow>
                                                                                        </msub>
                                                                                    </mtd>
                                                                                    <mtd>
                                                                                        <msub>
                                                                                            <mrow>
                                                                                                <mi>y</mi>
                                                                                            </mrow>
                                                                                            <mrow>
                                                                                                <mn>2</mn>
                                                                                            </mrow>
                                                                                        </msub>
                                                                                    </mtd>
                                                                                </mtr>
                                                                                <mtr>
                                                                                    <mtd>
                                                                                        <mo>⋮</mo>
                                                                                    </mtd>
                                                                                    <mtd>
                                                                                        <mo>⋮</mo>
                                                                                    </mtd>
                                                                                </mtr>
                                                                            </mtable>
                                                                        </mrow>
                                                                    </mtd>
                                                                </mtr>
                                                                <mtr>
                                                                    <mtd>
                                                                        <mrow>
                                                                            <maligngroup />
                                                                            <mtable>
                                                                                <mtr>
                                                                                    <mtd>
                                                                                        <msub>
                                                                                            <mrow>
                                                                                                <mi>x</mi>
                                                                                            </mrow>
                                                                                            <mrow>
                                                                                                <mi>n</mi>
                                                                                            </mrow>
                                                                                        </msub>
                                                                                    </mtd>
                                                                                    <mtd>
                                                                                        <msub>
                                                                                            <mrow>
                                                                                                <mi>y</mi>
                                                                                            </mrow>
                                                                                            <mrow>
                                                                                                <mi>n</mi>
                                                                                            </mrow>
                                                                                        </msub>
                                                                                    </mtd>
                                                                                </mtr>
                                                                            </mtable>
                                                                        </mrow>
                                                                    </mtd>
                                                                </mtr>
                                                            </mtable>
                                                        </mrow>
                                                    </mtd>
                                                </mtr>
                                                <mtr>
                                                    <mtd>
                                                        <mrow>
                                                            <maligngroup />
                                                            <mtable>
                                                                <mtr>
                                                                    <mtd>
                                                                        <msub>
                                                                            <mrow>
                                                                                <mi>x</mi>
                                                                            </mrow>
                                                                            <mrow>
                                                                                <mn>1</mn>
                                                                            </mrow>
                                                                        </msub>
                                                                    </mtd>
                                                                    <mtd>
                                                                        <msub>
                                                                            <mrow>
                                                                                <mi>y</mi>
                                                                            </mrow>
                                                                            <mrow>
                                                                                <mn>1</mn>
                                                                            </mrow>
                                                                        </msub>
                                                                    </mtd>
                                                                </mtr>
                                                            </mtable>
                                                        </mrow>
                                                    </mtd>
                                                </mtr>
                                            </mtable>
                                            <mo>]</mo>
                                        </mrow>
                                        </mfenced>
                                    </mrow>
                                </mrow>
                            </math></td>
                    </tr>

                    <tr>
                        <td>Pendiente</td>
                        <td><math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                                <mi>m</mi>
                                <mo>=</mo>
                                <mfrac>
                                    <mrow>
                                        <msub>
                                            <mrow>
                                                <mi>y</mi>
                                            </mrow>
                                            <mrow>
                                                <mn>2</mn>
                                            </mrow>
                                        </msub>
                                        <mo>-</mo>
                                        <msub>
                                            <mrow>
                                                <mi>y</mi>
                                            </mrow>
                                            <mrow>
                                                <mn>1</mn>
                                            </mrow>
                                        </msub>
                                    </mrow>
                                    <mrow>
                                        <msub>
                                            <mrow>
                                                <mi>x</mi>
                                            </mrow>
                                            <mrow>
                                                <mn>2</mn>
                                            </mrow>
                                        </msub>
                                        <mo>-</mo>
                                        <msub>
                                            <mrow>
                                                <mi>x</mi>
                                            </mrow>
                                            <mrow>
                                                <mn>1</mn>
                                            </mrow>
                                        </msub>
                                    </mrow>
                                </mfrac>
                            </math></td>
                    </tr>

                    <tr>
                        <td>Ángulo</td>
                        <td><math  xmlns:mml="http://www.w3.org/1998/Math/MathML"
                                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                                <mi>m</mi>
                                <mo>=</mo>
                                <mrow>
                                    <mrow>
                                        <mi mathvariant="normal">tan</mi>
                                    </mrow>
                                    <mo>⁡</mo>
                                    <mrow>
                                        <mi>θ</mi>
                                    </mrow>
                                </mrow>
                            </math></td>
                    </tr>

                    <tr>
                        <td>Ecuación de la recta</td>
                        <td><math  xmlns:mml="http://www.w3.org/1998/Math/MathML"
                                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                                <mi>y</mi>
                                <mo>=</mo>
                                <mi>m</mi>
                                <mi>x</mi>
                                <mo>+</mo>
                                <mi>b</mi>
                            </math></td>
                    </tr>

                </table>





    </section>

    <div id="fot">
        <?php include ('footer.php'); ?>
    </div>

</body>

</html>