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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Internship $internship)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Internship $internship)
    {
        //
    }
}
