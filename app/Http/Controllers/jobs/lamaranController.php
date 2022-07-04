<?php

namespace App\Http\Controllers\jobs;

use App\Http\Controllers\Controller;
use App\jobs;
use App\Mail\sendMail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class lamaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lowongan = jobs::orderBy('created_at',"DESC")->paginate(5);
        return view('jobs',compact('lowongan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $perusahaan = User::where('email',$request->to)->first();
        $namecompany = $perusahaan->name;
        $subject = "CONTACT US - ".session('name');
        $mail = new PHPMailer(true);
        try {
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
    	    );

    		$mail->IsSMTP();
    		$mail->Host     = "mail.lokalan.co.id";
            $mail->SMTPAuth = true;
    		$mail->Username = "admin@lokalan.co.id";  // SMTP username
    	    $mail->Password = "GIm3zjPa2Mfk"; // SMTP password
    	    $mail->post     = 465;

            // Siapa yang mengirim email
            $mail->From     = session('email');
    		$mail->FromName = $request->nama;

            // Siapa yang akan menerima email
            $mail->addAddress($request->to);

            // Set email format to HTML
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = "Saya siap melamar diperusahaan ".$namecompany;
            $pdffile = $_SERVER['DOCUMENT_ROOT'] . "/asset/cv/".$request->cv;
            $mail->AddAttachment($pdffile);

            if($mail->send()){
                return redirect('/lamaran')->with(['success' => 'Pesan Berhasil di kirim']);
            }

        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = User::find($id);
        return view('lamaran',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
