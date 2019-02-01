<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;
use Carbon\Carbon;
use URL;
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
        $now = Carbon::now();
//        dd($now->toDateString());
        $year = $now->year;
        $month =  $now->format('m');
//        dd($month);
        $weekofyear = $now->weekOfYear;
        $post_items = array();
//        $countYesterday = Timer::whereDate('created_at', $yesterday )->get();
        $post_items['posts'] = DB::table('posts')
            ->select('users.user_id','users.profile_picture','users.name','posts.post_id','posts.description','posts.attachment','posts.created_at', DB::raw("DATE_FORMAT(posts.created_at, '%H:%i:%s %d-%m-%Y') new_date"), DB::raw('YEAR(posts.created_at) year, MONTH(posts.created_at) month, DAY(posts.created_at) day, HOUR(posts.created_at) hour, MINUTE(posts.created_at) min, SECOND(posts.created_at) sec'))
            ->join('users','posts.user_id','=','users.user_id')
            ->whereYear('posts.created_at', '=', $year)
            ->whereMonth('posts.created_at', '=', $month)
            ->whereDate('posts.created_at','<',Carbon::yesterday())
            ->orderBy('posts.created_at', 'desc')
            ->groupby('year','month','day','hour','min','sec')
            ->get();
//        dd($post_items['posts']);
//        dd($post_items['posts']);
        $post_items['current_post_items'] = DB::table('posts')
            ->select('users.user_id','users.profile_picture','users.name','posts.post_id','posts.description','posts.attachment','posts.created_at', DB::raw("DATE_FORMAT(posts.created_at, '%H:%i:%s %d-%m-%Y') new_date"), DB::raw('YEAR(posts.created_at) year, MONTH(posts.created_at) month, DAY(posts.created_at) day, HOUR(posts.created_at) hour, MINUTE(posts.created_at) min, SECOND(posts.created_at) sec'))
            ->join('users','posts.user_id','=','users.user_id')
            ->whereDate('posts.created_at', Carbon::today())
            ->orderBy('posts.created_at', 'desc')
            ->get();

        $post_items['yesterday_post_items'] = DB::table('posts')
            ->select('users.user_id','users.profile_picture','users.name','posts.post_id','posts.description','posts.attachment','posts.created_at', DB::raw("DATE_FORMAT(posts.created_at, '%H:%i:%s %d-%m-%Y') new_date"), DB::raw('YEAR(posts.created_at) year, MONTH(posts.created_at) month, DAY(posts.created_at) day, HOUR(posts.created_at) hour, MINUTE(posts.created_at) min, SECOND(posts.created_at) sec'))
            ->join('users','posts.user_id','=','users.user_id')
            ->whereDate('posts.created_at', Carbon::yesterday())
            ->orderBy('posts.created_at', 'desc')
            ->get();
