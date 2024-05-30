<?php

namespace App\Http\Controllers;
use App\Http\Middleware\connectMiddleware;
use App\Models\Announce;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CompanyController extends Controller
{
//--------------------------------------------------------
    public function dashboard(){
        $announces = Announce::all();
        return view('dashboards.company.dashboard' , compact('announces'));
    }
//--------------------------------------------------------
    public function currentInterns(){
        return view('dashboards.company.currentInterns');
    }
//--------------------------------------------------------
    public function help(){
        return view('dashboards.company.help');
    }
//--------------------------------------------------------
    public function internApp(){
        return view('dashboards.company.internApp');
    }
//--------------------------------------------------------
    public function internFormer(){
        return view('dashboards.company.internFormer');
    }
//--------------------------------------------------------
    public function internships(){
        return view('dashboards.company.internships');
    }
//--------------------------------------------------------
    public function notifications(){
        return view('dashboards.company.notifications');
    }
//--------------------------------------------------------
    public function profile(){
        $companies = Company::all();
        return view('dashboards.company.profile' , compact('companies'));
        }

    public function editProfile($id){
        $companies = Company::findOrFail($id);
        return view('dashboards.company.editProfile', compact('companies'));
        }

    public function updateProfile(Request $request, $id)
        {
            $request->validate([
                'company_name' => 'required|string|max:255',
                'contact_name' => 'required|string|max:255',
                'domain' => 'required|string|max:255',
                'phone_number' => 'required|string|max:20',
                'email' => 'required|email|max:255',
                'address' => 'required|string|max:255',

            ]);

            $company = Company::findOrFail($id);
            $company->company_name = $request->input('company_name');
            $company->contact_name = $request->input('contact_name');
            $company->domain = $request->input('domain');
            $company->phone_number = $request->input('phone_number');
            $company->email = $request->input('email');
            $company->address = $request->input('address');
            $company->save();

            return redirect()->route('company.dashboard.profile')->with('success', 'Profile updated successfully.');
        }

    public function updatePassword(Request $request, $id)
        {
            // Validate input
            $request->validate([
                'current_password' => 'required|string|min:8',
                'new_password' => 'required|string|min:8|confirmed',
            ]);

            // Retrieve the company
            $company = Company::findOrFail($id);

            // Check if the current authenticated user's password matches the current password input
            if (!Hash::check($request->current_password, $company->password)) {
                return redirect()->back()->withErrors(['current_password' => 'Current password does not match']);
            }

            // Update the company's password
            $company->password = Hash::make($request->new_password);
            $company->save();

            return redirect()->route('company.dashboard.profile')->with('success', 'Password updated successfully');
        }

//--------------------------------------------------------
}
  