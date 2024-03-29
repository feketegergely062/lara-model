<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrinkController;
use App\Http\Controllers\Api\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/drinks", [DrinkController::class, "getDrinks"]);
Route::get("/onedrink/{drink}", [DrinkController::class, "getOneDrink"]);
Route::post("/adddrink", [DrinkController::class, "addDrink"]); 
Route::put("/modifyDrink",[DrinkController::class, "modifyDrink"]);
Route::delete("/deleteDrink",[DrinkController::class, "deleteDrink"]);


Route::post("/register",[AuthController::class, "register"]);
Route::post("/login",[AuthController::class, "login"]);