<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mata_pelajaran extends Model
{
    protected $fillable=[
        'mata_pelajaran','teacher_id'
      ];

      public function SeeTeacher()
    {
        return $this->belongsTo('App\Teacher','teacher_id','id');
    }
    public function Stat()
    {
        return $this->hasOne('App\Stat');
    }
}
