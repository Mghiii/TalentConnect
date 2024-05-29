<?php

namespace App\Http\Controllers;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class registerCompanyController extends Controller
{
    public function create(){
        return view('auth.registerCompany');
    }

    public function store(Request $request){
        $company_name = $request->company_name;
        $contact_name = $request->contact_name;
        $email = $request->email;
        $password = Hash::make($request->password); 
        $phone_number = $request->phone_number;
        $username = $request->username;
        $address = $request->address;
        $domain = $request->domain;
    
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:companies,email',
            'company_name' => 'required|string|max:255',
            'contact_name' => 'required|string|max:255',
            'password' => 'required|string|min:8|regex:/^(?=.*[A-Z])(?=.*[0-9]).+$/',
            'confirm_password' => 'required|same:password',
            'address' => 'required|string|max:255',
            'phone_number' => 'required|unique:companies,phone_number|digits:10',
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
        ]);
    
        $company = Company::create([
            'company_name' => $company_name,
            'contact_name' => $contact_name,
            'email' => $email,
            'password' => $password, 
            'phone_number' => $phone_number,
            'username' => $username,
            'address' => $address,
            'domain' => $domain,
        ]);
    
        $user = User::create([
            'name' => $company_name,
            'email' => $email,
            'password' => $password,
            'role' => 'company',
            'userable_id' => $company->id,
            'userable_type' => 'App\Models\Company',
        ]);
    
        return redirect()->route('login');
    }
    
}

