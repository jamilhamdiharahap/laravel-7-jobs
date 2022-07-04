<?php

namespace App\Http\Controllers\otentikasi;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;
use RealRashid\SweetAlert\Facades\Alert;

class loginController extends Controller
{

    public function index(){

        return view('loginadmin');
    }

    public function login(Request $request){
        $akun = User::where('email',$request->email)->First();
        if($akun){
            if($request->password == $akun->password){
                if($akun->Status->status == "master"){
                    session([
                        'login' => true,
                        'akun' => $akun->name,
                        'status' => $akun->Status->status,
                        'logo' => $akun->logo,
                        'email' => $akun->email
                    ]);
                    Alert::success('Success Title', 'Success Message');
                    return redirect('/master')->with('success', 'Task Created Successfully!');
                }
            }
        }
        return redirect('/loginadmin')->with('message','invalid email end password');

    }

    public function logoutmaster(Request $request){

        $request->session()->flush();
        return redirect('/loginadmin');
    }
}
