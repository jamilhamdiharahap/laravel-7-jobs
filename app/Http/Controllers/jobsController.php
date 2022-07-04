<?php

namespace App\Http\Controllers;

use App\jobs;
use App\jobs_kategori;
use App\jobs_type;
use Illuminate\Http\Request;


class jobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = jobs::where('id_admin',session('id'))->get();
        $type = jobs_type::where('id_admin',session('id'))->get();
        $ktg = jobs_kategori::all();
        return view('admin.jobs',compact('jobs','type','ktg'));
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
        function random($length = 8){
            $string = "123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%&abcdefghijklmnopqrstuvwxyx";
            return substr(str_shuffle(str_repeat($string, 5)), 0, $length);
        }

        jobs::create([
            'id' => random(),
            'id_type'=> $request->id_type,
            'id_ktg' => $request->id_ktg,
            'id_admin' => session('id'),
            'desc' => $request->desc,
            'salary'=> $request->salary
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $post= jobs::find($id);
        $post->delete();
        return back();
    }
}



