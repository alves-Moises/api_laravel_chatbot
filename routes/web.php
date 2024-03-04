<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;
use App\Http\Controllers\GroupsTransmissionController;
use App\Http\Controllers\BotController;
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

Route::get('/dashboard', function(){ return view('dashboard'); });

// Groups
Route::prefix('/groups')
    ->group(function(){
        Route::get('/get-groups', [GroupsTransmissionController::class, 'index'])
            ->name('group-list');

        Route::get('/new-groups', [GroupsTransmissionController::class, 'new_groups'])
            ->name('group-new');
});

Route::prefix('/bot')
    ->group(function(){
        Route::Post('send-groups', [BotController::class, 'send_message']);
    });