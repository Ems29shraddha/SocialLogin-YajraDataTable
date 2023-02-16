<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialAuthController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    

    public function handleGoogleCallback()
    {
        try{
            $user= Socialite::driver('google')->user();
        }catch(\Exception $e)
        {
            return redirect ('/login');
        }

        dd($user);

        $exsitinguser =User::where('google_id',$user->id)->first();

        if($exsitinguser){
            Auth::login($exsitinguser, true);
        }
        else{
            $newuser=User::create([
                'name'=> $user->name,
                'email'=>$user->email,
                'google_id'=>$user->id,
            ]);
            Auth::login($newuser, true);
        }

        return redirect()->to('/dashboard');
    }


}
