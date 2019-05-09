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
        
        // return Auth::user();

        //user
        $user=User::all();
        $user_male = User::where('gender', 'Male')->get();
        $user_female = User::where('gender', 'Female')->get();

        //teacher
        $teacher=Teacher::all();
        // $teacher_male=Teacher::where('gender', 'Male')->get();
        // $teacher_female=Teacher::where('gender', 'Female')->get();

        //matpel
        $matpel=mata_pelajaran::all();
        
        //transaksi
        $confirmSee=Confirm::all();

        //statistika
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
        $total_kontrak_belajar = DB::table('months as a')->select('a.name', DB::raw('count(b.created_at) as jumlah'))
        ->leftJoin('confirms as b', DB::raw('MONTH(b.created_at)'), '=', 'a.id')
        ->groupBy('a.name')
        ->orderBy('a.id', 'asc')
        ->get();
        $total_murid = User::count();
        $total_guru = Teacher::count();
        $total_pemesanan = Confirm::count();

        // $stat=Stat::all();

        return view('layouts.beranda',[
            'user'=> $user,
            'user_male' => $user_male,
            'user_female' => $user_female,
            'teacher'=> $teacher,
            'matpel'=> $matpel,
            'confirmSee' => $confirmSee,
            'confirm' => $confirm,
            'stat' => $stat,
            'mata_pelajaran_fav' => $mata_pelajaran_fav,
            'paket_belajar_favorit' => $paket_belajar_favorit,
            // 'index_pbf' => $index_pbf,
            'guru_fav' => $guru_fav,
            'months' => $total_kontrak_belajar,
            'total_murid' => $total_murid,
            'total_guru' => $total_guru,
            'total_pemesanan' => $total_pemesanan

        ]
      );
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
        $path = Storage::disk('public')->put('Soal/'.$_FILES['test_file']['name'],
        file_get_contents($_FILES['test_file']['tmp_name']));
       
       $confirm->test_file = 'storage/Soal/'.$_FILES['test_file']['name'];
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
}
