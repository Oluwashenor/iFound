<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'matric' => ['required', 'string', 'max:15', 'min:9'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::where('email', $request['email'])->first();
        if ($user != null) {
            toast('E-Mail already exist', 'info');
            return redirect('/register');
        }
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'matric'=> $validatedData['matric'],
            'password' => $validatedData['password'],
        ]);
        toast('Account Created, Please Proceed to Login', 'info');
        return redirect('/login');
    }

    public function  login(Request $request)
    {
        $validatedData = $request->validate([
            'matric' => ['required'],
            'password' => ['required'],
        ]);

        $credentials = $request->only('matric', 'password');
        if (auth()->attempt($credentials)) {
            return redirect('/');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}