<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Trainee;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view("dashboards.admin.dashboard");
    }
    public function indexTrainees() {
        $trainees = Trainee::all();
        return view('dashboards.admin.trainees', compact('trainees'));
    }

    public function indexCompanies() {
        $companies = Company::all();
        return view('dashboards.admin.companies', compact('companies'));
    }
       
    public function destroyCompany($id) {
        $company = Company::findOrFail($id);
        $company->delete();

        return redirect()->route('dashboards.admin.companies')->with('success', 'Company deleted successfully.');
    }

    
    public function showCompanyAnnouncements($id) {
        $company = Company::findOrFail($id);
        $announces = $company->announces;

        return view('dashboards.admin.companiesAnnouncements', compact('company', 'announces'));
    }
        
    public function destroyTrainee($id)
    {
        $trainee = Trainee::findOrFail($id);
        $trainee->delete();

        return redirect()->route('dashboards.admin.trainees')->with('success', 'Trainee deleted successfully.');
    }

    
    public function showTraineeOffers($id)
    {
        $trainee = Trainee::with('offres.announce.company')->findOrFail($id);
        return view('dashboards.admin.traineesOffers', compact('trainee'));
    }
}
