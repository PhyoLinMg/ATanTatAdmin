<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    //
    protected $fillable = [
        'name'
    ];

     public function periods()
    {
        return $this->hasMany('App\Period');
    }

    public function majors()
    {
        return $this->belongsToMany('App\Major');
    }
}
