<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('Second');
    }
    public function index()
    {
        echo 123;
    }
    public function showPath(Request $request) {
        $name = 'Sơn';
        return view('path')->with([
            'request'=>$request,
            'name'=>$name
        ]);
    }

    
}
