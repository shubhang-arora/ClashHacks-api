<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adhaar extends Model
{
    protected $fillable = [
        'signature',
        'public_key',
        'hash'
    ];
}
