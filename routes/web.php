<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactCOntroller;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/contact' , [ContactCOntroller::class , 'save'])->name('contact');

