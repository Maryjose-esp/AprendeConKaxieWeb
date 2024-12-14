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
    <link rel="icon" href="images/logo.ico" type="image/x-icon">
    <script src="js/script7.js"></script>
    <title>Progresion 7</title>
</head>

<body>
    <?php
    require ('ifSession.php');
    ?>

    <script src="js/script11.js"></script>
    <aside class="aside" id="aside7">
        <section id="s1">
            Pro
            gre
            sión
            7
        </section>
        <br>
        <Section class="sectionAs">
            <P>Resuelve situaciones-problema significativas para el estudiantado que involucren
                el estudio de proporcionalidad tanto directa como inversa, así como también el estudio de
                porcentajes, empleando la estructura algebraica de los números reales.
            </p>
            <img src="./images/P7.png" id="KaxieP1">
            <b>
                <h3> Metas </h3>
            </b><br>
            <H3>M3</H3>
            <P>Compara hechos, opiniones o afirmaciones para organizarlos en formas lógicas
                útiles en la solución de problemas y explicación de situaciones y fenómenos.</P>
            <H3>M4</H3>
            <P>Construye y plantea posibles soluciones a problemas de Áreas
                de Conocimiento, Recursos Sociocognitivos, Recursos socioemocionales y de su
                entorno, empleando técnicas y lenguaje matemático.</P>
            <b>
                <h3> Categorías </h3>
            </b><br>
            <H3>C2</H3>
            <P>Procesos de intución y razonamiento.</P>
            <H3>C3</H3>
            <P>Solución de problemas y modelación.</P>
            <b>
                <h3> Subcategorías </h3>
            </b><br>
            <H3>S2</H3>
            <P>Pensamiento intuitivo.</P>
            <H3>S3</H3>
            <P>Pensamiento formal.</P>
            <H3>S3</H3>
            <P>Estrategias heurísticas y ejecución de procedimientos no rutinarias.</P>

            <!--<div class="bodfals">
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
                <center><p> Este es tu porcentaje de avance en la progresión </p></center>-->
        </section>
        <div class="anteriorsig">
            <div class="panterior"><a href="progresion6.php"> <img src="images/Anterior.png" width=47px
                        style="margin-bottom: -18px;"> Anterior </a></div>
            <div class="psiguiente"><a href="progresion8.php"> Siguiente <img src="images/Siguiente.png" width=47px
                        style="margin-bottom: -18px;"> </a></div>
        </div>
    </aside>

    <section class="textP">
        <center>
            <div id="indice7" class="indice">
                <p>
                    &emsp;&emsp;&emsp;&emsp;&ensp;Índice<br>
                    <a href="#cc">Conceptos clave</a><br>
                    <a href="#introduccion">Introduccion</a><br>
                <p class="sangriindice"><a href="#ejemplo1">Ejemplos</a></p>
                <p> <a href="#tfp">Teorema Fundamental de <br>las Proporciones (TFP)</a></p>
                <p class="sangriindice"><a href="#ejercicios1">Ejercicios</a></p>
                <p> <a href="#4p">Cuarta proporcionalidad</a></p>
                <p class="sangriindice"><a href="#4pejem">Ejemplos</a></p>
                <p class="sangriindice"><a href="#4pejer">Ejercicios</a></p>
                <p> <a href="#2p">Media proporcional</a></p>
                <p class="sangriindice"><a href="#2pejem">Ejemplos</a></p>
                <p class="sangriindice"><a href="#2pejer">Ejercicios</a></p>
                <p> <a href="#pd">Proporción directa</a></p>
                <p class="sangriindice"><a href="#pdejem">Ejemplos</a></p>
                <p class="sangriindice"><a href="#pdejer">Ejercicios</a></p>
                <p> <a href="#pi">Proporcionalidad inversa</a></p>
                <p class="sangriindice"><a href="#piejem">Ejemplos</a></p>
                <p class="sangriindice"><a href="#piejer">Ejercicios</a></p>
                <p> <a href="#porcentajes">Porcentajes</a></p>
                <p class="sangriindice"><a href="#porejem">Ejemplos</a></p>
                <p class="sangriindice"><a href="#porejer">Ejercicios</a></p>
                <p> <a href="#resumen">Resumen</a></p>
                </p>
            </div>
        </center>

        <div class="">

            <img src="images/KCClave.png" width=180px height=auto class="conceptosclaveimg" style="margin-right: 20px;">


            <h1 id="cc">Conceptos clave</h1>
            <P>Magnitud. Todo lo que se puede medir numéricamente. Por ejemplo, la estatura y el peso.<br>
                Razón. Es el cociente entre dos números que son comparados, este se expresa en fracción.<br>
                Proporción. Es la igualdad entre dos razones. <br>
                Magnitudes directamente proporcionales. Al aumentar o disminuir una cantidad, otra aumenta o disminuye
                en la misma medida.<br>
                Magnitudes inversamente proporcionales. Mientras una cantidad aumenta o disminuye, la otra se incrementa
                o disminuye, respectivamente.<br>
                Tanto por ciento. Es una expresión que toma como referencia un valor y se representa como una fracción
                de denominador 100; se emplea el símbolo "%".<br>

        </div>
        </p>
        <br>

        <h1 id="introduccion">Introducción</h1>
        <div class="mate">
            <div>
                <math>
                    <mfrac>
                        <mn>a</mn>
                        <mn>b</mn>
                    </mfrac>
                </math>
            </div>
            <br>
            <div style="margin-left: 30px;">
                a:b
            </div>
            <div class="mateS">
                <P>
                <ul>En una razón tenemos dos elementos:
                    <li>Antecedente/Dividendo. En este caso es la literal a.</li>
                    <li> Consecuente. Divisor. En este caso es la literal b.</li< </ul><br>
                        Asimismo, la razón se puede representar de las 2 formas de la izquierda.
                        </p>
            </div>
        </div>

        <br>
        <p>Es muy importante no confundir una fracción con una razón, porque aunque visualmente parecen ser iguales,
            guardan una
            diferencia:
            En la razón podemos tener números decimales, mientras que en la fracción numerador y denominador son siempre
            enteros. Es
            así que una fracción puede ser una razón, mas una razón no siempre será una fracción por la cuestión de los
            decimales.
        </p><br>
        <h2 id="ejemplo1">Ejemplos</h2>
        <p> 1. Ana se dedica a vender pastel de zanahoria 18 días al mes y 6 a vender pay de manzana ¿Cuál es la razón
            entre los días que
            vende pastel y los que vende pay? <br>
            R= 18/6 o 18:6<br>
            <br>
            2. Por cada 2 manzanas que Ana utiliza para sus pays emplea 0.8 tazas de azúcar ¿Cuál es la razón entre las
            manzanas y las tazas
            de azúcar? <br>
            R= 2/0.8 o 2:0.8<br>
            <br>
            3. En el examen de admisión del CBTis se presentaron 180 preguntas en total. Alan respondió correctamente
            153, Luisa contestó
            exitosamente 100 cuestiones y Karina sólo acertó 84 interrogantes correctamente. Ante esto ¿Cuál es la razón
            de cada uno de
            los jóvenes?<br>
            R= Alan 153/180 o 153:180; Luisa 100/180 o 100:180; Karina 84/180 o 84:180<br>
            <br>
            4. Cada que Ramón no pide permiso a sus papás para salir, queda castigado 3 días ¿Cuál es la razón entre el
            castigo y los días?<br>
            R= 1/3 o 1:3
        </p><br>

        <div class="mate">
            <div>
                <math>
                    <mfrac>
                        <mn>a</mn>
                        <mn>b</mn>
                    </mfrac>
                    <mn> = </mn>
                    <mfrac>
                        <mn>c</mn>
                        <mn>d</mn>
                    </mfrac>
                </math>
            </div>
            <br>
            <div class="mateS" style="margin-right: 80px;">
                <P>Esta proporción se lee como "<i>a</i> es a <i>b</i> como <i>c</i> es a <i>d</i>".
                </p>
            </div>
            <img src="./images/Progresion7img/img1.png" id="img1P7">
            <p class="mateS"> De este lado se explican los elementos de la proporción.</p>
        </div>
        <p>
            La literal <em>"k"</em> en este contexto, representa a la constante de proporcionalidad, la cual es el
            resultado de las divisiones
            de las razones. Si una proporción es verdadera, entonces la constante de proporcionalidad debe de ser igual
            en todas
            las razones.
        </p>

        <h2 id="tfp">Teorema Fundamental de las Proporciones (TFP)</h2>
        <div>
            <div style="font-size: 27px;">
                <Div>
                    <math >
                        <mfrac>
                            <mn>a</mn>
                            <mn>b</mn>
                        </mfrac>
                        <mn> = </mn>
                        <mfrac>
                            <mn>c</mn>
                            <mn>d</mn>
                        </mfrac>

                    </math>
                </div>
                <div>
                    <math>
                        <mfrac>
                            <mn>3</mn>
                            <mn>7</mn>
                        </mfrac>
                        <mn> = </mn>
                        <mfrac>
                            <mn>1.5</mn>
                            <mn>3.5</mn>
                        </mfrac>

                    </math>
                </div>
                <div>
                    <math>
                        <mn>3(3.5) </mn>
                        <mn>= </mn>
                        <mn> 1.5(7) </mn>
                    </math>
                </div>
                <div>
                    <math>
                        <mn>10.5 </mn>
                        <mn> =</mn>
                        <mn> 10.5 </mn>
                    </math>
                </div>
            </div>
            <div>
                <p>En una proporción, el producto
                    de los medios es igual al producto de los extremos.</p>
            </div>
        </div>
        <br><br>
        <div class="imgejercicios">
            <div>
                <img id="ejercicios1" src="images/Ejercicios.png" width=180px height=auto style="margin-right: 20px;">
            </div>
            <div id="ejercicios">
                <h2>Ejercicios</h2><br><br>
            </div>
        </div>
        1. Para practicar el antecedente u consecuente, escribe según corresponda.<br>
        <span style="color:red;">NOTA: Las cifras con potencia escribelas de la siguiente forma: Ej. 4<sup>2</sup> = 42
            m<sup>4</sup> = m4. Asimismo, respeta mayúsculas, minúsculas
            y puntos decimales a fin de evitar errores en la revisión de los reactivos.</span><br><br>
        <div class="columne1">
            <form method="post">


                a)<math>
                    <mfrac>
                        <mn>9.5 </mn>
                        <mn>10 </mn>
                    </mfrac>
                </math>
                <input type="text" size="4" maxlength="10" name="p7e1txt1_1" id="p7e1txt1">:<input type="text" size="4" maxlength="10"
                    name="p7e1txt1_2" id="p7e1txt2"><br><br>
                b)<math>
                    <mfrac>
                        <mn>90 </mn>
                        <mn>100 </mn>
                    </mfrac>
                </math>
                <input type="text" size="4" maxlength="10" name="p7e1txt2_1" id="p7e1txt3">:<input type="text" size="4" maxlength="10"
                    name="p7e1txt2_2" id="p7e1txt4"><br><br>
                c)<math>
                    <mfrac>
                        <mn>0.547 </mn>
                        <mn>8.5 </mn>
                    </mfrac>
                </math>
                <input type="text" size="4" maxlength="10" name="p7e1txt3_1" id="p7e1txt5">:<input type="text" size="4" maxlength="10"
                    name="p7e1txt3_2" id="p7e1txt6"><br><br>
                d)<math>
                    <mfrac>
                        <mn>m </mn>
                        <mn>5n</mn>
                    </mfrac>
                </math>
                <input type="text" size="4" maxlength="10" name="p7e1txt4_1" id="p7e1txt7"> :<input type="text" size="4"
                    maxlength="10" name="p7e1txt4_2" id="p7e1txt8"><br><br>
                e)<math>
                    <mfrac>
                        <mn>3 </mn>
                        <mn>4b² </mn>
                    </mfrac>
                </math>
                <input type="text" size="4" maxlength="10" name="p7e1txt5_1" id="p7e1txt9">:<input type="text" size="4" maxlength="10"
                    name="p7e1txt5_2" id="p7e1txt10"><br><br>
                f)<math>
                    <mfrac>
                        <mn>67</mn>
                        <mn>230 </mn>
                    </mfrac>
                </math>
                <input type="text" size="4" maxlength="10" name="p7e1txt6_1" id="p7e1txt11">:<input type="text" size="4" maxlength="10"
                    name="p7e1txt6_2" id="p7e1txt12"><br><br>
                g)<math>
                    <mfrac>
                        <mn>0.16 </mn>
                        <mn>7.98 </mn>
                    </mfrac>
                </math>
                <input type="text" size="4" maxlength="10" name="p7e1txt7_1" id="p7e1txt13">:<input type="text" size="4" maxlength="10"
                    name="p7e1txt7_2" id="p7e1txt14"><br><br>
                h)<math>
                    <mfrac>
                        <mn>7 </mn>
                        <mn>10 </mn>
                    </mfrac>
                </math>
                <input type="text" size="4" maxlength="10" name="p7e1txt8_1" id="p7e1txt15">:<input type="text" size="4" maxlength="10"
                    name="p7e1txt8_2" id="p7e1txt16"><br><br>
                i)<math>
                    <mfrac>
                        <mn>x³</mn>
                        <mn>9 </mn>
                    </mfrac>
                </math>
                <input type="text" size="4" maxlength="10" name="p7e1txt9_1" id="p7e1txt17">:<input type="text" size="4" maxlength="10"
                    name="p7e1txt9_2" id="p7e1txt18"><br><br>

                j)<math>
                    <mfrac>
                        <mn>y </mn>
                        <mn>x </mn>
                    </mfrac>
                </math>
                <input type="text" size="4" maxlength="10" name="p7e1txt10_1" id="p7e1txt19">:<input type="text" size="4"
                    maxlength="10" name="p7e1txt10_2" id="p7e1txt20"><br><br>
                k)<math>
                    <mfrac>
                        <mn>16.4 </mn>
                        <mn>99.01 </mn>
                    </mfrac>
                </math>
                <input type="text" size="4" maxlength="10" name="p7e1txt11_1"  id="p7e1txt21">:<input type="text" size="4"
                    maxlength="10" name="p7e1txt11_2"  id="p7e1txt22"><br><br>
                l)<math>
                    <mfrac>
                        <mn>10.78 </mn>
                        <mn>u </mn>
                    </mfrac>
                </math>
                <input type="text" size="4" maxlength="10" name="p7e1txt12_1"  id="p7e1txt23">:<input type="text" size="4"
                    maxlength="10" name="p7e1txt12_2" id="p7e1txt24"><br><br>
                m)<math>
                    <mfrac>
                        <mn>4.5 </mn>
                        <mn>9</mn>
                    </mfrac>
                </math>
                <input type="text" size="4" maxlength="10" name="p7e1txt13_1" id="p7e1txt25">:<input type="text" size="4"
                    maxlength="10" name="p7e1txt13_2" id="p7e1txt26"><br><br>
                n)<math>
                    <mfrac>
                        <mn>1 </mn>
                        <mn>2</mn>
                    </mfrac>
                </math>
                <input type="text" size="4" maxlength="10" name="p7e1txt14_1" id="p7e1txt27">:<input type="text" size="4"
                    maxlength="10" name="p7e1txt14_2" id="p7e1txt28"><br><br>
                ñ)<math>
                    <mfrac>
                        <mn>0.5</mn>
                        <mn>100 </mn>
                    </mfrac>
                </math>
                <input type="text" size="4" maxlength="10" name="p7e1txt15_1" id="p7e1txt29">:<input type="text" size="4"
                    maxlength="10" name="p7e1txt15_2" id="p7e1txt30"><br><br>
                o)<math>
                    <mfrac>
                        <mn>12 </mn>
                        <mn>15 </mn>
                    </mfrac>
                </math>
                <input type="text" size="4" maxlength="10" name="p7e1txt16_1" id="p7e1txt31">:<input type="text" size="4"
                    maxlength="10" name="p7e1txt16_2" id="p7e1txt32"><br><br>
                p)<math>
                    <mfrac>
                        <mn>100.2 </mn>
                        <mn>34.5 </mn>
                    </mfrac>
                </math>
                <input type="text" size="4" maxlength="10" name="p7e1txt17_1" id="p7e1txt33">:<input type="text" size="4"
                    maxlength="10" name="p7e1txt17_2" id="p7e1txt34"><br><br>
                q)<math>
                    <mfrac>
                        <mn>n²³ </mn>
                        <mn>r </mn>
                    </mfrac>
                </math>
                <input type="text" size="4" maxlength="10" name="p7e1txt18_1" id="p7e1txt35">:<input type="text" size="4"
                    maxlength="10" name="p7e1txt18_2" id="p7e1txt36"><br><br>
                    <div class="pdcontainer">
                <button type="submit" value="" class="botonesrevisar" name="P7E1REV" id="P7E1REV" ></button>
                <input type="reset" value="" class="botonesreintentar">
                
            </form>
            </div>
            <script >
                    let respuestas = [9.5,
                    10,
                    90,
                    100,
                    0.547,
                    8.5,
                    'm',
                    '5n',
                    3,
                    '4b2',
                    67,
                    230,
                    0.16,
                    7.98,
                    7,
                    10,
                    'x3',
                    9,
                    'y',
                    'x',
                    16.4,
                    99.01,
                    10.78,
                    'u',
                    4.5,
                    9,
                    1,
                    2,
                    0.5,
                    100,
                    12,
                    15,
                    100.22,
                    34.5,
                    'n23',
                    'r'];
                    colores(respuestas, 7, 1);
                    camposvacios(1, 7, 34)
                </script>
            <?php
            if (isset($_POST['P7E1REV'])) {
                $respe1 = array(
                    9.5,
                    10,
                    90,
                    100,
                    0.547,
                    8.5,
                    'm',
                    '5n',
                    3,
                    '4b2',
                    67,
                    230,
                    0.16,
                    7.98,
                    7,
                    10,
                    'x3',
                    9,
                    'y',
                    'x',
                    16.4,
                    99.01,
                    10.78,
                    'u',
                    4.5,
                    9,
                    1,
                    2,
                    0.5,
                    100,
                    12,
                    15,
                    100.22,
                    34.5,
                    'n23',
                    'r'
                );
                require ('funcionrevtxt.php');
                Caso1txt($respe1, 1, 7);
            }
            ?>
        </div>
            <br><br>
        <Div class="columne2">
            <form method="post">
                a) 451:500
                <input type="text" size="4" maxlength="10" name="p7e2txt1_1" id="p7e2txt1">/<input type="text" size="4" maxlength="10" name="p7e2txt1_2" id="p7e2txt2"><br>
                b) 1.87:2
                <input type="text" size="4" maxlength="10" name="p7e2txt2_1" id="p7e2txt3">/<input type="text" size="4" maxlength="10" name="p7e2txt2_2" id="p7e2txt4"><br>
                c) 1.2:3.4
                <input type="text" size="4" maxlength="10" name="p7e2txt3_1" id="p7e2txt5">/<input type="text" size="4" maxlength="10" name="p7e2txt3_2" id="p7e2txt6"><br>
                d) x:y
                <input type="text" size="4" maxlength="10" name="p7e2txt4_1" id="p7e2txt7">/<input type="text" size="4" maxlength="10" name="p7e2txt4_2" id="p7e2txt8"><br>
                e) m<sup>2</sup>:56
                <input type="text" size="4" maxlength="10" name="p7e2txt5_1" id="p7e2txt9">/<input type="text" size="4" maxlength="10" name="p7e2txt5_2" id="p7e2txt10"><br>
                f) 2y<sup>4</sup>:10y
                <input type="text" size="4" maxlength="10" name="p7e2txt6_1" id="p7e2txt11">/<input type="text" size="4" maxlength="10" name="p7e2txt6_2" id="p7e2txt12"><br>
                g) 10:30
                <input type="text" size="4" maxlength="10" name="p7e2txt7_1" id="p7e2txt13">/<input type="text" size="4" maxlength="10" name="p7e2txt7_2" id="p7e2txt14"><br>
                h) 1.9:5
                <input type="text" size="4" maxlength="10" name="p7e2txt8_1" id="p7e2txt15">/<input type="text" size="4" maxlength="10" name="p7e2txt8_2" id="p7e2txt16"><br>
                i) 685.5:438.11
                <input type="text" size="4" maxlength="10" name="p7e2txt9_1" id="p7e2txt17">/<input type="text" size="4" maxlength="10" name="p7e2txt9_2" id="p7e2txt18"><br>
                j) 77:55
                <input type="text" size="4" maxlength="10" name="p7e2txt10_1" id="p7e2txt19">/<input type="text" size="4" maxlength="10" name="p7e2txt10_2" id="p7e2txt20"><br>
                k) 540:10
                <input type="text" size="4" maxlength="10" name="p7e2txt11_1" id="p7e2txt21">/<input type="text" size="4" maxlength="10" name="p7e2txt11_2" id="p7e2txt22"><br>
                l) y<sup>3</sup>:3m
                <input type="text" size="4" maxlength="10" name="p7e2txt12_1" id="p7e2txt23">/<input type="text" size="4" maxlength="10" name="p7e2txt12_2" id="p7e2txt24"><br>
                m) 78:14
                <input type="text" size="4" maxlength="10" name="p7e2txt13_1" id="p7e2txt25">/<input type="text" size="4" maxlength="10" name="p7e2txt13_2" id="p7e2txt26"><br>
                n) 99.2:100
                <input type="text" size="4" maxlength="10" name="p7e2txt14_1" id="p7e2txt27">/<input type="text" size="4" maxlength="10" name="p7e2txt14_2" id="p7e2txt28"><br>
                ñ) 8.4:17.1
                <input type="text" size="4" maxlength="10" name="p7e2txt15_1" id="p7e2txt29">/<input type="text" size="4" maxlength="10" name="p7e2txt15_2" id="p7e2txt30"><br>
                <div class="pdcontainer">
                <button type="submit" value="" class="botonesrevisar" name="P7E2REV"  id="P7E2REV"></button>
                <input type="reset" value="" class="botonesreintentar">
                </div>
            </form>
            <script>
            let respe2 = [451,
                500,
                1.87,
                2,
                1.2,
                3.4,
                'x',
                'y',
                'm2',
                56,
                '2y4',
                '10y',
                10,
                30,
                1.9,
                5,
                685.5,
                438.11,
                77,
                55,
                540,
                10,
                'y3',
                '3m',
                78,
                14,
                99.2,
                100,
                8.4,
                17.1];
                colores(respe2, 7, 2);
            </script>
            <?php
            if (isset($_POST['P7E2REV'])) {
                $respe2 = array(451,
                500,
                1.87,
                2,
                1.2,
                3.4,
                'x',
                'y',
                'm2',
                56,
                '2y4',
                '10y',
                10,
                30,
                1.9,
                5,
                685.5,
                438.11,
                77,
                55,
                540,
                10,
                'y3',
                '3m',
                78,
                14,
                99.2,
                100,
                8.4,
                17.1);
                require ('funcionrevtxt.php');
                 Caso1txt($respe2, 2, 7);
            }
            ?>

        </div>
            <br><br>
        <p>Calcula la constante de proporcionalidad para saber si son proporcionales o no. </p><br>
        <div class="columne2">
            <form method="post">
            <math>
                <mfrac>
                    <mn>8</mn>
                    <mn>16</mn>
                </mfrac>
                <mn>=</mn>
                <mfrac>
                    <mn>150</mn>
                    <mn>300</mn>
                </mfrac>
                <mn>k=</mn>
            </math>
            <input type="text" size="4" maxlength="10" name="p7e3txt1" id="p7e3txt1"><br><br>

            <math>
                <mfrac>
                    <mn>12.5</mn>
                    <mn>13</mn>
                </mfrac>
                <mn>=</mn>
                <mfrac>
                    <mn>50</mn>
                    <mn>52</mn>
                </mfrac>
                <mn>k=</mn>
            </math>
            <input type="text" size="4" maxlength="10" name="p7e3txt2" id="p7e3txt2"><br><br>

            <math>
                <mfrac>
                    <mn>16.9</mn>
                    <mn>84.5</mn>
                </mfrac>
                <mn>=</mn>
                <mfrac>
                    <mn>33.8</mn>
                    <mn>169</mn>
                </mfrac>
                <mn>=</mn>
                <mfrac>
                    <mn>50.7</mn>
                    <mn>253.5</mn>
                </mfrac>
                <mn>=</mn>
                <mfrac>
                    <mn>67.6</mn>
                    <mn>338</mn>
                </mfrac>
                <mn>k=</mn>
            </math>
            <input type="text" size="4" maxlength="10" name="p7e3txt3" id="p7e3txt3"><br><br>

            <math>
                <mfrac>
                    <mn>25</mn>
                    <mn>100</mn>
                </mfrac>
                <mn>=</mn>
                <mfrac>
                    <mn>50</mn>
                    <mn>200</mn>
                </mfrac>
                <mn>=</mn>
                <mfrac>
                    <mn>75</mn>
                    <mn>300</mn>
                </mfrac>
                <mn>=</mn>
                <mfrac>
                    <mn>100</mn>
                    <mn>400</mn>
                </mfrac>
                <mn>k=</mn>
            </math>
            <input type="text" size="4" maxlength="10" name="p7e3txt4" id="p7e3txt4"><br><br>

            <math>
                <mfrac>
                    <mn>24</mn>
                    <mn>18</mn>
                </mfrac>
                <mn>=</mn>
                <mfrac>
                    <mn>8</mn>
                    <mn>6</mn>
                </mfrac>
                <mn>k=</mn>
            </math>
            <input type="text" size="4" maxlength="10" name="p7e3txt5" id="p7e3txt5"><br><br>

            <math>
                <mfrac>
                    <mn>153</mn>
                    <mn>17</mn>
                </mfrac>
                <mn>=</mn>
                <mfrac>
                    <mn>19.125</mn>
                    <mn>2.125</mn>
                </mfrac>
                <mn>=</mn>
                <mfrac>
                    <mn>2.3906</mn>
                    <mn>0.2656</mn>
                </mfrac>
                <mn>k=</mn>
            </math>
            <input type="text" size="4" maxlength="10" name="p7e3txt6" id="p7e3txt6"><br><br>

            <math>
                <mfrac>
                    <mn>0.68</mn>
                    <mn>6.12</mn>
                </mfrac>
                <mn>=</mn>
                <mfrac>
                    <mn>0.018</mn>
                    <mn>0.1633</mn>
                </mfrac>
                <mn>k=</mn>
            </math>
            <input type="text" size="4" maxlength="10"  name="p7e3txt7" id="p7e3txt7"><br><br>

            <math>
                <mfrac>
                    <mn>0.6</mn>
                    <mn>0.31</mn>
                </mfrac>
                <mn>=</mn>
                <mfrac>
                    <mn>0.3</mn>
                    <mn>0.155</mn>
                </mfrac>
                <mn>k=</mn>
            </math>
            <input type="text" size="4" maxlength="10" name="p7e3txt8" id="p7e3txt8"><br><br>

            <math>
                <mfrac>
                    <mn>2.3</mn>
                    <mn>6</mn>
                </mfrac>
                <mn>=</mn>
                <mfrac>
                    <mn>4.6</mn>
                    <mn>12</mn>
                </mfrac>
                <mn>=</mn>
                <mfrac>
                    <mn>6.9</mn>
                    <mn>18</mn>
                </mfrac>
                <mn>k=</mn>
            </math>
            <input type="text" size="4" maxlength="10" name="p7e3txt9" id="p7e3txt9"><br><br>
            <div class="pdcontainer">
            <button type="submit" value="" class="botonesrevisar" name="P7E3REV" id="P7E3REV"></button>
            <input type="reset" value="" class="botonesreintentar">
            </div>
            </form>
            <script>
                let respuestasE3 = [2400,
                650,
                2856.1,
                5000,
                144,
                325.125,
                0.11,
                0.093,
                27.6
        ];
            colores(respuestasE3, 7, 3);
                </script>
            <?php 
            if(isset($_POST['P7E3REV'])){
                $respuestasE3 = array(2400,
                650,
                2856.1,
                5000,
                144,
                325.125,
                0.11,
                0.093,
                27.6
            );
                require('funcionrevtxt.php');
                Caso2txt($respuestasE3, 3, 7, 'varchar');
            }
            ?>
        </div><br><br><br><br>

        <h1 id="4p">Cuarta proporcionalidad</h1>
        <P>Este concepto se refiere a la relación entre cuatro términos, donde el cuarto tiene la misma
            relación con los tres anteriores. Para conocer su valor se emplea una fórmula en específico, la
            cual veremos más adelante.</p>

        <p>Si se tienen 3 números que guardan la misma proporción, entonces es posible encontrar un cuarto término con
            dicha
            proporción.</p>

        <p>Vease la siguiente imagen:</p>
        <div>
            <div>
            </div>
            <div>
                Donde "a" es el primer término,
                "b" el segundo término,
                "c" el tercer término, y
                "d" el cuarto término.
            </div>
        </div>


        <p>
        <ul>La cuarta proporcional es establecida de la siguiente manera:
            <li>La proporción es a / b = c / b.</li>
            <li>La igualdad de productos es a(d) = b(c).</li>
            <li>Nota: Recuérdese que la igualdad de productos se determina al multiplicar extremos con extremos y medios
                con medios.</li>
        </ul>
        </p>

        En la cuarta proporción se tienen dos casos:
        <div>
            <div></div>
            <div>1. Donde el cuarto término se encuentra en el numerado.</div>
            <div></div>
            <div>2. Donde el cuarto término se encuentra en el denominador.</div>
        </div>

        <p>El ejemplo que sirvió para explicar lo anterior corresponde al caso 2, puesto que la literal "d" era el
            cuarto término. </p>
        <br>
        <p>Es importante visualizar que el cuarto término puede ser cualquiera de las 4 literales de la proporción, la
            manera de
            conocer el valor del cuarto es la misma; a continuación esto se explica con detalle.</p>
        <br>

        <h2>¿Cómo despejo la incógnita?</h2>
        <p>Para obtener el valor de la incógnita, se utiliza una de las propiedades de las razones, la cual dice que los
            productos de
            los medios por los medios y los extremos por los extremos, en caso de ser proporcionales, dará lo mismo;
            posteriormente
            se realiza un sencillo despeje algebraico, o si se quiere ver de una manera más simple, se trata de una
            "regla de tres" o
            multiplicación cruzada donde posteriormente se divide por el término restante.
        <p>
        <div>
            <div></div>
            <div>
                <p>Se puede decir que 32(3) = 12x. Para despejar x tenemos que quitar el número 12,
                    este pasa a su inversa, es decir, si está multiplicando pasa a dividir, por lo que
                    en el segundo paso de la imagen tenemos tal igualdad. <br>
                    Tras realizar el despeje de la incógnita se realizan las operaciones correspondientes
                    hasta tener el resultado final.</p>
            </div>
            <div></div>
            <div>
                <p>Obsérvese que cuando la incógnita está en el numerador el proceso es muy similar.</p>
            </div>
        </div>
            <br>
        <h2 id="4pejem">Ejemplos</h2>
        <p>1. Se tiene que 4/12 es igual a x/45. <br>
            Por lo tanto, x = 15.<br>
            Porque (4(45))/12 da como resultado 15<br>
            <br>
            2. En una proporción tenemos que: 3/x = 0.8/0.4<br>
            Si se despeje x se tiene que x = (3(0.4))/0.8<br>
            <br>
            3. Los criterios de evaluación para la materia de matemáticas son los siguientes: 30% los trabajos en clase,
            40% examen y 30%
            las participaciones. Si Yaneth sacó 7.9 en su examen ¿Qué porcentaje obtendrá de ello? <br>
            La proporcionalidad es: 10/30 = 7.9/x.<br>
            Se realiza el despeje siguiente x = (30(7.9))/10 <br>
            x = 23.7%<br>
            <br>
            4. Si por cada 4 chocolates se gastan $30 pesos, ¿Cuánto se gastarán por 130 chocolates? <br>
            La proporción existente es: 4/30 = 130/x<br>
            Se hace un despeje donde: x = (130(30))/4; así: <br>
            x = $975.
        </p>
        <br>
        <div class="imgejercicios">
            <div>
                <img id="4pejer" src="images/Ejercicios.png" width=180px height=auto style="margin-right: 20px;">
            </div>
            <div id="ejercicios">
                <h2>Ejercicios</h2><br><br>
            </div>
        </div>
        <span>Calcula la cuarta proporcional de las siguientes proporciones.<br></span>
            <span style="color:red;">NOTA: Sólo toma en cuenta 1 número después del punto decimal.</span><br><br><br>
        <div class="columne5">
            
            <form method="post">

            <math>
                <mfrac>
                    <mn>3</mn>
                    <mn>4</mn>
                </mfrac>
                <mn>=</mn>
                <mfrac>
                    <mn>7</mn>
                    <mn></mn>
                </mfrac>
            </math>
            <input type="text" size="4" maxlength="10" style="margin-left: -33px;" name="p7e4txt1" id="p7e4txt1"><br><br>

            <math>
                <mfrac>
                    <mn>18</mn>
                    <mn>3.5</mn>
                </mfrac>
                <mn>=</mn>
                <mfrac>
                    <mn>13.9</mn>
                    <mn></mn>
                </mfrac>
            </math>
            <input type="text" size="4" maxlength="10" style="margin-left: -58px;" name="p7e4txt2" id="p7e4txt2"><br><br>

            <math>
                <mfrac>
                    <mn>101</mn>
                    <mn>203</mn>
                </mfrac>
                <mn>=</mn>
                <mfrac>
                    <mn>997</mn>
                    <mn></mn>
                </mfrac>
            </math>
            <input type="text" size="4" maxlength="10" style="margin-left: -58px;" name="p7e4txt3" id="p7e4txt3"><br><br>

            <math>
                <mfrac>
                    <mn>47.8</mn>
                    <mn>27.7</mn>
                </mfrac>
                <mn>=</mn>
                <mfrac>
                    <mn>69.3</mn>
                    <mn></mn>
                </mfrac>
            </math>
            <input type="text" size="4" maxlength="10" style="margin-left: -58px;" name="p7e4txt4" id="p7e4txt4"><br><br>

            <math>
                <mfrac>
                    <mn>129</mn>
                    <mn>324</mn>
                </mfrac>
                <mn>=</mn>
                <mfrac><!--arriba-->
                    <mn></mn>
                    <mn>637</mn>
                </mfrac>
            </math>
            <input type="text" size="4" maxlength="10" name="p7e4txt5" id="p7e4txt5"><br><br>

            <math>
                <mfrac>
                    <mn>0.68</mn>
                    <mn>3</mn>
                </mfrac>
                <mn>=</mn>
                <mfrac><!--arriba-->
                    <mn></mn>
                    <mn>6</mn>
                </mfrac>
            </math>
            <input type="text" size="4" maxlength="10" name="p7e4txt6" id="p7e4txt6"><br><br>

            <math>
                <mfrac>
                    <mn>7.29</mn>
                    <mn>51</mn>
                </mfrac><!--arriba-->
                <mn>=</mn>
                <mfrac>
                    <mn></mn>
                    <mn>67.7</mn>
                </mfrac>
            </math>
            <input type="text" size="4" maxlength="10" name="p7e4txt7" id="p7e4txt7"><br><br>

            <math>
                <mfrac>
                    <mn>199</mn>
                    <mn>400</mn>
                </mfrac>
                <mn>=</mn>
                <mfrac><!--arriba-->
                    <mn></mn>
                    <mn>721</mn>
                </mfrac>
            </math>
            <input type="text" size="4" maxlength="10" name="p7e4txt8" id="p7e4txt8"><br><br>

            <math>
                <mfrac>
                    <mn></mn><!--arriba derecha-->
                    <mn>10</mn>
                </mfrac>
                <mn>=</mn>
                <mfrac>
                    <mn>10</mn>
                    <mn>15</mn>
                </mfrac>
            </math>
            <input type="text" size="4" maxlength="10" name="p7e4txt9" id="p7e4txt9"><br><br>

            <math>
                <mfrac>
                    <mn></mn><!--arriba derecha-->
                    <mn>6.5</mn>
                </mfrac>
                <mn>=</mn>
                <mfrac>
                    <mn>7</mn>
                    <mn>9</mn>
                </mfrac>
            </math>
            <input type="text" size="4" maxlength="10"  name="p7e4txt10" id="p7e4txt10"><br><br>

            <math>
                <mfrac>
                    <mn></mn><!--arriba derecha-->
                    <mn>395.6</mn>
                </mfrac>
                <mn>=</mn>
                <mfrac>
                    <mn>500.3</mn>
                    <mn>872.35</mn>
                </mfrac>
            </math>
            <input type="text" size="4" maxlength="10" name="p7e4txt11" id="p7e4txt11"><br><br>

            <math>
                <mfrac>
                    <mn></mn><!--arriba derecha-->
                    <mn>130</mn>
                </mfrac>
                <mn>=</mn>
                <mfrac>
                    <mn>75</mn>
                    <mn>1000</mn>
                </mfrac>
            </math>
            <input type="text" size="4" maxlength="10" style="margin-left:-165px;" name="p7e4txt12" id="p7e4txt12"><br><br>

            <math>
                <mfrac>
                    <mn>150</mn>
                    <mn></mn><!--abajo izquierda-->
                </mfrac>
                <mn>=</mn>
                <mfrac>
                    <mn>700</mn>
                    <mn>999</mn>
                </mfrac>
            </math>
            <input type="text" size="4" maxlength="10" style="margin-left: -150px;" name="p7e4txt13" id="p7e4txt13"><br><br>

            <math>
                <mfrac>
                    <mn>0.78</mn>
                    <mn></mn><!--abajo izquierda-->
                </mfrac>
                <mn>=</mn>
                <mfrac>
                    <mn>0.97</mn>
                    <mn>0.33</mn>
                </mfrac>
            </math>
            <input type="text" size="4" maxlength="10" style="margin-left: -160px;" name="p7e4txt14" id="p7e4txt14"><br><br>

            <math>
                <mfrac>
                    <mn>3</mn>
                    <mn></mn><!--abajo izquierda-->
                </mfrac>
                <mn>=</mn>
                <mfrac>
                    <mn>70</mn>
                    <mn>90</mn>
                </mfrac>
            </math>
            <input type="text" size="4" maxlength="10" style="margin-left: -110px;" name="p7e4txt15" id="p7e4txt15"><br><br>
        </div>
        <div class="pdcontainer">
        <button type="submit" value="" class="botonesrevisar" name="P7E4REV" id="P7E4REV"></button>
        <input type="reset" value="" class="botonesreintentar">
        </div>
        </form>
        <script>
            let respuestasE4 = [9.3,
                2.7,
                2003.8,
                40.1,
                253.6,
                1.3,
                9.6,
                358.6,
                6.6,
                5,
                226.8,
                9.7,
                244,
                0.2,
                3.8
        ];
        colores(respuestasE4, 7, 4);
        </script>

        <?php 
            if(isset($_POST['P7E4REV'])){
                $respuestasE4 = array(9.3,
                2.7,
                2003.8,
                40.1,
                253.6,
                1.3,
                9.6,
                358.6,
                6.6,
                5,
                226.8,
                9.7,
                244,
                0.2,
                3.8
            );
                require('funcionrevtxt.php');
                Caso2txt($respuestasE4, 4, 7,'decimal');
            }
            ?>

        <br>
        <P>Resuelve los siguientes problemas</P>
        <form method="post">

        <p>1. El sueldo de un vendedor se compone de la siguiente manera: por caada $1500 en venta, obtiene una ganancia
            de $800 y por
            cada hora que labore le dan otros $200. Bryan en la semana logró vender un total de $6350 y trabajó 35 horas
            ¿Cuánto ganó
            esta semana?</p>
        R=<input type="text" size="8" maxlength="10" name="p7e5txt1" id="p7e5txt1"><br>
        <br>
        <p>2. Alicia desea pintar su casa de color lila. En la tienda de pintura le dijeron que por cada bote de 15
            litros podía cubrir 135 m^2
            aproximadamente. Si en total su casa tiene 978 m^2 ¿Cuántos botes necesita para poder pintar su casa?</p>
        R=<input type="text" size="8" maxlength="10" name="p7e5txt2" id="p7e5txt2"><br>
        <br>
        <p>3. En una tienda de mayoreo por la compra de 7 bolsas de palomitas se regala 2 botellas de salsa de 250 ml.
            Maria se dedica a
            vender dulces en la coperativa de la escuela,si ha comprado 31 bolsas entonces ¿Cuántas bolsas de salsa le
            han regalado por la
            compra de hoy?</p>
        R=<input type="text" size="8" maxlength="10" name="p7e5txt3" id="p7e5txt3"><br>
        <br>
        <p>4. Kenia compró 7 paquetes de hojas blancas por las cuales ha pagado $980. Su hermana adquirió 12 paquetes
            ¿Cuánto pagó en
            total la hermana de Kenia?</p>
        R=<input type="text" size="8" maxlength="10" name="p7e5txt4" id="p7e5txt4"><br>
        <br>
        <p>5. Para poder pasar la materia de biología se han dado los siguientes criterios: 1 punto por 40 asistencias,
            3 puntos por las 8 tareas
            calificadas del 1 al 10 cada una, 5 puntos por el examen calificado del 1 al 10 y 1 punto por 5
            participaciones. Alan tuvo 30 asistencias,
            sólo hizo 5 tareas con las siguientes calificaciones: 7.8, 9, 10, 8 y 9.5; en el examen obtuvo un 8.3 y sólo
            tuvo 2 participaciones
            ¿Cuál fue la calificación de Alan?</p>
        R=<input type="text" size="8" maxlength="10" name="p7e5txt5" id="p7e5txt5"><br>
        <br>
        <p>6. Elena decidió realizar algunas lavandas de papel para decorar su habitación. Por cada 3 hojas obtiene 7
            lavandas. Si desea
            hacer 30 lavandas ¿Cuántas hojas necesita para obtener las lavandas que quiere?</p>
        R=<input type="text" size="8" maxlength="10" name="p7e5txt6" id="p7e5txt6"><br>
        <br>
        <p>7. En la tienda de autoservicio por cada $120 en compras de productos se van acumulando 15 puntos en la
            tarjeta de cliente
            frecuente. Tomás ha acumulado $2040 en compras a lo largo de los meses ¿Cuántos puntos hay su tarjeta
            actualmente?</p>
        R=<input type="text" size="8" maxlength="10" name="p7e5txt7" id="p7e5txt7"><br>
        <div class="pdcontainer">
        <button type="submit" value="" class="botonesrevisar" name="P7E5REV" id="P7E5REV"></button>
        <input type="reset" value="" class="botonesreintentar">
        </div>
        </form>
        <script>
            let respuestasE5 = [10386,
                108.6,
                8,
                1680,
                6.9,
                13,
                255
        ];
        colores(respuestasE5, 7, 5);
        </script>
        <?php 
            if(isset($_POST['P7E5REV'])){
                $respuestasE5 = array(10386,
                108.6,
                8,
                1680,
                6.9,
                13,
                255
            );
                require('funcionrevtxt.php');
                Caso2txt($respuestasE5, 5, 7,'varchar');
            }
            ?>
        <br><br>
        <h1 id="2p">Media proporcional</h1>
        <P>Una proporción es continua si los medios son iguales. Véase la siguiente imagen:</p>
        <math class="mate">
                    <mfrac>
                        <mn>a</mn>
                        <mn>x</mn>
                    </mfrac>
                    <mn> = </mn>
                    <mfrac>
                        <mn>x</mn>
                        <mn>d</mn>
                    </mfrac>
                </math>
        <p>Para resolver el medio proporcional nos basamos en el principio de la multiplicación de los extremos y medios
            o cruzada,
            teniendo que:</p><br>
            <div style="font-size: 27px;">
            <math xmlns:mml="http://www.w3.org/1998/Math/MathML" xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math"><mi>a</mi><mfenced separators="|"><mrow><mi>d</mi></mrow></mfenced><mo>=</mo><mi>x</mi><mo>(</mo><mi>x</mi><mo>)</mo></math><br>
