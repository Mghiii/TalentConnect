<?php

namespace App\Http\Controllers;

use App\Models\Trainee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class registerTraineeController extends Controller
{
    public function create(){
        return view('auth.registerTrainee');
    }
    
    public function store(Request $request){
        $username = $request->username;
        $email = $request->email;
        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $password = Hash::make($request->password); 
        $address = $request->address;
        $phone_number = $request->phone_number;
        $domain = $request->domain;
    
        //validation 
    
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:trainees,email',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'password' => 'required|string|min:8|regex:/^(?=.*[A-Z])(?=.*[0-9]).+$/',
            'confirm_password' => 'required|same:password',
            'address' => 'required|string|max:255',
            'phone_number' => 'required|unique:trainees,phone_number|digits:10',
            'terms_and_conditions' => 'required|accepted',
            'domain' => [
                'required',
                'string',
                'max:255',
                function ($attribute, $value, $fail) {
                    if ($value === 'default') {
                        $fail('The ' . $attribute . ' field is required.');
                    }
                },
            ],
        ], [
            'password.regex' => 'The password must contain at least one uppercase letter and one number.',
            'phone_number.digits' => 'The phone number must be 10 digits.',
            'terms_and_conditions.required' => 'You must accept the Terms & Conditions.',
            'terms_and_conditions.accepted' => 'You must accept the Terms & Conditions.',
        ]);
        
        //insertion
        $trainee = Trainee::create([
            'username' => $username,
            'email' => $email,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'password' => $password,
            'address' => $address,
            'phone_number' => $phone_number,
            'domain' => $domain,
        ]);
    
        $user = User::create([
            'name' => $first_name . ' ' . $last_name,
            'email' => $email,
            'role' => 'trainee', 
            'password' => $password,
            'userable_id' => $trainee->id,
            'userable_type' => 'App\Models\Trainee',
        ]);
    
        //redirection
        return redirect()->route('login');
    }    
}
