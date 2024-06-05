<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Trainee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function show(){
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $user = User::where('email', $email)->first();
        $company = Company::where('email', $email)->first();
        $trainee = Trainee::where('email', $email)->first();

        $credentials = ['email' => $email , 'password' => $password];

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            if($user && $user->role === 'admin'){
                return "admin";
            } elseif($company && $user->role === 'company'){
                return redirect()->route('company.dashboard' ,$company->id );
            } elseif($trainee && $user->role === 'trainee'){
                return redirect()->route('trainee.dashboard', $trainee->id);
            } else {
                redirect()->route('login.show');
            }
        } else {
            return redirect()->route('login.show')->withErrors([
                'email' => 'Email or password is incorrect'
            ]);
        }
    }
    public function logout()  {
        session()->flush();
        Auth::logout();
        return redirect()->route('login.show');
    }
}
