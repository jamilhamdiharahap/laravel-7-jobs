<?php

namespace App\Http\Controllers\admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class accountController extends Controller
{
    public function register(Request $request){

        function random($length = 8){
            $string = "123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%&abcdefghijklmnopqrstuvwxyx";
            return substr(str_shuffle(str_repeat($string, 5)), 0, $length);
        }
        User::create([
            'id' => random(),
            'name'=> $request->name,
            'logo' => $request->logo,
            'email' => $request->email,
            'password'=> Hash::make($request->password),
            'status' => "@aB&IT!9"
        ]);

        return back();
    }
}
