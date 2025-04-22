//ARRAY DE OBJETOS
const quiz = [
    {
      //cada corchete separa las preguntas
      q: "Las parábolas abiertas hacia arriba son...", //pregunta
      option: [
        "Cóncava", "Convexa",
        
      ], //array con las opciones
      answer: 1, //opcion correcta, se refiere a la posicion de la respuesta en el array, partiendo de 0
    },
    {
      q: "Las parábolas abiertas hacia abajo son...",
      option: [
        "Cóncava", "Convexa",
      ],
      answer: 0,
    },
    {
      q: 'Según la siguiente función <math xmlns:mml="http://www.w3.org/1998/Math/MathML" xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math"><mi>f</mi><mfenced separators="|"><mrow><mi>(x)</mi></mrow></mfenced><mo>=</mo><mn>5</mn><mi>x</mi><mo>(</mo><mn>3</mn><mi>x</mi><mo>-</mo><mn>8</mn><mi>x</mi><mo>+</mo><mn>12</mn><mo>)</mo><mi> </mi></math> determina cuál es su gráfica.',
      option: [
        "Cuadrática", "Cúbica", "Lineal", "Cuarto grado",
      ],
      answer: 0,
    },
    {
      q: 'Según la siguiente función <math xmlns:mml="http://www.w3.org/1998/Math/MathML" xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math"><mi>f</mi><mfenced separators="|"><mrow><mi>(x)</mi></mrow></mfenced><mo>=</mo><mn>5</mn><mi>x</mi><mo>(</mo><mn>3</mn><mi>x</mi><mo>-</mo><mn>8</mn><mi>x</mi><mo>+</mo><mn>12</mn><mo>)</mo><mi> </mi></math> determina cuál es su gráfica.',
      option: [
        "Cúbica", "Cuadrática", "Lineal", "Cuarto grado",
        
      ],
      answer: 0,
    },
    {
      q: 'Según la siguiente función <math xmlns:mml="http://www.w3.org/1998/Math/MathML" xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math"><mi>f</mi><mfenced separators="|"><mrow><mi>(x)</mi></mrow></mfenced><mo>=</mo><mfenced separators="|"><mrow><mo>(</mo><mfrac><mrow><mn>1</mn><mi>x</mi></mrow><mrow><mn>2</mn></mrow></mfrac><mo>+</mo><mn>2</mn><mi>x</mi></mrow><mo>)</mo></mfenced><mfenced separators="|"><mrow><mo>(</mo><mi>x</mi><mo>+</mo><mn>6</mn><mo>)</mo></mrow></mfenced></math> determina cuál es su gráfica.',
      option: [
        "Cuadrática", "Cúbica", "Lineal", "Cuarto grado",
      ],
      answer: 0,
    },
    {
      q: 'Según la siguiente función <math xmlns:mml="http://www.w3.org/1998/Math/MathML" xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math"><mi>f</mi><mfenced separators="|"><mrow><mi>(x)</mi></mrow></mfenced><mo>=</mo><mfenced separators="("><mrow><mo>(</mo><mn>5</mn><mi>x</mi><mo>-</mo><mi>x</mi><mo>)</mo></mrow></mfenced><mo>-</mo><mfenced separators="("><mrow><mo>(</mo><mn>10</mn><mi>x</mi><mo>+</mo><mn>2</mn><mi>x</mi><mo>)</mo></mrow></mfenced><mo>+</mo><msup><mrow><mn>2</mn></mrow><mrow><mn>2</mn></mrow></msup></math> determina cuál es su gráfica',
      option: [
        "Lineal","Cuadrática", "Cúbica",  "Cuarto grado",
      ],
      answer: 0,
    },
    {
      q: '¿La siguiente expresión es una función cúbica? <math xmlns:mml="http://www.w3.org/1998/Math/MathML" xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math"><mi>f</mi><mfenced separators="|"><mrow><mi>(x)</mi></mrow></mfenced><mo>=</mo><mn>9</mn><msup><mrow><mi>x</mi></mrow><mrow><mn>2</mn></mrow></msup><mo>+</mo><mn>2</mn><msup><mrow><mi>y</mi></mrow><mrow><mn>3</mn></mrow></msup></math>',
      option: [
       "Falso", "Verdadero", 
      ],
      answer: 0,
    },
    {
      q: '¿La siguiente expresión es una función lineal?<math xmlns:mml="http://www.w3.org/1998/Math/MathML" xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math"><mi>f</mi><mfenced separators="|"><mrow><mi>(y)</mi></mrow></mfenced><mo>=</mo><mn>2</mn><mi>y</mi><mo>-</mo><msup><mrow><mn>3</mn></mrow><mrow><mn>3</mn></mrow></msup></math>',
      option: [
        "Verdadero", "Falso",
      ],
      answer: 0,
    },
    {
      q: '¿La siguiente expresión es una función cuadrática? <math xmlns:mml="http://www.w3.org/1998/Math/MathML" xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math"><mi>f</mi><mfenced separators="|"><mrow><mi>(w)</mi></mrow></mfenced><mo>=</mo><msup><mrow><mo>(</mo><mo>-</mo><mn>3</mn><mi>w</mi><mo>-</mo><mn>9</mn><mo>)</mo></mrow><mrow><mn>2</mn></mrow></msup></math>',
      option: [
        "Verdadero", "Falso",
      ],
      answer: 0,
    },
    {
      q: "La gráfica de la imagen corresponde a una función...<br>",
      option: [
        "Cuarto grado", "Lineal", "Cúbica", "Cuadrática"
      ],
      
      answer: 0,
      id_im: 10,
      img_name: "c10.png",
    },
    {
      q: "La gráfica de la imagen corresponde a una función...<br>",
      option: [
        "Cuarto grado", "Lineal", "Cúbica", "Cuadrática"
      ],
      
      answer: 0,
      id_im: 11,
      img_name: "c11.png",
    },
    {
      q: "La gráfica de la imagen corresponde a una función...<br>",
      option: [
        "Lineal","Cuarto grado",  "Cúbica", "Cuadrática"
      ],
      
      answer: 0,
      id_im: 12,
      img_name: "c12.png",
    },
    {
      q: "La gráfica de la imagen corresponde a una función...<br>",
      option: ["Cúbica","Cuarto grado", "Lineal",  "Cuadrática"
        ],
      answer: 0,
      id_im: 13,
      img_name: "c13.png",
    },
    {
      q: "Definición de la función cuadrática.",
      option: [
        "Estas funciones son las fórmulas matemáticas que definen una curva. Generalmente al graficarlas se obtendrá la forma de una 'U', o bien, de una parábola.",
        "Este tipo de funciones son funciones polinómicas de primer grado, es decir, donde el exponente de la variable es 1 y cuya gráfica es una línea recta.",
        "Estas funciones son las fórmulas matemáticas que definen una curva. Generalmente al graficarlas se obtendrá la forma de una 'x', o bien, de una equis/tacha.",
        
      ],
      answer: 0,
    },
    {
      q: "Definición de la función lineal.",
      option: [
        "Este tipo de funciones son funciones polinómicas de primer grado, es decir, donde el exponente de la variable es 1 y cuya gráfica es una línea recta.",
        "Estas funciones son las fórmulas matemáticas que definen una curva. Generalmente al graficarlas se obtendrá la forma de una 'U', o bien, de una parábola.",
        "Este tipo de funciones son funciones polinómicas de primer grado, es decir, donde el exponente de la variable es -1 y cuya gráfica es una línea recta."
        
      ],
      answer: 0,
    },
  ];
  
  var numberOfProgresion = "12";
  