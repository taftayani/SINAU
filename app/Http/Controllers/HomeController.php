<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Confirm;
use App\Teacher;
use App\User;
use App\Verifikasi;
use App\mata_pelajaran;
use App\Stat;
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
    public function index(Confirm $tes){   

        $confirm=Confirm::where('user_id',Auth::user()->id)->get();
        $stat=Stat::where('confirm_id',$tes->id)->get();
        // return Auth::user();
        $teacher=Teacher::all();
        $matpel=mata_pelajaran::all();
        $confirmSee=Confirm::all();
        $user=User::all();
        // $stat=Stat::all();
        return view('layouts.beranda',[
            'user'=> $user,
            'teacher'=> $teacher,
            'matpel'=> $matpel,
            'confirmSee' => $confirmSee,
            'confirm' => $confirm,
            'stat' => $stat,
        ]
      );
    }

    public function Verifikasi(Request $request,Teacher $teacher)
    {
    $teacher->verifikasi = 'Akun Sudah Diverifikasi';
    $teacher->save();
    return redirect(route('home'));

   }
    
}