<math xmlns:mml="http://www.w3.org/1998/Math/MathML" xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math"><mi>a</mi><mfenced separators="|"><mrow><mi>d</mi></mrow></mfenced><mo>=</mo><msup><mrow><mi>x</mi></mrow><mrow><mn>2</mn></mrow></msup></math><br>
<math xmlns:mml="http://www.w3.org/1998/Math/MathML" xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math"><mroot><mrow><mi>a</mi><mfenced separators="|"><mrow><mi>d</mi></mrow></mfenced></mrow><mrow><mn>2</mn></mrow></mroot><mo>=</mo><mi>x</mi></math>
        </div><br>

        <p>Tras tener "x<sup>2</sup>" se pasa la potencia a la inversa, es decir, pasa a raíz cuadrada de la multiplicación que se
            tiene en
            el primer miembro de la igualdad.</p>


            <br>
        <h2 id="2pejem">Ejemplos</h2>
        <p>Ahora se verán algunos ejemplos sobre el medio proporcional antes de resolver algunos ejercicios.</p>
<div class="pdcontainer">
    <div>
        a) Se tiene que 
        <span style="font-size: 23.5px;">
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML" xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math"><mfrac><mrow><mn>3</mn></mrow><mrow><mi>x</mi></mrow></mfrac><mo>=</mo><mfrac><mrow><mi>x</mi></mrow><mrow><mn>12</mn></mrow></mfrac></math>
<br>
<math xmlns:mml="http://www.w3.org/1998/Math/MathML" xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math"><mn>3</mn><mfenced separators="|"><mrow><mn>(12)</mn></mrow></mfenced><mo>=</mo><msup><mrow><mi>x</mi></mrow><mrow><mn>2</mn></mrow></msup></math>
<br>
<math xmlns="http://www.w3.org/1998/Math/MathML" xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math"><mn>36</mn><mo>=</mo><msup><mrow><mi>x</mi></mrow><mrow><mn>2</mn></mrow></msup></math>
<br>
<math xmlns:mml="http://www.w3.org/1998/Math/MathML" xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math"><mroot><mrow><mn>36</mn></mrow><mrow><mn>2</mn></mrow></mroot><mo>=</mo><mi> </mi><mi>x</mi></math>
<br>
<math xmlns:mml="http://www.w3.org/1998/Math/MathML" xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math"><mn>6</mn><mo>=</mo><mi> </mi><mi>x</mi></math>
<br></span>
</div>
<div>
        b) Se tiene que 
        <span style="font-size: 23.5px;">
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML" xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math"><mfrac><mrow><mn>57</mn></mrow><mrow><mi>x</mi></mrow></mfrac><mo>=</mo><mfrac><mrow><mi>x</mi></mrow><mrow><mn>100</mn></mrow></mfrac></math>
        <br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML" xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math"><mn>57</mn><mfenced separators="|"><mrow><mn>(100)</mn></mrow></mfenced><mo>=</mo><msup><mrow><mi>x</mi></mrow><mrow><mn>2</mn></mrow></msup></math>
        <br>
        <math xmlns="http://www.w3.org/1998/Math/MathML" xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math"><mn>5700</mn><mo>=</mo><msup><mrow><mi>x</mi></mrow><mrow><mn>2</mn></mrow></msup></math>
