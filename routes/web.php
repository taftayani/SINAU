<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.home');
});


Auth::routes();
Route::resource('survey','SurveyController');
Route::post('/survey', 'SurveyController@survey')->name('survey');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('user','UserController@edit')->name('user');
Route::put('edit/{user}','UserController@update')->name('edit');
Route::get('profile','UserController@profile')->name('layouts.profile');
Route::get('beranda','UserController@dashboard')->name('beranda');
Route::get('sinau.offline','Pruduct@index')->name('sinau_offline');


//guru
Route::get('pengajar','TeacherController@index')->name('guru');
Route::get('profilePengajar','TeacherController@profile')->name('Data_Guru');
Route::get('PilihGuru/{teacher}','TeacherController@ChooseTeacher')->name('Pilih_guru');
Route::get('Konfirmasi/{teacher}','TeacherController@Confirm')->name('confirm');
Route::post('InputDataGuru','TeacherController@create')->name('input_guru');
Route::post('inputMataPelajar','MataPelajaranController@InputValid')->name('input_matpel_valid');
Route::post('inputJadwalMengajar','ShceduleController@InputValidShcedule')->name('input_schedule_valid');
Route::post('inputMatPel','MataPelajaranController@input')->name('input_matpel');
Route::post('inputMatPel','MataPelajaranController@input')->name('input_matpel');
Route::get('EditDataGuru','TeacherController@edit')->name('shown_teacher');
Route::put('UbahDataTeacher/{EditDataGuru}','TeacherController@update')->name('edit_teacher');
Route::post('inputJadwal','ShceduleController@create')->name('input_schedule');
Route::get('LihatDaftarGuru','TeacherController@TeacherView')->name('name_teacher');
Route::delete('hapusSubject/{Matpel}','MataPelajaranController@destroy')->name('subject.delete');
Route::delete('hapusShcedule/{Jadwal}','ShceduleController@destroy')->name('shcedule.delete');


//confirm
Route::post('PesanLes','ConfirmController@konfirmasi')->name('order_les');
Route::put('KonfirmasiPesanan/{Pesanles}','ConfirmController@StatusConfirm')->name('konfirmasi');
Route::get('FAQ','SurveyController@FAQ')->name('faq');
Route::get('Faq','UserController@faq')->name('faq_log');
Route::post('InputFile','TeacherFileController@store')->name('input_teacher_file');
Route::delete('DeleteFile/{teacherFile}','TeacherFileController@destroy')->name('delete_file');

//payment
Route::get('Pembayaran/{confirm}','ConfirmController@Payment')->name('payment');
Route::put('InputPembayaran/{confirm}','ConfirmController@PaymentReceipt')->name('payment_input');
Route::put('KonfirmasiPembayaran/{confirm}','ConfirmController@PaymentInvoice')->name('payment_invoice');

//proses belajar 
Route::get('DataLesSiswa/{confirm}','ConfirmController@MoveStatus')->name('move');
Route::post('InputDataLes','StatController@CreateStat')->name('input_stat');
Route::put('LinkUjian/{confirm}','StatController@LinkVideo')->name('link_tes');

// Dashboard
Route::put('VerifikasiAkunGuru/{teacher}','HomeController@Verifikasi')->name('verifikasi_data');
Route::put('SoalUjian/{confirm}','HomeController@TestPic')->name('tes_last');
Route::put('AkhiriPembelajaran/{confirm}','HomeController@LastProcess')->name('last_process');

