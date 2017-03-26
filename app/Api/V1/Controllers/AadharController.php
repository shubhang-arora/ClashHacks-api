<?php

namespace App\Api\V1\Controllers;

use App\Aadhar;
use Illuminate\Http\Request;

use App\Http\Requests;

class AadharController extends Controller
{
    public function phone($phone)
    {
        $aadhar = Aadhar::where('phone', $phone)->get();

    }
}
