<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'index']);

// Tambahkan rute untuk pemesanan meja
Route::post('book-a-table', [SiteController::class, 'book-a-table']);
