<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\UserDetailController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\SkillController;
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
    return view('main');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('user-detail/create', [App\Http\Controllers\UserDetailController::class, 'create'])->middleware('auth')->name('user-detail.create');
//Route::get('education/create', [App\Http\Controllers\EducationController::class, 'create'])->middleware('auth')->name('education.create');
//Route::post('user-detail', [App\Http\Controllers\UserDetailController::class, 'store'])->middleware('auth');
Route::resource('user-detail', UserDetailController::class)->middleware('auth');
Route::resource('education', EducationController::class)->middleware('auth');
Route::resource('experience', ExperienceController::class)->middleware('auth');
Route::resource('skill', SkillController::class)->middleware('auth');

Route::get('/resume', [App\Http\Controllers\ResumeController::class, 'index'])->name('resume.index')->middleware('auth');

Route::get('/resume/download',[App\Http\Controllers\ResumeController::class, 'download'])->name('resume.download');
