<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uni extends Model
{
	protected $fillable = [
        'name'
    ];


     public function years()
    {
        return $this->hasMany('App\Year');
    }
    
    
    
}
