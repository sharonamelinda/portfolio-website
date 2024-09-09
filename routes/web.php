<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ContactController;

Route::get('/', [FrontController::class, 'index'])->name('front.home');

Route::get('/resume/download', [ResumeController::class, 'download'])->name('resume.download');

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

Route::get('/projects', [FrontController::class, 'index'])->name('front.index');

// routes/web.php
Route::get('/projects/{slug?}', [FrontController::class, 'index'])->name('front.index');
Route::get('/projects/partial/{slug?}', [FrontController::class, 'partial'])->name('front.partial');


