<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = 'answers';
    protected $fillable = ['questions_id' , 'ans1', 'ans2', 'ans3', 'ans4'];

    public function question(){
        return $this->belongsTo('App\Question');
    }



}
