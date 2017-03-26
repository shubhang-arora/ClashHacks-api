<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passport extends Model
{
    protected $fillable = [
        'u_id',
        'public_key',
        'hash'
    ];
}
