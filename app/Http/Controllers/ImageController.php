<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    function image(Request $request){
        $path=$request->file('file')->store('public');
        $pathArray = explode("/",$path);
        $imgPath=$pathArray[1];
        $img = new Image();
        $img -> path = $imgPath;
        // return $img -> save();
        if($img->save()){
            return redirect('list');
        }else{
            return "error! try after sometime";
        }
    }
    function list(){
        $images = Image::all();
        // return $images;
        return view('display',['imgData'=>$images]);
    }
}
