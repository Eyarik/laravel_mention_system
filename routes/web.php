<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('allusers',[UserController::class,'index']);
Route::get('allteams',[TeamController::class,'index']);
Route::get('teammembers',[TeamController::class,'teammembers']);
Route::post('addteam',[TeamController::class,'create'])->name('addteam');
Route::post('addcomment',[CommentController::class,'store'])->name('addcomment');

