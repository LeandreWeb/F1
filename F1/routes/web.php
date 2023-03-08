<?php

use Illuminate\Support\Facades\Route;

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
})->name('home');

Route::get('/standing', function(){
    return "<h1>Standing</h1>";
});

Route::prefix("drivers")->group(function() {
    Route::get('/', function () {

        $drivers= [
            1 =>['Lastname'=>'Alonso'],
            2 =>['Lastname'=>'Stroll'],
            3 =>['Lastname'=>'Verstapen'],
            4 =>['Lastname'=>'Perex']
        ];


        return view('Drivers.allDrivers',['drivers'=> $drivers]);
    })->name('allDrivers');
});


Route::get('/team/{id}',function($id){

    return "Team". $id;
})->name('teams');

Route::fallback(function(){
    return "<h1>404 Page not Found</h1> ";
});