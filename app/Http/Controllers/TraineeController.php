<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TraineeController extends Controller
{
    public function dashboard(){
        return view('dashboards.trainee.dashboard');
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
        return view('dashboards.trainee.profile');
    }
    public function details(){
        return view('dashboards.trainee.details');
    }
}
