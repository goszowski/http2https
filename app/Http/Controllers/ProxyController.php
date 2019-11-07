<?php

namespace App\Http\Controllers;

use Ixudra\Curl\Facades\Curl;
use Illuminate\Http\Request;

class ProxyController extends Controller
{
    public function handle(Request $request)
    {
        return Curl::to(env('PROXY_URL') . $request->path())
            ->withData($request->getContent())
            ->allowRedirect()
            ->{$request->method()}();
    }
}
