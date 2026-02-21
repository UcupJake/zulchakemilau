<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Check if it's the admin
        if ($credentials['email'] === 'admin@zulchakemilau.com' && $credentials['password'] === 'zulchakemilau') {
            // Redirect to admin dashboard
            return redirect()->route('admin.dashboard');
        }

        // Otherwise, try normal user login
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard'); // user dashboard
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
    
    public function showLoginForm()
    {
        return view('auth.login');
    }
    
}
