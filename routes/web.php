<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', function () {
    echo "Hello, World!";
});

Route::get("show_data", [MainController::class, 'showData'])
    ->name('show_data');
