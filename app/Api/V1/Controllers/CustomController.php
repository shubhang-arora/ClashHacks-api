<?php

namespace App\Api\V1\Controllers;

use App\Adhaar;
use App\Passport;
use Illuminate\Http\Request;

use App\Http\Requests;
use Dingo\Api\Routing\Helpers;
use Crypt_RSA;

class CustomController extends Controller
{
    use Helpers;

    public function register(Request $request)
    {
        $this->mrz($request->input('mrz'), $request->input('public_key'));
        $this->adhaar($request->input('adhaar'), $request->input('public_key'));
        return $this->response->created();
    }

    private function mrz($mrz, $public_key)
    {
        Passport::create([
           'public_key' =>  $public_key,
            'hash'  =>  "hash",
            'mrz'   =>  $mrz
        ]);
    }

    private function adhaar($adhaar, $public_key)
    {
        Adhaar::create([
            'u_id'   =>  $adhaar,
            'public_key'    =>  $public_key,
            'hash'  =>  'hash'
        ]);
    }



    /*
     * Third party handshake
     */
    public function verify_me(Request $request)
    {

    }

}
