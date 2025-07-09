<?php

use App\Livewire\Team;
use Livewire\Livewire;
use App\Livewire\About;
use App\Livewire\Index;
use App\Livewire\Contact;
use App\Livewire\Courses;
use App\Livewire\Testimonial;
use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Register;

/* NOTE: Do Not Remove
/ Livewire asset handling if using sub folder in domain
*/
Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});
/*
/ END
*/
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Index::class)->name('index');
Route::get('/about', About::class)->name('about');
Route::get('/courses', Courses::class)->name('courses');
Route::get('/team', Team::class)->name('team');
Route::get('/testimonial', Testimonial::class)->name('testimonial');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/register', Register::class)->name('register');