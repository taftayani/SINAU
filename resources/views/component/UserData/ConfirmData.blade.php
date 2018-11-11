<div class="container" id="layout-confirm">
    <div class="row">
            <div class="col xl4" id="column-img-confirm">
                    <div class="row">
                        <img src="{{Auth::user()->foto}}" class="photo-profile-edit-teach-second">
                    </div>
                    <div class="column-name">
                        <h1 class="header-name">{{Auth::user()->nama_depan}} {{Auth::user()->nama_belakang}}</h1>
                        <h1 class="header-contact">{{Auth::user()->email}} / 08192929292929 </h1>
                    </div>
            </div>
            <div class="col xl7" id="column-data">
                <div class="row" id="rows-data">
                    <h5 class="heading-confirm">Lengkapi data-data Dibawah ini</h5>
                </div>

                <div class="row"> 
                    <h5 class="list-heading-data">Pilih Materi Pengajaran:</h5>
                    <div class="input-field col s12">
                        <select>
                          <option value="" disabled selected>Materi Pengajaran</option>
                          <option value="1">Matematika</option>
                          <option value="2">Biologi</option>
                          <option value="3">Kimia</option>
                          <option value="3">Bahasa Pemrograman</option>
                          <option value="3">Ekonomi</option>
                          <option value="3">Marketing</option>
                          <option value="3">PKN</option>
                          <option value="3">Mengaji</option>

                        </select>
                      </div>
                </div>

                <div class="row" id="rows-data"> 
                    <h5 class="list-heading-data">Pilih Waktu Pengajaran</h5>
                   
                    <div class="col xl2" id="column-subject"> 
                        <h6 class="header-list-schedule">Senin</h6>
                        <ul class="list-schedule">
                            <li>08.30</li>
                            <li>09.00</li>
                            <li>10.00</li>
                        </ul>
                    </div>
                </div>

                <div class="row" id="rows-data">
                    <h5 class="list-heading-data">Jumlah Murid Yang diajarkan</h5>
                    <p class="paragraph-confirm">(Kelipatan murid akan dikenakan 20% dari harga utama)</p>
                    <div class="input-field col s12">
                        <select>
                          <option value="" disabled selected>Jumlah</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="3">3</option>
                          <option value="3">4</option>
                          <option value="3">5</option>
                          <option value="3">6</option>
                          <option value="3">8</option>

                        </select>
                      </div>
                </div>

                <div class="row right" id="rows-btn-konfirmasi"> 
                    <div class="col xl6"> <button class="btn-order-return"}}> <a href="{{route('home')}}" class="link-choose-teacher">Batal</a> </button></div>
                    <div class="col xl6"> <button class="btn-order-next"}}> <a href="{{route('confirm')}}" class="link-choose-teacher">Kirim</a> </button></div>       
                </div>
            </div>
    </div>

</div>