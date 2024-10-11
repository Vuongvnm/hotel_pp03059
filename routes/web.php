<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;

Route::resource('hotels', HotelController::class);
