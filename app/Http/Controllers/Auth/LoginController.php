<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use App\User;
use Auth;
use File;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($social)
    {
        return Socialite::driver($social)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($social)
    {
        session()->put('state', request()->input('state'));
        $socialuser = Socialite::driver($social)->user();
        $finduser = User::where('email', $socialuser->email)->first();

        if(count($finduser) > 0) {
            Auth::login($finduser);
//            return 'done with old';
            return redirect('login');
        }
        else
        {

            $fileContents = file_get_contents($socialuser->getAvatar());
            $file_name = time();
            File::put(public_path() . '/uploads/' .$file_name. ".jpg", $fileContents);
//            //To show picture
            $picture = $file_name.'.jpg';
            $user = new User;
            $user->name = $socialuser->name;
            $user->social_token = $socialuser->id;
            $user->email = $socialuser->email;
            $user->password = bcrypt('123456');
            $user->profile_picture = $picture;
            if($social == 'google')
            {
                $user->login_type = 'google';
            }
            elseif($social == 'facebook')
            {
                $user->login_type = 'facebook';
            }
            elseif($social == 'linkedin')
            {
                $user->login_type = 'linkedin';
            }
            $user->save();

            Auth::login($user);

            return redirect('login');
        }

    }


}