<br>
<math xmlns:mml="http://www.w3.org/1998/Math/MathML" xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math"><mroot><mrow><mn>5700</mn></mrow><mrow><mn>2</mn></mrow></mroot><mo>=</mo><mi> </mi><mi>x</mi></math>
<br>
<math xmlns:mml="http://www.w3.org/1998/Math/MathML" xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math"><mn>75.49</mn><mo>=</mo><mi> </mi><mi>x</mi></math>
<br>    </span>
</div>

        <div>
        c) Se tiene que 
        <span style="font-size: 23.5px;">
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML" xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math"><mfrac><mrow><mn>100</mn></mrow><mrow><mi>x</mi></mrow></mfrac><mo>=</mo><mfrac><mrow><mi>x</mi></mrow><mrow><mn>400</mn></mrow></mfrac></math>
<br>
<math xmlns:mml="http://www.w3.org/1998/Math/MathML" xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math"><mn>100</mn><mfenced separators="|"><mrow><mn>(400)</mn></mrow></mfenced><mo>=</mo><msup><mrow><mi>x</mi></mrow><mrow><mn>2</mn></mrow></msup></math>
<br>
<math xmlns="http://www.w3.org/1998/Math/MathML" xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math"><mn>40000</mn><mo>=</mo><msup><mrow><mi>x</mi></mrow><mrow><mn>2</mn></mrow></msup></math>
<br>
<math xmlns:mml="http://www.w3.org/1998/Math/MathML" xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math"><mroot><mrow><mn>40000</mn></mrow><mrow><mn>2</mn></mrow></mroot><mo>=</mo><mi> </mi><mi>x</mi></math>
<br>
<math xmlns:mml="http://www.w3.org/1998/Math/MathML" xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math"><mn>200</mn><mo>=</mo><mi> </mi><mi>x</mi></math>
<br></span>
</div>

