<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});


use App\Http\Controllers\AnnonceController;

Route::middleware(['auth'])->group(function () {
    Route::get('/annonces', [AnnonceController::class, 'index'])->name('annonces.index');
    Route::get('/annonces/create', [AnnonceController::class, 'create'])->name('annonces.create');
    Route::post('/annonces', [AnnonceController::class, 'store'])->name('annonces.store'); // أضف هذا السطر
    Route::get('/annonces/{id}', [AnnonceController::class, 'show'])->name('annonces.show');
    Route::get('/annonces/{annonce}/edit', [AnnonceController::class, 'edit'])->name('annonces.edit');
    Route::put('/annonces/{annonce}', [AnnonceController::class, 'update'])->name('annonces.update');
    Route::delete('/annonces/{annonce}', [AnnonceController::class, 'destroy'])->name('annonces.destroy');
});
Route::get('/services', [AnnonceController::class, 'showServices'])->name('services');
use App\Http\Controllers\ContactController;

// حفظ بيانات الاتصال
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');

// إدارة الرسائل في لوحة التحكم
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/contacts', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('/dashboard/contacts/{id}', [ContactController::class, 'show'])->name('contacts.show');
    Route::delete('/dashboard/contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');
});
