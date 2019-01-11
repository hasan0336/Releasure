<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Mail\emailverification;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Auth;
use Mail;
use DB;
use Session;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/index';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'profile_picture' => 'required'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {

        $request = app('request');
        if($request->hasfile('profile_picture')){
            $avatar = $request->file('profile_picture');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            $upload_path = public_path('uploads/');
//            dd($upload_path);
            $avatar->move($upload_path, $filename);
//            Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/' . $filename) );

        }

//        dd($data['login_type']);

        $user = User::create([
            'login_type' => $data['login_type'],
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'contact' => $data['contact'],
            'address' => $data['address'],
            'profession' => $data['profession'],
            'payment_id' => $data['payment_id'],
            'user_type' => $data['user_type'],
            'profile_picture' => $filename,
            'email_token' => str_random(10),
        ]);

        $email = new emailverification(new User(['email_token' => $user->email_token, 'name' => $user->name, 'email'=> $user->email]));
        Mail::to($user->email)->send($email);
        DB::commit();
        Session::flash('verification_message', 'We have sent you a verification email!');


        return $user;
    }

    public function verify($token)
    {
        // The verified method has been added to the user model and chained here
        // for better readability


        $user = User::where('email_token','=',$token)->get();


        if(isset($user))
        {

            $user2 = User::where('email_token','=',$token)->first();

            $result = User::where('email_token',$token)->update(['email_verification'=> '1', 'email_token'=> null]);

            $asdasd = Auth::login($user2);
            //Redirect Login with Message

        }
        else
        {
            return Redirect::back()->withErrors(['unverified_message', 'verify your email!']);
//            Session::flash('unverified_message', 'verify your email!');
//            return redirect()->back();
        }

        //dd($result);

        return redirect('login');
    }


}
