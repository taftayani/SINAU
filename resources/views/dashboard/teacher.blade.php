@extends('layouts.Dashboard')
@section('menuDashboard')

<div id="guru"  style="margin-top: 100px;">
    <h3>Guru</h3>
    <div class="datastat">
            <h6>Total Guru</h6>
            <p class="total">{{$teacher->count()}}</p>

            <input type="text" id="search_name_teacher" onkeyup="filter_name_teacher()" placeholder="Search student names" style="width: 50%; float: right;"/>
            <script>
                function filter_name_teacher(){
                    var input, filter, table, tr, firstname, lastname, i, txtValue;
                    input = document.getElementById("search_name_teacher");
                    
                    if(input.value === ""){
                        document.location.reload(true)
                    }else{
                        filter = input.value;
                        table = document.getElementById("teacher_table");
                        tr = table.getElementsByTagName("tr");
                        for (i = 0; i < tr.length; i++) {
                            firstname = tr[i].getElementsByTagName("td")[1];
                            lastname = tr[i].getElementsByTagName("td")[2];
                            if (firstname || lastname) {

                                txtValuefirstname = firstname.textContent.toLowerCase();
                                txtValuelastname = lastname.textContent.toLowerCase();

                                if (txtValuefirstname.indexOf(filter) > -1 || txtValuelastname.indexOf(filter) > -1) {
                                    tr[i].style.display = "";
                                } else {
                                    tr[i].style.display = "none";
                                }
                            }       
                        }
                    }
                }
            </script>

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
            <div class="row" style="margin-top: -40px;">
                <div class="col-1">
                    <span>Showing </span>
                </div>
                <div class="col-1" style="margin-top: -15px;">
                    <select name="" id="perPage" onchange="pagination()">
                        <option value="5">5</option>
                        <option value="10">10</option>
                    </select>
                </div>
            </div>
            
            
            <script>
                $(document).ready(function() {
                    var page = document.getElementById('perPage').value;
                    $("#teacher_table").fancyTable({
                        pagination: true,
                        searchable: false,
                        sortable: true,
                        paginationClass: "Page navigation example",
                        paginationClassActive: "pageactive",
                        perPage: page,
                        pagClosest: 3,
                    });		
                });
                function pagination(){
                    var page = document.getElementById('perPage').value;
                    $(document).ready(function() {
                        $("#teacher_table").fancyTable({
                            pagination: true,
                            searchable: false,
                            sortable: true,
                            paginationClass: "Page navigation example",
                            paginationClassActive: "pageactive",
                            perPage: page,
                            pagClosest: 3,
                        });		
                    });
                }
            </script>
        </div>
</div>

@endsection('menuDashboard')