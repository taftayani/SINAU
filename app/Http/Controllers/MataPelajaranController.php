<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mata_pelajaran;
use App\Teacher;
use Auth;

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
                'teacher_nama_depan' => $teacher->nama_depan,
               'mata_pelajaran'=> $mata_pilihan,
              ]);
        }
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
                'teacher_nama_depan' => $teacher->nama_depan,
               'mata_pelajaran'=> $mata_pilihan,
              ]);
        }
          return view('layouts.sinauOffTeacher',[
              'teacher' => $teacher
          ]);
    }

}
