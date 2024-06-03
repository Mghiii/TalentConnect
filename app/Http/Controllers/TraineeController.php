<?php

namespace App\Http\Controllers;

use App\Models\Announce;
use App\Models\Internship;
use App\Models\Offre;
use App\Models\Trainee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TraineeController extends Controller
{
    public function dashboard(){
        $announces = Announce::all();

        return view('dashboards.trainee.dashboard' , compact('announces'));
    }
    public function search(){
        return view('dashboards.trainee.search');
    }
    public function progress(){
        $trainee = Trainee::where('email', auth()->user()->email)->first();
        if ($trainee) {
            $internships = Internship::where('trainee_id', $trainee->id)->get();
        } else {
            $internships = collect();
        }
        return view('dashboards.trainee.progress' , compact('internships'));
    }
    public function notifications(){
        $trainee = Trainee::where('email', auth()->user()->email)->first();

    if ($trainee) {
        $offres = Offre::where('trainee_id', $trainee->id)->get();
        return view('dashboards.trainee.notifications', compact('offres'));
    } else {
        return view('dashboards.trainee.notifications', ['offres' => collect()]);
    };
    }
    public function help(){
        return view('dashboards.trainee.help');
    }
    public function profile(){
        $trainees = Trainee::all();
        return view('dashboards.trainee.profile' , compact('trainees'));
    }
    public function details(){
        return view('dashboards.trainee.details');
    }

    public function destroyProfile(Trainee $trainee){
        if (Auth::check()) {
            $trainee->delete();
            User::where('email', $trainee->email)->delete();
            Offre::where('trainee_id', $trainee->id)->delete();
            Internship::where('trainee_id', $trainee->id)->delete();
            Auth::logout();
        }

        return redirect()->route('login.show');
    }
    public function updateImage(Request $request , Trainee $trainee){
        $formField = $request->validate([
            'trainee_image' => 'image|mimes:png,jpg,jpeg|max:100000',
        ]);

        if($request->hasFile('trainee_image')){
         $formField['trainee_image'] = $request->file('trainee_image')->store('profile','public');
        }

        $trainee->fill($formField)->save();

        return redirect()->route('trainee.profile');
    }
    public function updatePassword(Request $request, Trainee $trainee)
        {
            $validatedData = $request->validate([
                'current_password' => 'required|string',
                'password' => 'required|string|min:8|regex:/^(?=.*[A-Z])(?=.*[0-9]).+$/',
                'confirm_password' => 'required|same:password',
            ]);

            if (Hash::check($request->current_password, $trainee->password)) {
                $trainee->password = Hash::make($validatedData['password']);
                $trainee->save();
                return redirect()->route('trainee.profile');
            } else {
                return redirect()->route('trainee.dashboard');
            }}
}
