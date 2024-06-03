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
        $trainee = Trainee::where('email', auth()->user()->email)->first();
        $announces = Announce::all();

        return view('dashboards.trainee.dashboard' , compact('trainee','announces'));
    }
    public function search(){
        $trainee = Trainee::where('email', auth()->user()->email)->first();
        return view('dashboards.trainee.search' , compact('trainee'));
    }
    public function progress(){
        $trainee = Trainee::where('email', auth()->user()->email)->first();
        if ($trainee) {
            $internships = Internship::where('trainee_id', $trainee->id)->get();
        } else {
            $internships = collect();
        }
        return view('dashboards.trainee.progress' , compact( 'trainee','internships'));
    }
    public function notifications(){
        $trainee = Trainee::where('email', auth()->user()->email)->first();

    if ($trainee) {
        $offres = Offre::where('trainee_id', $trainee->id)->get();
        return view('dashboards.trainee.notifications', compact('trainee', 'offres'));
    } else {
        return view('dashboards.trainee.notifications', ['offres' => collect()]);
    };
    }
    public function help(){
        $trainee = Trainee::where('email', auth()->user()->email)->first();
        return view('dashboards.trainee.help' , compact('trainee'));
    }
    public function profile(){
        $trainee = Trainee::where('email', auth()->user()->email)->first();
        return view('dashboards.trainee.profile' , compact('trainee'));
    }
    public function details(){
        $trainee = Trainee::where('email', auth()->user()->email)->first();
        return view('dashboards.trainee.details' , compact('trainee'));
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
    // Validate input
    $validatedData = $request->validate([
        'current_password' => 'required|string',
        'password' => 'required|string|min:8|regex:/^(?=.*[A-Z])(?=.*[0-9]).+$/',
        'confirm_password' => 'required|same:password',
    ]);

    if (!Hash::check($request->current_password, $trainee->password)) {
        return redirect()->route('trainee.dashboard');
    }

    $user = User::where('email', $trainee->email)->first();

    if (!$user) {
        return redirect()->route('trainee.dashboard');
    }

    $hashedPassword = Hash::make($validatedData['password']);
    $trainee->password = $hashedPassword;
    $user->password = $hashedPassword;

    $trainee->save();
    $user->save();

    return redirect()->route('trainee.profile');
}

}