<div>
        d) Se tiene que 
        <span style="font-size: 23.5px;">
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML" xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math"><mfrac><mrow><mn>48.5</mn></mrow><mrow><mi>x</mi></mrow></mfrac><mo>=</mo><mfrac><mrow><mi>x</mi></mrow><mrow><mn>90.7</mn></mrow></mfrac></math>
<br>
<math ><mn>48.5</mn><mfenced separators="("><mrow><mn>(90.7)</mn></mrow></mfenced><mo>=</mo><msup><mrow><mi>x</mi></mrow><mrow><mn>2</mn></mrow></msup></math>
<br>
<math xmlns="http://www.w3.org/1998/Math/MathML" xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math"><mn>4398.95</mn><mo>=</mo><msup><mrow><mi>x</mi></mrow><mrow><mn>2</mn></mrow></msup></math>
<br>
<math xmlns:mml="http://www.w3.org/1998/Math/MathML" xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math"><mroot><mrow><mn>4398.95</mn></mrow><mrow><mn>2</mn></mrow></mroot><mo>=</mo><mi> </mi><mi>x</mi></math>
<br>  
<math xmlns:mml="http://www.w3.org/1998/Math/MathML" xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math"><mn>66.32</mn><mo>=</mo><mi> </mi><mi>x</mi></math>
<br>
</span>
</div>

    </div>
        <br><br>
        <div class="imgejercicios">
            <div>
                <img id="2pejer" src="images/Ejercicios.png" width=180px height=auto style="margin-right: 20px;">
            </div>
            <div id="ejercicios">
                <h2>Ejercicios</h2><br><br>
            </div>
        </div>
        <p>Para cerrar el medio proporcional, resuélvanse los siguientes ejercicios:</p>

        <div class="columne4">
            <form method="post">
            <math>
                <mfrac>
                    <mn>85</mn>
                    <mn style="color:red;">x</mn>
                </mfrac>
                <mn>=</mn>
                <mfrac>
                    <mn style="color:red;">x</mn>
                    <mn>420</mn>
                </mfrac>
            </math><br>x=<input type="text" size="8" maxlength="10" name="p7e6txt1" id="p7e6txt1"><br>
            <br>
            <math>
                <mfrac>
                    <mn>10</mn>
                    <mn style="color:red;">x</mn>
                </mfrac>
                <mn>=</mn>
                <mfrac>
                    <mn style="color:red;">x</mn>
                    <mn>30</mn>
                </mfrac>
            </math><br>x=<input type="text" size="8" maxlength="10" name="p7e6txt2" id="p7e6txt2"><br>
            <br>
            <math>
                <mfrac>
                    <mn>1.3</mn>
                    <mn style="color:red;">x</mn>
                </mfrac>
                <mn>=</mn>
                <mfrac>
                    <mn style="color:red;">x</mn>
                    <mn>9.7</mn>
                </mfrac>
            </math><br>x=<input type="text" size="8" maxlength="10" name="p7e6txt3" id="p7e6txt3"><br>
            <br>
            <math>
                <mfrac>
                    <mn>75.4</mn>
                    <mn style="color:red;">x</mn>
                </mfrac>
                <mn>=</mn>
                <mfrac>
                    <mn style="color:red;">x</mn>
                    <mn>12.27</mn>
                </mfrac>
            </math><br>x=<input type="text" size="8" maxlength="10" name="p7e6txt4" id="p7e6txt4"><br>
            <br>
            <math>
                <mfrac>
                    <mn>0.5</mn>
                    <mn style="color:red;">x</mn>
                </mfrac>
                <mn>=</mn>
                <mfrac>
                    <mn style="color:red;">x</mn>
                    <mn>50</mn>
                </mfrac>
            </math><br>x=<input type="text" size="8" maxlength="10" name="p7e6txt5" id="p7e6txt5"><br>
            <br>
            <math>
                <mfrac>
                    <mn>587</mn>
                    <mn style="color:red;">x</mn>
                </mfrac>
                <mn>=</mn>
                <mfrac>
                    <mn style="color:red;">x</mn>
                    <mn>987</mn>
                </mfrac>
            </math><br>x=<input type="text" size="8" maxlength="10" name="p7e6txt6" id="p7e6txt6"><br>
            <br>
            <math>
                <mfrac>
                    <mn>15.6</mn>
                    <mn style="color:red;">x</mn>
                </mfrac>
                <mn>=</mn>
                <mfrac>
                    <mn style="color:red;">x</mn>
                    <mn>78.2</mn>
                </mfrac>
            </math><br>x=<input type="text" size="8" maxlength="10" name="p7e6txt7" id="p7e6txt7"><br>
            <br>
            <math>
                <mfrac>
                    <mn>12</mn>
                    <mn style="color:red;">x</mn>
                </mfrac>
                <mn>=</mn>
                <mfrac>
                    <mn style="color:red;">x</mn>
                    <mn>7.5</mn>
                </mfrac>
            </math><br>x=<input type="text" size="8" maxlength="10" name="p7e6txt8" id="p7e6txt8"><br>
            <br>
            <math>
                <mfrac>
                    <mn>4</mn>
                    <mn style="color:red;">x</mn>
                </mfrac>
                <mn>=</mn>
                <mfrac>
                    <mn style="color:red;">x</mn>
                    <mn>10</mn>
                </mfrac>
            </math><br>x=<input type="text" size="8" maxlength="10" name="p7e6txt9" id="p7e6txt9"><br>
            <br>
            <math>
                <mfrac>
                    <mn>785</mn>
                    <mn style="color:red;">x</mn>
                </mfrac>
                <mn>=</mn>
                <mfrac>
                    <mn style="color:red;">x</mn>
                    <mn>1004</mn>
                </mfrac>
            </math><br>x=<input type="text" size="8" maxlength="10" name="p7e6txt10" id="p7e6txt10"><br>
            <br>
            <math>
                <mfrac>
                    <mn>5</mn>
                    <mn style="color:red;">x</mn>
                </mfrac>
                <mn>=</mn>
                <mfrac>
                    <mn style="color:red;">x</mn>
                    <mn>20</mn>
                </mfrac>
            </math><br>x=<input type="text" size="8" maxlength="10" name="p7e6txt11" id="p7e6txt11"><br>
            <br>
            <math>
                <mfrac>
                    <mn>17</mn>
                    <mn style="color:red;">x</mn>
                </mfrac>
                <mn>=</mn>
                <mfrac>
                    <mn style="color:red;">x</mn>
                    <mn>68</mn>
                </mfrac>
            </math><br>x=<input type="text" size="8" maxlength="10" name="p7e6txt12" id="p7e6txt12"><br>
            <br>
            
            <br>
            <math>
                <mfrac>
                    <mn>91</mn>
                    <mn style="color:red;">x</mn>
                </mfrac>
                <mn>=</mn>
                <mfrac>
                    <mn style="color:red;">x</mn>
                    <mn>34.1</mn>
                </mfrac>
            </math><br>x=<input type="text" size="8" maxlength="10" name="p7e6txt13" id="p7e6txt13"><br>
            <br>
            <math>
                <mfrac>
                    <mn>1.3</mn>
                    <mn style="color:red;">x</mn>
                </mfrac>
                <mn>=</mn>
                <mfrac>
                    <mn style="color:red;">x</mn>
                    <mn>9.7</mn>
                </mfrac>
            </math><br>x=<input type="text" size="8" maxlength="10" name="p7e6txt14" id="p7e6txt14"><br>
            <br>
            <math>
                <mfrac>
                    <mn>202</mn>
                    <mn style="color:red;">x</mn>
                </mfrac>
                <mn>=</mn>
                <mfrac>
                    <mn style="color:red;">x</mn>
                    <mn>510</mn>
                </mfrac>
            </math><br>x=<input type="text" size="8" maxlength="10" name="p7e6txt15" id="p7e6txt15"><br>
            <br>
            <div class="pdcontainer">
            <button type="submit" value="" class="botonesrevisar" name="P7E6REV" id="P7E6REV"></button>
            <input type="reset" value="" class="botonesreintentar">
            </div>
            <script>
                let respuestasE6 = [188.9,
                17.3,
                3.5,
                30.4,
                5,
                761.1,
                34.9,
                9.4,
                6.3,
                887.7,
                10,
                34,
                55.7,
                3.5,
                320.9
        ];
        colores(respuestasE6, 7, 6);
            </script>

            </form>
            <?php 
            if(isset($_POST['P7E6REV'])){
                $respuestasE6 = array(188.9,
                17.3,
                3.5,
                30.4,
                5,
                761.1,
                34.9,
                9.4,
                6.3,
                887.7,
                10,
                34,
                55.7,
                3.5,
                320.9
            );
                require('funcionrevtxt.php');
                Caso2txt($respuestasE6, 6, 7,'varchar');
            }
            ?>

        </div>
        <h1 id="pd">Proporción directa</h1>
        <P>Dos magnitudes son proporcionalmente directas si al duplicar una la otra también se dulplica, si al triplicar
            una la segunda
            también se triplica. Es decir, si aumentamos la cantidad de una, la otra también tiene que aumentar en
            proporción.
            <br>
            Veamos un ejemplo con la siguiente figura:
        </p>
        <img src="./images/Progresion7img/img2.png" width="100%">

        <br>
        <p>Nótese que por cada perro se necesitan de dos huesos para alimentar al mismo, entonces, si se tuvieran dos
            perros, en total
            se necesitarían 4 huesos y así sucesivamente. Mientras la cantidad de perros aumente, tambíen lo harán los
            huesos.</p>
        <br>
        <p>Para resolver problemas donde se aplique la proporción directa hay que tener presente la regla de tres, la
            cual ya fue analizada
            anterioridad como parte de la proporción. Asimismo, nos servimos de las tablas de variación, las cuales
            hacen más visuales
            los cálculos que se realizan en este tipo de problemas. <br>
            <h2 id="pdejem">Ejemplos</h2><br>
            Veamos unos ejemplos antes de comenzar con los
            problemas que tú
            resolverás.</p>
        <br>
        <div class="pdcontainer">
            <div style="margin-right: 5%;">
                <p>a) Por cada minuto hay 60 segundos, la siguiente tabla muestra los segundos que habrá en determinadas
                    cantidades
                    de minutos. Hay que observar que para resolver problema de proporción directa basta con efectuar una
                    multiplicación
                    cruzada y esto dividirlo entre el cuarto término. En la imagen se muestran dos ejemplos de conjuntos
                    para explicar
                    el proceso.</p>
                <table class="table1p7">
                    <tr>
                        <td>1 </td>
                        <td> 60</td>
                    </tr>

                    <tr>
                        <td>2 </td>
                        <td>120 </td>
                    </tr>

                    <tr>
                        <td> 3</td>
                        <td> 180</td>
                    </tr>

                    <tr>
                        <td>5 </td>
                        <td> 300</td>
                    </tr>

                    <tr>
                        <td> 10</td>
                        <td> 600</td>
                    </tr>

                    <tr>
                        <td>12 </td>
                        <td> 720</td>
                    </tr>
                </table>
        </div>
                <div style="margin-right: 5%;">
                    <p>b)En la papelería por cada 2 borradores cobran $4.5 Juanito quiere saber cuánto dinero necesita
                        para ciertas
                        cantidades de borradores.</p>
                    <table class="table1p7">
                        <tr>
                            <td> 2</td>
                            <td> 4.5</td>
                        </tr>

                        <tr>
                            <td> 6</td>
                            <td> 13.5</td>
                        </tr>

                        <tr>
                            <td>10 </td>
                            <td> 22.5</td>
                        </tr>

                        <tr>
                            <td> 13</td>
                            <td> 29.25</td>
                        </tr>

                        <tr>
                            <td> 19</td>
                            <td> 42.75</td>
                        </tr>

                        <tr>
                            <td> 22</td>
                            <td> 49.5</td>
                        </tr>
                    </table>
                </div>

