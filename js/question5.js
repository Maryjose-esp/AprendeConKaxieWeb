//ARRAY DE OBJETOS
const quiz = [
    {//cada corchete separa las preguntas
        q: '¿Qué es el mcm?', //pregunta
        option: ['El número más pequeño de los múltiplos comunes', 'El factor más grande que comparten todos los números', 'El número más grande de los múltiplos comunes', 'El número divisor más pequeño que comparten todos los números'], //array con las opciones
        answer: 0 //opcion correcta, se refiere a la posicion de la respuesta en el array, partiendo de 0

    },
    {
        q: 'El MCD es…',
        option: ['Máximo común divisor, el mayor número entero que divide a dos o más números sin dejar residuo', 'Mínimo común divisor, el menor número entero que divide a dos o más números sin dejar residuo', 'Máximo común dividendo, el mayor número entero por el que se puede dividir dos o más números sin dejar residuo', 'Mínimo común dividendo, el menor número entero por el que se puede dividir dos o más números sin dejar residuo'],
        answer: 0
    },
    {
        q: '¿Qué son los números primos?',
        option: ['Números que solo pueden ser divididos entre sí mismos y 1', 'Números similares en un conjunto', 'Números que conforman una sucesión', 'Son los múltiplos de un número'],
        answer: 0
    },
    {
        q: 'Calcula el MCD de 52, 24 y 68',
        option: ['4', '5304', '2', '6'],
        answer: 0
    },
    {
        q: 'Calcula el mcm de 12, 88, 30',
        option: ['1320', '25', '2640', '4'],
        answer: 0
    },
    {
        q: 'Mariana tiene 40 dulces y 20 chicles, quiere repartirlos de manera equitativa en la mayor cantidad posible, ¿cuántos grupos de dulces hará? ¿Cuántos chicles y cuántos dulces habrá en cada uno?',
        option: ['20 grupos de 2 dulces y 1 chicles cada uno', '40 grupos de 1 dulces y 1 chicle cada uno', '2 grupos de 20 dulces y 10 chicles cada uno', '4 grupos de 5 chicles y 10 dulces cada uno'],
        answer: 0
    },
    {
        q: 'Miriam va a Aurrerá cada 15 días y Susana va cada 10, si hoy se encontraron en los pasillos de bodega Aurrerá, ¿en cuántos días volverán a encontrarse?',
        option: ['30', '10', '25', '60'],
        answer: 0
    },
    {
        q: 'Para repartir 50 refrescos y 40 jugos, se necesita saber la cantidad máxima de cajas que se necesitarán y la cantidad mínima de refrescos y jugos en cada caja.',
        option: ['10 cajas con 5 refrescos y 4 jugos', '2 cajas con 25 refrescos y 20 jugos', '10 cajas con 4 refrescos y 5 jugos', '5 cajas con 10 refrescos y 8 jugos'],
        answer: 0
    },
    {
        q: 'Tres ciclistas recorren una pista, para terminarla tardan diferentes tiempos, el primero tarda 30 minutos, el segundo 40 minutos y el tercero 25, ¿en cuántos minutos volverán a encontrarse si empezaron al mismo tiempo?',
        option: ['600', '300', '19', '120'],
        answer: 0
    },
    {
        q: 'Liliana quiere repartir dos guisos de 6 y 8 kg, busca repartirlos en la mayor cantidad posible de cazuelas para darles a sus allegados, ¿cuántas cazuelas puede llenar equitativamente?',
        option: ['2', '6', '3', '4'],
        answer: 0
    },
    {
        q: 'Camila corre todas las mañanas con su perro en el campo, cada 10 minutos Camila termina de dar una vuelta y su perro lo hace en 4, ¿en qué número de vuelta del perro de Mariana se volverán a encontrar?',
        option: ['5', '2', '10', '4'],
        answer: 0
    },
    {
        q: '¿Cuál es la cantidad máxima de cajas que se pueden utilizar para guardar 60 pelotas de voleibol y 80 pelotas de basquetbol de manera equitativa?',
        option: ['20', '140', '5', '10'],
        answer: 0
    },
    {
        q: 'Cada que se completa un ciclo de lavado de 15 minutos y un ciclo de secado de 10 minutos al mismo tiempo, José comienza a doblar la ropa limpia, si inicio a la 1 pm, ¿a qué hora comenzará a doblar?',
        option: ['1:30 pm', '2 pm', '2:05 pm', '2:20 pm'],
        answer: 0
    },
    {
        q: 'Lucio estudia 20 minutos cada vez que su hermano descansa 6, ¿en cuántas horas volverá a estudiar Lucio?',
        option: ['1 hora', '0.30 horas', '0.60 horas', '0.50 horas'],
        answer: 0
    },
    {
        q: 'Calcula el MCD de 46 y 24.',
        option: ['2', '552', '32', '1'],
        answer: 0
    }

] 