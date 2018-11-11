<?php

namespace App\Http\Controllers;

use App\Teacher;
use App\User;
use App\mata_pelajaran;
use Illuminate\Http\Request;
use Auth;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function TeacherView()
    {
        $teacher=Teacher::all();
        $teacher_see=Teacher::where('user_id', Auth::user()->id)->first();
        $subject=mata_pelajaran::where('teacher_id',$teacher_see->id)->get();
        return view('layouts.LihatGuru',[
            'teacher' => $teacher
        ],[
            'subject' => $subject
        ]);
    }

  
    public function index()
    {
        $teacher=Teacher::where('user_id', Auth::user()->id)->first();
        return view('layouts.sinauOffTeacher',[
            'teacher' => $teacher
        ]);
    }  
    public function ChooseTeacher()
    {
        return view('layouts.orderTeacher');
    } 

    public function Confirm()
    {
        return view('layouts.confirmTeacher');
    }
    public function profile()
    {
        $teacher=Teacher::where('user_id', Auth::user()->id)->first();
        return view('layouts.profileTeacher',[
            'teacher' => $teacher
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        $teacher=Teacher::where('user_id', Auth::user()->id)->first();
        $this->validate($req, [
            'ktp' => 'required|max:255',
            'npwp' => 'required|max:255',
            'pendidikan' => 'required',
            'resume' => 'required|max:300',
          ]);
          Teacher::create([
            'user_id' => Auth::user()->id,
            'user_nama_depan' => Auth::user()->nama_depan,
            'user_nama_belakang' => Auth::user()->nama_belakang,
            'user_foto' => Auth::user()->foto,
            'ktp' => $req->ktp,
            'npwp' => $req->npwp,
            'pendidikan' => $req->pendidikan,
            'resume' => $req->resume
          ]);
          return view('layouts.profileTeacher',[
            'teacher' => $teacher
        ])->with('message','data berhasil');
        Session::flash('message','data berhasil');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $teacher=Teacher::where('user_id', Auth::user()->id)->all();
          return view('layouts.beranda',[
              'teacher' => $teacher
          ]);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
       
        $show=Teacher::where('user_id', Auth::user()->id)->first();
        return view('layouts.EditDataTeacher',[
            'teacher' => $show
        ]);



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        $teacher=Teacher::where('user_id', Auth::user()->id)->first();

        $this->validate($request, [
            'ktp' => 'max:255',
            'npwp' => 'max:255',
            'pendidikan' => 'max:300',
            'resume' => 'max:300',
          ]);
        
        // 
            
            $teacher-> user_id = Auth::user()->id;
            $teacher-> user_nama_depan = Auth::user()->nama_depan;
            $teacher-> user_nama_belakang = Auth::user()->nama_belakang;
            $teacher-> user_foto = Auth::user()->foto;
            $teacher-> ktp = $request->ktp;
            $teacher-> npwp  =  $request->npwp;
            $teacher-> pendidikan = $request->pendidikan;
            $teacher-> resume = $request->resume;
       
            $teacher->save();
        
        return view('layouts.sinauoffTeacher',[
            'teacher' => $teacher
        ]);
        // return $teacher;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        //
    }
}
