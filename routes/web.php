<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;


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

Route::controller(Signin::class)->group(function()
    {
        Route::get('/signin', 'index');
        Route::post('/signin', 'authenticate');
    }
);

Route::controller(Signup::class)->group(function()
{
    Route::post('/register', 'register');
    Route::get('/signup', 'index');
});

Route::controller(CreateVaccine::class)->group(function()
{
    Route::post('/registerVaccine', 'register');
    Route::get('/create_vaccine', 'index');
    Route::delete("/vaccine/{id}","destroy");
});

Route::get("/",[IndexController::class,"index"]);

Route::post("/state/city",[StateController::class,"states"]);
Route::get("/state/{id}",[StateController::class,"store"]);
Route::post("/state/{id}",[StateController::class,"update"]);
Route::get("/vaccine/{id}",[VaccineUpdate::class,"store"]);
Route::put("/vaccine/{id}",[VaccineUpdate::class,"update"]);

Route::controller(CreatePopulation::class)->group(function()
{
    Route::post('/registerPopulation', 'register');
    Route::get('/create_population', 'index');
    Route::delete("/vaccine/{id}","destroy");
});
