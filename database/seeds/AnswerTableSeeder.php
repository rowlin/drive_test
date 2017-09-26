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

        Answer::create(array(
            'questions_id'  => '11',
            'ans_1' => '0',
            'ans_2' => '1',
            'ans_3' => '1',
            'ans_4' => '1',
        ));

        Answer::create(array(
            'questions_id'  => '12',
            'ans_1' => '0',
            'ans_2' => '0',
            'ans_3' => '0',
            'ans_4' => '1',
        ));

        Answer::create(array(
            'questions_id'  => '13',
            'ans_1' => '0',
            'ans_2' => '1',
            'ans_3' => '0',
            'ans_4' => '0',
        ));

        Answer::create(array(
            'questions_id'  => '14',
            'ans_1' => '0',
            'ans_2' => '0',
            'ans_3' => '1',
            'ans_4' => '0',
        ));

        Answer::create(array(
            'questions_id'  => '15',
            'ans_1' => '0',
            'ans_2' => '0',
            'ans_3' => '1',
            'ans_4' => '0',
        ));

        Answer::create(array(
            'questions_id'  => '16',
            'ans_1' => '1',
            'ans_2' => '1',
            'ans_3' => '0',
            'ans_4' => '0',
        ));

        Answer::create(array(
            'questions_id'  => '17',
            'ans_1' => '0',
            'ans_2' => '1',
            'ans_3' => '1',
            'ans_4' => '1',
        ));


        Answer::create(array(
            'questions_id'  => '18',
            'ans_1' => '0',
            'ans_2' => '1',
            'ans_3' => '1',
            'ans_4' => '0',
        ));

      Answer::create(array(
            'questions_id'  => '19',
            'ans_1' => '1',
            'ans_2' => '1',
            'ans_3' => '1',
            'ans_4' => '0',
        ));


        Answer::create(array(
            'questions_id'  => '20',
            'ans_1' => '1',
            'ans_2' => '1',
            'ans_3' => '1',
            'ans_4' => '1',
        ));

        Answer::create(array(
            'questions_id'  => '21',
            'ans_1' => '0',
            'ans_2' => '1',
            'ans_3' => '0',
            'ans_4' => '0',
        ));
        
        Answer::create(array(
            'questions_id'  => '22',
            'ans_1' => '0',
            'ans_2' => '0',
            'ans_3' => '1',
            'ans_4' => '0',
        ));
        
        Answer::create(array(
            'questions_id'  => '23',
            'ans_1' => '0',
            'ans_2' => '1',
            'ans_3' => '1',
            'ans_4' => '0',
        ));

        Answer::create(array(
            'questions_id'  => '24',
            'ans_1' => '0',
            'ans_2' => '1',
            'ans_3' => '0',
            'ans_4' => '0',
        ));


        Answer::create(array(
            'questions_id'  => '25',
            'ans_1' => '0',
            'ans_2' => '1',
            'ans_3' => '0',
            'ans_4' => '0',
        ));

        Answer::create(array(
            'questions_id'  => '26',
            'ans_1' => '1',
            'ans_2' => '0',
            'ans_3' => '0',
            'ans_4' => '0',
        ));

        Answer::create(array(
            'questions_id'  => '27',
            'ans_1' => '1',
            'ans_2' => '1',
            'ans_3' => '1',
            'ans_4' => '1',
        ));

        Answer::create(array(
            'questions_id'  => '28',
            'ans_1' => '1',
            'ans_2' => '1',
            'ans_3' => '1',
            'ans_4' => '1',
        ));
        
        
        Answer::create(array(
        'questions_id'  => '29',
        'ans_1' => '0',
        'ans_2' => '1',
        'ans_3' => '1',
        'ans_4' => '0',
    ));

        Answer::create(array(
            'questions_id'  => '30',
            'ans_1' => '1',
            'ans_2' => '0',
            'ans_3' => '1',
            'ans_4' => '0',
        ));

        Answer::create(array(
            'questions_id'  => '31',
            'ans_1' => '1',
            'ans_2' => '0',
            'ans_3' => '0',
            'ans_4' => '0',
        ));

        Answer::create(array(
            'questions_id'  => '32',
            'ans_1' => '1',
            'ans_2' => '0',
            'ans_3' => '0',
            'ans_4' => '0',
        ));

        Answer::create(array(
            'questions_id'  => '33',
            'ans_1' => '1',
            'ans_2' => '0',
            'ans_3' => '0',
            'ans_4' => '0',
        ));
        
        
        
        











    }
}
