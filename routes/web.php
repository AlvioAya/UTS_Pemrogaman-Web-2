<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EducationHistoryController;
use App\Http\Controllers\SkillController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// halaman utama (optional)
Route::get('/', function () {
    return redirect('/education');
});

// route education
Route::get('/education', [EducationHistoryController::class, 'index']);

// route skills
Route::get('/skills', [SkillController::class, 'index']);