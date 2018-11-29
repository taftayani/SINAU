<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\verifikasi;
use App\User;
use App\Teacher;

use Auth;

class VerifikasiController extends Controller
{
   //  public function Verifikasi(Request $req, Teacher $guru)
   //  {
   //  $guru=Teacher::where('user_id', Auth::user()->id)->get();
   // //  $verified = verifikasi::find($guru);

   //   verifikasi::create([
   //      'teacher_id' => $guru->id,
   //      'verifikasi' => $req->verifikasi,
   //   ]);
   //   return $req;
   //  // return redirect(route('home'));

   // }
}
