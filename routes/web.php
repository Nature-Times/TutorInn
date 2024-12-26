<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\applyTutorController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\ScheduleController;


Route::get('/', function () {
    return view('login');
});

Route::get('/register', [RegisterController::class, 'showRegister'])->name('registerPage');

Route::post('/register', [RegisterController::class, 'register']);

#Route::get('/update/{id}', [RegisterController::class, 'findID']);

Route::get('/edit', [ProfileController::class, 'edit'])->name('update.edit');

Route::post('/edit', [ProfileController::class, 'update'])->name('update.update');

#Route::post('/update/{id}', [RegisterController::class, 'updateMahasiswa']);

Route::get('listMahasiswa', [RegisterController::class, 'displayMahasiswa']);

Route::get('/login', [LoginController::class, 'showLogin'])->name('login');

Route::post('/login', [LoginController::class, 'login']);

Route::middleware('auth')->get('/profile', [ProfileController::class, 'showProfile']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/applyTutor', [applyTutorController::class, 'showApplyTutor'])->name('applyTutor');

Route::post('/applyTutor', [applyTutorController::class, 'apply'])->name('applyTutor-apply');

Route::get('/quiz', [applyTutorController::class, 'showQuiz'])->name('quiz');

Route::post('/quiz', [applyTutorController::class, 'uploadVideo'])->name('quiz.video');

Route::get('/pickTutor', [TutorController::class, 'showTutor'])->name('showTutor');

Route::get('/profiletutor/{name}/{subject}', [TutorController::class, 'showProfileTutor'])->name('view_profileTutor');

Route::get('/resume/{name}/{subject}', [TutorController::class, 'showResumeTutor'])->name('view_resumeTutor');

Route::get('/scheduleTutor/{name}/{subject}', [ScheduleController::class, 'pickSchedule'])->name('pick_schedule');

Route::post('/scheduleTutor', [ScheduleController::class, 'scheduleTutor'])->name('schedule_submit');

Route::get('/scheduleList', [ScheduleController::class, 'scheduleList'])->name('user_schedule');

Route::get('/viewSchedule/{id}', [ScheduleController::class, 'viewSchedule'])->name('viewSchedule');

Route::get('/homepage', function(){
    return view('homepage');
})->name('homepage');