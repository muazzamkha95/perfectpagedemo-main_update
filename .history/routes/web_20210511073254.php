<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\serp;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

// SERPs Stuff

Route::middleware(['auth:sanctum', 'verified'])->get('/serps', function () {
    return Inertia::render('Serps',[
        'SER' => Serps::latest()->get(),
    ]);
})->name('serps');

Route::middleware(['auth:sanctum', 'verified'])->get('/newserp', [serp::class, 'create'])->name('newserp');

// Pages Stuff

Route::middleware(['auth:sanctum', 'verified'])->get('/pages', function () {
    return Inertia::render('Pages');
})->name('pages');
