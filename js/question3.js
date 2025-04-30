//ARRAY DE OBJETOS
const quiz = [
    {//cada corchete separa las preguntas
        q: 'Para plantar flores se necesita conocer cuántas serán, hay un total de 5 sacos de diferentes semillas, pero misma cantidad, de los cuales se necesita una cuarta parte de cada uno, por motivo que se desean que sean flores variadas. ¿Cuál sería la expresión algebraica para conseguir la cantidad de flores a plantar?', //pregunta
        option: ['<math style = "font-size: 18px; font-family: arial;"><mn>5  (</mn><mfrac><mn>x</mn><mn>4</mn></mfrac><mn>)</mn></math>', '<math style = "font-size: 18px; font-family: arial;"><mfrac><mn>5</mn><mn>4</mn></mfrac><mn> + x </mn><mn></mn></math>', '<math style = "font-size: 18px; font-family: arial;"><mn>(5x) 4</mn></math>', '<math style = "font-size: 18px; font-family: arial;"><mfrac><mn>5 * 4</mn><mn>x</mn></mfrac></math>'], //array con las opciones
        answer: 0 //opcion correcta, se refiere a la posicion de la respuesta en el array, partiendo de 0

    },
    {
        q: 'La vecina desea comprar una segunda parte del terreno del vecino, el doble de lo que la vecina desea consta de 100 hectáreas, ¿cuántas hectáreas quiere comprar?',
        option: ['50', '100', '200', '75'],
        answer: 0
    },
    {
        q: 'El doble de un número cualquiera',
        option: ['<math style = "font-size: 18px; font-family: arial;"><mn>2d</mn></math>', '<math style = "font-size: 18px; font-family: arial;"><mfrac><mn>d</mn><mn>2</mn></mfrac></math>', 'd<sup>2</sup>', '<math style = "font-size: 18px; font-family: arial;"><mn>2+d</mn></math>'],
        answer: 0
    },
    {
        q: 'Cociente de dos números',
        option: ['<math style = "font-size: 18px; font-family: arial;"><mfrac><mn>x</mn><mn>y</mn></mfrac></math>', '<math style = "font-size: 18px; font-family: arial;"><mn>b-t</mn></math>', '<math style = "font-size: 18px; font-family: arial;"><mn>xy</mn></math>', 'x<sup>2</sup>'],
        answer: 0
    },
    {
        q: 'Producto de un mismo número',
        option: ['x<sup>2</sup>', '<math style = "font-size: 18px; font-family: arial;"><mn>(x+y)</mn></math><sup>2</sup>', '<math style = "font-size: 18px; font-family: arial;"><mn>2x</mn></math>', '<math style = "font-size: 18px; font-family: arial;"><mn>x+x</mn></math>'],
        answer: 0
    },
    {
        q: 'Mariana comenzó a ahorrar a inicios de enero como propósito de año nuevo, comenzando al guardar $50 pesos, lleva un ritmo constante desde el inicio, hasta que llegó a los 20 días, comenzó a sustraer 10 pesos durante 5 días para la compra de materiales de la escuela, para volver a su ritmo anterior, desea recuperar su perdida, ¿cuál es el producto que le da su respuesta?',
        option: ['(10 * 5) 6', '(10 * 5)+(5 * 50)', '50 + 250', '50*5'],
        answer: 0
    },
    {
        q: '¿Qué es el lenguaje natural?',
        option: ['Lenguaje con el cual nos expresamos diariamente', 'El doble de un número', 'Lenguaje de los números positivos', 'Lo que utilizamos en las matemáticas para la resolución de problemas con datos de los cuales desconocemos su valor'],
        answer: 0
    },
    {
        q: '¿Qué es el lenguaje algebraico?',
        option: ['Lenguaje expresado en símbolos y números', 'Traducción al lenguaje que utilizamos día a día', '<math style = "font-size: 18px; font-family: arial;"><mn>2x</mn></math>', 'El doble de la tercera parte de un número cualquiera'],
        answer: 0
    },
    {
        q: 'En una pastelería para calcular rápidamente la cantidad a cobrar, utilizan la fórmula x=15y, donde “y” representa la cantidad de muffins, ¿qué representa el valor 15 en este problema?',
        option: ['Cada muffin cuesta $15', 'Son 15 muffins que cuestan lo mismo que su cantidad', 'Se le cobra al cliente 15 veces la cuenta total', 'Se obtiene el 15% de ganancias en la venta de cada muffin'],
        answer: 0
    },
    {
        q: 'Selecciona la expresión algebraica que represente la adición de un número al resultado del cociente de un número distinto junto al producto de dos números cualesquiera.',
        option: ['<math style = "font-size: 18px; font-family: arial;"><mn>5 + </mn><mfrac><mn>y</mn><mn>ab</mn></mfrac></math>', '<math style = "font-size: 18px; font-family: arial;"><mfrac><mn>x</mn><mn>y</mn></mfrac> <mn> + ab</mn></math>', '<math style = "font-size: 18px; font-family: arial;"><mfrac><mn>xab</mn><mn>y</mn></mfrac></math>', '<math style = "font-size: 18px; font-family: arial;"><mfrac><mn>x + y</mn><mn>ab</mn></mfrac></math>'],
        answer: 0
    },
    {
        q: 'La mitad de un número',
        option: ['<math style = "font-size: 18px; font-family: arial;"><mfrac><mn>1</mn><mn>2</mn></mfrac> <mn> x </mn></math>', '<math style = "font-size: 18px; font-family: arial;"><mn>2x</mn></math>', '<math style = "font-size: 18px; font-family: arial;"><mfrac><mn>x</mn><mn>x</mn></mfrac></math>', 'x<sup>2</sup>'],
        answer: 0
    },
    {
        q: 'El costo del producto de unas chanclas y su precio de 50, da paso a conocer una parte del precio a pagar pues se añadieron tres camisas a la cuenta, ¿cuál expresión muestra lo planteado?',
        option: ['<math style = "font-size: 18px; font-family: arial;"><mn>(50x) + (3y)</mn></math>', '<math style = "font-size: 18px; font-family: arial;"><mn>(50+x) + (3y)</mn></math>', '<math style = "font-size: 18px; font-family: arial;"><mn>(x - 50) + (3 + y)</mn></math>', '<math style = "font-size: 18px; font-family: arial;"><mfrac><mn>x</mn><mn>50</mn></mfrac> <mn> + 30</mn></math>'],
        answer: 0
    },
    {
        q: 'Traduce esta expresión: <math style = "font-size: 18px; font-family: arial;"><mfrac><mn>30p</mn><mn>2q</mn></mfrac> <mn> + </mn> <mfrac><mn>1</mn><mn>2</mn></mfrac> <mn>x</mn>',
        option: [' Cociente del producto de 30 y un número cualquiera junto al doble de un número, se le adhiere la mitad de un número distinto', 'Producto del cociente de 30 y un número cualquiera junto a la mitad del mismo, añadiendo el doble de un número', 'Cociente del producto de 30 y un número cualquiera junto al doble del mismo, se le adhiere el doble del producto total', 'Producto del cociente de 30 y un número cualquiera junto a la mitad de otro, añadiendo la mitad de un número'],
        answer: 0
    },
    {
        q: 'Selecciona la diferencia entre dos números',
        option: ['<math style = "font-size: 18px; font-family: arial;"><mn>x - y </mn></math>', '<math style = "font-size: 18px; font-family: arial;">>mfrac><mn>x</mn><mn>y</mn></mfrac>', '<math style = "font-size: 18px; font-family: arial;"><mn>xy</mn></math>', 'x <sup>y</sup>'],
        answer: 0
    },
    {
        q: 'Joel deseó reinvertir en el doble de su mercancía, presentando el principal problema de que sus clientes con esta nueva cantidad solamente consumían una tercera parte, recordando esto para la próxima compra, ¿cuál es la venta total representada en su cociente?',
        option: ['<math style = "font-size: 18px; font-family: arial;"><mfrac><mn>2x</mn><mn>3</mn></mfrac></math>', '<math style = "font-size: 18px; font-family: arial;"><mn>3 (2x)</mn></math>', '<math style = "font-size: 18px; font-family: arial;"><mfrac><mn>3x</mn><mn>2</mn></mfrac></math>', '<math style = "font-size: 18px; font-family: arial;"><mn>2 (3x)</mn></math>'],
        answer: 0
    }

];
var numberOfProgresion = "3";