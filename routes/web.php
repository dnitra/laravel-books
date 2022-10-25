<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TestController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomePageController::class, "index"]);
Route::view("/about-us", "about/about-us");
Route::get("/api/test/array", [TestController::class, "arrayResponse"]);
Route::get("/api/test/model", [TestController::class, "modelResponse"]);
Route::get("/api/test/collection", [TestController::class, "collectionResponse"]);

Route::get('/home', [HomeController::class, "home"]);
