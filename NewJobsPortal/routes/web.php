<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\JobsController;

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

Route::get('/', [HomeController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',

// Define a function to set up routes
])->group(function () {
    // Route for dashboard page
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect', [HomeController::class, 'redirect']);
Route::get('/jobs', [HomeController::class, 'jobs']);
Route::get('/jobs/search', [HomeController::class, 'searchByCategory'])->name('jobs.searchByCategory');
Route::get('/details', [HomeController::class, 'details']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/blogs', [HomeController::class, 'blogs']);
Route::get('/contactus', [HomeController::class, 'contactus']);
Route::get('/teams', [HomeController::class, 'teams']);
Route::get('/moretestimonials', [HomeController::class, 'moretestimonials']);
Route::get('/moreterms', [HomeController::class, 'moreterms']);
Route::get('/logout', [HomeController::class, 'logout']);
Route::get('/profile/{id}', [HomeController::class, 'profile']);

Route::get('/addjob', [JobsController::class, 'addjob']);
Route::post('/add_job', [JobsController::class, 'add_job']);

Route::get('/admin', [JobsController::class, 'admin']);

Route::get('/widgets', [AdminController::class, 'widgets']);
Route::get('/admin.adminlogin', [AdminController::class, 'adminlogin']);

Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login');

Route::get('/admin_jobs', [JobsController::class, 'admin_jobs']);
Route::get('/view_category', [AdminController::class, 'view_category']);
Route::post('/add_category', [AdminController::class, 'add_category']);
Route::get('/delete_category/{id}', [AdminController::class, 'delete_category']);

Route::get('/job_details', [JobsController::class, 'job_details']);
Route::get('/job_details/{id}', [JobsController::class, 'job_details']);
Route::get('/delete_job/{id}', [JobsController::class, 'delete_job']);
Route::get('/editjob/{id}', [JobsController::class, 'editjob']);

// Route::get('/admin/admin_jobs', [JobsController::class, 'admin_jobs'])->name('admin_jobs');

Route::post('/apply_job/{id}', [ApplyController::class, 'apply_job']);
Route::post('/update_job/{id}', [JobsController::class, 'update_job']);

Route::get('/applications', [AdminController::class, 'applications']);
Route::get('/applied_jobs', [HomeController::class, 'applied_jobs']);
Route::put('/applications/{id}/accept', [ApplyController::class, 'accept'])->name('applications.accept');
Route::put('/applications/{id}/reject', [ApplyController::class, 'reject'])->name('applications.reject');

