//ARRAY DE OBJETOS
const quiz = [
    {//cada corchete separa las preguntas
        q: '¿Qué teorema representa esta imagen? <br> <center><img src="./../evaluacionesimg/p10/c1p10.png" WIDTH="80%"></center>', //pregunta
        option: ['Teorema de Napoleón', 'Teorema de pitágoras', 'Teorema de Euclides', 'Teorema de Jha Savaran'], //array con las opciones
        answer: 0, //opcion correcta, se refiere a la posicion de la respuesta en el array, partiendo de 0
        img_name: ''
    },
    {
        q: '¿Por qué se le conoce como teorema de Napoleón?',
        option: ['Por una mención en un periodico', 'Porque él hizo una gran contribución a este enigma', 'Porque él lo creó', 'Porque gracias a él fue que se descubrió tal cuestión'],
        answer: 0
    },
    {
        q: '¿Qué es una homotecia?',
        option: ['Ampliación', 'Ensanche', 'Agrandamiento', 'Aumento'],
        answer: 0
    },
    {
        q: '¿Cuál es el tipo de triángulo que se utiliza en el teorema de Napoleón?',
        option: ['Equilátero', 'Escaleno', 'Isósceles', 'Uno de cada uno'],
        answer: 0
    },
    {
        q: '¿Cuál es el criterio mostrado en la siguiente imagen? <br> <center><img src="./../evaluacionesimg/p10/c5p10.png" WIDTH="80%"></center>',
        option: ['Criterio de semejanza LLL', 'Criterio de congruencia ALA', 'Criterio de semejanza AA', 'Criterio de congruencia LAL'],
        answer: 0
    },
    {
        q: '¿Cuál es el criterio de la siguiente imagen? <br> <center><img src="./../evaluacionesimg/p10/c6p10.png" WIDTH="80%"></center>',
        option: ['Criterio de congruencia ALA', 'Criterio de semejanza AA', 'Criterio de semejanza LLL', 'Criterio de congruencia LAL'],
        answer: 0
    },
    {
        q: '¿Cuál es el criterio de la siguiente imagen? <br> <center><img src="./../evaluacionesimg/p10/c7p10.png" WIDTH="80%"></center>',
        option: ['Criterio de congruencia LLL', 'Criterio de semejanza LLL', 'Criterio de semejanza LAL', 'Criterio de congruencia LAL'],
        answer: 0
    },
    {
        q: '¿Cuál es el criterio mostrado en la siguiente imagen? <br> <center><img src="./../evaluacionesimg/p10/c8p10.png" WIDTH="80%"></center>',
        option: ['Criterio de semejanza AA', 'Criterio de congruencia LAL', 'Criterio de congruencia ALA', 'Criterio de congruencia LLL'],
        answer: 0
    },
    {
        q: 'Cuáles son las medidas para crear una figura congruente del triángulo mostrado en la siguiente imagen. <br> <center><img src="./../evaluacionesimg/p10/c9p10.png" WIDTH="80%"></center>',
        option: ['Un lado de 7.45, uno de 7.81  y un ángulo de 61.26°', 'Aumento de 2 a un lado y la misma inclinación de los ángulos en este', 'Aumenta el tamaño de dos lados en 3 con el ángulo igual entre estos', 'Mantén la misma distancia de dos lados y modifica los ángulos'],
        answer: 0
    },
    {
        q: 'Para crear un triángulo semejante de la siguiente imagen, ¿qué medidas son las correctas? <br> <center><img src="./../evaluacionesimg/p10/c10p10.png" WIDTH="80%"></center>',
        option: ['Ángulo de 45°, lado 1 de 10 y lado 2 de 7.66', 'Ángulo de 45°, lado 1 de 8 y lado 2 de 5.66', 'Lado 1 de 15, lado 2 de 12.66 y lado 3 de 10.66', 'Ángulo 1 de 45° y ángulo 2 de 45°, lado 1 de 8'],
        answer: 0
    },
    {
        q: '¿Qué es semejanza?',
        option: ['Es la similitud entre figuras, misma forma y distinto tamaño', 'Es la igualdad entre dos cuerpos', 'Es la igualdad entre una parte de dos o más figuras', 'Es la similitud con una figura de mismo tamaño pero ángulos distintos'],
        answer: 0
    },
    {
        q: '¿Qué es la congruencia?',
        option: ['Es la igualdad entre dos o más figuras', 'Que las oraciones tengan sentido al conversar', 'Que se mantenga una similitud entre figuras', 'Es la igualdad entre algunas partes de dos o más figuras'],
        answer: 0
    },
    {
        q: 'Los triángulos mostrados en esta imagen son… <br> <center><img src="./../evaluacionesimg/p10/c13p10.png" WIDTH="80%"></center>',
        option: ['Congruentes', 'Semejantes', 'Similares', 'Iguales'],
        answer: 0
    },
    {
        q: 'Los triángulos mostrados en esta imagen son…  <br> <center><img src="./../evaluacionesimg/p10/c14p10.png" WIDTH="80%"></center>',
        option: ['Semejantes', 'Congruentes', 'Parecidos', 'Idénticos'],
        answer: 0
    },
    {
        q: 'Con qué medidas se hace un triángulo congruente y uno semejante del siguiente: <br> <center><img src="./../evaluacionesimg/p10/c15p10.png" WIDTH="80%"></center>',
        option: ['Semejante:sumar o restar x medida en dos lados y mantener un ángulo; congruente: lado, ángulo y lado iguales', 'Semejante: mantener las medidas de cada lado ; congruente: aumento de 1.80 en cada lado', 'Semejante: mantener un lado y los ángulos; congruente: mantener los ángulos de la figura y sus lados', 'Semejante: Dibujar una ampliación en dos ángulos; congruente: ángulo, lado y ángulo iguales'],
        answer: 0
    }

];
var numberOfProgresion = "10";