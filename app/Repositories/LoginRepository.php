<?php
namespace App\Repositories;

use App\Interfaces\LoginInterface;
use App\Models\User;

class LoginRepository implements LoginInterface{
    public function socialLogin($user)
    {
        if(!empty($user->id))
        {
            $usercheck = User::where('email',$user->email);
            if($usercheck->exists())
            {
                /* $usercheck = $usercheck->first();
                Auth::login($uses); */
                return true;
            }else{
                session()->put('socialuser',$user);
            }
        }
        return false;
    }

    public function clearSessionLogin()
    {
        session()->flush();
    }
}
