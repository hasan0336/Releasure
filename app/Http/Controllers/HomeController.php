<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function login_user()
    {
        return view('login_user');
    }
    public function signup_user()
    {
        return view('signup_user');
    }
    public function home_user()
    {
        return view('home_user');
    }
    public function featured_artist()
    {
        return view('featured_artist');
    }

    public function forget_password()
    {
        return view('forgot');
    }
    public function reset_password()
    {
        return view('reset_password');
    }
}
