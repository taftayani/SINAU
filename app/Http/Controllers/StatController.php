<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Stat;
use App\Confirm;

use Illuminate\Http\File;
use App\Http\Requests\UploadRequest;
use Illuminate\Support\Facades\Storage;
class StatController extends Controller
{
    public function CreateStat(Request $req, Stat $stat)
    {
        $stat-> confirm_id = $req->confirm_id;
        $stat-> date_les = $req->date_les;
        $stat-> mention = $req->mention;
        $stat-> student_stat = $req->student_stat;
        $stat-> friends_stat = $req->friends_stat;
        $stat-> friends2_stat = $req->friends2_stat;
        $stat-> friends3_stat = $req->friends3_stat;
        $stat-> friends4_stat = $req->friends4_stat;
        $stat-> save();
       return redirect(route('guru'));
    }
    
    public function LinkVideo(Request $req, Confirm $confirm)
    {
       $confirm-> link_video = $req->link_video;

       $confirm->save();
       return redirect(route('guru'));
    }
    public function ConfirmStat(Request $req, Stat $stat)
    {
        $stat->confirm_student =$req->confirm_student;
        $stat->save();
        // return $stat;
        return redirect(route('home'));
    }
}
