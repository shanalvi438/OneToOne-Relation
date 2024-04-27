<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // Show admin login form
    public function showLoginForm()
    {
        return view('admin.login');
    }

    // Admin login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            // return view('admin.dashboard');
            return view('admin.settings');
        }

        return redirect()->back()->withErrors(['email' => 'Invalid credentials.']);
    }

    // Show admin account settings form
    public function showSettingsForm()
    {
        return view('admin.settings');
    }

    // Update admin account settings
    public function updateSettings(Request $request)
    {
        // Logic for updating account settings goes here

        return redirect()->back()->with('success', 'Settings updated successfully.');
    }
}
