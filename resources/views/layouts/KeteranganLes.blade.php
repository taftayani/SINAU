@extends('content.masterTeacher')
@section('content')
    <div class="container first-data-lay">
       <div class="row">
            <div class="row">
            <h1 class="heading-data-list">Silahkan Isi Kegiatan Les {{$confirm->UserOrder->nama_depan}} {{$confirm->UserOrder->nama_belakang}} / 
              @if ($confirm->packet == '50.000')
                Max Pertemuan <b>5 kali</b>

              @elseif($confirm->packet == '100.000')
              Max Pertemuan <b>10 kali</b>

              @elseif($confirm->packet == '150.000')
              Max Pertemuan <b>15 kali</b>
              @endif
            </h1>
            </div>
            <div class="row center">
            <form class="col s12" action="{{route('input_stat')}}" enctype="multipart/form-data" method="post">
            {{ csrf_field() }}
            {{ method_field('post') }}
                      <div class="row">
                      <input type="hidden" name="confirm_id" id="" value="{{$confirm->id}}">
                        <div class="input-field col s6">
                          <i class="material-icons prefix">date_range</i>
                          <input id="icon_prefix" type="date" class="validate" name="date_les">
                        </div>

                        <div class="input-field col s6">
                          <i class="material-icons prefix">description</i>
                          <input id="icon_telephone" type="tel" class="validate" name="mention">
                          <label for="icon_telephone">Keterangan Les</label>
                        </div>
                      </div>

                      <button type="submit" class="btn-input-data">Masukan Data</button>
                    </form>
            </div>
       </div>
       <div class="container">
                <table class="tb-data">
                        <thead class="head-tb-data">
                        <tr class="center">
                            <th>Nama Lengkap</th>
                            <th>Tanggal Les</th>
                            <th>Keterangan Les</th>
                        </tr>
                        </thead>
                
                        <tbody class="list-tb-data">  
                     @foreach ($stat as $stats)
                            <tr>
                                <td>{{$stats->ConfirmOrder->UserOrder->nama_depan}} {{$stats->ConfirmOrder->UserOrder->nama_belakang}}</td>
                                <td>{{$stats->date_les}}</td>
                                <td>{{$stats->mention}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                </table>
       </div>
    </div>
@endsection