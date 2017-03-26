<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passport extends Model
{
    protected $fillable = [
        'p_id',
        's_id',
        'issuer',
        'nationality',
        'dob',
        'sex',
        'd_code',
        'doe',
        'opt1',
        'opt2',
        'mrz'
    ];
}
