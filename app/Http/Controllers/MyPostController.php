<?php

namespace App\Http\Controllers;

use App\Models\MyPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MyPostController extends Controller
{
    function add(Request $r){
        $blog = new MyPost();
        $blog->title = "$r->title";
        $blog->body = "$r->body";
        $image = $r->image;
        $folder = 'PostImage';
        if($image){
            $imageinfo = 'Post_' . time() . '_' . rand(101, 99999) . '.' . $image->getClientOriginalExtension();
            $image->move($folder, $imageinfo);
            $image = $folder. '/' . $imageinfo;
            $blog->image = $image;
        }
        $blog->save();
        return redirect()->back();
        // return response()->json();
    }
    function delete($id){
        $dlt = MyPost::find($id);
        $image_path = public_path($dlt->image);
        if(File::exists($image_path)){
            File::delete($image_path);
        }
        $dlt->delete();
        return redirect()->back();
    }
    function update(Request $r,$id){
        $blog = MyPost::find($id);
        $blog->title = "$r->title";
        $blog->body = "$r->body";
        $image = $r->image;
        $folder = 'PostImage';
        if($image){
            $image_path = public_path($blog->image);
            if(File::exists($image_path)){
                File::delete($image_path);
            }
            $imageinfo = 'Post_' . time() . '_' . rand(101, 99999) . '.' . $image->getClientOriginalExtension();
            $image->move($folder, $imageinfo);
            $image = $folder. '/' . $imageinfo;
            $blog->image = $image;
        }
        $blog->save();
        return redirect()->back();
        // return response()->json();
    }
}
