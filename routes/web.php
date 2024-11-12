<?php
use App\Http\Controllers\MainMenuController;

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ExpenseReimbursementController;
use App\Http\Controllers\ItineraryController;
use App\Http\Controllers\PerformanceEvaluationController;

use Illuminate\Support\Facades\Route;


Route::get('/main-menu', [MainMenuController::class, 'index'])->name('main-menu');

Route::get('/attendance', [AttendanceController::class, 'showForm'])->name('attendance.form');
Route::post('/attendance', [AttendanceController::class, 'submitForm']);

Route::get('/expense-reimbursement', [ExpenseReimbursementController::class, 'showForm'])->name('expense-reimbursement.form');
Route::post('/expense-reimbursement', [ExpenseReimbursementController::class, 'submitForm']);

Route::get('/itinerary', [ItineraryController::class, 'showForm'])->name('itinerary.form');
Route::post('/itinerary', [ItineraryController::class, 'submitForm']);

Route::get('/performance-evaluation', [PerformanceEvaluationController::class, 'showForm'])->name('performance-evaluation.form');
Route::post('/performance-evaluation', [PerformanceEvaluationController::class, 'submitForm']);


require __DIR__.'/auth.php';
