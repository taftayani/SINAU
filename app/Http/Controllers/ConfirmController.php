<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Confirm;
use App\User;
use App\Teacher;
use App\mata_pelajaran;
use App\Shcedule;

use Session;
use Auth;
class ConfirmController extends Controller
{
    public function konfirmasi(Request $req)
    {
        
        // $teacher=Teacher::where('user_id',Auth::user()->id)->get();
        $subject=mata_pelajaran::where('teacher_id',$req->teacher_id)->get();
        $shcedule=Shcedule::where('teacher_id',$req->teacher_id)->get();
        // return $req;
        foreach($req->shcedule_id as $les){
            Confirm::create([
                'user_id' =>  Auth::user()->id,
                'teacher_id' => $req->teacher_id,
                'subject_id' => $req->subject_id,
                'shcedule_id' => $les,
                // 'materi' => $req->materi,
                // 'day_les' => $les,
                'student' => $req->student,
                'packet' => $req->packet,
                'address_les' => $req->address_les,
              ]);
          
        }
        $confirm=Confirm::where('user_id',Auth::user()->id)->get();
          Session::flash('message','data berhasil');
          return redirect(route('home'));
    }


    public function StatusConfirm(Request $request,Confirm $Pesanles){
        
        $teacher=Teacher::where('user_id',Auth::user()->id)->first();
        // $confirmStatus=Confirm::where('teacher_id',$teacher->id)->get();
        $confirm=Confirm::where('teacher_id',Auth::user()->id)->get();
        
        $Pesanles-> Status = $request->Status;
        $Pesanles->save();
        Session::flash('status','data berhasil');
        return redirect(route('guru'));
    }

    
}
