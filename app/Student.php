<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable = [
        'name', 'year',
    ];
    public function unis()
    {
        return $this->hasMany('App\Uni');
    }
}
