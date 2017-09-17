<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected  $table= 'questions';
    protected $fillable = ['question' , 'ans1', 'ans2' , 'ans3' , 'ans4'];

    public function answers(){
        return $this->hasOne('App\Answer', 'questions_id');
    }

}
