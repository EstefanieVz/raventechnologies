<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ESP32Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Models\Post;
use App\Models\Product;
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

Route::get('/', function () {//Ruta de bienvenida 
    return view('welcome');
})->name('welcome');

Route::get('/admin/panel', function () {//Ruta de panel 
    return view('admin.panel');
})->name('panel');

Route::get('/admin/about', function () {//Ruta de sobre nosotros 
    return view('admin.about');
})->name('about');

Route::get('/admin/product', function () {//Ruta de producto 
    return view('admin.product');
})->name('product');

Route::get('/admin/support', function () {//Ruta de soporte
    return view('admin.support');
})->name('support');

Route::get('/admin/perfil', function () {//Ruta de perfil
    return view('admin.perfil');
})->name('perfil');

// Route::get('/admin/creado', function () {//Ruta de perfil
//     return view('admin.creado');
// })->name('creado');


Route::get('/develop', function(){
    return 'Welcome to Developments';
})->name('develop.index');

Route::get('/develop/{develops}', function($develops)
{
    if ($develops === '5')
    {
        return redirect()->route('develop.index');
    }
    return 'Detalles del desarrollador ' . $develops;
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Ruta personalizada para llamar la función de index y mostrar los posteos
Route::get('/posts', [PostController::class, 'index'])-> name('posts.index'); 
// Ruta personalizada para crear el registro en la BD de Post
Route::post('/posts', [PostController::class, 'store'])-> name('posts.store'); 
// Ruta personalizada para actualizar el registro de la publicación
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])-> name('posts.edit'); 
// Ruta personalizada para actualizar el registro de la publicación
Route::patch('/posts/{post}', [PostController::class, 'update'])-> name('posts.update'); 
// Ruta personalizada para eliminar el registro de la publicación
Route::delete('/posts/{post}', [PostController::class, 'destroy'])-> name('posts.destroy'); 

Route::resource('/products',ProductController::class);
Route::get('/products/{product}/delete',[App\Http\Controllers\ProductController::class,'delete'])->name('products.delete');
// // Ruta personalizada para llamar la función de index y mostrar los productos
// Route::get('/products', [ProductController::class, 'index'])-> name('products.index'); 
// // Ruta personalizada para llamar la función de index y mostrar los productos
// Route::get('/products', [ProductController::class, 'create'])-> name('products.create'); 
// // Ruta personalizada para crear el registro en la BD de productos
// Route::post('/products', [ProductController::class, 'store'])-> name('products.store'); 
// // Ruta personalizada para actualizar el registro de la productos
// Route::get('/products/{product}/edit', [ProductController::class, 'edit'])-> name('products.edit'); 
// // Ruta personalizada para actualizar el registro de la productos
// Route::patch('/products/{product}', [ProductController::class, 'update'])-> name('products.update'); 
// // Ruta personalizada para eliminar el registro de la productos
// Route::delete('/products/{product}', [ProductController::class, 'destroy'])-> name('products.destroy'); 
// // Ruta personalizada para eliminar el registro de la productos
// Route::delete('/products/{product}', [ProductController::class, 'delete'])-> name('products.delete'); 

Route::post('/control', [ESP32Controller::class, 'control'])->name('control.esp32');

require __DIR__.'/auth.php';
