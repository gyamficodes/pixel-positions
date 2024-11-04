<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;



Route::get('/', [JobController::class , 'index']);
