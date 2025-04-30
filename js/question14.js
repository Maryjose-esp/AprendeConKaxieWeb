//ARRAY DE OBJETOS
const quiz = [
    {//cada corchete separa las preguntas
        q: '¿Qué es un sistema de ecuaciones?', //pregunta
        option: ['Conjuntos de ecuaciones con mismas incógnitas', 'Ecuaciones lineales', 'Son igualdades matemáticas', 'Ecuaciones de primer grado, las que no contienen potencias o raíces'], //array con las opciones
        answer: 0 //opcion correcta, se refiere a la posicion de la respuesta en el array, partiendo de 0

    },
    {
        q: '¿Qué son las inecuaciones?',
        option: ['Son una diferencia entre ecuaciones', 'Son una igualdad entre ecuaciones', 'Son una diferencia entre ecuaciones porque siempre son menores a cero', 'Son una igualdad entre ecuaciones porque siempre son iguales a cero'],
        answer: 0
    },
    {
        q: 'Resuelve por el método de sustitución:<br> 2x - y = 8 <br> -3x + 7y = -1',
        option: ['x=5; y=2', 'x=-5; y=-2', 'x=2; y=5', 'x=-2; y=-5'],
        answer: 0
    },
    {
        q: 'Mario compró unas papitas y 6 refrescos para una reunión con sus hermanos, pagando 117 pesos en su compra; en cambio Lauren compró 3 bolsas de papitas y 10 refrescos pagando 223 pesos en total. ¿Cuánto costó cada refresco y cada bolsa de papitas?',
        option: ['El refresco costó $16 y la bolsa de papitas $21', 'El refresco costó $21 y la bolsa de papitas $16', 'El refresco costó $16 y la bolsa de papitas $27', 'El refresco costó $20 y la bolsa de papitas $23'],
        answer: 0
    },
    {
        q: 'Resuelve por el método de sustitución.<br> <math style = "font-size: 18px; font-family: arial;"><mfrac><mn>1</mn><mn>4</mn></mfrac></math> x - 2y = -1 <br> -x + 4y = -8',
        option: ['x=20; y=3', 'x=-20; y=-3', 'x=3; y=20', 'x=-3; y=-20'],
        answer: 0
    },
    {
        q: 'Resuelve por el método de igualación <br> 2x - 3y = 13 <br> -3x + 4y = -19',
        option: ['x=5 ; y=-1', 'x=-5 ; y=1', 'x=-1 ; y=5', 'x=1 ; y=-5'],
        answer: 0
    },
    { //<math style = "font-size: 18px; font-family: arial;"><mfrac><mn>x</mn><mn>y</mn></mfrac></math>
        q: 'Resuelve por el método de igualación <br> 3x - <math style = "font-size: 18px; font-family: arial;"><mfrac><mn>1</mn><mn>2</mn></mfrac></math> y = 59 <br> <math style = "font-size: 18px; font-family: arial;"><mfrac><mn>1</mn><mn>4</mn></mfrac></math>x + 2y = 107',
        option: ['x=28 ; y=50', 'x=50 ; y=28', 'x=-28 ; y=50', 'x=50 ; y=-28'],
        answer: 0
    },
    {
        q: 'Resuelve por el método de igualación <br> 3x - 2y = 10 <br> <math style = "font-size: 18px; font-family: arial;"><mfrac><mn>1</mn><mn>2</mn></mfrac></math>x - 3y = -25',
        option: ['x=10 ; y=10', 'x=10 ; y=-10', 'x=-10 ; y=10', 'x=-10 ; y=-10'],
        answer: 0
    },
    {
        q: 'Resuelve por el método de reducción <br> 3x - 3y = -<math style = "font-size: 18px; font-family: arial;"><mfrac><mn>3</mn><mn>4</mn></mfrac></math> <br> 2x + 4y = <math style = "font-size: 18px; font-family: arial;"><mfrac><mn>5</mn><mn>2</mn></mfrac></math>',
        option: ['x=<math style = "font-size: 18px; font-family: arial;"><mfrac><mn>1</mn><mn>4</mn></mfrac></math> ; y=<math style = "font-size: 18px; font-family: arial;"><mfrac><mn>1</mn><mn>2</mn></mfrac></math>', 'x=-<math style = "font-size: 18px; font-family: arial;"><mfrac><mn>1</mn><mn>4</mn></mfrac></math> ; y=-<math style = "font-size: 18px; font-family: arial;"><mfrac><mn>1</mn><mn>2</mn></mfrac></math>', 'x=<math style = "font-size: 18px; font-family: arial;"><mfrac><mn>3</mn><mn>8</mn></mfrac></math> ; y=<math style = "font-size: 18px; font-family: arial;"><mfrac><mn>2</mn><mn>4</mn></mfrac></math>', 'x=<math style = "font-size: 18px; font-family: arial;"><mfrac><mn>2</mn><mn>4</mn></mfrac></math> ; y=<math style = "font-size: 18px; font-family: arial;"><mfrac><mn>1</mn><mn>4</mn></mfrac></math>'],
        answer: 0
    },
    {
        q: 'Resuelve por el método de reducción <br> 3x + 8y = 2 <br> 6x - 4y = <math style = "font-size: 18px; font-family: arial;"><mfrac><mn>3</mn><mn>2</mn></mfrac></math>',
        option: ['x=<math style = "font-size: 18px; font-family: arial;"><mfrac><mn>1</mn><mn>3</mn></mfrac></math> ; y=<math style = "font-size: 18px; font-family: arial;"><mfrac><mn>1</mn><mn>8</mn></mfrac></math>', 'x=<math style = "font-size: 18px; font-family: arial;"><mfrac><mn>1</mn><mn>2</mn></mfrac></math> ; y=-<math style = "font-size: 18px; font-family: arial;"><mfrac><mn>2</mn><mn>16</mn></mfrac></math>', 'x=-<math style = "font-size: 18px; font-family: arial;"><mfrac><mn>2</mn><mn>6</mn></mfrac></math> ; y=<math style = "font-size: 18px; font-family: arial;"><mfrac><mn>1</mn><mn>8</mn></mfrac></math>', 'x=<math style = "font-size: 18px; font-family: arial;"><mfrac><mn>1</mn><mn>8</mn></mfrac></math> ; y=<math style = "font-size: 18px; font-family: arial;"><mfrac><mn>1</mn><mn>3</mn></mfrac></math>'],
        answer: 0
    },
    {
        q: 'Resuelve por el método de reducción <br> 7x + 2y = <math style = "font-size: 18px; font-family: arial;"><mfrac><mn>43</mn><mn>3</mn></mfrac></math> <br> 2x + 3y = <math style = "font-size: 18px; font-family: arial;"><mfrac><mn>9</mn><mn>2</mn></mfrac></math>',
        option: ['x=2 ; y=<math style = "font-size: 18px; font-family: arial;"><mfrac><mn>1</mn><mn>6</mn></mfrac></math>', 'x=<math style = "font-size: 18px; font-family: arial;"><mfrac><mn>1</mn><mn>2</mn></mfrac></math> ; y=<math style = "font-size: 18px; font-family: arial;"><mfrac><mn>2</mn><mn>3</mn></mfrac></math>', 'x=<math style = "font-size: 18px; font-family: arial;"><mfrac><mn>1</mn><mn>3</mn></mfrac></math> ; y=-2', 'x=<math style = "font-size: 18px; font-family: arial;"><mfrac><mn>1</mn><mn>6</mn></mfrac></math> ; y=<math style = "font-size: 18px; font-family: arial;"><mfrac><mn>2</mn><mn>3</mn></mfrac></math>'],
        answer: 0
    },
    {
        q: 'Dada la siguiente inecuación resuelva si su región de solución es su lado inferior o el lado superior y qué punto forma parte de la recta. <br> 3x + 3y < 6',
        option: ['Inferior, uno de los puntos es (1,1)', 'Superior, uno de los puntos es (3,-1)', 'Superior, uno de los puntos es (2,0)', 'Inferior, uno de los puntos es (1,-1)'],
        answer: 0
    },
    {
        q: 'Dada la siguiente inecuación resuelva si su región de solución es su lado inferior o el lado superior y qué punto forma parte de la recta. <br> 2x + 3y < 12',
        option: ['Inferior, uno de los puntos que conforma la recta es (9,-2)', 'Superior, uno de los puntos que conforma la recta es (3,2)', 'Inferior, uno de los puntos que conforma la recta es (2,2)', 'Superior, uno de los puntos que conforma la recta es (6,0)'],
        answer: 0
    },
    {
        q: 'Dada la siguiente inecuación resuelva si su región de solución es su lado inferior o el lado superior y qué punto forma parte de la recta. <br> 4x - 2y > 10',
        option: ['Inferior derecho y uno de los puntos dentro de la recta es (2.5,0)', 'Superior izquierdo y uno de los puntos dentro de la recta es (5.5,6)', 'Inferior derecho y uno de los puntos dentro de la recta es (4,2)', 'Superior izquierdo y uno de los puntos dentro de la recta es (4,3)'],
        answer: 0
    },
    {
        q: 'Dada la siguiente inecuación resuelva si su región de solución es su lado inferior o el lado superior y qué punto forma parte de la recta. <br> 5x - 2y < 20',
        option: ['Lado superior izquierdo, siendo (6,5) uno de los puntos que conforma la recta', 'Lado inferior derecho, siendo (4,0) uno de los puntos que conforma la recta', 'Lado superior izquierdo, siendo (3,-2) uno de los puntos que conforma la recta', 'Lado inferior derecho, siendo (2,-5) uno de los puntos que conforma la recta'],
        answer: 0
    }

];
var numberOfProgresion = "14";