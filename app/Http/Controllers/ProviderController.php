<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class ProviderController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
    public function callback($provider)
    {
        try {
            $socialUser = Socialite::driver($provider)->user();
            // if (User::where('email', $socialUser->getEmail())->exists()) {
            //     return redirect('/')->withErrors(['email' => 'this email uses diffrent method to login']);
            // }

            $user = User::where([
                'provider' => $provider,
                'provider_id' => $socialUser->id
            ])->first();
            if (!$user) {
                $user = User::create([
                    'name' => $socialUser->getName(),
                    'email' => $socialUser->getEmail(),
                    'provider' => $provider,
                    'provider_id' => $socialUser->getId(),
                    'provider_token' => $socialUser->token,
                    'avatar' => $socialUser->getAvatar(),
                    'email_verified_at' => now(),
                ]);
            }
            Auth::login($user);
            return redirect('/beranda');
        } catch (\Exception $e) {
            return $e;
        }
        // dd($user);
    }
}
