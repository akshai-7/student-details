<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Login;
use Illuminate\Support\Facades\Hash;

class Registercontroller extends Controller
{
    public function store(Request $request){

        $request->validate(
            [
                'name'=>'required|regex:/^[A-Z]+$/i',
                'email'=>'required',
                'password'=>'required|min:8'
            ]);

            $user = new login;
            $user->name = $request ->input('name');
            $user->email = $request ->input('email');
            $user->password = Hash::make($request ->input('password'));
            $user ->save();


            return redirect('/login');

    }

}

