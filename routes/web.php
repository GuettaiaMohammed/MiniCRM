<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard');

    Route::resource('companies', CompanyController::class);
    Route::resource('employees', EmployeController::class);

    Route::get('companies/send-mail/{company}', [CompanyController::class, 'createEmail'])->name('companies.email');
    Route::post('companies/send-mail/{company}', [CompanyController::class, 'sendEmail'])->name('companies.email');
});

require __DIR__ . '/auth.php';
