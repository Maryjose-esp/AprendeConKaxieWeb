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

    <script>
        var IndicadorBDJS = <?php echo $indicador_bd;?>
    </script>

    <main id="main_container_evaluac">

        <section>


            <aside class="aside_evaluaciones activar" id="aside_evaluaciones">

                <div class="headAsi">
                    <div class="logotipo">
                        <center><img src="images/Kevaluacion.png" width="70%"></center>
                    </div>
                </div>



                <div class="options">
                    <a href="evaluacion1.php"><i class="fa-solid fa-1"></i><span class = "spanE">Evaluación 1</span></a>
                    <a href="evaluacion2.php"><i class="fa-solid fa-2"></i><span class = "spanE">Evaluación 2</span></a>
                    <a href="evaluacion3.php"><i class="fa-solid fa-3"></i><span class = "spanE">Evaluación 3</span></a>
                    <a href="evaluacion4.php"><i class="fa-solid fa-4"></i><span class = "spanE">Evaluación 4</span></a>
                    <a href="evaluacion5.php"><i class="fa-solid fa-5"></i><span class = "spanE">Evaluación 5</span></a>
                    <a href="evaluacion6.php"><i class="fa-solid fa-6"></i><span class = "spanE">Evaluación 6</span></a>
                    <a href="evaluacion7.php"><i class="fa-solid fa-7"></i><span class = "spanE">Evaluación 7</span></a>
                    <a href="evaluacion8.php"><i class="fa-solid fa-8"></i><span class = "spanE">Evaluación 8</span></a>
                    <a href="evaluacion9.php"><i class="fa-solid fa-9"></i><span class = "spanE">Evaluación 9</span></a>
                    <a href="evaluacion10.php"><i class="fa-solid fa-1"></i><i class="fa-solid fa-0"></i><span class = "spanE">Evaluación
                        10</span></a>
                    <a href="evaluacion11.php"><i class="fa-solid fa-1"></i><i class="fa-solid fa-1"></i><span class = "spanE">Evaluación
                        11</span></a>
                    <a href="evaluacion12.php"><i class="fa-solid fa-1"></i><i class="fa-solid fa-2"></i><span class = "spanE">Evaluación
                        12</span></a>
                    <a href="evaluacion13.php"><i class="fa-solid fa-1"></i><i class="fa-solid fa-3"></i><span class = "spanE">Evaluación
                        13</span></a>
                    <a href="evaluacion14.php"><i class="fa-solid fa-1"></i><i class="fa-solid fa-4"></i><span class = "spanE">Evaluación
                        14</span></a>
                </div>


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
                <button type="button" class="btn_evaluacion_iniciar" id = "btnRetroAlem" onclick="retroalimentacion()">Retroalimentación</button>
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