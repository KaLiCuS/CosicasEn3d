<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RoleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí puedes registrar las rutas de la aplicación.
|
*/

// Ruta para el formulario de contacto y enviar el mensaje
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'sendMail'])->name('contact.send');

// Ruta principal, generalmente la página de inicio
Route::get('/welcome', function () {
    return view('welcome');
})->name('home');

// Ruta para el dashboard, solo accesible por usuarios autenticados
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rutas para perfil de usuario autenticado
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Ruta para la sección de administración
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

// Ruta para "Quienes somos"
Route::get('quienes-somos', function () {
    return view('quienes-somos');
})->name('quienes-somos');

// Ruta para "Ubicación"
Route::get('ubicacion', function () {
    return view('ubicacion');
})->name('ubicacion');

// Ruta para el blog
Route::get('blog', function () {
    return view('blog');
})->name('blog');

// Ruta para el recurso de roles (CRUD)
Route::resource('/roles', RoleController::class);

// Asegúrate de que la autenticación esté habilitada
require __DIR__.'/auth.php';

?>