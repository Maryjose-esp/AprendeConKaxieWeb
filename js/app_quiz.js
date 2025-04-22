const questionNumber = document.querySelector(".question-number");
const questionText = document.querySelector(".question-text");
const optionContainer = document.querySelector(".option-container");
const answerIndicatorContainer = document.querySelector(".answers-indicator");
const homeBox = document.querySelector(".home-box");
const quizBox = document.querySelector(".quiz-box");
const resultBox = document.querySelector(".result-box");

var percentage = 0;
var indicadorBD = 0;

let questionCounter = 0;
let currentQuestion;
let availableQuestions = [];
let availableOptions = [];
let correctAnswers = 0;
let atendidas = 0;
let numero_de_preguntas = 1;
//push the questions into availableQuestions array
function setAvailableQuestions() {
  const totalQuestion = quiz.length;
  for (let i = 0; i < totalQuestion; i++) {
    availableQuestions.push(quiz[i]);
  }
}

//ingresar el numero de pregunta y la pregunta con sus opciones
function getNewQuestion() {
  questionNumber.innerHTML =
    "Pregunta " + (questionCounter + 1) + " de " + (quiz.length - 5); //muestra 10 preguntas
  //set question text
  //obtener una pregunta al azar
  let numerorand = Math.floor(Math.random() * availableQuestions.length); //obtiene un index al azar
  const questionIndex = availableQuestions[numerorand];
  console.log(numerorand);
  currentQuestion = questionIndex;

  questionText.innerHTML = currentQuestion.q;
  let aux_ind = "";
  aux_ind = questionIndex.id_im;
  // console.log(aux_ind);

  if ((aux_ind >= 8 && aux_ind <= 15) && numberOfProgresion == "9") {
    const eval_img = document.createElement("img");
    eval_img.src = "./evaluacionesimg/p9/" + questionIndex.img_name;
    eval_img.id = "tamanos_eval";
    questionText.appendChild(eval_img);
  }else if((numberOfProgresion == "12") && (aux_ind >= 10 && aux_ind <= 13)){
    const eval_img = document.createElement("img");
    eval_img.src = "./evaluacionesimg/p12/" + questionIndex.img_name;
    eval_img.id = "tamanos_eval2";
    questionText.appendChild(eval_img);

  }else if((numberOfProgresion == "11") && ((aux_ind >= 3 && aux_ind <= 12))){
    const eval_img = document.createElement("img");
    if(aux_ind == 3){
      eval_img.src = "./evaluacionesimg/p11/" + questionIndex.img_name;
      eval_img.id = "tamanos_eval";
      questionText.appendChild(eval_img);
    }else if(aux_ind >= 6 && aux_ind <= 12){
      eval_img.src = "./evaluacionesimg/p11/" + questionIndex.img_name;
      eval_img.id = "tamanos_eval";
      questionText.appendChild(eval_img);
    }
    
    
  }
  // if ((numerorand >= 7) && (numerorand <= 13)){
  //     const eval_img = document.createElement('img');

  //     eval_img.src = './evaluacionesimg/p9/c' + aux_ind.toString() + '.png';

  //     console.log(eval_img.src);
  //     questionText.appendChild(eval_img);
  // }
  //  let indexado = questionText.findIndex();
  // console.log(questionIndex);
  // if((questionIndex >= 7) && (questionIndex <= 14)){
  //     const eval_img = createElement("img");
  //     let aux = questionIndex + 1;
  //     eval_img.src = 'evaluacionesimg/p9/c' + aux.toString() + '.png';
  //     console.log(aux);
  //     eval_img.width = '75%';
  //     questionText.appendChild(eval_img);
  // }

  //obtener la posicion de 'questionIndex' del array availableQuestions
  const index1 = availableQuestions.indexOf(questionIndex);
  //remover el 'questionIndex' del array availableQuestions, esto hace que no se repita dicha pregunta
  availableQuestions.splice(index1, 1);
  //anadir las opciones
  //obtener el tamano del array opciones
  const optionLen = currentQuestion.option.length;
  //push options into AvailableOptions array
  for (let i = 0; i < optionLen; i++) {
    availableOptions.push(i);
  }

  optionContainer.innerHTML = "";
  let animationDelay = 0.15;

  //crear opciones en el html
  for (let i = 0; i < optionLen; i++) {
    //random option
    const optonIndex =
      availableOptions[Math.floor(Math.random() * availableOptions.length)];
    //obtener la posicion de opton index de availableOptions
    const index2 = availableOptions.indexOf(optonIndex);
    //quitar la posicion de opton index de availableOptions, ya no se repetira
    availableOptions.splice(index2, 1);
    const option = document.createElement("div");
    option.innerHTML = currentQuestion.option[optonIndex];
    option.id = optonIndex;
    option.style.animationDelay = animationDelay + "s";
    animationDelay = animationDelay + 0.15;
    option.className = "option";
    optionContainer.appendChild(option);
    option.setAttribute("onclick", "getResult(this)");
  }

  questionCounter++;
}

