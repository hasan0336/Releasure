<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\User;
use App\Post;
use DB;
use Auth;
use Illuminate\Support\Facades\URL;

class PostController extends Controller
{
    public function post_data(Request $request)
    {
        $desc = $request->input('desc');
        $post_arr = array('description'=> $desc, 'user_id'=> Auth::user()->user_id);
        $post = DB::table('posts')->insert($post_arr);

        if(request()->ajax())
        {
            $id = DB::getPdo()->lastInsertId();
            $post_items = DB::table('posts')
                ->select('users.user_id','users.profile_picture','users.name','posts.post_id','posts.description','posts.attachment')
                ->join('users','posts.user_id','=','users.user_id')
                ->where('post_id',$id)
                ->first();

            $response['listing'] = '
                    <div class="tl-circ"></div>
                    <div class="timeline-panel">
                    
                      <img src="'.URL::to('img/art-gallery.jpg').'" class="img-responsive home-img">
                      <button class="btn btn-default buynow-btn">BUY NOW</button>
                      <h3>'.$post_items->name.'
                        <span>
                          <img src="'.URL::to('/uploads/'.$post_items->profile_picture).'" class="img-responsive img-circle pull-right" alt="User Image">
                        </span>
                      </h3>
                      <p class="home-text"> '.$post_items->description.' </p>
                      <p><hr style="border-top: 1px solid #000000; margin:0;"></p>
                      <p class="home-text"><i class="glyphicon glyphicon-calendar"></i> Jan 01 2018 at 5:00pm <span class="pull-right"><img src="'.URL::to('img/chat.png').'" class="img-responsive" width="20"></span></p>
                    </div>
                ';
            echo json_encode($response);

        }

    }

}
