<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Stat;
use App\Confirm;

class StatController extends Controller
{
    public function CreateStat(Request $req, Stat $stat)
    {
    //    Stat::create([
    //     'confirm_id' =>$req->confirm_id,
    //     'date_les' => $req->date_les,
    //     'mention' => $req->mention
    //    ]);
        $stat-> confirm_id = $req->confirm_id;
        $stat-> date_les = $req->date_les;
        $stat-> mention = $req->mention;
        $stat-> save();
       return redirect(route('guru'));
    }
}
