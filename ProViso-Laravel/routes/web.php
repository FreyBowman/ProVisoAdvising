<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

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

//Normal Routes
Route::get('/', function () {
    return view('index');
});
Route::get('/index', function() {
    return view('index');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/forgotpassword', function () {
    return view('forgotpassword');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/degreeoverview', function () {
    return view('degreeoverview');
});
Route::get('/skillset', function () {
    return view('skillset');
});
Route::get('/dreamjob', function () {
    return view('dreamjob');
});
Route::get('/scholarship', function () {
    return view('scholarship');
});
Route::get('/only-cseng-major', function () {
    return view('only-cseng-major');
});
Route::get('/only-cs-major', function () {
    return view('only-cs-major');
});
Route::get('/only-cyb-major', function () {
    return view('only-cyb-major');
});
Route::get('/cseng-major-math-minor', function () {
    return view('cseng-major-math-minor');
});
Route::get('/cseng-major-phy-minor', function () {
    return view('cseng-major-phy-minor');
});
Route::get('/csengr-major-Acc-minor', function () {
    return view('csengr-major-Acc-minor');
});
Route::get('/csengr-major-Stat-minor', function () {
    return view('index');
});
Route::get('/cs-major-Acc-minor', function () {
    return view('cs-major-Acc-minor');
});
Route::get('/cs-major-math-minor', function () {
    return view('cs-major-math-minor');
});
Route::get('/cs-major-phy-minor', function () {
    return view('cs-major-phy-minor');
});
Route::get('/cs-major-Stat-minor', function () {
    return view('cs-major-Stat-minor');
});
Route::get('/cyb-major-Acc-minor', function () {
    return view('cyb-major-Acc-minor');
});
Route::get('/cyb-major-math-minor', function () {
    return view('cyb-major-math-minor');
});
Route::get('/cyb-major-phy-minor', function () {
    return view('cyb-major-phy-minor');
});
Route::get('/cyb-major-Stat-minor', function () {
    return view('cyb-major-Stat-minor');
});

//Controller Routes
Route::post('post-login', [LoginController::class, 'postLogin'])->name('post-login');
Route::post('post-registration', [LoginController::class, 'postregistration'])->name('post-registration');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');