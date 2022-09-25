<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\OurSchoolController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AnnouncementController;
use App\Http\Controllers\Admin\ResouceController;

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

Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin Routes
Route::prefix('admin')->middleware(['auth', 'nocache'])->group(function () {
    // Dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Announcement
    Route::get('announcement', [AnnouncementController::class, 'index'])->name('announcement');
    Route::get('new-announcement', [AnnouncementController::class, 'newAnnouncement'])->name('new-announcement');
    Route::post('create-announcement', [AnnouncementController::class, 'store'])->name('create-announcement');
    Route::get('get-all-announcement', [AnnouncementController::class, 'showAllAnnouncement'])->name('get-all-announcement');
    Route::delete('delete-announcement/{id}', [AnnouncementController::class, 'destroy']);
    Route::get('show-announcement/{id}', [AnnouncementController::class, 'showAnnouncementById']);

    // // Forms
    Route::get('forms', [ResouceController::class, 'index'])->name('forms');
    Route::get('newForm', [ResouceController::class, 'newForm'])->name('newForm');
});
