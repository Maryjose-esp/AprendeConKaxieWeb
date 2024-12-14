document.addEventListener('DOMContentLoaded', (event) => {
    const wordsContainer = document.querySelector('.words-container1');
    const dropzones = document.querySelectorAll('.dropzone');
    const checkButton = document.getElementById('checkAnswers');
    const retryButton = document.getElementById('retry');

    function makeDraggable(word) {
        word.addEventListener('dragstart', (e) => {
            e.dataTransfer.setData('text/plain', word.dataset.word);
            setTimeout(() => {
                word.style.display = 'none';
            }, 0);
        });

        word.addEventListener('dragend', (e) => {
            if (!e.dataTransfer.dropEffect || e.dataTransfer.dropEffect === 'none') {
                word.style.display = 'block';
            }
        });
    }

    document.querySelectorAll('.word').forEach(makeDraggable);

    dropzones.forEach(dropzone => {
        dropzone.addEventListener('dragover', (e) => {
            e.preventDefault();
        });

        dropzone.addEventListener('drop', (e) => {
            e.preventDefault();
            if (dropzone.textContent.trim() === '') {
                const word = e.dataTransfer.getData('text/plain');
                dropzone.textContent = word;

                const wordElement = document.querySelector(`.word[data-word="${word}"]`);
                if (wordElement) {
                    wordElement.remove();
                }
            }
        });
    });

    checkButton.addEventListener('click', (e) => {
        e.preventDefault(); // Evita la recarga de la página
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

    retryButton.addEventListener('click', (e) => {
        e.preventDefault(); // Evita la recarga de la página
        dropzones.forEach(dropzone => {
            dropzone.textContent = '';
            dropzone.style.backgroundColor = '';
            dropzone.style.border = '';
        });

        wordsContainer.innerHTML = `
            <div class="word" draggable="true" data-word="21">√21</div>
            <div class="word" draggable="true" data-word="12">√12</div>
            <div class="word" draggable="true" data-word="8/3">8/3</div>
            <div class="word" draggable="true" data-word="9/5">9/5</div>
            <div class="word" draggable="true" data-word="-7">-7</div>
            <div class="word" draggable="true" data-word="80">√80</div>
            <div class="word" draggable="true" data-word="18">√18</div>
            <div class="word" draggable="true" data-word="11/3">11/3</div>
            <div class="word" draggable="true" data-word="-9/2">-9/2</div>
            <div class="word" draggable="true" data-word="-12">-12</div>
            <div class="word" draggable="true" data-word="50">√50</div>
            <div class="word" draggable="true" data-word="15">√15</div>
            <div class="word" draggable="true" data-word="7/3">7/3</div>
            <div class="word" draggable="true" data-word="5/6">5/6</div>
            <div class="word" draggable="true" data-word="-8">-8</div>
            <div class="word" draggable="true" data-word="88">√88</div>
            <div class="word" draggable="true" data-word="13/2">13/2</div>
            <div class="word" draggable="true" data-word="24">√24</div>
            <div class="word" draggable="true" data-word="-11/4">-11/4</div>
            <div class="word" draggable="true" data-word="-16">-16</div>
            <div class="word" draggable="true" data-word="55">√55</div>
            <div class="word" draggable="true" data-word="30">√30</div>
            <div class="word" draggable="true" data-word="11/5">11/5</div>
            <div class="word" draggable="true" data-word="3/2">3/2</div>
            <div class="word" draggable="true" data-word="-7">7</div>
        `;

        document.querySelectorAll('.word').forEach(makeDraggable);
    });
});
