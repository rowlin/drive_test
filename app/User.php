<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
   // use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'User';

    protected $fillable = [ 'name' , 'surname'];

    public function ainet(){
        return $this->belongsToMany('App\Ainet', 'pivot_user_ainet');
    }


}