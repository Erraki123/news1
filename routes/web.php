<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Models\Annonce;
use App\Models\Contact;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $annoncesCount = Annonce::count();
    $contactsCount = Contact::count();
    $usersCount = User::count();

    return view('dashboard', compact('annoncesCount', 'contactsCount', 'usersCount'));
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

Route::middleware(['auth'])->group(function () {
    Route::get('/annonces', [AnnonceController::class, 'index'])->name('annonces.index');
    Route::get('/annonces/create', [AnnonceController::class, 'create'])->name('annonces.create');
    Route::post('/annonces', [AnnonceController::class, 'store'])->name('annonces.store');
    Route::get('/annonces/{id}', [AnnonceController::class, 'show'])->name('annonces.show');
    Route::get('/annonces/{annonce}/edit', [AnnonceController::class, 'edit'])->name('annonces.edit');
    Route::put('/annonces/{annonce}', [AnnonceController::class, 'update'])->name('annonces.update');
    Route::delete('/annonces/{annonce}', [AnnonceController::class, 'destroy'])->name('annonces.destroy');
});

Route::get('/annonces/{id}', function ($id) {
    $annonce = App\Models\Annonce::find($id);
    return response()->json($annonce);
});

Route::get('/services', [AnnonceController::class, 'showServices'])->name('services');

// حفظ بيانات الاتصال
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');

// إدارة الرسائل في لوحة التحكم
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/contacts', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('/dashboard/contacts/{id}', [ContactController::class, 'show'])->name('contacts.show');
    Route::delete('/dashboard/contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');
});

Route::get('/contacts/{id}', function ($id) {
    $contact = App\Models\Contact::find($id);
    return response()->json($contact);
});
