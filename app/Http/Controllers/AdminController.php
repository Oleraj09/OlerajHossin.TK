<?php

namespace App\Http\Controllers;

use App\Models\MyPost;
use App\Models\Portfolio;
use App\Models\SetInfo;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class AdminController extends Controller
{
    function index()
    {
        return view('backend.Dashboard.index');
    }
    function setting()
    {
        $data = SetInfo::find(1);
        return view('backend.Dashboard.setting', compact('data'));
    }
    function update_setting(Request $r)
    {
        // $setid = SetInfo::frist();
        if (SetInfo::exists()) {
            $data = SetInfo::find(1);
            $data->name = "$r->name";
            $data->email = "$r->email";
            $data->phone = "$r->phone";
            $data->adress = "$r->adress";
            $data->type = "$r->type";
            $data->status = "$r->status";
            $data->ssct = "$r->ssct";
            $data->sscv = "$r->sscv";
            $data->ssci = "$r->ssci";
            $data->hsct = "$r->hsct";
            $data->hscv = "$r->hscv";
            $data->hsci = "$r->hsci";
            $data->bsct = "$r->bsct";
            $data->bscv = "$r->bscv";
            $data->bsci = "$r->bsci";
            $data->copyright = "$r->copyright";
            $data->fb = "$r->fb";
            $data->tw = "$r->tw";
            $data->ggl = "$r->ggl";
            $data->ins = "$r->ins";
            $data->ln = "$r->ln";
            $data->git = "$r->git";
            $data->html = "$r->html";
            $data->css = "$r->css";
            $data->js = "$r->js";
            $data->jq = "$r->jq";
            $data->php = "$r->php";
            $data->react = "$r->react";
            $logos = $r->logo;
            $images = $r->image;
            $folder = 'SiteImage';
            if ($images) {
                $imageinfo = 'user_' . time() . '_' . rand(101, 99999) . '.' . $images->getClientOriginalExtension();
                $images->move($folder, $imageinfo);
                $images = $folder . '/' . $imageinfo;
                $data->image = $images;
            }
            if ($logos) {
                $logoinfos = 'user_' . time() . '_' . rand(101, 99999) . '.' . $logos->getClientOriginalExtension();
                $logos->move($folder, $logoinfos);
                $logos = $folder . '/' . $logoinfos;
                $data->logo = $logos;
            }
            $data->save();
            return redirect()->back()->with('msg', 'Site Information Updated Successfully!');
        } else {
            $data = new SetInfo();
            // $data = SetInfo::find(1);
            $data->name = "$r->name";
            $data->email = "$r->email";
            $data->phone = "$r->phone";
            $data->adress = "$r->adress";
            $data->type = "$r->type";
            $data->status = "$r->status";
            $data->ssct = "$r->ssct";
            $data->sscv = "$r->sscv";
            $data->ssci = "$r->ssci";
            $data->hsct = "$r->hsct";
            $data->hscv = "$r->hscv";
            $data->hsci = "$r->hsci";
            $data->bsct = "$r->bsct";
            $data->bscv = "$r->bscv";
            $data->bsci = "$r->bsci";
            $data->copyright = "$r->copyright";
            $data->fb = "$r->fb";
            $data->tw = "$r->tw";
            $data->ggl = "$r->ggl";
            $data->ins = "$r->ins";
            $data->ln = "$r->ln";
            $data->git = "$r->git";
            $data->html = "$r->html";
            $data->css = "$r->css";
            $data->js = "$r->js";
            $data->jq = "$r->jq";
            $data->php = "$r->php";
            $data->react = "$r->react";
            $logos = $r->logo;
            $images = $r->image;
            $folder = 'SiteImage';
            if ($images) {
                $imageinfo = 'user_' . time() . '_' . rand(101, 99999) . '.' . $images->getClientOriginalExtension();
                $images->move($folder, $imageinfo);
                $images = $folder . '/' . $imageinfo;
                $data->image = $images;
            }
            if ($logos) {
                $logoinfos = 'user_' . time() . '_' . rand(101, 99999) . '.' . $logos->getClientOriginalExtension();
                $logos->move($folder, $logoinfos);
                $logos = $folder . '/' . $logoinfos;
                $data->logo = $logos;
            }
            $data->save();
            return redirect()->back()->with('msg', 'Site Information Updated Successfully!');
        }
    }
    function post()
    {
        $blog = MyPost::all();
        return view('backend.Dashboard.post', compact('blog'));
    }
    function portfolio()
    {
        $portfolio = Portfolio::all();
        return view('backend.Dashboard.portfolio', compact('portfolio'));
    }
}
