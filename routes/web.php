<?php

use Illuminate\Support\Facades\Route;

// الصفحة الرئيسية
Route::get('/', function () {
    return view('home');
})->name('home');

// عن الهيئة
Route::get('/about', function () {
    return view('about');
})->name('about');

// الخدمات الإلكترونية
Route::get('/services', function () {
    return view('services');
})->name('services');

// التحول الرقمي
Route::get('/digital-transformation', function () {
    return view('digital-transformation');
})->name('digital-transformation');

// المشاريع والأنشطة
Route::get('/projects', function () {
    return view('projects');
})->name('projects');

// الإدارة والقيادة
Route::get('/leadership', function () {
    return view('leadership');
})->name('leadership');

// اتصل بنا
Route::get('/contact', function () {
    return view('contact');
})->name('contact');