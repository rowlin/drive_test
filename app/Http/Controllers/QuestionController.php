<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class QuestionController extends Controller
{


    function getrand($limit, $max_num)
    {
        $used_nums = array();
        while ($limit) {
            $random = rand(0, $max_num);
            $limit -= !isset($used_nums[$random]);
            $used_nums[$random] = Question::where('id', $random)->get();
        }
        return $used_nums;
    }

    //start
    //ma можно определять на старте
    public function index($limit = 10)
    {
        $questions = Question::all();
        //rand to test 3 answers
        $max_num = count($questions);
        $test = $this->getrand($limit, $max_num);
        return view('test.start', compact('test'));
    }

    public function test(Request $request)
    {
        dd($request);


        

    }


}