//        if(count($current_post_items) > 0)
//        {
//            dd('data');
//        }
//        else{
//            dd('nodata');
//        }
//        dd($current_post_items);
//        $year_month = DB::table('posts')
//            ->select(DB::raw('count(post_id) as `data`'), DB::raw("DATE_FORMAT(created_at, '%m-%Y') new_date"),  DB::raw('YEAR(posts.created_at) year, MONTH(posts.created_at) month'))
//            ->groupby('year','month')
//            ->get();
//        $month = $post_items->created_at->format('jS F Y h:i:s A');
//        dd($month);
//        dd($post_items);
        return view('home_user')->with($post_items);
    }
    public function featured_artist()
    {
        return view('featured_artist');
    }

    public function sales()
    {
        return view('sales');
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

    public function payment()
    {
        return view('payment');
    }

    public function messages()
    {
        return view('messages');
    }

    public function get_month_year(Request $request)
    {
        $month = $request->input('month');
        $year = $request->input('year');
        //making proper date with using values of month and year
        $d = $year.'-'.$month.'-1';
        //convert date in to stattotime format
        $d = strtotime(date('Y-m-d',strtotime($d)));
        if($month == '01')
        {
            $year = date('Y',strtotime('-1 year',$d));
            $month = '12';
        }
        else
        {
            //getting previous month value
            $month = date('m',strtotime('-1 month',$d));
        }
        $return_data = $this->get_posts($month,$year);

        $data = array(
            'status'=>count($return_data['return_data']) > 0 ? true : false,
            'message'=> 'xyz',
            'return_post' => $return_data['return_data'],
            'hidden_year'=> $return_data['hidden_year'],
            'hidden_month'=> $return_data['hidden_month'],
        );

        return response()->json($data);
    }

    public function get_posts($f_month,$f_year){
        $post_items = DB::table('posts')
            ->select('users.user_id','users.profile_picture','users.name','posts.post_id','posts.description','posts.attachment','posts.created_at', DB::raw("DATE_FORMAT(posts.created_at, '%H:%i:%s %d-%m-%Y') new_date"), DB::raw('YEAR(posts.created_at) year, MONTH(posts.created_at) month, DAY(posts.created_at) day, HOUR(posts.created_at) hour, MINUTE(posts.created_at) min, SECOND(posts.created_at) sec'))
            ->join('users','posts.user_id','=','users.user_id')
            ->whereYear('posts.created_at', '=', $f_year)
            ->whereMonth('posts.created_at', '=', $f_month)
            ->orderBy('posts.created_at', 'desc')
//                ->groupby('year','month','day','hour','min','sec')
            ->get();
//        dd($post_items);
        if (empty($post_items->toArray()) || $post_items->toArray() == null || $post_items->toArray() == '')
        {
//            dd($post_items->toArray());
            $d = $f_year.'-'.$f_month.'-1';
            //convert date in to stattotime format
            $d = strtotime(date('Y-m-d',strtotime($d)));
            if($f_month == '01')
            {
                $f_year = date('Y',strtotime('-1 year',$d));
                $f_month = '12';
            }
            else
            {
                //getting previous month value
                $f_month = date('m',strtotime('-1 month',$d));
            }
           $post_by_month =  $this->get_posts($f_month,$f_year);
            return $post_by_month;

        }

        //converting month value in month name
        $month = date("F",mktime(0,0,0,$f_month,1,0));
        //sub string month name in 3 letters
        $month = SUBSTR($month, 0, 3);
        /* [START] RENDERED FOR PREVIOUS POST */
        $return_data = '';
        if(count($post_items) > 0)
        {
            $pre_concat = '<li><div class="tldate">'.$month.'-'.$f_year .'</div></li>';
        }
        else
        {
            $pre_concat = '<li><div class="tldate" style="display: none;">'.$month.'-'.$f_year .'</div></li>';
        }

        $return_data .=$pre_concat;
        foreach ($post_items as $k => $post){
            if(isset($post->attachment) && $post->attachment != 'null' && $post->attachment != '')
            {
                $show_image = '<img src="'.URL::to('images\attachment_images/'.$post->attachment).'" class="img-responsive home-img">
                      <button class="btn btn-default buynow-btn">BUY NOW</button>';
            }
            else
            {
                $show_image = '';
            }
            if($k % 2 == 0)
            {
                $return_data .= '
                        <li class="timeline-inverted">
                            <div class="tl-circ"></div>
                            <div class="timeline-panel">
                                '.$show_image.'
                
                                <h3>'.$post->name.'
                                    <span>
                                        <img src="'.URL('uploads/'.$post->profile_picture.'').'" class="img-circle pull-right" width="35" height="35" alt="User Image">
                                    </span>
                        
                                </h3>
                                <p class="home-text">'.$post->description.'</p>
                                <p><hr style="border-top: 1px solid #000000; margin:0;"></p>
                                <p class="home-text"><i class="glyphicon glyphicon-calendar"></i>'.$post->created_at.'<span class="pull-right"><img src="'.URL('img/chat.png').'" class="img-responsive" width="20"></span></p>
                            </div>
                        </li>';
            }
            else
            {
                $return_data .= '
                        <li>
                          <div class="tl-circ"></div>
                          <div class="timeline-panel">
                           
                           '.$show_image.'
           
                            <h3>'.$post->name.'
                              <span>
                                <img src="http://localhost:8080/releasur_php/public/images\attachment_images/1548058382images.jpg" class="img-circle pull-right" width="35" height="35" alt="User Image">
                              </span>
                            </h3>
                            <p class="home-text">'.$post->description.'</p>
                            <p><hr style="border-top: 1px solid #000000; margin:0;"></p>
                            <p class="home-text"><i class="glyphicon glyphicon-calendar"></i>'.$post->created_at.'<span class="pull-right"><img src="'.URL('img/chat.png').'" class="img-responsive" width="20"></span></p>
                          </div>
                        </li>';
            }

        }
        $data = array(
            'return_data' => $return_data,
            'hidden_year' => $f_year,
            'hidden_month' => $f_month,
        );
        return $data;
        /* [END] RENDERED FOR PREVIOUS POST */
    }

    private function check_null_post($year, $month)
    {
        $post_items = DB::table('posts')
            ->select('users.user_id','users.profile_picture','users.name','posts.post_id','posts.description','posts.attachment','posts.created_at', DB::raw("DATE_FORMAT(posts.created_at, '%H:%i:%s %d-%m-%Y') new_date"), DB::raw('YEAR(posts.created_at) year, MONTH(posts.created_at) month, DAY(posts.created_at) day, HOUR(posts.created_at) hour, MINUTE(posts.created_at) min, SECOND(posts.created_at) sec'))
            ->join('users','posts.user_id','=','users.user_id')
            ->whereYear('posts.created_at', '=', $year)
            ->whereMonth('posts.created_at', '=', $month)
            ->orderBy('posts.created_at', 'desc')
//                ->groupby('year','month','day','hour','min','sec')
            ->get();
    }
}
