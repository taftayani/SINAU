@extends('content.master2')

@section('content')
    @include('component.AfterLogin.ProfileHome')
    @include('component.AfterLogin.StatusTeacherConfirm')
    @include('component.AfterLogin.Fitur')
@endsection
@push('js')
    <script type="text/javascript">
    $(document).ready(function(){
    $('.parallax').parallax();
  });
    </script>
@endpush