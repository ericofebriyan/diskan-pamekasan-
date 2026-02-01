<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class SocialController extends Controller
{
    public function redirectToGoogle()
    {
        $driver = Socialite::driver('google');
        
        // Bypass SSL for local development (cURL error 60)
        if (config('app.env') === 'local') {
            $driver->setHttpClient(new \GuzzleHttp\Client(['verify' => false]));
        }

        return $driver->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $driver = Socialite::driver('google');
            
            // Bypass SSL for local development (cURL error 60)
            if (config('app.env') === 'local') {
                $driver->setHttpClient(new \GuzzleHttp\Client(['verify' => false]));
            }

            $socialUser = $driver->user();

            $user = User::where('social_id', $socialUser->id)
                ->where('social_type', 'google')
                ->first();

            if (!$user) {
                // Check if email already exists
                $user = User::where('email', $socialUser->email)->first();

                if ($user) {
                    // Link to existing account and mark as verified
                    $user->update([
                        'social_id' => $socialUser->id,
                        'social_type' => 'google',
                        'social_token' => $socialUser->token,
                    ]);
                    
                    if (!$user->hasVerifiedEmail()) {
                        $user->markEmailAsVerified();
                    }
                } else {
                    // Create new user
                    $user = User::create([
                        'name' => $socialUser->name,
                        'email' => $socialUser->email,
                        'social_id' => $socialUser->id,
                        'social_type' => 'google',
                        'social_token' => $socialUser->token,
                        'usertype' => 'user', // Default user type
                        'email_verified_at' => now(), // Social account is considered verified
                        'password' => null,
                    ]);
                }
            } else {
                // Update token even if already linked
                $user->update([
                    'social_token' => $socialUser->token,
                ]);
                
                if (!$user->hasVerifiedEmail()) {
                    $user->markEmailAsVerified();
                }
            }

            Auth::login($user);

            return redirect()->intended('/dashboard');
        } catch (\Exception $e) {
            return redirect()->route('login')->with('error', 'Authentication failed: ' . $e->getMessage());
        }
    }
}