<div>
                <p>c)En la pastelería de la esquina por cada 15 galletas necesitan 850 gramos de harina. Han hecho la
                    siguiente
                    tabla para saber la cantidad de harina que van a necesitar para algunos pedidos:
                </p>
            
            
                <table class="table1p7">
                    <tr>
                        <td> 15</td>
                        <td> 850</td>
                    </tr>

                    <tr>
                        <td> 25</td>
                        <td> 1416.6</td>
                    </tr>

                    <tr>
                        <td>34</td>
                        <td> 1926.6</td>
                    </tr>

                    <tr>
                        <td> 60</td>
                        <td> 3400</td>
                    </tr>

                    <tr>
                        <td> 98</td>
                        <td> 5553.3</td>
                    </tr>

                    <tr>
                        <td> 105</td>
                        <td> 5950</td>
                    </tr>
                </table>


            </div>
        </div>
        <br><br>

        <div class="imgejercicios">
            <div>
                <img id="pdejer" src="images/Ejercicios.png" width=180px height=auto style="margin-right: 20px;">
            </div>
            <div id="ejercicios">
                <h2>Ejercicios</h2><br><br>
            </div>
        </div>
        <p> Resuelve los siguientes problemas.</p>
        <form method="post">
        1. Hoy el dólar está 17.65 así que Jaime y su familia fueron a un banco a cambiar algunos dólares que tenían.
        Jaime llevó 36,
        Rosa tenía 25, su mamá 78 y su papá 92. Completa la siguiente tabla de variaciones:<br>
        <table class="table2p7">
            <tr>
                <td>1 </td>
                <td>17.65 </td>
            </tr>

            <tr>
                <td>36 </td>
                <td><input type="text" size=5 maxlength="10" name="p7e7txt1" id="p7e7txt1"> </td>
            </tr>

            <tr>
                <td> 25</td>
                <td><input type="text" size=5 maxlength="10" name="p7e7txt2" id="p7e7txt2"> </td>
            </tr>

            <tr>
                <td>78 </td>
                <td> <input type="text" size=5 maxlength="10" name="p7e7txt3" id="p7e7txt3"> </td>
            </tr>

            <tr>
                <td> 92</td>
                <td> <input type="text" size=5 maxlength="10" name="p7e7txt4" id="p7e7txt4"> </td>
            </tr>
        </table>
        <br><br>
        2. En el supermercado 3 jabones en barra están a 43 pesos. Gael lleva 400 pesos y planea comprar jabones para
        todo el año
        ¿Para cuántos jabones le alcanza?<br>
        R=<input type="text" size=5 maxlength="10" name="p7e7txt5" id="p7e7txt5">
        <br>
        3. Con 3 litros de gasolina se pueden recorrer 48 km, por dos litros de gasolina se cobran 47.3. Jonny
        emprenderá un viaje por
        carretera y lleva como presupuesto $780 para gastar en gasolina ¿Cuántos litros podrá comprar? ¿Cuántos
        kilómetros podrá
        recorrer?<br>
        Litros=<input type="text" size=5 maxlength="10" name="p7e7txt6" id="p7e7txt6"><br>
        Kilómetros=<input type="text" size=5 maxlength="10" name="p7e7txt7" id="p7e7txt7">
        <br><br>
        4. Por cada 4 horas de desvelo se necesitan 17 días para recuperarse. En base a esto:<br>
        ¿Cuántos días necesita Karla si ayer se desveló 2 horas?<input type="text" size=5 maxlength="10" name="p7e7txt8" id="p7e7txt8"><br>
        ¿Cuántas horas se ha desvelado una persona si requiere de 32 días para recuperar esas horas?<input type="text"
            size=5 maxlength="10" name="p7e7txt9" id="p7e7txt9"><br>
        ¿A cuántas horas de desvelo equivalen 107 días de recuperación?<input type="text" size=5 maxlength="10" name="p7e7txt10" id="p7e7txt10"><br>
        ¿Cuántas días necesita dormir Hilda si no ha dormido 2 días a lo largo de una semana?<input type="text" size=5
            maxlength="10" name="p7e7txt11" id="p7e7txt11"><br>
        <br>
        <br>
        5. Una maestra tarda 4 horas y 20 minutos haciendo 5 figuras de goma eva ¿Cuánto tardará si hace 16 figuras?<br>
        R=<input type="text" size=5 maxlength="10" name="p7e7txt12" id="p7e7txt12">
        <br><br>

        6. 2 problemas de probabildad le toma a 3 personas 24 minutos para resolverlos. Si tienen que resolver 11
        problemas ¿Cuánto
        tiempo tardarán?<br>
        R=<input type="text" size=5 maxlength="10" name="p7e7txt13" id="p7e7txt13">
        <br><br>
        7. Han pasado 118 minutos y mi telefóno tiene 59%, considerando que la carga es constante:<br>
        ¿A los cuántos minutos tenía 15%?<input type="text" size=5 maxlength="10" name="p7e7txt14" id="p7e7txt14"><br>
        ¿A los cuántos minutos tenía 23%?<input type="text" size=5 maxlength="10" name="p7e7txt15" id="p7e7txt15"><br>
        ¿Cuánta carga tendrá cuando hayan pasado 200 minutos?<input type="text" size=5 maxlength="10" name="p7e7txt16" id="p7e7txt16"><br>
        ¿Cuánta batería tendrá cuando hayan pasado 146 minutos?<input type="text" size=5 maxlength="10" name="p7e7txt17" id="p7e7txt17"><br>
        ¿A los cuántos minutos estará totalmente cargado?<input type="text" size=5 maxlength="10" name="p7e7txt18" id="p7e7txt18">
        <br><br>
        <div class="pdcontainer">
        <button type="submit" value="" class="botonesrevisar" name="P7E7REV" id="P7E7REV"></button>
        <input type="reset" value="" class="botonesreintentar">
        </div>
        </form>
        <script>
            let respuestasE7 = [635.4,
                441.2,
                1541.9,
                1818.6,
                27,
                32.9,
                527.6,
                8.5,
                7.5,
                25.1,
                204,
                13.8,
                132,
                46,
                100,
                132,
                73,
                200
        ];
        colores(respuestasE7, 7, 7);
        </script>
        <?php 
            if(isset($_POST['P7E7REV'])){
                $respuestasE7 = array(635.4,
                441.2,
                1541.9,
                1818.6,
                27,
                32.9,
                527.6,
                8.5,
                7.5,
                25.1,
                204,
                13.8,
                132,
                46,
                100,
                132,
                73,
                200
            );
                require('funcionrevtxt.php');
                Caso2txt($respuestasE7, 7, 7,'decimal');
            }
            ?>

        <br>
        <h1 id="pi">Proporcionalidad inversa</h1>
        <p>A diferencia de la proporcionalidad directa, en la proporcionalidad indirecta si una magnitud
            aumenta, la otra disminuye proporcionalmente. Entonces: dos magnitudes son inversamente proporcionales
            si al multiplicar o dividir una de ellas la otra queda dividida o multiplicada por el mismo número; es
            aquí donde observamos por qué es una proporción inversa. Para entenderlo mejor veamos un ejemplo con la
            siguiente figura:</p>
        <div>
            <div></div>
            <div>
                <p> Imaginemos la siguiente situación: 1 persona tarda 240 minutos limpiando una grande casa,
                    2 personas tardan 120 minutos y se puede ver lo que tardan 3, 5 y 10 personas.Como se dijo
                    anteriormente, si una magnitud disminuye, la otra aumentará y viceversa.Para realizar los
                    cálculos de proporción inversa nuevamente hay que situarse en un conjunto de 4 términos,
                    ahora en lugar de multiplicar cruzado lo hacemos lineal y dividimos por el término restante.
                    Más matemáticamente: "se multiplica extremo con medio y el producto se divide por el medio
                    restante".
                    En la tabla izquierda podemos ver 2 ejemplos de conjuntos en específico.</p>

            </div>
        </div>

        <h2 id="piejem">Ejemplos</h2>
        <p>Ahora se verán algunos ejemplos a fin de que quede más claro el tema de proporción inversa.</p><br>
        <div class="pdcontainer">
            <div>
            <p>1. En un hormiguero hay 50 hormigas, las cuales han recolectado 7 kilogramos de
            hojas como provisiones para hibernar, dicha comida durará aproximadamente 170 días
            pero han llegado 17  hormigas buscando refugio así que las aceptaron, sin embargo, luego
            llegaron otras 4, otras 10 y así hasta que fueron 200 hormigas, ¿Cuánto tiempo durará la comida?</p><br>
                <table class="table2p7">
                    <tr>
                        <td>50</td>
                        <td>170</td>
                    </tr>

                    <tr>
                        <td>67</td>
                        <td>126</td>
                    </tr>

                    <tr>
                        <td>71</td>
                        <td>119</td>
                    </tr>

                    <tr>
                        <td>81</td>
                        <td>85</td>
                    </tr>

                    <tr>
                        <td>200</td>
                        <td>34</td>
                    </tr>
                </table>

            </div>
            <div></div>
            <div>
            <p>2. En el salón de clases los alumnos quieren comprar un módem para tener internet, el cual
            cuesta $4099, y ellos son 42, por lo que les tocaría de $97.5. Sin embargo, son malos cooperando
            y con el pasar del tiempo se van dando de baja algunos compañeros hasta llegar cuarto 
            semestre donde sólo quedan 27 alumnos ¿De cuánto les toca cooperar?</p><Br> 
                <table class="table2p7">
                    <tr>
                        <td>42</td>
                        <td>97.5</td>
                    </tr>

                    <tr>
                        <td>40</td>
                        <td>102.3</td>
                    </tr>

                    <tr>
                        <td>39</td>
                        <td>105</td>
                    </tr>

                    <tr>
                        <td>31</td>
                        <td>132</td>
                    </tr>

                    <tr>
                        <td>30</td>
                        <td>136.5</td>
                    </tr>

                    <tr>
                        <td>27</td>
                        <td>151.6</td>
                    </tr>
                </table>


            </div>
            <div></div>
        </div>
        <br>
        <p>
            3. Un duo de programadores tardan 200 días en concluir un proyecto ¿Cuánto tadarán 5?
            [2(200)] / 5 = 80 días.
        </p>
        <div class="imgejercicios">
            <div>
                <img id="piejer" src="images/Ejercicios.png" width=180px height=auto style="margin-right: 20px;">
            </div>
            <div id="ejercicios">
                <h2>Ejercicios</h2><br><br>
            </div>
        </div>
        ¡Es momento de practicar!<br>
        <form method="post">
        1. En un parque de atracciones hay un laberinto de muchos metros cuadrados, para mantner bien dicha atracción
        contratatan
        a 4 jardineros, los cuales hacen su trabajo en 6 horas. Entonces, la empresa decide hacer algunas pruebas para
        ver qué cantidad
        de trabajores le conviene contratatr, esa cantidad se determinará cuando un grupo logre mantener la atracción en
        menos de
        una hora.<br>
        <table>
            <tr>
                <td>4</td>
                <td>6</td>
            </tr>

            <tr>
                <td>5</td>
                <td><input type="text" size=5 maxlength="10" name="p7e8txt1" id="p7e8txt1"></td>
            </tr>

            <tr>
                <td>6</td>
                <td><input type="text" size=5 maxlength="10" name="p7e8txt2" id="p7e8txt2"></td>
            </tr>

            <tr>
                <td>7</td>
                <td><input type="text" size=5 maxlength="10" name="p7e8txt3" id="p7e8txt3"></td>
            </tr>

            <tr>
                <td><input type="text" size=5 maxlength="10" name="p7e8txt4" id="p7e8txt4"></td>
                <td>1</td>
            </tr>
        </table>
        <br><br>

        2. Para la celebración de fin de año se ha comisionado a un grupo de 5 mujeres para que tejan una manta gigante
        con la figura
        de Jesucristo, si ese trabajo les tomará 341 horas, ¿Cuánto les tomaría si fuesen 8 mujeres? y ¿si fueran 3?
        Sólo les quedan 176
        horas ¿Cuántas mujeres necesitan entrar al proyecto para terminarlo?<br>
        <span style="color:red;">NOTA: Redonde los días al número más cercano, teniendo en cuenta los decimales.</span><br>
        8 = <input type="text" size=5 maxlength="10" name="p7e8txt5" id="p7e8txt5"> 3=<input type="text" size=5 maxlength="10"  name="p7e8txt7" id="p7e8txt7">
        Necesitan=<input type="text" size=5 maxlength="10" name="p7e8txt6" id="p7e8txt6">
        
        <br><br>
        3. En una granja tienen 100 vacas a los cuales alimentan semanalmente con 460 kilos de heno, cantidad que se divide de 
        manera igualitaria, empero, de esas vacas, 20 tuvieron crías, es decir, ahora son 120 vacas por lo que los 460 kilos se dividen entre 120. 
        ¿Cuánto heno le va a tocar ahora a cada vaca?<br>
        R=<input type="text" size=5 maxlength="10" name="p7e8txt8" id="p7e8txt8">
        <br><br>

        4. Graciela acaba de regresar de un viaje de 9 meses y tiene muchos regalos para sus nietos, primero comenzará a
        repartir los
        colores y bolígrafos. Traía en total 378 colores para dividir entre los 4 nietos, pero al final la nieta mayor
        dijo no necesitar
        lápices de colores así que el reparto sólo se hará entre los 3 menores ¿De cuántos colores le toca a cada uno?
        <span style="color:red;">Nota: Redondee las cantidades hacia abajo.</span><br>
        R=<input type="text" size=5 maxlength="10" name="p7e8txt9" id="p7e8txt9">
        <br><br>
        5. Rocko está excavando un agujero en el parque mientras su cuidador está platicando con un amigo, así que trata
        de excavar
        lo más rápido que puede, aunque lograr la profundidad que quiere le tomará al menos 20 minutos, tiempo que no
        tiene.
        Posteriormente otro perro se une, luego dos más y finalmente son 8 perros excavando ¿Cuánto tiempo tomará hacer
        el agujero
        siendo un grupo de 8?<br>
        R=<input type="text" size=5 maxlength="10" name="p7e8txt10" id="p7e8txt10">
        <br><br>

        6. Quique ha colocado una fonda en su casa donde le ha estado yendo muy bien, eso quiere decir que las 3 señoras
        que
        hacen las tortillas no son suficientes para atender tanta gente, con 3 señoras el cliente tiene que esperar 5
        minutos por una
        tortilla ¿Cuánto tendría que esperar si fuesen 7 señoras?
        R=<input type="text" size=5 maxlength="10" name="p7e8txt11" id="p7e8txt11">
        <br><br>

        7. Una familia ha salido de excursión con víveres para 28 días y para 6 personas, es decir, los miembros de su
        familia ¿Para
        cuántos días durarían los víveres si fuesen sólo el padre y la madre de excursión?<br>
        R=<input type="text" size=5 maxlength="10" name="p7e8txt12" id="p7e8txt12">
        <br><br>
        <div class="pdcontainer">
            <button type="submit" value="" class="botonesrevisar" name="P7E8REV" id="P7E8REV"></button>
        <input type="reset" value="" class="botonesreintentar">
        </div>
        

        </form>
        <script>
             let respuestasE8 = [4.8,
                4,
                3.4,
                24,
                213.125,
                568.3,
                10,
                3.8,
                126,
                2.5,
                2.1,
                84
        ];
        colores(respuestasE8, 7, 8);
        </script>
        <?php 
            if(isset($_POST['P7E8REV'])){
                $respuestasE8 = array(4.8,
                4,
                3.4,
                24,
                213.125,
                568.3,
                10,
                3.8,
                126,
                2.5,
                2.1,
                84
            );
                require('funcionrevtxt.php');
                Caso2txt($respuestasE8, 8, 7,'varchar');
            }
            ?>

        <br>
        <h1 id="porcentajes">Porcentajes</h1>
        <P>En matemáticas y estadística, el porcentaje es la expresión de una determinada caantidad como una
            fracción de 100 partes iguales. Es la relación de proporcionalidad entre dos unidades o una unidad y
            un conjunto de ellas, esto está expresado en términos de 100 unidades, es decir, un tanto por ciento.</p>
            <br>
        <p>El porcentaje viene acompañado del signo % y de la cifra del porcentaje. Algunos ejemplos: 34%,
            10%, 50%, 90%, 67% etc.</p><br>

        <p>La importancia de los porcentajes radica en que con estos podemos comparar fracciones y expresar
            proporciones. Se usan en la estadística, la contabilidad, la ecología, entre muchas otras.
        </p>
        <br>
        <h2 id="porejem">Ejemplos</h2>
        <p>A continuación se verán algunos ejemplos de equivalencia entre fracciones y porcentajes:<br>
            1/2 equivale a 50/100, es decir, a 50%.<br>
            1/3 equivale a 33.3/100, es decir, a 33.3%.<br>
            3/8 equivale a 37.5/100, es decir, a 37.5%.<br>
            1/10 equivale a 10/100, es decir, a 10%.<br>
            1/100 equivale a 0.1/100, es decir, a 1%.<br>
            9/10 equivale a 90/100, es decir, a 90%.<br></p>
            <br>
        <p>Los porcentajes se pueden expresar en cifras enteras o fraccionarias, asimismo, se pueden
            realizar algunas operaciones aritméticas con ellos, sin embargo, hay que tener en cuenta que
            un porcentaje no expresa una cifra exacta sino más bien una proporción.</p>

        <div>
            <div></div>
            <div></div>
        </div>
        <P> Si se busca obtener el porcentaje, el procedimiento es el mismo, ya que la incógnita se encontrará
            en otra posición, empero, la multiplicación cruzada y división horizontal se mantienen</P><BR>
        <h2>Ejemplos</h2>
        <P>
            Finalmente se verán ejercicios de su aplicación antes de cerrar con las actividades.
            <BR>
            1. En una tienda está una blusa que cuesta $340 con una oferta de 25% ¿A cuánto está realmente la blusa?<BR>
            (345)(25)/100 = 85
            340-85 = $255
            <BR><BR>
            2. Oscar colecciona figuras de acción, de las 267 que tiene sólo el 62% han sido compras totalmente nuevas,
            las otras han sido
            adquiridas de segunda mano ¿Cuántas figuras de segunda mano tiene?<BR>
            (267)(62)/100=165
            267-165= 102
            <BR><BR>
            3. Un futbolista a lo largo de su carrera ha lanzado 280 penaltis, si se sabe que ha fallado el 7% ¿Cuántos
            ha logrado meter?<BR>
            (280)(7)/100=20
            280-20 = 260
            <BR><BR>
            4. Elena fue al cine, cuando compró su combo de palomitas eligió el de $90, sin embargo, al momento de pagar
            le cobraron sólo
            $67 ¿Qué porcentaje le descontaron?
            (100)(67)/90 = 74.4
            100 - 74.4 = 25.5%
            <BR><BR>
            5. Tomás se percató de que tenía descuento en la inscripción de su colegiatura, de pagar $1800 ahora sólo
            pagaría $865 ¿Qué
            porcentaje le descontaron?<BR>
            (100)(865)/1800=48.05
            100-48.05 = 51.94%
            <BR>

        </P>

        <div class="imgejercicios">
            <div>
                <img id="porejer" src="images/Ejercicios.png" width=180px height=auto style="margin-right: 20px;">
            </div>
            <div id="ejercicios">
                <h2>Ejercicios</h2><br><br>
            </div>
        </div>
        <P>Realiza las siguientes actividades. Si algunas cantidades tienen más de un número después del punto, considere 2.</P>
        <DIV CLASS="columnep">
            <form method="post">
            1. El 15% de 90 =<input type="text" size=5 maxlength="10" name="p7e9txt1" id="p7e9txt1"><BR>
            2. El 89% de 3450 =<input type="text" size=5 maxlength="10" name="p7e9txt2" id="p7e9txt2"><BR>
            3. El 50% de 10780 =<input type="text" size=5 maxlength="10" name="p7e9txt3" id="p7e9txt3"><BR>
            4. El 4% de 70 =<input type="text" size=5 maxlength="10" name="p7e9txt4" id="p7e9txt4"><BR>
            5. El 68% de 1500 =<input type="text" size=5 maxlength="10" name="p7e9txt5" id="p7e9txt5"><BR>
            6. El 99% de 340 = <input type="text" size=5 maxlength="10" name="p7e9txt6" id="p7e9txt6"><BR>
            7. El 20% de 600 =<input type="text" size=5 maxlength="10" name="p7e9txt7" id="p7e9txt7"><BR>
            8. El 12% de 12 =<input type="text" size=5 maxlength="10" name="p7e9txt8" id="p7e9txt8"><BR>
            9. El 55% de 9000 =<input type="text" size=5 maxlength="10" name="p7e9txt9" id="p7e9txt9"><BR>
            10. El 1% de 780 =<input type="text" size=5 maxlength="10" name="p7e9txt10" id="p7e9txt10"><BR>
            11. El 84% de 6234 =<input type="text" size=5 maxlength="10" name="p7e9txt11" id="p7e9txt11"><BR>
            12. El 5% de 10 =<input type="text" size=5 maxlength="10" name="p7e9txt12" id="p7e9txt12"><BR>
            13. El 34% de 1950 =<input type="text" size=5 maxlength="10" name="p7e9txt13" id="p7e9txt13"><BR>
            14. El 22% de 100 =<input type="text" size=5 maxlength="10" name="p7e9txt14" id="p7e9txt14"><BR>
            15. El 7% de 4949 =<input type="text" size=5 maxlength="10" name="p7e9txt15" id="p7e9txt15"><BR>
            <div class="pdcontainer">
            <button type="submit" value="" class="botonesrevisar" name="P7E9REV" id="P7E9REV"></button>
            <input type="reset" value="" class="botonesreintentar"><br>
            </div>

            <script>
               let respuestasE9 = [13.5,
                3070.5,
                5390,
                2.8,
                1020,
                336.6,
                120,
                1.44,
                4950,
                7.8,
                5236.56,
                0.5,
                663,
                22,
                346.43
        ];
        colores(respuestasE9, 7, 9); 
            </script>
            <?php 
            if(isset($_POST['P7E9REV'])){
                $respuestasE9 = array(13.5,
                3070.5,
                5390,
                2.8,
                1020,
                336.6,
                120,
                1.44,
                4950,
                7.8,
                5236.56,
                0.5,
                663,
                22,
                346.43
            );
                require('funcionrevtxt.php');
                Caso2txt($respuestasE9, 9, 7,'decimal');
            }
            ?>
            </form>
            
