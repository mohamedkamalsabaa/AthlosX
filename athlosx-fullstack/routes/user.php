<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\User\HomeController;
use App\Http\Controllers\Dashboard\User\ProfileController;
use App\Http\Controllers\Dashboard\User\ClubsController;
use App\Http\Controllers\Dashboard\User\TeamsController;
use App\Http\Controllers\Dashboard\User\PlayersController;
use App\Http\Controllers\Dashboard\User\MatchesController;
use App\Http\Controllers\Dashboard\User\TournamentsController;
use App\Http\Controllers\Dashboard\User\AiTools\PredictionEngineController;
use App\Http\Controllers\Dashboard\User\StatisticsController;




Route::prefix('user')->name('user.')->group(function () {


    Route::middleware('auth')->prefix('dashboard')->group(function () {


        Route::get('home', [HomeController::class, 'index'])->name('home');

        Route::get('profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::put('profile/update', [ProfileController::class, 'update'])->name('profile.update');

        Route::resource('clubs', ClubsController::class);
        Route::resource('teams', TeamsController::class);
        Route::resource('players', PlayersController::class);
        Route::resource('matches', MatchesController::class);
        Route::resource('tournaments', TournamentsController::class);

        Route::prefix('dashboard')->name('ai-tools.')->group(function () {
            Route::get('/ai-tools/prediction-engine', [PredictionEngineController::class, 'index'])->name('prediction-engine.index');
            Route::post('/ai-tools/prediction-engine/predict', [PredictionEngineController::class, 'predict'])->name('prediction-engine.predict');
        });


        // Route::get('/statistics', [StatisticsController::class, 'index'])->name('statistics.index');
    });
});
