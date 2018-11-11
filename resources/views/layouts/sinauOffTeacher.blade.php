@extends('content.master2')
@section('content')
   <div class="container-fluid bg-profile-off">
        @include('component.AfterLogin.PhotoProfileTeacher')
        @include('component.AfterLogin.ListSubject')
        @include('component.AfterLogin.ListSchedule')
        @include('component.AfterLogin.ListStudent')
   </div>
@endsection
