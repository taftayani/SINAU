<div class="container">
    <div class="row ">
            
            <div class="col xl5" id="column-img-edit-teach">
              <img src="{{Auth::user()->foto}}" class="photo-profile-edit-teach">
              <div class="link-column-profile"><a href="" class="link-profile">Lokasi Anda</a></div>
            </div>
            <div class="col xl6">
                          
                    <h1 class="heading-teacher-form">Nama Anda : {{Auth::user()->nama_depan}} {{Auth::user()->nama_belakang}}</h1>
                    <h1 class="heading-teacher-form">Email Anda : {{Auth::user()->email}}</h1>
                    <h1 class="heading-teacher-form">No Telepon Anda : {{Auth::user()->phone}}</h1>
                
                    <form action="{{route ('edit_teacher',['EditDataGuru'=>$teacher->id]) }}" method="post" enctype="multipart/form-data">
                     {{ csrf_field() }}
                     {{ method_field('put') }}

                    {{-- <input type="number" name="no_telp" id="" placeholder="{{Auth::user()->phone}}" > --}}
                        <input type="number" name="ktp" id="" value="{{$teacher->ktp}}" class="validate" >   
                        <input type="number" name="npwp" id="" value="{{$teacher->npwp}}">
                            <div class="input-field col s12">
                                    <select name="pendidikan">
                                    <option value="{{$teacher->pendidikan}}" name="pendidikan">Pendidikan yang ditempuh saat ini : {{$teacher->pendidikan}}</option>
                                        <option value="Kuliah Sem 3" name="pendidikan">Masih Kuliah Tingkat 3</option>
                                        <option value="Kuliah Sem 4" name="pendidikan">Masih Kuliah Tingkat 4</option>
                                        <option value="S1" name="pendidikan">Sudah lulus S1</option>
                                        <option value="keprof" name="pendidikan">Keprofesian</option>
                                    </select>
                            </div>
                            <div class="row">
                                    <div class="row">
                                        <div class="input-field col s12">
                                        <textarea id="textarea1" class="materialize-textarea" data-length="120" name="resume" >{{$teacher->resume}}</textarea>
                                                    <label for="textarea1">Status/Resume</label>
                                            </div>          
                                     </div>
                            </div>
                  
                            <button type="submit" name="button">Masukan</button>
                    
                    </form>
                    <a href="{{route('guru')}}">Beranda</a>
            </div>
        </div>
</div>