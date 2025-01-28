<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserAuthController extends Controller
{
    function login(Request $request)
    {
        $user = User::where('email',$request->email)->first();
        if(!$user || !Hash::check($request->password,$user->password)){
            return['result'=>"User not found","success"=>false];
        }
        $success['token']=$user->createToken('MyApp')->plainTextToken;
        $user['name']=$user->name;
        return ['success'=>true,"result"=>$success,"msg"=>"user login successfully"];
    }
    function signup(Request $request)
    {
        // return "SignUp function";
        // $input = $request->all();
        // $input["password"]=bcrypt($input["password"]);
        // $user=User::create($input);
        // $success['token']=$user->createToken('MyApp')->plainTextToken;
        // $user['name']=$user->name;
        // return ['success'=>true,"result"=>$success,"msg"=>"user register successfully"];

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }
    
        $input = $request->all();
        $input["password"] = bcrypt($input["password"]);
        $user = User::create($input);
        $success['token'] = $user->createToken('MyApp')->plainTextToken;
        $success['name'] = $user->name;
    
        return response()->json([
            'success' => true,
            "result" => $success,
            "msg" => "User registered successfully"
        ]);
    }
}
