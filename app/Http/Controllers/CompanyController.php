<?php

namespace App\Http\Controllers;
use App\Http\Middleware\connectMiddleware;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
//--------------------------------------------------------
    public function dashboard(){
        return view('dashboards.company.dashboard');
    }
//--------------------------------------------------------
    public function currentInterns(){
        return view('dashboards.company.currentInterns');
    }
//--------------------------------------------------------
    public function help(){
        return view('dashboards.company.help');
    }
//--------------------------------------------------------
    public function internApp(){
        return view('dashboards.company.internApp');
    }
//--------------------------------------------------------
    public function internFormer(){
        return view('dashboards.company.internFormer');
    }
//--------------------------------------------------------
    public function internships(){
        return view('dashboards.company.internships');
    }
//--------------------------------------------------------
    public function notifications(){
        return view('dashboards.company.notifications');
    }
//--------------------------------------------------------
    public function profile(){
        return view('dashboards.company.profile');
    }
//--------------------------------------------------------
}
