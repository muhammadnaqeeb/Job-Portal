<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\JobListController;
use App\Http\Controllers\SignupController;


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

Route::get('/', function () {
    return view('Home');
});

//Route::get('/joblist', [JobListController::class,'JobListt'])->name('joblist.JobListt');

Route::get('/login', [LoginController::class,'Loginn']);

Route::get('/signup', [SignupController::class,'Signupp'])->name('signup.Signupp');

Route::get('/displayJobs', [JobListController::class,'DisplayJobList']);

Route::get('/addJob', [JobListController::class,'AddJobb']);

Route::post('/jobAddedSuccessfully', [JobListController::class,'jobAddedSuccessfullyy']);
