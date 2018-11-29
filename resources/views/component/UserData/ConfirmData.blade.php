<div class="container" id="layout-confirm">
    <div class="row">
            <div class="col xl4" id="column-img-confirm">
                    <div class="row center">
                        <img src="{{asset($teacher->SeeTeacher->foto)}}" class="photo-profile-edit-teach-second">
                    </div>
                    <div class="col l8 column-name">
                        <h1 class="header-name">{{$teacher->SeeTeacher->nama_depan}} {{$teacher->SeeTeacher->nama_belakang}}</h1>
                        <h1 class="header-contact">{{$teacher->SeeTeacher->email}} / {{$teacher->SeeTeacher->phone}} </h1>
                    </div>
            </div>

           
            <div class="col xl6" id="column-data">          
                    <form action="{{route('order_les')}}" method="post">
                            {{ csrf_field() }}
                    <input type="hidden" name="user_id" value={{Auth::user()->id}}>
                    <input type="hidden" name="teacher_id" value="{{$teacher->id}}">
                    {{-- <input type="hidden" name="subject_id" value="{{$subject->id}}"> --}}
                {{-- <input type="hidden" name="shcedule_id"> --}}
                <div class="row" id="rows-data">
                    <h5 class="heading-confirm">Lengkapi data-data Dibawah ini</h5>
                </div>

                <div class="row"> 
                    <h5 class="list-heading-data">Pilih Materi Pengajaran:</h5>
                    <div class="input-field col s12" name="materi">
                        <select name="subject_id">
                                <option value="" disabled>Materi Pengajaran</option>
                            @foreach ($teacher->Subject as $subjects)                                                       
                                <option value="{{$subjects->id}}">{{$subjects->mata_pelajaran}}</option>
                                @endforeach

                        </select>
                      </div>
                </div>

                <div class="row" id="rows-data"> 
                    <h5 class="list-heading-data">Pilih Waktu Pengajaran</h5>
                   @foreach ($teacher->Schedule as $schedule)                          
                            <div class="col xl4" id="column-subject"> 
                            <p>
                            <input type="checkbox" id="{{$schedule->id}}" name="shcedule_id[]" value="{{$schedule->id}}"/>
                                <label for="{{$schedule->id}}">{{$schedule->day}} {{$schedule->time_les}}</label>
                             </p>
                            </div>
                    @endforeach
                </div>

                <div class="row" id="rows-data">
                    <h5 class="list-heading-data">Jumlah Murid Yang diajarkan</h5>
                    <p class="paragraph-confirm">(Kelipatan murid akan dikenakan 5% dari harga utama)</p>
                    <div class="input-field col s12" name="student">
                        <select name="student">
                          <option value="" disabled selected name="student">Jumlah</option>
                          <option value="1" name="student">1</option>
                          <option value="2" name="student">2</option>
                          <option value="3" name="student">3</option>
                          <option value="4" name="student">4</option>
                          <option value="5" name="student">5</option>
                          <option value="6" name="student">6</option>
                          <option value="7" name="student">7</option>
                          <option value="8" name="student">8</option>
                        </select>
                      </div>
                </div>

                <div class="row" id="rows-data">
                        <h5 class="list-heading-data">Paket Harga Yang Ditentukan</h5>
                        <p class="paragraph-confirm">(Paket tersebut adalah harga satu murid)</p>
                        <div class="input-field col s12" name="packet">
                            <select name="packet">
                              <option value="" disabled selected>Paket Harga</option>
                              <option value="50.000" name="packet">1 bulan 5x = 50 rb</option>
                              <option value="100.000" name="packet">1 bulan 10x =100 rb</option>
                              <option value="150.000" name="packet">1 bulan 15x=150 rb</option>
                            </select>
                          </div>
                    </div>

                    <div class="row">
                          <div class="row">
                            <div class="input-field col s12" name="address_les">
                              <textarea id="textarea1" class="materialize-textarea" name="address_les"></textarea>
                              <label for="textarea1">Isikan alamat dimana anda ingin les</label>
                            </div>
                          </div>
                      </div>

                <div class="row right" id="rows-btn-konfirmasi"> 
                    <div class="col xl6"> <button class="btn-order-return"> <a href="{{route('home')}}" class="link-choose-teacher">Batal</a> </button></div>
                       
                </div>
                    <button type="submit" class="btn-order-next" name="button">Kirim</button>
                
        </form>
            </div>
    </div>

</div>