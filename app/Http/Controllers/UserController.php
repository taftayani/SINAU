<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas= User::all()->toArray();
        return view('layouts.profile',compact('data'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data= User::find($id);
        return view('layouts.profile',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $req)
    {
        //
        $id=$req->id;
        $data= User::findorFail($id);
        return view('layouts.profile',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $user)
    {
        //
        $id=$request->id;
        // $this->validate($request, [
        //   'username' => 'required|unique:users',
        //   'password' => 'required',
        //   'foto' => 'required|mimes:jpeg,png,bmp',
        // ]);
        // User::where('id',$id)->update([
        //   'nama_depan'=>$request->nama_depan,
        //   'nama_belakang'=>$request->nama_belakang,
        //   'username'=>$request->username,
        //   'password'=>$request->password,
        //   'foto'=>$request->foto,
        // ]);
        $user->update($request->all());
        return redirect(route('layouts.profile'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function profile()
    {
      return view('layouts.profile');
    }
}
