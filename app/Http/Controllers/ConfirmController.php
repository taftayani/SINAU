<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Confirm;
use App\User;
use App\Teacher;
use App\mata_pelajaran;
use App\Shcedule;
use App\Stat;

use Illuminate\Http\File;
use App\Http\Requests\UploadRequest;
use Illuminate\Support\Facades\Storage;

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
                'packet' => $req->packet,
                'address_les' => $req->address_les,
              ]);
          
        }
        $confirm=Confirm::where('user_id',Auth::user()->id)->get();
          Session::flash('message','data berhasil');
          return redirect(route('home'));
    }


    public function StatusConfirm(Request $request,Confirm $Pesanles){
                
        $Pesanles-> Status = $request->Status;
        $Pesanles->save();
        Session::flash('status','data berhasil');
        return redirect(route('guru'));
    }

    public function MoveStatus(Confirm $confirm, Stat $stat)
    {
        $stat=Stat::where('confirm_id',$confirm->id)->get();
        return view('layouts.KeteranganLes',[
            'confirm' => $confirm,
            'stat'   => $stat
        ]);
    }

    public function UpdateStatus(Request $request, Confirm $confirm)
    {
        $confirm-> date_les =$request->date_les;
        $confirm-> mention=$request->mention;
        $confirm-> save();

        return $request;
    }

    public function Payment(Confirm $confirm)
    {
        // $confirm=Confirm::where('user_id',Auth::user()->id)->get();
        return view('layouts.Payment',[
            'confirm' => $confirm
        ]);
    }

    public function PaymentReceipt(Request $request, Confirm $confirm)
    {
        $path = Storage::disk('public')->put('Pembayaran/'.$_FILES['pay']['name'],
        file_get_contents($_FILES['pay']['tmp_name']));
      
            $confirm-> pay=  'storage/Pembayaran/'.$_FILES['pay']['name'];
            $confirm-> friends= $request->friends;
            $confirm-> friends2= $request->friends2;
            $confirm-> friends3= $request->friends3;
            $confirm-> friends4= $request->friends4;
            $confirm-> email_friend1= $request->email_friend1;
            $confirm-> email_friend2= $request->email_friend2;
            $confirm-> email_friend3= $request->email_friend3;
            $confirm-> email_friend4= $request->email_friend4;
            $confirm-> save();

        return redirect(route('payment',['confirm'=>$confirm->id]));
    }

    public function PaymentInvoice(Request $request, Confirm $confirm)
    {

        $confirm-> stat_pay=$request->stat_pay;
        $confirm-> save();

        return redirect(route('home'));
    }
    public function FeedbackTeacher(Request $req, Confirm $confirm)
    {
       $confirm-> score_teaching =$req->score_teaching;
       $confirm-> feedback_teaching =$req->feedback_teaching;
       $confirm->save();
        // return $confirm;
    return redirect(route('home',['confirm'=>$confirm->id]));
    }
    
}
