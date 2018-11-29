<div class="container-fluid rows-subject">
        <div class="row">
            <div>
                <h1 class="header-subject">Materi Pengajaran</h1>
            </div>
        </div>
        <div class="row">
            @if (Auth::user()->Teacher->Subject)
                @foreach (Auth::user()->Teacher->Subject as $subjects)
                    <div class="col xl2">
                            <h6 class="list-subject">{{$subjects->mata_pelajaran}}</h6>
                    </div>
                 @endforeach

                @else 
            @endif
           
        </div>
</div>