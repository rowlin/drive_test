<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Answer;
class AnswerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('answers')->delete();

        Answer::create(array(
            'questions_id'  => '1',
            'ans_1' => '1',
            'ans_2' => '0',
            'ans_3' => '1',
            'ans_4' => '0',
        ));


        Answer::create(array(
            'questions_id'  => '2',
            'ans_1' => '1',
            'ans_2' => '1',
            'ans_3' => '0',
            'ans_4' => '0',
        ));



        Answer::create(array(
            'questions_id'  => '3',
            'ans_1' => '1',
            'ans_2' => '1',
            'ans_3' => '1',
            'ans_4' => '1',
        ));


        Answer::create(array(
            'questions_id'  => '4',
            'ans_1' => '1',
            'ans_2' => '1',
            'ans_3' => '0',
            'ans_4' => '0',
        ));



        Answer::create(array(
            'questions_id'  => '5',
            'ans_1' => '1',
            'ans_2' => '1',
            'ans_3' => '1',
            'ans_4' => '1',
        ));


        Answer::create(array(
            'questions_id'  => '6',
            'ans_1' => '1',
            'ans_2' => '1',
            'ans_3' => '1',
            'ans_4' => '1',
        ));

        Answer::create(array(
            'questions_id'  => '7',
            'ans_1' => '1',
            'ans_2' => '1',
            'ans_3' => '1',
            'ans_4' => '1',
        ));


        Answer::create(array(
            'questions_id'  => '8',
            'ans_1' => '0',
            'ans_2' => '0',
            'ans_3' => '1',
            'ans_4' => '1',
        ));



        Answer::create(array(
            'questions_id'  => '9',
            'ans_1' => '0',
            'ans_2' => '1',
            'ans_3' => '0',
            'ans_4' => '1',
        ));


        Answer::create(array(
            'questions_id'  => '10',
            'ans_1' => '0',
            'ans_2' => '0',
            'ans_3' => '1',
            'ans_4' => '1',
        ));






    }
}
