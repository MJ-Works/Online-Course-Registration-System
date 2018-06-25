<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    public function users()
    {
        return $this->belongsToMany('App\User')
        ->withTimestamps();
    }

    public function department()
    {
        return $this->belongsTo('App\Department');
    }

    public function faculty()
    {
        return $this->belongsTo('App\Faculty');
    }
}
