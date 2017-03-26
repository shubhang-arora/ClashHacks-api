<?php

namespace App\Api\V1\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Dingo\Api\Routing\Helpers;

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

    }

    private function adhaar($adhaar, $public_key)
    {
        
    }

}
