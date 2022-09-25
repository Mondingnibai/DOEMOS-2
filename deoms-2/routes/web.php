<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\OurSchoolController;
use App\Http\Controllers\ContactController;

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

// Route::get('/{any}', [MainController::class, 'index'])->where('any', '.*');

// Public pages
Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/programs', [ProgramController::class, 'index'])->name('programs');
Route::get('/our-school', [OurSchoolController::class, 'index'])->name('our-school');
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact-us');
