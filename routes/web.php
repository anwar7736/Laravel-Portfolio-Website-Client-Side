<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\ProjectsController;

Route::get('/', [HomeController::class, 'HomeIndex']);
Route::post('/sendMessage', [HomeController::class, 'sendMessage']);

Route::get('/contact', [ContactsController::class, 'ContactsPage']);
Route::get('/courses', [CoursesController::class, 'CoursesPage']);
Route::get('/policy', [PolicyController::class, 'PolicyPage']);
Route::get('/terms', [TermsController::class, 'TermsPage']);
Route::get('/projects', [ProjectsController::class, 'ProjectsPage']);