<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;

class AnswerController extends Controller
{
    public function index(){
        $answers =  Answer::all();
        return view('answer.index', compact('answers'));
    }
}
