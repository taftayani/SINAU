<div class="container-fluid rows-second-profile">
    <div class="row"> 
        <div class="col xl12">
          <h1 class="header-profile-second">Status kontrak dengan Murid</h1>
        </div>
    </div>
    <div class="row">

    @foreach ($confirm as $confirms)
    
        

        <div class="{{$confirms->TeacherOrder->id}}">
            <a class="col xl2 center modal-trigger" id="column-profile-teach" href="#{{$confirms->id}}">
                <img src="{{$confirms->UserOrder->foto}}" class="img-profile-teach">
                <h6 class="header-teach">{{$confirms->UserOrder->nama_depan}} {{$confirms->UserOrder->nama_belakang}}</h6>
                <p class="paragraph-title-educate"></p>
             </a>


        <div id="{{$confirms->id}}" class="modal container col xl12">
                <div class="modal-content">
                         <div class="container"> 
                            <div class="row"> 
                                @if (session('status'))
                                    <div class="row">
                                        <div class="col l12 green white-text">
                                                {{ session('message') }}
                                        </div>
                                    </div>
                                @endif
                                    <div class="col xl5" id="column-img">
                                    <img src="{{$confirms->UserOrder->foto}}" class="photo-profile-edit-teach">
                                    <form action="{{route('konfirmasi',['PesanLes'=>$confirms->id])}}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        {{ method_field('put') }}
                                        <input type="hidden" name="teacher_id" id="">
                                        <input type="hidden" name="user_id" id="">
                                        <input type="hidden" name="Status" value="Pesanan Diterima"> 

                                        @if ($confirms->Status=='Pesanan Diterima')
                                             <h1 class="center heading-status-success">Pesanan Sudah di konfirmasi</h1>
                                           @if ($confirms->stat_pay == 'Pembayaran Sudah Diterima')
                                                <div class="row">
                                                    <div class="col xl6">
                                                            <a href="{{route('move',['confirm'=>$confirms->id])}}" class="link-status-student">Berikan Absensi</a>
                                                    </div>
                                                     <div class="col xl6">
                                                            <img src="{{asset($confirms->pay)}}" alt="" class="materialboxed pay-stat-img">
                                                     </div>
                                                </div>
                                           @else
                                               <h3 class="heading-warn-pay">Belum ada pembayaran</h3>
                                           @endif

                                        @elseif($confirms->Status=='Tolak Pesanan')
                                            <h1 class="center heading-status-dangerous">Pesanan Ditolak</h1>
                                        @else
                                            <div class="link-column-profile"> <button type="submit" name="button">Terima Les</button> 
                                                <button type="submit" name="Status" value="Tolak Pesanan">Tolak Pesanan</button>
                                            </div>
                                        @endif

                                    </form>
                                    </div>
                                    <div class="col xl7"> 
                                        <div class="container">
                                              <div class="row">
                                                    <h1 class="header-name">{{$confirms->UserOrder->nama_depan}} {{$confirms->UserOrder->nama_belakang}} / {{$confirms->UserOrder->gender}}</h1>
                                                    <h1 class="header-contact">{{$confirms->UserOrder->email}} / {{$confirms->UserOrder->phone}}/ {{$confirms->UserOrder->birthday}}</h1>
                                                    <ul>
                                                    <li class="header-contact"> <b>Ingin Les Di : </b>{{$confirms->address_les}}</li>
                                                    <li class="header-contact"> <b>Jumlah Teman Murid :</b> {{$confirms->student}}</li>
                                                    <li class="header-contact"> <b>Mengambil Paket :</b> {{$confirms->packet}}</li>
                                                    <li class="header-contact"> <b>Materi yang diambil : </b>{{$confirms->SubjectOrder->mata_pelajaran}}</li>
                                                    <li class="header-contact"> <b>Waktu Les Yang diambil : </b>{{$confirms->ShceduleOrder->day}} {{$confirms->ShceduleOrder->time_les}}</li>

                                                    </ul>
                                                    <p class="paragraph-biodata">
                                                    </p>      
                                              </div>
                                        </div>
                                    </div>
                            </div>
                         </div>
            
                         
                            
                        </div>
                        
                      </div>
                    </div>
    @endforeach

</div>