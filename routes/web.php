<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RequestController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home',[HomeController::class,'adminHome'])->name('admin.home')->middleware('is_admin');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/table',function(){
    return view('table');
})->name('table');

Route::get('/wrequest',function(){
    return view('wrequest');
})->name('wrequest');

Route::get('/update',function(){
    return view('update');
})->name('update');

Route::get('/', function () {
    return view('welcome');
});

Route::post('/',[RequestController::class,'addRequest']);