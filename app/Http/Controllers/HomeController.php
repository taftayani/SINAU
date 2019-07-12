<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Confirm;
use App\Teacher;
use App\User;
use App\Verifikasi;
use App\mata_pelajaran;
use App\Stat;
use Illuminate\Http\File;
use App\Http\Requests\UploadRequest;
use Illuminate\Support\Facades\Storage;
use Session;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Confirm $tes, Request $request){   

        $confirm=Confirm::where('user_id',Auth::user()->id)->get();
        $stat=Stat::where('confirm_id',$tes->id)->get();
        $user=User::all();
        $teacher=Teacher::all();
        $matpel=mata_pelajaran::all();
        
        //transaksi
        $confirmSee=Confirm::all();
        return view('layouts.beranda',[
            'user'=> $user,
            'teacher'=> $teacher,
            'matpel'=> $matpel,
            'confirmSee' => $confirmSee,
            'confirm' => $confirm,
            'stat' => $stat,
        ]
      );
    }
    public function User()
    {
        $user = User::all();
        return view('dashboard.user', compact(['user','stat']));
    }
    //Teacher
    public function teacher(){
        $teacher=Teacher::all();
        return view('dashboard.teacher',compact(['teacher']));
    }

    //Transaction
    public function transaction(){
        // $transaksi_pembelajaran = DB::table('confirms as a')
        // ->select('a.*', 'b.*', 'c.*')
        // ->join('users as b', 'b.id', '=', 'a.user_id')
        // ->join('teachers as c', 'c.id', '=', 'a.teacher_id')
        // ->get();
        $transaksi_pembelajaran = Confirm::all();


        $confirmSee=Confirm::all();

        // dd($transaksi_pembelajaran);
        // return $transaksi_pembelajaran;
        
        return view('dashboard.transaction',compact(['transaksi_pembelajaran', 'confirmSee']));
    }

    //Statistics
    public function statistics(){
        $mata_pelajaran_fav = DB::table('mata_pelajarans as a')
        ->select('a.mata_pelajaran as nama', DB::raw('count(*) as jumlah'))
        ->join('confirms as b', 'a.id' , '=', 'b.subject_id')
        ->groupBy('a.mata_pelajaran')
        ->get();
        $paket_belajar_favorit = DB::table('confirms')
        ->select('packet as nama', DB::raw('count(*) as jumlah'))
        ->groupBy('packet')
        ->get();
        $guru_fav = DB::table('teachers as a')
        ->select('a.user_id as nama', DB::raw('count(*) as jumlah'))
        ->join('confirms as b', 'a.id' , '=', 'b.teacher_id')
        ->groupBy('a.user_id')
        ->get();
        $months = DB::table('months as a')->select('a.name', DB::raw('count(b.created_at) as jumlah'))
        ->leftJoin('confirms as b', DB::raw('MONTH(b.created_at)'), '=', 'a.id')
        ->groupBy('a.name')
        ->orderBy('a.id', 'asc')
        ->get();
        return view('dashboard.statistics',compact(['mata_pelajaran_fav', 'paket_belajar_favorit', 'guru_fav', 'months']));
    }


// Dashboard Verifikasi
    public function Verifikasi(Request $request,Teacher $teacher)
    {
    $teacher->verifikasi = 'Akun Sudah Diverifikasi';
    $teacher->save();
    return redirect(route('home'));

   }
   public function TestPic(Request $request, Confirm $confirm)
   {
        $path = Storage::disk('public')->put('Soal/'.$_FILES['test_file_last']['name'],
        file_get_contents($_FILES['test_file_last']['tmp_name']));
       
       $confirm->test_file = 'storage/Soal/'.$_FILES['test_file_last']['name'];
       $confirm->save();
       return redirect(route('home'));
   }
   public function LastProcess(Request $request, Confirm $confirm)
   {    
        $path = Storage::disk('public')->put('Bukti Bayar Pengajar/'.$_FILES['photo_last_pay']['name'],
        file_get_contents($_FILES['photo_last_pay']['tmp_name']));
       $confirm-> score = $request->score;
       $confirm-> photo_last_pay = 'storage/Bukti Bayar Pengajar/'.$_FILES['photo_last_pay']['name'];
       $confirm-> save();
       return redirect(route('home'));
   }

   public function dashboard(){
       $teacher_choosed = DB::select('SELECT teacher_id, count(teacher_id) as teacher FROM `shcedules` GROUP BY teacher_id');
       $contract = DB::select('SELECT count(day) FROM `shcedules` GROUP BY month(created_at)');

        $mata_pelajaran_fav = DB::table('mata_pelajarans as a')
        ->select('a.mata_pelajaran as nama', DB::raw('count(*) as jumlah'))
        ->join('confirms as b', 'a.id' , '=', 'b.subject_id')
        ->groupBy('a.mata_pelajaran')
        ->get();
        $paket_belajar_favorit = DB::table('confirms')
        ->select('packet as nama', DB::raw('count(*) as jumlah'))
        ->groupBy('packet')
        ->get();
        $guru_fav = DB::table('teachers as a')
        ->select('a.ktp as nama', DB::raw('count(*) as jumlah'))
        ->join('confirms as b', 'a.id' , '=', 'b.teacher_id')
        ->groupBy('a.ktp')
        ->get();
        $months = DB::table('months as a')->select('a.name', DB::raw('count(b.created_at) as jumlah'))
        ->leftJoin('confirms as b', DB::raw('MONTH(b.created_at)'), '=', 'a.id')
        ->groupBy('a.name')
        ->orderBy('a.id', 'asc')
        ->get();
        return view('dashboard.index',compact(['mata_pelajaran_fav', 'paket_belajar_favorit', 'guru_fav', 'months']));
    }
}
