<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Confirm extends Model
{
    protected $fillable=[
        'teacher_id',
        'user_id',
        'subject_id',
        'shcedule_id',
        'materi',
        'day_les',
        'packet',
        'student',
        'address_les',
        'Status',
        'date_les',
        'pay',
        'stat_pay',
        'friends',
        'friends2',
        'friends3',
        'friends4'
    ];

    public function UserOrder()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
    
    public function TeacherOrder()
    {
        return $this->belongsTo('App\Teacher','teacher_id','id');
    }

    public function SubjectOrder()
    {
        return $this->belongsTo('App\mata_pelajaran','subject_id','id');
    }

    public function ShceduleOrder()
    {
        return $this->belongsTo('App\Shcedule','shcedule_id','id');
    }
    public function Stat()
    {
        return $this->hasOne('App\Stat');
    }
    public function SeeStat()
    {
        return $this->hasMany('App\Stat');
    }
}
