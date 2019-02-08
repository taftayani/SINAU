<?php

namespace App\Http\Controllers;

use App\Teacher;
use App\User;
use App\Shcedule;
use App\mata_pelajaran;
use App\Confirm;
use Illuminate\Http\Request;
use Auth;
use Session;

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
        // $subject=mata_pelajaran::where('teacher_nama_depan', $teacher_see->user_nama_depan)->get();
        $subject=mata_pelajaran::all(); 
        return view('layouts.LihatGuru',[
            'teacher' => $teacher
        ],[
            'subject' => $subject
        ]);
    }

  
    public function index()
    {  
        $teacher=Teacher::where('user_id', Auth::user()->id)->first();
        $confirm=Confirm::where('teacher_id', $teacher->id)->get();
        return view('layouts.sinauOffTeacher',[
            'teacher' => $teacher,
            'confirm' => $confirm
        ]
    );
    }  
    public function ChooseTeacher(Teacher $teacher, mata_pelajaran $subject)
    {
        // return $teacher;
        // $teacher=Teacher::all();
        // $subject=mata_pelajaran::all(); 
        
        return view('layouts.orderTeacher',[
            'teacher' => $teacher,
            'subject' => $subject
        ]);
    } 

    public function Confirm(Teacher $teacher, mata_pelajaran $subject)
    {
        
        return view('layouts.confirmTeacher',[
            'teacher' => $teacher
        ],[
            'subject' => $subject
        ]

        );
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
          Session::flash('message','data berhasil');
          return view('layouts.profileTeacher',[
            'teacher' => $teacher
        ]);
        // ->with('message','data berhasil');
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
        // $subject=mata_pelajaran::where('id',$id)->first();
        $this->validate($request, [
            'ktp' => 'max:255',
            'npwp' => 'max:255',
            'pendidikan' => 'max:300',
            'resume' => 'max:300',
          ]);
        
        // 
            
            $teacher-> user_id = Auth::user()->id;
            $teacher-> ktp = $request->ktp;
            $teacher-> npwp  =  $request->npwp;
            $teacher-> pendidikan = $request->pendidikan;
            $teacher-> resume = $request->resume;
            $teacher->save();
        
        // return view('layouts.EditDataTeacher',[
        //     'teacher' => $teacher,
        //     'subject' => $subject
        // ]);
        return redirect (route('shown_teacher'));
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
