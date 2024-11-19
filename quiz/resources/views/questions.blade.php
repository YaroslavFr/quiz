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
    <h1>Игровой сайт: Вопросы и ответы</h1>
</header>

<div class="container">
    @foreach($users as $user)
        <?echo '123';?>
    @endforeach;
    <div class="question">
        <h2>Вопрос 1: Какой язык программирования используется для веб-разработки?</h2>
        <div class="answers">
            <div class="answer" data-correct="false">Python</div>
            <div class="answer" data-correct="true">JavaScript</div>
            <div class="answer" data-correct="false">Java</div>
            <div class="answer" data-correct="false">C++</div>
        </div>
    </div>

    <div class="question">
        <h2>Вопрос 2: Какой элемент HTML используется для создания ссылок?</h2>
        <div class="answers">
            <div class="answer" data-correct="true">&lt;a&gt;</div>
            <div class="answer" data-correct="false">&lt;link&gt;</div>
            <div class="answer" data-correct="false">&lt;href&gt;</div>
            <div class="answer" data-correct="false">&lt;url&gt;</div>
        </div>
    </div>

    <div class="question">
        <h2>Вопрос 3: Какой из следующих фреймворков является фреймворком JavaScript?</h2>
        <div class="answers">
            <div class="answer" data-correct="true">React</div>
            <div class="answer" data-correct="false">Django</div>
            <div class="answer" data-correct="false">Rails</div>
            <div class="answer" data-correct="false">Flask</div>
        </div>
    </div>

    <div class="question">
        <h2>Вопрос 4: Какой цвет формирует физика в свете?</h2>
        <div class="answers">
            <div class="answer" data-correct="false">Кирпичный</div>
            <div class="answer" data-correct="true">Синий</div>
            <div class="answer" data-correct="false">Лиловый</div>
            <div class="answer" data-correct="false">Оранжевый</div>
        </div>
    </div>

    <div class="question">
        <h2>Вопрос 5: Какой из следующих океанов является самым большим?</h2>
        <div class="answers">
            <div class="answer" data-correct="true">Тихий океан</div>
            <div class="answer" data-correct="false">Атлантический океан</div>
            <div class="answer" data-correct="false">Индийский океан</div>
            <div class="answer" data-correct="false">Северный Ледовитый океан</div>
        </div>
    </div>

    <button id="submit">Отправить ответы</button>
    <h2 id="score" style="margin-top: 20px;"></h2>
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
