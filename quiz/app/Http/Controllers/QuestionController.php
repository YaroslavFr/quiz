<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Question;

class QuestionController extends Controller
{
    public function test()
    {
        return view('questions');
    }
}
