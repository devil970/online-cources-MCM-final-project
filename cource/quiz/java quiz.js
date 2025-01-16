document.getElementById('quiz-form').addEventListener('submit', function(e) {
    e.preventDefault();
    const answers = ['c','a','a','c','c','c','a','a','a','a']  // Replace with the correct answers for each question.
    const formData = new FormData(this);
    let score = 0;

    for (let i = 1; i <= 20; i++) {
        if (formData.get(`q${i}`) === answers[i - 1]) {
            score += 2;
        }
    }

    document.getElementById('score').innerHTML = `Your Score: <span>${score}</span>`;
    document.getElementById('results').classList.remove('hidden');
});
