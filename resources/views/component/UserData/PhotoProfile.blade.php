<div class="container">
        <div class="row ">
                
                <div class="col xl5" id="column-img-edit-teach">
                  <img src="{{Auth::user()->foto}}" class="photo-profile-edit-teach">
                </div>
                <div class="col xl6">
                              
                        <h1 class="heading-teacher-form">Nama Anda : {{Auth::user()->nama_depan}} {{Auth::user()->nama_belakang}}</h1>
                        <h1 class="heading-teacher-form">Email Anda : {{Auth::user()->email}}</h1>
                        <h1 class="heading-teacher-form">No Telepon Anda : {{Auth::user()->phone}}</h1>
                    
                        <form action="{{route('input_guru')}}" method="post">
                         {{ csrf_field() }}

                         <input type="hidden" name="user_nama_depan">
                         <input type="hidden" name="user_nama_belakang">
                         <input type="hidden" name="user_foto">
                        {{-- <input type="number" name="no_telp" id="" placeholder="{{Auth::user()->phone}}" > --}}
                            <input type="number" name="ktp" id="" placeholder="no ktp" >   
                            <input type="number" name="npwp" id="" placeholder="No Npwp">
                                <div class="input-field col s12">
                                        <select name="pendidikan">
                                            <option value="Pendidikan" name="pendidikan">Pendidikan</option>
                                            <option value="Kuliah Sem 3" name="pendidikan">Masih Kuliah Semester 3</option>
                                            <option value="Kuliah Sem 4" name="pendidikan">Masih Kuliah Tingkat 4</option>
                                            <option value="S1" name="pendidikan">Sudah Lulus S1</option>
                                            <option value="keprof" name="pendidikan">Keprofesian</option>
                                        </select>
                                </div>
                                <div class="row">
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <textarea id="textarea1" class="materialize-textarea" data-length="120" name="resume"></textarea>
                                                        <label for="textarea1">Status/Resume</label>
                                                </div>          
                                         </div>
                                </div>
                      
                                <button type="submit" name="button">Masukan</button>
                        <a href="{{route('guru')}}">Beranda</a>
                        </form>
                </div>

                @if (Session::has('message'))
        <p class="black">{{Session::get('message')}}</p>
                @endif
            </div>
</div>