<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function registerPost(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|in:Laki-laki,Perempuan',
            'dob' => 'nullable|date',
            'id_number' => 'required|string|max:16|unique:users,id_number',
            'city' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'phone_number' => 'nullable|string|max:20|unique:users,phone_number',
            'password' => 'required|string|min:8',
        ]);

        // Create new user
        User::create([
            'name' => $request->input('name'),
            'gender' => $request->input('gender'),
            'dob' => $request->input('dob'),
            'id_number' => $request->input('id_number'),
            'city' => $request->input('city'),
            'address' => $request->input('address'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
            'password' => Hash::make($request->input('password')),
        ]);

        // Redirect to a dashboard or any other page after successful registration
        return redirect('/homepage')->with('success', 'Registration successful. Please log in.');
    }

    public function loginPost(Request $request)
    {
        // Log all request data for debugging
        \Log::info('Request data:', $request->all());
    
        $credentials = $request->only('email', 'password');
        
        // Debugging: log credentials (remove in production)
        \Log::info('Login attempt:', $credentials);
    
        if (Auth::attempt($credentials)) {
            \Log::info('Login successful for:', $credentials);
            return redirect()->intended('/homepagelogin')->with('success', 'Login successful.');
        }
    
        \Log::info('Login failed for:', $credentials);
        return redirect('/')->with('error', 'Invalid credentials. Please try again.');
    }
}
