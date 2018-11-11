<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable=[
        'ktp',
        'npwp',
        'pendidikan',
        'resume',
        'user_nama_depan',
        'user_nama_belakang',
        'user_foto',
        'user_id',
      ];

      public function Subject()
    {
        return $this->hasMany('App\mata_pelajaran');
    }

    public function Schedule()
    {
        return $this->hasMany('App\Shcedule');
    }

    public function SeeTeacher()
    {
        return $this->belongsTo('App\User');
    }
}
