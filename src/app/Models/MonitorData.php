<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MonitorData extends Model
{
    //
    protected $fillable = [
        'timestamp',
        'data1',
        'data2',
        'data3',
        'data4',
        'average',
    ];
}
