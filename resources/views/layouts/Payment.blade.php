@extends('content.master2')
@section('content')
 <div class="container first-payment">
    <div class="row">
     <div class="row">
         <div class="col xl6">
                <img src="{{asset($confirm->TeacherOrder->SeeTeacher->foto)}}" class="img-profile-payment"> 
         </div>
            <div class="col xl6 section-img">
                  
                    <h3 class="heading-payment"> <b>Nama Guru : </b> {{$confirm->TeacherOrder->SeeTeacher->nama_depan}} {{$confirm->TeacherOrder->SeeTeacher->nama_belakang}}</h3>
                    <h3 class="heading-payment"> <b>Materi Pembelajaran :</b> {{$confirm->SubjectOrder->mata_pelajaran}}</h3>
                    <h3 class="heading-payment"> <b> Les yang dipilih :</b>
                        {{$confirm->ShceduleOrder->day}} {{$confirm->ShceduleOrder->time_les}}
                    </h3>
                    <h3 class="heading-payment"> <b>Tempat Yang dipilih :</b> {{$confirm->address_les}}</h3>
                    <h3 class="heading-payment"> <b> Jumlah murid : </b> {{$confirm->student}}</h3>
                    <h3 class="heading-payment"> <b> Total yang harus dibayar :</b> Rp. {{$confirm->packet}}</h3>
                    <h3 class="heading-payment"> <b> Ke Rekening:</b> Bank Mandiri / 0829291829289 / a.n Sahrul Evendi </h3>
            </div>
     </div>

      <div class="row">
            <div class="col xl12">
                    @if ($confirm->pay == 'Belum Dibayar')
                        <h1 class="heading-payment-second">Batas waktu pembayaran 30 menit setelah pemesanan di konfirmasi oleh pengajar</h1>
                        <a href="" class="link-pay">Lihat alur pembayaran Sinau Offline</a>
            
                   
                        <form action="{{route('payment_input',['confirm'=>$confirm->id])}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('put') }}  <h1></h1>
                            @if ($confirm->packet == "50.000")
                            <p>Apakah Kamu Ingin mengajak Teman Kamu ? ( <b>Max 2 orang</b> optional)</p>
                                <input id="email" name="friends" type="text" class="validate" value="" placeholder="isi nama teman yang kamu ajak">
                                <input id="email" name="friends2" type="text" class="validate" value="" placeholder="isi nama teman kamu yang kamu ajak">
                            @elseif($confirm->packet == "100.000")
                            <p>Apakah Kamu Ingin mengajak Teman Kamu ? ( <b>Max 3 orang</b> optional)</p>
                                <input id="email" name="friends" type="text" class="validate" value="" placeholder="isi nama teman kamu yang kamu ajak">
                                <input id="email" name="friends2" type="text" class="validate" value="" placeholder="isi nama teman kamu yang kamu ajak">
                                <input id="email" name="friends3" type="text" class="validate" value="" placeholder="isi nama teman kamu yang kamu ajak">
                            @elseif($confirm->packet == "150.000")
                            <p>Apakah Kamu Ingin mengajak Teman Kamu ? ( <b>Max 4 orang</b> optional)</p>
                                <input id="email" name="friends1" type="text" class="validate" value="" placeholder="isi nama teman kamu yang kamu ajak">
                                <input id="email" name="friends2" type="text" class="validate" value="" placeholder="isi nama teman kamu yang kamu ajak">
                                <input id="email" name="friends3" type="text" class="validate" value="" placeholder="isi nama teman kamu yang kamu ajak">
                                <input id="email" name="friends4" type="text" class="validate" value="" placeholder="isi nama teman kamu yang kamu ajak">
                            @endif
                                    <div class="file-field input-field">
                                            <div class="btn">
                                              <span>File</span>
                                              <input type="file" name="pay" multiple>
                                            </div>
                                            <div class="file-path-wrapper">
                                              <input class="file-path validate" >
                                            </div>
                                          </div>
                                          <button type="submit" class="btn-file">Masukan</button>
                            </form>
                    @else
                       <div class="row">
                         <div class="col xl12">
                                <h1 class="heading-payment-third">Pembayaran Sudah Diterima, 
                                        Kami akan Mengubungi pengajar yang anda pilih. apabila dalam 30 menit
                                         hingga 1 jam belum ada kabar. kami akan menggembalikan uang anda</h1>
                         </div>
                          <div class="col xl12">
                                <a href="" class="link-pay">Lihat alur pembayaran Sinau Offline</a>
                          </div>
                          <div class="col xl12">
                                <img src="{{asset($confirm->pay)}}" alt="" class="img-pay-done">
                          </div>
                       </div>
                    @endif
                    
            </div>
      </div>
    </div>
 </div>
@endsection