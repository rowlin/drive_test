<?php

namespace App\Http\Controllers;

use App\Answer;
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
    
    public function all(){
        $questions =  Question::paginate(5);
        return view('question.index', compact('questions'));
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




    public function check(Question $question , $position ,$value ){
        if($question->answers->ans_ . $position == $value) return true;
        else return false;
    }


    public function test(Request $request)
    {
        $result = array();
        $cur_questions = array();
        $count = 1;
        foreach ($request->question as $question){
            $current =  Question::where('id' ,key($question))->first();
            $cur_questions[$count++] = $current;
            for($i = 1 ; $i<= 4 ; $i++ ) {
                if (isset($question[key($question)][$i])) {
                    $result[$current->id][$i] = $this->check($current, $i ,  $question[key($question)][$i]);
                } else {
                    $result[$current->id][$i] = $this->check($current, $i , 0);
                };
            }
        }
        return view('result.index', compact($result , $cur_questions ));
    }


}
