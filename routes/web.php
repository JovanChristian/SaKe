<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ActivityController;
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

Route::get('/aktivitas', function() {
    return view('aktivitas');
})->name('aktivitas');

// Route::get('/aktivitasafter', function() {
//     return view('aktivitasAfter');
// })->name('aktivitasafter');

Route::get('/aktivitasafter', [ActivityController::class, 'index'])->name("aktivitasafter");

Route::get('/captaincare', function () {
    return view('Captaincare');
})->name('captaincare');

Route::get('/captaincareafter', function () {
    return view('CaptaincareAfter');
})->name('captaincareafter');

Route::get('/caregiverid', function () {
    return view('CaregiverID');
})->name('caregiverid');

Route::get('/caregiveridafter', function () {
    return view('CaregiverIDAfter');
})->name('caregiveridafter');

Route::get('/', function() {
    return view('homepage');
})->name('homepage');

Route::get('/homepagelogin', function() {
    return view('homepagelogin');
})->name('homepagelogin');

Route::get('/insanmedika', function () {
    return view('InsanMedika');
})->name('insanmedika');

Route::get('/insanmedikaafter', function () {
    return view('InsanMedikaAfter');
})->name('insanmedikaafter');

Route::get('/mynurze', function () {
    return view('MyNurze');
})->name('mynurze');

Route::get('/mynurzeafter', function () {
    return view('MynurzeAfter');
})->name('mynurzeafter');

Route::get('/nannycare', function () {
    return view('Nannycare');
})->name('nannycare');

Route::get('/nannycareafter', function () {
    return view('NannycareAfter');
})->name('nannycareafter');

Route::get('/profile', function() {
    return view('Prof');
})->name('profile'); 

Route::get('/putrainsan', function() {
    return view('Putrainsan');
})->name('putrainsan');

Route::get('/putrainsanafter', function() {
    return view('PutrainsanAfter');
})->name('putrainsanafter');

Route::get('/yayasanlogin', function () {
    return view('YayasanLogin');
})->name('yayasanlogin');

Route::get('/yayasan', function () {
    return view('Yayasan');
})->name('yayasan');



Route::get('/test', function() {
    return view('test');
})->name('test');

//buat connect ke tiap page
Route::get('/testing', function () {
    return view();
});

// Route::get('/aktivitasss', [ActivityController::class, 'index'])->name('aktivitas.index');
Route::post('/aktivitas/store', [ActivityController::class, 'store'])->name('aktivitas.store');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register']);
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login']);
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});
