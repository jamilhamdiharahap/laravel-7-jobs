<?php

namespace App\Http\Controllers;

use App\User;
use Cron\MonthField;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class rolesController extends Controller
{

    public function getViewMaster(){
        $count = User::all()->count();
        $tenggat = User::expired();
        $profit = User::expired();
        return view('adminm.home',compact('count','profit'));
    }

    public function getViewAccount(){

        return view('adminm.create_account');
    }

    public function getAdmin(){

        return view('admin.home');
    }

    public function getJobs(){

        return view('admin.jobs');
    }

    public function getProfil(){

        return view('admin.profil');
    }


}
