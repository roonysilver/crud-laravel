<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CookieController extends Controller
{
    public function setCookie(Request $request) 
    {
        $minute = 1;
        $respone = new Response('Hello world');
        $respone->withCookie(cookie('name', 'virat', $minute));
        return $respone;
    }

    public function getCookie(Request $request) {
        $value = $request->cookie('name');
        echo $value;
    }
}
