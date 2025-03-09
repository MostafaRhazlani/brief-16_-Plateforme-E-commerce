<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request) {
        $validated = $request->validate([
            'username' => 'required|min:4|max:30',
            'full_name' => 'required|string|min:4|max:30',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|min:10|max:10',
            'password' => 'required|min:4|max:12',
            'password_confirmation' => 'required|same:password'
        ]);

        User::create([
            'username' => $validated['username'],
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'role' => 'user',
            'password' => Hash::make($validated['password'])
        ]);

        return redirect()->route('login.form');
    }

    public function login(Request $request) {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4|max:12',
        ]);

        $user = User::where('email', $validated['email'])->first();

        if($user && Hash::check($validated['password'], $user->password)) {
            session(['user' => $user]);
            if($user['role'] === 'user') {
                return redirect()->route('home');
            }
        } else {
            return redirect()->route('login.form');
        }
    }

}
