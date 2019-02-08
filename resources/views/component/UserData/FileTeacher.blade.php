<div class="container-fluid rows-subject" id="Filing">
    <div class="row">
        <h1 class="heading-file">Masukan Pencapaian Yang Dimiliki</h1>
        <p class="paragraph-file">Catatan ! File harus berupa gambar (jpg,png,atau jpeg)</p>
    </div>
    <div class="row">
        <form action="{{route('input_teacher_file')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            
                        <div class="file-field input-field">
                          <div class="btn">
                            <span>File</span>
                            <input type="file" name="file" multiple>
                          </div>
                          <div class="file-path-wrapper">
                            <input class="file-path validate" >
                          </div>
                        </div>
                        <button type="submit" class="btn-file">Masukan</button>
            </form>
    </div>

    <div class="row">
        
    @foreach (Auth::user()->Teacher->File as $files)
    <form action="{{route('delete_file',['teacherFile'=>$files->id])}}" method="post" enctype="multipart/form-data">    
        {{ csrf_field() }}
        {{ method_field('delete') }}   
                <div class="col s4">
                        <button type="submit" name="delete"  class="btn-delete"> 
                                <i class=" tiny material-icons">cancel</i>
                                <img src="{{asset($files->file)}}" alt="" class="img-file" width="300">
                        </button>
                </div>
        </form>
        @endforeach
    </div>

</div>