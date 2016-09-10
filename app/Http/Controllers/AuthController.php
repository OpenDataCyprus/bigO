<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('github')->user();
//        dd($user);
        $auth_user = User::firstOrCreate(['email'=>$user->email,'name'=>$user->nickname]);

        if ($auth_user->exists){
            auth()->login($auth_user);
        }
        return redirect('/home');
     }

}
