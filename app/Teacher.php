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
        'user_id',
      ];

      public function Subject()
    {
        return $this->hasMany('App\mata_pelajaran','teacher_id','id');
    }
    public function Subjects()
    {
        return $this->belongsTo('App\mata_pelajaran','teacher_id','id');
    }
    public function Schedule()
    {
        return $this->hasMany('App\Shcedule');
    }

    public function Confirm()
    {
        return $this->hasOne('App\Confirm');
    }
    public function Stat()
    {
        return $this->hasMany('App\Stat');
    }
    public function SeeTeacher()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    public function Verified()
    {
        return $this->hasOne('App\verifikasi');
    }
    public function File()
    {
        return $this->hasMany('App\teacher_file');
    }
}
