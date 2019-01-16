<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
        $post_items = DB::table('posts')
            ->select('users.user_id','users.profile_picture','users.name','posts.post_id','posts.description','posts.attachment','posts.created_at', DB::raw("DATE_FORMAT(posts.created_at, '%H:%i:%s %d-%m-%Y') new_date"), DB::raw('YEAR(posts.created_at) year, MONTH(posts.created_at) month, DAY(posts.created_at) day, HOUR(posts.created_at) hour, MINUTE(posts.created_at) min, SECOND(posts.created_at) sec'))
            ->join('users','posts.user_id','=','users.user_id')
            ->orderBy('posts.created_at', 'desc')
            ->groupby('year','month','day','hour','min','sec')
            ->get();
//        $year_month = DB::table('posts')
//            ->select(DB::raw('count(post_id) as `data`'), DB::raw("DATE_FORMAT(created_at, '%m-%Y') new_date"),  DB::raw('YEAR(posts.created_at) year, MONTH(posts.created_at) month'))
//            ->groupby('year','month')
//            ->get();
//        $month = $post_items->created_at->format('jS F Y h:i:s A');
//        dd($month);
//        dd($post_items);
        return view('home_user')->with('posts', $post_items);
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

    public function purchases()
    {
        return view('purchases');
    }
}
