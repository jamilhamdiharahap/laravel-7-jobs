<?php

namespace App\Http\Controllers;

use App\Mail\MailSend;
use App\Mail\sendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailController extends Controller
{
    public function sendMail(Request $request){


        $details = [
            'cv' =>$request->cv
        ];

        Mail::from('machira41148@gmail.com','HAIII')->to($request->to)->send(new sendMail($details));

        return redirect('/lamaran');
    }
}
