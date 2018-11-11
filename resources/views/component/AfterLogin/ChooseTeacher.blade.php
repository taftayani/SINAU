<div class="layouts-choose">
        <div class="container"> 
            <div class="row"> 
                    <div class="col xl5" id="column-img">
                            <img src="{{Auth::user()->foto}}" class="photo-profile-edit-teach">
                            <div class="link-column-profile"><h6 class="header-list-address">lokasi Anda</h6></div>
                    </div>
                    <div class="col xl7"> 
                        <div class="container">
                              <div class="row">
                                    <h1 class="header-name">{{Auth::user()->nama_depan}} {{Auth::user()->nama_belakang}}</h1>
                                    <h1 class="header-contact">{{Auth::user()->email}} / 08192929292929 </h1>
                                    <p class="paragraph-biodata">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                        Phasellus ante lacus, bibendum tristique elit nec, 
                                        convallis auctor lorem. Proin tortor ante, blandit eget viverra sed, 
                                        mollis eget nibh. Fusce in auctor ex, et consequat libero. In commodo,
                                         justo id consequat vestibulum, felis lacus sagittis lorem, 
                                         vitae convallis ipsum erat in tortor. In hac habitasse platea dictumst. 
                                         Suspendisse non ipsum vehicula, aliquet elit vel, tempor enim. Quisque et
                                          libero tincidunt, pulvinar dolor sed, tincidunt erat. Praesent euismod 
                                          id turpis non euismod. Phasellus accumsan lobortis turpis sed rhoncus. 
                                          Duis sed urna urna. In consectetur enim eget diam facilisis, 
                                          sed pulvinar felis imperdiet. Quisque venenatis bibendum sem, 
                                          sit amet blandit nulla ultricies in. Integer porttitor felis nec 
                                          magna egestas tincidunt. Donec porttitor ornare neque vel pellentesque. 
                                          Fusce maximus a sem non imperdiet.
                                    </p>      
                              </div>
                              <div class="right"><p class="paragraph-biodata">Jumlah Max Mengajar : <b>8 orang</b></p></div>
                        </div>
                    </div>
            </div>
         </div>

         <div class="container-fluid rows-subject">
                <div class="row">
                    <div>
                        <h1 class="header-subject">Materi Pengajaran</h1>
                    </div>
                </div>
                <div class="row">
                      
                            <div class="col xl2 "> 
                              <div class="div-list-subject">          
                                        <h1 id="list-subject">  
                                              Matematika
                                        </h1>      
                                     </div>
                            </div>

                            <div class="col xl2 "> 
                                <div class="div-list-subject">          
                                    <h1 id="list-subject">  
                                          Matematika
                                    </h1>      
                                 </div>
                            </div>
                       
        </div>
         </div>

         <div class="container-fluid rows-subject">
                <div class="row">
                    <div>
                        <h1 class="header-subject">Jadwal Mengajar</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col xl1 " id="column-subject"> 
                        <h6 class="header-list-schedule">Senin</h6>
                        <ul class="list-schedule">
                            <li>08.30</li>
                            <li>09.00</li>
                            <li>10.00</li>
                        </ul>
                    </div>
                    <div class="col xl1 column-subject" id="column-subject"> 
                        <h6 class="header-list-schedule">Senin</h6>
                        <ul class="list-schedule">
                            <li>08.30</li>
                            <li>09.00</li>
                            <li>10.00</li>
                        </ul>
                    </div>
                    <div class="col xl1 column-subject" id="column-subject"> 
                        <h6 class="header-list-schedule">Senin</h6>
                        <ul class="list-schedule">
                            <li>08.30</li>
                            <li>09.00</li>
                            <li>10.00</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row right" id="rows-btn-konfirmasi"> 
                <div class="col xl6"> <button class="btn-order-return"}}> <a href="{{route('home')}}" class="link-choose-teacher">Kembali</a> </button></div>
                <div class="col xl6"> <button class="btn-order-next"}}> <a href="{{route('confirm')}}" class="link-choose-teacher">Berikutnya</a> </button></div>       
            </div>
                
            </div>
</div>