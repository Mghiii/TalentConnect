<?php

namespace App\Http\Controllers;

use App\Models\Announce;
use App\Models\Company;
use App\Models\Offre;
use App\Models\Trainee;
use App\Models\User;
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

    public function destroyCompany(Company $company) {
        $company->delete();
        User::where('email', $company->email)->delete();

        return redirect()->route('admin.companies');
    }


    public function showCompanyAnnouncements($id) {
        $company = Company::findOrFail($id);
        $announces = $company->announces;

        return view('dashboards.admin.companiesAnnouncements', compact('company', 'announces'));
    }

    public function destroyTrainee(Trainee $trainee)
    {
        $trainee->delete();
        User::where('email', $trainee->email)->delete();

        return redirect()->route('admin.trainees');
    }


    public function showTraineeOffers($id)
    {
        $trainee = Trainee::with('offres.announce.company')->findOrFail($id);
        return view('dashboards.admin.traineesOffers', compact('trainee'));
    }

    public function destroyAnnounce(Announce $announce)
    {
        $companyId = $announce->company_id;
        $announce->delete();
        return redirect()->route('admin.companies.announcements' , ['id' => $companyId]);
    }
    public function destroyOffre(Offre $offre)
    {
        $traineeId = $offre->trainee_id;
        $offre->delete();
        return redirect()->route('trainees.offers' , ['id' => $traineeId]);
    }
}
