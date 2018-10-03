<?php

namespace App\Http\Controllers;

use App\teach;
use Illuminate\Http\Request;

class TeachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('auth.teacherRegis');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\teach  $teach
     * @return \Illuminate\Http\Response
     */
    public function show(teach $teach)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\teach  $teach
     * @return \Illuminate\Http\Response
     */
    public function edit(teach $teach)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\teach  $teach
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, teach $teach)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\teach  $teach
     * @return \Illuminate\Http\Response
     */
    public function destroy(teach $teach)
    {
        //
    }
}
