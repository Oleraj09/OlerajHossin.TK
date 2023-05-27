<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PortfolioController extends Controller
{
    function add(Request $r){
        $porject = new Portfolio();
        $porject->name = "$r->name";
        $porject->link = "$r->link";
        $porject->desc = "$r->desc";
        $porject->tag = "$r->tag";
        $image = $r->image;
        $folder = 'ProjectImage';
        if($image){
            $imageinfo = 'Project_' . time() . '_' . rand(101, 99999) . '.' . $image->getClientOriginalExtension();
            $image->move($folder, $imageinfo);
            $image = $folder. '/' . $imageinfo;
            $porject->image = $image;
        }
        $porject->save();
        return redirect()->back();
        // return response()->json();
    }
    function delete($id){
        $delete = Portfolio::find($id);
        $image_path = public_path($delete->image);
        if(File::exists($image_path)){
            File::delete($image_path);
        }
        $delete->delete();
        return redirect()->back();
    }
    function update(Request $r,$id){
        $porject = Portfolio::find($id);
        $porject->name = "$r->name";
        $porject->link = "$r->link";
        $porject->desc = "$r->desc";
        $porject->tag = "$r->tag";
        $porject->status = "$r->status";
        $image = $r->image;
        $folder = 'ProjectImage';
        if($image){
            $image_path = public_path($porject->image);
            if(File::exists($image_path)){
                File::delete($image_path);
            }
            $imageinfo = 'Project_' . time() . '_' . rand(101, 99999) . '.' . $image->getClientOriginalExtension();
            $image->move($folder, $imageinfo);
            $image = $folder. '/' . $imageinfo;
            $porject->image = $image;
        }
        $porject->save();
        return redirect()->back();
        // return response()->json();
    }
}
