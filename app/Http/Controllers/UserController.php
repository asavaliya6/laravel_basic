<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function addUser(Request $request){
        // echo "User name is $request->username";
        // echo "<br>";
        // echo "User email is $request->email";
        // echo "<br>";
        // echo "User City is $request->city";
        // echo "<br>";
        $request->validate([
            'username'=>'required | min:3 | max:10',
            'email'=>'required | email',
            'city'=>'required | uppercase',
        ],[
            'username.required'=>'username can not be empty',
            'username.min=>username min characters should be 3',
            'username.max=>username max characters limit is 15',
            // 'email.email=>This emial is not valid',
            'city.uppercase'=>'city should be in uppercase only',
        ]);
        return $request;
    }
}
