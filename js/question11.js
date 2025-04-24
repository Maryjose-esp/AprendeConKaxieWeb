//ARRAY DE OBJETOS
const quiz = [
    {
      //cada corchete separa las preguntas
      q: "Determina en qué cuadrante se encuentra el punto A (3, 6).", //pregunta
      option: [
        "1", "2", "3", "4",
      ], //array con las opciones
      answer: 0, //opcion correcta, se refiere a la posicion de la respuesta en el array, partiendo de 0
    },
    {
      q: "Determina en qué cuadrante se encuentra el punto B (-2, 9).",
      option: [
        "2","1",  "3", "4",
      ],
      answer: 0,
    },
    {
      q: "Determina en qué cuadrante se encuentra el punto C (4, -7).",
      option: [
        "4","1", "2", "3", 
      ],
      answer: 0,
    },
    {
      q: "¿Cuáles son las coordenadas de los puntos marcados en el siguiente plano cartesiano?<br>",
      option: [
        "A(3, 5), B(-1.5, 0), C(1, 2), D(2, -3), E(-6, -2)", 
        "A(-3, -5), B(1.5, 0), C(-1, -2), D(-2, 3), E(6, 2)", 
        "A(5, 3), B(0, 1.5), C(2, 1), D(-3, 2), E(-2, -6)", 
        "A(3, 5), B(-1.5, 0), C(2, -3), D(-6, -2), E(1, 2)"
      ],
      answer: 0,
      id_im: 3,
      img_name: "c4.png",
    },
    {
      q: "¿Cuál es la distancia entre los puntos A(-3, -10) y B(6/7, 0)?",
      option: [
        "10.71u",
        "8.71u",
        "-10.71u",
        "13.71u",
      ],
      answer: 0,
    },
    {
      q: "¿Cuál es la distancia entre los puntos A(-1/9, -3/5) y B(-6, -12)?",
      option: [
        "12.83u",
        "15.83u",
        "10.83u",
        "-12.83u",
      ],
      answer: 0,
    },
    {
      q: '¿Cuál es el perímetro de la siguiente figura? <Br> Sus puntos son: <br> F(1, 3), G(-1, 2), H(0, 1), I(-1, 0), J(2, 0)<br>',
      option: [
        "11.19u",
        "-11.19",
        "19.11u",
        "-19.11u",
      ],
      answer: 0,
      id_im: 6,
      img_name: "c7.png",
    },
    {
      q: "¿Cuál es el perímetro de la siguiente figura? <Br> Sus puntos son: K(-10, 0), L(0, 10), M(5, -5), N(15, 0), O(0, -17.9), P(-5, -10), Q(0, -5) <br> F(1, 3), G(-1, 2), H(0, 1), I(-1, 0), J(2, 0)<br>",
      option: [
        "92.07u",
        "-92.07u",
        "99.07u",
        "-99.07",
      ],
      answer: 0,
      id_im: 7,
      img_name: "c8.png",
    },
    {
      q: "¿Cuál es el área de la siguiente figura? <Br> Sus puntos son: R(-4, 0), S(0, 8), T(4, 4), U(10, 6), V(8, 0), W(0, 0) Z(0, -4)<br> F(1, 3), G(-1, 2), H(0, 1), I(-1, 0), J(2, 0)<br>",
      option: [
        "72u²",
        "-72u²",
        "27u²",
        "-27u²",
      ],
      answer: 0,
      id_im: 8,
      img_name: "c9.png",
    },
    {
      q: "¿Cuál es el área de la siguiente figura? <Br> Sus puntos son: A1(-5, -5), B1(-15, 0), C1(-5, 5), D1(5, -5)<br> F(1, 3), G(-1, 2), H(0, 1), I(-1, 0), J(2, 0)<br>",
      option: [
        "100u²",
        "-100u²",
        "150u²",
        "-150u²",
      ],
      answer: 0,
      id_im: 9,
      img_name: "c10.png",
    },
    {
      q: "¿Cuáles son las coordenadas de los puntos marcados en el siguiente plano cartesiano?<br> F(1, 3), G(-1, 2), H(0, 1), I(-1, 0), J(2, 0)<br>",
      option: [
        "E1(17, 2), F1(15, -3), G1(19, 0), H1(15, 1), I1(19, 4), J1(23, 1), K1(21, 2)",
        "E1(17, 2), F1(15, -3), G1(19, 0), H1(15, 1), I1(19, 4), J1(23, 1), K1(21, 2)",
        "E1(17, 2), F1(15, -3), G1(19, 0), H1(15, 1), I1(19, 4), J1(23, 1), K1(21, 2)",
        "E1(17, 2), F1(15, -3), G1(19, 0), H1(15, 1), I1(19, 4), J1(23, 1), K1(21, 2)",
      ],
      answer: 0,
      id_im: 10,
      img_name: "c11.png",
    },
    {
      q: "¿Cuál figura tiene mayor área?  Sus puntos vienen marcados en la imagen.<br>",
      option: [
        "Rosa",
        "Verde",
        "Tienen la misma área",
      ],
      answer: 0,
      id_im: 11,
      img_name: "c12.png",
    },
    {
      q: "¿Cuál figura tiene mayor área?  Sus puntos vienen marcados en la imagen.<br>",
      option: ["Menta",
        "Naranja",
        "Tienen la misma área",],
      answer: 0,
      id_im: 12,
      img_name: "c13.png",
    },
    {
      q: "Determina en qué eje se encuentra el punto A (0, 0).",
      option: [
        "Punto de origen", "x", "y",
      ],
      answer: 0,
    },
    {
      q: "Determina en qué eje se encuentra el punto A (0, -3).",
      option: [
        "y","Punto de origen", "x", 
      ],
      answer: 0,
    },
  ];
  
  var numberOfProgresion = "11";
  