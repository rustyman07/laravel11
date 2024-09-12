<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ListingController;
;

Route::get('/',[IndexController::class,'index']);



Route::get('/test',[IndexController::class,'show']);

Route::resource('Listing',ListingController::class)->only(['index','show']);
