<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Trainee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();

            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($user->role === 'company') {
                $company = Company::where('email', $user->email)->first();
                return redirect()->route('company.dashboard', $company->id);
            } elseif ($user->role === 'trainee') {
                $trainee = Trainee::where('email', $user->email)->first();
                return redirect()->route('trainee.dashboard', $trainee->id);
            }
        }

        return redirect()->route('login.show')->withErrors([
            'email' => 'Email or password is incorrect',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.show');
    }
}
