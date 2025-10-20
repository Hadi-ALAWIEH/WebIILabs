<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/greet', function () {
    return response()->json(['message' => 'Hello, welcome to our API!']);
});

Route::get('/sum', function () {
    $numbers = [1, 2, 3, 4, 11];
    return response()->json(['sum' => array_sum($numbers)]);
});

Route::get('/fruits', [App\Http\Controllers\Fruit::class, 'getFruits']);
