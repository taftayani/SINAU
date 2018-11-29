<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_depan', 'nama_belakang', 'email','username','password','foto','phone','address','birthday','gender'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function Teacher()
    {
        return $this->hasOne('App\Teacher');
    }
        public function Subject()
        {
            return $this->hasOne('App\mata_pelajaran');
        }
        
    public function Confirm()
    {
        return $this->hasOne('App\Confirm');
    }
}
