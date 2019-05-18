<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    //
    protected $fillable = [
        'name',
    ];

    public function majors()
    {
        return $this->belongsToMany('App\Major');
    }
    
}



