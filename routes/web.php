<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnnonceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterCompanyController;
use App\Http\Controllers\RegisterTraineeController;
use App\Http\Controllers\TraineeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HelpRequestController;
use App\Http\Controllers\InternshipController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OffreController;
use App\Models\Company;

Route::get('/page-not-found', function () {
    return view('errors.404');
})->name('page-not-found');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// Guest Routes
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

// Company Routes
Route::middleware(['auth', 'role:company'])->group(function () {
    Route::get('/company/dashboard', [CompanyController::class, 'dashboard'])->name('company.dashboard');
    Route::get('/company/dashboard/intern-applicants', [CompanyController::class, 'internApp'])->name('company.dashboard.internApp');
    Route::put('/company/dashboard/intern-applicants/rejected/{offre}' , [OffreController::class , 'rejected'])->name('company.dashboard.internApp.rejected');
    Route::get('/company/dashboard/former-interns', [CompanyController::class, 'internFormer'])->name('company.dashboard.internFormer');
    Route::get('/company/dashboard/current-interns', [CompanyController::class, 'currentInterns'])->name('company.dashboard.currentInterns');
    Route::get('/company/dashboard/new-announcement', [CompanyController::class, 'internships'])->name('company.dashboard.internships');
    Route::get('/company/dashboard/inteenship/create/{offre}', [InternshipController::class, 'create'])->name('company.dashboard.internships.create');
    Route::post('/company/dashboard/inteenship/store/{offre}', [InternshipController::class, 'store'])->name('company.dashboard.internships.create.store');
    Route::get('/company/dashboard/former-interns/edit/{internship}' , [InternshipController::class, 'edit'])->name('company.dashboard.internships.edit');
    Route::put('/company/dashboard/former-interns/update/{internship}' , [InternshipController::class, 'update'])->name('company.dashboard.internships.update');


    Route::post('/company/dashboard/announce/store', [AnnonceController::class, 'store'])->name('company.dashboard.internships.store');
    Route::delete('/company/dashboard/announce/delete/{announce}', [AnnonceController::class, 'destroy'])->name('company.announce.delete');
    Route::get('announces/{announce}', [AnnonceController::class, 'show'])->name('announces.show');
    Route::get('announces/{announce}/edit', [AnnonceController::class, 'edit'])->name('announces.edit');
    Route::put('/announces/{announce}', [App\Http\Controllers\annonceController::class, 'update'])->name('announces.update');


    Route::get('/company/profile/edit/{id}', [CompanyController::class, 'editProfile'])->name('company.editProfile');
    Route::put('/company/profile/update/{id}', [CompanyController::class, 'updateProfile'])->name('company.updateProfile');
    Route::put('/company/profile/image/update/{company}' , [CompanyController::class , 'updateImage'])->name('company.updateImage');
    Route::put('/company/update-password/{company}', [CompanyController::class, 'updatePassword'])->name('company.updatePassword');
    Route::delete('/company/profile/destroy/{company}', [CompanyController::class , 'destroyProfile'])->name('company.profile.destroy');
    Route::get('/company/dashboard/profile', [CompanyController::class, 'profile'])->name('company.dashboard.profile');
    Route::get('/company/dashboard/help-centre', [CompanyController::class, 'help'])->name('company.dashboard.help');
    Route::get('/company/dashboard/notifications', [CompanyController::class, 'notifications'])->name('company.dashboard.notifications');
});

// Trainee Routes
Route::middleware(['auth', 'role:trainee'])->group(function () {
    Route::get('/trainee/dashboard', [TraineeController::class, 'dashboard'])->name('trainee.dashboard');
    Route::get('/trainee/dashboard/offre/{announce}', [OffreController::class, 'create'])->name('trainee.dashboard.offre');
    Route::post('/trainee/dashboard/offre', [OffreController::class, 'store'])->name('trainee.dashboard.offre.create');
    Route::get('/trainee/internships/search', [TraineeController::class, 'search'])->name('trainee.search');
    Route::get('/trainee/internships/progress', [TraineeController::class, 'progress'])->name('trainee.progress');
    Route::get('/trainee/notifications', [TraineeController::class, 'notifications'])->name('trainee.notifications');
    Route::get('/trainee/help-centre', [TraineeController::class, 'help'])->name('trainee.help');
    Route::get('/trainee/profile', [TraineeController::class, 'profile'])->name('trainee.profile');
    Route::put('/trainee/profile/imageupdate/{trainee}' , [TraineeController::class , 'updateImage'])->name('trainee.profile.image.update');
    Route::put('/trainee/profile/update/password/{trainee}' , [TraineeController::class , 'updatePassword'])->name('trainee.profile.update.password');
    Route::get('/trainee/announcement/details', [TraineeController::class, 'details'])->name('trainee.details');

    Route::get('/trainee/profile/edit/{id}', [TraineeController::class, 'editProfile'])->name('trainee.editProfile');
    Route::put('profile/update/{trainee}', [TraineeController::class, 'updateProfile'])->name('trainee.updateProfile');
    Route::delete('/trainee/profile/destroy/{trainee}' , [TraineeController::class , 'destroyProfile'])->name('trainee.profile.destroy');

});

Route::middleware(['auth', 'role:admin'])->group(function () {
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');}
);