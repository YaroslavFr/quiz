<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Игровой сайт: Вопросы и ответы</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        nav {
            margin: 20px 0;
        }
        nav a {
            margin: 0 15px;
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
            background: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .question {
            margin: 20px 0;
        }
        .question h2 {
            background: #f0f0f0;
            padding: 10px;
            border-left: 5px solid #4CAF50;
        }
        .answers {
            margin-top: 10px;
        }
        .answer {
            background: #e7e7e7;
            padding: 10px;
            margin: 5px 0;
            cursor: pointer;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .answer:hover {
            background: #d4d4d4;
        }
        .correct {
            background: #c8e6c9; /* Зеленый цвет для правильного ответа */
        }
        .incorrect {
            background: #ffccbc; /* Красный цвет для неправильного ответа */
        }
    </style>
</head>
<body>

<header>
    <h1>Вопросы и ответы</h1>
</header>

<div class="container">
    <a href="/questions/">Вопросы</a>
</div>
<script>
    const answers = document.querySelectorAll('.answer');
    let score = 0;

    answers.forEach(answer => {
        answer.addEventListener('click', function() {
            // Сброс цвета для всех ответов
            answers.forEach(ans => {
                ans.classList.remove('correct', 'incorrect');
            });

            // Проверка правильности ответа
            if (this.dataset.correct === 'true') {
                this.classList.add('correct');
                score += 3; // Начисляем 3 балла за правильный ответ
            } else {
                this.classList.add('incorrect');
            }
        });
    });

    document.getElementById('submit').addEventListener('click', function() {
        document.getElementById('score').innerText = `Ваш счёт: ${score} баллов`;
    });
</script>

</body>
</html>
