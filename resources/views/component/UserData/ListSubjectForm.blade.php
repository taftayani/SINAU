<div class="container-fluid rows-subject">
        <div class="row">
            <div>
                <h1 class="header-subject"><a class="waves-effect waves-light btn modal-trigger" href="#modal1"><i class="material-icons">add</i></a>

                    <!-- Modal Structure -->
                    <div id="modal1" class="modal">
                      <div class="modal-content">
                        <h4>Masukan Mata Pelajaran yang diajarkan</h4>
                      <form action="{{route('input_matpel')}}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="teacher_id">
                        <input type="hidden" name="teacher_nama_depan">
                            <div class="container">
                                <div class="row">
                                    <div>
                                        <h6>Sains Teknologi</h6>
                                        <p>
                                            <input type="checkbox" id="mtk" name="mata_pelajaran[]" value="matematika"/>
                                            <label for="mtk">Matematika</label>
                                         </p>
                                         <p>
                                            <input type="checkbox" id="bio" name="mata_pelajaran[]" value="Biologi"/>
                                            <label for="bio">Biologi</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="kim" name="mata_pelajaran[]" value="kimia"/>
                                            <label for="kim">Kimia</label>
                                         </p>
                                        <p>
                                            <input type="checkbox" id="prm" name="mata_pelajaran[]" value="pemrogaman"/>
                                            <label for="prm">Bahasa Pemrograman</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="alpro" name="mata_pelajaran[]" value="Alpro"/>
                                            <label for="alpro">Alogiritma dan Pemrograman</label>
                                        </p>
                                    </div>

                                    <div>
                                            <h6>Social Sains</h6>
                                            <p>
                                                <input type="checkbox" id="eko" name="mata_pelajaran[]" value="Ekonomi"/>
                                                <label for="eko">Ekonomi</label>
                                             </p>
                                             <p>
                                                <input type="checkbox" id="mar" name="mata_pelajaran[]" value="marketing"/>
                                                <label for="mar">Marketing</label>
                                            </p>
                                            <p>
                                                <input type="checkbox" id="pkn" name="mata_pelajaran[]" value="PKN"/>
                                                <label for="pkn">PKN</label>
                                             </p>
                                            <p>
                                                <input type="checkbox" id="ips" name="mata_pelajaran[]" value="IPS"/>
                                                <label for="ips">IPS</label>
                                            </p>
                                    </div>

                                    <div>
                                            <h6>Lainnya</h6>
                                            <p>
                                                <input type="checkbox" id="ngaji" name="mata_pelajaran[]" value="mengaji"/>
                                                <label for="ngaji">Mengaji</label>
                                             </p>
                                             <p>
                                                <input type="checkbox" id="masak" name="mata_pelajaran[]" value="mamasak"/>
                                                <label for="masak">Memasak</label>
                                            </p>
                                           
                                        </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                    <button type="submit"> Masukan</button>
                            </div>
                        </form>
                      </div>
                      
                    </div>
                    Masukan Materi Pengajaran</h1>
            </div>
        </div>
        <div class="row">
         
                
           
         
                @foreach (Auth::user()->Teacher->Subject as $subjects)
                    <div class="col xl2">
                            <h6 class="list-subject">{{$subjects->mata_pelajaran}}</h6>  
                    </div>
                @endforeach
        </div>      
           
          
 
</div>