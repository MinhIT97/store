<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\SocialAccountService;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    public function redirectToProvider($social)
    {
        return Socialite::driver($social)->redirect();
    }

    public function callback($social)
    {

        $user = SocialAccountService::createOrGetUser(Socialite::driver($social)->user(), $social);

        Auth::login($user);
        return redirect()->route('index');
    }
    public function callbacks()
    {

        $client = new \Google_Client(['client_id' =>'66400103763-sk973p586okg61u99bljlagssft2m5rn.apps.googleusercontent.com']);
        $credential = \request('credential');
        $ref = \request('ref', url('/'));
        if (!$credential) {
            return redirect('/');
        }
        $payload = $client->verifyIdToken($credential);
        dd($payload);
dd(request()->all());
        // $user = SocialAccountService::createOrGetUser(Socialite::driver($social)->user(), $social);

        // Auth::login($user);
        // return redirect()->route('index');
    }
}
