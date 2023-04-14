<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriversController;
use App\Http\Controllers\HomePage;
use App\Http\Controllers\NewsController;

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

Route::get('/', [HomePage::class,"home"])->name('home');

Route::get('/Teams', function(){
    return view("Teams.teams");
})->name('teams');

Route::get('/standing', function(){
    return view("Standing.standing");
})->name('standing');

Route::get('/schedule', function(){
    return view("Schedule.schedule");
})->name('schedule');

Route::get('/about', function(){
    return view("About.about");
})->name('about');

Route::prefix("drivers")->group(function() {
    Route::get('/', [DriversController::class,'index'])->name('allDrivers');
});


Route::get('/team/{id}',function($id){

    return "Team". $id;
})->name('team');

Route::get('/news/race{id}',[NewsController::class,"race"])->name('racenews');
Route::get('/news/quali{id}',[NewsController::class,"quali"])->name('qualinews');



Route::fallback(function(){
    return "<h1>404 Page not Found</h1> ";
});
