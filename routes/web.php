<?php
use App\Http\Controllers\EnergyController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\ForgetPasswordController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SectorController;
use  App\Http\Controllers\JobController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\CardsController;
use App\Http\Controllers\DisclaimerController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\JobApplicationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// registration
Route::view('/', 'auth.Registration');
Route::Post('store', [StoreController::class, 'store']);

// login
Route::view('/login', 'auth.Login');
Route::Post('authenticate', [LoginController::class, 'authenticate']);
Route::get('logout', [LoginController::class, 'logout']);

// dashboard
Route::view('/home', 'auth.Home')->middleware('auth')->name('home');

//  forget password form
Route::get('forgetpassword', [ForgetPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forgetpassword', [ForgetPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgetPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgetPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

//  customer(user)
Route::get('users', [UserController::class, 'index'])->name('users.index');
Route::get('users/create', [UserController::class, 'create'])->name('users.create');
Route::post('users', [UserController::class, 'store'])->name('users.store');
Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

// sector
Route::get('/sector', [SectorController::class, 'index'])->name('sector.index');
Route::get('/sector/create', [SectorController::class, 'create'])->name('sector.create');
Route::post('/sector', [SectorController::class, 'store'])->name('sector.store');
Route::get('/sector/{sector}', [SectorController::class, 'show'])->name('sector.show');
Route::get('/sector/{sector}/edit', [SectorController::class, 'edit'])->name('sector.edit');
Route::put('/sector/{sector}', [SectorController::class, 'update'])->name('sector.update');
Route::delete('/sector/{sector}', [SectorController::class, 'destroy'])->name('sector.destroy');

// job

Route::get('/job', [JobController::class, 'index'])->name('job.index');
Route::get('/job/create', [JobController::class, 'create'])->name('job.create');
Route::post('/job', [JobController::class, 'store'])->name('job.store');
Route::get('/job/{job}', [JobController::class, 'show'])->name('job.show');
Route::get('/job/{job}/edit', [JobController::class, 'edit'])->name('job.edit');
Route::put('/job/{job}', [JobController::class, 'update'])->name('job.update');
Route::delete('/job/{job}', [JobController::class, 'destroy'])->name('job.destroy');

// energy

Route::get('/energy', [EnergyController::class, 'index'])->name('energy.index');
Route::get('/energy/create', [EnergyController::class, 'create'])->name('energy.create');
Route::post('/energy', [EnergyController::class, 'store'])->name('energy.store');
Route::get('/energy/{energy}', [EnergyController::class, 'show'])->name('energy.show');
Route::get('/energy/{energy}/edit', [EnergyController::class, 'edit'])->name('energy.edit');
Route::put('/energy/{energy}', [EnergyController::class, 'update'])->name('energy.update');
Route::delete('/energy/{energy}', [EnergyController::class, 'destroy'])->name('energy.destroy');

// training

 // card
 Route::view('/card', 'Career.card.create')->name('card.view');
 Route::post('/card', [CardsController::class, 'store'])->name('card.store');

 //  education
 Route::view('/education', 'career.education.create')->name('education.view');
 Route::post('education', [EducationController::class, 'store'])->name('education.store');
Route::get('/training', [TrainingController::class, 'index'])->name('training.index');
Route::get('/training/create', [TrainingController::class, 'create'])->name('training.create');
Route::post('/training', [TrainingController::class, 'store'])->name('training.store');
Route::get('/training/{training}', [TrainingController::class, 'show'])->name('training.show');
Route::get('/training/{training}/edit', [TrainingController::class, 'edit'])->name('training.edit');
Route::put('/training/{training}', [TrainingController::class, 'update'])->name('training.update');
Route::delete('/training/{training}', [TrainingController::class, 'destroy'])->name('training.destroy');

// career home page
Route::view('/career_home', 'Career.home');


//   instruction
Route::view('/instruction', 'Career.instruction');

//  job-application

Route::view('/job_application', 'career.job_application.create');
Route::post('job_application', [JobApplicationController::class, 'store'])->name('job_application.store');

// card
Route::view('/card', 'Career.card.create')->name('card');
Route::post('/card', [CardsController::class, 'store'])->name('card.store');

//  education

Route::view('/education', 'career.education.create')->name('education');
Route::post('education', [EducationController::class, 'store'])->name('education.store');

//  achievement

Route::view('/achievement', 'career.achievement.create')->name('achievement');
Route::post('achievement', [AchievementController::class, 'store'])->name('achievement.store');

//  disclaimer

Route::view('/disclaimer', 'career.disclaimer.create');
Route::post('disclaimer', [DisclaimerController::class, 'store'])->name('disclaimer.store');

// employment

Route::view('/employment', 'career.employment.create')->name('employment');
Route::post('employment', [EmploymentController::class, 'store'])->name('employment.store');

//  demo
Route::view('/demo', 'demo');
Route::post('demo', [DisclaimerController::class, 'store'])->name('disclaimer.store');