//determinar que opcion fue seleccionada
function getResult(element) {
  const id = parseInt(element.id);
  //obtener la respuesta comprando el id de la opcion que ha sido clickeada
  if (id === currentQuestion.answer) {
    //poner color verde si la respuesta es correcta
    element.classList.add("correct_quizO");
    updateAnswerIndicator("correct");
    correctAnswers++;
    //unclickableOptions();
    //anadir el indicador de respuesta correctas
  } else {
    //poner color rojo si la respuesta es incorrecta
    element.classList.add("wrong_quizO");
    updateAnswerIndicator("wrong");
    //si la respuesta es incorrecta mostrara la opcion correcta
    const optionLen = optionContainer.children.length;
    for (let i = 0; i < optionLen; i++) {
      if (parseInt(optionContainer.children[i].id) === currentQuestion.answer) {
        optionContainer.children[i].classList.add("correct_quizO");
        // unclickableOptions();
      }
    }
  }
  atendidas++;
  unclickableOptions();
}
//hacer que todas las opciones no se puedan seleccionar una vez que el usuario seleccione una opcion
function unclickableOptions() {
  const optionLen = optionContainer.children.length;
  for (let i = 0; i < optionLen; i++) {
    optionContainer.children[i].classList.add("already-answered");
  }
}

function answerIndicator() {
  answerIndicatorContainer.innerHTML = "";
  const totalQuestion = quiz.length - 5;
  for (let i = 0; i < totalQuestion; i++) {
    const indicator = document.createElement("div");
    answerIndicatorContainer.appendChild(indicator);
  }
}

function updateAnswerIndicator(markType) {
  answerIndicatorContainer.children[questionCounter - 1].classList.add(
    markType
  );
}

function next() {
  if (questionCounter === quiz.length - 5) {
    quizOver();
  } else {
    if (questionCounter === quiz.length - 6) {
        const buttonNext = document.getElementById("btn_evaluacion_iniciar");
        buttonNext.innerHTML = "Finalizar";
    }
    getNewQuestion();
  }
}

function quizOver() {
  //ocultar el quizbox
  quizBox.classList.add("hide");
  //mostrar resultBox
  resultBox.classList.remove("hide");

  quizResult();
  
}

function pasaraphp(porcentaje, numberP) {
  var parametros = {
    calife: porcentaje,
    numprogresion: numberP,
  };

  $.ajax({
    data: parametros,
    url: "ajax_funcionEval.php",
    type: "POST",
    dataType: "text",
    success: function (data) {
      console.log(data);
    },
    error: function (error) {
      console.log(error);
    },
    async: true,
  });
}

function quizResult() {
  resultBox.querySelector(".total-question").innerHTML = quiz.length - 5;
  resultBox.querySelector(".total-attempt").innerHTML = atendidas;
  resultBox.querySelector(".total-correct").innerHTML = correctAnswers;
  resultBox.querySelector(".total-wrong").innerHTML =
    atendidas - correctAnswers;
  percentage = correctAnswers; //le movi a const
  resultBox.querySelector(".total-porcentage").innerHTML =
    percentage;
  resultBox.querySelector(".total-score").innerHTML = correctAnswers + " / 10";
  pasaraphp(percentage, numberOfProgresion);
}

function resetQuiz() {
  questionCounter = 0;
  correctAnswers = 0;
  atendidas = 0;
}
function tryAgainQuiz() {
  //ocultar resultados
  //resultBox.classList.add("hide");
  //mostrar quizbox
  //quizBox.classList.remove("hide");
  location.reload();
  // resetQuiz();
  // startQuiz();
  
}

function retroalimentacion() {
  //ocultar result box
  resultBox.classList.add("hide");
  //mostrar homebox
  homeBox.classList.remove("hide");
  resetQuiz();
}

//starting pointing
function startQuiz() {
  //ocultar el homebox
  homeBox.classList.add("hide");
  //mostrar quizbox
  quizBox.classList.remove("hide");
  //primero meteremos todas las preguntas en el array availableQuestions
  setAvailableQuestions();
  //despues, llamaremos a la funcion getNewQuestion()
  getNewQuestion();
  //para crear el indicador de respuestas
  answerIndicator();
}

window.onload = function () {
  homeBox.querySelector(".total-question").innerHTML = quiz.length - 5;
};

//función para desactivar el botón de retroalimentación en el primer intento
function DisplayR(NP){
  var parametros = {
    numP : NP,
  }

  $.ajax({
    data: parametros,
    url: "FuncionesFueraIS.php",
    type: "POST",
    dataType: "text",
    success: On_success,
    async: true,
  });

  function On_success(response) {
    if(response == 0){
      const btnRETRO = document.getElementById(btnRetroAlem);
      btnRETRO.style.display = 'none';
    }
  }
}
