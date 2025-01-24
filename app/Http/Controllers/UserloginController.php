<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserloginController extends Controller
{
    // --------session-------
    // function login(Request $request){
    //     $request->session()->put('user',$request->input('user'));
    //     $request->session()->put('allData',$request->input());
    //     return redirect('profile');
    // }
    // function logout(){
    //     session()->pull('user');
    //     return redirect('profile');
    // }

    function adduser(Request $request){
        // return "add user function";
        $request->session()->flash('message','User has been added successfully');
        $request->session()->flash('name','abc');
        return redirect('user');
    }
}
