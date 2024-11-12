<?php

class Quiz{
    public string $question;

    public function showQuestion(): string {
        return 'Выведенный вопрос: '.$this->question;
    }
}

$question = new Quiz();
$question->question = 'В каком году хуе мое хуе мое?';
echo $question->showQuestion();

?>