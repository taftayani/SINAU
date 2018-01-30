<?php

namespace App\Http\Controllers;

use App\surveys;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
      return view('layouts.home');
    }
    public function survey(Request $req)
    {
      $this->validate($req, [
        'nama_depan' => 'required',
        'nama_belakang' => 'required',
        'email' => 'required|email',
        'tanggapan' => 'required'
      ]);
      surveys::create([
        'nama_depan' => $req->nama_depan,
        'nama_belakang' => $req->nama_belakang,
        'email' => $req->email,
        'tanggapan' => $req->tanggapan
      ]);
      return view('layouts.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
      // return view('survey.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // $this->validate($request, [
      //   'nama_depan' => 'required',
      //   'nama_belakang' => 'required',
      //   'email' => 'required|email',
      //   'tanggapan' => 'required'
      // ]);
      //
      //
      // surveys::create([
      //   'nama_depan' => $request->nama_depan,
      //   'nama_belakang' => $request->nama_belakang,
      //   'email' => $request->email,
      //   'tanggapan' => $request->tanggapan
      // ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function show(survey $survey)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function edit(survey $survey)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, survey $survey)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function destroy(survey $survey)
    {
        //
    }
}
