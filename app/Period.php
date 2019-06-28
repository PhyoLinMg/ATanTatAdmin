<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    //
    protected $fillable = [
        'subject_id', 'major_id', 'start_time','end_time'
    ];
}
