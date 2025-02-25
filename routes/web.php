<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');
Route::view('/Home/ourservices', 'livewire.ourservices.ourservices')->name('ourservices');
Route::view('/Home/News%Events', 'news&events')->name('news&events');
// about
Route::view('/Home/Aboutus', 'livewire.aboutus.aboutus')->name('aboutus');
Route::view('/Home/Aboutus/mission-vission', 'livewire.aboutus.mission-vission')->name('mission-vission');
Route::view('/Home/Aboutus/core-values', 'livewire.aboutus.core-values')->name('core-values');
Route::view('/Home/Aboutus/history', 'livewire.aboutus.history')->name('history');

// Route::view('/Home/Aboutus', 'livewire.book-appointment')->name('book-appointment');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('appointment', 'livewire.appointment')
    ->middleware(['auth'])
    ->name('appointment');

Route::view('book-an-apointment', 'book-an-apointment')
    ->middleware(['auth'])
    ->name('book-an-apointment');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
