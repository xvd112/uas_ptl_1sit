<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    // Menampilkan Form Register
    public function showRegister()
    {
        return view('auth.register', [
            'title' => 'Register | RS Kasih Ibu'
        ]);
    }

    // Register User
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        // session()->flash('success_auth', 'Registration successfull! Pleas login');

        return redirect('/login')->with('success_auth', 'Registration successfull! Please login');
    }

    // Menampilkan Form Login
    public function showLogin()
    {
        return view('auth.login', [
            'title' => 'Login | RS Kasih Ibu'
        ]);
    }

    // Proses Login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->with('error_auth', 'Login failed!')->withInput();
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if (Str::contains($request->url, 'dashboard')) {
            return redirect('/login')->with('success_auth', 'Logout successfull!');
        } else {
            return redirect('/');
        }
    }
}
