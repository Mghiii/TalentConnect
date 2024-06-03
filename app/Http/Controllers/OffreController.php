<?php

namespace App\Http\Controllers;

use App\Models\Announce;
use App\Models\Company;
use App\Models\Offre;
use App\Models\Trainee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OffreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request, Announce $announce)
    {
        $trainee = Trainee::where('email', auth()->user()->email)->first();
        $offres = Offre::all();
        return view('dashboards.trainee.announce', compact( 'announce' ,'trainee' , 'offres'));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

$validatedData = $request->validate([
    'CV' => 'required|mimes:pdf',
    'motivation_lettre' => 'required|mimes:pdf',
    'trainee_id' => 'required',
    'announce_id' => 'required',
]);

$validatedData['CV'] = $request->file('CV')->store('CVs', 'public');
$validatedData['motivation_lettre'] = $request->file('motivation_lettre')->store('motivation_letters', 'public');


Offre::create($validatedData);


return redirect()->route('trainee.dashboard');

    }

    /**
     * Display the specified resource.
     */
    public function show(Offre $offre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Offre $offre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Offre $offre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Offre $offre)
    {
        //
    }



    public function rejected(Offre $offre)
    {
        $offre->update(['status' => 'rejected']);

        return redirect()->route('company.dashboard.internApp');
    }

}
