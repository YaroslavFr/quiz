<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function index(){
        $questions = Questions::all();
        dd($questions);
        // return view('/question',compact('questions'));
    }
}
