<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
    protected $fillable=[
        'confirm_id',
        'date_les',
        'mention',
        'student_stat',
        'friends_stat',
        'friends2_stat',
        'friends3_stat',
        'friends4_stat',
        'confirm_student'
    ];

    public function ConfirmOrder()
    {
        return $this->belongsTo('App\Confirm','confirm_id','id');
    }
}
