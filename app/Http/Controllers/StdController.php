<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Std;

class StdController extends Controller
{
    function add(Request $request){
        // return $request->name;
        $std= new Std();
        $std-> name = $request->name;
        $std-> email = $request->email;
        $std-> phone = $request->phone;
        $std-> save();

        if($std){
            echo "New student added";
        }else{
            return "Operation failed";
        }
    }

    // function list(){
    //     $stdData=Std::all();
    //     return view('list-std',['stds'=>$stdData]);
    // }

    function list(){
        $stdData=Std::paginate(2);
        return view('list-std',['stds'=>$stdData]);
    }

    function delete($id){
        $isDeleted=Std::destroy($id);
        if($isDeleted){
            return redirect('list');
        }
    }
    function edit(Request $request,$id){
        $std=Std::find($id);
        return view('edit',['data'=>$std]);
    }
    function editStd(Request $request,$id){
        $std = Std::find($id);
        $std->name=$request->name;
        $std->email=$request->email;
        $std->phone=$request->phone;
        if($std->save()){
            return redirect('list');
        }else{
            return "Upadte operation failed";
        }
    }
    function search(Request $request){
        $stdData=Std::where('name','like',"%$request->search%")->get();
        return view('list-std',['stds'=>$stdData,'search'=>$request->search]);
    }
    function deleteMultiple(Request $request){
        $result=Std::destroy($request->ids);
        if($result){
            return redirect('list');
        }else{
            return "student data not deleted";
        }
    }
}
