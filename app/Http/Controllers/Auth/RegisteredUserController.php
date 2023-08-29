<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    //
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],

            // al usar password_confirmed laravel puede utilizar el campo password_confirmation para validar que coincida con el campo password (que debe existir)
            'password' => ['required', 'string', 'min:8', 'confirmed', Rules\Password::defaults()],
        ]);


        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
        ]);

        // login
        // Auth::login($user);

        // redirect
        return redirect()->route('home');


        // no auto login 

        return $request;
    }
}
