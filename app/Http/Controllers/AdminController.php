<?php

namespace App\Http\Controllers;

use App\Models\Announce;
use App\Models\Company;
use App\Models\Internship;
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

    public function showCompanyInternships(Company $company) {
        $internships = $company->internships;
        return view('dashboards.admin.companiesInterships', compact('company', 'internships'));
    }

    public function destroyInternships(Internship $internship)
    {
        $company = $internship->company;
        $internship->delete();
        return redirect()->route('admin.companies.internships' , compact('company'));
    }

    public function editCompany(Company $company){
        return view('dashboards.admin.companiesEdite' , compact('company'));
    }

    public function updateCompany(Request $request ,Company $company){
        $validatedData = $request->validate([
            'company_name' => 'required|string|max:255',
            'contact_name' => 'required|string|max:255',
            'phone_number' => 'required|numeric',
            'username' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'domain' => 'required|string|max:255',
        ]);
        $company->update($validatedData);

        return to_route('admin.companies');
    }

    public function editeAnnounce(Announce $announce){
        return view('dashboards.admin.companiesEditeAnnouncement' , compact('announce'));
    }
    public function updateAnnounce(Request $request, Announce $announce){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'skills' => 'required',
            'benefits' => 'required',
            'contact' => 'required',
        ]);

        $announce->fill($request->all())->save();
        $companyId = $announce->company_id;

        return redirect()->route('admin.companies.announcements', ['company' => $companyId]);
    }

    public function editeInternship(Internship $internship){
        return view('dashboards.admin.companiesEditeInternship' , compact('internship'));
    }
    public function updateInternship(Request $request ,Internship $internship){
        $validation =$request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);
        if ($request->hasFile('certificate')) {
            $validation['certificate'] = $request->file('certificate')->store('certificates', 'public');
        }
        $internship->fill($validation)->save();
        $companyId = $internship->company_id;
        return redirect()->route('admin.companies.internships', ['company' => $companyId]);
    }

    public function editTrainee(Trainee $trainee){
        return view('dashboards.admin.traineeEdite' , compact('trainee'));
    }

    public function updateTrainee(Request $request , Trainee $trainee){
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone_number' => 'required|numeric',
            'domain' => 'required|string|max:255',
        ]);
        $trainee->update($validatedData);

        return to_route('admin.trainees');
    }

    public function editOffre(Offre $offre){
        return view('dashboards.admin.traineesOffreEdite' , compact('offre'));
    }

    public function updateOffre(Request $request , Offre $offre){
        $validatedData = $request->validate([
            'CV' => 'required|mimes:pdf',
            'motivation_lettre' => 'required|mimes:pdf',
        ]);
        $validatedData['CV'] = $request->file('CV')->store('CVs', 'public');
        $validatedData['motivation_lettre'] = $request->file('motivation_lettre')->store('motivation_letters', 'public');
        $offre->update($validatedData);
        $traineeId = $offre->trainee_id;
        return to_route('trainees.offers' ,['id' => $traineeId]);
    }

}
