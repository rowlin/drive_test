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




    public function check($question , $position ,$value ){
        $current = Question::where('id', $question)->first();
        switch ($position){
            case 1 : $ans = $current->answers->ans_1; break;
            case 2 : $ans = $current->answers->ans_2; break;
            case 3 : $ans = $current->answers->ans_3; break;
            case 4 : $ans = $current->answers->ans_4; break;
            default : dd($position);
        }

        if($value == $ans) {
           return "ok";
        }
        else return "err";
    }


    public function test(Request $request)
    {
        $result = array();
        $cur_questions = array();
        $check_cur_arr = array();
        $count = 1;

        foreach ($request->question as  $question => $value){
           $current =  Question::where('id' ,$question)->first();

            if(!in_array($question, $check_cur_arr )) {
                $check_cur_arr[$count] = $current->id;
                $cur_questions[$count++]= $current;
            }
            for($i = 1 ; $i<= 4 ; $i++ ) {
                if (isset($request->question[$question][$i])) {
                    $result[$question][$i] = $this->check($question , $i ,  $value[$i]);
                } else {
                    $result[$question][$i] = $this->check($question , $i , 0);
                };
            }
        }
        return view('result.index', compact('result' , 'cur_questions'));
    }


}