<form method="post">
            1. Qué tanto por ciento de 230 es 120.<input type="text" size=5 maxlength="10"  name="p7e10txt1" id="p7e10txt1"><BR>
            2. Qué tanto por ciento de 3400 es 989.<input type="text" size=5 maxlength="10"  name="p7e10txt2" id="p7e10txt2"><BR>
            3. Qué tanto por ciento de 10000 es 6700.<input type="text" size=5 maxlength="10"  name="p7e10txt3" id="p7e10txt3"><BR>
            4. Qué tanto por ciento de 700 es 100.<input type="text" size=5 maxlength="10"  name="p7e10txt4" id="p7e10txt4"><BR>
            5. Qué tanto por ciento de 8900 es 310.<input type="text" size=5 maxlength="10"  name="p7e10txt5" id="p7e10txt5"><BR>
            6. Qué tanto por ciento de 100 es 9.<input type="text" size=5 maxlength="10"  name="p7e10txt6" id="p7e10txt6"><BR>
            7. Qué tanto por ciento de 720 es 5.<input type="text" size=5 maxlength="10"  name="p7e10txt7" id="p7e10txt7"><BR>
            8. Qué tanto por ciento de 1000 es 670.<input type="text" size=5 maxlength="10"  name="p7e10txt8" id="p7e10txt8"><BR>
            9. Qué tanto por ciento de 5111 es 3910.<input type="text" size=5 maxlength="10"  name="p7e10txt9" id="p7e10txt9"><BR>
            10. Qué tanto por ciento de 1111 es 111.<input type="text" size=5 maxlength="10"  name="p7e10txt10" id="p7e10txt10"><BR>
            11. Qué tanto por ciento de 9200 es 8134.<input type="text" size=5 maxlength="10"  name="p7e10txt11" id="p7e10txt11"><BR>
            12. Qué tanto por ciento de 4000 es 3999.<input type="text" size=5 maxlength="10"  name="p7e10txt12" id="p7e10txt12"><BR>
            13. Qué tanto por ciento de 12 es 1.<input type="text" size=5 maxlength="10"  name="p7e10txt13" id="p7e10txt13"><BR>
            14. Qué tanto por ciento de 2890 es 28.<input type="text" size=5 maxlength="10"  name="p7e10txt14" id="p7e10txt14"><BR>
            15. Qué tanto por ciento de 300 es 10.<input type="text" size=5 maxlength="10"  name="p7e10txt15" id="p7e10txt15"><BR>
            <div class="pdcontainer">
            <button type="submit" value="" class="botonesrevisar" name="P7E10REV" id="P7E10REV"></button>
            <input type="reset" value="" class="botonesreintentar"><br>
        </div>
            <script>
