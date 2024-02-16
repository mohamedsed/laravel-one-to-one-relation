<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Relations\relationsController;

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
});

Route::get('has_one' , [relationsController::class , 'hasOne']);
Route::get('phone-user' , [relationsController::class , 'phoneUser']);
Route::get('user-has-phone' , [relationsController::class , 'userHasPhone']);
Route::get('user-dont-have-phone' , [relationsController::class , 'userdonthavePhone']);

