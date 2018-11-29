@extends('content.master2')
@section('content')
   <div class="container-fluid bg-profile-teacher">
            @include('component.UserData.PhotoProfile');
            {{-- @include('component.UserData.FillSubjectForm');
            @include('component.UserData.FillScheduleForm'); --}}
   </div>
@endsection