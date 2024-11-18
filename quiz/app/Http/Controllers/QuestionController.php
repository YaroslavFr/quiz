<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Question;

class QuestionController extends Controller
{
    public function __invoke()
    {
        $questions = Question::paginate(1);
        return view('question');
    }
}
