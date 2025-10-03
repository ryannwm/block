<?php

namespace App\Http\Controllers;

use App\Contracts\AuthServiceInterface;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    protected $auth;

    public function __construct(AuthServiceInterface $authService){
        $this->auth = $authService;
    }

    public function showLogin(){
        return view('auth.login');
    }

    public function showRegister(){
        return view('auth.register');
    }

    public function login(Request $request){
        $data = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        $remember = $request->boolean('remember');

        if($this->auth->attemptLogin($data['email'], $data['password'], $remember)){
            return redirect()->intended(route('dashboard'));
        }

        return back()->withErrors(['email'=>'Invalid credentials'])->withInput();
    }

    public function logout(Request $request){
        $this->auth->logout();
        return redirect('login');
    }
}
