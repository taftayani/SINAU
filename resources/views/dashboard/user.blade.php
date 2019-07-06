@extends('layouts.Dashboard')
@section('menuDashboard')
<h3>Data Murid</h3>
<div class="">
        <h6>Total Murid</h6>
        <p class="total">{{$user->count()}}</p>

        <input type="text" id="search_name_student" onkeyup="filter_name_student()" placeholder="Search student names" style="width: 50%; float: right;"/>

        <div class="row" style="margin-top: 100px;">
            <div class="col l12">
                <div class="sidenav-filter">
                    <strong><p>Gender</p></strong>
                    <button id="all_student" class="filter-btn filter-active">All</button>
                    <button id="male_student" class="filter-btn">Male</button>
                    <button id="female_student" class="filter-btn">Female</button>
                    <input type="hidden" id="keyword" onkeypress="filter_gender_student()">
                </div>

                <script>
                    $(function() {
                        $('.sidenav-filter').find('button').click(function(e) {
                            $('button').removeClass('filter-active');
                            $(this).addClass('filter-active');
                            
                        });
                        $('#all_student').click(function(){
                            document.getElementById("keyword").value = "";
                            $('#keyword').keypress();
                            document.location.reload(true)
                        });
                        $('#male_student').click(function(){
                            document.getElementById("keyword").value = "Male";
                            $('#keyword').keypress();
                        });
                        $('#female_student').click(function(){
                            document.getElementById("keyword").value = "Female";
                            $('#keyword').keypress();
                        });
                    });
                    function filter_gender_student() {
                        var input, filter, table, tr, td, i, txtValue;
                        input = document.getElementById("keyword");
                        filter = input.value;
                        table = document.getElementById("student_table");
                        tr = table.getElementsByTagName("tr");
                        for (i = 0; i < tr.length; i++) {
                            td = tr[i].getElementsByTagName("td")[7];
                            if (td) {
                                txtValue = td.textContent;
                                if (txtValue.indexOf(filter) > -1) {
                                    tr[i].style.display = "";
                                } else {
                                    tr[i].style.display = "none";
                                }
                            }       
                        }
                    }

                    function filter_name_student(){
                        var input, filter, table, tr, firstname, lastname, i, txtValue;
                        input = document.getElementById("search_name_student");
                        
                        if(input.value === ""){
                            document.location.reload(true)
                        }else{
                            filter = input.value;
                            table = document.getElementById("student_table");
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
                
            </div>
            <div class="col-10">
                <table id="student_table">
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
                        $("#student_table").fancyTable({
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
                            $("#student_table").fancyTable({
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
    </div>
</div>
@endsection('menuDashboard')