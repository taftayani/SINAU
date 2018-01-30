<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class surveys extends Model
{
  protected $fillable=[
    'nama_depan',
    'nama_belakang',
    'email',
    'tanggapan',
  ];
}
