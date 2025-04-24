<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\ExamResultController;

// Public routes (no authentication required)
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/email/verify/{id}/{hash}', [AuthController::class, 'verify'])->name('verification.verify');
Route::post('/auth/verify', [AuthController::class, 'verify']);

// Protected routes (authentication required)
Route::post('/exam/store', [ExamResultController::class, 'store']);
