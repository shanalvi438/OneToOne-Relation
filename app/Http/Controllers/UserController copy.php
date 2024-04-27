<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Show login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // User login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/profile');
        }

        return redirect()->back()->withErrors(['email' => 'Invalid credentials.']);
    }

    // Show user profile
    // public function showProfile()
    // {
    //     return view('data.index', ['user' => Auth::user()]);
    // }

    // Show user account settings form
    public function showSettingsForm()
    {
        return view('auth.settings', ['user' => Auth::user()]);
    }

    // Update user account settings
    public function updateSettings(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }
        $user->save();

        return redirect()->route('profile')->with('success', 'Settings updated successfully.');
    }

    // User logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
