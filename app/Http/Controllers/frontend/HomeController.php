<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\MyPost;
use App\Models\Portfolio;
use App\Models\SetInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    function index()
    {
        $setinfo = SetInfo::find(1);
        $portfolio = Portfolio::paginate(8);
        $blog = MyPost::paginate(3);
        return view('home', compact('setinfo','portfolio','blog'));
    }
    function login()
    {
        return view('backend.login');
    }
    function loginto(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('You have Successfully loggedin');
        }
        return redirect("login")->with('message','Oppes! You have entered invalid credentials');
    }
    function forgetpass()
    {
        return view('backend.forgetpass');
    }
    function logout(){
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
