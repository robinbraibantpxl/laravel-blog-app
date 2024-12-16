<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(RegisterFormRequest $request)
    {
        if ($request->isMethod('GET')) {
            return view('auth.register');
        }

        $credentials = $request->validated();

        User::create($credentials);

        return redirect()->route('login')->with('success', 'Registratie voltooid! Je kan nu inloggen');
    }

    public function login(Request $request)
    {
        if ($request->isMethod('GET')) {
            return view('auth.login');
        }

        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $loggedIn = Auth::attempt($credentials);

        if ($loggedIn) {
            return redirect()->route('home')->with('success', 'U bent succesvol ingelogd');
        }

        return redirect()->route('login')->withErrors('De opgegeven login gegevens zijn niet correct');

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home')->with('success', 'U bent succesvol uitgelogd');
    }
}
