<?php

namespace App\Http\Controllers;

use App\Ainet;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\User;


class UserController extends Controller
{
     use ValidatesRequests;

    public function index(){
        $users = User::all();
        return view('user.users', compact('users'));
    }

    public function edit($id){
        $user = User::findOrFail($id);
        $disc = Ainet::all();
        return view('user.edit', compact('user', 'disc'));
    }


    public function update(Request $request){
        $this->validate($request, [
            'name' => 'required | min: 2',
            'surname' => 'required | min: 3',
        ]);



        $cur_user = User::findOrFail($request->id);

        if(!empty($request->disc)){
            $cur_user->ainet()->detach();
            foreach ($request->disc as $value) {
                $cur_user->ainet()->attach($value);
            }
        }

        $cur_user->update($request->all());


        return redirect()->route('users')->with('message', 'User updated');
    }

    public function new_user(){
        $disc = Ainet::all();
        return view('user.new', compact('disc'));
    }


    public function create(Request $request){
        $this->validate($request, [
            'name' => 'required | min: 2',
            'surname' => 'required | min: 3',
        ]);

        $disc = new User();
        $disc->name = $request->name;
        $disc->surname = $request->surname;
        $disc->save();

        if(!empty($request->disc)){
            foreach ($request->disc as $value) {
                $disc->ainet()->attach($value);
                }
        }



        return redirect()->route('users')
            ->with('message','User created successfully');
    }

    public function delete(Request $request){

        User::find($request->id)->delete();
        return redirect()->route('users')
            ->with('message','User deleted successfully');
    }
    
    
    
}
