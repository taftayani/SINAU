<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mata_pelajaran extends Model
{
    protected $fillable=[
        'mata_pelajaran','teacher_id','teacher_nama_depan'
      ];

      public function SeeTeacher()
    {
        return $this->belongsTo('App\Teacher','teacher_id','id');
    }
}
