<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stud;
use Illuminate\Support\Facades\Validator;

class StudController extends Controller
{
    function list(){
        return stud::all();
    }
    // function addStudent(Request $req){
    //     return $req->input();
    // }
    function addStudent(Request $request){
        // return $request->input();
        $rules=array(
            'name'=>'required | min:2 | max:10',
            'email'=>'email | required',
            'phone'=>'required'
        );
        $validation = Validator::make($request->all(),$rules);
        if($validation->fails()){
            return $validation->errors();
        }else{
            $stud = new Stud();
            $stud->name=$request->name;
            $stud->email=$request->email;
            $stud->phone=$request->phone;
            if($stud->save()){
                return ["result"=>"Student added"];
            }else{
                return ["result"=>"Operation failed"];
            }
        }
    }

    function updateStudent(Request $request){
        // return "update student";
        $stud=Stud::find($request->id);
        $stud->name=$request->name;
        $stud->email=$request->email;
        $stud->phone=$request->phone;
        if($stud->save()){
            return ["result"=>"Student updated"];
        }else{
            return ["result"=>"student not updated"];
        }
    }
    function deleteStudent($id){
        $stud = Stud::destroy($id);
        if($stud){
            return ['result'=>"student record deleted"];
        }else{
            return ['result'=>"student record not deleted"];
        }
    }
    function searchStudent($name){
        $stud = Stud::where('name','like',"%$name%")->get();
        if($stud){
            return ["result"=>$stud];
        }else{
            return ["return"=>"no record found"];
        }
    }
}
