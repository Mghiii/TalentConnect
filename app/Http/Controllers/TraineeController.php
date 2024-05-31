<?php

namespace App\Http\Controllers;

use App\Models\Announce;
use App\Models\Offre;
use App\Models\Trainee;
use Illuminate\Http\Request;

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
        return view('dashboards.trainee.progress');
    }
    public function notifications(){
        return view('dashboards.trainee.notifications');
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
}
