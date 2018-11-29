<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class verifikasi extends Model
{
    protected $fillable=[
      'teacher_id',
      'verifikasi',
      ];

    //   public function SeeTeacher()
    //   {
    //       return $this->belongsTo('App\Teacher', 'teacher_id', 'id');
        
    //   }
    public function teacher()
    {
        return $this->hasOne('App\Teacher');
    }
}
