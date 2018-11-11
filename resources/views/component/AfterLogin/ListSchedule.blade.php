<div class="container-fluid rows-subject">
    <div class="row">
        <div>
            <h1 class="header-subject">Jadwal Mengajar</h1>
        </div>
    </div>
    <div class="row">
            @foreach (Auth::user()->Teacher->Schedule as $Schedules)
            <div class="col xl1 " id="column-subject"> 
            <h6 class="header-list-schedule">{{$Schedules->day}}</h6>
                    <ul class="list-schedule">
                        <li>{{$Schedules->time_les}}</li>
                    </ul>
                </div>
            @endforeach
    </div>
</div>