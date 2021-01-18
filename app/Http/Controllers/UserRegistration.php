<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserRegistration extends Controller
{
    public function postRegister(Request $request) {
        $name = $request->input('name');
        echo 'Name: '.$name;
        echo '<br>';

        $username = $request->username;
        echo 'UserName: '.$username;
        echo '<br>';

        $password = $request->password;
        echo 'Password: '.$password;
    }
}
