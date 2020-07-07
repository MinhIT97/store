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
}
