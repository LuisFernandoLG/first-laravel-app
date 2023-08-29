<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    //
    public function store(Request $request)
    {

        $remember = $request->boolean('remember');
        $credentials = $request->validate([
            'email' => ['required', 'email', 'string'],
            'password' => ['required']
        ]);

        $success = Auth::attempt($credentials, $remember);

        if ($success) {
            $request->session()->regenerate();
            return redirect()->intended()->with('status', __('auth.welcome'));
        } else {
            return back()->withErrors([
                'email' => __('auth.failed')
            ]);
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken(); // csrf
        return to_route('home')->with('status', __('auth.logout'));
    }
}
