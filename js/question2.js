//ARRAY DE OBJETOS
const quiz = [
    {//cada corchete separa las preguntas
        q: 'Cuando se habla de una expresión reducida de forma que se mantiene simple, se refiere a:', //pregunta
        option: ['Expresión simplificada', 'Expresión desarrollada de un número', 'Expresión factorizada', 'Productos notables'], //array con las opciones
        answer: 0 //opcion correcta, se refiere a la posicion de la respuesta en el array, partiendo de 0

    },
    {
        q: '¿A qué nos referimos con una expresión desarrollada de un número?',
        option: ['Manera de mostrar un número por medio de sumas o multiplicaciones', 'Encontrar los números que multiplicados den esa cantidad', 'Expresiones algebraicas que se obtienen de un producto el cual conocemos ya que sigue reglas fijas y su resultado puede obtenerse por seguir la regla', 'Es el valor que toma un dígito dependiendo su lugar en el número'],
        answer: 0
    },
    {
        q: '¿Qué es una expresión factorizada?',
        option: ['Es encontrar los números que multiplicados den la cantidad de la expresión original', 'Expresión reducida de forma que se mantiene simple', 'Manera de mostrar un número por medio de sumas o multiplicaciones', 'Es un conjunto de expresiones algebraicas que se obtienen de un producto el cual conocemos ya que sigue reglas fijas y su resultado puede obtenerse por seguir la regla'],
        answer: 0
    },
    {
        q: 'Aplica la propiedad distributiva para simplificar la siguiente ecuación: <math style = "font-size: 18px; font-family: arial;"><mfrac><mn>5 ( x + 10) - 2x</mn><mn>7y</mn></mfrac></math>',
        option: ['<math style = "font-size: 18px; font-family: arial;"><mfrac><mn>3x + 50</mn><mn>7y</mn></mfrac></math>', '<math style = "font-size: 18px; font-family: arial;"><mfrac><mn>5x + 50 - 2x</mn><mn>7y</mn></mfrac></math>', '<math style = "font-size: 18px; font-family: arial;"><mfrac><mn>50x - 2x</mn><mn>7y</mn></mfrac></math>', '<math style = "font-size: 18px; font-family: arial;"><mfrac><mn>48x - 2x</mn><mn>7y</mn></mfrac></math>'],
        answer: 0
    },
    {
        q: 'Simplifica la siguiente ecuación: 6x⁵*x²',
        option: ['6x⁷', '7x⁷', '6x¹⁰', '6x³'],
        answer: 0
    },
    {
        q: 'Expresión simplificada división: <math style = "font-size: 18px; font-family: arial;"><mfrac><mn>20xy²</mn><mn>2xy-⁴</mn></mfrac></math>',
        option: ['10y⁶', '10x²y²', '10y²', '10y-²'],
        answer: 0
    },
    {
        q: 'Resuelve el cuadrado de este binomio: (3x + 5y)²',
        option: ['9x²+30xy+25y²', '9x²+25y²', '9x²-25y²', '-9x²-30xy-25y²'],
        answer: 0
    },
    {
        q: 'Obtén el producto de dos binomios conjugados: (2x+3y²)(2x-3y²)',
        option: ['4x²-9y⁴', '4x²-12xy+9y⁴', '4x²+12xy-9y⁴', '-4x²+9y⁴'],
        answer: 0
    },
    {
        q: 'Resuelve el cuadrado de binomio: (3x+2y)²',
        option: ['9x²+12xy+4y²', '9x²+4y²', '9x²-4y²', '4x²+12xy+9y²'],
        answer: 0
    },
    {
        q: 'Resuelve el siguiente cubo de un binomio: (2x+3y)³',
        option: ['8x³+36x²y+54xy²+27y³', '8x³+36x²y-54xy²-27y³', '8x²+36x³y+54xy³+27y²', '8x³+36x²y²-54x²y+27y³'],
        answer: 0
    },
    {
        q: 'Resuelve el siguiente cubo de un binomio: (5x-2y)³',
        option: ['125x³-150x²y+60xy²-8y³', '125x³+150x²y+60xy²+8y³', '125x²-150x³y+60xy³-8y²', '125x²+150x³y+60xy³+8y²'],
        answer: 0
    },
    {
        q: 'Obtén la expresión factorizada por factor común de: 20x²y⁵ - 10x⁵y³',
        option: ['10x²y³ (2y² - x³)', '10x³y² (2y³ - x²)', '10x⁵y⁵ (2 + 1)', '10x³y² (-2y² + x³)'],
        answer: 0
    },
    {
        q: 'Factoriza el siguiente binomio: (25x²-36y²)',
        option: ['(5x+6y)(5x-6y)', '(5x+6y)(5x+6y)', '(5x-6y)(5x-6y)', '(6x+6y)(5x-5y)'],
        answer: 0
    },
    {
        q: 'Factoriza el trinomio cuadrado perfecto: 9x²-24x+16',
        option: ['(3x-4)²', '(3x+4)²', '(3x-4)(3x+4)', '(-3x+4)²'],
        answer: 0
    },
    {
        q: 'Factoriza el siguiente binomio: (216x³-64y³)',
        option: ['(6x-4y)(36x²+24xy+16y²)', '(6x+4y)(36x²-24xy+16y²)', '(36x²+24xy)(6x-4y+16y²)', '(36x²-24xy)(6x+4y+16y²)'],
        answer: 0
    }

];
var numberOfProgresion = "2";