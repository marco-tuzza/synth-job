<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/profilo', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::get('/profilo/{id}', [App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');


Route::get('/lavoro', [App\Http\Controllers\JobController::class, 'index'])->name('job');
Route::post('/lavoro/create', [App\Http\Controllers\JobController::class, 'create'])->name('job.create');
Route::get('/lavoro/{id}', [App\Http\Controllers\JobController::class, 'show'])->name('job.show');

Route::get('/register/choice', [App\Http\Controllers\Auth\RegisterController::class, 'choice'])->name('register.choice');
Route::get('/register/company', [App\Http\Controllers\Auth\RegisterController::class, 'company'])->name('register.company');
Route::get('/register/complete', [App\Http\Controllers\Auth\RegisterController::class, 'complete'])->name('register.complete');
Route::post('/register/complete/company', [App\Http\Controllers\Auth\RegisterController::class, 'company_create'])->name('register.complete.company');
Route::post('/register/complete/worker', [App\Http\Controllers\Auth\RegisterController::class, 'worker_create'])->name('register.complete.worker');

Route::get('/utente/modifica/{id}', [App\Http\Controllers\WorkerController::class, 'edit'])->name('worker.edit');
Route::PUT('/utente/modifica/{id}', [App\Http\Controllers\WorkerController::class, 'update'])->name('worker.update');

Route::get('/azienda/modifica/{id}', [App\Http\Controllers\CompanyController::class, 'edit'])->name('company.edit');
Route::PUT('/azienda/modifica/{id}', [App\Http\Controllers\CompanyController::class, 'update'])->name('company.update');

Route::get('/esperienza', [App\Http\Controllers\ExperiencesController::class, 'show'])->name('experiences.show');
Route::post('/esperienza/create', [App\Http\Controllers\ExperiencesController::class, 'create'])->name('experiences.create');
Route::get('/esperienza/modifica/{id}', [App\Http\Controllers\ExperiencesController::class, 'edit'])->name('experiences.edit');
Route::PUT('/esperienza/modifica/{id}', [App\Http\Controllers\ExperiencesController::class, 'update'])->name('experiences.update');
Route::delete('/esperienza/{id}', [App\Http\Controllers\ExperiencesController::class, 'delete'])->name('experiences.delete');

Route::get('/istruzione', [App\Http\Controllers\EducationsController::class, 'show'])->name('educations.show');
Route::post('/istruzione/create', [App\Http\Controllers\EducationsController::class, 'create'])->name('educations.create');
Route::get('/istruzione/modifica/{id}', [App\Http\Controllers\EducationsController::class, 'edit'])->name('educations.edit');
Route::PUT('/istruzione/modifica/{id}', [App\Http\Controllers\EducationsController::class, 'update'])->name('educations.update');
Route::delete('/istruzione/{id}', [App\Http\Controllers\EducationsController::class, 'delete'])->name('educations.delete');

Route::get('/competenza', [App\Http\Controllers\SkillsController::class, 'show'])->name('skills.show');
Route::post('/competenza/create', [App\Http\Controllers\SkillsController::class, 'create'])->name('skills.create');
Route::get('/competenza/modifica', [App\Http\Controllers\SkillsController::class, 'edit'])->name('skills.edit');
Route::delete('/competenza/{id}', [App\Http\Controllers\SkillsController::class, 'delete'])->name('skills.delete');

Route::get('/search', [App\Http\Controllers\SearchController::class, 'search'])->name('search.main');
Route::post('/search/results', [App\Http\Controllers\SearchController::class, 'search'])->name('search');

Route::get('/application/{user_id}/{job_id}', [App\Http\Controllers\ApplicationController::class, 'create'])->name('application');