<?php

namespace App\Http\Controllers;

use App\Models\Announce;
use App\Models\Company;
use Illuminate\Http\Request;

class annonceController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'skills' => 'required',
            'benefits' => 'required',
            'contact' => 'required',
            'company_id' => 'required '
        ]);

        Announce::create($request->all());
        return to_route('company.dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $company = Company::where('email', auth()->user()->email)->first();
        $announce = Announce::findOrFail($id);
        return view('dashboards.company.showAnnounce', compact('company','announce'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $company = Company::where('email', auth()->user()->email)->first();
        $announce = Announce::findOrFail($id);
        return view('dashboards.company.editAnnounce', compact('company','announce'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Announce $announce)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'skills' => 'required',
            'benefits' => 'required',
            'contact' => 'required',
        ]);

        $announce->update($request->all());

        return redirect()->route('company.dashboard');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Announce $announce)
    {
        $announce->delete();
        return redirect()->route('company.dashboard');
    }

}
