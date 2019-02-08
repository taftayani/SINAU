<?php

namespace App\Http\Controllers;

use App\teacher_file;
use App\Teacher;
use App\User;
use Illuminate\Http\File;
use App\Http\Requests\UploadRequest;
use Illuminate\Support\Facades\Storage;
use Auth;
use Illuminate\Http\Request;

class TeacherFileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {   
       
      
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'file' => 'required|max:2000'
        ]);
        $path = Storage::disk('public')->put('Files/'.$_FILES['file']['name'],
        file_get_contents($_FILES['file']['tmp_name']));

        $teacher=Teacher::where('user_id',Auth::user()->id)->first();
        // $files=teacher_file::create();
        teacher_file::create([
            'teacher_id' => $teacher->id,
            'file' => 'storage/Files/'.$_FILES['file']['name']
        ]);
        // return $request;
        return redirect (route('shown_teacher'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TeacherFile  $teacherFile
     * @return \Illuminate\Http\Response
     */
    public function show(TeacherFile $teacherFile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TeacherFile  $teacherFile
     * @return \Illuminate\Http\Response
     */
    public function edit(TeacherFile $teacherFile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TeacherFile  $teacherFile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeacherFile $teacherFile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TeacherFile  $teacherFile
     * @return \Illuminate\Http\Response
     */
    public function destroy($teacherFile)
    {
        $file = teacher_file::find($teacherFile);
        
        $file->delete();   
        return redirect (route('shown_teacher'));
    }
}
