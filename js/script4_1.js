document.addEventListener('DOMContentLoaded', (event) => {
    const wordsContainer = document.getElementById('wordsContainer');
    const dropzones = document.querySelectorAll('.dropzone');
    const checkButton = document.getElementById('checkAnswers');
    const retryButton = document.getElementById('retry');

    function makeDraggable(word) {
        word.addEventListener('dragstart', (e) => {
            e.dataTransfer.setData('text/plain', word.dataset.word);
            setTimeout(() => {
                word.style.display = 'none'; // Hacer desaparecer la palabra después de arrastrar
            }, 0);
        });

        word.addEventListener('dragend', (e) => {
            setTimeout(() => {
                word.style.display = 'block'; // Mostrar nuevamente la palabra después de soltar
            }, 0);
        });
    }

    document.querySelectorAll('.word').forEach(makeDraggable);

    dropzones.forEach(dropzone => {
        dropzone.addEventListener('dragover', (e) => {
            e.preventDefault();
        });

        dropzone.addEventListener('drop', (e) => {
            e.preventDefault();
            if (dropzone.textContent.trim() === '') { // Solo permitir el drop si el dropzone está vacío
                const word = e.dataTransfer.getData('text/plain');
                dropzone.textContent = word;

                // Ocultar la palabra del contenedor de palabras
                const wordElement = document.querySelector(`.word[data-word="${word}"]`);
                wordElement.parentNode.removeChild(wordElement); // Eliminar el elemento del DOM
            }
        });
    });

    checkButton.addEventListener('click', () => {
        dropzones.forEach(dropzone => {
            const correctAnswer = dropzone.dataset.word;
            const userAnswer = dropzone.textContent.trim();
            if (userAnswer === correctAnswer) {
                dropzone.style.backgroundColor = '#d4edda';
                dropzone.style.border = '2px solid #28a745';
            } else {
                dropzone.style.backgroundColor = '#f8d7da';
                dropzone.style.border = '2px solid #dc3545';
            }
        });
    });

    retryButton.addEventListener('click', () => {
        dropzones.forEach(dropzone => {
            dropzone.textContent = '';
            dropzone.style.backgroundColor = ''; // Resetear el color de fondo
            dropzone.style.border = ''; // Resetear el borde
        });

        wordsContainer.innerHTML = `
            

           
            <div class="word" draggable="true" data-word="10">10</div>
            <div class="word" draggable="true" data-word="7">7</div>
            <div class="word" draggable="true" data-word="4">4</div>
            <div class="word" draggable="true" data-word="8">8</div>
            <div class="word" draggable="true" data-word="1">1</div>
            <div class="word" draggable="true" data-word="par">par</div>
            <div class="word" draggable="true" data-word="5">5</div>
            <div class="word" draggable="true" data-word="9">9</div>
            <div class="word" draggable="true" data-word="9">9</div>
            <div class="word" draggable="true" data-word="6">6</div>
            <div class="word" draggable="true" data-word="3">3</div>

        `;

        document.querySelectorAll('.word').forEach(makeDraggable);
    });
});
