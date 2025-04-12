const quiz = [
  {
    q: 'Fórmula para calcular el área de un cuadrado: <br> Donde "l" = lado',
    option: [
      '<math style = "font-size: 18px; font-family: arial;"><mn> área=</mn><msup><mi>l</mi><mn>2</mn></msup></math>',
      '<math style = "font-size: 18px; font-family: arial;"><mn>área</mn><mn>=</mn><mfrac><mn>l</mn><mn>2</mn></mfrac></math>',
      '<math style = "font-size: 18px; font-family: arial;"><mn>área</mn><mn>=</mn><mn>l</mn><mn></mn></math>',
      '<math style = "font-size: 18px; font-family: arial;"><mn>área</mn><mn>=</mn><mfrac><mn>l*l</mn><mn>2</mn></mfrac></math>',
    ],
    answer: 0,
  },
  {
    q: 'Fórmula para calcular el área de un rectángulo: <br> Donde "a" = altura <br> "b" = base',
    option: [
      '<math style = "font-size: 18px; font-family: arial;"><mn>área</mn><mn>=</mn><mn>a</mn><mn>b</mn></math>',
      '<math style = "font-size: 18px; font-family: arial;"><mn>área</mn><mn>=</mn><mfrac><mn>dD</mn><mn>2</mn></mfrac></math>',
      '<math style = "font-size: 18px; font-family: arial;"><mn>área</mn><mn>=</mn><mfrac><mn>bh</mn><mn>2</mn></mfrac></math>',
      '<math style = "font-size: 18px; font-family: arial;"><mn> área=</mn><msup><mi>l</mi><mn>2</mn></msup></math>',
    ],
    answer: 0,
  },
  {
    q: 'Fórmula para calcular el área de un triángulo:<br> Donde "h" = altura <br> "b" = base <br>',
    option: [
      '<math style = "font-size: 18px; font-family: arial;"><mn>área</mn><mn>=</mn><mfrac><mn>bh</mn><mn>2</mn></mfrac></math>',
      "b",
      "c",
      '<math style = "font-size: 18px; font-family: arial;"><mn>área</mn><mn>=</mn><mn>a</mn><mn>b</mn></math>',
    ],
    answer: 0,
  },
  {
    q: 'Fórmula para calcular el área de un romboide:<br> Donde "a" = altura <br> "b" = base',
    option: [
      '<math style = "font-size: 18px; font-family: arial;"><mn>área</mn><mn>=</mn><mn>a</mn><mn>b</mn></math>',
      '<math style = "font-size: 18px; font-family: arial;"><mn>área</mn><mn>=</mn>   <mfrac><mn>(a)(b)(a)</mn><mn>2</mn></mfrac></math>b',
      '<math style = "font-size: 18px; font-family: arial;"><mn> área=</mn><msup><mi>l</mi><mn>2</mn></msup></math>',
      '<math style = "font-size: 18px; font-family: arial;"><mn>área</mn><mn>=</mn>   <mfrac><mn>(n)(b)(a)</mn><mn>2</mn></mfrac></math>',
    ],
    answer: 0,
  },
  {
    q: 'Fórmula para calcular el área de un rombo:<br> Donde "d" = diagonal menor <br> "D" = diagonal mayor',
    option: [
      '<math style = "font-size: 18px; font-family: arial;"><mn>área</mn><mn>=</mn><mfrac><mn>dD</mn><mn>2</mn></mfrac></math>',
      '<math style = "font-size: 18px; font-family: arial;"><mn>área</mn><mn>=</mn><mn>d</mn><mn>D</mn></math>',
      '<math style = "font-size: 18px; font-family: arial;"><mn> área=</mn><msup><mi>dD</mi><mn>2</mn></msup></math>',
      '<math style = "font-size: 18px; font-family: arial;"><mn>área</mn><mn>=</mn>   <mfrac><mn>(d)(D)(d)</mn><mn>2</mn></mfrac></math>',
    ],
    answer: 0,
  },
  {
    q: 'Fórmula para calcular el área de un trapecio:<br> Donde "a" = base menor <br> "c" = base mayor <br> "h" = altura',
    option: [
      '<math style = "font-size: 18px; font-family: arial;"><mn>área</mn><mn>=</mn><mfrac><mn>(a+c)h</mn><mn>2</mn></mfrac></math>',
      '<math style = "font-size: 18px; font-family: arial;"><mn>área</mn><mn>=</mn><mn>c</mn><mn>bh</mn></math>',
      '<math style = "font-size: 18px; font-family: arial;"><mn> área=</mn><msup><mi>ach</mi><mn>2</mn></msup></math>',
      '<math style = "font-size: 18px; font-family: arial;"><mn> área=</mn><msup><mi>ac</mi><mn>2</mn></msup></math>',
    ],
    answer: 0,
  },
  {
    q: 'Fórmula para calcular el área de un polígono regular:<br> Donde "n" = cantidad de lados <br> "b" = base <br> "a" = apotema',
    option: [
      '<math style = "font-size: 18px; font-family: arial;"><mn>área</mn><mn>=</mn>   <mfrac><mn>(n)(b)(a)</mn><mn>2</mn></mfrac></math>',
      '<math style = "font-size: 18px; font-family: arial;"><mn>área</mn><mn>=</mn><mfrac><mn>a</mn><mn>2</mn></mfrac></math>',
      '<math style = "font-size: 18px; font-family: arial;"><mn>área</mn><mn>=</mn><mfrac><mn>nb</mn><mn>2</mn></mfrac></math>',
      '<math style = "font-size: 18px; font-family: arial;"><mn> área=</mn><msup><mi>na</mi><mn>2</mn></msup></math>',
    ],
    answer: 0,
  },
  {
    q: '¿Cuál es el área de la siguiente figura? <br>"',
    option: ["314.4u²", "300.5u²", "245u²", "76.4u²"],
    answer: 0,
    id_im: 8,
    img_name: "c8.png",
  },
  {
    q: "¿Cuál es el área de la siguiente figura?",
    option: ["87.21u²", "174.42u²", "19.38u²", "71.4u²"],
    answer: 0,
    id_im: 9,
    img_name: "c9.png",
  },
  {
    q: "¿Cuál es el área de la siguiente figura?",
    option: ["135.37u²", "22.56u²", "35.85u²", "100u²"],
    answer: 0,
    id_im: 10,
    img_name: "c10.png",
  },
  {
    q: "¿Cuál es el área de la siguiente figura?",
    option: ["24.85u²", "12.25u²", "10.8u²", "1.8u²"],
    answer: 0,
    id_im: 11,
    img_name: "c11.png",
  },
  {
    q: "¿Cuál es el área de la siguiente figura?",
    option: ["166.56u²", "51.25u²", "147.2u²", "98.37u²"],
    answer: 0,
    id_im: 12,
    img_name: "c12.png",
  },
  {
    q: "¿Cuál es el área de la siguiente figura?",
    option: ["50.56u²", "7.56u²", "11u²", "32u²"],
    answer: 0,
    id_im: 13,
    img_name: "c13.png",
  },
  {
    q: "¿Cuál es el orden correcto del área de las figuras de mayor a menor?",
    option: [
      "III, IV, II, I",
      "I, II, III, IV",
      "IV, III, II, I",
      "III, II, IV, I",
    ],
    answer: 0,
    id_im: 14,
    img_name: "c14.png",
  },
  {
    q: "¿Cuál es el orden correcto del área de las figuras de menor a mayor?",
    option: [
      "II, I, III, IV",
      "II, III, I, IV",
      "II, IV, III, I",
      "I, II, III, IV",
    ],
    answer: 0,
    id_im: 15,
    img_name: "c15.png",
  },
];

var numberOfProgresion = "9";
