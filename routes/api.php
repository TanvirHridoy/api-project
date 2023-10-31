<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('/items', [ApiController::class, 'index']); // Route for fetching all items
Route::post('/items', [ApiController::class, 'store']); // Route for creating a new item
Route::put('/items/{id}', [ApiController::class, 'update']); // Route for updating an item
Route::delete('/items/{id}', [ApiController::class, 'destroy']); // Route for deleting an item