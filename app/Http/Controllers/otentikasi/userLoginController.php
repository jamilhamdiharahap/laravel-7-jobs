<?php

namespace App\Http\Controllers\otentikasi;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userLoginController extends Controller
{
    public function login(Request $request){
        $akun = User::where('email',$request->email)->First();
            if($akun){
                if(Hash::check($request->password,$akun->password)){
                   if($akun->Status->status == "admin"){
                        session([
                            'login' => true,
                            'name' => $akun->name,
                            'status' => $akun->Status->status,
                            'id' => $akun->id,
                            'logo' => $akun->logo,
                            'email' => $akun->email
                        ]);

                        return redirect('/admin')->with('success','login successfully');

                   }else if($akun->Status->status == "user"){
                        session([
                            'login' => true,
                            'id' => $akun->id,
                            'name' => $akun->name,
                            'status' => $akun->Status->status,
                            'logo' => $akun->logo,
                            'email' => $akun->email

                        ]);

                        return redirect('/lamaran')->with('message','login successfully');
                   }
                }
            }
            return redirect('/login')->with('message','Email or password not found');
    }

    public function logout(Request $request){

        $request->session()->flush();
        return redirect('/');
    }

    public function logoutuser(Request $request){

        $request->session()->flush();
        return redirect('/');
    }
}
