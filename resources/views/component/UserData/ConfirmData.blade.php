<div class="container-fluid" id="layout-confirm">
    <div class="row">
           <div class="col l7">
                <div class="row" style="border-bottom:1px solid #C4C4C4;">
                    <div class="col l5">
                        <img src="{{asset($teacher->SeeTeacher->foto)}}" class="photo-profile-edit-teach-second">
                    </div>
                    <div class="col l5">
                        <div class="row">
                            <h4 class="heading-inform">Informasi Pengajar</h4>
                            <hr style="width:30rem">
                        </div>
                        <div class="row">
                            <div class="col l12">
                                <h4 class="header-name left">{{$teacher->SeeTeacher->nama_depan}} {{$teacher->SeeTeacher->nama_belakang}}</h4>
                            </div>
                            <div class="col l12">
                                <h6 class="header-teach-name">{{$teacher->SeeTeacher->email}}</h6>
                            </div>
                            <div class="col l4">
                                <label for="">No.telp</label>
                                <h6 class="header-phone-teach">{{$teacher->SeeTeacher->phone}}</h6>
                            </div>
                            <div class="col l4">
                                    <label for="">Pendidikan</label>
                                    <h6 class="header-phone-teach">{{$teacher->pendidikan}}</h6>
                                </div>
                            <div class="col l4">
                                <label for="">Asal</label>
                                <h6 class="header-leaving">Bandung</h6>
                            </div>
                            <div class="col l4">
                               @if ($teacher->SeeTeacher->gender == "Male")
                                    <label for="">Kelamin</label>
                                    <h6 class="header-gender">Laki-laki</h6>
                                @else 
                                    <label for="">Kelamin</label>
                                    <h6 class="header-gender">Perempuan</h6>
                               @endif
                            </div>
                            <div class="col l4">
                                    <label for="">Tanggal Lahir</label>
                                    <h6 class="header-birth">{{$teacher->SeeTeacher->birthday}}</h6>
                            </div>
                        </div>                   
                    </div>
                 </div>
                 <div class="row" style="border-bottom:1px solid #C4C4C4;padding-top:20px;padding-bottom:20px">
                    <div class="col l12">
                        <label for="">Mengajar</label>
                    </div>
                    @foreach ($teacher->Subject as $matpel)
                        <div class="col l4">                     
                            <h5 class="heading-matpel">/ {{$matpel->mata_pelajaran}}</h5>
                        </div>
                    @endforeach
                     <div class="row">
                            <div class="col l12">
                                <label for="">Pencapaian yang dimiliki</label>
                            </div>
                            @foreach ($teacher->File as $files)
                        
                            <div class="col s4">
                            <img src="{{asset($files->file)}}" class="img-sertified-prove">
                            </div>
                      
                            @endforeach
                        </div>
                 </div>
                 <div class="row">
                    <div class="col l12">
                        <h4 class="header-motivate">Motivasi Mengajar</h4>
                    </div>
                    <div class="col l12">
                        <p class="paragraph-resume">{{$teacher->resume}}</p>
                    </div>
                 </div>
           </div>
    {{-- card confirm --}}
            <div class="col l4" id="column-data">          
                    <form action="{{route('order_les')}}" method="post">
                            {{ csrf_field() }}
                    <input type="hidden" name="user_id" value={{Auth::user()->id}}>
                    <input type="hidden" name="teacher_id" value="{{$teacher->id}}">
                <div class="row" id="rows-data">
                    <h5 class="heading-confirm">
                        Lengkapi Data Les
                    </h5>
                </div>

                <div class="row"> 
                    {{-- <h5 class="list-heading-data">Pilih Materi Belajar:</h5> --}}
                    <div class="input-field col s12" name="materi">
                        <select name="subject_id">
                                <option value="" disabled selected>Pilih Materi Belajar</option>
                            @foreach ($teacher->Subject as $subjects)                                                       
                                <option value="{{$subjects->id}}">{{$subjects->mata_pelajaran}}</option>                           
                             @endforeach

                        </select>
                      </div>
                      <h5 class="list-heading-data">Pilih Jadwal</h5>
                      {{-- <select name="shcedule_id[]"> --}}
                                      {{-- <option value="" disabled>Waktu mengajar</option> --}}
                                  @foreach ($teacher->Schedule as $schedules)             
                                      {{-- <option value="{{$schedules->id}}">{{$schedules->day}} {{$schedules->time_les}}</option>                                            --}}
                                      <p>
                                          <input type="checkbox" id="{{$schedules->id}}" name="shcedule_id[]" value="{{$schedules->id}}"/>
                                          <label for="{{$schedules->id}}">{{$schedules->day}} {{$schedules->time_les}}</label>
                                       </p>
                                  @endforeach
                          {{-- </select> --}}
                          {{-- <h5 class="list-heading-data">Paket Harga Yang Ditentukan</h5>
                        <p class="paragraph-confirm">(Pililah Paket Belajar Bersama)</p> --}}
                        <div class="input-field col s12" name="packet">
                            <select name="packet">
                              <option value="" disabled selected>Pilih Paket Harga</option>
                              <option value="160.000" name="packet">1 bulan 8x = Rp160.000,00</option>
                              <option value="220.000" name="packet">1.5 bulan 12x = Rp220.000,00</option>
                              <option value="260.000" name="packet">2 bulan 16x = Rp280.000,00</option>
                            </select>
                          </div>
                </div>

                    <div class="row">
                          <div class="row">
                            <div class="input-field col s12" name="address_les">
                                    <label>Alamat Yang digunakan sebagai tempat les</label>
                                <input type="text" name="address_les" value="{{ Auth::user()->address }}, {{ Auth::user()->region }}, {{ Auth::user()->district }},{{ Auth::user()->province }}">
                                <p>PS :anda dapat menggantikan dengan alamat lain</p>
                            </div>
                          </div>
                      </div>

                <div class="left" id="rows-btn-konfirmasi"> 
                    <div class="col xl6"> <button class="btn-order-return"> <a href="{{route('name_teacher')}}" class="link-choose-teacher">Kembali</a> </button></div>
                       
                </div>
                <div class="right">
                    <button type="submit" class="btn-order-next" name="button">Kirim</button>
                </div>
                
                 </form>
            </div>
    </div>

</div>