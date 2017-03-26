<?php

namespace App\Http\Controllers;

use App\Passport;
use Illuminate\Http\Request;

use App\Http\Requests;

class PassportController extends Controller
{
    public function get(Request $request)
    {
       $passport = Passport::create([
            'p_id'  =>  $request->input('p_id'),
            'S_id'  =>  $request->input('S_id'),
            'issuer'  =>  $request->input('issuer'),
            'nationality'   =>  $request->input('nationality'),
            'dob'   =>  $request->input('dob'),
            'doe'   =>  $request->input('doe'),
            'opt1'   =>  $request->input('opt1'),
            'opt2'   =>  $request->input('opt2'),
            'd_code'    =>  $request->input('d_code'),
            'mrz'   =>  $request->input('mrz')
        ]);



    }
}
