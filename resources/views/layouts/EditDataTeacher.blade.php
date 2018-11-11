@extends('content.master2')
@section('content')
   <div class="container-fluid bg-profile-teacher">
            @include('component.UserData.EditTeacher');
            @include('component.UserData.ListSubjectForm');
            @include('component.UserData.ListScheduleForm');
   </div>
@endsection