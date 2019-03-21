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
    //    Stat::create([
    //     'confirm_id' =>$req->confirm_id,
    //     'date_les' => $req->date_les,
    //     'mention' => $req->mention
    //    ]);
    $path = Storage::disk('public')->put('Bukti Belajar/'.$_FILES['prove']['name'],
        file_get_contents($_FILES['prove']['tmp_name']));
        $stat-> prove=  'storage/Bukti Belajar/'.$_FILES['prove']['name'];
        $stat-> confirm_id = $req->confirm_id;
        $stat-> date_les = $req->date_les;
        $stat-> mention = $req->mention;
        $stat-> save();
       return redirect(route('guru'));
    }
    
    public function LinkVideo(Request $req, Confirm $confirm)
    {
       $confirm-> link_video = $req->link_video;

       $confirm->save();
       return redirect(route('guru'));
    }
}
