<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Usercontroller extends Controller
{
    public function create(){
        return view('create user');
    }
    public function store(Request $request){
        $name = $request->input('name');
        $age = $request->input('age');
        $contact = $request->input('contact');
        $email = $request->input('email');
        $password = $request->input('password');


        $user = new User;
        $user->name = $name;
        $user->age = $age;
        $user->contact = $contact;
        $user->email = $email;
        $user->password= $password;
        $user->save();

        // return " User has been Created!!";
        return redirect('/list');

    }
    public function list(){
        $users = User::all();
        return view('list',['users'=>$users]);
    }
    public function edit($id){
        $user = User::find($id);
        return view ('edit',['user'=>$user]);

    }
    public function update(Request $request,$id){
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->age = $request->input('age');
        $user->contact = $request->input('contact');
        $user->email = $request->input('email');
        $user->save();
        return redirect('/list');
    }
    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/list');
    }
}
