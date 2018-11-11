<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Teacher;

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
    public function index()
    { 
            // $teacher=Teacher::where('user_id', Auth::user()->id)->all();
            //   return view('layouts.beranda',[
            //       'teacher' => $teacher
            //   ]);
            return view('layouts.beranda');
    }
      
    
}
