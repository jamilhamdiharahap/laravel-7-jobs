<?php

namespace App\Http\Controllers;

use App\profil;
use Illuminate\Http\Request;

class profilController extends Controller
{

    public function profil(Request $request){

        function random($length = 8){
            $string = "123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%&abcdefghijklmnopqrstuvwxyx";
            return substr(str_shuffle(str_repeat($string, 5)), 0, $length);
        }

        profil::create([
            'id' => random(),
            'address' => $request->address,
            'website' => $request->website,
            'employee' => $request->employee,
            'since' => $request->since,
            'ig' => $request->ig,
            'title' => $request->title,
            'fb' => $request->fb,
            'tw' => $request->tw,
            'tentang' => $request->tentang,
            'id_admin' => session('id')
        ]);

        return redirect('profil');
    }

    public function companies(){

        $profils = profil::orderBy('created_at',"ASC")->paginate(10);

        return view('company',compact('profils'));
    }
    public function detail(){

        $profils = profil::orderBy('created_at',"ASC")->paginate(20);

        return view('details',compact('profils'));
    }
}
