<?php

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



Route::get('/about', \App\Livewire\Frontend\About::class)->name('about');
Route::get('/invest_in_oman', \App\Livewire\Frontend\InvestInOman::class)->name('invest-in-oman');
Route::get('/why_oman', \App\Livewire\Frontend\WhyOman::class)->name('why-oman');

