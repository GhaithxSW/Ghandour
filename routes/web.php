<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('pages.app.invoice.preview', ['title' => 'asdsad']);
});

require __DIR__.'/auth.php';
