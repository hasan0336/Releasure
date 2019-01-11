<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ForgotPassword;
use Illuminate\Auth\Events\Registered;
use Auth;
use Mail;
use DB;
use Session;
use App\User;
use Crypt;
use Hash;

class UserController extends Controller
{
    public function forgot_user_password(Request $request)
    {
        $user = User::where('email', '=' ,$request->user_email)->first();
        $user_id = $user->user_id;
//        $hashed_id = Hasher::encode(1);
//        $pass = \Hash::make($user_id);
//        $passes = Hash::make($pass);

        $encrypted_id = Crypt::encryptString($user_id);

//        $decrypted = Crypt::decryptString($encrypted_id);

//        dd($decrypted);
        $email = new ForgotPassword(new User(['email'=> $encrypted_id]));

        Mail::to($request->user_email)->send($email);
        DB::commit();
        Session::flash('Forget_password', 'Change Password Link Send to you!');
        return redirect()->back();
    }

    public function change_password($user_id)
    {
        $decrypted = Crypt::decryptString($user_id);
        $user = User::find($decrypted);
        auth()->loginUsingId($user->user_id);
        return redirect()->route('reset_password');
//        return $user;
//        JWTAuth::fromUser($user);
//        dd($user->password);
    }

    public function change_user_password(Request $request)
    {
        $user = Auth::user();
        if($request->user_password == $request->confirm_password)
        {
            $user->fill([
                'password' => Hash::make($request->user_password)
            ])->save();
//            $new_password = bcrypt($request->user_password);
//            $a = Hash::check(Auth::user()->password, $new_password);
//            dd(Auth::user()->password);
//            $user = User::where('user_id',Auth::user()->user_id )->update(array('password' => bcrypt($request->user_password)));
//            dd($user);
            return redirect()->route('home');
        }
        else
        {
            Session::flash('confirm_password', 'Password doesnt match!');
            return redirect()->back();
        }
    }
}
