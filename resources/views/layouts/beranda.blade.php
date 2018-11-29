@if (Auth::user()->role == 'admin')
    @include('layouts.Dashboard')
@else
    @include('layouts.User')
@endif

