<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adhaar extends Model
{
    protected $fillable = [
        'mrz',
        'public_key',
        'hash'
    ];
}