let respuestasE10 = [52.17,
                29.08,
                67,
                14.28,
                3.48,
                9,
                0.69,
                67,
                76.5,
                9.99,
                88.41,
                99.97,
                8.33,
                3.33
        ];
colores(respuestasE10, 7, 10);
            </script>
            <?php 
            if(isset($_POST['P7E10REV'])){
                $respuestasE10 = array(52.17,
                29.08,
                67,
                14.28,
                3.48,
                9,
                0.69,
                67,
                76.5,
                9.99,
                88.41,
                99.97,
                8.33,
                3.33
            );
                require('funcionrevtxt.php');
                Caso2txt($respuestasE10, 10, 7,'decimal');
            }
            ?>
</form>
            

            <DIV>
<form method="post">
                1. En una papelería se tiene un total de 4079 hojas de colores. 32% son azules, 13% amarillas, 23%
                negras, 10% rojas, 15%
                moradas y 7% verdes ¿Cuántas hojas hay de cada una?<BR>
                <span style="color:red;">NOTA: No consideres puntos decimales.</span>
                Azules:<input type="text" size=5 maxlength="10" name="p7e11txt1" id="p7e11txt1"><BR>
                Amarillas:<input type="text" size=5 maxlength="10" name="p7e11txt2" id="p7e11txt2"><BR>
                Negras:<input type="text" size=5 maxlength="10" name="p7e11txt3" id="p7e11txt3"><BR>
                Rojas:<input type="text" size=5 maxlength="10" name="p7e11txt4" id="p7e11txt4"><BR>
                Moradas:<input type="text" size=5 maxlength="10" name="p7e11txt5" id="p7e11txt5"><BR>
                Verdes:<input type="text" size=5 maxlength="10" name="p7e11txt6" id="p7e11txt6"><BR>
                <BR>
                2. La calificación de la materia de ética está determinada por los siguientes criterios:
                10% 7 participaciones.
                5% 40 asistencias.
                35% tareas (5 en total).
                40% examen.
                10% exposición.
                Ana tiene 3 participaciones, 35 asistencias, 4 tareas, sacó 9 en el ezamen y 10 en la exposición ¿Qué
                calificación obtuvo?
                En cambio, Juan tiene 7 participaciones, 40 asistencias, 3 tareas, 7 en el examen y 10 en la exposición
                ¿Cuál es su calificación?
                <BR>Ana:<input type="text" size=5 maxlength="10" name="p7e11txt7" id="p7e11txt7"><BR>
                Luis:<input type="text" size=5 maxlength="10" name="p7e11txt8" id="p7e11txt8"><BR>
                <BR>
                3. En la boutique hay descuento de 30% en prendas de dama. Lisa compró un vestido de $345 ya con
                descuento ¿Cuánto costaba originalmente
                el vestido?<BR>
                R=<input type="text" size=5 maxlength="10" name="p7e11txt9" id="p7e11txt9"><BR>
                <BR>
                4. Jimena colecciona pegatinas, tiene 23 de color azul, 70 de color verde, 67 de color rosa, 21 de color
                blanco, 80 de color púrpura, 109 de color gris,
                133 de color rosa, 56 de color naranja y 99 de color amarillo ¿Qué porcentaje representa cada color de
                pegatinas?<BR>
                Azul:<input type="text" size=5 maxlength="10" name="p7e11txt10" id="p7e11txt10"><BR>
                Verde:<input type="text" size=5 maxlength="10" name="p7e11txt11" id="p7e11txt11"><BR>
                Rosa:<input type="text" size=5 maxlength="10" name="p7e11txt12" id="p7e11txt12"><BR>
                Blanco:<input type="text" size=5 maxlength="10" name="p7e11txt13" id="p7e11txt13"><BR>
                Púrpura:<input type="text" size=5 maxlength="10" name="p7e11txt14" id="p7e11txt14"><BR>
                Gris:<input type="text" size=5 maxlength="10" name="p7e11txt15" id="p7e11txt15"><BR>
                Rosa:<input type="text" size=5 maxlength="10" name="p7e11txt16" id="p7e11txt16"><BR>
                Naranja:<input type="text" size=5 maxlength="10" name="p7e11txt17" id="p7e11txt17"><BR>
                Amarillo:<input type="text" size=5 maxlength="10" name="p7e11txt18" id="p7e11txt18"><BR>
                <BR>

                5. Si Estela lleva $250 y hay promoción de 3x2 sopas de arroz en $23 pesos
                ¿Para cuántos paquetes le alcanzará si además tiene un cupón de descuento de 20% en compras de más de
                200 pesos?<BR>
                R=<input type="text" size=5 maxlength="10" name="p7e11txt19"  id="p7e11txt19"><BR><BR>
                <div class="pdcontainer">
                <button type="submit" value="" class="botonesrevisar" name="P7E11REV" id="P7E11REV"></button>
                <input type="reset" value="" class="botonesreintentar">
                </div>
                <script>
                   let respuestase11=[530,
                938,
                407,
                611,
                285,
                8.2,
                7.4,
                492.85,
                3.49,
                10.63,
                10.18,
                3.19,
                12.15,
                16.56,
                20.21,
                8.51,
                15.04,
                39
                ];
                colores(respuestase11, 7, 11);
                </script>
                <?php 
            if(isset($_POST['P7E11REV'])){
                $respuestasE11 = array(1305,
                530,
                938,
                407,
                611,
                285,
                8.2,
                7.4,
                492.85,
                3.49,
                10.63,
                10.18,
                3.19,
                12.15,
                16.56,
                20.21,
                8.51,
                15.04,
                39
            );
                require('funcionrevtxt.php');
                Caso2txt($respuestasE11, 11, 7,'decimal');
            }
            ?>
            </form>

            <br>
            <h1>Resumen</h1>
            <img src="./images/Progresion7img/resumenp7.png" width="100%">

    </section>
    <div id="fot">
        <?php include ('footer.php'); ?>
    </div>


</body>

</html>