<?php
namespace App\Services;

use App\Contracts\AuthServiceInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthService implements AuthServiceInterface{
    public function attemptLogin(string $email, string $password, bool $remember = false): bool{
        
        $user = \App\Models\User::where('userEmail', $email)->first();

        if ($user && Hash::check($password, $user->userPassword)) {
            Auth::login($user, $remember);
            request()->session()->regenerate();
        return true;
    }
        return false;
    }

    public function user(): ? \App\Models\User{
        return Auth::user();
    }

    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
    }

}