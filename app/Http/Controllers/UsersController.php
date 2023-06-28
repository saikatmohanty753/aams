<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use App\Models\LoginDetail;
use App\Repositories\LoginRepository;
use App\Repositories\IntegrationRepository;
use Auth;

class UsersController extends Controller
{
    private $social;
    private $integrated;
    private $mail_template = '';
    public function __construct(LoginRepository $social,IntegrationRepository $integrated){
        $this->social = $social;
        $this->integrated = $integrated;
    }
    public function index(Request $request)
    {
        return view('custom');
    }

    public function loginUser(Request $request)
    {
        if($request->method() == 'POST')
        {
            $request->validate([
                'email'=>'required',
                'password'=>'required',
                'captcha'=>'required|captcha'
            ],[
                'email.required'=>'Please enter the email id',
                'password.required'=>'Please enter the password',
                'captcha.required'=>'Please enter the captcha',
                'captcha.captcha'=>'Invalid captcha'
            ]);
            $users = User::where('email',$request->email)->where('is_active',1);
            if($users->exists())
            {
                $users = $users->first();
                if(Hash::check($request->password, $users->password))
                {
                    Auth::login($users);
                    session()->put('success','Logged In successfully !');
                }else{
                    session()->put('warning','Invalid password. Please try again !');
                }
            }else{
                session()->put('warning','Invalid email id . Please try again !');
            }
        }else{
            session()->put('error','Failed to login. Please try again !');
        }
        return redirect()->back()->withInput();
    }

    /* Gmail Login */
    public function gmailLogin()
    {
        return Socialite::driver('google')->redirect();
    }

    public function gmailCallBack()
    {
        $user = Socialite::driver('google')->user();
        if(!empty($user->id))
        {
            if($this->social->socialLogin($user))
            {
                $gmail_user = new LoginDetail;
                $gmail_user->type = 1;
                $gmail_user->socal_login_id = $user->id;
                $gmail_user->user_id = 1;
                $gmail_user->user_details = serialize($user);
                $gmail_user->unique_id = Str::random(10).$user->id;
                if($gmail_user->save())
                {

                }
            }else{
                return redirect()->route('register');
            }

        }
    }

    /* Facebook Login */

    public function facebookLogin()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookCallBack(Request $request)
    {
        if (!$request->has('code') || $request->has('denied')) {
            return redirect('/');
        }
        $user = Socialite::driver('facebook')->stateless()->user();
        if(!empty($user->id))
        {
            if($this->social->socialLogin($user))
            {
                $facebook_user = new LoginDetail;
                $facebook_user->type = 2;
                $facebook_user->socal_login_id = $user->id;
                $facebook_user->user_id = 1;
                $facebook_user->user_details = serialize($user);
                $facebook_user->unique_id = Str::random(10).$user->id;
                if($facebook_user->save())
                {

                }
            }else{
                return redirect()->route('register');
            }
        }
    }

    /* LinkedIn Login */

    public function linkedinLogin()
    {
        return Socialite::driver('linkedin')->redirect();
    }

    public function linkedinCallBack(Request $request)
    {
        if (!$request->has('code') || $request->has('denied')) {
            return redirect('/');
        }
        $user = Socialite::driver('linkedin')->user();
        if(!empty($user->id))
        {
            if($this->social->socialLogin($user))
            {
                $linkedin_user = new LoginDetail;
                $linkedin_user->type = 3;
                $linkedin_user->socal_login_id = $user->id;
                $linkedin_user->user_id = 1;
                $linkedin_user->user_details = serialize($user);
                $linkedin_user->unique_id = Str::random(10).$user->id;
                if($linkedin_user->save())
                {

                }
            }else{
                return redirect()->route('register');
            }
        }
    }

    /* Microsoft Login */

    public function microsoftLogin()
    {
        return Socialite::driver('microsoft')->redirect();
    }

    public function microsoftCallBack(Request $request)
    {
        if (!$request->has('code') || $request->has('denied')) {
            return redirect('/');
        }
        $user = Socialite::driver('microsoft')->user();
        if(!empty($user->id))
        {
            $linkedin_user = new LoginDetail;
            $linkedin_user->type = 5;
            $linkedin_user->socal_login_id = $user->id;
            $linkedin_user->user_id = 1;
            $linkedin_user->user_details = serialize($user);
            $linkedin_user->unique_id = Str::random(10).$user->id;
            if($linkedin_user->save())
            {

            }
        }
    }

    /***********************************
     * Forget password
     * **********************************/
    public function forgetPassword(Request $request)
    {
        if($request->method() == 'POST')
        {
            if(!empty($request->email))
            {
                $this->integrated->sendMail('saikat.mohanty@oasystspl.com','Hello test');
            }
        }
    }

    /* Insert Default data */
    public function UserInsert()
    {
        $user = new User;
        $user->name = 'Aman';
        $user->email = 'admin@gmail.com';
        $user->role_id = 1;
        $user->password = Hash::make('12345');
        $user->save();
        $user->assignRole(1);
        dd('Done');
    }
    public function refreshCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
