<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aadhar extends Model
{
    protected $fillable = [
        'aadhar_num',
        'name',
        'phone',
        'dob',
        'gender',
        'address',
        'relation',
        'r_name',
        'city',
        'state',
        'pin_code'
    ];
}
