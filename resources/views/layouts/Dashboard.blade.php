@extends('content.headerDashboard')
@section('contentDashboard')

<div id="home">
        <table>
                
                <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama depan</th>
                            <th>Nama Belakang</th>
                            <th>email</th>
                            <th>No telp</th>
                            <th>Tanggal kelahiran</th>
                            <th>alamat</th>
                            <th>jenis kelamin</th>
                        </tr>
                    </thead>
                    @foreach ($user as $key => $users)
                    <tbody>
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$users->nama_depan}}</td>
                            <td>{{$users->nama_belakang}}</td>
                            <td>{{$users->email}}</td>
                            <td>{{$users->phone}}</td>
                            <td>{{$users->birthday}}</td>
                            <td>{{$users->address}}</td>
                            <td>{{$users->gender}}</td>
                        </tr>
                    </tbody>
                    @endforeach
                    </table>

        </div>

<div id="guru">
    <h1>Guru</h1>
    
        <table>
                
                <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Depan</th>
                            <th>Nama Belakang</th>
                            <th>ktp</th>
                            <th>Pendidikan</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    @foreach ($teacher as $key => $teachers)
                    <tbody>
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$teachers->SeeTeacher->nama_depan}}</td>
                            <td>{{$teachers->SeeTeacher->nama_belakang}}</td>
                            <td>{{$teachers->ktp}}</td>
                            <td>{{$teachers->pendidikan}}</td>
                            <td>
                                <form action="{{route('verifikasi_data',['teacher'=>$teachers->id])}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('put') }}
                                    <button type="submit" name="verifikasi" value="Akun Sudah Diverifikasi">Verifikasi Akun</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                    </table>
</div>
<div id="matpel">
        <h1>Mata Pelajaran</h1>
        <table>
                
                <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Guru</th>
                            <th>Mata Pelajaran</th>
                        </tr>
                    </thead>
                    @foreach ($matpel as $key => $subjects)
                    <tbody>
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$subjects->SeeTeacher->SeeTeacher->nama_depan}} {{$subjects->SeeTeacher->SeeTeacher->nama_belakang}}</td>
                            <td>{{$subjects->mata_pelajaran}}</td>
                        </tr>
                    </tbody>
                    @endforeach
                    </table>
</div>

<div id="pesanan">
        <h1>Mata Pesanan</h1>
        <table>
                
                <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Guru</th>
                            <th>Nama Murid</th>
                            <th>Mata Pelajaran</th>
                            <th>Jumlah murid</th>
                            <th>Paket</th>
                            <th>alamat les</th>
                        </tr>
                    </thead>
                    @foreach ($confirmSee as $key => $confirms)
                    <tbody>
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$confirms->TeacherOrder->SeeTeacher->nama_depan}} {{$confirms->TeacherOrder->SeeTeacher->nama_belakang}}</td>
                            <td>{{$confirms->UserOrder->nama_depan}} {{$confirms->UserOrder->nama_belakang}}</td>
                            <td>{{$confirms->SubjectOrder->mata_pelajaran}}</td>
                            <td>{{$confirms->ShceduleOrder->day}} {{$confirms->ShceduleOrder->time_les}}</td>
                            <td>{{$confirms->packet}}</td>
                            <td>{{$confirms->address_les}}</td>
                        </tr>
                    </tbody>
                    @endforeach
        </table>
</div>
@endsection

