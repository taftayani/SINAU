@extends('layouts.Dashboard')
@section('menuDashboard')

<div id="guru"  style="margin-top: 100px;">
    <h3>Guru</h3>
    <h6>Total Guru</h6>
    <p class="total">{{$teacher->count()}}</p>
    <table id="teacher_table">
        <thead >
            <tr>
                <th>ID</th>
                <th>Nama Depan</th>
                <th>Nama Belakang</th>
                <th>ktp</th>
                <th>Pendidikan</th>
                <th>Status</th>
                <th>File Sertifikasi</th>
            </tr>
        </thead>
        @foreach ($teacher as $key => $teachers)
        <tbody>
            <tr>
                <td class="td">{{++$key}}</td>
                <td class="td">{{$teachers->SeeTeacher->nama_depan}}</td>
                <td class="td">{{$teachers->SeeTeacher->nama_belakang}}</td>
                <td class="td">{{$teachers->ktp}}</td>
                <td class="td">{{$teachers->pendidikan}}</td>
                <td class="td">
                @if ($teachers->verifikasi == 'Akun Sudah Diverifikasi')
                <p>{{$teachers->verifikasi}}</p>
                @elseif($teachers->verifikasi == 'Verifikasi Akun Ditolak')
                <p>{{$teachers->verifikasi}}</p>
                @else
                    <form action="{{route('verifikasi_data',['teacher'=>$teachers->id])}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('put') }}
                        <button type="submit" name="verifikasi" value="Akun Sudah Diverifikasi">Verifikasi Akun</button> 
                    </form>

                    <form action="{{route('verifikasi_data',['teacher'=>$teachers->id])}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('put') }}
                        <button type="submit" name="verifikasi" value="Verifikasi Akun Ditolak">Tolak Verfikasi</button> 
                    </form>
                @endif
                </td>

                <td class="td">
                    @foreach ($teachers->File as $files)
                        <a href="{{asset($files->file)}}"><img src="https://image.flaticon.com/icons/svg/149/149092.svg" style="width: 70px; margin-right: auto; margin-left: auto;" alt="" class="materialboxed img-sertif"></a>
                    @endforeach
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
<script>
    $(document).ready(function() {
        $('#teacher_table').DataTable( {
            "scrollY":        "200px",
            "scrollCollapse": true,
            "paging":         false
        } );
    } );
</script>
@endsection('menuDashboard')