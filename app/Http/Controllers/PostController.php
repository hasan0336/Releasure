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

//        dd($request->all());
        $desc = $request->input('desc');
        $post_arr = array();
        if($request->file() != null)
        {
            $attachment_file = $request->file('attachment');
            $attachment =  time().$request->file('attachment')->getClientOriginalName();
            $attachment_ext = $request->file('attachment')->getClientOriginalExtension();
            $post['attachment'] = $attachment;
            $post['attachment_type'] = $attachment_ext;
            $destinationPath = public_path('/images/attachment_images');
            $attachment_file->move($destinationPath, $attachment);
        }
        else
        {
            $attachment_file = 'null';
            $attachment = 'null';
            $attachment_ext = 'null';
        }


        $price = $request->input('price');
        $post_arr['description'] = $desc;
        $post_arr['user_id'] = Auth::user()->user_id;
        $post_arr['price'] = $price;

//        dd($post_arr);



        $post_arr = array('description'=> $desc, 'user_id'=> Auth::user()->user_id, 'attachment'=>$attachment, 'attachment_type'=>$attachment_ext,'price'=>$price);
        $post = DB::table('posts')->insert($post_arr);


        if(request()->ajax())
        {
            $id = DB::getPdo()->lastInsertId();
            $post_items = DB::table('posts')
                ->select('users.user_id','users.profile_picture','users.name','posts.post_id','posts.description','posts.attachment')
                ->join('users','posts.user_id','=','users.user_id')
                ->where('post_id',$id)
                ->first();
            $show_image = '';
            if(isset($post_items->attachment) && $post_items->attachment != 'null')
            {
                $show_image = '<img src="'.URL::to('images\attachment_images/'.$post_items->attachment).'" class="img-responsive home-img">
                      <button class="btn btn-default buynow-btn">BUY NOW</button>';
            }
            else
            {
                $show_image = '';
            }



            $response['listing'] = '
                    <li>
                  <div class="tldate">
                      Now
                  </div>
                </li>
                    <div class="tl-circ"></div>
                    <div class="timeline-panel">
                      '.$show_image.'
                      <h3>'.$post_items->name.'
                        <span>
                          <img src="'.URL::to('/uploads/'.$post_items->profile_picture).'"  width="35" height="35" class="img-responsive img-circle pull-right" alt="User Image">
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
