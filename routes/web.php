<?php

use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TestonimalController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontendController;
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

Route::get('/', [\App\Http\Controllers\FrontendController::class,'home'])->name('home');

Route::get('/dashboard',  [\App\Http\Controllers\FrontendController::class,'dashboard'])->middleware(['auth'])->name('dashboard');

Route::resource('contacts', ContactController::class);
Route::post('/contacts/delete',[\App\Http\Controllers\ContactController::class,'delete'])->name('contacts.delete');


Route::prefix('admin')->name('admin.')->middleware('auth')->group(function() {
    Route::resource('teams', TeamController::class);
    Route::post('/teams/delete',[\App\Http\Controllers\Admin\TeamController::class,'delete'])->name('teams.delete');
    Route::resource('testomonial', TestonimalController::class);
    Route::post('/testomonial/delete',[\App\Http\Controllers\Admin\TestonimalController::class,'delete'])->name('testomonial.delete');
    Route::resource('notices', NoticeController::class);
    Route::post('/notices/delete',[\App\Http\Controllers\Admin\NoticeController::class,'delete'])->name('notices.delete');

    Route::resource('users',UserController::class);

});

require __DIR__.'/auth.php';
