<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mata_pelajaran;
use App\Teacher;
use Auth;
use Session;

class MataPelajaranController extends Controller
{
    public function Index()
    {

    }

    public function InputValid(Request $req)
    {
        $teacher=Teacher::where('user_id', Auth::user()->id)->first();

        foreach ($req->mata_pelajaran as $mata_pilihan) {
            mata_pelajaran::create([
                'teacher_id' => $teacher->id,
               'mata_pelajaran'=> $mata_pilihan,
              ]);
        }
        Session::flash('subject','data berhasil, isi jadwal');
          return view('layouts.profileTeacher',[
              'teacher' => $teacher
          ]);
    }
    public function input(Request $req)
    {
        $teacher=Teacher::where('user_id', Auth::user()->id)->first();

        foreach ($req->mata_pelajaran as $mata_pilihan) {
            mata_pelajaran::create([
                'teacher_id' => $teacher->id,
               'mata_pelajaran'=> $mata_pilihan,
              ]);
        }
        return redirect (route('shown_teacher'));
    }

   
    public function destroy($subject)
    {     
        $teacher=Teacher::where('user_id', Auth::user()->id)->first();
        $subject = mata_pelajaran::find($subject);
        
        $subject->delete();   
        return redirect (route('shown_teacher'));
    }

}
