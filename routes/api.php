<?php

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Route;
use Modules\Movies\Http\Controllers\MoviesController;
use Modules\Showtimes\Http\Controllers\ShowtimesController;
use Modules\Cinema\Http\Controllers\CinemaController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//this route get all movies for the three cinema
Route::get('/all', [MoviesController::class, 'index']);

//this route create movies for a cinema
Route::post('/createmovies', [MoviesController::class, 'create']);

//this route get movie by movie id
Route::get('/movie/{id}', [MoviesController::class, 'read']);

//this route get all movies showtime
Route::get('/allshowtime', [ShowtimesController::class, 'index']);

//this route create movies showtime
Route::post('/createshowtime', [ShowtimesController::class, 'create']);

//this route get showtimes belonging to a movie
Route::get('/showtime/{movie_id}', [ShowtimesController::class, 'read']);

//this route update showtime with a show_id
Route::put('/updateshowtime/{id}', [ShowtimesController::class, 'update']);

//this route create cinema
Route::post('/createcinema', [CinemaController::class, 'create']);


//this route get all cinema
Route::get('/allcinema', [CinemaController::class, 'index']);


//this route get a cinema
Route::get('/cinema/{id}', [CinemaController::class, 'getcinema']);

//this route allow cinema admin to login to add movies
Route::post('/logincinema', [MoviesController::class, 'logincinema']);




