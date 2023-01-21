<?php

use App\Http\Controllers\AnimalController;
use Illuminate\Support\Facades\Route;

Route::resource('animal', AnimalController::class)->except(['destroy', 'show']);
