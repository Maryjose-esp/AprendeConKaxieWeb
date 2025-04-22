<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style4.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link rel="icon" href="images/logo.ico" type="image/x-icon">
    <script src="js/jquery-3.7.1.min.js"></script>
    <title>Evaluacion</title>
</head>

<body id="evaluacionContainer">

    <?php
    require('ifSession.php');
    ?>
    <main id="main_container_evaluac">

        <section>
            
            <div class="toggle">
            <input type="checkbox" id="ocultarMostrarSB">
            <i class="fa-solid fa-bars"></i>
            </div>
            <aside class="aside_evaluaciones">

                <center><img src="images/Kevaluacion.png" width="70%"></center>
                <a href="evaluacion1.php">Evaluación 1</a><br>
                <a href="evaluacion2.php">Evaluación 2</a><br>
                <a href="evaluacion3.php">Evaluación 3</a><br>
                <a href="evaluacion4.php">Evaluación 4</a><br>
                <a href="evaluacion5.php">Evaluación 5</a><br>
                <a href="evaluacion6.php">Evaluación 6</a><br>
                <a href="evaluacion7.php">Evaluación 7</a><br>
                <a href="evaluacion8.php">Evaluación 8</a><br>
                <a href="evaluacion9.php">Evaluación 9</a><br>
                <a href="evaluacion10.php">Evaluación 10</a><br>
                <a href="evaluacion11.php">Evaluación 11</a><br>
                <a href="evaluacion12.php">Evaluación 12</a><br>
                <a href="evaluacion13.php">Evaluación 13</a><br>
                <a href="evaluacion14.php">Evaluación 14</a><br>
            </aside>
        </section>
        <section class="section_evaluacion">
            <br>
            <center>
                <h1 id="encabezadoEval"></h1>
            </center>
            <div class="home-box custom-box">
                <h3>Instrucciones</h3>
                <p>Total de preguntas: <span class="total-question"></span></p>
                <p>No podrás regresar a la pregunta anterior, por lo cual debes de tomarte el tiempo de analizar
                    cuidadosamente cada reactivo.</p>
                <p>No hay límite de tiempo, así que tómate el tiempo para realizar las operaciones o cálculos
                    necesarios.</p>
                <p>Las preguntas son presentadas al azar en cada intento.</p>
                <p>Al final, podrás ver tus resultados y, en caso de desearlo, una retroalimentación a cada una de las
                    preguntas.</p>
                <button type="button" class="btn_evaluacion_iniciar" onclick="startQuiz()">Iniciar evaluación</button>
            </div>

            <div class="quiz-box custom-box hide">
                <div class="question-number">
                    <!-- Pregunta 1 de 5  -->
                </div>

                <div class="question-text">
                    <!-- Q.1: PREGUNTA 1 -->
                </div>

                <div class="option-container">
                    <!--<div class="option">a</div>
                <div class="option">b</div>
                <div class="option">c</div>
                <div class="option">d</div> -->
                </div>

                <div class="next-question-btn">
                    <button type="button" id="btn_evaluacion_iniciar" class="btn_evaluacion_iniciar"
                        onclick="next()">Siguiente</button>
                </div>

                <div id="answers-indicator" class="answers-indicator">

                </div>

            </div>



            <div class="result-box custom-box hide">
                <h1>Resultados</h1>
                <table>
                    <tr>


                        <td>Total de reactivos</td>
                        <td><span class="total-question"></span></td>
                    </tr>
                    <tr>
                        <td>Respondidas</td>
                        <td><span class="total-attempt"></span></td>
                    </tr>
                    <tr>
                        <td>Aciertos</td>
                        <td><span class="total-correct"></span></td>
                    </tr>
                    <tr>
                        <td>Incorrectos</td>
                        <td><span class="total-wrong"></span></td>
                    </tr>
                    <tr>
                        <td>Calificacion</td>
                        <td><span class="total-porcentage"></span></td>
                    </tr>
                    <tr>
                        <td>Puntaje total</td>
                        <td><span class="total-score"></span></td>
                    </tr>
                </table>
                <button type="button" class="btn_evaluacion_iniciar" onclick="tryAgainQuiz()">Intentar de nuevo</button>
                <button type="button" class="btn_evaluacion_iniciar"
                    onclick="retroalimentacion()">Retroalimentación</button>
            </div>

        </section>

        <!-- <script src="js/question.js"></script> -->
        <script src="js/app_quiz.js"></script>
    </main>



    <!-- <div class = "mandar_abajo_evaluac">
     -->
    <!-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> -->
    <div id="footer_anadido"> <?php
    include('footer.php');
    ?></div>
    <!--

</div>  -->


</body>

</html>