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
    <link rel="icon" href="images/logo.ico" type="image/x-icon">
    <script src="js/script7.js"></script>
    <script src="js/script8.js"></script>
    <title>Progresion 12</title>
</head>

<body>
    <?php
    require('ifSession.php');
    if ($indicador_bd) {
        dialog_abrir('12');
    }
    ?>
    <script src="js/script11.js"></script>
    <aside class="aside" id="aside12">
        <section id="s1">
            Pro
            gre
            sión
            12
        </section>
        <br>
        <Section class="sectionAs">
            <P>Modela situaciones y resuelve problemas significativos para el estudiantado
                tanto de manera algebraica como geométrica al aplicar propiedades básicas
                de funciones lineales, cuadráticas y polinomiales.</p>
            <img src="./images/P12.png" id="KaxieP1">
            <b>
                <h3> Metas </h3>
            </b><br>
            <H3>M2</H3>
            <P> Construye un modelo matemático, identificando las variables de interés, con la
                finalidad de explicar una situación o fenómeno y/o resolver un problema tanto
                teórico como de su entorno.</P>
            <b>
                <h3> Categorías </h3>
            </b><br>
            <H3>C3</H3>
            <P>Solución de problemas y modelación.</P>
            <b>
                <h3> Subcategorías </h3>
            </b><br>
            <H3>S2</H3>
            <P>Construcción de modelos.</P>
            <H3>S1</H3>
            <P>Estrategias heurísticas y ejecución de procedimientos no rutinarios</P>

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
            <div class="panterior"><a href="progresion11.php"> <img src="images/Anterior.png" width=47px
                        style="margin-bottom: -18px;"> Anterior </a></div>
            <div class="psiguiente"><a href="progresion13.php"> Siguiente <img src="images/Siguiente.png" width=47px
                        style="margin-bottom: -18px;"> </a></div>
        </div>
    </aside>


    <section class="textP">
        <center>
            <div id="indice12" class="indice">
                <p>
                    &emsp;&emsp;&emsp;&emsp;&ensp;Índice<br>
                    <a href="#cc">Conceptos clave</a><br>
                    <a href="#definicion_funcion">Definición de función</a><br>
                    <a href="#funcion-lineal">Funciones lineales</a><br>
                <p class="sangriindice"><a href="#pendiente-p12">Pendiente</a></p>
                <p class="sangriindice"><a href="#ordenada-p12">Ordenada</a></p>
                </p>
                <p><a href="#funciones-cuadraticas">Funciones cuadráticas</a><br>
                <p class="sangriindice"><a href="#orientacion-cuadraticas">Orientación</a></p>
                </p>
                <p><a href="#funciones-polinomiales">Funciones polinomiales</a><br>
                <p class="sangriindice"><a href="#funciones-cubicas">Funciones cúbicas</a></p>
                <p class="sangriindice"><a href="#funciones-cuarticas">Funciones cuárticas</a></p>
                </p>
                <p><a href="#p12-ejercicios">Ejercicios</a><br>

                    <a href="#cuadejer">Resumen</a>
                </p>
            </div>
        </center>
        <div class="conceptosclave">
            <div><img src="images/KCClave.png" width=180px height=auto class="conceptosclaveimg"
                    style="margin-right: 20px;"></div>
            <div class="ceonceptoscla">
                <h1>Conceptos clave</h1>
                <P>Función. Es una relación de correspondencia entre dos
                    números.<br>
                    Variable independiente. Es aquella que, como su nombre lo indica,
                    no depende de ninguna otra variable, asimismo, es la que
                    define a la variable dependiente.<br>
                    Variable dependiente. Depende del valor de otra variable, es
                    decir, de la independiente.<br>
                    Pendiente. Medida de la inclinación de una recta.<br>
            </div>
        </div>

        </p>
        <br>
        <h1 id="definicion_funcion">Definición de función</h1>
        <p>Una función se trata de una relación entre una magnitud y otra, en donde el valor de la primera depende de la
            segunda.<br>
            En una función hay que considerar dos elementos:</p>
        <br>
        <p>Como ejemplo, podemos considerar la relación entre la medida del lado de un cuadrado y el área del mismo:</p>
        <br>
        <table>
            <tr>
                <td>Medida del lado </td>
                <td> Área del cuadrado</td>
            </tr>

            <tr>
                <td> 1</td>
                <td>1 </td>

            </tr>


            <tr>
                <td> 2</td>
                <td>4 </td>

            </tr>

            <tr>
                <td> 3</td>
                <td>9 </td>

            </tr>

            <tr>
                <td>4 </td>
                <td> 16</td>

            </tr>

            <tr>
                <td>5 </td>
                <td> 25</td>

            </tr>

            <tr>
                <td> 6</td>
                <td>36 </td>

            </tr>

            <tr>
                <td> 7</td>
                <td> 49</td>

            </tr>


        </table>
        <br>
        <div class="contenedor_funcion_intro">

            <div>
                <iframe src=" https://www.geogebra.org/calculator/n8ngkhbu" width="100%" height="400" loading="eager"
                    style="border: 1px solid #e4e4e4;border-radius: 4px;" frameborder="0"></iframe>
            </div>


            <div>
                <p>En el modelo interactivo se presenta lo mismo que se plantea en la tabla de valores. Arrastra el
                    punto B para definir la medida del
                    lado del cuadrado y nota que su área cambia en función de dicho valor.<br>
                    Para este ejemplo, la función que se utiliza es la siguiente: <math
                        xmlns:mml="http://www.w3.org/1998/Math/MathML"
                        xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                        <mi>f</mi>
                        <mfenced separators="|">
                            <mrow>
                                <mi>(x)</mi>
                            </mrow>
                        </mfenced>
                        <mo>=</mo>
                        <msup>
                            <mrow>
                                <mi>x</mi>
                            </mrow>
                            <mrow>
                                <mn>2</mn>
                            </mrow>
                        </msup>
                    </math>
                </p><br>
            </div>
        </div>
        <p>Ahora, con esta breve introducción, entremos de lleno a ver lo que son las funciones lineales, cuadráticas y
            polinomiales.</p>
        <br><br>


        <p><b>Variable dependiente.</b> Su valor depende de otra magnitud.
            En el ejemplo anterior, el área es la variable dependiente puesto que el valor de está en función de la
            medida del lado del cuadrado.</p>
        <br>
        <p><b>Variable independiente. </b>Es la que define el valor de la variable dependiente.<br>
            Para el caso anterior, la variable independiente es la medida del lado pues este lado define cuánto vale el
            área del cuadrado.</p>
        <br>
        <h1 id="funcion-lineal">Función lineal</h1><br>
        <p>Este tipo de funciones son funciones polinómicas de primer grado, es decir, donde el exponente de la variable
            es 1 y cuya gráfica es una línea recta.</p><br>
        <p>Estas funciones se escriben de la siguiente manera <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <mi>f</mi>
                <mfenced separators="|">
                    <mrow>
                        <mi>(x)</mi>
                    </mrow>
                </mfenced>
                <mo>=</mo>
                <mo>±</mo>
                <mi>m</mi>
                <mi>x</mi>
                <mo>±</mo>
                <mi>b</mi>
            </math>
            <br>
            Donde:<br>
            <i>m</i> y <i>b</i> son constantes<br>
            <i>x</i> es una variable
        </p>
        <br>
        <img width="35%" src="./images/Progresion12img/img1.png"><br>
        <p>Teniendo en cuenta esta representación se puede decir que:<br>
            <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <mi>m</mi>
            </math>
            es la pendiente de la recta,
            <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <mi>b</mi>
            </math> es el valor del eje <i>y</i> donde <i>x = 0</i>
        </p>
        <br>
        <p>En algunos casos encontraremos que la función lineal únicamente se representa de la forma <math
                xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <mi>f</mi>
                <mfenced separators="|">
                    <mrow>
                        <mi>(x)</mi>
                    </mrow>
                </mfenced>
                <mo>=</mo>
                <mo>±</mo>
                <mi>m</mi>
                <mi>x</mi>
            </math> e incluso
            así su recta en el plano cartesiano continuará siendo una recta pues el exponente de la variable se
            mantiene
            en 1.</p><Br>
        <img width="35%" src="./images/Progresion12img/img2.png"><br>
        <br>
        <Center>
            <math class="funciones_modelo_interactivo" xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <mi>f</mi>
                <mo>(</mo>
                <mi>x</mi>
                <mo>)</mo>
                <mo>=</mo>
                <mo>±</mo>




                <mi class="element_funcion_interactivo" onclick="MostrarDescripciones('m')">m</mi>
                <mi class="element_funcion_interactivo" onclick="MostrarDescripciones('xlin')">x</mi>

                <mo>±</mo>
                <mi class="element_funcion_interactivo" onclick="MostrarDescripciones('blin')">b</mi>
            </math>
            <br><br><Br>
            <div>
                <div class="descripcion_funcion_interactiva" id="info_lineal_m">
                    Es el coeficiente que acompaña a la variable lineal. También se le conoce como pendiente.
                </div>
                <br>
                <div class="descripcion_funcion_interactiva" id="info_lineal_xlin">
                    Es la variable lineal, esto es, de exponente 1.
                </div>
                <br>
                <div class="descripcion_funcion_interactiva" id="info_lineal_blin">
                    Término independiente o constante. También se le conoce como ordenada.
                </div>
                <br>

            </div>
        </Center>


        <br>
        <h2 id="pendiente-p12">Pendiente</h2>
        <p>Como se mencionó anteriormente, las funciones lineales constan de una pendiente y una ordenada.<br>
            La pendiente (<i>m</i>) se refiere al coeficiente de la variable.</p><br>
        <p>
            Por ejemplo:<br>
            <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <mi>f</mi>
                <mfenced separators="|">
                    <mrow>
                        <mi>(x)</mi>
                    </mrow>
                </mfenced>
                <mo>=</mo>
                <mo>-</mo>
                <mn>2</mn>
                <mi>x</mi>
                <mo>+</mo>
                <mi>b</mi>
            </math><br>
            La pendiente de la función corresponde a -2.<br>
            <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <mi>f</mi>
                <mfenced separators="|">
                    <mrow>
                        <mi>(x)</mi>
                    </mrow>
                </mfenced>
                <mo>=</mo>
                <mn>3</mn>
                <mi>x</mi>
                <mo>+</mo>
                <mi>b</mi>
            </math>
            <br>
            En este caso, la pendiente es 3.<br>
            <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <mi>f</mi>
                <mfenced separators="|">
                    <mrow>
                        <mi>(x)</mi>
                    </mrow>
                </mfenced>
                <mo>=</mo>
                <mo>-</mo>
                <mi>x</mi>
                <mo>+</mo>
                <mi>b</mi>
            </math>
            <br>
            Aunque como tal no hay un número "visible", en este caso la variable tiene como coeficiente al -1.<br>
            <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <mi>f</mi>
                <mfenced separators="|">
                    <mrow>
                        <mi>(x)</mi>
                    </mrow>
                </mfenced>
                <mo>=</mo>
                <mi>x</mi>
                <mo>+</mo>
                <mi>b</mi>
            </math><br>
            Asimismo, la pendiente de esta expresión corresponde al 1.
        </p>
        <br>

        <p>Para los dos últimos casos es importante recordar que cuando una variable no viene acompañada de un
            número es
            porque su coeficiente es 1.<br>
            ¿Y qué papel tiene la pendiente en una función lineal?<br>
            Pues bien, este elemento no está únicamente de adorno, debido a que dependiendo de su valor se puede
            determinar
            qué tan inclinada es la recta.<br>
            Mientras más grande lo sea, mucho más inclinada lo estará. Para ello véase la siguiente gráfica:</p>
        <br>
        <img width="35%" src="./images/Progresion12img/img3.png"><br>
        <p>En la figura se aprecia que la función <i>f(x)</i>, cuyo coeficiente es el más pequeño, se encuentra más
            cercana al
            eje
            <i>x</i>, es decir, es la que menos inclinación tiene, a diferencia de la función <i>q(x)</i>, la cual
            se halla más
            cercana al
            eje <i>y</i> por su mayor nivel de inclinación.
        </p>
        <br><br>
        <p>Del mismo modo, por medio del signo de la pendiente se puede determinar si la función crece o
            decrece.<br>
            Cuando <i>m</i> > 0, entonces la pendiente es creciente.<br>
            Cuando <i>m</i>
            < 0, entonces la pendiente es creciente. <br><span style="color:red;"> Importante.</span> <math
                    xmlns:mml="http://www.w3.org/1998/Math/MathML"
                    xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                    <mi>m</mi>
                    <mo>≠</mo>
                    <mn>0</mn>
                </math>,
                esto porque en caso de que el coeficiente de la literal sea 0 entonces al multiplicarse por <i>x</i>
                también daría 0, es decir, no habría una variable
                y por lo tanto tampoco una recta.
        </p>
        <br>


        A continuación se muestra un ejemplo de esto:<br>
        <div class="contenedor_funcion_intro">
            <div>
                <img width="100%" src="./images/Progresion12img/img4.png">
            </div>

            <Div>
                En la imagen quizás no quede muy claro esto de decreciente, así que para ello se proporciona la
                siguiente tabla
                de valores que nos permitirá comprender por qué la negativa decrece y la positiva crece.
                <table>
                    <th>x</th>
                    <th>r(x)</th>
                    <th>s(x)</th>

                    <tr>
                        <td>-2</td>
                        <td>11</td>
                        <td>-9</td>
                    </tr>

                    <tr>
                        <td>-1</td>
                        <td>6</td>
                        <td>-4</td>
                    </tr>

                    <tr>
                        <td>0</td>
                        <td>1</td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>-4</td>
                        <td>6</td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>-9</td>
                        <td>11</td>
                    </tr>
                </table>
            </Div>
        </div>


        <br>
        <p>En este modelo creado con Geogebra se aprecia el el crecimiento y decrecimiento de estas funciones,
            siendo la
            función
            naranja aquella que decrece, pues como se ve en la tabla inicia desde el valor 11 y termina en el
            -9.<br>
            Entretanto, la función azul es aquella que crece debido a que comienza en el -9 y sube al 11.
        </p>
        <iframe loading="eager" src="https://www.geogebra.org/calculator/y55wptem?embed" width="85%" height="400px"
            allowfullscreen style="border: 1px solid #e4e4e4;border-radius: 4px;" frameborder="0"></iframe>

        <br><br>
        <h2 id="ordenada-p12">Ordenada</h2>
        <p>Por otro lado, la ordenada se refiere al punto o coordenada donde la recta corta o interseca con el eje
            <i>y</i>.<br>
            Por ejemplo:
        </p>
        <img width="45%" src="./images/Progresion12img/img5.png"><br>
        <br>
        <p>En la imagen se tiene dos funciones cuyas ordenadas son de "5" y "-3", y en efecto, estas tocan el eje
            <i>y</i> en
            sus
            respectivos puntos, señalados por los puntos A y B, respectivamente.
        </p><br>


        <h1 id="funciones-cuadraticas">Funciones cuadráticas</h1>
        <p>Esta función también pertenece a las funciones polinómicas, se caracteriza por el hecho de que la
            variable
            está elevada a la segunda potencia, es decir, al cuadrado.</p><br>
        <p>Dichas funciones se representan de la siguiente manera <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <mi>f</mi>
                <mo>(</mo>
                <mi>x</mi>
                <mo>)</mo>
                <mo>=</mo>
                <mo>±</mo>
                <mi>a</mi>
                <msup>
                    <mrow>
                        <mi>x</mi>
                    </mrow>
                    <mrow>
                        <mn>2</mn>
                    </mrow>
                </msup>
                <mo>±</mo>
                <mi>b</mi>
                <mi>x</mi>
                <mo>±</mo>
                <mi>c</mi>
            </math></p>
        <br>

        <p>Estas funciones son las fórmulas matemáticas que definen una curva.
            Generalmente al graficarlas se obtendrá la forma de una "U", o bien, de una parábola.</p>

        <p>A continuación, se muestra la estructura de estas funciones. Pulsa sobre cada elemento para que veas una
            descripción de estos.</p>
        <center>
            <math class="funciones_modelo_interactivo" xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <mi>f</mi>
                <mo>(</mo>
                <mi>x</mi>
                <mo>)</mo>
                <mo>=</mo>
                <mo>±</mo>
                <mi onclick="MostrarDescripciones('a')" class="element_funcion_interactivo">a</mi>
                <msup class="element_funcion_interactivo" onclick="MostrarDescripciones('x2')">
                    <mrow>
                        <mi>x</mi>
                    </mrow>
                    <mrow>
                        <mn>2</mn>
                    </mrow>
                </msup>
                <mo>±</mo>


                <mi class="element_funcion_interactivo" onclick="MostrarDescripciones('b')">b</mi>
                <mi class="element_funcion_interactivo" onclick="MostrarDescripciones('x')">x</mi>

                <mo>±</mo>
                <mi class="element_funcion_interactivo" onclick="MostrarDescripciones('c')">c</mi>
            </math>
            <br><br><Br>
            <div>
                <div class="descripcion_funcion_interactiva" id="info_cuadratica_a">
                    Es el coeficiente que acompaña a la variable cuadrática.
                </div>
                <br>
                <div class="descripcion_funcion_interactiva" id="info_cuadratica_x2">
                    Es la variable cuadrática, esto es, elevado a la segunda potencia.
                </div>
                <br>
                <div class="descripcion_funcion_interactiva" id="info_cuadratica_b">
                    Coeficiente del término lineal.
                </div>
                <br>
                <div class="descripcion_funcion_interactiva" id="info_cuadratica_x">
                    Variable lineal, es decir, con exponente 1.
                </div>
                <br>
                <div class="descripcion_funcion_interactiva" id="info_cuadratica_c">
                    Constante, es decir, cualquier número real.
                </div>
            </div>
        </center>
        <br>
        <p>Normalmente, esta función suele contener los 3 términos del ejemplo, empero, en ciertas ocasiones
            únicamente
            se presente con sólo 2 de ellos:
            <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <mi>f</mi>
                <mfenced separators="|">
                    <mrow>
                        <mi>(x)</mi>
                    </mrow>
                </mfenced>
                <mo>=</mo>
                <mo>-</mo>
                <msup>
                    <mrow>
                        <mi>x</mi>
                    </mrow>
                    <mrow>
                        <mn>2</mn>
                    </mrow>
                </msup>
                <mo>+</mo>
                <mn>6</mn>
            </math>
            <br>Al igual que puede contener únicamente el término cuadrático: <br>
            <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <mi>f</mi>
                <mfenced separators="|">
                    <mrow>
                        <mi>(x)</mi>
                    </mrow>
                </mfenced>
                <mo>=</mo>
                <msup>
                    <mrow>
                        <mi>x</mi>
                    </mrow>
                    <mrow>
                        <mn>2</mn>
                    </mrow>
                </msup>
            </math>
        </p>
        <p>Del mismo modo, existen casos en los que la expresión cuadrática no está del todo desarrollada por lo que
            se
            tendrían que efectuar las operaciones pertinentes, tal y como se presente en el siguiente ejemplo:<br>
        </p>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
            <mi>f</mi>
            <mfenced separators="|">
                <mrow>
                    <mi>x</mi>
                </mrow>
            </mfenced>
            <mo>=</mo>
            <mo>-</mo>
            <mn>3</mn>
            <msup>
                <mrow>
                    <mfenced separators="|">
                        <mrow>
                            <mi>x</mi>
                            <mo>+</mo>
                            <mn>2</mn>
                        </mrow>
                    </mfenced>
                </mrow>
                <mrow>
                    <mn>2</mn>
                </mrow>
            </msup>
            <mo>-</mo>
            <mn>5</mn>
        </math>
        <br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
            <mi>f</mi>
            <mfenced separators="|">
                <mrow>
                    <mi>x</mi>
                </mrow>
            </mfenced>
            <mo>=</mo>
            <mo>-</mo>
            <mn>3</mn>
            <mo>(</mo>
            <msup>
                <mrow>
                    <mi>x</mi>
                </mrow>
                <mrow>
                    <mn>2</mn>
                </mrow>
            </msup>
            <mo>+</mo>
            <mn>4</mn>
            <mi>x</mi>
            <mo>+</mo>
            <mn>4</mn>
            <mo>)</mo>
            <mo>-</mo>
            <mn>5</mn>
        </math>
        <br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
            <mi>f</mi>
            <mfenced separators="|">
                <mrow>
                    <mi>x</mi>
                </mrow>
            </mfenced>
            <mo>=</mo>
            <mo>-</mo>
            <mn>3</mn>
            <msup>
                <mrow>
                    <mi>x</mi>
                </mrow>
                <mrow>
                    <mn>2</mn>
                </mrow>
            </msup>
            <mo>-</mo>
            <mn>12</mn>
            <mi>x</mi>
            <mo>-</mo>
            <mn>12</mn>
            <mo>-</mo>
            <mn>5</mn>
        </math>
        <br>
        <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
            <mi>f</mi>
            <mfenced separators="|">
                <mrow>
                    <mi>x</mi>
                </mrow>
            </mfenced>
            <mo>=</mo>
            <mo>-</mo>
            <mn>3</mn>
            <msup>
                <mrow>
                    <mi>x</mi>
                </mrow>
                <mrow>
                    <mn>2</mn>
                </mrow>
            </msup>
            <mo>-</mo>
            <mn>12</mn>
            <mi>x</mi>
            <mo>-</mo>
            <mn>17</mn>
        </math>


        <br>
        <br>
        <h2 id="orientacion-cuadraticas">Orientación</h2>
        <p>Una función cuadrática al ser graficada puede adoptar 2 formas:</p>
        <div class="contenedor_funcion_intro">
            <div><img width="100%" src="./images/Progresion12img/img6.png"></div>
            <div>
                <p>La parábola coloreada en azul es convexa, es decir, <i>a</i>> 0<br>
                    En el caso de que <i>a</i>
                    < 0, entonces la parábola será cóncava, tal y como lo es la coloreada en rosado.</p>
            </div>
        </div>
        <br>

        <br>
        <p>Para entender mejor esto, véase el siguiente modelo interactivo; manipula el valor de <i>a</i> y
            comprueba
            que cuando esta variable es
            positiva se obtendrá una parábola convexa (abierta hacia arriba) y cuando es negativa el resultado
            será una cóncava (abierta hacia abajo).</p>
        <iframe loading="eager" src="https://www.geogebra.org/calculator/usppxbz3?embed" width="65%" height="450"
            allowfullscreen style="border: 1px solid #e4e4e4;border-radius: 4px;" frameborder="0"></iframe>
        <br><br>
        <h1 id="funciones-polinomiales">Funciones polinomiales</h1>

        <p>Esta clasificación comprende a las funciones desde el grado 1, sin embargo, para el estudio de la
            progresión se referirá a estas como aquellas que tiene exponente 3 o mayor.</p>
        <br>
        <h2 id="funciones-cubicas">Funciones cúbicas</h2>
        <p>En estas entran las funciones cúbicas, es decir, de grado 3, cuya forma general es la siguiente
            expresión:<math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <mi>f</mi>
                <mo>(</mo>
                <mi>x</mi>
                <mo>)</mo>
                <mo>=</mo>
                <mo>±</mo>
                <mi>a</mi>
                <msup>
                    <mrow>
                        <mi>x</mi>
                    </mrow>
                    <mrow>
                        <mn>3</mn>
                    </mrow>
                </msup>
                <mo>±</mo>
                <mi>b</mi>
                <msup>
                    <mrow>
                        <mi>x</mi>
                    </mrow>
                    <mrow>
                        <mn>2</mn>
                    </mrow>
                </msup>
                <mo>±</mo>
                <mi>c</mi>
                <mi>x</mi>
                <mo>±</mo>
                <mi>d</mi>
            </math></p>
        <br>

        <center>
            <math class="funciones_modelo_interactivo" xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <mi>f</mi>
                <mo>(</mo>
                <mi>x</mi>
                <mo>)</mo>
                <mo>=</mo>
                <mo>±</mo>
                <mi onclick="MostrarDescripciones('acb')" class="element_funcion_interactivo">a</mi>
                <msup class="element_funcion_interactivo" onclick="MostrarDescripciones('x3cb')">
                    <mrow>
                        <mi>x</mi>
                    </mrow>
                    <mrow>
                        <mn>3</mn>
                    </mrow>
                </msup>
                <mo>±</mo>
                <mi class="element_funcion_interactivo" onclick="MostrarDescripciones('bcb')">b</mi>
                <msup class="element_funcion_interactivo" onclick="MostrarDescripciones('x2cb')">
                    <mrow>
                        <mi>x</mi>
                    </mrow>
                    <mrow>
                        <mn>2</mn>
                    </mrow>
                </msup>
                <mo>±</mo>

                <mi class="element_funcion_interactivo" onclick="MostrarDescripciones('ccb')">c</mi>
                <mi class="element_funcion_interactivo" onclick="MostrarDescripciones('x1cb')">x</mi>


                <mo>±</mo>
                <mi class="element_funcion_interactivo" onclick="MostrarDescripciones('dcb')">d</mi>
            </math>
            <br><br><Br>
            <div>
                <div class="descripcion_funcion_interactiva" id="info_cubica_acb">
                    Es el coeficiente que acompaña a la variable cúbica.
                </div>
                <br>
                <div class="descripcion_funcion_interactiva" id="info_cubica_x3cb">
                    Es la variable cúbica, esto es, elevada a la tercera potencia.
                </div>
                <br>
                <div class="descripcion_funcion_interactiva" id="info_cubica_bcb">
                    Coeficiente del término cuadrático.
                </div>
                <br>
                <div class="descripcion_funcion_interactiva" id="info_cubica_x2cb">
                    Variable cuadrática, es decir, con exponente 2.
                </div>
                <br>
                <div class="descripcion_funcion_interactiva" id="info_cubica_x1cb">
                    Variable lineal, es decir, con exponente 1.
                </div>
                <br>
                <div class="descripcion_funcion_interactiva" id="info_cubica_ccb">
                    Coeficiente del término lineal.
                </div>
                <br>
                <div class="descripcion_funcion_interactiva" id="info_cubica_dcb">
                    Constante, es decir, cualquier número real. Es el término independiente.
                </div>
            </div>
        </center>
        <br>
        <br>

        <p>Asimismo, la gráfica de esta función suele tener forma de sigmoide, es decir, una "S", la cual se
            presenta a continuación:</p>
        <div class="contenedor_funcion_intro">
            <div><img width="45%" src="./images/Progresion12img/img7.png"></div>
            <div>
                <p>No obstante, esta singular forma se va deformando conforme los coeficientes de los términos
                    que
                    forman
                    la función adquieren valor.</p>
            </div>
        </div>
        <br>

        <p>Un ejemplo de esto es el siguiente:</p>
        <img width="45%" src="./images/Progresion12img/img8.png"><br>


        <h2 id="funciones-cuarticas">Funciones cuárticas</h2>
        <p>El siguiente exponente es el 4, estas son las denominadas funciones cuárticas y su forma general
            es
            la
            siguiente:<math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <mi>f</mi>
                <mo>(</mo>
                <mi>x</mi>
                <mo>)</mo>
                <mo>=</mo>
                <mo>±</mo>
                <mi>a</mi>
                <msup>
                    <mrow>
                        <mi>x</mi>
                    </mrow>
                    <mrow>
                        <mn>4</mn>
                    </mrow>
                </msup>
                <mo>±</mo>
                <mi>b</mi>
                <msup>
                    <mrow>
                        <mi>x</mi>
                    </mrow>
                    <mrow>
                        <mn>3</mn>
                    </mrow>
                </msup>
                <mo>±</mo>
                <mi>c</mi>
                <msup>
                    <mrow>
                        <mi>x</mi>
                    </mrow>
                    <mrow>
                        <mn>2</mn>
                    </mrow>
                </msup>
                <mo>±</mo>
                <mi>d</mi>
                <mi>x</mi>
                <mo>±</mo>
                <mi>e</mi>
            </math></p>
        <br>

        <center>
            <math class="funciones_modelo_interactivo" xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <mi>f</mi>
                <mo>(</mo>
                <mi>x</mi>
                <mo>)</mo>
                <mo>=</mo>
                <mo>±</mo>
                <mi onclick="MostrarDescripciones('act')" class="element_funcion_interactivo">a</mi>
                <msup onclick="MostrarDescripciones('x4ct')" class="element_funcion_interactivo">
                    <mrow>
                        <mi>x</mi>
                    </mrow>
                    <mrow>
                        <mn>4</mn>
                    </mrow>
                </msup>
                <mo>±</mo>
                <mi onclick="MostrarDescripciones('bct')" class="element_funcion_interactivo">b</mi>
                <msup onclick="MostrarDescripciones('x3ct')" class="element_funcion_interactivo">
                    <mrow>
                        <mi>x</mi>
                    </mrow>
                    <mrow>
                        <mn>3</mn>
                    </mrow>
                </msup>
                <mo>±</mo>
                <mi onclick="MostrarDescripciones('cct')" class="element_funcion_interactivo">c</mi>
                <msup onclick="MostrarDescripciones('x2ct')" class="element_funcion_interactivo">
                    <mrow>
                        <mi>x</mi>
                    </mrow>
                    <mrow>
                        <mn>2</mn>
                    </mrow>
                </msup>
                <mo>±</mo>
                <mi onclick="MostrarDescripciones('dct')" class="element_funcion_interactivo">d</mi>
                <mi onclick="MostrarDescripciones('x1ct')" class="element_funcion_interactivo">x</mi>
                <mo>±</mo>
                <mi onclick="MostrarDescripciones('e')" class="element_funcion_interactivo">e</mi>
            </math>
            <br><br><Br>
            <div>
                <div class="descripcion_funcion_interactiva" id="info_cuartica_act">
                    Es el coeficiente del término cuártico.
                </div>
                <br>
                <div class="descripcion_funcion_interactiva" id="info_cuartica_x4ct">
                    Es la variable cuártica, esto es, elevada a la cuarta potencia.
                </div>
                <br>
                <div class="descripcion_funcion_interactiva" id="info_cuartica_bct">
                    Coeficiente del término cúbico.
                </div>
                <br>
                <div class="descripcion_funcion_interactiva" id="info_cuartica_x3ct">
                    Variable cúbica, es decir, con exponente 3.
                </div>
                <br>
                <div class="descripcion_funcion_interactiva" id="info_cuartica_cct">
                    Es el coeficiente del término cuadrático.
                </div>
                <br>
                <div class="descripcion_funcion_interactiva" id="info_cuartica_x2ct">
                    Es la variable cuadrada, esto es, elevada a la segunda potencia.
                </div>
                <br>
                <div class="descripcion_funcion_interactiva" id="info_cuartica_dct">
                    Coeficiente del término lineal.
                </div>
                <br>
                <div class="descripcion_funcion_interactiva" id="info_cuartica_x1ct">
                    Término lineal.
                </div>
                <br>

                <div class="descripcion_funcion_interactiva" id="info_cuartica_e">
                    Constante, es decir, cualquier número real. Término independiente.
                </div>
            </div>
        </center>
        <br>

        <p>Si se toma la función <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <mi>f</mi>
                <mo>(</mo>
                <mi>x</mi>
                <mo>)</mo>
                <mo>=</mo>
                <msup>
                    <mrow>
                        <mi>x</mi>
                    </mrow>
                    <mrow>
                        <mn>4</mn>
                    </mrow>
                </msup>
            </math></p>
        Su modelo gráfico quedaría como el que se muestra a continuación:
        <img width="45%" src="./images/Progresion12img/img9.png" height="300px"><br>
        Estas funciones suelen adoptar una forma de "w", aunque la función más sencilla de esta
        clasificación no lo permita ver, la siguiente sí que lo hará.
        </p>

        <img width="45%" src="./images/Progresion12img/img10.png" height="300px"><br>

        <p>Podríamos seguir analizando cómo cambian las funciones dependiendo de su exponente, pero jamás
            acabaríamos. Si te interesa, puedes manipular el siguiente modelo a fin de checar las múltiples
            formas
            que una función puede tomar al momento de ser graficada.</p>
        <iframe loading="eager" src="https://www.geogebra.org/calculator/pbbwwtyx?embed" width="800" height="600"
            allowfullscreen style="border: 1px solid #e4e4e4;border-radius: 4px;" frameborder="0"></iframe><br><br>



        <div class="imgejercicios">
            <div>
                <img id="p12-ejercicios" src="images/Ejercicios.png" width=180px height=auto
                    style="margin-right: 20px;">
            </div>
            <div id="ejercicios-p12">
                <h1>Ejercicios</h1><br>
            </div>
        </div>

        1. Responde correctamente las siguientes preguntas.

        <form method="post" id="p12e1">



            a)Según la gráfica que se muestra a continuación, la función es...<br>
            <div class="progresion12_AcomodarRespuestas">
                <div>
                    <img src="images/Progresion12img/img11.png" width="200px" height="200px">
                </div>
                <div>
                    <input type="radio" name="p12e1r1" id="p12e1r1a1" value="1">
                    <label for="p12e1r1a1">Lineal</label><br>
                    <input type="radio" name="p12e1r1" id="p12e1r1a2" value="2">
                    <label for="p12e1r1a2">Cuadrática</label><br>
                    <input type="radio" name="p12e1r1" id="p12e1r1a3" value="3">
                    <label for="p12e1r1a3">Cúbica</label><br>
                </div>
            </div>


            <br>
            b)Según la gráfica que se muestra a continuación, la función es...<br>
            <div class="progresion12_AcomodarRespuestas">
                <div><img src="images/Progresion12img/img12.png" width="200px" height="350px"><br></div>
                <div><input type="radio" name="p12e1r2" id="p12e1r2a1" value="1">
                    <label for="p12e1r1a1">Cúbica</label><br>
                    <input type="radio" name="p12e1r2" id="p12e1r2a2" value="3">
                    <label for="p12e1r1a2">Lineal</label><br>
                    <input type="radio" name="p12e1r2" id="p12e1r2a3" value="2">
                    <label for="p12e1r1a3">Cuadrática</label><br>
                </div>
            </div>


            <br>
            c)Según la siguiente función <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <mi>f</mi>
                <mfenced separators="|">
                    <mrow>
                        <mi>(t)</mi>
                    </mrow>
                </mfenced>
                <mo>=</mo>
                <mn>7</mn>
                <mi>t</mi>
            </math>, es ¿Creciente o decreciente?<br>
            <input type="radio" name="p12e1r3" id="p12e1r3a1" value="2">
            <label for="p12e1r3a1">Creciente</label><br>
            <input type="radio" name="p12e1r3" id="p12e1r3a2" value="3">
            <label for="p12e1r3a2">Ninguna</label><br>
            <input type="radio" name="p12e1r3" id="p12e1r3a3" value="1">
            <label for="p12e1r3a3">Decreciente</label><br>
            <br>
            d)Según la siguiente función <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <mi>f</mi>
                <mfenced separators="|">
                    <mrow>
                        <mi>(t)</mi>
                    </mrow>
                </mfenced>
                <mo>=</mo>
                <mfrac>
                    <mrow>
                        <mn>2</mn>
                    </mrow>
                    <mrow>
                        <mn>5</mn>
                    </mrow>
                </mfrac>
                <mi>t</mi>
                <mo>-</mo>
                <mn>8</mn>
            </math>, es ¿Creciente o decreciente?<br>
            <input type="radio" name="p12e1r4" id="p12e1r4a1" value="1">
            <label for="p12e1r4a1">Decreciente</label><br>
            <input type="radio" name="p12e1r4" id="p12e1r4a2" value="2">
            <label for="p12e1r4a2">Creciente</label><br>
            <input type="radio" name="p12e1r4" id="p12e1r4a3" value="3">
            <label for="p12e1r4a3">Ninguna</label><br>
            <br>
            e)Según la siguiente función <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <mi>f</mi>
                <mfenced separators="|">
                    <mrow>
                        <mi>(t)</mi>
                    </mrow>
                </mfenced>
                <mo>=</mo>
                <mo>-</mo>
                <mi>t</mi>
            </math>, es ¿Creciente o decreciente?<br>
            <input type="radio" name="p12e1r5" id="p12e1r5a1" value="3">
            <label for="p12e1r5a1">Ninguna</label><br>
            <input type="radio" name="p12e1r5" id="p12e1r5a2" value="1">
            <label for="p12e1r5a2">Creciente</label><br>
            <input type="radio" name="p12e1r5" id="p12e1r5a3" value="2">
            <label for="p12e1r5a3">Decreciente</label><br>
            <br>
            f)Selecciona la gáfica que corresponde a la siguiente función <math
                xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <mi>h</mi>
                <mfenced separators="|">
                    <mrow>
                        <mi>(x)</mi>
                    </mrow>
                </mfenced>
                <mo>=</mo>
                <mn>5</mn>
                <msup>
                    <mrow>
                        <mi>x</mi>
                    </mrow>
                    <mrow>
                        <mn>4</mn>
                    </mrow>
                </msup>
                <mo>+</mo>
                <mn>15</mn>
                <msup>
                    <mrow>
                        <mi>x</mi>
                    </mrow>
                    <mrow>
                        <mn>3</mn>
                    </mrow>
                </msup>
                <mo>+</mo>
                <mn>6</mn>
                <msup>
                    <mrow>
                        <mi>x</mi>
                    </mrow>
                    <mrow>
                        <mn>2</mn>
                    </mrow>
                </msup>
                <mo>-</mo>
                <mn>6</mn>
                <mi>x</mi>
                <mo>-</mo>
                <mn>4</mn>
            </math><br>
            <div class="progresion12_AcomodarRespuestas">
                <div><input type="radio" name="p12e1r6" id="p12e1r6a1" value="2">
                    <label for="p12e1r6a1"><img src="images/Progresion12img/img14.png" width="100%"></label><br>
                </div>
                <div> <input type="radio" name="p12e1r6" id="p12e1r6a2" value="2">
                    <label for="p12e1r6a2"><img src="images/Progresion12img/img15.png" width="100%"></label><br>
                </div>
                <div><input type="radio" name="p12e1r6" id="p12e1r6a3" value="1">
                    <label for="p12e1r6a3"><img src="images/Progresion12img/img13.png" width="100%"></label><br>
                </div>



            </div>

            <br>
            g)Selecciona la gáfica que corresponde a la siguiente función <math
                xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <mi>r</mi>
                <mfenced separators="|">
                    <mrow>
                        <mi>(x)</mi>
                    </mrow>
                </mfenced>
                <mo>=</mo>
                <mn>2</mn>
                <msup>
                    <mrow>
                        <mi>x</mi>
                    </mrow>
                    <mrow>
                        <mn>2</mn>
                    </mrow>
                </msup>
            </math><br>
            <Div class="progresion12_AcomodarRespuestas">
                <div><input type="radio" name="p12e1r7" id="p12e1r7a1" value="2">
                    <label for="p12e1r7a1"><img src="images/Progresion12img/img18.png" width="97%"></label><br>
                </div>
                <div><input type="radio" name="p12e1r7" id="p12e1r7a2" value="1">
                    <label for="p12e1r7a2"><img src="images/Progresion12img/img16.png" width="97%"></label><br>
                </div>
                <div><input type="radio" name="p12e1r7" id="p12e1r7a3" value="2">
                    <label for="p12e1r7a3"><img src="images/Progresion12img/img17.png" width="97%"></label><br>
                </div>
            </Div>



            <br>
            h)Selecciona la gáfica que corresponde a la siguiente función <math
                xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <mi>w</mi>
                <mfenced separators="|">
                    <mrow>
                        <mi>(x)</mi>
                    </mrow>
                </mfenced>
                <mo>=</mo>
                <mn>5</mn>
                <mi>x</mi>
                <mo>-</mo>
                <mn>2</mn>
            </math><br>
            <Div class="progresion12_AcomodarRespuestas">
                <div><input type="radio" name="p12e1r8" id="p12e1r8a1" value="2">
                    <label for="p12e1r8a1"><img src="images/Progresion12img/img20.png" width="97%"></label><br>
                </div>
                <div><input type="radio" name="p12e1r8" id="p12e1r8a2" value="2">
                    <label for="p12e1r8a2"><img src="images/Progresion12img/img21.png" width="97%"></label><br>
                </div>
                <div><input type="radio" name="p12e1r8" id="p12e1r8a3" value="1">
                    <label for="p12e1r8a3"><img src="images/Progresion12img/img19.png" width="97%"></label><br>
                </div>
            </Div>




            <br>
            i)Por la siguiente función <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <mi>f</mi>
                <mfenced separators="|">
                    <mrow>
                        <mi>(x)</mi>
                    </mrow>
                </mfenced>
                <mo>=</mo>
                <mo>-</mo>
                <mi>x</mi>
                <mo>(</mo>
                <mo>-</mo>
                <mi>x</mi>
                <mo>+</mo>
                <mn>2</mn>
                <mo>)</mo>
            </math>, su parábola será... <br>
            <input type="radio" name="p12e1r9" id="p12e1r9a1" value="2">
            <label for="p12e1r9a1">Ninguna</label><br>
            <input type="radio" name="p12e1r9" id="p12e1r9a2" value="1">
            <label for="p12e1r9a2">Cóncava</label><br>
            <input type="radio" name="p12e1r9" id="p12e1r9a3" value="3">
            <label for="p12e1r9a3">Convexa</label><br>
            <br>
            j) Por la siguiente función <math xmlns:mml="http://www.w3.org/1998/Math/MathML"
                xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math">
                <mi>f</mi>
                <mfenced separators="|">
                    <mrow>
                        <mi>(x)</mi>
                    </mrow>
                </mfenced>
                <mo>=</mo>
                <mn>8</mn>
                <mi>x</mi>
                <mo>-</mo>
                <mi> </mi>
                <mfrac>
                    <mrow>
                        <mn>1</mn>
                    </mrow>
                    <mrow>
                        <mn>4</mn>
                    </mrow>
                </mfrac>
            </math>, su parábola será... <br>
            <input type="radio" name="p12e1r10" id="p12e1r10a1" value="1">
            <label for="p12e1r1pa1">Cóncava</label><br>
            <input type="radio" name="p12e1r10" id="p12e1r10a2" value="2">
            <label for="p12e1r10a2">Ninguna</label><br>
            <input type="radio" name="p12e1r10" id="p12e1r10a3" value="3">
            <label for="p12e1r10a3">Convexa</label><br>

            <button type="submit" class="botonesrevisar" id="P6E4REV" name="P6E4REV"></button>
            <input type="reset" value="" class="botonesreintentar">
        </form>




        <h1>Resumen</h1>
        <img src="images/Progresion12img/img22.png" width="90%">

    </section>

    <div id="fot">
        <?php include('footer.php'); ?>
    </div>

</body>

</html>