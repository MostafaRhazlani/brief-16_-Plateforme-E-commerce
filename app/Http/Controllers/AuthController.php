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
            'password' => Hash::make($validated['password'])
        ]);

        return redirect()->route('login');
    }
}
