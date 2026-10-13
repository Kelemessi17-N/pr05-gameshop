<?php


use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/contact', function () {
//    return view('contact');
//});


Route::view('/home', 'home')->name('home');
Route::view('/products', 'products')->name('products');
Route::view('/review', 'reviews')->name('reviews');
Route::view('/contact', 'contact')->name('contact');
Route::view('/register', 'register')->name('register');
Route::view('/login', 'login')->name('login');


Route::get('/about', [AboutController::class, 'index']);

Route::get('/contact', function () {
    $contact = 'Loren Imsen Contact';
    return view('contact', [
        'contact' => $contact
    ]);
});

Route::get('products/{id}', function (string $id) {
    return view('product', ['id' => $id]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';



