<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User2;

class User2Controller extends Controller
{
    // function users(){
    //    // return DB::select('select * from users');
    //     $users=DB::select('select * from users');
    //     return view('users',['users'=>$users]);
    // }

// ----------Without Model---------

    // function queries(){

        // ----------Fetch all data---------
        // $result = DB::table('users')->get();
        // return view('users',['users'=>$result]);


        // // ------------insert data------------
        // $result = DB::table('users')->insert([
        //     'name'=>'abcxyz',
        //     'email'=>'abcxyz@gmail.com',
        //     'email_verified_at'=>'2025-01-24 12:05:03',
        //     'password'=>'123456',
        //     'created_at'=>'2025-01-24 02:014:03',
        //     'updated_at'=>'2025-01-24 02:014:03',
        // ]);
        // if($result){
        //     return "Data inserted";
        // }else{
        //     return "data not inserted";
        // }
        // // display all inserted data
        // return view('users',['users'=>$result]);


        // // -----------update existing data----------
        // $result = DB::table('users')->where('name','xyz')->update(['email'=>'wxyz@gmail.com']);
        // if($result){
        //     return "Data updated";
        // }else{
        //     return "data not updated";
        // }
        // // display all inserted data
        // return view('users',['users'=>$result]);


        // // -----------delete data----------
        // $result = DB::table('users')->where('name','abcxyz')->delete();
        // if($result){
        //     return "Data deleted";
        // }else{
        //     return "data not deleted";
        // }
        // // display all inserted data
        // return view('users',['users'=>$result]);
    // }




// ---------------Using Model---------------------

    // function queries(){
        // $response = User2::all();
        // $response = User2::get();
        // $response = User2::where('name','abc')->get();
        // return $response;
        // return view('users',['users'=>$response]);

        
        // // ------------insert data------------
        // $response = User2::insert([
        //     'name'=>'abcxyz',
        //     'email'=>'abcxyz@gmail.com',
        //     'email_verified_at'=>'2025-01-24 12:05:03',
        //     'password'=>'123456',
        //     'created_at'=>'2025-01-24 02:014:03',
        //     'updated_at'=>'2025-01-24 02:014:03',
        // ]);
        // if($response){
        //     return "Data inserted";
        // }else{
        //     return "data not inserted";
        // }
        // // display all inserted data
        // return view('users',['users'=>$result]);


        // // ------------update data------------
        // $response = User2::where('name','xyz')->update(['email'=>'xyz@gmail.com']);
        // if($response){
        //     return "Data updated";
        // }else{
        //     return "data not updated";
        // }
        // // display all inserted data
        // return view('users',['users'=>$result]);


        // // ------------update data------------
        // $response = User2::where('name','abcxyz')->delete();
        // if($response){
        //     return "Data deleted";
        // }else{
        //     return "data not deleted";
        // }
        // // display all inserted data
        // return view('users',['users'=>$result]);
    // }



//-------------------Routing Method-----------

//     function get(){
//         return "Get route method";
//     }
//     function post(){
//         return "post route method";
//     }
//     function put(){
//         return "put route method";
//     }
//     function delete(){
//         return "delete route method";
//     }
// }



//-------------------Routing Method-----------

    function get(){
        return "Get route method";
    }
    function post(){
        return "post route method";
    }
    function put(){
        return "put route method";
    }
    function delete(){
        return "delete route method";
    }
    function any(){
        return "any route method";
    }
    function group1(){
        return "this is group 1";
    }
    function group2(){
        return "this is group 2";
    }
}
