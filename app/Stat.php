<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
    protected $fillable=[
        'confirm_id',
        'date_les',
        'mention'
    ];

    public function ConfirmOrder()
    {
        return $this->belongsTo('App\Confirm','confirm_id','id');
    }
}
