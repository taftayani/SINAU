<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Confirm;
use App\Teacher;
use App\User;
use App\Verifikasi;
use App\mata_pelajaran;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){   

        $confirm=Confirm::where('user_id',Auth::user()->id)->get();
        // return Auth::user();
        $teacher=Teacher::all();
        $matpel=mata_pelajaran::all();
        $confirmSee=Confirm::all();
        $user=User::all();
        return view('layouts.beranda',[
            'user'=> $user,
            'teacher'=> $teacher,
            'matpel'=> $matpel,
            'confirmSee'=> $confirmSee,
            'confirm' => $confirm
        ]
      );
    }

    public function Verifikasi(Request $request,Teacher $guru)
    {
    // $guru=Teacher::all();
    $guru = Teacher::where('verifikasi', 'Belum Verifikasi')->get();
   //  $verified = verifikasi::find($guru);
    
//    $tes-> verifikasi= $request->verifikasi;
//    $tes-> save();
    return $guru;
     Verifikasi::create([
        'teacher_id' => $guru,
        'verifikasi' => $request->verifikasi,
     ]);
    //  return $req;
    return redirect(route('home'));

   }
    
}
