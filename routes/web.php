<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PrayerRequestController;

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
    return view('welcome');
});
Route::get('welcome', function () {
    return view('welcome');
});
Route::get('weekly_event', function () {
    return view('weekly_event');
});
Route::get('sermon', function () {
    return view('sermon');
});
Route::get('history', function () {
    return view('history');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('all-ministry', function () {
    return view('all-ministry');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


require __DIR__ . '/auth.php';


Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::post('/prayer-request', [PrayerRequestController::class, 'submit'])->name('prayer.submit');
