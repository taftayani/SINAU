<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shcedule extends Model
{
    protected $fillable=[
        'day','time_les','teacher_id'
      ];

      public function confirm()
      {
         return $this->hasOne('App\Confirm');
      }

      public function SeeConfirm()
      {
         return $this->hasOne('App\Confirm');
      }
}
