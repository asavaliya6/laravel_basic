<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsController extends Controller
{
    function login(Request $request){
        echo "Request method is ". $request->method();
        echo "<br>";
        echo "Request method is ". $request->path();
        echo "<br>";
        echo "Request method is ". $request->url();
        echo "<br>";
        echo "Name is ". $request->input('name');
        echo "<br>";
        echo "Name is ". $request->name;
        echo "<br>";
        print_r($request->input());
        echo "<br>";
        print_r($request->collect());
        echo "<br>";

        if($request->isMethod('post')){
            echo "execute code for post request";
        }else{
            echo "execute code for other request";
        }
        echo "<br>";
        if($request->is('us')){
            echo "execute code for user path";
        }else{
            echo "execute code for other path";
        }
        echo "name is".$request->ip();
        echo "<br>";
    }
}
