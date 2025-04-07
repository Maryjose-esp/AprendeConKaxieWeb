//ARRAY DE OBJETOS
const quiz = [
    {//cada corchete separa las preguntas
        q: '¿Cuál de estas descripciones encaja con el método de sustitución?', //pregunta
        option: ['Consiste en aislar una variable de la ecuación en función de la otra', 'Se basa en aplicar operaciones a ambos lados de la ecuación para ir eliminando términos', 'Consiste en combinar y reducir términos semejantes en cada lado de la ecuación', 'Si a los dos miembros de una igualdad se les aumenta, disminuye, multiplica o divide entre las misma cantidad, la igualdad subsiste, es decir, que para todo habrá solución'], //array con las opciones
        answer: 0 //opcion correcta, se refiere a la posicion de la respuesta en el array, partiendo de 0

    },
    {
        q: '¿Qué representa esta imagen? <br> <center><img src="./../evaluacionesimg/p13/c2p13.jpeg" WIDTH="100%"></center>',
        option: ['Método de reducción', 'Método de sustitución', 'Método de Pitágoras', 'Método de igualación'],
        answer: 0
    },
    {
        q: '¿Cuál de estas descripciones encaja con el método de igualación?',
        option: ['Se basa en aplicar operaciones a ambos lados de la ecuación para ir eliminando términos', 'Consiste en aislar una variable de la ecuación en función de la otra', 'Consiste en combinar y reducir términos semejantes en cada lado de la ecuación', 'Si dos igualdades tienen un miembro común, los otros dos son iguales'],
        answer: 0
    },
    {
        q: '¿A qué se refiere la propiedad idéntica o reflexiva?',
        option: ['Todo número es igual a sí mismo', 'Si a los dos miembros de una igualdad se les aumenta, disminuye, multiplica o divide entre las misma cantidad, la igualdad subsiste, es decir, que para todo habrá solución', 'Los miembros de una igualdad pueden permutar sus lugares', 'Se pueden suprimir sumando los factores iguales en los dos miembros de una igualdad y el resultado es otra igualdad'],
        answer: 0
    },
    {
        q: '¿Cuál es la propiedad simétrica?',
        option: ['Si 2+3=5 entonces, 5=2+3. Si x=y entonces, y=x', 'I=I ; X=X', 'Si a=b y b=c entonces; a=c', 'Si x+a=y+a entonces x=y. Si c(x-1)=d(x+1) entonces c=d'],
        answer: 0
    },
    {
        q: '¿Cuál es la propiedad a la que se hace referencia con “Si dos igualdades tienen un miembro común, los otros dos son iguales”?',
        option: ['Propiedad transitiva', 'Propiedad idéntica o reflexiva', 'Propiedad simétrica', 'Propiedad uniformemente'],
        answer: 0
    },
    {
        q: 'A qué propiedad de igualdad corresponde: <br> Si a=b; a+x=b+x <br> a-x=b-x <br> a(x+1)=b(x+1) <br> a/2 = b/2',
        option: ['Propiedad uniformemente', 'Propiedad cancelativa', 'Propiedad transitiva', 'Propiedad simétrica'],
        answer: 0
    },
    {
        q: 'Se pueden suprimir sumando los factores iguales en los dos miembros de una igualdad y el resultado es otra igualdad.',
        option: ['Propiedad cancelativa, de las propiedades de la igualdad', 'Propiedad transitiva, de las propiedades de la igualdad', 'Método de reducción', 'Coeficiente fraccionario'],
        answer: 0
    },
    {
        q: '¿Qué es un sistema de ecuaciones lineales?',
        option: ['Es una igualdad donde por lo menos hay un número desconocido llamado incógnita', 'El conjunto de elementos definidos en una ecuación', 'Son reglas matemáticas que se aplican a las expresiones y ecuaciones para manipularlas de manera que se mantenga la igualdad entre ellas', 'Es la interpretación geométrica'],
        answer: 0
    },
    {
        q: 'Juan Miguel se compró unas palomitas acarameladas, si le dió a su hermana <math style = "font-size: 18px; font-family: arial;"><mfrac><mn>1</mn><mn>3</mn></mfrac></math> de sus palomitas y después se comió una quinta parte de lo que quedaba, quedandole solo 480 gramos, ¿cuántos gramos tenía la bolsa de palomitas?',
        option: ['900 gr', '600 gr', '780 gr', '800gr'],
        answer: 0
    },
    {
        q: 'Resuelve el sistema de ecuaciones por el método de igualación. <br> 3x - 5y = -25 <br> 2x + 3y = 34',
        option: ['x=5, y=8', 'x=8, y=5', 'x=7, y=10', 'x=8, y=19'],
        answer: 0
    },
    {
        q: 'Obtén los valores de “x” y “y” con el método de reducción.<br> 2x + y = 2 <br> x + 5y = 10',
        option: ['x=0, y=2', 'x=2, y=0', 'x=4, y=-6', 'x=30, y=-4'],
        answer: 0
    },
    {
        q: 'Dadas las siguientes ecuaciones, calcule el valor de las incógnitas.<br> 4x - 5y = 85 <br> 6x + y = 119',
        option: ['x=20, y=-1', 'x=-1, y=20', 'x=10, y=-9', 'x=30, y=7'],
        answer: 0
    },
    {
        q: 'Calcule el valor de las variables: <br> 9x - 9y = -27 <br> x + 3y = -3',
        option: ['x=-3, y=0', 'x=0, y=-3', 'x=27, y=0', 'x=0, x=-27'],
        answer: 0
    },
    {
        q: 'Calcula el valor de las incógnitas: <br> 7x - 3/4y = 90 <br> 5/6x + 5y = -30',
        option: ['x=12, y=-8', 'x=-12, y=8', 'x=-8, y=12', 'x=8, y=-12'],
        answer: 0
    }

] 