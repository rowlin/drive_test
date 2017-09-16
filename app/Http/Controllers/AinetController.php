<?php

namespace App\Http\Controllers;

use App\Ainet;
use Illuminate\Http\Request;

use Illuminate\Foundation\Validation\ValidatesRequests;

class AinetController extends Controller
{

    use ValidatesRequests;


    public function index(){
        $ainet = Ainet::all();
        return view('home.ainet', compact('ainet'));
    }

    public function edit($id){
        $disc = Ainet::findOrFail($id);
        return view('home.edit', compact('disc'));
    }


    public function update(Request $request){
        $this->validate($request, [
            'name' => 'required | min: 3',
            'desc' => 'required | min: 5',
        ]);
        Ainet::findOrFail($request->id)->update($request->all());
        return redirect()->route('discipline')->with('message', 'Discipline updated');
    }

    public function new_disc(){
        return view('home.new_ainet');
    }

    public function expulsion(Request $data){
        dd($data);
        
    }


    public function create(Request $request){

        $this->validate($request, [
            'name' => 'required | min: 3',
            'desc' => 'required | min: 5',
        ]);
        $disc = new Ainet();
        $disc->name = $request->name;
        $disc->about = $request->desc;
        $disc->save();
        return redirect()->route('discipline')
            ->with('message','Discipline created successfully');
    }

    public function delete(Request $request){

        Ainet::find($request->id)->delete();
        return redirect()->route('discipline')
            ->with('message','Duscipline deleted successfully');


    }


}
