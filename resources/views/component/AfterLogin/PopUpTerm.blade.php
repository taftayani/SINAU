<li>
    @if (Auth::user()->Teacher)
         <a href="{{route('guru')}}" class="modal-trigger">Menjadi Pengajar ?</a> 
    @else
        <a href="#modal2" class="modal-trigger">Menjadi Pengajar ?</a> 
    @endif 
    <div id="modal2" class="modal container col xl12">
        <div class="modal-content" id="modal-teacher">
            <div class="container">
                <div class="row">
                    <h1 class="heading-term center">Peraturan dan Ketentuan Pengajar</h1>
                </div>
                <div class="row">
                    <p class="paragraph-term">Sebelum menjadi guru ada beberapa hal yang harus kamu setujui untuk dapat mulai mengajar :</p>
                    <ol class="list-term">
                        <li> Untuk menjadi guru, minimal harus berstatus mahasiswa semester 3 dan tidak mengalami sanksi
                                akademik</li>
                        <li>mengisi data yang tertera dan wajib diisi saat anda memilih ingin menjadi guru</li>
                        <li>melampirkan sertifikasi berupa gambar scan atau foto, sebagai pertimbangan kami untuk menjadi
                                seorang guru</li>
                        <li> Harus memiliki KTP </li>
                        <li>tidak memiliki kelainan seksual, tidak ada kecanduan obat-obatan, dan tidak ada perkara hukum lainnya</li>
                    </ol>
                </div>

                <div class="row right" id=""> 
                     <button class="btn-order-return"}}> <a href="{{route('home')}}" class="link-choose-teacher">Tidak Setuju</a> </button>
                    <button class="btn-order-next"}}> <a href="{{route('Data_Guru')}}" class="link-choose-teacher">Setuju</a> </button>     
                    </div>
            </div>
            
        </div>
    </div>
</li>
