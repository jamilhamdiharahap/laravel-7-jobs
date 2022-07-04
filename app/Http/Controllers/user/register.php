<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class register extends Controller
{
    public function register(Request $request){

        $validate = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['min:6','required']
        ]);

        function random($length = 8){
            $string = "123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%&abcdefghijklmnopqrstuvwxyx";
            return substr(str_shuffle(str_repeat($string, 5)), 0, $length);
        }

        if(!$validate){
            return redirect()->route('registeruser')->with('message','failed to register');
        }

        User::create([
            'id' => random(),
            'logo' => "user.png",
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request-> password),
            'status' => "ayji919V"
        ]);

            return redirect('/login')->with('success','success registration');


    }
}
