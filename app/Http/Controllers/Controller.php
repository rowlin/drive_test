<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Ainet;
class Controller extends BaseController
{

    public function index(){
        $ainet = Ainet::all();
        return view('home.ainet', compact('ainet'));
    }

    public function update_ainet($id){


    }

    public function create_ainet(){


    }


    public function search_ainet(){

    }


    public function delete_ainet(){


    }



}
