<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Internship;
use App\Models\Offre;
use Illuminate\Http\Request;

class InternshipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Offre $offre)
    {
        $companies = Company::all();

        return view('dashboards.company.InternshipCreate' ,compact('companies' , 'offre'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request , Offre $offre)
    {
        $validatedData = $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'offre_id' => 'required',
            'company_id' => 'required',
            'trainee_id' => 'required'
        ]);



        Internship::create($validatedData);
        $offre->update(['status' => 'accepted']);

        return redirect()->route('company.dashboard.internApp');
    }


    /**
     * Display the specified resource.
     */
    public function show(Internship $internship)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Internship $internship)
    {
        $company = Company::where('email', auth()->user()->email)->first();

        return view('dashboards.company.internshipUpdate' , compact('company','internship'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Internship $internship)
    {
        $validation = $request->validate([
            'certificate' => 'required|mimes:pdf',
            'comment' => 'required'
        ]);
        if ($request->hasFile('certificate')) {
            $validation['certificate'] = $request->file('certificate')->store('certificates', 'public');
        }
        $internship->fill($validation)->save();
        $internships = Internship::all();
        return redirect()->route('company.dashboard.internFormer' , compact('internships'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Internship $internship)
    {
        //
    }
}
