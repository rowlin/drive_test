<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ainet extends Model
{
    protected  $table = 'Ainet';
    
    protected  $fillable = ['name','about'];
    
    public  function users(){
      return $this->belongsToMany('App\User', 'pivot_user_ainet');
    }
}


