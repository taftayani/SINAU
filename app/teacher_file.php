<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teacher_file extends Model
{
    protected $fillable=[
        'teacher_id',
        'file'
    ];
    public function SeeTeacher()
    {
        return $this->belongsTo('App\Teacher','teacher_id','id');
    }
}
