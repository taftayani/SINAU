<div class="container-fluid rows-subject">
        <div class="row">
                <div>
                        <h1 class="header-subject"><a href=""><a class="waves-effect waves-light btn modal-trigger" href="#schedule"><i class="material-icons">add</i></a>
        
                            <!-- Modal Structure -->
                            <div id="schedule" class="modal">
                              <div class="modal-content">
                                <h4>Masukan Jadwal Mengajar Anda</h4>
                              <form action="{{route('input_schedule')}}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="" id="teacher_id">
                                        <div class="input-field col s12">
                                                <select name="day">
                                                <option value="" >Pilih Hari</option>
                                                    <option value="Senin" name="day">Senin</option>
                                                    <option value="Selasa" name="day">Selasa</option>
                                                    <option value="Rabu" name="day">Rabu</option>
                                                    <option value="Kamis" name="day">Kamis</option>
                                                    <option value="Jumat" name="day">jumat</option>
                                                </select>
                                        </div>

                                        <div class="input-field col s12">
                                            <select name="time_les">
                                            <option value="" >Pilih Jam</option>
                                                <option value="08.30-10.00" name="time_les">08.30-10.00</option>
                                                <option value="13.00-14.30" name="time_les">13.00-14.30</option>
                                                <option value="19.00-20.30" name="time_les">19.00-20.30</option>
                                            </select>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit"> Masukan</button>
                                      </div>
                                </form>
                              </div>
                            </div>
                            Jadwal Pengajaran</h1>
                    </div>
        </div>
        <div class="row">
            @foreach (Auth::user()->Teacher->Schedule as $Schedules)
            <div class="col xl1 " id="column-subject"> 
                <h6 class="center header-list-schedule">{{$Schedules->day}}</h6>
                    <ul class="list-schedule">
                        <li>{{$Schedules->time_les}}</li>
                    </ul>
                </div>
            @endforeach
        </div>
    </div>