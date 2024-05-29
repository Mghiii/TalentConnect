<?php

use App\Http\Controllers\annonceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterCompanyController;
use App\Http\Controllers\RegisterTraineeController;
use App\Http\Controllers\TraineeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\LoginController;

Route::get('/page-not-found', function () {
    return view('errors.404');
})->name('page-not-found');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

//------------------------

Route::middleware(['guest'])->group(function () {
    Route::get('/', function () {
        return view('landingPage');
    });
    Route::get('/get-started', function () {
        return view('auth.getStarted');
    });
    Route::get('/register-trainee/create', [RegisterTraineeController::class, 'create'])->name('register.trainee.create');
    Route::post('/register-trainee/store', [RegisterTraineeController::class, 'store'])->name('register.trainee.store');
    Route::get('/register-company/create', [RegisterCompanyController::class, 'create'])->name('register.company.create');
    Route::post('/register-company/store', [RegisterCompanyController::class, 'store'])->name('register.company.store');
    Route::get('/login', [LoginController::class, 'show'])->name('login.show');
    Route::post('/login', [LoginController::class, 'login'])->name('login');
});

//------------------------

Route::middleware(['auth','role:company'])->group(function () {
    Route::get('/company/dashboard', [CompanyController::class, 'dashboard'])->name('company.dashboard');
    Route::get('/company/dashboard/intern-applicants', [CompanyController::class, 'internApp'])->name('company.dashboard.internApp');
    Route::get('/company/dashboard/former-interns', [CompanyController::class, 'internFormer'])->name('company.dashboard.internFormer');
    Route::get('/company/dashboard/current-interns', [CompanyController::class, 'currentInterns'])->name('company.dashboard.currentInterns');
    Route::get('/company/dashboard/new-announcement', [CompanyController::class, 'internships'])->name('company.dashboard.internships');
    Route::post('/company/dashboard/new-announcement' , [annonceController::class , 'store'])->name('company.dashboard.internships.store');
    Route::get('/company/dashboard/profile', [CompanyController::class, 'profile'])->name('company.dashboard.profile');
    Route::get('/company/dashboard/help-centre', [CompanyController::class, 'help'])->name('company.dashboard.help');
    Route::get('/company/dashboard/notifications', [CompanyController::class, 'notifications'])->name('company.dashboard.notifications');
});

Route::middleware(['auth','role:trainee'])->group(function () {
    Route::get('/trainee/dashboard', [TraineeController::class, 'dashboard'])->name('trainee.dashboard');
    Route::get('/trainee/internships/search', [TraineeController::class, 'search'])->name('trainee.search');
    Route::get('/trainee/internships/progress', [TraineeController::class, 'progress'])->name('trainee.progress');
    Route::get('/trainee/notifications', [TraineeController::class, 'notifications'])->name('trainee.notifications');
    Route::get('/trainee/help-centre', [TraineeController::class, 'help'])->name('trainee.help');
    Route::get('/trainee/profile', [TraineeController::class, 'profile'])->name('trainee.profile');
    Route::get('/trainee/announcement/details', [TraineeController::class, 'details'])->name('trainee.details');
});


