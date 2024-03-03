<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriversController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\HomePage;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\StandingController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TeamsController;

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

Route::get('/', [HomePage::class, "home"])->name('home');

Route::get(
    '/Teams',
    [TeamsController::class, 'menu']
)->name('teams');

Route::get('/standing', [StandingController::class, 'menu'])->name('standing');


Route::prefix("schedule")->group(function () {
    Route::get('/', [ScheduleController::class, 'menu'])->name('schedule');
});

Route::get('/about', function () {
    return view("About.about");
})->name('about');

Route::prefix("drivers")->group(function () {
    Route::get('/', [DriversController::class, 'menu'])->name('allDrivers');
    Route::get('/driver{id}',[DriverController::class,'driver'])->name('driver');
});

Route::get('/team/{teamName}',[TeamController::class,'team'])->name('team');

Route::prefix("news")->group(function () {
    Route::get('/race{id}', [NewsController::class, "race"])->name('raceNews');
    Route::get('/quali{id}', [NewsController::class, "quali"])->name('qualificationNews');
    Route::get('/sprintShootout{id}', [NewsController::class, "sprintShootout"])->name('sprint shootoutNews');
    Route::get('/sprint{id}', [NewsController::class, "sprint"])->name('sprintNews');
    Route::get('/article{id}', [NewsController::class, "article"])->name('articleNews');
});

Route::fallback(function () {
    return view("components.404");
});
