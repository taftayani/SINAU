<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teach extends Model
{
  protected $fillable=[
    'nama_depan_guru',
    'nama_belakang_guru',
    'email_guru',
    'username',
    'foto guru',
    'NIK',
    'password',
  ];

  protected $hidden = [
      'password', 'remember_token',
  ];
}
