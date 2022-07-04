<?php

namespace App\Http\Controllers\jobs;

use App\Http\Controllers\Controller;
use App\jobs;
use App\User;
use Illuminate\Http\Request;

class lowonganController extends Controller
{
    public function getLowongan(){

        $lowongan = jobs::orderBy('created_at',"DESC")->paginate(1);
        return view('jobs',compact('lowongan'));
    }

    public function getLowonganHome(){

        $lowonganhome = jobs::orderBy('created_at',"DESC")->paginate(5);
        $countJobs = jobs::all()->count();
        $countUser = User::where('status',"ayji919V")->count();
        $countCompany = User::where('status',"@aB&IT!9")->count();
        return view('home',compact('lowonganhome','countUser','countCompany','countJobs'));
    }


}
