@extends('layouts.Dashboard')
@section('menuDashboard')
<h3>Data Murid</h3>
<div class="">
    <h6>Total Murid</h6>
    <p class="total">{{$user->count()}}</p>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama depan</th>
                <th>Nama Belakang</th>
                <th>email</th>
                <th>No telp</th>
                <th>Tanggal kelahiran</th>
                <th>alamat</th>
                <th>jenis kelamin</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $key => $users)
            <tr>
                <td class="td">{{++$key}}</td>
                <td class="td">{{$users->nama_depan}}</td>
                <td class="td">{{$users->nama_belakang}}</td>
                <td class="td">{{$users->email}}</td>
                <td class="td">{{$users->phone}}</td>
                <td class="td">{{$users->birthday}}</td>
                <td class="td">{{$users->address}}</td>
                <td class="td">{{$users->gender}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$user->links()}}
</div>
<script>
    $(document).ready(function() {
        $('#example').DataTable( {
            "scrollY":        "1000px",
            "scrollCollapse": true,
            "paging":         false
        } );
    } );
</script>
@endsection('menuDashboard')