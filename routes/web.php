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
});

Route::get("/",[IndexController::class,"index"]);

// Route::prefix('/')->group(function () {

//     Route::get('signin', function () {
//         return view('signin');
//     });

//     Route::get('signup', function () {
//         return view('signup');
//     });

//     Route::get('vaccine_update', function () {
//         return view('vaccine_update');
//     });

//     Route::get('state_update', function () {
//         return view('state_update');
//     });

//     Route::get('create_vaccine', function () {
//         return view('create_vaccine');
//     });

// });

