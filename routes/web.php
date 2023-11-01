<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
Route::get("/",function (){
    return Inertia::render('Home');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')
    ->controller(ProfileController::class)
    ->group(function () {
        Route::get('/profile',  'edit')->name('profile.edit');

        Route::patch('/profile',  'update')->name('profile.update');

        Route::delete('/profile',  'destroy')->name('profile.destroy');
});


Route::get('/faculdades', function (){
    return Inertia::render('Faculty/CreateFacultyForm');
})->middleware(['auth', 'verified'])->name('faculdades');

Route::get('/avaliacoes',function (){})->name('avaliacoes');
Route::get('/avaliadores',function (){})->name('avaliadores');
Route::get('/resultados',function (){})->name('resultados');

require __DIR__.'/auth.php';
