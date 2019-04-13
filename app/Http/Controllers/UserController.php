<?php

namespace App\Http\Controllers;

use App\User;
use App\Confirm;
use Illuminate\Http\Request;
// use Storage;
use Illuminate\Http\File;

use Auth;
use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Facades\Storage;

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
    public function edit(Request $request)
    {
        //
        $id=$request->id;
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

        $this->validate($request, [
          'nama_depan' => 'string|max:255',
          'nama_belakang' => 'string|max:255',
          'username' => 'string|max:255',
          'password' => 'required|min:6|max:8',
          'foto' => 'nullable|max:2000',
          'phone' => 'max:11',
          'address' => 'string|max:191',

        ]);
        
        $path = Storage::disk('public')->put('images/'.$_FILES['foto']['name'],
        file_get_contents($_FILES['foto']['tmp_name']));

        // $path = Storage::disk('public')->put('avatars', $request->foto);
        $user->update([
          'nama_depan'=>$request->nama_depan,
          'nama_belakang'=>$request->nama_belakang,
          'password'=>bcrypt($request->password),
          'phone'=>$request->phone,
          'birthday'=>$request->birthday,
          'address'=>$request->address,
          'district' => $request->district,
          'region' => $request->region,
          'province' => $request->province,
          'pos_code' => $request->pos_code,
          'foto'=> 'storage/images/'.$_FILES['foto']['name'],
        //   'foto' => $path
      ]);
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

    public function dashboard()
    {
      $confirm=Confirm::where('user_id',Auth::user()->id)->get();

      return view('layouts.beranda',[
          'confirm'=>$confirm
      ]
    
    );
    }

    public function faq()
    {
       return view('layouts.FAQAfterLogin');
    }
}
