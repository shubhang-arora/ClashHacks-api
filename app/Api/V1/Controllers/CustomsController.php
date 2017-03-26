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

    public function register_mrz(Request $request)
    {
        $hash = $this->mrz($request->input('mrz'));
        // $this->adhaar($request->input('adhaar'), $request->input('public_key'));
        return response()->json(compact('hash'));
    }

    private function mrz($mrz)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_PORT => "5000",
            CURLOPT_URL => "http://localhost:5000/hashmrz",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,

            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_HTTPHEADER => array(
                'mrz'   =>  $mrz
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        return "b87d2aaccfa2427887f614edf7e6f7a1910e6a3ab29a06106d42bf9c16b8156c";

        return $response;
    }

    public function submit_mrz(Request $request)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_PORT => "5000",
            CURLOPT_URL => "http://localhost:5000/submitpassporttochain",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_HTTPHEADER => array(
                'passport'  =>  $request->input('passport'),
                'public_key'    =>  $request->input('public_key'),
                'signature' =>  $request->input('signature')
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        return $this->response()->created();
    }

    private function adhaar($adhaar, $public_key)
    {
        Adhaar::create([
            'public_key'    =>  $public_key,
            'hash'  =>  'hash'
        ]);
    }







}
