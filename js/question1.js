//ARRAY DE OBJETOS
const quiz = [
    {//cada corchete separa las preguntas
        q: '¿Qué es el lenguaje algebraico?', //pregunta
        option: ['Traducción del lenguaje común a símbolos y letras para representar cantidades desconocidas con símbolos.', 'Lenguaje basado en funciones trigonométricas.', 'Lenguaje que usa sólo letras y excluye números y signos de operación.', 'Ninguna de las opciones es correcta'], //array con las opciones
        answer: 0 //opcion correcta, se refiere a la posicion de la respuesta en el array, partiendo de 0

    },
    {
        q: 'Selecciona el orden correcto que lleva la jerarquía de operaciones:',
        option: ['Elementos agrupadores, potencias y raíces, multiplicación y división, sumas y restas.', 'Sumas y restas, multiplicación y división, potencias y raíces, elementos agrupadores.', 'Elementos agrupadores, multiplicación y división, potencias y raíces, sumas y restas.', 'Potencias y raíces, sumas y restas, elementos agrupadores, multiplicación y división.'],
        answer: 0
    },
    {
        q: ' Una incógnita es...',
        option: ['Un valor desconocido.', 'Un valor constante.', 'Un valor conocido.', 'La letra x.'],
        answer: 0
    },
    {
        q: 'Ejemplos de signos aritméticos son...',
        option: ['+, -, x, ÷', 'a, b, c, d', '!, ", #, $', 'Todos las opciones son correctas'],
        answer: 0
    },
    {
        q: 'Una potencia, también conocida como superíndice es...',
        option: ['La cantidad de veces que un número se multiplica a sí mismo.', 'La cantidad que se le debe sumar al número base.', 'El número por el cual se multiplica el número base.', 'La cantidad que se le debe restar al número base.'],
        answer: 0
    },
    {
        q: ' Las raíces cuadradas son...',
        option: ['Cantidad que se ha de multiplicar por sí misma una vez para obtener un número determinado.', 'Cantidad que se ha de restar por sí misma una vez para obtener un número determinado.', 'Cantidad que se ha de dividir por sí misma una vez para obtener un número determinado.', 'La raíz de un árbol.'],
        answer: 0
    },
    {
        q: 'En el lenguaje algebraico en lugar de decir "suma" se suele decir...',
        option: ['Todas lad opciones son correctas', 'Aumentar', 'Mayor que', 'Incrementar'],
        answer: 0
    },
    {
        q: 'Si a un número se le suman 60 unidades se obtienen -154 unidades:',
        option: ['x + 60 = -154', '60 - x = -154', 'x + 60 = 154', 'Todas las opciones son correctas'],
        answer: 0
    },
    {
        q: 'La edad de Angélica es el triple de la edad de Antonia a cuyo producto se le incrementan 12 unidades:',
        option: ['n = 3m + 12', 'n = 3 + m + 12', 'n = (12m)3', 'Todas las opciones son correctas'],
        answer: 0
    },
    {
        q: 'La suma de tres números pares es igual a 30',
        option: ['Todas las opciones son correctas', '30 = 2x + (2x + 2) + (2x + 4) ', '30 = 6x + 6', '30 - 6 = 6x'],
        answer: 0
    },
    {
        q: 'La cuarta parte de un número:',
        option: ['x/4', '2(x/4)', 'x + 4', 'Todas las opciones son correctas'],
        answer: 0
    },
    {
        q: 'A un quinto se le aumentan tres séptimos de un número desconocido.',
        option: ['1/5 + 3(x/7)', '[ 3(x/7) ] / 5', '5 + 3(x/7)', 'Todas las opciones son correctas'],
        answer: 0
    },
    {
        q: 'Un número multiplicado por sí mismo tres veces:',
        option: ['Todas las opciones son correctas', 'x³', 'n³', 'n*n*n'],
        answer: 0
    },
    {
        q: 'La multiplicación de tres números donde el segundo números es mayor por 2 unidades con respecto del primero:',
        option: ['x(x + 2)y', 'xyz', 'x(x + 2)(x + 3)', 'Todas las opciones son correctas'],
        answer: 0
    },
    {
        q: 'Al quíntuple  de un número se le suma un tercio de otro número:',
        option: ['5x + y/3', 'x/5 + 1/3', 'x/5 + y/3', 'Todas las opciones son correctas'],
        answer: 0
    }

] 