<div class="container-fluid rows-second-profile" id="tes2">
        <div class="row"> 
            <div class="col xl12">
              <h1 class="header-profile-second">Status Kontrak Les Anda </h1>
            </div>
        </div>
        <div class="row">
                @foreach ($confirm as $confirms)
                        <div class="col xl2 center " id="column-profile-teach">
                                <img src="{{$confirms->TeacherOrder->SeeTeacher->foto}}" class="img-profile-teach">
                                <h6 class="header-teach">{{$confirms->TeacherOrder->SeeTeacher->nama_depan}} {{$confirms->TeacherOrder->SeeTeacher->nama_belakang}}</h6>
                        
                                @if ($confirms->Status == 'Pesanan Diterima')
                                        <p class="paragraph-title-educate">Status Pesanan : 
                                                <p class="paragraph-success">{{$confirms->Status}} </p>
                                        </p>
                                @elseif($confirms->Status == 'Tolak Pesanan')
                                        <p class="paragraph-title-educate">Status Pesanan : 
                                                <p class="paragraph-danger">{{$confirms->Status}} </p>
                                        </p>
                                @else
                                        <p class="paragraph-title-educate">Status Pesanan : 
                                                <p class="paragraph-unknown">Belum Dikonfirmasi </p>
                                        </p>
                                @endif
                        <p class="paragraph-title-educate">Hubungi : {{$confirms->TeacherOrder->SeeTeacher->phone}}</p>
                        </div>
                @endforeach
        </div>
    </div>