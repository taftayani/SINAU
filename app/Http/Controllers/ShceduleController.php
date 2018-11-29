<?php

namespace App\Http\Controllers;

use App\Shcedule;
use App\Teacher;
use Auth;
use Session;

use Illuminate\Http\Request;

class ShceduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'day' => 'required',
            'time_les' => 'required',
          ]);
        //   foreach($req->day as $days){
                Shcedule::create([
                    'teacher_id' => $teacher->id,
                    'day' => $req->day,
                    'time_les' => $req->time_les,
                ]);
        //   }
          return view('layouts.EditDataTeacher',[
            'teacher' => $teacher
        ]);

    }

    public function InputValidShcedule(Request $req)
    {
        $teacher=Teacher::where('user_id', Auth::user()->id)->first();
        $this->validate($req, [
            'day' => 'required',
            'time_les' => 'required',
          ]);
       
                Shcedule::create([
                    'teacher_id' => $teacher->id,
                    'day' => $req->day,
                    'time_les' => $req->time_les,
                ]);
                Session::flash('shcedule','data berhasil, silahkan ke beranda ngajar');        
          return view('layouts.profileTeacher',[
            'teacher' => $teacher
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shcedule  $shcedule
     * @return \Illuminate\Http\Response
     */
    public function show(Shcedule $shcedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shcedule  $shcedule
     * @return \Illuminate\Http\Response
     */
    public function edit(Shcedule $shcedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shcedule  $shcedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shcedule $shcedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shcedule  $shcedule
     * @return \Illuminate\Http\Response
     */
    public function destroy($shcedule)
    {
        $shcedule = Shcedule::find($shcedule);

        $shcedule->delete();
        return redirect(route('shown_teacher'));
    }
}
