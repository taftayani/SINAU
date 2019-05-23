@if (Auth::user()->role == 'admin')
    @include('dashboard.user')
@else
    @include('layouts.User')
@endif

